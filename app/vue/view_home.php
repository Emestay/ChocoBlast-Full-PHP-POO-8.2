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
<?php include '../components/Navbar.php'; ?>
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold mb-6">Les chocoblasts de la semaine</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <!-- Replace with your top 4 chocoblasts data -->
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-xl font-semibold mb-2">Chocoblast #<?php echo $i; ?></h2>
                <p class="text-gray-600">Description of chocoblast #<?php echo $i; ?></p>
            </div>
        <?php endfor; ?>
    </div>

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
        <div>
            <h2 class="text-3xl font-bold mb-6">Top 3 Rat</h2>
            <div class="grid grid-cols-1 gap-6">
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

<?php include '../components/Footer.php'; ?>

</body>
</html>