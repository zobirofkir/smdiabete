<!-- Footer -->
<footer class="bg-gradient-to-br from-slate-800 via-slate-900 to-slate-950 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-blue-600 to-emerald-600 rounded-full blur-3xl transform -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tl from-purple-600 to-pink-600 rounded-full blur-3xl transform translate-x-1/2 translate-y-1/2"></div>
    </div>

    <!-- Main Footer Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            <!-- Company Info -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-6">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="SMD Logo" class="h-12 w-auto mr-4">
                    <div>
                        <h3 class="text-xl font-bold bg-gradient-to-r from-blue-400 to-emerald-400 bg-clip-text text-transparent">
                            {{ config('app.name') }}
                        </h3>
                        <p class="text-gray-400 text-sm">Société Marocaine de Diabétologie</p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed mb-6 max-w-md">
                    Nous nous engageons à améliorer la prise en charge du diabète au Maroc à travers la formation, la recherche et l'innovation médicale.
                </p>
                
                <!-- Contact Info -->
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-blue-600/20 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-envelope text-blue-400 text-sm"></i>
                        </div>
                        <a href="mailto:smdiabete@gmail.com" class="text-gray-300 hover:text-blue-400 transition-colors duration-200">
                            smdiabete@gmail.com
                        </a>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-emerald-600/20 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-phone text-emerald-400 text-sm"></i>
                        </div>
                        <a href="https://wa.me/212662630559" class="text-gray-300 hover:text-emerald-400 transition-colors duration-200">
                            +212 6 62 63 05 59
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-6 text-white">Liens Rapides</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ url('/') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-xs text-blue-400 group-hover:translate-x-1 transition-transform duration-200"></i>
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/abouts') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-xs text-blue-400 group-hover:translate-x-1 transition-transform duration-200"></i>
                            À propos
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/masterclass') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-xs text-blue-400 group-hover:translate-x-1 transition-transform duration-200"></i>
                            Formation
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/events') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-xs text-blue-400 group-hover:translate-x-1 transition-transform duration-200"></i>
                            Événements
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/communications') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-xs text-blue-400 group-hover:translate-x-1 transition-transform duration-200"></i>
                            Communications
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-lg font-semibold mb-6 text-white">Services</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ url('/attestations') }}" class="text-gray-300 hover:text-emerald-400 transition-colors duration-200 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-xs text-emerald-400 group-hover:translate-x-1 transition-transform duration-200"></i>
                            Attestations
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/galleries') }}" class="text-gray-300 hover:text-emerald-400 transition-colors duration-200 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-xs text-emerald-400 group-hover:translate-x-1 transition-transform duration-200"></i>
                            Galeries
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/videos') }}" class="text-gray-300 hover:text-emerald-400 transition-colors duration-200 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-xs text-emerald-400 group-hover:translate-x-1 transition-transform duration-200"></i>
                            Vidéos
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/press') }}" class="text-gray-300 hover:text-emerald-400 transition-colors duration-200 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-xs text-emerald-400 group-hover:translate-x-1 transition-transform duration-200"></i>
                            Presse
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contacts') }}" class="text-gray-300 hover:text-emerald-400 transition-colors duration-200 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-xs text-emerald-400 group-hover:translate-x-1 transition-transform duration-200"></i>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="mt-12 pt-8 border-t border-gray-700">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h4 class="text-xl font-semibold mb-3 text-white">Restez informé</h4>
                    <p class="text-gray-300 mb-4">
                        Abonnez-vous à notre newsletter pour recevoir les dernières actualités et événements.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3">
                    <input type="email" placeholder="Votre adresse email" 
                           class="flex-1 px-4 py-3 bg-white/10 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent backdrop-blur-sm">
                    <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-emerald-600 hover:from-blue-700 hover:to-emerald-700 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg whitespace-nowrap">
                        S'abonner
                    </button>
                </div>
            </div>
        </div>

        <!-- Social Media -->
        <div class="mt-8 pt-8 border-t border-gray-700">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-6">
                <div class="text-center sm:text-left">
                    <p class="text-gray-300">
                        Suivez-nous sur les réseaux sociaux
                    </p>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="https://www.youtube.com/@SMD81023" 
                       class="w-10 h-10 bg-red-600 hover:bg-red-700 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110 group">
                        <i class="fab fa-youtube text-white text-lg group-hover:scale-110 transition-transform duration-200"></i>
                    </a>
                    <a href="https://web.facebook.com/profile.php?id=61553634816576" 
                       class="w-10 h-10 bg-blue-600 hover:bg-blue-700 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110 group">
                        <i class="fab fa-facebook-f text-white text-lg group-hover:scale-110 transition-transform duration-200"></i>
                    </a>
                    <a href="#" 
                       class="w-10 h-10 bg-gray-800 hover:bg-gray-900 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110 group">
                        <i class="fa-brands fa-x-twitter text-white text-lg group-hover:scale-110 transition-transform duration-200"></i>
                    </a>
                    <a href="#" 
                       class="w-10 h-10 bg-blue-700 hover:bg-blue-800 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110 group">
                        <i class="fab fa-linkedin-in text-white text-lg group-hover:scale-110 transition-transform duration-200"></i>
                    </a>
                    <a href="#" 
                       class="w-10 h-10 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110 group">
                        <i class="fab fa-instagram text-white text-lg group-hover:scale-110 transition-transform duration-200"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="relative z-10 border-t border-gray-700 bg-slate-900/50 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-center md:text-left">
                    <p class="text-gray-400 text-sm">
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> 
                        <span class="text-white font-medium">{{ config('app.name') }}</span>. 
                        Tous droits réservés.
                    </p>
                </div>
                <div class="flex items-center space-x-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                        Politique de confidentialité
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                        Conditions d'utilisation
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                        Mentions légales
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Footer specific styles */
    footer {
        position: relative;
    }
    
    footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.5), rgba(16, 185, 129, 0.5), transparent);
    }
    
    @media (max-width: 768px) {
        footer .grid {
            gap: 2rem;
        }
    }
    
    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
</style>