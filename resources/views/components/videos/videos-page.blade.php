<div class="px-8 md:px-16 mt-20 mb-20">
    <div class="flex justify-center items-center">
        <h1 class="text-4xl font-extrabold text-sky-600 text-center mb-8 uppercase tracking-wider">Vidéos</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @php
            $videos = [
                'https://youtu.be/24UhIt3vTiY?si=sWlPNhbtDQys4_h7',
                'https://youtu.be/yDnhS1QNtg4?si=xcydYx2p0U2J8qKC',
                'https://youtu.be/PVMmfaC_EEM?si=y4tFFHHyB6OhmiFB',
                'https://youtu.be/aBtaq1r8TM4?si=fk3xzhwMPfFvbqAM',
                'https://youtu.be/q29UyojVhJE?si=mGMnKghTtnxKPldm',
                'https://youtu.be/EXTTBPPOrRA?si=sfOHAaIWyxSDTLkN',
                'https://youtu.be/5G1Rv8Gjf_c?si=cFA_ruuao-jrHph_',
                'https://youtu.be/lI2-Bu3CJBM?si=ebgE15qUOFmaFQWC',
                'https://youtu.be/Gw4QmNCoh7w?si=6sCty5hvMQmt6Rql',
                'https://youtu.be/EFi56ebRDZQ?si=71XNaBwYkDMvuPNZ',
                'https://youtu.be/BJnR4oAYO5Y?si=Lro8-zV8DvONlNuH',
                'https://youtu.be/cv3j5DjVIM8?si=L5aZYg5gZPlG9rZ1',
                'https://youtu.be/GrYAZsQ4saI?si=fmgcN0p8_csAwDP-',
                'https://youtu.be/44hFylBmzoY?si=Oe_3gOpewoX93Y4H',
                'https://youtu.be/7LT_cFDN4fY?si=njVWzE5sOJ6Zyf-D',
                'https://youtu.be/lkwNn4DDIzc?si=rNHrNyrZr5RWguTA',
                'https://youtu.be/fqqibAHpZNc?si=3bVpFXTe7zzXRrET',
                'https://youtu.be/bavT7kroTXE?si=eHU4G2xYMemELRWG',
                'https://youtu.be/JuOZcDhcjC8?si=pkJuqxetaDn93Aj0',
                'https://youtu.be/W3mtrXZ8Lk4?si=6SIkLs45YFZ_Zok4',
            ];

            $titles = [
                'Annonce Congrès SMD 2024',
                'Congrès National de Diabétologie Mai 2024 Best of SMD 2024',
                '1er congrès de Diabétologie',
                'Journée Mondiale du Diabète',
                'الأخبار الظهيرة الأولى 17112024 Journée Mondiale de Diabète',
                'ASTRAZENECA Comment protéger le cœur de nos diabétiques Pr Mohammed Alami',
                "BOEHRINGER Isglt au cœur de la prise en charge du rien diabétique Point de vue de l'endocrinologue",
                'BOEHRINGER Isglt au cœur de la prise en charge du rien diabétique Point de vue du néphrologue',
                "ICAN Profil ambulatoire du glucose AGP Guide de l'interprétation des données du CGM Pr. L. ABAINOU",
                'SANOFI Place des nouvelles insulines dans la prise en charge du diabète de type 2 Pr.INES KHOCHTALI',
                "SANOFI Optimisation de la gestion du Diabète de type 2 l'IglarLixi Pr Fayçal El Guendouz",
                'Merci Aux SPONSORS',
                'Prevention CV au cœur de la prise en charge du Patient DT2 Pr Christophe PHILIPS',
                'Quels outils utiliser ? Pr INES KHOCHTALI',
                'Atelier CGM : de la Théorie à la pratique Pr L Abainou',
                'Best of SMD 2024',
                'APP GLUCISMART Congrès National de Diabétologie Mai 2024 Hôtel Royal Tulip Tanger',
                'Insulinothérapie fonctionnelle : De la théorie à la pratique Pr FATIMA AZIOUAZ',
                'Can Patient Education & Technology Improve Diabetes Targets ? Pr MOHAMMED HASSANEIN',
                'Place des nouvelles insulines dans la prise en charge du Diabète du type 2 Pr INES KHOCHTALI',
            ];
        @endphp

        @foreach ($videos as $index => $videoUrl)
            <!-- Event Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="max-h-[300px] overflow-hidden">
                    <img src="{{ asset('assets/images/events/last-event-1.jpeg') }}" alt="Event Image" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <h3 class="md:text-2xl text-xl font-semibold">{{ $titles[$index] }}</h3>
                    <div class="flex space-x-4 mt-3">
                        <!-- Video Icon -->
                        <button onclick="openModal('video{{ $index + 1 }}')" class="text-3xl text-gray-600 hover:text-gray-800">
                            <i class="fas fa-play-circle w-12 h-12"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Modals for Videos -->
@foreach ($videos as $index => $videoUrl)
    <div id="videoModal{{ $index + 1 }}" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden transition-all duration-500 ease-in-out transform scale-0 z-[999]">
        <div class="bg-white p-4 rounded-lg w-11/12 md:w-1/2">
            <button onclick="closeModal('video{{ $index + 1 }}')" class="absolute top-0 right-0 p-2 text-white bg-red-600 rounded-full mt-4 mx-4">X</button>
            <iframe id="video{{ $index + 1 }}" class="w-full h-64" src="https://www.youtube.com/embed/{{ substr(parse_url($videoUrl, PHP_URL_PATH), 1) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
@endforeach

<script>
    function openModal(videoId) {
        const modal = document.getElementById('videoModal' + videoId.replace('video', ''));
        modal.classList.remove('hidden');
        modal.classList.add('scale-100');
    }

    function closeModal(videoId) {
        const modal = document.getElementById('videoModal' + videoId.replace('video', ''));
        modal.classList.remove('scale-100');
        modal.classList.add('scale-0');
    }
</script>
