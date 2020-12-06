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
                        <h2 class="text-2xl font-semibold">Product information</h2>
                    </div>
                    <div class="p-4 items-center">
                        <form action="{{ route('product.store') }}" class="" method="POST">
                            @csrf

                            <div class="my-4">
                                <label for="name" class="font-semibold text-gray-600">Name</label>
                                <input type="text" id="name" name="name" class="block border border-gray-300 rounded py-1 px-2 w-1/3" placeholder="Premium Plan, sunglasses, etc">
                            </div>
                            <div class="my-8">
                                <label for="description" class="font-semibold text-gray-600">Description</label>
                                <textarea name="description" id="description" class="block border border-gray-300 rounded py-1 px-2 w-1/3"></textarea>
                            </div>

                            <h2 class="text-2xl font-semibold">Pricing</h2>

                            <div class="my-8">
                                <label for="model" class="font-semibold text-gray-600">Pricing model</label>
                                <select name="model" id="model" class="appearance-none mt-1 block w-1/3 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="standard">Standard Pricing</option>
                                    <option value="package">Package Pricing</option>
                                </select>
                            </div>

                            <div class="my-4">
                                <label for="price" class="font-semibold text-gray-600">Price</label>
                                <input type="text" id="price" name="price" class="block border border-gray-300 rounded py-1 px-2 w-1/3">
                            </div>

                            <div class="my-8">
                                <label for="billing_period" class="font-semibold text-gray-600">Billing period</label>
                                <select name="billing_period" id="billing_period" class="appearance-none mt-1 block w-1/3 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="monthly">Monthly</option>
                                    <option value="yearly">Yearly</option>
                                </select>
                            </div>

                            <div class="my-8 block">
                                <button type="submit" class="bg-blue-900 py-1 px-2 text-white rounded">Save</button>
                                <a href="/products" class="bg-white py-1 px-2 text-blue-900 rounded">Cancel</a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
