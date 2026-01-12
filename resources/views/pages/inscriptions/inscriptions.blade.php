<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-cyan-50 py-12 px-4 relative overflow-hidden">
        @include('components.inscription.background')
        @include('components.inscription.header')
        @include('components.inscription.pricing-button')
        
        <div class="max-w-5xl mx-auto relative z-[9999]">
            @include('components.inscription.pricing-modal')
        </div>

        <div class="max-w-5xl mx-auto relative">
            <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 overflow-hidden relative">
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600"></div>
                
                <form action="{{ route('inscriptions.store') }}" method="POST" class="p-10" enctype="multipart/form-data">
                    @csrf
                    @include('components.inscription.alerts')
                    @include('components.inscription.form-sections')
                </form>
                
                @include('components.inscription.bottom-section')
            </div>
        </div>
    </div>

    @include('components.inscription.scripts')
</x-app-layout>