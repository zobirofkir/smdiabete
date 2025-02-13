<div class="px-8 md:px-16 mt-20 mb-20">
    <div class="flex flex-col gap-4 mb-8 justify-center items-center">
        <h1 class="text-4xl font-extrabold text-sky-600 text-center uppercase tracking-wider">Vidéos</h1>
    </div>

    <!-- Buttons for filtering -->
    <div class="flex md:flex-row flex-col justify-center mb-8 gap-4">
        <button onclick="filterVideos('folder1')" class="px-6 py-3 bg-sky-600 text-white rounded-lg hover:bg-sky-700 transition">Journée Mondiale du Diabète</button>
        <button onclick="filterVideos('folder2')" class="px-6 py-3 bg-sky-600 text-white rounded-lg hover:bg-sky-700 transition">1er Congrès National de Diabètologie (2024)</button>
        <button onclick="filterVideos('folder3')" class="px-6 py-3 bg-sky-600 text-white rounded-lg hover:bg-sky-700 transition">2e Congrès National de Diabètologie (2025)</button>
    </div>

    <div>
        @php
        $videoFolders = [
            'folder1' => [
                ['url' => 'https://youtu.be/aBtaq1r8TM4', 'image' => 'assets/images/events/last-event-1.jpeg', 'title' => 'Journée Mondiale du Diabète'],
            ],
            'folder2' => [
                ['url' => 'https://youtu.be/24UhIt3vTiY?si=sWlPNhbtDQys4_h7', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'Annonce Congrès SMD 2024'],
                ['url' => 'https://youtu.be/yDnhS1QNtg4?si=xcydYx2p0U2J8qKC', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'Congrès National de Diabétologie Mai 2024 Best of SMD 2024'],
                ['url' => 'https://youtu.be/EXTTBPPOrRA?si=sfOHAaIWyxSDTLkN', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'Comment protéger le cœur de nos diabétiques Pr Mohammed Alami'],
                ['url' => 'https://youtu.be/5G1Rv8Gjf_c?si=cFA_ruuao-jrHph_', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => "Isglt au cœur de la prise en charge du rien diabétique Point de vue de l'endocrinologue"],
                ['url' => 'https://youtu.be/lI2-Bu3CJBM?si=ebgE15qUOFmaFQWC', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => "Isglt au cœur de la prise en charge du rien diabétique Point de vue du néphrologue"],
                ['url' => 'https://youtu.be/Gw4QmNCoh7w?si=6sCty5hvMQmt6Rql', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => "ICAN Profil ambulatoire du glucose AGP Guide de l'interprétation des données du CGM Pr. L. ABAINOU"],
                ['url' => 'https://youtu.be/EFi56ebRDZQ?si=71XNaBwYkDMvuPNZ', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'Place des nouvelles insulines dans la prise en charge du diabète de type 2 Pr.INES KHOCHTALI'],
                ['url' => 'https://youtu.be/BJnR4oAYO5Y?si=Lro8-zV8DvONlNuH', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => "Optimisation de la gestion du Diabète de type 2 l'IglarLixi Pr Fayçal El Guendouz"],
                ['url' => 'https://youtu.be/cv3j5DjVIM8?si=L5aZYg5gZPlG9rZ1', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'Merci Aux SPONSORS'],
                ['url' => 'https://youtu.be/GrYAZsQ4saI?si=fmgcN0p8_csAwDP-', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'Prevention CV au cœur de la prise en charge du Patient DT2 Pr Christophe PHILIPS'],
                ['url' => 'https://youtu.be/44hFylBmzoY?si=Oe_3gOpewoX93Y4H', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'Quels outils utiliser ? Pr INES KHOCHTALI'],
                ['url' => 'https://youtu.be/7LT_cFDN4fY?si=njVWzE5sOJ6Zyf-D', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'Atelier CGM : de la Théorie à la pratique Pr L Abainou'],
                ['url' => 'https://youtu.be/fqqibAHpZNc?si=3bVpFXTe7zzXRrET', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'APP GLUCISMART Congrès National de Diabétologie Mai 2024 Hôtel Royal Tulip Tanger'],
                ['url' => 'https://youtu.be/bavT7kroTXE?si=eHU4G2xYMemELRWG', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'Insulinothérapie fonctionnelle : De la théorie à la pratique Pr FATIMA AZIOUAZ'],
                ['url' => 'https://youtu.be/JuOZcDhcjC8?si=pkJuqxetaDn93Aj0', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'Can Patient Education & Technology Improve Diabetes Targets ? Pr MOHAMMED HASSANEIN'],
                ['url' => 'https://youtu.be/W3mtrXZ8Lk4?si=6SIkLs45YFZ_Zok4', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => 'Place des nouvelles insulines dans la prise en charge du Diabète du type 2 Pr INES KHOCHTALI'],
            ],
            'folder3' => [
                ['url' => 'https://youtu.be/uXvQ2DL-OSg?si=I5ibsCc_JKhaSZVS', 'image' => 'assets/images/events/last-event-3.jpeg', 'title' => 'Annonce Congrès National de Diabétologie 2025'],
            ],
        ];
    @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="videoContainer">
            @foreach ($videoFolders as $folder => $videos)
                @foreach ($videos as $index => $video)
                <div class="video-item {{ $folder }} bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="max-h-[300px] overflow-hidden">
                        @if(isset($video['image']))
                            <img src="{{ asset($video['image']) }}" alt="Event Image" class="w-full h-full object-cover">
                        @else
                            <img src="{{ asset('assets/images/events/last-event-1.jpeg') }}" alt="Event Image" class="w-full h-full object-cover">
                        @endif
                    </div>
                    <div class="p-4 flex items-center justify-center gap-4">
                        <button onclick="openModal('{{ $folder }}', '{{ last(explode('/', parse_url($video['url'], PHP_URL_PATH))) }}')" class="text-3xl text-gray-600 hover:text-gray-800">
                            <i class="fas fa-play-circle"></i>
                        </button>
                        <h3 class="md:text-2xl text-xl font-semibold">{{ $video['title'] }}</h3>
                    </div>
                </div>
                @endforeach
            @endforeach
        </div>

    </div>
</div>

@foreach ($videoFolders as $folder => $videos)
    @foreach ($videos as $index => $video)
        <div id="videoModal{{ $folder }}" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden transition-all duration-500 ease-in-out transform scale-0 z-[999]">
            <div class="bg-white p-4 rounded-lg w-11/12 md:w-1/2">
                <button onclick="closeModal('{{ $folder }}')" class="absolute top-0 right-0 p-2 text-white bg-red-600 rounded-full mt-4 mx-4">X</button>
                <iframe class="w-full h-64" src="" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    @endforeach
@endforeach

<script src="{{asset('assets/js/videos-page.js')}}"></script>
