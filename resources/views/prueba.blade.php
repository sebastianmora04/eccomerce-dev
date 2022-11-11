<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <nav class="border-gray-200 bg-slate-100">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 py-6 mx-auto md:px-6">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="{{URL::asset('img/test.jpg')}}" class="mr-3 h-[50px]" alt="Flowbite Logo">
                <span class="self-center text-xl font-semibold text-gray-800 whitespace-nowrap">Ingsucol</span>
            </a>
            <div class="flex items-center">
                <input type="text" class="w-[900px] rounded-xl bg-slate-100 border-gray-400 h-[50px] placeholder-gray-400" placeholder="Buscar">
            </div>
            <div class="flex items-center">
                <a href="tel:3001234567" class="mr-6 text-sm font-medium text-gray-800 hover:underline">(300) 123-4567</a>
                @guest
                    <a href="{{route("login")}}" class="text-sm font-medium text-gray-800 hover:underline">Login</a>
                @else
                    <a href="{{route("destruir")}}" class="text-sm font-medium text-gray-800 hover:underline">Logout</a>
                @endguest


            </div>
        </div>
    </nav>

    <!--

        <nav class="bg-gray-50 dark:bg-gray-700">
            <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
                <div class="flex items-center">
                    <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Company</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    -->


    <!-- Nav prueba -->
    <nav class="border-gray-200 bg-slate-100">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">

            <button id="mega-menu-full-image-button" data-collapse-toggle="mega-menu-full-image" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-full-image" aria-expanded="false">
                    <span class="sr-only">Close main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div id="mega-menu-full-image" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col mt-4 text-sm font-medium md:flex-row md:space-x-8 md:mt-0">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Inicio</a>
                    </li>
                    <li>
                        <button id="mega-menu-full-cta-image-button" data-collapse-toggle="mega-menu-full-image-dropdown" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Tarjetas de visita <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Materiales de marketing</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Etiquetas, pegatinas y packaging</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Carteles y pósteres</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Invitaciones y papelería</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Ropa y bolsas</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Regalos promocionales</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="mega-menu-full-image-dropdown" class="mt-1 bg-white border-gray-400 shadow-sm border-y">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-sm text-gray-800 md:grid-cols-3 md:px-6">
                <ul class="hidden mb-4 space-y-4 md:mb-0 md:block" aria-labelledby="mega-menu-full-image-button">
                    <li>
                        <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                            Tacto suave
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                            Acabado mate
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                            Acabado brillante
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                            Perla
                        </a>
                    </li>
                </ul>
                <ul class="mb-4 space-y-4 md:mb-0">
                    <li>
                        <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                            Kraft
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                            Acabado reciclado mate
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                            License
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                            Resources
                        </a>
                    </li>
                </ul>
                <a href="#" class="p-8 text-left bg-local bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken" style="background-image: url(/docs/images/dashboard-overview.png)">
                    <p class="max-w-xl mb-5 font-extrabold leading-tight tracking-tight text-white">Preview the new Flowbite dashboard navigation.</p>
                    <button type="button" class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-white border border-white rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">
                        Get started
                        <svg class="w-4 h-4 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <br>


    <nav class="menu">
        <div class="w-full items-center mx-auto" text-decoration-style:none;>
            <ul class="items-center mx-auto">
                <li>
                    <a href="#"><i class=""></i><span>Mantenimiento</span></a>
                    <ul>
                        <li><a href="#">Cliente</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Chinos &amp; Trousers</a></li>
                        <li><a href="#">Jeans</a></li>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Underwear</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class=""></i><span>Alerts</span></a>
                </li>
                <li>
                    <a href="#"><i class=""></i><span>Messages</span></a>
                </li>
                <li>
                    <a href="#"><i class=""></i><span>Comments</span></a>
                </li>
                <li>
                    <a href="#"><i class=""></i><span>Analytics</span></a>
                </li>
                <li>
                    <a href="#"><i class=""></i><span>Reading List</span></a>
                </li>
            </ul>
        </div>
    </nav>

@yield('content')





    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>
