<x-app-layout>

    <div class="py-8 overflow-x-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-w-[1000px]">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-5">
                        <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-xl">Product +</a>
                    </div>

                    
                    
                    <table class="w-full border border-gray-200 rounded">
                        <thead class="bg-gray-100">
                            <tr class="text-center">
                                <th class="p-2">Sl no.</th>
                                <th class="p-2">Product Name</th>
                                <th class="p-2">Price</th>
                                <th class="p-2">Description</th>
                                <th class="p-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $index => $product)
                                <tr class="border-t text-center">
                                    <td class="p-2">{{ $index + 1 }}</td>
                                    <td class="p-2">{{ $product->name }}</td>
                                    <td class="p-2">{{ $product->price }}</td>
                                    <td class="p-2">{{ $product->description }}</td>
                                    <td class="p-2">
                                        <a href="{{ route('products.show', $product) }}">View</a>
                                        <a href="{{ route('products.edit', $product) }}">Edit</a>
                                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                            @csrf @method('DELETE')
                                            <button class="text-red-600" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>