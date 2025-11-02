<x-app-layout>

    <div class="py-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-xl mx-auto shadow-lg overflow-hidden">

                <div class="py-8 lg:py-10 px-12">
                    <x-back-button></x-back-button>
                    <h2 class="text-3xl mb-4">Invoice Details</h2>
                    <div class="space-y-4">
                        <div>
                            <div>
                                <x-input-label :value="__('Customer')" />
                                <x-text-input class="mt-1 block w-full md:w-1/2" :value="old('customer', $invoice->customer->name)" readonly/>
                            </div>

                            <div class="bg-gray-100 p-6 mt-5 mb-3">
                                <h3 class="text-xl mb-2">Product Details</h2>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <x-input-label :value="__('Product')" />
                                        <x-text-input class="mt-1 block w-full" :value="old('product', $invoice->product->name)" readonly/>
                                    </div>
                                    <div>
                                        <x-input-label :value="__('Product Price')" />
                                        <x-text-input class="mt-1 block w-full" :value="old('product_price', $invoice->product->price)" readonly/>
                                    </div>
                                    <div>
                                        <x-input-label :value="__('Description')" />
                                        <x-text-input class="mt-1 block w-full" :value="old('description', $invoice->product->description)" readonly/>
                                    </div>
                                    <div>
                                        <x-input-label :value="__('Quantity')" />
                                        <x-text-input class="mt-1 block w-full" :value="old('quantity', $invoice->quantity)" readonly/>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-6">
                                <div>
                                    <x-input-label :value="__('Total Amount')" />
                                    <x-text-input class="mt-1 block w-full" :value="old('total_amount', $invoice->total_amount)" readonly/>
                                </div>
                                <div>
                                    <x-input-label :value="__('Invoice Date')" />
                                    <x-text-input class="mt-1 block w-full" :value="old('invoice_date', $invoice->invoice_date)" readonly/>
                                </div>
                                <div>
                                    <x-input-label :value="__('Due Date')" />
                                    <x-text-input class="mt-1 block w-full" :value="old('due_date', $invoice->due_date)" readonly/>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>