<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot> --}}

    <div class="py-8 overflow-x-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-w-[1000px]">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-5">
                        <a href="{{ route('customers.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-xl">Customer +</a>
                    </div>
           
                    <table class="w-full border border-gray-200 rounded">
                        <thead class="bg-gray-100">
                            <tr class="text-center">
                                <th class="p-2">Sl no.</th>
                                <th class="p-2">Name</th>
                                <th class="p-2">Email</th>
                                <th class="p-2">Phone</th>
                                <th class="p-2">Address</th>
                                <th class="p-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $index => $customer)
                                <tr class="border-t text-center">
                                    <td class="p-2">{{ $index + 1 }}</td>
                                    <td class="p-2">{{ $customer->name }}</td>
                                    <td class="p-2">{{ $customer->email }}</td>
                                    <td class="p-2">{{ $customer->phone }}</td>
                                    <td class="p-2">{{ $customer->address }}</td>
                                    <td class="p-2">
                                        <a href="{{ route('customers.show', $customer) }}">View</a>
                                        <a href="{{ route('customers.edit', $customer) }}">Edit</a>
                                        <form action="{{ route('customers.destroy', $customer) }}" method="POST" class="inline">
                                            @csrf @method('DELETE')
                                            <button class="text-red-600" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $customers->links() }}
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>