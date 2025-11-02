<x-app-layout>
    
    <div class="py-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-xl mx-auto shadow-lg overflow-hidden">

                <div class="py-8 lg:py-10 px-12">
                    <x-back-button></x-back-button>
                    <h2 class="text-3xl mb-4">Add New Invoice</h2>
                    <p class="mb-4">Please fill the form below to add new invoice to this platform</p>
                    <form action="{{ route('invoices.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-10">
                            <div>
                                <x-input-label for="customer_id" :value="__('Customer')" />
                                <select name="customer_id" id="customer_id" class="mt-1 block w-full border-gray-300 rounded-md">
                                    <option value="">-- Select Customer --</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('customer_id')" />
                            </div>
                            <div>
                                <x-input-label for="product_id" :value="__('Product (single product only)')" />
                                <select name="product_id" id="product_id" class="mt-1 block w-full border-gray-300 rounded-md">
                                    <option value="">-- Select Product --</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('product_id')" />
                            </div>
                            <div>
                                <x-input-label for="quantity" :value="__('Select Quantity')" />
                                <x-text-input id="quantity" name="quantity" type="number" class="mt-1 block w-full" placeholder="Enter Quantity" min="1"/>
                                <x-input-error class="mt-2" :messages="$errors->get('quantity')" />
                            </div>
                            <div>
                                <x-input-label for="total_amount" :value="__('Total amount (in INR)')" />
                                <x-text-input id="total_amount" name="total_amount" class="mt-1 block w-full" readonly></x-text-input>
                                <x-input-error class="mt-2" :messages="$errors->get('total_amount')" />
                            </div>
                            <div>
                                <x-input-label for="invoice_date" :value="__('Invoice Date')" />
                                <x-text-input type="date" id="invoice_date" name="invoice_date" class="mt-1 block w-full"></x-text-input>
                                <x-input-error class="mt-2" :messages="$errors->get('invoice_date')" />
                            </div>
                            <div>
                                <x-input-label for="due_date" :value="__('Due Date')" />
                                <x-text-input type="date" id="due_date" name="due_date" class="mt-1 block w-full"></x-text-input>
                                <x-input-error class="mt-2" :messages="$errors->get('due_date')" />
                            </div>
                        </div>

                            
                        <x-primary-button>{{ __('Save Invoice') }}</x-primary-button>
                    </form>
                </div>

                <script>
                    const productSelect = document.getElementById('product_id');
                    const quantityInput = document.getElementById('quantity');
                    const totalAmountField = document.getElementById('total_amount');
                    
                    function calculateTotal(){
                        const selectedOption = productSelect.options[product_id.selectedIndex];
                        const price = parseFloat(selectedOption.getAttribute('data-price') || 0);
                        const quantity = parseInt(quantityInput.value) || 1;
                        totalAmountField.value = (price * quantity);
                    }

                    productSelect.addEventListener('change', calculateTotal);
                    quantityInput.addEventListener('input', calculateTotal);
                </script>

            </div>
        </div>
    </div>
</x-app-layout>