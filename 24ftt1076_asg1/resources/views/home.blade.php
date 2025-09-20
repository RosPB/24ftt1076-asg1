<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-100 text-black-900">
<header class="bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
        <a href="/"><h1 class="text-xl font-bold", style= "color: purple;">HeyThere!</h1></a>
        <nav>
            <ul class="flex space-x-4 justify-end px-6">
                <li><a href="/" class="text-gray-700 hover:text-purple-500">Home</a></li>
                <li><a href="/dashboard" class="text-gray-700 hover:text-purple-500">Dashboard</a></li>
                <li><a href="/messages" class="text-gray-700 hover:text-purple-500">Messages</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="container mx-auto mt-10 px-6 text-center">
    <h2 class="text-3xl font-bold", style= "color: #6053C9;">Leave a Message!</h2>
    <p class="mt-4 text-lg text-gray-600">Add an anonymous note here, just a simple hi or hey will do.</p>
    <img src="bruh.jpg" alt="Hand holding envelope" class="mx-auto mt-6 w-1/3 squared-lg shadow-lg">
    <div class="mt-6">
        <a href="/messages/create" class="bg-purple-500 text-white px-4>py-2 rounded hover:bg-purple-600">Leave a Message</a>
    </div>
</main>
</body>
</html>