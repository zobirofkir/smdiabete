<div class="px-8 md:px-16 mt-20 mb-20">

    <div class="flex justify-center items-center ">
        <h1 class="text-4xl font-extrabold text-sky-600 text-center mb-8 uppercase tracking-wider">Vidéos</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        @foreach (range(1, 20) as $item)

            <!-- Event Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="max-h-[300px] overflow-hidden">
                    <img src="{{ asset('assets/images/events/last-event-1.jpeg') }}" alt="Event Image" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <h3 class="md:text-2xl text-xl font-semibold">Event {{ $item }}</h3>
                    <p class="text-gray-900 md:text-xl text-md">Description for Event {{ $item }}</p>
                    <p class="text-gray-700 mt-2 md:text-md text-sm">Date of Event {{ $item }}</p>
                    <div class="flex space-x-4 mt-3">
                        <!-- Video Icon -->
                        <button onclick="openModal('video{{ $item }}')" class="text-3xl text-gray-600 hover:text-gray-800">
                            <i class="fas fa-play-circle w-12 h-12"></i>
                        </button>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>

<!-- Modals for Videos -->
@foreach (range(1, 20) as $item)
    <div id="videoModal{{ $item }}" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden transition-all duration-500 ease-in-out transform scale-0 z-[999]">
        <div class="bg-white p-4 rounded-lg w-11/12 md:w-1/2">
            <button onclick="closeModal('video{{ $item }}')" class="absolute top-0 right-0 p-2 text-white bg-red-600 rounded-full mt-4 mx-4">X</button>
            <video id="video{{ $item }}" class="w-full h-auto" controls>
                <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
@endforeach

<script>
    function openModal(videoId) {
        const modal = document.getElementById('videoModal' + videoId.replace('video', ''));
        modal.classList.remove('hidden');
        modal.classList.add('scale-100');
        document.getElementById(videoId).play();
    }

    function closeModal(videoId) {
        const modal = document.getElementById('videoModal' + videoId.replace('video', ''));
        modal.classList.remove('scale-100');
        modal.classList.add('scale-0');
        document.getElementById(videoId).pause();
    }
</script>
