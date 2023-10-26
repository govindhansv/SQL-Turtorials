<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Bio Data</title>
</head>
<body class="bg-gray-200">
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Bio Data:</h1>
        <div class="bg-white p-4 shadow-lg rounded-lg">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $age = $_POST["age"];
                $bio = $_POST["bio"];
                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Age:</strong> $age</p>";
                echo "<p><strong>Bio:</strong> $bio</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
