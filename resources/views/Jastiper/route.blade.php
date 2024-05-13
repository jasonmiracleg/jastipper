@extends('layouts.jastipperView')
<?php
$data = [
    [
        'location' => 'Jagalchi Market',
        'distance' => '350',
        'items' => ['Korean Spices', 'Traditional Snacks'],
    ],
    [
        'location' => 'BIFF Square',
        'distance' => '500',
        'items' => ['Korean Merchandise', 'Traditional Clothes'],
    ],
    [
        'location' => 'Lotte Department Store',
        'distance' => '3400',
        'items' => ['Korean Skincare and Beauty Thing'],
    ],
];
?>
@section('content')
    <div class="flex flex-col h-screen">
        <div class="bg-red-200 w-[361px] font-[Inter] not-italic leading-[normal] w-full h-[75%]">
            <img src="{{ asset('assets/MapStatic.png') }}" alt="Map" class="w-[100%] h-[715px] flex-shrink-0">
        </div>
        <div class="flex flex-col gap-10 items-center w-[100%] h-[760px] flex-shrink-0 rounded-[65px] bg-[#FFF] [box-shadow:0px]">
            <div class="w-[69px] h-[7px] flex-shrink-0 rounded-[8px] bg-[#000] mt-8"></div>
            <h1 class="text-[#000] text-center text-[40px] font-bold w-[453px]">Best Route for You</h1>
            @foreach ($data as $entry)
                <x-route_order_info :data="$entry" />
            @endforeach
        </div>
    </div>
@endsection
