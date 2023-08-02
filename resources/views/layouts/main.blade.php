<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


<div id="app">
<header class="fixed w-full">
    <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900 shadow-md">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="https://php-task-manager-ru.hexlet.app" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Менеджер задач</span>
            </a>

            <div class="flex items-center lg:order-2">
                <a href="https://php-task-manager-ru.hexlet.app/login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Вход
                </a>
                <a href="https://php-task-manager-ru.hexlet.app/register" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                    Регистрация
                </a>
            </div>

            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{route('main.index')}}" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                            Main                                </a>
                    </li>
                    <li>
                        <a href="{{route('posts.index')}}" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                            Posts                              </a>
                    </li>
                    <li>
                        <a href="{{route('about.index')}}" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                            About                                </a>
                    </li>
                    <a href="{{route('contact.index')}}" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                        Contacts                                </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="bg-white dark:bg-gray-900">
    @yield('content')
</section>
</div>
</body>
</html>
