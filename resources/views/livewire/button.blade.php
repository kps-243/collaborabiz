<div class="h-full" x-data="{ hover: ''}"  @mouseenter="hover = true" @mouseleave="hover = false">
    <a :class="{ 'hover:text-blue-800': hover }" class="text-white flex-nowrap" href="{{ $link }}">
        <button type="{{$type}}" :class="{ 'hover:bg-blue-300': hover }" class="px-8 py-2 rounded-md transition-all duration-300 {{ $color }}">   
            {!!__($text) !!} 
        </button>
    </a>
</div>