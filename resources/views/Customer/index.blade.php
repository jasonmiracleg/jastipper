@extends('layouts.app')

@section('content')
    <div class="max-w-screen-xl mx-auto p-4">
        <div>
            <h1 class="text-4xl font-bold">Good Morning, Josh</h1>
        </div>
        <br>
        <div class="flex items-center">
            <h1 class="text-3xl font-semibold mr-4">Countries</h1>
            <hr class="border-black flex-grow">
        </div>
        <div class="flex flex-row mt-4 justify-between w-full">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                alt="Your Image" class="rounded-full h-24 w-24 border-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                alt="Your Image" class="rounded-full h-24 w-24 border-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                alt="Your Image" class="rounded-full h-24 w-24 border-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                alt="Your Image" class="rounded-full h-24 w-24 border-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                alt="Your Image" class="rounded-full h-24 w-24 border-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                alt="Your Image" class="rounded-full h-24 w-24 border-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                alt="Your Image" class="rounded-full h-24 w-24 border-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                alt="Your Image" class="rounded-full h-24 w-24 border-2">
        </div>
    </div>
    <br>
    <div class="w-full pb-8 bg-yellow-100 rounded-tl-[120px] rounded-tr-[120px] shadow">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="flex items-center mt-8">
                <h1 class="text-3xl font-semibold mr-4">Based on Desired Location</h1>
                <hr class="border-black flex-grow">
            </div>
            <div class="mt-8 flex flex-cols justify-between">
                <div class="w-full max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Neil Sims
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Surabaya</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>France</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>Cloths</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Neil Sims
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Surabaya</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>France</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>Cloths</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Neil Sims
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Surabaya</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>France</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>Cloths</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="flex items-center mt-8">
                <h1 class="text-3xl font-semibold mr-4">Popular</h1>
                <hr class="border-black flex-grow">
            </div>
            <div class="mt-8 flex flex-cols justify-between">
                <div class="w-full max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Neil Sims
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Surabaya</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>France</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>Cloths</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Neil Sims
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Surabaya</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>France</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>Cloths</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-sm p-4 bg-white border rounded-lg shadow sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 rounded-full border-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbO92xb8V0F5NoeLW46ZgxLx2DZEYMstZq4HXFWUx4cQ&s"
                                alt="">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-2xl font-medium">
                                Neil Sims
                            </p>
                        </div>
                    </div>
                    <div class="flow-root space-y-4">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">City of Origin</p>
                                <p>Surabaya</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Location</p>
                                <p>France</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <img class="w-10 h-10" src="{{ asset('assets/map.png') }}"
                                alt="">
                            </div>
                            <div>
                                <p class="font-medium text-xl">Type of Jastip</p>
                                <p>Cloths</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
