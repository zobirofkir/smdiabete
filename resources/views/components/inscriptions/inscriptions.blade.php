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
            <label for="ville" class="block text-sm font-medium text-gray-700">
                Ville*
            </label>
            <input type="text" id="ville" name="ville" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre ville">
        </div>
        <div>
            <label for="secteur" class="block text-sm font-medium text-gray-700">
                Secteur*
            </label>
            <select id="secteur" name="secteur" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-</option>
                <option value="public">Public</option>
                <option value="liberal">Libéral</option>
                <option value="chu">Chu</option>
            </select>
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

    <div>
        <label for="adresse" class="block text-sm font-medium text-gray-700 mt-4">
            Adresse*
        </label>
        <textarea id="adresse" name="adresse" rows="2" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre adresse"></textarea>
    </div>

    <div>
        <label for="objectifs" class="block text-sm font-medium text-gray-700 mt-4">
            Objectifs attendus de la formation
        </label>
        <textarea id="objectifs" name="objectifs" rows="4" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Vos objectifs"></textarea>
    </div>

    <button type="submit" class="mt-6 bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded">
        VALIDER
    </button>
</div>
