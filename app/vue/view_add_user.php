<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/asset/style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0e8ceb485d.js" crossorigin="anonymous"></script>
    <title>S'inscire</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffedd5;
        }
        </style>
</head>
<body>
<?php include './app/components/Navbar.php'; ?>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 ">
    <h1 class="text-4xl text-center font-extrabold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-600 mb-8 tracking-wider">
        Rejoins nous voyons !
    </h1>

    <div class="bg-white shadow-lg overflow-hidden border border-gray-200 sm:rounded-lg max-w-md mx-auto p-8">
        <form action="" method="post" enctype="multipart/form-data"
              class="flex flex-col">

            <label for="nom" class="block text-sm font-medium text-gray-700">Ajouter votre nom :</label>
            <input type="text" name="nom_utilisateur" id="nom"
                   class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

            <label for="prenom" class="block text-sm font-medium text-gray-700 mt-4">Ajouter votre prenom :</label>
            <input type="text" name="prenom_utilisateur" id="prenom"
                   class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

            <label for="mail" class="block text-sm font-medium text-gray-700 mt-4">Ajouter votre mail :</label>
            <input type="email" name="mail_utilisateur" id="mail"
                   class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

            <label for="password" class="block text-sm font-medium text-gray-700 mt-4">Ajouter votre mot de passe
                :</label>
            <input type="password" name="password_utilisateur" id="password"
                   class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mt-4">Ajouter une image (optionnel)
                    :</label>
                <div class="mt-1 flex items-center">
                    <input type="file" name="image_utilisateur" id="image" class="hidden">
                    <label for="image"
                           class="cursor-pointer bg-gradient-to-r from-indigo-400 to-purple-600 rounded-lg p-3">
                        <span class="inline-flex items-center justify-center h-12 w-12 border-0 rounded-md text-sm font-medium text-white hover:bg-opacity-80">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </span>
                    </label>
                    <span class="ml-4 text-sm font-medium text-gray-600"
                          id="image_file_name">Aucun fichier sélectionné</span>
                </div>
            </div>
            <input type="submit" value="Ajouter" name="submit"
                   class="transition ease-in-out delay-450 cursor-pointer w-full mt-6 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gradient-to-r  from-indigo-400 to-purple-600 hover:bg-gradient-to-r hover:from-indigo-700 hover:to-purple-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 duration-300">

        </form>
    </div>
</div>
<div class="container mx-auto p-6 ">
<?php include './app/components/Footer.php'; ?>
</div>
<script>
    document.getElementById("image").addEventListener("change", (e) => {
        const fileName = e.target.files[0].name;
        document.getElementById("image_file_name").textContent = fileName;
    });
</script>
</body>
</html>