<div class="flex flex-col md:flex-row items-center justify-center py-16 px-8 md:px-16 space-y-8 md:space-y-0 md:space-x-12 rounded-lg shadow-lg bg-white hover:shadow-2xl transition-shadow duration-300">
    <!-- Image Section -->
    <div class="w-full md:w-1/2 max-w-xl">
        <img src="{{asset('assets/images/affiche/affiche-two.jpeg')}}" alt="SMD Image" class="w-full h-auto md:h-full rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
    </div>

    <!-- Text Section -->
    <div class="w-full md:w-1/2 text-center md:text-left space-y-6">
        <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-4 transition-all duration-300 transform hover:text-blue-600 hover:scale-105">
            À Propos De Nous
        </h1>
        <h3 class="text-lg md:text-xl text-blue-900 mb-6 italic">
            Société Marocaine de Diabétologie
        </h3>

        <!-- Text content with toggle for mobile view -->
        <div id="mobile-text" class="text-blue-900 text-base md:text-lg leading-relaxed mb-6 tracking-wide opacity-90 hover:opacity-100 transition-all duration-300 md:max-h-screen max-h-0 overflow-hidden ease-in-out transition-all duration-500">
            La Société Marocaine de Diabétologie (SMD) est une association à but non lucratif, dédiée aux médecins spécialistes en diabétologie ou intéressés par cette discipline distinguée. Fondée pour promouvoir une meilleure compréhension et gestion du diabète, la SMD joue un rôle crucial dans la formation continue des professionnels de la santé, notamment au Maroc.
            <br><br>
            Notre association s’engage à offrir des ressources éducatives de qualité, y compris des conférences, des séminaires et des ateliers pratiques. Nous croyons que l'union et la collaboration entre les spécialistes de la santé sont essentielles pour relever les défis liés au diabète.
        </div>

        <!-- Mobile List with full display on large screens -->
        <div id="mobile-list" class="space-y-4 md:space-y-4 md:max-h-screen max-h-0 overflow-hidden ease-in-out transition-all duration-500">
            <h2 class="text-base md:text-lg font-semibold text-blue-900 hover:text-gray-100 cursor-pointer transition duration-300 relative pl-6">
                <span class="absolute left-0 top-0 text-blue-400 font-bold">1.</span>
                Assurer une formation continue et mise à jour pour les professionnels de la santé.
            </h2>
            <h2 class="text-base md:text-lg font-semibold text-blue-900 hover:text-gray-100 cursor-pointer transition duration-300 relative pl-6">
                <span class="absolute left-0 top-0 text-blue-400 font-bold">2.</span>
                Promouvoir la recherche en diabétologie pour innover dans les méthodes de traitement.
            </h2>
            <h2 class="text-base md:text-lg font-semibold text-blue-900 hover:text-gray-100 cursor-pointer transition duration-300 relative pl-6">
                <span class="absolute left-0 top-0 text-blue-400 font-bold">3.</span>
                Faciliter l’échange d’expertises et de connaissances entre praticiens via des plateformes de communication et événements dédiés.
            </h2>
            <h2 class="text-base md:text-lg font-semibold text-blue-900 hover:text-gray-100 cursor-pointer transition duration-300 relative pl-6">
                <span class="absolute left-0 top-0 text-blue-400 font-bold">4.</span>
                Sensibiliser le grand public aux enjeux de la prévention et du traitement du diabète.
            </h2>
            <h2 class="text-base md:text-lg font-semibold text-blue-900 hover:text-gray-100 cursor-pointer transition duration-300 relative pl-6">
                <span class="absolute left-0 top-0 text-blue-400 font-bold">5.</span>
                Fédérer les efforts des acteurs autour d'une vision commune du traitement et de la prise en charge du diabète.
            </h2>
        </div>

        <!-- Read More Button for Mobile -->
        <button id="read-more-btn" class="text-blue-600 font-bold md:hidden" onclick="toggleText()">
            Lire la suite
        </button>
    </div>
</div>
