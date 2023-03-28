<?php
require '../controller/ControllerUserMain.php';
$users = listUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Liste des utilisateurs</title>
</head>
<body>
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <h1 class="text-4xl text-center font-extrabold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-600 mb-8 tracking-wider">
        Liste des utilisateurs
    </h1>

    <div class="shadow-lg overflow-hidden border border-gray-200 sm:rounded-lg bg-white">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gradient-to-r from-indigo-400 to-purple-600">
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">ID
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Avatar
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Nom
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Prénom
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Email
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Action
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach ($users as $user) : ?>
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo $user['id_utilisateur']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <img src="<?php echo $user['image_utilisateur']; ?>" alt="Avatar"
                             class="w-10 h-10 rounded-full">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo $user['nom_utilisateur']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo $user['prenom_utilisateur']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo $user['mail_utilisateur']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <form action="../controller/ControllerUserMain.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $user['id_utilisateur']; ?>">
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
</div>


</body>
</html>