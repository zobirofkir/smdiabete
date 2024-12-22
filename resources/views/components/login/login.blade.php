<div class="bg-white p-8 rounded-lg shadow-lg max-w-xl w-full fade-in">
    <h2 class="text-2xl font-semibold text-sky-700 text-center mb-6">Connexion</h2>

    <form action="#" method="POST" class="space-y-4">
        <div>
            <label for="email" class="block text-sm font-medium text-sky-700">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-sky-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500" placeholder="Entrez votre email" required>
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-sky-700">Mot de passe</label>
            <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-sky-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500" placeholder="Entrez votre mot de passe" required>
        </div>

        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-sky-500 focus:ring-sky-500 border-sky-300">
                <label for="remember" class="ml-2 text-sm text-sky-700">Se souvenir de moi</label>
            </div>
            <a href="#" class="text-sm text-sky-500 hover:text-sky-700">Mot de passe oublié ?</a>
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-sky-500 text-white rounded-md hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-500">Se connecter</button>
    </form>

    <p class="mt-4 text-center text-sm text-sky-600">
        Vous n'avez pas de compte ? <a href="#" class="font-semibold text-sky-700 hover:text-sky-800">S'inscrire</a>
    </p>
</div>
