@extends('layouts.app')

@section('content')
    <div class="ml-[30px] mr-[30px] max-w-screen-xl mx-auto p-4">
        <div>
            <h1 class="text-3xl font-semibold mt-[35px]">Good Morning, Josh</h1>
        </div>

        <div id="indicators-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('assets/discount1.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/discount2.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/discount3.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/discount1.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/discount2.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <br>
        <div class="flex items-center">
            <h1 class="text-3xl font-semibold mr-4">Countries</h1>
            <hr class="border-black flex-grow">
        </div>
        <div class="flex flex-row mt-2 justify-between w-full">
            <img src="{{ asset('assets/UK.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('assets/USA.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('assets/Canada.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('assets/China.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('assets/Korea.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('assets/Japan.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('assets/Thailand.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('assets/Australia.png') }}"
                alt="Your Image" class="rounded-full h-20 w-20 border-2">
            <img src="{{ asset('assets/Indonesia.png') }}"
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
                <a href="jastiperInfo">
                    <div class="w-[350px] max-w-sm p-4 bg-white rounded-lg shadow sm:p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 rounded-full border-2" src="{{ asset('assets/PP1.png') }}"
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
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/globe.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Location</p>
                                    <p>France</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="mr-6">
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/cube.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Type of Jastip</p>
                                    <p>Cloths</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="jastiperInfo">
                    <div class="w-[350px] max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 rounded-full border-2" src="{{ asset('assets/ProfilePicAccount.png') }}"
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
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/globe.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Location</p>
                                    <p>South Korea</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="mr-6">
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/cube.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Type of Jastip</p>
                                    <p>MakeUp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="jastiperInfo">
                    <div class="w-[350px] max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 rounded-full border-2" src="{{ asset('assets/PP2.png') }}"
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
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/globe.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Location</p>
                                    <p>Thailand</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="mr-6">
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/cube.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Type of Jastip</p>
                                    <p>Food</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="flex items-center mt-8">
                <h1 class="text-3xl font-semibold mr-4 ml-[50px]">Popular</h1>
                <hr class="border-black flex-grow  mr-[40px]">
            </div>
            <div class="mt-8 flex flex-cols justify-between ml-[40px] mr-[40px]">
                <a href="jastiperInfo">
                    <div class="w-[350px] max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 rounded-full border-2" src="{{ asset('assets/Janice.png') }}"
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
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/globe.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Location</p>
                                    <p>Japan</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="mr-6">
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/cube.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Type of Jastip</p>
                                    <p>Any</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="jastiperInfo">
                    <div class="w-[350px] max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 rounded-full border-2" src="{{ asset('assets/Betty.png') }}"
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
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/globe.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Location</p>
                                    <p>Macau</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="mr-6">
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/cube.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Type of Jastip</p>
                                    <p>Any</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="jastiperInfo">
                    <div class="w-[350px] max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 rounded-full border-2" src="{{ asset('assets/Carles.png') }}"
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
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/globe.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Location</p>
                                    <p>Hawaii</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="mr-6">
                                    <img class="h-6 ml-[7px]" src="{{ asset('assets/cube.png') }}"
                                    alt="">
                                </div>
                                <div>
                                    <p class="font-medium text-xl">Type of Jastip</p>
                                    <p>Any</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
