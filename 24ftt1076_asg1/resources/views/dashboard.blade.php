<x-layouts.app :title="__('Dashboard')">
    <div class="container">
        <h1 class="text-3xl font-bold my-4">Dashboard</h1>
        <p>Welcome to your dashboard!</p>
        <p>Here you can manage your messages and view recent activity.</p>
    </div>
    <div class="container my-6">
        <h2 class="text-2xl font-semibold mb-4">Sent Messages</h2>
        <div class="overflow-y-auto h-64 border rounded-lg p-4 bg-white shadow">
            @if(isset($messages) && count($messages) > 0)
                <ul>
                    @foreach($messages as $message)
                        <li class="mb-3 border-b pb-2">
                            <div class="font-medium">{{ $message->recipient_name ?? 'Unknown Recipient' }}</div>
                            <div class="text-gray-700">{{ $message->content }}</div>
                            <div class="text-xs text-gray-500">{{ $message->created_at->format('Y-m-d H:i') }}</div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500">No messages sent yet.</p>
            @endif
        </div>
    </div>
</x-layouts.app>
