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
                    Why PHP?
                </h1>
                <div class="mb-8 leading-normal">
                    <p><strong>What's this?</strong><br>A placeholder for a site designed to answer the question "Why PHP?". By Matt Stauffer of Tighten, with the goals to:<br><br>
                    A) combat the misperception that PHP is dead and shouldn't be learned or used for modern projects.<br>
                    B) encourage new developers and bootcamps and companies to consider PHP<br>
                </p>
                </div>
                <ul>
                    <li class="mb-4">
                        <div class="font-bold mb-2 text-lg">Isn't PHP dead?</div>

                        <ul class="ml-4 leading-normal list-disc list-inside">
                            <li><a href="https://isrubydead.com/" class="no-underline hover:underline font-normal text-teal-900">Is <strike>Ruby</strike> PHP dead?</a></li>
                            <li><a href="https://www.mathieu-ferment.com/viva-php" class="no-underline hover:underline font-normal text-teal-900">Viva PHP</li>
                            <li><a href="https://stitcher.io/blog/php-in-2019" class="no-underline hover:underline font-normal text-teal-900">PHP in 2019</a></li>
                            <li><a href="https://twitter.com/stauffermatt/status/1163794261906771968" class="no-underline hover:underline font-normal text-teal-900">This tweet and its replies</li>
                        </ul>
                    </li>
                   <li class="mb-4">
                        <div class="font-bold mb-2 text-lg">Other stuff I guess?</div>

                        <ul class="ml-4 leading-normal list-disc list-inside">
                            <li><a href="/pdf/enterprise-php-ireland-whitepaper.pdf" class="no-underline hover:underline font-normal text-teal-900">10-year old but still interesting white paper on PHP viability in the enterprise</a></li>
                        </ul>
                    </li>
                </ul>
                <p class="mt-12">@todo: Lots more content gathering and planning, then a design and generating materials and then lots of marketing etc.</p>
            </div>
            <div><a href="https://github.com/tightenco/whyphp" class="text-teal-900 hover:underline">Source on GitHub</a></div>
        </div>

    </div>
</div>
</body>
</html>
