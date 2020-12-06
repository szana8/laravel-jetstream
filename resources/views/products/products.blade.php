<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-4 flex justify-between items-center">
                        <h1 class="text-2xl font-semibold">Products</h1>
                        <div class="flex">
                            <a href="{{ route('product.create') }}" class="ml-6 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-900 hover:bg-blue-900">Add products</a>
                        </div>
                    </div>
                    <div class="p-4 w-full">
                        <table class="w-full">
                            <thead class="text-xs text-gray-600 border-b border-b-gray-500">
                            <tr class="">
                                <th class="text-left font-thin uppercase py-4">Name</th>
                                <th class="w-64 text-right font-thin uppercase py-4">Updated</th>
                                <th class="w-16 py-4"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr class="hover:bg-gray-50 cursor-pointer border-b border-b-gray-500">
                                        <td class="py-4 text-gray-600">
                                            {{ $product->name }}
                                            <div class="text-xs">
                                                {{ $product->prices->first()->currency . ' ' . $product->prices->sum('price') . ' / ' . $product->prices->first()->billing_period }}
                                            </div>
                                        </td>
                                        <td class="text-right text-sm text-gray-600">{{ $product->updated_at->diffForHumans() }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
