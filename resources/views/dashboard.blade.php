<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <div class="p-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="text-gray-900 dark:text-gray-100 product-container dark:bg-gray-800">
            <img src="{{ asset('images/test.png') }}" alt="test photo">
            <div class="text-container">
                {{ __("sample product!") }}
                <div class="price-container">
                    <span>₱20</span>
                    <span>10k+ sold</span>
                </div>
            </div>
        </div>
    </div>
    <style>
        img{
            max-height:200px;
            width:100%;
        }
        div.text-container{
            padding:10px;
            width:100%;
        }
        div.product-container{
            max-width:200px;
            display:flex;
            align-items: center;
            flex-direction: column;
            text-align: center;
            border-radius:10px;
        }
        div.price-container{
            display:flex;
            justify-content: space-between;
            flex-direction: row;
            margin-top:20px;
        }
    </style>
</x-app-layout>
