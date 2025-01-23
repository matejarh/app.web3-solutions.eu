<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @include('errors.css')
</head>

<body class="antialiased">
    <section class="bg-white dark:bg-gray-900 h-screen flex flex-col justify-center items-center select-none">
        <div class="sm:flex sm:justify-between sm:items-center max-w-screen-lg">
            <div class="left order-1">
                @yield('image')
            </div>
            <div class="right w-full order-2">

                <div class="flex flex-col items-end py-8 px-4 mx-auto max-w-screen-md text-right lg:py-16 lg:px-12">
                    @yield('icon')
                    <h1
                        class="mb-4 text-4xl font-bold tracking-tight leading-none text-gray-900 lg:mb-6 md:text-5xl xl:text-6xl dark:text-white">
                        @yield('title')</h1>
                    <p class="font-light text-gray-500 md:text-lg xl:text-xl dark:text-gray-400">@yield('message')</p>
                </div>
            </div>

        </div>
    </section>

</body>

</html>
