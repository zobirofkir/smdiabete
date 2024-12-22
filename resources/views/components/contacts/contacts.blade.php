<div class="container mx-auto p-8 max-w-7xl flex flex-col lg:flex-row justify-between w-full space-y-8 lg:space-y-0 lg:space-x-8">

    <!-- Section du formulaire de contact -->
    <div class="bg-white p-6 rounded-lg shadow-lg w-full lg:w-1/2">
        <h2 class="text-2xl font-semibold text-sky-700 text-center mb-6">Contactez-nous</h2>

        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-sky-700">Votre nom</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-sky-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500 transition-all ease-in-out" placeholder="Entrez votre nom" required>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-sky-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-sky-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500 transition-all ease-in-out" placeholder="Entrez votre email" required>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-sky-700">Message</label>
                <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-sky-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500 transition-all ease-in-out" placeholder="Écrivez votre message" required></textarea>
            </div>

            <button type="submit" class="w-full py-3 px-4 bg-sky-500 text-white rounded-md hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-500 transition-all ease-in-out">Envoyer le message</button>
        </form>
    </div>

    <!-- Section de la carte Google -->
    <div class="bg-white p-6 rounded-lg shadow-lg w-full lg:w-1/2">
        <h2 class="text-2xl font-semibold text-sky-700 text-center mb-6">Trouvez-nous sur la carte</h2>

        <div class="relative w-full" style="padding-top: 56.25%;"> <!-- Ratio d'aspect 16:9 -->
            <iframe src="https://www.google.com/maps/embed?pb=YOUR_UPDATED_PB_PARAMETER" class="absolute top-0 left-0 w-full h-full border-0 rounded-lg"></iframe>
        </div>
    </div>

</div>
