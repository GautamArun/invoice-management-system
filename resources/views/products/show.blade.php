<x-app-layout>

    <div class="py-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-xl mx-auto shadow-lg overflow-hidden">

                <div class="py-8 lg:py-10 px-12">
                    <x-back-button></x-back-button>
                    <h2 class="text-3xl mb-4">Product Details</h2>
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-10">
                            <div>
                                <x-input-label :value="__('Product Name')" />
                                <x-text-input class="mt-1 block w-full" :value="old('name', $product->name)" readonly/>
                            </div>
                            <div>
                                <x-input-label :value="__('Product Price')" />
                                <x-text-input class="mt-1 block w-full" :value="old('price', $product->price)" readonly/>
                            </div>
                        </div>

                        <div>
                            <x-input-label :value="__('Description')" />
                            <x-text-input class="mt-1 block w-full" :value="old('description', $product->description)" readonly></x-text-input>
                        </div>
                            
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>