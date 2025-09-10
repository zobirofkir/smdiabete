<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full mb-6">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 6a2 2 0 012-2h6l2 2h6a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM5 8a1 1 0 011-1h1a1 1 0 010 2H6a1 1 0 01-1-1zm6 1a1 1 0 100 2h3a1 1 0 100-2H11z"/>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-4">
                    Médiathèque
                </h1>
                <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                    Découvrez nos dernières interventions médiatiques et événements
                </p>
            </div>

            @php
            $videoFolders = [
                'folder' => [
                    ['url' => 'https://youtu.be/q29UyojVhJE?si=mGMnKghTtnxKPldm', 'image' => 'assets/images/events/last-event-1.jpeg', 'title' => 'الأخبار الظهيرة الأولى Journée Mondiale de Diabète'],
                    ['url' => 'https://youtu.be/mh1DFmEbqNc?si=Do1u7xPCnWI_p4ed', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => ' الأخبار الظهيرة الأولى 18/05/2024'],
                ],
            ];
            @endphp

            <!-- Video Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto" id="videoContainer">
                @foreach ($videoFolders as $folder => $videos)
                    @foreach ($videos as $index => $video)
                    <div class="video-item {{ $folder }} group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset($video['image']) }}" alt="Event Image" 
                                 class="w-full h-64 sm:h-72 lg:h-80 object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <button onclick="openModal('{{ $folder }}', '{{ last(explode('/', parse_url($video['url'], PHP_URL_PATH))) }}')" 
                                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-75 group-hover:scale-100">
                                <div class="bg-white/20 backdrop-blur-sm rounded-full p-6 border border-white/30">
                                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                                    </svg>
                                </div>
                            </button>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors duration-300">
                                {{ $video['title'] }}
                            </h3>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Regarder la vidéo
                                </span>
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                                    <svg class="w-4 h-4 text-blue-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>

    <!-- Video Modals -->
    @foreach ($videoFolders as $folder => $videos)
        @foreach ($videos as $index => $video)
            <div id="videoModal{{ $folder }}" class="fixed inset-0 flex items-center justify-center bg-black/80 backdrop-blur-sm hidden transition-all duration-500 ease-in-out transform scale-0 z-[999]">
                <div class="bg-white rounded-2xl shadow-2xl w-11/12 max-w-4xl mx-4 overflow-hidden">
                    <div class="flex items-center justify-between p-6 border-b border-gray-200">
                        <h3 class="text-xl font-bold text-gray-800">Lecture vidéo</h3>
                        <button onclick="closeModal('{{ $folder }}')" class="w-10 h-10 bg-red-500 hover:bg-red-600 text-white rounded-full flex items-center justify-center transition-colors duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <div class="aspect-video">
                        <iframe class="w-full h-full" src="" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach

    <script src="{{asset('assets/js/videos-page.js')}}"></script>
</x-app-layout>
