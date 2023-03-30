<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0e8ceb485d.js" crossorigin="anonymous"></script>
    <title>Accueil</title>
</head>
<body>
<?php include './app/components/Navbar.php'; ?>

<div class="bg-white">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="space-y-12">
            <h2 class="text-3xl text-center font-extrabold tracking-tight sm:text-4xl bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-purple-600 mb-6">
                <span class="border-b-2 border-gradient-to-r from-indigo-400 to-purple-600">Les chocoblasts de la semaine</span>
            </h2>


            <ul role="list"
                class="space-y-12 lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8 lg:gap-y-12 lg:space-y-0">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <li>
                        <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
                            <div class="h-0 aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                <img class="object-cover shadow-lg rounded-lg" src="https://via.placeholder.com/300"
                                     alt="Chocoblast #<?php echo $i; ?>">
                            </div>
                            <div class="sm:col-span-2">
                                <div class="space-y-4">
                                    <div class="text-lg leading-6 font-medium space-y-1">
                                        <h3>Chocoblast #<?php echo $i; ?></h3>
                                    </div>
                                    <div class="text-lg">
                                        <p class="text-gray-500">
                                            1
                                            copy text
                                            I just wanna use the phone. No no. Lorraine, Lorraine, what are you
                                            doing? Who is that guy. Marty, you interacted with anybody else today,
                                            besides me? Shit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>

<div class="container mx-auto p-6">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div>
            <h2 class="text-3xl font-bold mb-6">Chocoblasté</h2>
            <div class="grid grid-cols-1 gap-6">
                <!-- Replace with your top 3 chocoblasté data -->
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <h3 class="text-xl font-semibold mb-2">Chocoblasté #<?php echo $i; ?></h3>
                        <p class="text-gray-600">Description of chocoblasté #<?php echo $i; ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div>
            <h2 class="text-3xl font-bold mb-6">Chocoblasteur</h2>
            <div class="grid grid-cols-1 gap-6">
                <!-- Replace with your top 3 chocoblasteur data -->
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <h3 class="text-xl font-semibold mb-2">Chocoblasteur #<?php echo $i; ?></h3>
                        <p class="text-gray-600">Description of chocoblasteur #<?php echo $i; ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mt-12">
        <div>
            <h2 class="text-3xl font-bold mb-6">Top 3 Chocoblast</h2>
            <div class="grid grid-cols-1 gap-6">
                <!-- Replace with your top 3 chocoblast data -->
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <h3 class="text-xl font-semibold mb-2">Chocoblast #<?php echo $i; ?></h3>
                        <p class="text-gray-600">Description of chocoblast #<?php echo $i; ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="bg-gradient-to-r from-indigo-200 to-purple-200 bg-opacity-50 p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold mb-6 text-white">Top 3 Rat</h2>
            <div class="grid grid-cols-3 gap-x-6">
                <!-- Replace with your top 3 rat data -->
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <h3 class="text-xl font-semibold mb-2">Rat #<?php echo $i; ?></h3>
                        <p class="text-gray-600">Description of rat #<?php echo $i; ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>


    </div>
</div>

<?php include './app/components/Footer.php'; ?>

</body>
</html>