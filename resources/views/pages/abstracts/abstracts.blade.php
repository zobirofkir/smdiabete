<x-app-layout>
    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 transform transition-all duration-300 scale-95 opacity-0" id="modalContent">
            <div class="p-8 text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div class="text-4xl mb-4">📩</div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Message automatique après soumission</h3>
                <div class="text-gray-600 space-y-2">
                    <p>Merci pour votre soumission.</p>
                    <p>Votre abstract a été reçu avec succès.</p>
                    <p>Un email de confirmation vous sera envoyé.</p>
                </div>
                <button onclick="closeModal()" class="mt-6 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-200 font-medium">
                    Fermer
                </button>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- En-tête du congrès -->
            @include('components.abstracts.abstract-header')

            <!-- Formulaire principal -->
            @include('components.abstracts.abstract-form')

            <!-- Message de confirmation (caché initialement) -->
            @include('components.abstracts.abstract-message')

            <!-- Instructions -->
            @include('components.abstracts.abstract-instruction')
            
        </div>
    </div>

    <script src="{{ asset('assets/js/abstract.js') }}"></script>
    
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                showModal();
            });
        </script>
    @endif
</x-app-layout>