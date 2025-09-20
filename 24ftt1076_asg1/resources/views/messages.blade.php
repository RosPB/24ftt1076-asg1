<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Message</title>
        </head>
        <body>
            <h1>Create a New Message</h1>
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

