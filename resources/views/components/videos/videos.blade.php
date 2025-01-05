<div class=" px-8 md:px-16 mb-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Event 1 Card -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="max-h-[300px] overflow-hidden">
                <img src="{{asset('assets/images/events/last-event-1.jpeg')}}" alt="Event Image" class="w-full h-full object-cover">
            </div>
            <div class="p-4">
                <h3 class="md:text-2xl text-xl font-semibold">1er Congrès National de Diabétologie</h3>
                <p class="text-gray-900 md:text-xl text-md">1er Congrès National de Diabétologie</p>
                <p class="text-gray-700 mt-2 md:text-md text-sm">Du 16 au 19 Mai 2024</p>
                <div class="flex space-x-4 mt-3">
                    <!-- Video Icon -->
                    <button onclick="openModal('video1')" class="text-3xl text-gray-600 hover:text-gray-800">
                        <i class="fas fa-play-circle w-12 h-12"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Event 2 Card -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="max-h-[300px] overflow-hidden">
                <img src="{{asset('assets/images/events/last-event-2.jpeg')}}" alt="Event Image" class="w-full h-full object-cover">
            </div>
            <div class="p-4">
                <h3 class="md:text-2xl text-xl font-semibold">La Journée Mondiale du Diabète</h3>
                <p class="text-gray-900 md:text-xl text-md">La Journée Mondiale du Diabète</p>
                <p class="text-gray-700 mt-2 md:text-md text-sm">16 Novembre 2024</p>
                <div class="flex space-x-4 mt-3">
                    <!-- Video Icon -->
                    <button onclick="openModal('video2')" class="text-3xl text-gray-600 hover:text-gray-800">
                        <i class="fas fa-play-circle w-12 h-12"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Video 1 -->
<div id="videoModal1" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden transition-all duration-500 ease-in-out transform scale-0 z-[999]">
    <div class="bg-white p-4 rounded-lg w-11/12 md:w-1/2">
        <button onclick="closeModal('video1')" class="absolute top-0 right-0 p-2 text-white bg-red-600 rounded-full mt-4 mx-4">X</button>
        <video id="video1" class="w-full h-auto" controls>
            <source src="{{asset('assets/videos/video.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<!-- Modal for Video 2 -->
<div id="videoModal2" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden transition-all duration-500 ease-in-out transform scale-0 z-[999]">
    <div class="bg-white p-4 rounded-lg w-11/12 md:w-1/2">
        <button onclick="closeModal('video2')" class="absolute top-0 right-0 p-2 text-white bg-red-600 rounded-full mt-4 mx-4">X</button>
        <iframe id="videoFrame" style="border-radius: 20px;" width="100%" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" src="https://www.youtube.com/embed/aBtaq1r8TM4"></iframe>
    </div>
</div>

<script>
    function openModal(videoId) {
        let modal = document.getElementById('videoModal' + videoId.charAt(videoId.length - 1));
        modal.classList.remove('hidden');
        modal.classList.add('scale-100');
        document.getElementById(videoId).play();
    }

    function closeModal(videoId) {
        let modal = document.getElementById('videoModal' + videoId.charAt(videoId.length - 1));
        modal.classList.remove('scale-100');
        modal.classList.add('scale-0');
        document.getElementById(videoId).pause();

        if (videoId === 'video2') {
            document.getElementById('videoFrame').src = document.getElementById('videoFrame').src;
        }
    }
</script>
