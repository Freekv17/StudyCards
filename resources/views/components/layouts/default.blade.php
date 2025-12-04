@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
</head>


<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <header class="bg-blue-700 text-white shadow-md">
        <div class="container mx-auto h-20 flex items-center justify-between px-6">

            <a href="#" class="text-2xl font-bold tracking-wide">
                Study<span class="text-blue-200">Cards</span>
            </a>
            <nav class="flex space-x-6 text-lg items-center">

                <a href="{{ route('home') }}" class="hover:text-blue-200 transition">Home</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-200 transition">Contact</a>

                <a href="{{ route('login') }}" class="hover:text-blue-200 transition">
                    Login
                </a>

                <a href="{{ route('register') }}" class="hover:text-blue-200 transition">
                    Register
                </a>

            </nav>



        </div>
    </header>

    <main class="container mx-auto py-10 px-6 grow">
        {{ $slot }}
    </main>

    <footer class="bg-gray-900 text-gray-300 py-6">
        <div class="container mx-auto text-center text-sm">
            © {{ date('Y') }} StudyCards — All rights reserved.
        </div>
    </footer>

</body>

</html>
