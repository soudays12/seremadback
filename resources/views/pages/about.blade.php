<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6 font-sans">

    <div class="max-w-xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-orange-500 text-white p-6">
            <h2 class="text-2xl font-bold text-orange-800">Nouveau message reçu 🌐</h2>
            <p class="mt-2 text-orange-100">Un visiteur a contacté votre site</p>
        </div>

        <div class="p-6 space-y-4">
            <div>
                <p class="text-gray-700"><span class="font-semibold">Nom :</span> {{ $name }}</p>
            </div>
            <div>
                <p class="text-gray-700"><span class="font-semibold">Email :</span> {{ $email }}</p>
            </div>
            <div>
                <p class="text-gray-700 font-semibold">Message :</p>
                <p class="text-gray-800 p-4 bg-gray-100 rounded">{{ $user_message }}</p>
            </div>
        </div>

        <div class="bg-gray-50 p-4 text-center text-gray-500 text-sm">
            Cet e-mail a été envoyé automatiquement depuis le formulaire de contact.
        </div>
    </div>

</body>
</html>
