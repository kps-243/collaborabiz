<div x-data="{ hover: ''}" class="flex flex-col lg:flex-row w-full gap-4">
    <label class="w-full lg:w-2/12"></label>
    <div class="w-full lg:w-10/12 py-10">
        <div class="h-full w-full" :class="{ 'hover:text-blue-800': hover }"   @mouseenter="hover = true" @mouseleave="hover = false">
            <button type="{{$type}}" :class="{ 'hover:bg-blue-300': hover }" class="text-white px-8 py-2 rounded-md transition-all duration-300 {{ $color }}">   
                {!!__($text) !!} 
            </button>    
        </div>
    </div>
</div>
