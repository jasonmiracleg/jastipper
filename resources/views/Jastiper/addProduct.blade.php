@extends('layouts.jastipperView')

@section('content')
    <a href="/jastiperAccount"><img src="{{ asset('assets/back.png') }}" class="absolute mt-[-30px] ml-[25px] w-[20px]"></a>

    <form class="mt-[50px] w-[1150px] mx-auto" method="POST" enctype="multipart/form-data" action="{{ route('Jastiper.store') }}">
        @csrf
        <div class="mb-5">
            <label for="productName" class="block mb-2 text-sm font-medium text-gray-900">Product Name</label>
            <input type="text" name="productName" id="productName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#69A197] focus:border-[#69A197] block w-full p-2.5" placeholder="Your product name" required />
        </div>
        <div class="mb-5">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
            <input type="number" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#69A197] focus:border-[#69A197] block w-full p-2.5" placeholder="Rp0,-" required />
        </div>
        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#69A197] focus:border-[#69A197]" placeholder="Product Details"></textarea>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="productImage">Product Image</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" aria-describedby="productImage" id="productImage" name="productImage" type="file">
        </div>
        <div class="flex items-start mb-5">
        <input type="hidden" name="user_id" value="2">
        <button type="submit" class="mt-[30px] w-[200px] ml-[480px] text-white bg-[#69A197] hover:bg-[#69A197] focus:ring-4 focus:outline-none focus:ring-[#69A197] font-medium rounded-lg text-sm sg:px-5 py-2.5 text-center">Upload</button>
    </form>
@endsection
