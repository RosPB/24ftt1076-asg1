<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Leave your message here!</title>
        </head>
        <body class="bg-blue-400 text-black-900">
            <header class="bg-white shadow-md py-4">
                <div class="container mx-auto flex justify-between items-center px-6">
                    <a href="/"><h2 class="text-xl font-bold", style= "color: purple;">Add your text...</h1></a>
            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required><br><br>
                
                <label for="body">Message:</label><br>
                <textarea id="body" name="body" rows="5" cols="40" required></textarea><br><br>
                
                <button type="submit">Send Message</button>
            </form>
        </body>
</html>

