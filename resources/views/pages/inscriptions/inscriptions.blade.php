<x-app-layout>
    <link rel="stylesheet" href="{{asset('assets/css/form-animations.css')}}">
    
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-cyan-50 py-12 px-4 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
        <div class="absolute top-0 right-0 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>
        
        <div class="lg:max-w-5xl mx-w-full mx-auto relative ">
            <!-- Hero Image Section -->
            <div class="relative mb-12 rounded-3xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-all duration-500">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20 z-10"></div>
                <img src="{{asset('assets/images/affiche/affiche-four.jpeg')}}" 
                     alt="Formation Diabète" 
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/10 z-20"></div>
            </div>

            @include('components.inscription.inscription-header')

            @include('components.inscription.inscription-form')
            
        </div>
    </div>

    <script src="{{asset('assets/js/inscriptions.js')}}"></script>
    
    <script>
        function openPricingModal() {
            document.getElementById('pricingModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function closePricingModal() {
            document.getElementById('pricingModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        
        // Close modal when clicking outside
        document.getElementById('pricingModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closePricingModal();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closePricingModal();
            }
        });
    </script>
    
    <style>
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(12deg); }
        }
        .group:hover .group-hover\:rotate-12 {
            animation: rotate 0.3s ease-in-out;
        }
    </style>
</x-app-layout>
