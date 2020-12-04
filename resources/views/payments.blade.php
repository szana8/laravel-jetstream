<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4 flex justify-between items-center">
                    <h1 class="text-2xl font-semibold">Payments</h1>
                    <div class="flex">
                        <button class="ml-6 whitespace-nowrap text-base rounded shadow px-4 py-2 font-medium text-gray-500 hover:text-gray-900">Filter</button>
                        <button class="ml-6 whitespace-nowrap text-base rounded shadow px-4 py-2 font-medium text-gray-500 hover:text-gray-900">Export Prices</button>
                        <button class="ml-6 whitespace-nowrap text-base rounded shadow px-4 py-2 font-medium text-gray-500 hover:text-gray-900">Export Products</button>
                        <button class="ml-6 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-900 hover:bg-blue-900">Add payment</button>
                    </div>
                </div>
            </div>

            <div class="py-12">
                <div class="flex items-stretch">
                    <div class="bg-white w-1/3 shadow-xl rounded mx-2 py-2 px-4">
                        <h3 class="font-semibold text-blue-900">Paypal</h3>
                        <p class="font-light text-gray-500 text-xs">With PayPal, you can send, spend and manage your money with just one account.</p>
                        <img class="h-24" style="-webkit-user-select: none;margin: auto;cursor: zoom-in;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/PayPal_Logo_Icon_2014.svg/666px-PayPal_Logo_Icon_2014.svg.png">
                        <button class="w-full bg-blue-900 text-white rounded py-2 mt-2">Activate</button>
                    </div>
                    <div class="bg-white w-1/3 shadow-xl rounded mx-2 py-2 px-4">
                        <h3 class="font-semibold text-blue-900">iDeal</h3>
                        <p class="font-light text-gray-500 text-xs">iDEAL is an online payment method that enables consumers to pay online through their own bank.</p>
                        <img class="h-24" style="-webkit-user-select: none;margin: auto;cursor: zoom-in;" src="https://cdn.freebiesupply.com/logos/large/2x/ideal-logo-png-transparent.png">
                        <button class="w-full bg-blue-900 text-white rounded py-2 mt-2 self-end">Activate</button>
                    </div>
                    <div class="bg-white w-1/3 shadow-xl rounded mx-2 py-2 px-4">
                        <h3 class="font-semibold text-blue-900">Bancotact</h3>
                        <p class="font-light text-gray-500 text-xs">Paying small amounts very easily? With Bancontact it is simple and fast.</p>
                        <img class="h-24" style="-webkit-user-select: none;margin: auto;cursor: zoom-in;" src="https://www.bancontact.com/img/bancontact/logo.svg">
                        <button class="w-full bg-blue-900 text-white rounded py-2 mt-2">Activate</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
