<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Leave your message here!</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        </head>
        <body class="bg-gradient-to-br from-blue-400 via-purple-300 to-pink-200 min-h-screen text-gray-900">
        <header class="bg-white bg-opacity-80 shadow-md py-6 mb-8">
            <div class="container mx-auto flex justify-between items-center px-6">
            <a href="/">
                <h2 class="text-2xl font-extrabold text-purple-700 drop-shadow">Add your text...</h2>
            </a>
            </div>
        </header>
        <main class="flex justify-center">
            <form action="{{ route('messages.store') }}" method="POST" class="bg-white bg-opacity-90 rounded-xl shadow-lg p-8 w-full max-w-md space-y-6">
            @csrf
            <div>
                <label for="title" class="block text-purple-700 font-semibold mb-2">Title:</label>
                <input type="text" id="title" name="title" required class="w-full px-4 py-2 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>
            <div>
                <label for="body" class="block text-purple-700 font-semibold mb-2">Message:</label>
                <textarea id="body" name="body" rows="5" required class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400"></textarea>
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-gradient-to-r from-purple-400 to-pink-400 text-white font-bold rounded-lg shadow hover:from-pink-400 hover:to-purple-400 transition">Send Message</button>
            </form>
        </main>
        </body>
</html>

