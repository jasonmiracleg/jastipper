<a href="{{ route('jastiper.info') }}">
    <div class="w-[350px] max-w-sm p-4 bg-white rounded-lg shadow sm:p-8">
        <div class="flex items-center justify-between mb-4">
            <div class="flex-shrink-0">
                <img class="w-12 h-12 rounded-full border-2" src="{{ asset($assetPath) }}"
                    alt="">
            </div>
            <div class="flex-1 min-w-0 ms-4">
                <p class="text-2xl font-medium">
                    {{ $name }}
                </p>
            </div>
        </div>
        <div class="flow-root space-y-4">
            <div class="flex items-center">
                <div class="mr-6">
                    <img class="h-7 ml-[5px]" src="{{ asset('assets/map.png') }}" alt="">
                </div>
                <div>
                    <p class="font-medium text-xl">City of Origin</p>
                    <p>{{ $origin }}</p>
                </div>
            </div>
            <div class="flex items-center">
                <div class="mr-6">
                    <img class="h-6 ml-[7px]" src="{{ asset('assets/globe.png') }}" alt="">
                </div>
                <div>
                    <p class="font-medium text-xl">Location</p>
                    <p>{{ $location }}</p>
                </div>
            </div>
            <div class="flex items-center">
                <div class="mr-6">
                    <img class="h-6 ml-[7px]" src="{{ asset('assets/cube.png') }}" alt="">
                </div>
                <div>
                    <p class="font-medium text-xl">Type of Jastip</p>
                    <p>{{ $type }}</p>
                </div>
            </div>
        </div>
    </div>
</a>
