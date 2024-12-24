<section class="px-8 md:px-16">
    <div class="text-center">
        <h1>
            Les membres de la {{config('app.name')}} remercient les laboratoires pharmaceutiques et les sociétés du matériel médical pour leur soutien moral et financier ainsi qu’a leur confiance. Cette participation a contribué à la réalisation de cette importante rencontre scientifique.
        </h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach (range(1, 23) as $item)
            <div class="bg-white rounded-lg shadow-md p-4 text-center">
                <div class="flex justify-center items-center h-32 w-full overflow-hidden bg-white rounded-lg">
                    <img
                        src="{{asset('assets/images/sponsors/sponsor-' . $item . '.jpeg')}}"
                        alt="Sponsor Logo"
                        class="object-contain h-full w-auto"
                    >
                </div>
                <button class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded mt-10">
                    Visiter le Stand
                </button>
            </div>
        @endforeach
    </div>
</section>
