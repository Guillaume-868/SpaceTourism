<x-header>

</x-header>



<x-layoutstar>

    <div class="flex flex-row gap-4 bg-[#0B0D17] px-4 py-2  justify-center mb-10">
        <x-nb01 />
        <h3 class="uppercase text-[#ffffff]">Choisissez votre destination</h3>
    </div>

    <div class="flex items-center justify-center h-50">
        <img src="{{asset('images/Phone/mars.png')}}" alt="mars" class="w-50 h-50 mx-auto">
    </div>

    <x-planets>

    </x-planets>

    <h1 class="uppercase text-white flex justify-center mt-20 text-8xl">mars</h1>

    <p class="text-[#D0D6F9] text-center sm:p-4 md:p-6 lg:p-8 xl:p-12 2xl:p-10 mt-5"> N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest!
    </p>

    <section class="mt-10 text-white flex-col items-center text-center mb-10">
        <div>
        <h3 class="uppercase mb-5 text-[#D0D6F9]">distance</h3>
        <p class="text-white uppercase text-2xl"> 225 GM</p>
        </div>
        <div class="mt-10">
        <h3 class="uppercase mb-5 text-[#D0D6F9]">durée</h3>
        <p class="text-white uppercase text-2xl"> 9 mois </p>
        </div>     
    </section>


</x-layoutstar>