@extends('layouts.app')

@section('content')
    <div class="max-w-screen-xl mx-auto mb-12">
        <h1 class="text-2xl font-semibold mt-[50px]">Current Orders</h1>
        <hr class="border-black flex-grow mt-[20px]">

        <div>
            <div class="ml-[80px] mt-[50px] absolute w-[75%] h-[100px] pb-8 bg-gray-100 rounded-[18px] shadow-l">
                <p class="pl-[35px] pt-[34px] text-[20px]">Order 1</p>
                <hr class="border-black w-[55px] rotate-90 ml-[100px] mr-[50px] mt-[-15px]">
                <p class="ml-[50px] pt-[15px]"><img src="{{ asset('assets/starBorder.png') }}"
                        class="z-[2] mt-[-25px] ml-[100px] w-[25px]"><img src="{{ asset('assets/starBorder.png') }}"
                        class="mt-[-25px] ml-[122px] w-[25px]"><img src="{{ asset('assets/starBorder.png') }}"
                        class="z-[2] mt-[-25px] ml-[144px] w-[25px]"><img src="{{ asset('assets/starBorder.png') }}"
                        class="z-[2] mt-[-25px] ml-[166px] w-[25px]"><img src="{{ asset('assets/starBorder.png') }}"
                        class="z-[2] mt-[-25px] ml-[188px] w-[25px]"></p>
                <button type="button"
                    class="absolute ml-[900px] mt-[-30px] text-white bg-[#69A197] hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-[#69A197] dark:hover:bg-[#69A197] focus:outline-none dark:focus:ring-[#69A197]"><a
                        href="{{ route('incomplete') }}">Give rating</a></button>
            </div>
            <div class="ml-[80px] mt-[180px] absolute w-[75%] h-[100px] pb-8 bg-gray-100 rounded-[18px] shadow-l">
                <p class="pl-[35px] pt-[34px] text-[20px]">Order 2</p>
                <hr class="border-black w-[55px] rotate-90 ml-[100px] mr-[50px] mt-[-15px]">
                <p class="absolute ml-[150px] mt-[-15px] text-[20px]">Completed</p>
                <p class="absolute ml-[925px] mt-[-15px] text-[20px]">Done</p>
            </div>
            <div class="ml-[80px] mt-[310px] absolute w-[75%] h-[100px] pb-8 bg-gray-100 rounded-[18px] shadow-l">
                <p class="pl-[35px] pt-[34px] text-[20px]">Order 3</p>
                <hr class="border-black w-[55px] rotate-90 ml-[100px] mr-[50px] mt-[-15px]">
                <p class="absolute ml-[920px] mt-[-15px] text-[20px]">Pending</p>
            </div>
        </div>

        <h1 class="text-2xl font-semibold mt-[450px]">Completed Orders</h1>
        <hr class="border-black flex-grow mt-[20px]">

        {{-- <button type="button" class="h-[30px] w-[100px] absolute ml-[70px] mt-[30px] text-white bg-[#69A197] hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2"><img src="{{ asset('assets/searchIcon.png') }}" class="absolute w-[30px] ml-[-15px] mt-[-15px]"><a class="absolute ml-[-10px] mt-[-12px] text-[14px]">Search</a></button>
        <button type="button" class="h-[30px] w-[100px] absolute ml-[180px] mt-[30px] text-white bg-[#69A197] hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2"><img src="{{ asset('assets/filterIcon.png') }}" class="absolute w-[20px] ml-[-10px] mt-[-10px]"><a class="absolute ml-[-5px] mt-[-12px] text-[14px]">Filter</a></button> --}}

            <div class="w-full overflow-y-auto px-4 py-8 flex flex-wrap justify-between gap-4">
            <img src="{{ asset('assets/order1.png') }}" class="bg-gray-100 rounded-lg">
            <img src="{{ asset('assets/order2.png') }}" class="bg-gray-100 rounded-lg">
            <img src="{{ asset('assets/order3.png') }}" class="bg-gray-100 rounded-lg">
            <img src="{{ asset('assets/order1.png') }}" class="bg-gray-100 rounded-lg">
        </div>
    </div>
@endsection
