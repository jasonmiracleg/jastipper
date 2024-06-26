@extends('layouts.app')

@section('content')
    <div class="ml-[30px] mr-[30px] p-4">
        <div>
            <h1 class="text-3xl font-semibold mt-[35px]">Good Morning, Josh</h1>
        </div>

        {{-- <div>
            <form class="mt-[30px] w-[1170px] h-40px mx-auto">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#69A197] focus:border-[#69A197]"
                        placeholder="Search" required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-[#69A197] hover:bg-[#69A197] focus:ring-4 focus:outline-none focus:ring-[#69A197] font-medium rounded-lg text-sm px-4 py-2">Search</button>
                </div>
            </form>
        </div> --}}

        <div id="indicators-carousel" class="relative w-full mt-8" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('assets/discount1.png') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/discount2.png') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/discount3.png') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/discount1.png') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/discount2.png') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
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
        <div class="flex flex-row mt-2 justify-between w-full overflow-x-auto gap-4">

            @php
            // creates an array based on the assets/countries folder
            $countryImages = scandir('assets/countries');
            $countryImages = array_filter($countryImages, function ($item) {
                return !in_array($item, ['.', '..']);
            });

            $countryData = [];
            foreach ($countryImages as $image) {
                $imagePath = 'assets/countries/' . $image;
                $countryName = str_replace('.png', '', $image); // Extract name (assuming PNG format)
                // Or, improve name extraction based on your filename format
                $countryData[] = [
                    'asset_path' => $imagePath,
                    'country_name' => $countryName,
                ];
            }
            @endphp

            @foreach ($countryData as $country)
                <x-country_button :asset-path="$country['asset_path']" :country-name="$country['country_name']" />
            @endforeach

        </div>
    </div>
    <br>
    <div class="pb-8 bg-yellow-100 rounded-tl-[120px] rounded-tr-[100px] shadow">
        <div class="mx-auto p-4">
            <div class="flex items-center mt-8 ml-[50px]">
                <h1 class="text-3xl font-semibold mr-4">Based on Desired Location</h1>
                <hr class="border-black flex-grow mr-[40px]">
            </div>
            <div class="w-full overflow-y-auto px-4 py-8 flex flex-wrap justify-between gap-4">
                <x-home_jastiper_info :name="'Robert Hans'" :origin="'Surabaya'" :location="'France'" :type="'Clothes'" :asset-path="'assets/PP1.png'" />
                <x-home_jastiper_info :name="'Julie'" :origin="'Jakarta'" :location="'South Korea'" :type="'MakeUp'" :asset-path="'assets/ProfilePicAccount.png'" />
                <x-home_jastiper_info :name="'Tom Holand'" :origin="'Jakarta Barat'" :location="'Thailand'" :type="'Food'" :asset-path="'assets/PP2.png'" />
            </div>
        </div>
        <div class="mx-auto p-4">
            <div class="flex items-center mt-8">
                <h1 class="text-3xl font-semibold mr-4 ml-[50px]">Popular</h1>
                <hr class="border-black flex-grow  mr-[40px]">
            </div>
            <div class="w-full overflow-y-auto px-4 py-8 flex flex-wrap justify-between gap-4">
                <x-home_jastiper_info :name="'Janice'" :origin="'Solo'" :location="'Japan'" :type="'Any'" :asset-path="'assets/Janice.png'" />
                <x-home_jastiper_info :name="'Betty'" :origin="'Bali'" :location="'Macau'" :type="'Any'" :asset-path="'assets/Betty.png'" />
                <x-home_jastiper_info :name="'Carles'" :origin="'Bandung'" :location="'Hawaii'" :type="'Any'" :asset-path="'assets/Carles.png'" />
            </div>
        </div>
    </div>
@endsection
