<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
<div class="flex flex-col">
    @if (Route::has('login') && false)
        <div class="absolute top-0 right-0 mt-4 mr-4">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline font-normal text-teal-900 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline font-normal text-teal-900 uppercase pr-6">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline font-normal text-teal-900 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="min-h-screen flex items-center justify-center container m-auto p-4 max-w-4xl">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="text-gray-900 text-center font-bold text-5xl mb-6">
                    OMG 😲 PHP
                </h1>
                <div class="mb-8 leading-normal">
                    <p><strong>What's this?</strong><br>A placeholder for one site--or maybe two separate sites--which, once well-planned, will have real designs and marketing and stuff. By Matt Stauffer of Tighten, with the goals to:<br><br>
                    A) welcome newcomers into PHP in a healthy and friendly and easy-to-learn and safe way, and<br>
                    B) combat the misperception that PHP is dead and shouldn't be learned or used for modern projects.</p>
                </div>
                <ul>
                    <li class="mb-4">
                        <div class="font-bold mb-2 text-lg">Learn PHP for free</div>

                        <ul class="ml-4 leading-normal list-disc list-inside">
                            <li><a href="https://laracasts.com/series/php-for-beginners" class="no-underline hover:underline font-normal text-teal-900">Laracasts Video Series "The PHP Practitioner"</a></li>
                            <li><a href="https://daylerees.com/php-pandas/" class="no-underline hover:underline font-normal text-teal-900">PHP Pandas Online Book</a></li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <div class="font-bold mb-2 text-lg">Ask questions about PHP</div>

                        <ul class="ml-4 leading-normal list-disc list-inside">
                            <li>?</li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <div class="font-bold mb-2 text-lg">Welcoming PHP organizations</div>

                        <ul class="ml-4 leading-normal list-disc list-inside">
                            <li><a href="https://osmihelp.org/" class="no-underline hover:underline font-normal text-teal-900">OSMI</a></li>
                            <li>?</li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <div class="font-bold mb-2 text-lg">The Real World</div>

                        <ul class="ml-4 leading-normal list-disc list-inside">
                            <li><a href="https://meetup.com/topics/php" class="no-underline hover:underline font-normal text-teal-900">Find a meet-up</a></li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <div class="font-bold mb-2 text-lg">Isn't PHP dead?</div>

                        <ul class="ml-4 leading-normal list-disc list-inside">
                            <li><a href="https://isrubydead.com/" class="no-underline hover:underline font-normal text-teal-900">Is <strike>Ruby</strike> PHP dead?</a></li>
                            <li><a href="https://www.mathieu-ferment.com/viva-php" class="no-underline hover:underline font-normal text-teal-900">Viva PHP</li>
                            <li><a href="https://stitcher.io/blog/php-in-2019" class="no-underline hover:underline font-normal text-teal-900">PHP in 2019</a></li>
                            <li><a href="https://stitcher.io/blog/php-in-2019" class="no-underline hover:underline font-normal text-teal-900">This tweet and its replies: <a href="https://twitter.com/stauffermatt/status/1163794261906771968" class="text-sm">https://twitter.com/stauffermatt/status/1163794261906771968</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div><a href="https://github.com/tightenco/omgphp">Source on GitHub</a></div>
        </div>

    </div>
</div>
</body>
</html>
