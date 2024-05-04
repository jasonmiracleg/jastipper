@extends('layouts.app')

@section('content')
    <div class="ml-[30px] mr-[30px] max-w-screen-xl mx-auto p-4">
        <div>
            <h1 class="text-3xl font-semibold mt-[35px]">Good Morning, Josh</h1>
        </div>
        <br>
        <div class="flex items-center">
            <h1 class="text-3xl font-semibold mr-4">Countries</h1>
            <hr class="border-black flex-grow">
        </div>
        <div class="flex flex-row mt-2 justify-between w-full">
            <img src="{{ asset('storage/images/UK.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('storage/images/USA.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('storage/images/Canada.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('storage/images/China.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('storage/images/Korea.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('storage/images/Japan.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('storage/images/Thailand.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('storage/images/Australia.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('storage/images/Indonesia.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
        </div>
    </div>
    <br>
    <div class="w-full pb-8 bg-yellow-100 rounded-tl-[120px] rounded-tr-[120px] shadow">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="flex items-center mt-8 ml-[50px]">
                <h1 class="text-3xl font-semibold mr-4">Based on Desired Location</h1>
                <hr class="border-black flex-grow mr-[40px]">
            </div>
            <div class="mt-8 flex flex-cols justify-between ml-[40px] mr-[40px]">
                <div class="w-[350px] max-w-sm p-4 bg-white rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="{{ asset('storage/images/PP1.png') }}"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Robert Hans
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-7 ml-[5px]" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Surabaya</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/globe.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>France</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/cube.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>Cloths</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[350px] max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="{{ asset('storage/images/ProfilePicAccount.png') }}"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Julie
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-7 ml-[5px]" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Jakarta</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/globe.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>South Korea</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/cube.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>MakeUp</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[350px] max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="{{ asset('storage/images/PP2.png') }}"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Tom Holand
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-7 ml-[5px]" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Jakarta Barat</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/globe.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>Thailand</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/cube.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>Food</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="flex items-center mt-8">
                <h1 class="text-3xl font-semibold mr-4 ml-[50px]">Popular</h1>
                <hr class="border-black flex-grow  mr-[40px]">
            </div>
            <div class="mt-8 flex flex-cols justify-between ml-[40px] mr-[40px]">
                <div class="w-[350px] max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="{{ asset('storage/images/Janice.png') }}"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Janice
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-7 ml-[5px]" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Solo</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/globe.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>Japan</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/cube.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>Any</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[350px] max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="{{ asset('storage/images/Betty.png') }}"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Betty
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-7 ml-[5px]" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Bali</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/globe.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>Macau</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/cube.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>Any</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[350px] max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="{{ asset('storage/images/Carles.png') }}"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Carles
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-7 ml-[5px]" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Bandung</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/globe.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>Hawaii</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="h-6 ml-[7px]" src="{{ asset('storage/images/cube.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>Any</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
