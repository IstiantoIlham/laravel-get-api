<a href="{{$url}}" class="w-fit">
    <div class="bg-white rounded-xl border w-80 h-96">
        <img class="w-full max-h-64 object-cover rounded-xl border" src="{{ $image }}" alt="{{ $name }}">
        <div class="p-4 flex flex-col gap-2">
            <div class="text-md font-bold">{{ $difficulty }}</div>
            <div class="text-xl font-medium truncate">{{ $name }}</div>
            <div class="flex justify-between">
                <div class="text-md font-medium">Servings: <span class="font-normal">{{ $servings }}</span></div>
                <div>⭐{{ $rating }}</div>
            </div>
        </div>
    </div>
</a>
