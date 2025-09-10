<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 py-24 px-4 sm:px-6 lg:px-8">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative max-w-7xl mx-auto text-center">
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 tracking-tight">
            Galerie <span class="text-blue-400">Vidéo</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
            Explorez notre collection complète de conférences médicales et de contenu éducatif
        </p>
    </div>
</div>

<!-- Filter Navigation -->
<div class="bg-white shadow-lg sticky top-0 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex flex-wrap justify-center gap-3">
            <button onclick="filterVideos('all')" class="filter-btn active px-6 py-3 rounded-full font-semibold transition-all duration-300 bg-blue-600 text-white hover:bg-blue-700 shadow-lg">
                Toutes les Vidéos
            </button>
            <button onclick="filterVideos('folder1')" class="filter-btn px-6 py-3 rounded-full font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                Journée Mondiale du Diabète
            </button>
            <button onclick="filterVideos('folder2')" class="filter-btn px-6 py-3 rounded-full font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                Congrès 2024
            </button>
            <button onclick="filterVideos('folder3')" class="filter-btn px-6 py-3 rounded-full font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                Congrès 2025
            </button>
        </div>
    </div>
</div>

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
                ['url' => 'assets/videos/2eme-congré.mp4', 'image' => 'assets/images/events/last-event-3.jpeg', 'title' => 'Annonce Congrès National de Diabétologie 2025', 'type' => 'local'],
            ],
        ];
@endphp

<!-- Stats Section -->
<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white rounded-xl p-8 shadow-lg">
                <div class="text-4xl font-bold text-blue-600 mb-2">{{ count($videoFolders['folder1']) + count($videoFolders['folder2']) + count($videoFolders['folder3']) }}+</div>
                <div class="text-gray-600 font-semibold">Vidéos Éducatives</div>
            </div>
            <div class="bg-white rounded-xl p-8 shadow-lg">
                <div class="text-4xl font-bold text-blue-600 mb-2">3</div>
                <div class="text-gray-600 font-semibold">Catégories d'Événements</div>
            </div>
            <div class="bg-white rounded-xl p-8 shadow-lg">
                <div class="text-4xl font-bold text-blue-600 mb-2">HD</div>
                <div class="text-gray-600 font-semibold">Contenu de Qualité</div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <!-- Video Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8" id="videoContainer">
        @foreach ($videoFolders as $folder => $videos)
            @foreach ($videos as $index => $video)
            <div class="video-item {{ $folder }} group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="relative aspect-video overflow-hidden">
                    @if(isset($video['image']))
                        <img src="{{ asset($video['image']) }}" alt="{{ $video['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    @else
                        <img src="{{ asset('assets/images/events/last-event-1.jpeg') }}" alt="{{ $video['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    @endif
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all duration-300"></div>
                    <button onclick="openModal('{{ $folder }}', '{{ isset($video['type']) && $video['type'] == 'local' ? $video['url'] : last(explode('/', parse_url($video['url'], PHP_URL_PATH))) }}')" 
                            class="absolute inset-0 flex items-center justify-center text-white hover:text-blue-400 transition-colors duration-300">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:bg-white/30 transition-all duration-300">
                            <i class="fas fa-play text-3xl ml-1"></i>
                        </div>
                    </button>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-blue-600 transition-colors duration-300">
                        {{ $video['title'] }}
                    </h3>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 font-medium">
                            @if($folder == 'folder1') Journée Mondiale du Diabète
                            @elseif($folder == 'folder2') Congrès 2024
                            @else Congrès 2025
                            @endif
                        </span>
                        <button onclick="openModal('{{ $folder }}', '{{ isset($video['type']) && $video['type'] == 'local' ? $video['url'] : last(explode('/', parse_url($video['url'], PHP_URL_PATH))) }}')" 
                                class="text-blue-600 hover:text-blue-800 font-semibold text-sm transition-colors duration-300">
                            Regarder →
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        @endforeach
    </div>
</div>

    </div>
</div>

<!-- Video Modals -->
@foreach ($videoFolders as $folder => $videos)
    <div id="videoModal{{ $folder }}" class="fixed inset-0 flex items-center justify-center bg-black/80 backdrop-blur-sm hidden transition-all duration-300 ease-out transform scale-95 opacity-0 z-[999]">
        <div class="bg-white rounded-2xl w-11/12 md:w-4/5 lg:w-3/4 xl:w-2/3 max-w-6xl mx-4 overflow-hidden shadow-2xl">
            <div class="flex items-center justify-between p-6 border-b border-gray-200">
                <h3 class="text-xl font-bold text-gray-900">Lecteur Vidéo</h3>
                <button onclick="closeModal('{{ $folder }}')" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 hover:bg-red-100 text-gray-600 hover:text-red-600 transition-colors duration-200">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>
            <div class="aspect-video">
                <iframe class="w-full h-full" src="" frameborder="0" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
            </div>
        </div>
    </div>
@endforeach

<link rel="stylesheet" href="{{asset('assets/css/videos.css')}}">
<script src="{{asset('assets/js/videos-page.js')}}"></script>
