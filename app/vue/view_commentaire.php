<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test CommentaireController</title>
    <link rel="stylesheet" href="./public/asset/style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0e8ceb485d.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffedd5;
        }
    </style>
</head>
<body>
<?php include './app/components/Navbar.php'; ?>

<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <h1 class="text-4xl text-center font-extrabold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-600 mb-8 tracking-wider">
        Liste des commentaires
    </h1>

    <div class="shadow-lg overflow-hidden border border-gray-200 sm:rounded-lg bg-white">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gradient-to-r from-indigo-400 to-purple-600">
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">ID
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Texte
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Action
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <?php
            // Récupération de tous les commentaires
            $commentaires = CommentaireController::getAllCommentaires();
            foreach ($commentaires as $commentaire) : ?>
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo $commentaire->getIdCommentaire(); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo $commentaire->getTextCommentaire(); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $commentaire->getIdCommentaire(); ?>">
                            <button type="submit" name="delete" class="text-red-600 hover:text-red-900 font-semibold">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="mb-8">
        <h2 class="text-2xl mb-4">Ajouter un commentaire :</h2>
        <form action="" method="post" class="space-y-4">
            <label for="textCommentaire" class="block text-sm font-medium text-gray-700">Texte du commentaire :</label>
            <textarea id="textCommentaire" name="textCommentaire" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
            <button type="submit" name="addCommentaire" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ajouter</button>
        </form>
    </div>



</div>


</body>
</html>
