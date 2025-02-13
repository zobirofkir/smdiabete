<x-app-layout>
    <div class="px-8 md:px-16 mt-20 mb-20">
        <div class="flex flex-col gap-4 mb-8 justify-center items-center">
            <h1 class="text-4xl font-extrabold text-sky-600 text-center uppercase tracking-wider">Vidéos</h1>
        </div>

        <div>
            @php
            $videoFolders = [
                'folder' => [
                    ['url' => 'https://youtu.be/q29UyojVhJE?si=mGMnKghTtnxKPldm', 'image' => 'assets/images/events/last-event-1.jpeg', 'title' => 'الأخبار الظهيرة الأولى Journée Mondiale de Diabète'],
                    ['url' => 'https://youtu.be/mh1DFmEbqNc?si=Do1u7xPCnWI_p4ed', 'image' => 'assets/images/events/last-event-2.jpeg', 'title' => ' الأخبار الظهيرة الأولى 18/05/2024'],
                ],
            ];
        @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="videoContainer">
                @foreach ($videoFolders as $folder => $videos)
                    @foreach ($videos as $index => $video)
                    <div class="video-item {{ $folder }} bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="max-h-[300px] overflow-hidden">
                            <img src="{{ asset($video['image']) }}" alt="Event Image" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4 flex items-center justify-center gap-4">
                            <button onclick="openModal('{{ $folder }}', '{{ last(explode('/', parse_url($video['url'], PHP_URL_PATH))) }}')" class="text-3xl text-gray-600 hover:text-gray-800">
                                <i class="fas fa-play-circle"></i>
                            </button>
                            <h3 class="md:text-2xl text-xl font-semibold">{{ $video['title'] }}</h3>
                        </div>
                    </div>
                    @endforeach
                @endforeach
            </div>

        </div>
    </div>

    @foreach ($videoFolders as $folder => $videos)
        @foreach ($videos as $index => $video)
            <div id="videoModal{{ $folder }}" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden transition-all duration-500 ease-in-out transform scale-0 z-[999]">
                <div class="bg-white p-4 rounded-lg w-11/12 md:w-1/2">
                    <button onclick="closeModal('{{ $folder }}')" class="absolute top-0 right-0 p-2 text-white bg-red-600 rounded-full mt-4 mx-4">X</button>
                    <iframe class="w-full h-64" src="" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        @endforeach
    @endforeach

    <script src="{{asset('assets/js/videos-page.js')}}"></script>

</x-app-layout>
