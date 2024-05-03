@extends('layouts.app')

@section('content')
    <div>
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="mb-8">
                <h1 class="text-3xl font-semibold">Items</h1>
            </div>
            <div class="w-full flex flex-col justify-between">
                <div>
                    <div class="mb-8 flex flex-row w-auto">
                        <img src="https://www.pluggedin.com/wp-content/uploads/2022/04/Sonic-the-Hedgehog-2-1024x587.jpg"
                            alt="" class="h-96 w-64 object-cover rounded-2xl mr-8">
                        <div class="h-auto w-full">
                            <div class="space-y-2">
                                <p class="font-semibold text-2xl">AA Face Mist</p>
                                <p class="text-xl">Rp 90.000</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum atque ex velit
                                    aliquid id, rem consequatur! Repudiandae maxime laborum consectetur rem maiores officiis
                                    ea accusantium similique impedit sequi? Corrupti.</p>
                            </div>
                            <div class="mt-12">
                                <div class="flex flex-cols items-center">
                                    <div>
                                        <p class="text-xl mr-4">Qty:</p>
                                    </div>
                                    <div class="flex items-center justify-between border-2 rounded-md border-yellow-200 text-right">
                                        <button type="button"
                                            class="bg-yellow-200 hover:bg-yellow-300 font-bold py-2 px-4 rounded"
                                            id="decrement">-</button>
                                        <span id="quantity" class="text-xl font-bold px-4">1</span>
                                        <button type="button"
                                            class="bg-yellow-200 hover:bg-yellow-300 font-bold py-2 px-4 rounded"
                                            id="increment">+</button>
                                    </div>
                                    <div class="w-full text-right">
                                        <p class="text-xl font-semibold">Rp 90.000</p>
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
                        <img src="https://www.pluggedin.com/wp-content/uploads/2022/04/Sonic-the-Hedgehog-2-1024x587.jpg"
                            alt="" class="h-96 w-64 object-cover rounded-2xl mr-8">
                        <div class="h-auto w-full">
                            <div class="space-y-2">
                                <p class="font-semibold text-2xl">AA Face Mist</p>
                                <p class="text-xl">Rp 90.000</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum atque ex velit
                                    aliquid id, rem consequatur! Repudiandae maxime laborum consectetur rem maiores officiis
                                    ea accusantium similique impedit sequi? Corrupti.</p>
                            </div>
                            <div class="mt-12">
                                <div class="flex flex-cols items-center">
                                    <div>
                                        <p class="text-xl mr-4">Qty:</p>
                                    </div>
                                    <div class="flex items-center justify-between border-2 rounded-md border-yellow-200 text-right">
                                        <button type="button"
                                            class="bg-yellow-200 hover:bg-yellow-300 font-bold py-2 px-4 rounded"
                                            id="decrement">-</button>
                                        <span id="quantity" class="text-xl font-bold px-4">1</span>
                                        <button type="button"
                                            class="bg-yellow-200 hover:bg-yellow-300 font-bold py-2 px-4 rounded"
                                            id="increment">+</button>
                                    </div>
                                    <div class="w-full text-right">
                                        <p class="text-xl font-semibold">Rp 90.000</p>
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
                        <img src="https://www.pluggedin.com/wp-content/uploads/2022/04/Sonic-the-Hedgehog-2-1024x587.jpg"
                            alt="" class="h-96 w-64 object-cover rounded-2xl mr-8">
                        <div class="h-auto w-full">
                            <div class="space-y-2">
                                <p class="font-semibold text-2xl">AA Face Mist</p>
                                <p class="text-xl">Rp 90.000</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum atque ex velit
                                    aliquid id, rem consequatur! Repudiandae maxime laborum consectetur rem maiores officiis
                                    ea accusantium similique impedit sequi? Corrupti.</p>
                            </div>
                            <div class="mt-12">
                                <div class="flex flex-cols items-center">
                                    <div>
                                        <p class="text-xl mr-4">Qty:</p>
                                    </div>
                                    <div class="flex items-center justify-between border-2 rounded-md border-yellow-200 text-right">
                                        <button type="button"
                                            class="bg-yellow-200 hover:bg-yellow-300 font-bold py-2 px-4 rounded"
                                            id="decrement">-</button>
                                        <span id="quantity" class="text-xl font-bold px-4">1</span>
                                        <button type="button"
                                            class="bg-yellow-200 hover:bg-yellow-300 font-bold py-2 px-4 rounded"
                                            id="increment">+</button>
                                    </div>
                                    <div class="w-full text-right">
                                        <p class="text-xl font-semibold">Rp 90.000</p>
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
                    <p class="text-2xl">Rp 400.000</p>
                </div>
                <div class="flex flex-rows justify-between mb-4">
                    <p class="text-2xl">Shipping Cost</p>
                    <p class="text-2xl">Rp 15.000</p>
                </div>
                <hr class="border-black mb-4">
                <div class="flex flex-rows justify-between mb-4">
                    <p class="text-2xl font-bold">Total Cost</p>
                    <p class="text-2xl font-bold">Rp 415.000</p>
                </div>
            </div>
        </div>
    </div>
@endsection
