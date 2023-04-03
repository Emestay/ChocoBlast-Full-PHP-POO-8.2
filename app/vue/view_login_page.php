<?php
$error = $_GET['error'] ?? '';
$errorMsg = '';

switch ($error) {
    case 'invalid_password':
        $errorMsg = 'Mot de passe incorrect.';
        break;
    case 'invalid_email':
        $errorMsg = "L'email n'est pas valide.";
        break;
    case 'missing_fields':
        $errorMsg = 'Veuillez remplir tous les champs.';
        break;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/asset/style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0e8ceb485d.js" crossorigin="anonymous"></script>

    <title>Chocoblast - Connexion</title>
</head>
<body>
<?php include './app/components/Navbar.php'; ?>

<div class="container mx-auto p-6 bg-orange-100">
    <h1 class="text-4xl text-center font-extrabold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-600 mb-8 tracking-wider">
        <i class="fas fa-sign-in-alt"></i> Connexion
    </h1>

    <div class="bg-white shadow-lg overflow-hidden border border-gray-200 sm:rounded-lg max-w-md mx-auto p-8">
        <?php if ($errorMsg): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <strong class="font-bold">Erreur :</strong>
                <span class="block sm:inline"><?php echo $errorMsg; ?></span>
            </div>
        <?php endif; ?>
        <form action="./app/controller/ControllerLogin.php" method="post"
              class="flex flex-col">

            <label for="email" class="block text-sm font-medium text-gray-700">Email :</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input type="email" name="email" id="email"
                       class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm pl-10">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-envelope text-gray-400"></i>
                </div>
            </div>

            <label for="password" class="block text-sm font-medium text-gray-700 mt-4">Mot de passe :</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input type="password" name="password" id="password"
                       class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm pl-10">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-lock text-gray-400"></i>
                </div>
            </div>

            <input type="submit" value="Se connecter" name="submit"
                   class="transition ease-in-out cursor-pointer w-full mt-6 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gradient-to-r from-indigo-400 to-purple-600 hover:bg-gradient-to-r hover:from-indigo-700 hover:to-purple-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 duration-300">
        </form>
        <br>

    </div>
    <br>
    <br>
    <br>
    <?php include './app/components/Footer.php'; ?>
</div>




</body>
</html>
