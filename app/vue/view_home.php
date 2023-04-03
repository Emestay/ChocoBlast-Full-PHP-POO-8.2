<?php
ob_start();
$currentTime = date('H');
$greeting = '';

if ($currentTime >= 5 && $currentTime < 12) {
    $greeting = 'Bonjour ! ';
} elseif ($currentTime >= 12 && $currentTime < 18) {
    $greeting = 'Bonne aprem !';
} else {
    $greeting = 'Au lit !';
}
ob_end_flush();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ChocoFull/public/asset/style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0e8ceb485d.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h2 {
            font-family: 'Montserrat', sans-serif;
        }

        .rounded-lg {
            border-radius: 20px;
        }

        .shadow-lg {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .transform:hover {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15);
        }

        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background-color: transparent !important;
            box-shadow: none !important;
            border-radius: 20px;
        }

        ::-webkit-scrollbar-thumb {
            background-image: linear-gradient(to right, #059669, #3b82f6);
            border-radius: 20px;
            border: 3px solid #f3f4f6;
        }

        html::-webkit-scrollbar-thumb:hover {
            background-image: linear-gradient(to right, #047857, #1e40af);
        }
    </style>

    <title>Accueil</title>
</head>
<body>
<?php include './app/components/Navbar.php'; ?>


<div class="min-h-[500px] flex items-center justify-center bg-cover bg-no-repeat bg-center"
     style="background-image: url('https://source.unsplash.com/featured/?boulangerie');">
    <header class="bg-gradient-to-r from-slate-300 to-zinc-200 opacity-80 hover:opacity-95 transition duration-300 ease-in-out  backdrop-blur-md p-6 rounded-lg shadow-md">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl text-center text-white font-black tracking-tight sm:text-5xl bg-clip-text  mb-6">
                <span class="border-b-4 border-indigo-400 hover:border-indigo-200 transition duration-300 ease-in-out uppercase cursor-pointer text-white opacity-100 font-bold">CHO CHO CHOCOBLAST 🎵🎶</span>
            </h2>
            <p class="text-center text-white font-bold text-xl"><?php echo $greeting; ?></p>
        </div>
    </header>
</div>
<div class="bg-orange-100">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-12 ">
        <div class="space-y-12">
            <br>
            <ul role="list "
                class="space-y-12 lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8 lg:gap-y-12 lg:space-y-0 ">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <li>
                        <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
                            <div class="h-0 aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                <img class="object-cover shadow-lg rounded-lg transform hover:scale-125 transition duration-300"
                                     src="https://via.placeholder.com/300"
                                     alt="Chocoblast #<?php echo $i; ?>">
                            </div>
                            <div class="sm:col-span-2">
                                <div class="space-y-4">
                                    <div class="text-lg leading-6 font-medium space-y-1">
                                        <h3 class="text-indigo-600 hover:text-purple-800 transition duration-300">
                                            Chocoblast #<?php echo $i; ?></h3>
                                    </div>
                                    <div class="text-lg">
                                        <p class="text-gray-500">
                                            I just wanna use the phone. No no. Lorraine, Lorraine, what are you
                                            doing? Who is that guy. Marty, you interacted with anybody else today,
                                            besides me? Shit.</p>
                                    </div>
                                    <a href="#"
                                       class="inline-flex items-center px-4 py-2 border border-rose-200 text-sm font-medium rounded-md shadow-sm text-sky-900 bg-gradient-to-r from-amber-100 to-rose-200 bg-opacity-50 p-8 rounded-lg shadow-md hover:bg-indigo-800 hover:scale-105 transition duration-200">
                                        En savoir plus 😏
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endfor; ?>

            </ul>
        </div>
    </div>
</div>


<div class="container mx-auto p-6 bg-orange-100">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div class="bg-gradient-to-r from-green-400 to-blue-300 bg-opacity-50 p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold mb-6 text-white">Chocoblasté</h2>
            <div class="grid grid-cols-3 gap-x-6">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="bg-white rounded-lg shadow-lg p-4 transform hover:scale-105 transition duration-300">
                        <h3 class="text-xl font-semibold mb-2">Chocoblasté #<?php echo $i; ?></h3>
                        <p class="text-gray-600">Description of chocoblasté #<?php echo $i; ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="bg-gradient-to-r from-red-400 to-yellow-300 bg-opacity-50 p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold mb-6 text-white">Chocoblasteur</h2>
            <div class="grid grid-cols-3 gap-x-6">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="bg-white rounded-lg shadow-lg p-4 transform hover:scale-105 transition duration-300">
                        <h3 class="text-xl font-semibold mb-2">Chocoblasteur #<?php echo $i; ?></h3>
                        <p class="text-gray-600">Description of chocoblasteur #<?php echo $i; ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <hr class="my-12 border-t-2 border-cyan-600 opacity-50">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div class="bg-gradient-to-r from-purple-400 to-pink-300 bg-opacity-50 p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold mb-6 text-white">Top 3 Chocoblast</h2>
            <div class="grid grid-cols-3 gap-x-6">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="bg-white rounded-lg shadow-lg p-4 transform hover:scale-105 transition duration-300">
                        <h3 class="text-xl font-semibold mb-2">Chocoblast #<?php echo $i; ?></h3>
                        <p class="text-gray-600">Description of chocoblast #<?php echo $i; ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="bg-gradient-to-r from-cyan-400 to-lime-300 bg-opacity-50 p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold mb-6 text-white">Top 3 Rat</h2>
            <div class="grid grid-cols-3 gap-x-6">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="bg-white rounded-lg shadow-lg p-4 transform hover:scale-105 transition duration-300">
                        <img src="https://source.unsplash.com/400x300?rat=<?php echo $i; ?>"
                             alt="Rat #<?php echo $i; ?>" class="w-full h-auto mb-2 rounded-lg">
                        <h3 class="text-center text-xl font-semibold mb-2">Rat #<?php echo $i; ?></h3>
                        <p class="text-gray-600">Description of rat #<?php echo $i; ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

    </div>
    <?php include './app/components/Footer.php'; ?>
</div>

<script>

</script>
</body>
</html>