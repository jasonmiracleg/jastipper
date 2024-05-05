@extends('layouts.app')

@section('content')
    <div class="relative">
        <div class="bg-[url('{{ asset('storage/images/background.png') }}')] h-72 bg-cover relative">
            <div class="absolute inset-0 bg-gray-100 opacity-50"></div>
        </div>
        <div class="ml-[10px] mr-[10px] max-w-screen-xl mx-auto p-4 absolute inset-0">
            <div>
                <div class="space-y-4">
                    <a href="/"><img src="{{ asset('storage/images/back.png') }}" class="absolute mt-[20px] w-[20px]"></a>
                    <p class="font-semibold text-[38px] ml-[45px]">Julie</p>
                    <div class="w-full flex flex-cols items-center gap-x-7">
                        <img class="w-6 ml-[40px]" src="{{ asset('assets/map.png') }}" alt="">
                        <p class="text-[18px] font-semibold">Jakarta - Indonesia</p>
                    </div>
                    <div class="w-full flex flex-cols items-center gap-x-7">
                        <img class="w-8 ml-[36px]" src="{{ asset('storage/images/starBorder.png') }}" alt="">
                        <p class="ml-[-5px] text-[18px] font-semibold">5/5</p>
                    </div>
                    <a href="custChats"><img class="absolute w-[55px] ml-[1150px] mt-[30px]" src="{{ asset('storage/images/chatIcon.png') }}"></a>
                </div>
                <div class="mt-8 flex flex-cols">
                    <img src="{{ asset('storage/images/ppCircle.png') }}"
                        alt="Your Image" class="rounded-full w-48 border-2 mr-8">
                    <div class="absolute ml-[240px] mt-[150px] flex items-end pb-6">
                        <button type="button" class="h-[30px] w-[100px] absolute text-white bg-[#69A197] drop-shadow-md hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-[#69A197] dark:hover:bg-[#69A197] focus:outline-none dark:focus:ring-[#69A197]"><img src="{{ asset('storage/images/searchIcon.png') }}" class="absolute w-[30px] ml-[-15px] mt-[-15px]"><a class="absolute ml-[-10px] mt-[-12px] text-[14px]">Search</a></button>
                        <button type="button" class="h-[30px] w-[100px] absolute ml-[110px] text-white bg-[#69A197] drop-shadow-md hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-[#69A197] dark:hover:bg-[#69A197] focus:outline-none dark:focus:ring-[#69A197]"><img src="{{ asset('storage/images/filterIcon.png') }}" class="absolute w-[20px] ml-[-10px] mt-[-10px]"><a class="absolute ml-[-5px] mt-[-12px] text-[14px]">Filter</a></button>
                        <button type="button" class="h-[30px] w-[110px] absolute ml-[220px] text-white bg-[#69A197] drop-shadow-md hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-[#69A197] dark:hover:bg-[#69A197] focus:outline-none dark:focus:ring-[#69A197]"><img src="{{ asset('storage/images/tag.png') }}" class="absolute w-[20px] ml-[-10px] mt-[-10px]"><a class="absolute ml-[-15px] mt-[-12px] text-[14px]">Discount</a></button>
                    </div>
                </div>
            </div>
            <div class="mt-8 pb-8 ml-[10px] mr-[10px]">
                <div class="flex flex-wrap ml-[30px]">
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="{{ asset('storage/images/aaFaceMist.png') }}"
                                alt="" class="h-[290px] object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">AA Face Mist</p>
                                    <p class="text-xl">Rp 99.900,-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="{{ asset('storage/images/sukinFaceWash.png') }}"
                                alt="" class="h-[290px] object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">Sukin Face Wash</p>
                                    <p class="text-xl">Rp 130.000,-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="{{ asset('storage/images/beautyFood.png') }}"
                                alt="" class="h-[290px] object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">Beauty Food</p>
                                    <p class="text-xl">Rp 75.000,-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="{{ asset('storage/images/jrink.png') }}"
                                alt="" class="h-[290px] object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">JRINK</p>
                                    <p class="text-xl">Rp 150.000,-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="{{ asset('storage/images/salmonOil.png') }}"
                                alt="" class="h-[290px] object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl w-[200px]">1 Set Salmon Oil Skincare</p>
                                    <p class="text-xl">Rp 535.000,-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="{{ asset('storage/images/waterBase.png') }}"
                                alt="" class="h-[290px] object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl w-[200px]">Water Base Face Wash</p>
                                    <p class="text-xl">Rp 155.000,-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="{{ asset('storage/images/salmonOil.png') }}"
                                alt="" class="h-[290px] object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">Lemon Oil</p>
                                    <p class="text-xl">Rp 89.000,-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <img src="{{ asset('storage/images/1Set.png') }}"
                                alt="" class="h-[290px] object-cover rounded-2xl mr-8">
                        </div>
                        <div class="flow-root space-y-4">
                            <div class="flex items-center">
                                <div class="space-y-2">
                                    <p class="font-medium text-2xl">1 Set Skincare</p>
                                    <p class="text-xl">Rp 1.130.000,-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
