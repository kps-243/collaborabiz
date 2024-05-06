<footer>
    <div class="flex flex-col gap-9 text-center">
        <p class="text-3xl lg:text-[70px] lg:leading-[80px] font-bold text-blue-600 pt-4 lg:py-6">Aujourd'hui notre objectif est de créé une communauté engagée</p>
        <div class="w-full flex flex-col gap-5 justify-center items-center bg-blue-100 py-11">
            <p class="text-blue-800 text-lg lg:leading-[60px] lg:text-[50px]">Une question sur le projet Collaborabiz ?</p>
            <livewire:button :text="'Nous écrire'" :link="'/contact'" :color="'bg-blue-800'"/>
        </div>
    </div>
    <div class="flex flex-col sm:flex-row justify-center bg-blue-800 w-full text-white py-16 px-4 lg:px-0">
      <div class="container mx-auto flex flex-col lg:flex-row gap-20"> 
        <div class="lg:w-1/6 flex flex-col gap-4">
            <h2 class="text-2xl poppins-bold">{!! __('Lien utiles') !!}</h2>
            <ul>
                <a class="hover:text-blue-500 transition-all duration-300"href="/"><li>{!! __('Page d\'acceuil') !!}</li></a>
                <a class="hover:text-blue-500 transition-all duration-300"href="/ugc"><li>{!! __('L\'UGC') !!}</li></a>
                <a class="hover:text-blue-500 transition-all duration-300"href="/a-propos"><li>{!! __('A propos de nous') !!}</li></a>
                <a class="hover:text-blue-500 transition-all duration-300"href="/"><li>{!! __('Politique de confidentialité') !!}</li></a>
                <a class="hover:text-blue-500 transition-all duration-300"href="/"><li>{!! __('Mentions Légales') !!}</li></a>
            </ul>
        </div>
        <div class="lg:w-3/6 flex flex-col gap-y-4">
            <h2 class="text-2xl poppins-bold">{!! __('A propos de nous') !!}</h2>
            <p class="text-base">{!! __('Nous sommes une équipe de passionnés dont le but est de facilité la vie de chacun grâce à des services adaptés. 
                Nos services sont conçu pour les petites, moyennes, et grandes entreprises désireuses d\'optimiser leurs performances,
                ainsi qu\'a tout les créateurs ayant une envie de libérer l\'étendue de leur talent.') !!}
            </p>
        </div>
        <div class="lg:w-2/6 flex flex-col gap-3">
            <h2 class="text-2xl poppins-bold">{!! __('Rejoignez-nous') !!}</h2>
            <div class="flex flex-col">
                <div>
                    <a target="_blank" class="flex gap-2 items-center hover:text-blue-500 transition-all duration-300" href="/contact">
                        <img src="/img/chat-bubble.svg" class="h-5 w-5" alt="Collaborabiz - Téléphone">
                        <span>{!! __('Contactez-nous') !!}</span>
                    </a>
                </div>
                <div>
                    <a target="_blank" class="flex gap-2 items-center hover:text-blue-500 transition-all duration-300" href="tel:+33766843678">
                        <img src="/img/phone.svg" class="h-5 w-5 invert" alt="Collaborabiz - Téléphone">
                        <span>+ 33 7 66 84 36 78</span>
                    </a>
                </div>
                <div>
                    <a target="_blank" class="flex gap-2 items-center hover:text-blue-500 transition-all duration-300" href="mailto:hugo.congar@collaborabiz.com">
                        <img src="/img/mail.svg" class="h-5 w-5 invert" alt="Collaborabiz - Mail">
                        <span>hugo.congar@collaborabiz.com</span>
                    </a>
                </div>
            </div>
            <div class="flex gap-3">
                <a target="_blank" href="https://www.instagram.com/collaborabizz?igsh=eXAzaW01NHhwMHpn&utm_source=qr" class="hover:pt-2 transition-all duration-300">
                    <img src="/img/insta.svg" class="h-8 w-8 invert object-cover" alt="Collaborabiz - Instagram">
                </a>
                <a target="_blank" href="#" class="hover:pt-2 transition-all duration-300">
                    <img src="/img/linkedin.svg" class="h-8 w-8 invert object-cover" alt="Collaborabiz - Linkedin">
                </a>
                <a target="_blank" href="https://www.tiktok.com/@collaborabizz?_t=8m8F7kXjlgH&_r=1" class="hover:pt-2 transition-all duration-300">
                    <img src="/img/tiktok.svg" class="h-8 w-8 invert object-cover" alt="Collaborabiz - Tiktok">
                </a>
            </div>
        </div>
      </div> 
    </div>
    <section class="px-4 lg:px-0 w-full bg-blue-900 text-white h-10 flex items-center">
        <div class="container mx-auto">
            <div class="flex">
                <span>CopyRight&#169; Collaborabiz</span> 
            </div>
        </div>
    </section>
</footer>
