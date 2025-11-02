<x-app-layout>
    
    <div class="py-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-xl mx-auto shadow-lg overflow-hidden">

                <div class="py-8 lg:py-10 px-12">
                    <x-back-button></x-back-button>
                    <h2 class="text-3xl mb-4">Add Product</h2>
                    <p class="mb-4">Please fill the form below to add new product to this platform</p>
                    <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-10">
                            <div>
                                <x-input-label for="name" :value="__('Product Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" placeholder="Enter Name"/>
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div>
                                <x-input-label for="price" :value="__('Product Price')" />
                                <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" placeholder="Enter price in INR"/>
                                <x-input-error class="mt-2" :messages="$errors->get('price')" />
                            </div>
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea name="description" id="description" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm m-1" placeholder="Enter Description..."></textarea>
                            <x-input-error :messages="$errors->get('description')" />
                        </div>
                            
                        <x-primary-button>{{ __('Submit') }}</x-primary-button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>