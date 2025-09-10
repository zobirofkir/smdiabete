<section class="bg-gradient-to-br from-slate-50 to-blue-50 py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
            
            <!-- Content Section -->
            <div class="order-2 lg:order-1 space-y-6">
                <!-- Header -->
                <div class="space-y-4">
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-sm font-medium">
                        <i class="fas fa-heartbeat mr-2"></i>
                        Association Médicale
                    </div>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        À Propos De <span class="text-blue-600">Nous</span>
                    </h1>
                    <p class="text-xl text-gray-600 font-medium">
                        Société Marocaine de Diabétologie
                    </p>
                </div>

                <!-- Description -->
                <div class="prose prose-lg text-gray-700 leading-relaxed">
                    <p class="mb-4">
                        La Société Marocaine de Diabétologie (SMD) est une association à but non lucratif, dédiée aux médecins spécialistes en diabétologie ou intéressés par cette discipline distinguée.
                    </p>
                    <div id="expandable-content" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out md:max-h-none">
                        <p class="mb-4">
                            Fondée pour promouvoir une meilleure compréhension et gestion du diabète, la SMD joue un rôle crucial dans la formation continue des professionnels de la santé, notamment au Maroc.
                        </p>
                        <p>
                            Notre association s'engage à offrir des ressources éducatives de qualité, y compris des conférences, des séminaires et des ateliers pratiques.
                        </p>
                    </div>
                </div>

                <!-- Objectives -->
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Nos Objectifs</h3>
                    <div id="objectives-list" class="space-y-3 max-h-0 overflow-hidden transition-all duration-500 ease-in-out md:max-h-none">
                        <div class="flex items-start space-x-3 p-3 rounded-lg bg-white shadow-sm border border-gray-100">
                            <div class="flex-shrink-0 w-6 h-6 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-sm font-bold">1</div>
                            <p class="text-gray-700">Assurer une formation continue et mise à jour pour les professionnels de la santé.</p>
                        </div>
                        <div class="flex items-start space-x-3 p-3 rounded-lg bg-white shadow-sm border border-gray-100">
                            <div class="flex-shrink-0 w-6 h-6 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-sm font-bold">2</div>
                            <p class="text-gray-700">Promouvoir la recherche en diabétologie pour innover dans les méthodes de traitement.</p>
                        </div>
                        <div class="flex items-start space-x-3 p-3 rounded-lg bg-white shadow-sm border border-gray-100">
                            <div class="flex-shrink-0 w-6 h-6 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-sm font-bold">3</div>
                            <p class="text-gray-700">Faciliter l'échange d'expertises et de connaissances entre praticiens.</p>
                        </div>
                        <div class="flex items-start space-x-3 p-3 rounded-lg bg-white shadow-sm border border-gray-100">
                            <div class="flex-shrink-0 w-6 h-6 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-sm font-bold">4</div>
                            <p class="text-gray-700">Sensibiliser le grand public aux enjeux de la prévention et du traitement du diabète.</p>
                        </div>
                        <div class="flex items-start space-x-3 p-3 rounded-lg bg-white shadow-sm border border-gray-100">
                            <div class="flex-shrink-0 w-6 h-6 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-sm font-bold">5</div>
                            <p class="text-gray-700">Fédérer les efforts des acteurs autour d'une vision commune du traitement.</p>
                        </div>
                    </div>
                </div>

                <!-- Read More Button -->
                <button id="toggle-btn" onclick="toggleContent()" class="md:hidden inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
                    <span id="btn-text">Lire la suite</span>
                    <i id="btn-icon" class="fas fa-chevron-down ml-2 transition-transform duration-200"></i>
                </button>
            </div>

            <!-- Members Section -->
            <div class="order-1 lg:order-2">
                <div class="bg-white rounded-2xl shadow-xl p-6 lg:p-8 border border-gray-100">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">Notre Bureau</h2>
                        <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-emerald-600 mx-auto rounded-full"></div>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="text-center p-4 bg-gradient-to-r from-blue-50 to-emerald-50 rounded-xl border border-blue-100">
                            <h3 class="text-lg font-semibold text-blue-800 mb-1">Présidente</h3>
                            <p class="text-gray-700 font-medium">Dr Sonia ABAHOU</p>
                        </div>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4">
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <h3 class="text-base font-semibold text-gray-800 mb-1">Secrétaire Générale</h3>
                                <p class="text-gray-600">Dr Zineb AL HOUARI</p>
                            </div>
                            
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <h3 class="text-base font-semibold text-gray-800 mb-1">Secrétaire Générale Adjointe</h3>
                                <p class="text-gray-600">Dr Yousra AOUINATI</p>
                            </div>
                            
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <h3 class="text-base font-semibold text-gray-800 mb-1">Trésorière</h3>
                                <p class="text-gray-600">Dr Mounia CHANA</p>
                            </div>
                            
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <h3 class="text-base font-semibold text-gray-800 mb-1">Vice Trésorier</h3>
                                <p class="text-gray-600">Dr Moulay El Hassan EL ALAOUI</p>
                            </div>
                        </div>
                        
                        <div class="text-center p-4 bg-gradient-to-r from-emerald-50 to-blue-50 rounded-xl border border-emerald-100">
                            <h3 class="text-base font-semibold text-emerald-800 mb-2">Assesseurs</h3>
                            <div class="space-y-1 text-sm text-gray-600">
                                <p>Dr Imane KHALDOUNI</p>
                                <p>Dr Jade ISSOUANI</p>
                                <p>Dr Nadia BOUIZMAN</p>
                                <p>Dr Siham DRISSI ABOULAHJOUL</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleContent() {
    const content = document.getElementById('expandable-content');
    const objectives = document.getElementById('objectives-list');
    const btnText = document.getElementById('btn-text');
    const btnIcon = document.getElementById('btn-icon');
    
    const isExpanded = content.style.maxHeight !== '0px' && content.style.maxHeight !== '';
    
    if (isExpanded) {
        content.style.maxHeight = '0px';
        objectives.style.maxHeight = '0px';
        btnText.textContent = 'Lire la suite';
        btnIcon.classList.remove('rotate-180');
    } else {
        content.style.maxHeight = content.scrollHeight + 'px';
        objectives.style.maxHeight = objectives.scrollHeight + 'px';
        btnText.textContent = 'Réduire';
        btnIcon.classList.add('rotate-180');
    }
}
</script>