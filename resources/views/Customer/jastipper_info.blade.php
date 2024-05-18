@extends('layouts.app')

@section('content')
    <div class="relative">
        <div class="bg-[url('{{ asset('assets/background.png') }}')] h-72 bg-cover relative">
            <div class="absolute inset-0 bg-gray-100 opacity-50"></div>
        </div>
        <div class="ml-[10px] mr-[10px] mx-auto p-4 absolute inset-0">
            <div>
                <div class="space-y-4 ps-4">
                    <a href="/"><img src="{{ asset('assets/back.png') }}" class="absolute mt-[20px] w-[20px]"></a>
                    <p class="font-semibold text-[38px] ml-[45px]">{{ $jastip->name }}</p>
                    <div class="w-full flex flex-cols items-center gap-x-7">
                        <img class="w-6 ml-[40px]" src="{{ asset('assets/map.png') }}" alt="">
                        <p class="text-[18px] font-semibold">{{ $jastip->location }} - Indonesia</p>
                    </div>
                    <div class="w-full flex flex-cols items-center gap-x-7">
                        <img class="w-8 ml-[36px]" src="{{ asset('assets/starBorder.png') }}" alt="">
                        <p class="ml-[-5px] text-[18px] font-semibold">{{ $jastip->rank }}/10</p>
                    </div>
                    <div class="absolute flex justify-end right-0 pr-32">
                        <a href="custChats"><img class="w-[55px] mt-[30px]" src="{{ asset('assets/chatIcon.png') }}"></a>
                    </div>
                </div>
                <div class="mt-8 flex flex-cols ps-8">
                    <img src="{{ asset('assets/ppCircle.png') }}" alt="Your Image" class="rounded-full w-48 border-2 mr-8">
                    <div class="absolute ml-[240px] mt-[150px] flex items-end pb-6">
                        <button type="button"
                            class="h-[30px] w-[100px] absolute text-white bg-[#69A197] drop-shadow-md hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-[#69A197] dark:hover:bg-[#69A197] focus:outline-none dark:focus:ring-[#69A197]"><img
                                src="{{ asset('assets/searchIcon.png') }}"
                                class="absolute w-[30px] ml-[-15px] mt-[-15px]"><a
                                class="absolute ml-[-10px] mt-[-12px] text-[14px]">Search</a></button>
                        <button type="button"
                            class="h-[30px] w-[100px] absolute ml-[110px] text-white bg-[#69A197] drop-shadow-md hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-[#69A197] dark:hover:bg-[#69A197] focus:outline-none dark:focus:ring-[#69A197]"><img
                                src="{{ asset('assets/filterIcon.png') }}"
                                class="absolute w-[20px] ml-[-10px] mt-[-10px]"><a
                                class="absolute ml-[-5px] mt-[-12px] text-[14px]">Filter</a></button>
                        <button type="button"
                            class="h-[30px] w-[110px] absolute ml-[220px] text-white bg-[#69A197] drop-shadow-md hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-[#69A197] dark:hover:bg-[#69A197] focus:outline-none dark:focus:ring-[#69A197]"><img
                                src="{{ asset('assets/tag.png') }}" class="absolute w-[20px] ml-[-10px] mt-[-10px]"><a
                                class="absolute ml-[-15px] mt-[-12px] text-[14px]">Discount</a></button>
                    </div>
                </div>
            </div>
            <div class="grid-rows-2 mt-8 pb-8 ml-[10px] mr-[10px]">
                <div class="flex flex-wrap ml-[30px]">
                    @foreach ($jastips as $product)
                        <div class="w-1/4 mb-8">
                            <form action="{{ route('customer.cart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="productId" value="{{ $product->id }}">
                                <div class="flex items-center justify-between mb-4">
                                    <img src="{{ asset('assets/image/'. $product->picture) }}" alt=""
                                        class="h-[250px] w-[230px] object-cover rounded-2xl mr-8">
                                    <button type="submit" class="absolute ml-[185px] mt-[210px]">
                                        <img src="{{ asset('assets/addToCart.png') }}" class="w-[30px]">
                                    </button>
                                </div>
                                <div class="flow-root space-y-4">
                                    <div class="flex items-center">
                                        <div class="space-y-2">
                                            <p class="font-medium text-2xl">{{ $product->product_name }}</p>
                                            <p class="text-xl">Rp {{ number_format($product->price, 0, ',', '.') }},-</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
