@extends('layouts.jastipperView')

@section('content')
    <div class="bg-yellow-100 min-h-screen">
        <div class="max-w-screen-xl mx-auto p-4">
            <div>
                <h1 class="text-3xl font-semibold mt-[35px]">Good Morning, Julie</h1>
            </div>
            {{-- <div class="mt-[30px]">
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[1180px] h-[80px] pt-[10px] pl-[25px] text-black bg-white shadow-xl hover:bg-white focus:ring-4 focus:outline-none focus:ring-slate-100 font-medium rounded-lg text-[18px] px-5 py-2.5 text-center inline-flex items-center" type="button">Notes<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
    
                    <div id="dropdown" class="w-[1180px] z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-black dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100"><img src="{{ asset('assets/plus-circle.png') }}" class="w-[20px] absolute"><p class="ml-[30px]">Add Notes</p></a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100"><img src="{{ asset('assets/seeNotes.png') }}" class="w-[20px] absolute"><p class="ml-[30px]">See Notes</p></a>
                        </li>
                        </ul>
                    </div>
                </div>
    
                <div class="mt-[30px]">
                    <button id="dropdownPost" data-dropdown-toggle="dropdownP" class="w-[1180px] h-[80px] pt-[10px] pl-[25px] text-black bg-white shadow-xl hover:bg-white focus:ring-4 focus:outline-none focus:ring-slate-100 font-medium rounded-lg text-[18px] px-5 py-2.5 text-center inline-flex items-center" type="button">Posts<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
    
                    <div id="dropdownP" class="w-[1180px] z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-black dark:text-gray-200" aria-labelledby="dropdownPost">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100"><img src="{{ asset('assets/plus-circle.png') }}" class="w-[20px] absolute"><p class="ml-[30px]">Add Post</p></a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100"><img src="{{ asset('assets/seePost.png') }}" class="w-[20px] absolute"><p class="ml-[30px]">See Post</p></a>
                        </li>
                        </ul>
                    </div>
                </div> --}}

            <h1 class="text-2xl font-semibold ml-[5px] mt-[50px]">Orders</h1>
            <hr class="border-black flex-grow ml-[5px] mt-[20px]">

            <div class="mt-8 flex flex-wrap gap-4">
                @foreach ($orders as $order)
                    <div class="w-[300px] max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex-1 min-w-0">
                                <p class="text-2xl font-medium">
                                    {{ $order->buyer->name }}
                                </p>
                            </div>
                        </div>
                        <div class="flow-root space-y-4">
                            @foreach ($order->orderDetails as $item)
                                <div class="flex items-center">
                                    <div class="flex justify-between w-full">
                                        <p>{{ $item->jastip_product->product->product_name }}</p>
                                        <p>{{ $item->quantity }}x</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
