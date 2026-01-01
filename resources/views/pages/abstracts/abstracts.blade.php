<x-app-layout>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

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
</x-app-layout>