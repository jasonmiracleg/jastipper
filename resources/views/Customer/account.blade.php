@extends('layouts.app')

@section('content')
<div class="max-w-screen-xl mx-auto px-4 py-8 flex flex-col items-center justify-center gap-4 md:flex-row md:px-16 md:justify-around">
    <img src="{{ asset('assets/ProfilePicAccount.png') }}" alt="Profile Pic 1" class="rounded-md h-[300px] md:h-auto object-cover" />
    <div class="text-[26px] space-y-2">
      <p>Name: Julie</p>
      <p>City: Jakarta/ Indonesia</p>
      <p>Ranking: 1/1000+</p>
      <p>Rating:
        <img src="{{ asset('assets/star.png') }}" class="w-[18px] inline" />
        <img src="{{ asset('assets/star.png') }}" class="w-[18px] inline" />
        <img src="{{ asset('assets/star.png') }}" class="w-[18px] inline" />
        <img src="{{ asset('assets/star.png') }}" class="w-[18px] inline" />
        <img src="{{ asset('assets/star.png') }}" class="w-[18px] inline" />
      </p>
    </div>
    <div class="hidden md:flex justify-end">
      <button type="button" class="text-white bg-[#69A197] hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2.5">
        <a href="jastiperHome">Login as Jastiper</a>
      </button>
    </div>
  </div>

@endsection
