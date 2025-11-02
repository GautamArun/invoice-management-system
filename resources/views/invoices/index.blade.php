<x-app-layout>

    <div class="py-8 overflow-x-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-w-[1000px]">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-5">
                        <a href="{{ route('invoices.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-xl">Invoice +</a>
                    </div>

                    
                    
                    <table class="w-full border border-gray-200 rounded">
                        <thead class="bg-gray-100">
                            <tr class="text-center">
                                <th class="p-2">Sl no.</th>
                                <th class="p-2">Customer</th>
                                <th class="p-2">Product</th>
                                <th class="p-2">Quantity</th>
                                <th class="p-2">Invoice Date</th>
                                <th class="p-2">Total Amount</th>
                                <th class="p-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $index => $invoice)
                                <tr class="border-t text-center">
                                    <td class="p-2">{{ $index + 1 }}</td>
                                    <td class="p-2">{{ $invoice->customer->name }}</td>
                                    <td class="p-2">{{ $invoice->product->name }}</td>
                                    <td class="p-2">{{ $invoice->quantity }}</td>
                                    <td class="p-2">{{ $invoice->invoice_date }}</td>
                                    <td class="p-2">{{ $invoice->total_amount }}</td>
                                    <td class="p-2">
                                        <a href="{{ route('invoices.show', $invoice) }}">View</a>
                                        <a href="{{ route('invoices.edit', $invoice) }}">Edit</a>
                                        <form action="{{ route('invoices.destroy', $invoice) }}" method="POST" class="inline">
                                            @csrf @method('DELETE')
                                            <button class="text-red-600" onclick="return confirm('Are you sure you want to delete this invoice?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $invoices->links() }}
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>