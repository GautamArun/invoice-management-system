<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Customers') }}
        </h2>
    </x-slot> --}}
    
    <div class="py-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-xl mx-auto shadow-lg overflow-hidden">

                <div class="py-8 lg:py-10 px-12">
                    <x-back-button></x-back-button>
                    <h2 class="text-3xl mb-4">Edit Customer Details</h2>
                    <p class="mb-4">Please edit the fields as per requirement</p>

                    <form action="{{ route('customers.update' , $customer) }}" method="POST" class="space-y-4">
                        @csrf @method('PUT')
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-10">
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $customer->name)"/>
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $customer->email)"/>
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>
                            <div>
                                <x-input-label for="phone" :value="__('Phone Number')" />
                                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $customer->phone)"/>
                                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                            </div>
                        </div>

                        <div>
                            <x-input-label for="address" :value="__('Address')" />
                            <x-text-input name="address" id="address" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm m-1" :value="old('address', $customer->address)" />
                            <x-input-error class="mt-2" :messages="$errors->get('address')" />
                        </div>
                            
                        <x-primary-button>{{ __('Update') }}</x-primary-button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>