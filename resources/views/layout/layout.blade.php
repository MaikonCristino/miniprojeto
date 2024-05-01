<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>

<body class="flex flex-col h-screen bg-slate-100">
    <header>
        <nav class="w-full bg-purple-700 h-16 flex justify-between p-4 shadow-md shadow-purple-500">
            <div>
                logo
            </div>
            <div>
                menu
            </div>
        </nav>
    </header>
    <main class="grid grid-cols-12 h-full">
        <div class="col-span-2">
            @include("layout.sidebar")
        </div>
        <div class="col-span-10 p-8">
            @yield('content')
        </div>
        
    </main>
</body>

</html>
