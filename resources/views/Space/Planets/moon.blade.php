<x-header>

</x-header>



<x-layoutstar>

    <div class="flex flex-row gap-4 bg-[#0B0D17] px-4 py-2 justify-center md:justify-start mb-10">
        <x-nb01 />
        <h3 class="uppercase text-[#ffffff] text-center md:text-left text-lg md:text-2xl mt-5">
            Choisissez votre destination
        </h3>
    </div>

    <div class="flex items-center justify-center">
        <img src="{{ asset('images/Phone/moon.png') }}"
            alt="moon"
            class="w-40 h-40 md:w-60 md:h-60 mx-auto" />
    </div>

    <x-planets>

    </x-planets>

    <h1 class="uppercase text-white flex justify-center mt-20 text-4xl md:text-8xl mt-5">lune</h1>

    <p class="text-[#D0D6F9] text-center text-base md:text-lg lg:text-xl mt-5"> Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.
    </p>

    <section class="mt-10 text-white flex flex-col md:flex-row items-center text-center justify-center gap-10 md:gap-50 mb-10 md:mt-20">
        <div>
            <h3 class="uppercase mb-5 text-[#D0D6F9]">distance</h3>
            <p class="text-white uppercase text-2xl"> 384 000 km</p>
        </div>
        <div class="">
            <h3 class="uppercase mb-5 text-[#D0D6F9]">durée</h3>
            <p class="text-white uppercase text-2xl"> 3 jours</p>
        </div>
    </section>


</x-layoutstar>