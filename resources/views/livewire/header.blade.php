<header>
    <nav id="menu" class="bg-white h-full shadow-lg z-10">
        <div class="container mx-auto py-2 flex justify-between items-center">
            <div class="flex items-center h-full">
                <a class="" href="/">
                    <img src="/img/logo.png" class="h-10 w-10" alt="Logo - Collaborabiz">
                </a>
                <ul class="flex gap-3 mx-5">
                    <a class="hover:text-blue-700 transition-all duration-300" href="/presentation/createur"><li>{!! __('Créateur') !!}</li></a>
                    <a class="hover:text-blue-700 transition-all duration-300" href="/presentation/agence"><li>{!! __('Agence') !!}</li></a>
                    <a class="hover:text-blue-700 transition-all duration-300" href="/presentation/entreprise"><li>{!! __('Entreprise') !!}</li></a>
                </ul>
            </div>
            <div class="h-full" x-data="{ hover: ''}"  @mouseenter="hover = true" @mouseleave="hover = false">
                @auth
                <a class="text-white flex-nowrap" href="/profile"
                    :class="{ 'hover:text-blue-800': hover }">
                    <button  class="px-2 py-2 rounded-md bg-blue-700 transition-all duration-300"
                    :class="{ 'hover:bg-blue-300': hover }">
                    {{ Auth::user()->name }}
                    </button> 
                </a>
                @else
                <a class="text-white flex-nowrap" href="/login"
                    :class="{ 'hover:text-blue-800': hover }">
                    <button  class="px-2 py-2 rounded-md bg-blue-700 transition-all duration-300"
                    :class="{ 'hover:bg-blue-300': hover }">
                    {!!__('Crée un compte') !!}
                    </button> 
                </a>
                @endauth
                
            </div>
        </div>
    </nav> 
</header>
