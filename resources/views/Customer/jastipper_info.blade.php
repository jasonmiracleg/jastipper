@extends('layouts.app')

@section('content')
    <div class="relative">
        <div class="bg-[url('{{ asset('assets/wallpaper.jpg') }}')] h-72 bg-cover relative">
            <div class="absolute inset-0 bg-gray-100 opacity-50"></div>
        </div>
        <div class="max-w-screen-xl mx-auto p-4 absolute inset-0">
            <div>
                <div class="space-y-4">
                    <p class="font-semibold text-2xl">Julie</p>
                    <div class="w-full flex flex-cols items-center gap-x-7">
                        <img class="w-8 h-8" src="{{ asset('assets/map.png') }}" alt="">
                        <p>Jakarta</p>
                    </div>
                    <div class="w-full flex flex-cols items-center gap-x-7">
                        <img class="w-8 h-8" src="{{ asset('assets/map.png') }}" alt="">
                        <p>5/5</p>
                    </div>
                </div>
                <div class="mt-8 flex flex-cols">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                        alt="Your Image" class="rounded-full h-48 w-48 border-2 mr-8">
                    <div class="flex items-end pb-6 gap-10">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded">Chat</button>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded">Search</button>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded">Filter</button>
                        <button
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded">Discount</button>
                    </div>
                </div>
            </div>
            <div class="mt-8 pb-8">
                <div class="flex flex-wrap">
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="https://www.pluggedin.com/wp-content/uploads/2022/04/Sonic-the-Hedgehog-2-1024x587.jpg"
                                alt="" class="h-80 w-72 object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">AA Face Mist</p>
                                    <p class="text-xl">Rp 90.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="https://www.pluggedin.com/wp-content/uploads/2022/04/Sonic-the-Hedgehog-2-1024x587.jpg"
                                alt="" class="h-80 w-72 object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">AA Face Mist</p>
                                    <p class="text-xl">Rp 90.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="https://www.pluggedin.com/wp-content/uploads/2022/04/Sonic-the-Hedgehog-2-1024x587.jpg"
                                alt="" class="h-80 w-72 object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">AA Face Mist</p>
                                    <p class="text-xl">Rp 90.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="https://www.pluggedin.com/wp-content/uploads/2022/04/Sonic-the-Hedgehog-2-1024x587.jpg"
                                alt="" class="h-80 w-72 object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">AA Face Mist</p>
                                    <p class="text-xl">Rp 90.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="https://www.pluggedin.com/wp-content/uploads/2022/04/Sonic-the-Hedgehog-2-1024x587.jpg"
                                alt="" class="h-80 w-72 object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">AA Face Mist</p>
                                    <p class="text-xl">Rp 90.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="https://www.pluggedin.com/wp-content/uploads/2022/04/Sonic-the-Hedgehog-2-1024x587.jpg"
                                alt="" class="h-80 w-72 object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">AA Face Mist</p>
                                    <p class="text-xl">Rp 90.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="https://www.pluggedin.com/wp-content/uploads/2022/04/Sonic-the-Hedgehog-2-1024x587.jpg"
                                alt="" class="h-80 w-72 object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">AA Face Mist</p>
                                    <p class="text-xl">Rp 90.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="https://www.pluggedin.com/wp-content/uploads/2022/04/Sonic-the-Hedgehog-2-1024x587.jpg"
                                alt="" class="h-80 w-72 object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">AA Face Mist</p>
                                    <p class="text-xl">Rp 90.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
