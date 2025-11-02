<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer') }}
        </h2>
    </x-slot> --}}

    <div class="py-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-xl mx-auto shadow-lg overflow-hidden">

                <div class="py-8 lg:py-10 px-12">
                    <x-back-button></x-back-button>
                    <h2 class="text-3xl mb-4">Customer Details</h2>
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-10">
                            <div>
                                <x-input-label :value="__('Name')" />
                                <x-text-input class="mt-1 block w-full" :value="old('name', $customer->name)" readonly/>
                            </div>
                            <div>
                                <x-input-label :value="__('Email')" />
                                <x-text-input class="mt-1 block w-full" :value="old('email', $customer->email)" readonly/>
                            </div>
                            <div>
                                <x-input-label :value="__('Phone Number')" />
                                <x-text-input class="mt-1 block w-full" :value="old('phone', $customer->phone)" readonly/>
                            </div>
                        </div>

                        <div>
                            <x-input-label :value="__('Address')" />
                            <x-text-input class="mt-1 block w-full" :value="old('address', $customer->address)" readonly></x-text-input>
                        </div>
                            
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>