<div class="flex justify-center items-center w-full gap-4">
    <label class="poppins-extrabold w-2/12" for="{{$name}}">{!! __($label) !!}</label>
    <div class="w-10/12">
      <select name="{{$name}}" id="{{$name}}" class="w-full required:border-black-100 py-2 px-3 rounded border border-gray-300 focus:ring-0 focus:ring-offset-0 focus:border-blue-700">
        <option value="">{!! __('Sélectionnez un service ou un produit') !!}</option>
        <option value="service1">{!! __('Service') !!}</option>
        <option value="produit1">{!! __('Produit') !!}</option>
      </select>
    </div>
</div>
  
