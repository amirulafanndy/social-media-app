<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Social Feed</title>
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <div class="bg-white p-4 rounded-lg shadow mb-8">
            <form action="/feed" method="POST" class="flex items-center">
                @csrf
                <input type="text" name="feed" class="border-gray-300 rounded-full p-4 w-full focus:outline-none" placeholder="What's on your mind?">
                <button type="submit" class="bg-blue-500 text-white rounded-full px-6 py-2 ml-4">Send</button>
            </form>
        </div>
        <div>
            @foreach ($feeds->reverse() as $feed)
                <div class="bg-white p-4 rounded-lg shadow mb-8">
                    <p class="text-lg">{{ $feed->feed }}</p>
                    <small class="text-gray-500 block mt-2">Posted by {{ $feed->user->name ?? 'Unknown User' }} at {{ $feed->created_at }}</small>
                </div>
            @endforeach
        </div>
    </div>
    <script type="module" src="{{ vite_asset('resources/js/app.js') }}"></script>
</body>
</html>
