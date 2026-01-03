<section class="relative w-full min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    </div>

    <!-- Animated Shapes -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-emerald-500/20 rounded-full blur-3xl animate-float-delayed"></div>
    </div>

    <!-- Main Content Container -->
    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center min-h-screen py-20">
            <!-- Content Section -->
            <div class="text-center lg:text-left space-y-8 animate-fade-up">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-blue-500/20 backdrop-blur-sm rounded-full border border-blue-400/30">
                    <span class="text-blue-300 text-sm font-medium">Healthcare Excellence</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight">
                    <span class="bg-gradient-to-r from-blue-400 to-emerald-400 bg-clip-text text-transparent">
                        Société Marocaine
                    </span>
                    <br>
                    <span class="text-white">de Diabétologie</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl sm:text-2xl text-gray-300 font-light">
                    Moroccan Diabetology Society
                </p>

                <!-- Arabic Text -->
                <p class="text-lg sm:text-xl text-gray-400 font-medium" dir="rtl">
                    الجمعية المغربية لأمراض السكري
                </p>

            </div>

            <!-- Visual Section -->
            <div class="relative flex justify-center lg:justify-end animate-fade-left">
                <!-- Logo Container -->
                <div class="relative">
                    <!-- Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-emerald-500 rounded-full blur-2xl opacity-30 animate-pulse-slow"></div>
                    
                    <!-- Logo -->
                    <div class="relative bg-white/20 backdrop-blur-lg rounded-2xl p-8 border border-white shadow-2xl">
                        <img src="{{asset('assets/images/logo.png')}}" alt="SMD Logo" class="w-48 sm:w-64 lg:w-80 h-auto rounded-md">
                    </div>
                </div>

                <!-- Floating Elements -->
                <div class="absolute top-10 -left-10 w-20 h-20 bg-blue-500/30 rounded-full animate-bounce-slow"></div>
                <div class="absolute bottom-10 -right-10 w-16 h-16 bg-emerald-500/30 rounded-full animate-bounce-delayed"></div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-gray-400 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-gray-400 rounded-full mt-2 animate-scroll"></div>
        </div>
    </div>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        @keyframes float-delayed {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(-5deg); }
        }
        
        @keyframes fade-up {
            from { 
                opacity: 0; 
                transform: translateY(60px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
        
        @keyframes fade-left {
            from { 
                opacity: 0; 
                transform: translateX(60px); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0); 
            }
        }
        
        @keyframes pulse-slow {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes bounce-delayed {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        
        @keyframes scroll {
            0% { transform: translateY(0); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateY(12px); opacity: 0; }
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
        }
        
        .animate-fade-up {
            animation: fade-up 1s ease-out 0.2s both;
        }
        
        .animate-fade-left {
            animation: fade-left 1s ease-out 0.6s both;
        }
        
        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }
        
        .animate-bounce-slow {
            animation: bounce-slow 3s ease-in-out infinite;
        }
        
        .animate-bounce-delayed {
            animation: bounce-delayed 3s ease-in-out infinite 1.5s;
        }
        
        .animate-scroll {
            animation: scroll 2s ease-in-out infinite;
        }
        
        /* Responsive adjustments */
        @media (max-width: 640px) {
            .min-h-screen {
                min-height: 100vh;
            }
        }
    </style>
</section>
