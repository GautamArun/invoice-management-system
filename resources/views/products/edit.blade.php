<x-app-layout>
    
    <div class="py-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-xl mx-auto shadow-lg overflow-hidden">

                <div class="py-8 lg:py-10 px-12">
                    <x-back-button></x-back-button>
                    <h2 class="text-3xl mb-4">Edit Product Details</h2>
                    <p class="mb-4">Please edit the fields as per requirement</p>

                    <form action="{{ route('products.update' , $product) }}" method="POST" class="space-y-4">
                        @csrf @method('PUT')
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-10">
                            <div>
                                <x-input-label for="name" :value="__('Product Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $product->name)"/>
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div>
                                <x-input-label for="price" :value="__('Phone Number')" />
                                <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" :value="old('price', $product->price)"/>
                                <x-input-error class="mt-2" :messages="$errors->get('price')" />
                            </div>
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input name="description" id="description" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm m-1" :value="old('description', $product->description)" />
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>
                            
                        <x-primary-button>{{ __('Update') }}</x-primary-button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>