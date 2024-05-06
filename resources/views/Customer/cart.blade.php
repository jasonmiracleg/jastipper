@extends('layouts.app')

@section('content')
    <div>
        <div class="ml-[10px] mr-[10px] p-4">
            <div class="mb-8">
                <h1 class="text-3xl font-semibold">Items</h1>
            </div>
            <div class="w-full flex flex-col justify-between">
                <div>
                    <div class="mb-8 flex flex-row w-auto">
                        <img src="{{ asset('assets/aaFaceMist.png') }}" alt=""
                            class="h-86 w-64 object-cover rounded-2xl mr-8">
                        <div class="h-auto w-full">
                            <div class="space-y-2">
                                <p class="font-semibold text-2xl">AA Face Mist</p>
                                <p class="text-xl">Rp 99.900</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum atque ex velit
                                    aliquid id, rem consequatur! Repudiandae maxime laborum consectetur rem maiores officiis
                                    ea accusantium similique impedit sequi? Corrupti.</p>
                            </div>
                            <div class="mt-12">
                                <div class="flex flex-cols items-center">
                                    <div>
                                        <p class="text-xl mr-4">Qty:</p>
                                    </div>
                                    <div class="flex items-center justify-between rounded-md border-yellow-200 text-right">
                                        <button type="button"
                                            class="bg-[#69A197] hover:bg-[#69A197] font-bold py-1.5 px-4 rounded text-[18px] text-white"
                                            id="decrement">-</button>
                                        <span id="quantity" class="text-xl font-bold px-8">1</span>
                                        <button type="button"
                                            class="bg-[#69A197] hover:bg-[#69A197] font-bold py-1.5 px-4 rounded text-[18px] text-white"
                                            id="increment">+</button>
                                    </div>
                                    <div class="w-full text-right">
                                        <p class="text-xl font-semibold">Rp 99.900</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-black mb-8">
            <div class="w-full flex flex-col justify-between">
                <div>
                    <div class="mb-8 flex flex-row w-auto">
                        <img src="{{ asset('assets/sukinFaceWash.png') }}" alt=""
                            class="h-86 w-64 object-cover rounded-2xl mr-8">
                        <div class="h-auto w-full">
                            <div class="space-y-2">
                                <p class="font-semibold text-2xl">Sukin Face Wash</p>
                                <p class="text-xl">Rp 130.000</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum atque ex velit
                                    aliquid id, rem consequatur! Repudiandae maxime laborum consectetur rem maiores officiis
                                    ea accusantium similique impedit sequi? Corrupti.</p>
                            </div>
                            <div class="mt-12">
                                <div class="flex flex-cols items-center">
                                    <div>
                                        <p class="text-xl mr-4">Qty:</p>
                                    </div>
                                    <div class="flex items-center justify-between rounded-md border-yellow-200 text-right">
                                        <button type="button"
                                            class="bg-[#69A197] hover:bg-[#69A197] font-bold py-1.5 px-4 rounded text-[18px] text-white"
                                            id="decrement">-</button>
                                        <span id="quantity" class="text-xl font-bold px-8">2</span>
                                        <button type="button"
                                            class="bg-[#69A197] hover:bg-[#69A197] font-bold py-1.5 px-4 rounded text-[18px] text-white"
                                            id="increment">+</button>
                                    </div>
                                    <div class="w-full text-right">
                                        <p class="text-xl font-semibold">Rp 260.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-black mb-8">
            <div class="w-full flex flex-col justify-between">
                <div>
                    <div class="mb-8 flex flex-row w-auto">
                        <img src="{{ asset('assets/lemonOil.png') }}" alt=""
                            class="h-86 w-64 object-cover rounded-2xl mr-8">
                        <div class="h-auto w-full">
                            <div class="space-y-2">
                                <p class="font-semibold text-2xl">Lemon Oil</p>
                                <p class="text-xl">Rp 89.000</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum atque ex velit
                                    aliquid id, rem consequatur! Repudiandae maxime laborum consectetur rem maiores officiis
                                    ea accusantium similique impedit sequi? Corrupti.</p>
                            </div>
                            <div class="mt-12">
                                <div class="flex flex-cols items-center">
                                    <div>
                                        <p class="text-xl mr-4">Qty:</p>
                                    </div>
                                    <div class="flex items-center justify-between rounded-md border-yellow-200 text-right">
                                        <button type="button"
                                            class="bg-[#69A197] hover:bg-[#69A197] font-bold py-1.5 px-4 rounded text-[18px] text-white"
                                            id="decrement">-</button>
                                        <span id="quantity" class="text-xl font-bold px-8">1</span>
                                        <button type="button"
                                            class="bg-[#69A197] hover:bg-[#69A197] font-bold py-1.5 px-4 rounded text-[18px] text-white"
                                            id="increment">+</button>
                                    </div>
                                    <div class="w-full text-right">
                                        <p class="text-xl font-semibold">Rp 89.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-black mb-8">
            <div class="w-full">
                <div>
                    <h1 class="text-3xl font-semibold mb-8">Payment</h1>
                </div>
                <div class="flex flex-rows justify-between mb-4">
                    <p class="text-2xl">Subtotal</p>
                    <p class="text-2xl">Rp 449.900</p>
                </div>
                <div class="flex flex-rows justify-between mb-4">
                    <p class="text-2xl">Shipping Cost</p>
                    <p class="text-2xl">Rp 15.000</p>
                </div>
                <hr class="border-black mb-4">
                <div class="flex flex-rows justify-between mb-4">
                    <p class="text-2xl font-bold">Total Cost</p>
                    <p class="text-2xl font-bold">Rp 464.900</p>
                </div>
                <div>
                    <button type="button"
                        class="right-0 mt-[10px] text-white bg-[#69A197] hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-[#69A197] dark:hover:bg-[#69A197] focus:outline-none dark:focus:ring-[#69A197]"><a
                            href="#" class="text-[20px]">Checkout</a></button>
                </div>
                <br></br>
            </div>
        </div>
    </div>
@endsection
