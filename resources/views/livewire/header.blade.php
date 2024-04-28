<header>
    <nav id="menu" class="bg-white h-full shadow-lg z-10">
        <div class="hidden lg:block">
            <div class="container mx-auto py-2 flex justify-between items-center">
                <div class="flex items-center justify-center h-full">
                    <a class="" href="/">
                        <img src="/img/logo.png" class="h-10 w-10" alt="Logo - Collaborabiz">
                    </a>
                </div>
                <ul class="flex gap-8 mx-5">
                    <a class="hover:text-blue-700 transition-all duration-300" href="/presentation/createur"><li>{!! __('Créateur') !!}</li></a>
                    {{-- <a class="hover:text-blue-700 transition-all duration-300" href="/presentation/agence"><li>{!! __('Agence') !!}</li></a> --}}
                    <a class="hover:text-blue-700 transition-all duration-300" href="/presentation/entreprise"><li>{!! __('Entreprise') !!}</li></a>
                    <a class="hover:text-blue-700 transition-all duration-300" href="/ugc"><li>{!! __('UGC') !!}</li></a>
                    <a class="hover:text-blue-700 transition-all duration-300" href="/contact"><li>{!! __('Contact') !!}</li></a>
                </ul>
                <div class="h-full" x-data="{ hover: ''}"  @mouseenter="hover = true" @mouseleave="hover = false">
                    @auth
                    <div class="flex gap-4">
                        <a class="text-white flex-nowrap" href="user/profile"
                            :class="{ 'hover:text-blue-800': hover }">
                            <button  class="px-2 py-2 rounded-md bg-blue-700 transition-all duration-300"
                            :class="{ 'hover:bg-blue-300': hover }">
                            {{ Auth::user()->name }}
                            </button> 
                        </a>
                        <a class="text-white flex-nowrap" href="/logout"
                            :class="{ 'hover:text-blue-800': hover }">

                        </a>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                <button  class="px-2 py-2 rounded-md bg-blue-700 transition-all duration-300 text-white"
                                :class="{ 'hover:bg-blue-300': hover }">
                                Se deconnecter
                                </button> 
                            </a>
                        </form>
                    </div>
                    @else
                    <a class="text-white flex-nowrap" href="/register"
                        :class="{ 'hover:text-blue-800': hover }">
                        <button  class="px-2 py-2 rounded-md bg-blue-700 transition-all duration-300"
                        :class="{ 'hover:bg-blue-300': hover }">
                        {!!__('Crée un compte') !!}
                        </button> 
                    </a>
                    @endauth

                </div>
            </div>
        </div>
        <div class="block lg:hidden overflow-x-hidden" x-data="{ open: false }">
            <div class="container mx-auto px-4 sm:px-0 py-2 flex justify-between items-center">
                <a class="" href="/">
                    <img src="/img/logo.png" class="h-10 w-10" alt="Logo - Collaborabiz">
                </a>
                <div>
                    <img src="/img/burger.svg"  @click="open = !open" x-show="open === false" class="w-7 h-7 cursor-pointer" alt="icon menu">
                    <img src="/img/close.svg"  @click="open = !open" x-show="open === true" class="w-7 h-7 cursor-pointer" alt="icon close">
                </div>
            </div>
            
            <div class="bg-blue-700 h-screen z-40 flex justify-center items-center" x-bind:class="{ 'ml-0 relative transition-all duration-300': open, 'absolute -ml-[200%] transition-all duration-300': !open }">
                <ul class="flex flex-col justify-center items-center gap-6 text-2xl text-white">
                    <li><a class="hover:text-blue-300" href="/presentation/createur">{!! __('Créateur') !!}</a></li>
                    <li><a class="hover:text-blue-300" href="/presentation/entreprise">{!! __('Entreprise') !!}</a></li>
                    <li><a class="hover:text-blue-300" href="/ugc">{!! __('UGC') !!}</a></li>
                    <li><a class="hover:text-blue-300" href="/tarifs">{!! __('Tarifs') !!}</a></li>
                    @auth
                    <div class="flex flex-col gap-4">
                        <a class="text-white flex-nowrap" href="user/profile"
                            :class="{ 'hover:text-blue-800': hover }">
                            <button  class="px-2 py-2 rounded-md bg-white text-blue-800 transition-all duration-300"
                            :class="{ 'hover:bg-blue-500': hover }">
                            {{ Auth::user()->name }}
                            </button> 
                        </a>
                        <a class="text-white flex-nowrap" href="/logout"
                            :class="{ 'hover:text-blue-800': hover }">

                        </a>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                <button  class="px-2 py-2 rounded-md bg-blue-300 transition-all duration-300 text-white"
                                :class="{ 'hover:bg-blue-500': hover }">
                                Se deconnecter
                                </button> 
                            </a>
                        </form>
                    </div>
                    @else
                    <a class="text-white flex-nowrap" href="/register"
                        :class="{ 'hover:text-blue-800': hover }">
                        <button  class="px-2 py-2 rounded-md bg-blue-300 transition-all duration-300"
                        :class="{ 'hover:bg-blue-500': hover }">
                        {!!__('Crée un compte') !!}
                        </button> 
                    </a>
                    @endauth
                </ul>
            </div>
        </div>
    </nav> 
</header>
