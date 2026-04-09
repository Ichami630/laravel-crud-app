<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | ichamie</title>

    @vite("resources/css/app.css")
</head>
<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div> 
    @endif
    
    <header>
        <nav>
            <h1>The reference Tech</h1>
            <a href="{{ route('users.index') }}">All Users</a>
            <a href="{{ route('users.create') }}">Create new users</a>
        </nav>

        <main class="container">
            {{ $slot }}
        </main>
    </header>
</body>
</html>
