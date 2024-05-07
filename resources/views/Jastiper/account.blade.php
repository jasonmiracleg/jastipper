@extends('layouts.jastipperView')

@section('content')
    <div class="max-w-screen-xl mx-auto">
        <div class="columns-2 pb-[30px]">
            <img src="{{ asset('assets/ProfilePicAccount.png') }}" alt="Profile Pic 1" class="mt-[50px] pt-[50px] pl-[50px] ml-[65px] h-[300px] rounded-md">
            <div class="pt-[130px] row ml-[-260px]">
                <p class="text-[26px] pb-[10px]">Name : Julie</p>
                <p class="text-[26px] pb-[10px]">City : Jakarta/ Indonesia</p>
                <p class="text-[26px] pb-[10px]">Ranking : 1/1000+</p>
                <p class="text-[26px] pb-[10px]">Rating : <img src="{{ asset('assets/star.png') }}" class="z-[2] mt-[-25px] ml-[100px] w-[18px]"><img src="{{ asset('assets/star.png') }}" class="mt-[-18px] ml-[122px] w-[18px]"><img src="{{ asset('assets/star.png') }}" class="z-[2] mt-[-18px] ml-[144px] w-[18px]"><img src="{{ asset('assets/star.png') }}" class="z-[2] mt-[-18px] ml-[166px] w-[18px]"><img src="{{ asset('assets/star.png') }}" class="z-[2] mt-[-18px] ml-[188px] w-[18px]"></p>
            </div>
        </div>
        <h1 class="pl-[120px] text-3xl font-medium mt-[50px]">Your Post</h1>
        <img src="{{ asset('assets/addProduct.png') }}" class="absolute w-[30px] ml-[270px] mt-[-30px]">
        <hr class="border-black flex-grow ml-[120px] mr-[90px] mt-[20px]">
        <div class="mt-8 pb-8 ml-[30px] mr-[10px]">
            <div class="flex flex-wrap ml-[90px]">
                <div class="w-1/4 mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <img src="{{ asset('assets/viewIcon.png') }}" class="absolute w-[16px] mb-[200px] ml-[15px]">
                        <img src="{{ asset('assets/aaFaceMist.png') }}"
                            alt="" class="h-[250px] object-cover rounded-2xl mr-8">
                        <img src="{{ asset('assets/editProduct.png') }}" class="absolute w-[30px] ml-[165px] mt-[195px]">
                    </div>
                    <p class="absolute mt-[-253px] ml-[42px] text-[14px] font-medium">1.230</p>
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
                        <img src="{{ asset('assets/viewIcon.png') }}" class="absolute w-[16px] mb-[200px] ml-[15px]">
                        <img src="{{ asset('assets/sukinFaceWash.png') }}"
                            alt="" class="h-[250px] object-cover rounded-2xl mr-8">
                        <img src="{{ asset('assets/editProduct.png') }}" class="absolute w-[30px] ml-[165px] mt-[195px]">
                    </div>
                    <p class="absolute mt-[-253px] ml-[42px] text-[14px] font-medium">204</p>
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
                        <img src="{{ asset('assets/viewIcon.png') }}" class="absolute w-[16px] mb-[200px] ml-[15px]">
                        <img src="{{ asset('assets/beautyFood.png') }}"
                            alt="" class="h-[250px] object-cover rounded-2xl mr-8">
                        <img src="{{ asset('assets/editProduct.png') }}" class="absolute w-[30px] ml-[165px] mt-[195px]">
                    </div>
                    <p class="absolute mt-[-253px] ml-[42px] text-[14px] font-medium">826</p>
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
                        <img src="{{ asset('assets/viewIcon.png') }}" class="absolute w-[16px] mb-[200px] ml-[15px]">
                        <img src="{{ asset('assets/jrink.png') }}"
                            alt="" class="h-[250px] object-cover rounded-2xl mr-8">
                        <img src="{{ asset('assets/editProduct.png') }}" class="absolute w-[30px] ml-[165px] mt-[195px]">
                    </div>
                    <p class="absolute mt-[-253px] ml-[42px] text-[14px] font-medium">92</p>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="space-y-2">
                                <p class="font-medium text-2xl">JRINK</p>
                                <p class="text-xl">Rp 150.000,-</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
