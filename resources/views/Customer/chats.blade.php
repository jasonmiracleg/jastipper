@extends('layouts.app')

@section('content')
    <div class="mx-auto">
        <div class="w-full h-[300px] pb-8 bg-yellow-100">
            <div class="mt-[70px] absolute w-full h-max pb-8 bg-slate-50 rounded-tl-[100px] rounded-tr-[100px] shadow-xl">
                <h1 class="pl-[75px] text-2xl font-semibold mt-[50px]">Chats</h1>
                <hr class="border-black flex-grow ml-[50px] mr-[50px] mt-[20px]">
                <div class="mt-[20px] container">
                    <div class="columns-2 pb-[30px]">
                        <img src="{{ asset('assets/PP1.png') }}" alt="Profile Pic 1" class="ml-[65px] rounded-full h-20 w-20 border-2">
                        <div class="row absolute mt-[-65px] ml-[180px]">
                            <p>Robert Hans</p>
                            <p class="absolute ml-[25px] w-[900px]"><img src="{{ asset('assets/greenCircle.png') }}" class="absolute mt-[8px] ml-[-25px] w-[12px]">Noted, thank you for order</p>
                        </div>
                    </div>
                    <div class="columns-2 pb-[30px]">
                        <img src="{{ asset('assets/PP2.png') }}" alt="Profile Pic 1" class="ml-[65px] rounded-full h-20 w-20 border-2">
                        <div class="row absolute mt-[-65px] ml-[180px]">
                            <p>Tom Holand</p>
                            <p class="absolute ml-[25px] w-[900px]"><img src="{{ asset('assets/greenCircle.png') }}" class="absolute mt-[8px] ml-[-25px] w-[12px]">Oke nanti dicarikan ya</p>
                        </div>
                    </div>
                    <div class="columns-2 pb-[30px]">
                        <img src="{{ asset('assets/PP3.png') }}" alt="Profile Pic 1" class="ml-[65px] rounded-full h-20 w-20 border-2">
                        <div class="row absolute mt-[-65px] ml-[180px]">
                            <p>Rose</p>
                            <p class="absolute ml-[25px] w-[900px]"><img src="{{ asset('assets/redCircle.png') }}" class="absolute mt-[8px] ml-[-25px] w-[12px]">Mau 2 kalau ada</p>
                        </div>
                    </div>
                    <div class="columns-2 pb-[30px]">
                        <img src="{{ asset('assets/PP4.png') }}" alt="Profile Pic 1" class="ml-[65px] rounded-full h-20 w-20 border-2">
                        <div class="row absolute mt-[-65px] ml-[180px]">
                            <p>Josh Ollie</p>
                            <p class="absolute ml-[25px] w-[900px]"><img src="{{ asset('assets/redCircle.png') }}" class="absolute mt-[8px] ml-[-25px] w-[12px]">Kira" ready Jakarta kapan?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
