<div class="flex flex-col lg:flex-row justify-center w-full gap-4">
    <label class="poppins-extrabold w-full lg:w-2/12" for="{{$name}}"> {!! __($text) !!}</label>
    <textarea name="{{$name}}" id="{{$name}}" rows="{{$rows}}" class="w-full lg:w-10/12 required:border-black-100 py-2 px-3 rounded border border-gray-300 focus:ring-0 focus:ring-offset-0 focus:border-blue-700"></textarea>
</div>
