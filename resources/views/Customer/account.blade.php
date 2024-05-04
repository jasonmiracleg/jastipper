@extends('layouts.app')

@section('content')
    <div class="max-w-screen-xl mx-auto">
        <div class="columns-2 pb-[30px]">
            <img src="{{ asset('storage/images/ProfilePicAccount.png') }}" alt="Profile Pic 1" class="mt-[50px] pt-[50px] pl-[50px] ml-[65px] h-[300px] rounded-md">
            <div class="pt-[130px] row ml-[-260px]">
                <p class="text-[26px] pb-[10px]">Name : Julie</p>
                <p class="text-[26px] pb-[10px]">City : Jakarta/ Indonesia</p>
                <p class="text-[26px] pb-[10px]">Ranking : 1/1000+</p>
                <p class="text-[26px] pb-[10px]">Rating : <img src="{{ asset('storage/images/star.png') }}" class="z-[2] mt-[-25px] ml-[100px] w-[18px]"><img src="{{ asset('storage/images/star.png') }}" class="mt-[-18px] ml-[122px] w-[18px]"><img src="{{ asset('storage/images/star.png') }}" class="z-[2] mt-[-18px] ml-[144px] w-[18px]"><img src="{{ asset('storage/images/star.png') }}" class="z-[2] mt-[-18px] ml-[166px] w-[18px]"><img src="{{ asset('storage/images/star.png') }}" class="z-[2] mt-[-18px] ml-[188px] w-[18px]"></p>
            </div>
        </div>
        <div>
            <button type="button" class="ml-[1080px] mt-[-80px] text-white bg-[#69A197] hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#69A197] dark:hover:bg-[#69A197] focus:outline-none dark:focus:ring-[#69A197]"><a href="jastiperHome">Login as Jastiper</a></button>
        </div>
    </div>
@endsection
