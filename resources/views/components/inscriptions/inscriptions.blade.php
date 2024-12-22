<div class="bg-gray-100 p-6 rounded-lg shadow-md md:w-[70%] w-full">
    <h2 class="text-2xl font-bold mb-6">Inscription</h2>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label for="nom" class="block text-sm font-medium text-gray-700">
                Nom*
            </label>
            <input type="text" id="nom" name="nom" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre nom">
        </div>
        <div>
            <label for="prenom" class="block text-sm font-medium text-gray-700">
                Prénom
            </label>
            <input type="text" id="prenom" name="prenom" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre prénom">
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 mt-4">
        <div>
            <label for="telephone" class="block text-sm font-medium text-gray-700">
                Téléphone*
            </label>
            <input type="tel" id="telephone" name="telephone" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre téléphone">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">
                Email*
            </label>
            <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre Email">
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 mt-4">
        <div>
            <label for="secteur" class="block text-sm font-medium text-gray-700">
                Secteur*
            </label>
            <select id="secteur" name="secteur" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-</option>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
            </select>
        </div>
        <div>
            <label for="type" class="block text-sm font-medium text-gray-700">
                Type*
            </label>
            <select id="type" name="type" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-</option>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
            </select>
        </div>
    </div>

    <div>
        <label for="specialite" class="block text-sm font-medium text-gray-700 mt-4">
            Spécialité
        </label>
        <textarea id="specialite" name="specialite" rows="4" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre spécialité"></textarea>
    </div>

    <div class="grid grid-cols-2 gap-4 mt-4">
        <div>
            <label for="ville" class="block text-sm font-medium text-gray-700">
                Ville*
            </label>
            <input type="text" id="ville" name="ville" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre ville">
        </div>
        <div>
            <label for="pays" class="block text-sm font-medium text-gray-700">
                Pays*
            </label>
            <input type="text" id="pays" name="pays" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre pays">
        </div>
    </div>

    <button type="submit" class="mt-6 bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded">
        VALIDER
    </button>
</div>
