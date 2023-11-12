<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <header>
        <div class="bg-gray-500 text-white p-4 fixed w-full z-10">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-bold">Contacts</h1>
            </div>
        </div>
    </header>

    <div>
        <body class="bg-gray-100">
            <div class="flex h-screen fixed bg-gray-500 text-white w-64 p-4 overflow-hidden my-14">
                <ul>
                    <li class="mb-2"><a href="{{route('contacts.index')}}" class="block text-white">List Contacts</a></li>
                    <li class="mb-2"><a href="{{route('contacts.create')}}" class="block text-white">New Contact</a></li>
                    <li class="mb-2"><a href="{{route('dashboard')}}" class="block text-white">Dashboard</a></li>
                </ul>
            </div>
            @yield('content')
        </body>
    </div>

    <footer>
        @yield('footer')
    </footer>
</body>
</html>
