<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-purple-50 to-white min-h-screen text-gray-900">
<header class="bg-white shadow py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
        <a href="/" class="flex items-center">
            <h1 class="text-2xl font-extrabold tracking-tight" style="color: #7C3AED;">HeyThere!</h1>
        </a>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="/" class="text-gray-700 hover:text-purple-600 font-medium transition">Home</a></li>
                <li><a href="/dashboard" class="text-gray-700 hover:text-purple-600 font-medium transition">Dashboard</a></li>
                <li><a href="/messages" class="text-gray-700 hover:text-purple-600 font-medium transition">Messages</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="flex flex-col items-center justify-center flex-1 px-6 py-12">
    <div class="bg-white rounded-xl shadow-lg p-10 w-full max-w-xl">
        <h2 class="text-3xl font-bold mb-4" style="color: #6053C9;">Leave a Message!</h2>
        <p class="mb-6 text-lg text-gray-600">Add an anonymous note here, just a simple hi or hey will do.</p>
        <img url="https://i.pinimg.com/736x/53/c8/09/53c8091689f3cf997ed3bddf23f547aa.jpg" alt="blue emoji mewing" class="mx-auto mb-8 w-1/2 rounded-lg shadow-md">
        <a href="/messages/create" class="inline-block bg-purple-500 text-white px-6 py-3 rounded-lg font-semibold shadow hover:bg-purple-600 transition">Leave a Message</a>
    </div>
</main>
</body>
</html>