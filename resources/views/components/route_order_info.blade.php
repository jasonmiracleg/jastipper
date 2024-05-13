<div class="flex flex-row w-[90%] bg-transparent -my-1">

    <div class="flex flex-col items-center px-4 pt-4">
        <div class="w-4 h-4 bg-emerald-600 rounded-full"></div>
        <div class="-mb-8 mt-1 w-[0.05rem] h-[100%] bg-emerald-600"></div>
    </div>
    <div class="flex flex-col w-full">
        <div class="flex flex-row w-full justify-between items-center">
            <h1 class="text-[#000] text-[36px]">{{ $data['location'] }}</h1>
            <h2 class="text-[#FFF] text-center text-[32px] w-[135px] h-[50px] flex-shrink-0 rounded-[24px] bg-[#69A197]">
                @if ($data['distance'] >= 1000)
                    <?= $data['distance'] / 1000 ?>km
                @else
                    <?= $data['distance'] ?>m
                @endif
            </h2>
        </div>

        <ul class="">
            @foreach ($data['items'] as $item)
                <li class="text-[#000] text-[32px]">{{ $item }}</li>
            @endforeach
        </ul>

    </div>

</div>
