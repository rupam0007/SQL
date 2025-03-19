<?php
$userData = array(
    "name" => "Chiranjit pal",
    "email" => "debojit@gmail.com",
    "password" => "5yey",
    "confirm-password" => "yery"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Name</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-800 via-indigo-900 to-black text-white flex justify-center items-center min-h-screen">
    <div class="text-center p-8 rounded-xl bg-gray-800 shadow-2xl w-96 max-w-md">
        <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-500 mb-6">
            <?php echo $_GET['name']; ?>
        </h1>
        <p class="text-lg text-gray-300">
          <?php echo $_GET['name']; ?>
        </p>
    </div>
</body>
</html>
