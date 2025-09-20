<!DOCTYPE html>html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-purple-50 to-white min-h-screen text-gray-900">
<header class="bg-white shadow py-4 mb-8">
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
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold my-6">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Welcome Section -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-semibold mb-2">Welcome!</h2>
                <p class="mb-2">Welcome to your dashboard!</p>
                <p class="text-gray-600">Here you can manage your messages and view recent activity.</p>
            </div>
            <!-- Sent Messages Section -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-semibold mb-4">Sent Messages</h2>
                <div class="overflow-y-auto max-h-64">
                    @if(isset($messages) && count($messages) > 0)
                        <table class="min-w-full text-left text-sm">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b font-medium">Recipient</th>
                                    <th class="py-2 px-4 border-b font-medium">Message</th>
                                    <th class="py-2 px-4 border-b font-medium">Sent At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-2 px-4 border-b">{{ $message->recipient_name ?? 'Unknown Recipient' }}</td>
                                        <td class="py-2 px-4 border-b">{{ $message->content }}</td>
                                        <td class="py-2 px-4 border-b text-xs text-gray-500">{{ $message->created_at->format('Y-m-d H:i') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-gray-500">No messages sent yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</html>
