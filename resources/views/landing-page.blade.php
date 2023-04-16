<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Point Of Sales</title>

        <!-- Favicon -->
		<!-- <link rel="shortcut icon" href=""> -->

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Tailwind css -->
        <script src="https://cdn.tailwindcss.com"></script>

        <script>
            tailwind.config = {
                darkMode : 'class',
                theme: {
                    container : {
                        center : true,
                        padding : '16px',
                    },
                    extend: {
                        fontFamily: {
                            sans: ['Inter var'],
                        },
                        colors : {
                            primary : '#059669',
                            secondary : '#64748b',
                            dark : '#0f172a',
                        },
                    },
                },
                variants: {
                    extend: {
                        backgroundColor: ['active'],
                    }
                },
                content: [
                    './*.html',
                ],
            }

            if (localStorage.theme == 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            }else{
                document.documentElement.classList.remove('dark');
            }
        </script>

        <style type="text/tailwindcss">
            @layer utilities {
                [x-cloak] {
                    display: none;
                }

                body {
                    font-family: 'inter' , sans-serif;
                }

                .hamburger-active > span:nth-child(1){
                    @apply rotate-45;
                }

                .hamburger-active > span:nth-child(2){
                    @apply scale-0;
                }

                .hamburger-active > span:nth-child(3){
                    @apply -rotate-45;
                }

                #dark-toggle:checked ~ label div.toggle-circle{
                    @apply translate-x-3
                }

                .navbar-fixed {
                    @apply fixed z-[9999] bg-white bg-opacity-80 backdrop-blur-sm dark:bg-dark dark:bg-opacity-50;
                    box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
                }
            }
        </style>
    </head>

    <body>
        <div class="flex items-center justify-center flex-col z-[99999] fixed right-0 left-0 top-0 bottom-0 bg-white bg-opacity-80 backdrop-blur-sm dark:bg-dark dark:bg-opacity-80 dark:backdrop-blur-sm" id="loading">
            <h1 class="font-medium font-semibold text-4xl animate-pulse text-transparent bg-clip-text bg-gradient-to-r from-primary via-blue-500 to-purple-600">Point Of Sales</h1>
        </div>
        <!-- Header Start -->
        <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 dark:bg-dark">
            <div class="container">
                <div class="flex items-center justify-between relative">
                    <div class="px-4">
                        <a href="#home" class="font-bold text-lg text-primary block py-6">Point Of Sales</a>
                    </div>
                    <div class="flex items-center px-4">
                        <button class="block absolute right-4 lg:hidden" id="hamburger" name="hamburger" type="button">
                            <span class="w-[30px] h-[2px] my-2 block bg-dark dark:bg-white transition duration-300 ease-in-out origin-top-left"></span>
                            <span class="w-[30px] h-[2px] my-2 block bg-dark dark:bg-white transition duration-300 ease-in-out"></span>
                            <span class="w-[30px] h-[2px] my-2 block bg-dark dark:bg-white transition duration-300 ease-in-out origin-bottom-left"></span>
                        </button>
                        <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-dark dark:shadow-slate-500 lg:dark:bg-transparent">
                            <ul class="block lg:flex">
                                <li class="group"><a href="#home" class="text-base text-dark py-2 px-8 flex group-hover:text-primary dark:text-white">Home</a></li>
                                <li class="group"><a href="#feature" class="text-base text-dark py-2 px-8 flex group-hover:text-primary dark:text-white">Feature</a></li>
                                <li class="group"><a href="#testimoni" class="text-base text-dark py-2 px-8 flex group-hover:text-primary dark:text-white">Testimoni</a></li>
                                <li class="group"><a href="#about" class="text-base text-dark py-2 px-8 flex group-hover:text-primary dark:text-white">About</a></li>
                                <li class="group"><a href="#contact" class="text-base text-dark py-2 px-8 flex group-hover:text-primary dark:text-white">Contact</a></li>
                                @if (auth()->user())
                                    <li class="group"><a href="{{ route('dashboard.index') }}" class="text-base text-dark py-2 px-8 flex group-hover:text-primary dark:text-white">Dashboard</a></li>
                                @else
                                    <li class="group"><a href="{{ route('login') }}" class="text-base text-dark py-2 px-8 flex group-hover:text-primary dark:text-white">Login</a></li>
                                @endif
                                <li class="mt-3 flex items-center pl-8 lg:mt-0">
                                    <div class="flex">
                                        <span class="mr-2 text-sm text-slate-500">Light</span>
                                        <input type="checkbox" class="hidden" id="dark-toggle">
                                        <label for="dark-toggle" class="">
                                            <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                                                <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                                            </div>
                                        </label>
                                        <span class="ml-2 text-sm text-slate-500">Dark</span>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Hero Start -->
        <section id="home" class="dark:bg-dark dark:text-white h-screen p-8">
            <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                    <img src="https://mambaui.com/assets/svg/Business_SVG.svg" alt=""
                        class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                </div>
                <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                    <h1 class="text-5xl font-bold leading-none sm:text-6xl">Point
                        <span class="dark:text-primary text-violet-400">Of</span> Sales
                    </h1>
                    <p class="mt-6 mb-8 text-lg sm:mb-12">Dictum aliquam porta in condimentum ac integer
                        <br class="hidden md:inline lg:hidden">turpis pulvinar, est scelerisque ligula sem
                    </p>
                    <div
                        class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                        <a class="block w-full rounded-xl border border-primary bg-primary px-12 py-3 text-sm font-medium text-white hover:opacity-70 hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
                            href="#">
                            Get Started
                        </a>

                        <!-- <a class="block w-full rounded-xl border border-dark bg-dark dark:bg-secondary dark:text-white px-12 py-3 text-sm font-medium text-white hover:opacity-70 focus:outline-none focus:ring active:bg-emerald-700 sm:w-auto"
                            href="#">
                            Learn More
                        </a> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero End -->

        <!-- Feature Start -->
        <div id="feature" class="py-24 bg-slate-300 dark:bg-slate-800">
            <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="w-full px-4">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-16">
                            <h2 class="font-semibold text-2xl text-primary mb-2 lg:text-4xl">Feature</h2>
                            <p class="text-md font-medium text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Tenetur perferendis dolorum nihil quia error alias dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-8 row-gap-5 lg:grid-cols-3">
                    <div
                        class="relative p-px overflow-hidden transition duration-300 transform rounded shadow-sm hover:scale-105 group hover:shadow-xl">
                        <div
                            class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100">
                        </div>
                        <div
                            class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100">
                        </div>
                        <div class="relative p-5 bg-white rounded-lg dark:bg-secondary">
                            <div class="flex flex-col mb-2 lg:items-center lg:flex-row">
                                <div
                                    class="flex items-center justify-center w-10 h-10 mb-4 mr-2 rounded-full bg-indigo-50 lg:mb-0">
                                    <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                            points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                    </svg>
                                </div>
                                <h6 class="font-semibold leading-5">The quick, brown fox</h6>
                            </div>
                            <p class="mb-2 text-sm text-gray-900 dark:text-white">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem
                                aperiam.
                            </p>
                            <a href="/" aria-label=""
                                class="inline-flex items-center text-sm font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn
                                more</a>
                        </div>
                    </div>
                    <div
                        class="relative p-px overflow-hidden transition duration-300 transform rounded shadow-sm hover:scale-105 group hover:shadow-xl">
                        <div
                            class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100">
                        </div>
                        <div
                            class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100">
                        </div>
                        <div class="relative p-5 bg-white rounded-lg dark:bg-secondary">
                            <div class="flex flex-col mb-2 lg:items-center lg:flex-row">
                                <div
                                    class="flex items-center justify-center w-10 h-10 mb-4 mr-2 rounded-full bg-indigo-50 lg:mb-0">
                                    <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                            points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                    </svg>
                                </div>
                                <h6 class="font-semibold leading-5">Smooth as an android</h6>
                            </div>
                            <p class="mb-2 text-sm text-gray-900 dark:text-white">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem
                                aperiam.
                            </p>
                            <a href="/" aria-label=""
                                class="inline-flex items-center text-sm font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn
                                more</a>
                        </div>
                    </div>
                    <div
                        class="relative p-px overflow-hidden transition duration-300 transform rounded shadow-sm hover:scale-105 group hover:shadow-xl">
                        <div
                            class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100">
                        </div>
                        <div
                            class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100">
                        </div>
                        <div class="relative p-5 bg-white rounded-lg dark:bg-secondary">
                            <div class="flex flex-col mb-2 lg:items-center lg:flex-row">
                                <div
                                    class="flex items-center justify-center w-10 h-10 mb-4 mr-2 rounded-full bg-indigo-50 lg:mb-0">
                                    <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                            points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                    </svg>
                                </div>
                                <h6 class="font-semibold leading-5">This is about justice</h6>
                            </div>
                            <p class="mb-2 text-sm text-gray-900 dark:text-white">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem
                                aperiam.
                            </p>
                            <a href="/" aria-label=""
                                class="inline-flex items-center text-sm font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- Testimoni Start -->
        <section class="bg-dark" id="testimoni">
            <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
                <div class="mx-auto max-w-xl text-center">
                    <h2 class="text-4xl font-bold tracking-tight sm:text-5xl text-primary">
                        Read trusted reviews from our customers
                    </h2>

                    <p class="text-gring-offset-warm-gray-500 mx-auto mt-4 max-w-lg text-secondary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                        praesentium natus sapiente commodi. Aliquid sunt tempore iste
                        repellendus explicabo dignissimos placeat, autem harum dolore
                        reprehenderit quis! Quo totam dignissimos earum.
                    </p>
                </div>

                <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 sm:gap-16 lg:grid-cols-3">
                    <div>
                        <img alt="Woman"
                            src="https://images.unsplash.com/photo-1599566219227-2efe0c9b7f5f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                            class="mx-auto h-24 w-24 rounded-full object-cover shadow-xl" />

                        <blockquote
                            class="-mt-6 flex flex-col justify-between rounded-lg p-12 text-center shadow-xl bg-white dark:bg-secondary">
                            <p class="text-lg font-bold text-secondary dark:text-white">Sophie Lennon</p>
                            <p class="mt-1 text-xs font-medium text-secondary dark:text-white">
                                Digital Marketing at Studio
                            </p>
                            <p class="mt-4 text-sm text-secondary dark:text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                voluptatem alias ut provident sapiente repellendus.
                            </p>

                            <div class="mt-8 flex justify-center gap-0.5 text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </blockquote>
                    </div>
                    <div>
                        <img alt="Woman"
                            src="https://images.unsplash.com/photo-1599566219227-2efe0c9b7f5f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                            class="mx-auto h-24 w-24 rounded-full object-cover shadow-xl" />

                        <blockquote
                            class="-mt-6 flex flex-col justify-between rounded-lg p-12 text-center shadow-xl bg-white dark:bg-secondary">
                            <p class="text-lg font-bold text-secondary dark:text-white">Sophie Lennon</p>
                            <p class="mt-1 text-xs font-medium text-secondary dark:text-white">
                                Digital Marketing at Studio
                            </p>
                            <p class="mt-4 text-sm text-secondary dark:text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                voluptatem alias ut provident sapiente repellendus.
                            </p>

                            <div class="mt-8 flex justify-center gap-0.5 text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </blockquote>
                    </div>
                    <div>
                        <img alt="Woman"
                            src="https://images.unsplash.com/photo-1599566219227-2efe0c9b7f5f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                            class="mx-auto h-24 w-24 rounded-full object-cover shadow-xl" />

                        <blockquote
                            class="-mt-6 flex flex-col justify-between rounded-lg p-12 text-center shadow-xl bg-white dark:bg-secondary">
                            <p class="text-lg font-bold text-secondary dark:text-white">Sophie Lennon</p>
                            <p class="mt-1 text-xs font-medium text-secondary dark:text-white">
                                Digital Marketing at Studio
                            </p>
                            <p class="mt-4 text-sm text-secondary dark:text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                voluptatem alias ut provident sapiente repellendus.
                            </p>

                            <div class="mt-8 flex justify-center gap-0.5 text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </blockquote>
                    </div>

                </div>
            </div>
        </section>

        <!-- Testimoni End -->

        <!-- About Section Start -->
        <section id="about" class="py-24  bg-slate-300 dark:bg-slate-800">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full px-4 mb-10 lg:w-1/2">
                        <h4 class="font-bold uppercase text-primary text-lg">Tentang Kami</h4>
                        <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl dark:text-white">Belajar lah kuyy
                            terus gasken!</h2>
                        <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Modi, tenetur assumenda cupiditate eius ipsa at est?</p>
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl pt-10 dark:text-white">Social Media Kami</h3>
                        <p class="text-base font-medium text-secondary mb-6 lg:text-lg">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ullam fugiat voluptatibus aperiam minus dolorem obcaecati fugit.</p>
                        <div class="flex items-center">
                            <a href="https://youtube.com" target="_blank"
                                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-500  text-slate-500 hover:border-primary hover:bg-primary hover:text-white">
                                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>YouTube</title>
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                            <a href="https://instagram.com" target="_blank"
                                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-500  text-slate-500 hover:border-primary hover:bg-primary hover:text-white">
                                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Instagram</title>
                                    <path
                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>
                            <a href="https://twitter.com" target="_blank"
                                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-500  text-slate-500 hover:border-primary hover:bg-primary hover:text-white">
                                <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Twitter</title>
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <a href="https://linkedin.com" target="_blank"
                                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-500  text-slate-500 hover:border-primary hover:bg-primary hover:text-white">
                                <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>LinkedIn</title>
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

        <!-- Contact Section Start -->
        <section id="contact" class="pt-24 pb-32 dark:bg-slate-800">
            <div class="container">
                <div class="w-full px-4">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-16">
                            <h4 class="font-semibold text-lg text-primary mb-2 lg:text-2xl">Contact</h4>
                            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-4xl dark:text-white">Hubungi Kami
                            </h2>
                            <p class="text-md font-medium text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Tenetur perferendis dolorum nihil quia error alias dolore.</p>
                        </div>
                    </div>
                </div>
                <form name="portfolio-contact-form">
                    <div class="w-full lg:w-2/3 lg:mx-auto">
                        <div class="w-full mb-8 px-4">
                            <label for="name" class="text-base text-primary font-bold">Nama</label>
                            <input type="text" id="name"
                                class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                                name="nama" required />
                        </div>
                        <div class="w-full mb-8 px-4">
                            <label for="email" class="text-base text-primary font-bold">Email</label>
                            <input type="text" id="email"
                                class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                                name="email" required />
                        </div>
                        <div class="w-full mb-8 px-4">
                            <label for="pesan" class="text-base text-primary font-bold">Pesan</label>
                            <textarea id="pesan"
                                class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"
                                name="pesan" required></textarea>
                        </div>
                        <div class="w-full px-4">
                            <button type="button"
                                class="text-base font-semibold text-white bg-slate-500 py-3 px-8 rounded-full w-full transition duration-300 animate-pulse hidden"
                                id="btn-loading" disabled>
                                Loading...
                            </button>
                            <button type="submit"
                                class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-300 block"
                                id="btn-kirim">Kirim</button>

                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Contact Section End -->

        <!-- Footer Start -->
        <footer class="bg-dark pt-24 pb-12">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                        <h2 class="font-bold text-4xl text-white mb-4">Point Of Sales</h2>
                        <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                        <p>arfianto472@gmail.com</p>
                        <p>Ciracas</p>
                        <p>DKI Jakarta</p>
                    </div>
                    <div class="w-full px-4 mb-1 font-medium md:w-1/3">
                        <h3 class="font-semibold text-xl text-white mb-5">Feature</h3>
                        <ul class="text-slate-300">
                            <li><a href="" class="inline-block text-base hover:text-primary mb-3">Cashier</a></li>
                            <li><a href="" class="inline-block text-base hover:text-primary mb-3">Monthly Report</a></li>
                            <li><a href="" class="inline-block text-base hover:text-primary mb-3">Payment</a></li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-1 font-medium md:w-1/3">
                        <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                        <ul class="text-slate-300">
                            <li><a href="#home" class="inline-block text-base hover:text-primary mb-3">Home</a></li>
                            <li><a href="#feature" class="inline-block text-base hover:text-primary mb-3">Feature</a></li>
                            <li><a href="#testimoni" class="inline-block text-base hover:text-primary mb-3">Testimoni</a></li>
                            <li><a href="#about" class="inline-block text-base hover:text-primary mb-3">About</a></li>
                            <li><a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="w-full pt-10 border-t border-slate-700">
                    <div class="flex items-center justify-center mb-5">
                        <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300  text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300  text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300  text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300  text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                    <p class="font-mediom text-center text-slate-500 text-sm">© 2023 Copyright: Farhanskuyyyy</p>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <script>
            window.addEventListener("load", (event) => {
                console.log("page is fully loaded");
                loading()
            });

            function loading() {
                var loading = document.getElementById("loading");
                loading.classList.add('block');
                loading.classList.remove('hidden');
                setTimeout(() => {
                    loading.classList.remove('block');
                    loading.classList.add('hidden');
                }, 1000);
            }

            // nabar fixed
            window.onscroll = function(){
                const header = document.querySelector('header');
                const fixedNav = header.offsetTop;

                if (window.pageYOffset > fixedNav) {
                    header.classList.add('navbar-fixed')
                }else{
                    header.classList.remove('navbar-fixed')
                }
            }

            // hamburger button
            const hamburger = document.getElementById('hamburger');
            const navMenu = document.getElementById('nav-menu');

            hamburger.addEventListener('click',function(){
                hamburger.classList.toggle('hamburger-active')
                navMenu.classList.toggle('hidden')
            })

            window.addEventListener('click',function(e){
                if (e.target != hamburger && e.target != navMenu) {
                    hamburger.classList.remove('hamburger-active');
                    navMenu.classList.add('hidden')
                }
            })

            // dark mode toggle
            const darkToggle = document.querySelector('#dark-toggle');
            const html = document.querySelector('html');

            darkToggle.addEventListener('click',function(){
                if (darkToggle.checked) {
                    html.classList.add('dark')
                    localStorage.theme = 'dark';
                }else{
                    html.classList.remove('dark')
                    localStorage.theme = 'light';
                }
            })

            if (localStorage.theme == 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                darkToggle.checked = true
            }else{
                darkToggle.checked = false
            }

            // contact form send to spreadsheet
            const scriptURL =
                "https://script.google.com/macros/s/AKfycbwh4yHZ3QyEFUEnzIUVUW0cYRUi1bniNa6V4TuHibNl591mZMs-x8Mo9_sqRES1RbawKQ/exec";
            const form = document.forms["portfolio-contact-form"];
            const btnKirim = document.querySelector("#btn-kirim");
            const btnLoading = document.querySelector("#btn-loading");
            // const alertForm = document.querySelector(".alert-form");

            form.addEventListener("submit", (e) => {
                e.preventDefault();

                // Ketika Tombol submit di klik
                // Tampil tombol loading , hilangkan tombol kirim
                btnLoading.classList.remove("hidden");
                btnLoading.classList.add("block");
                btnKirim.classList.remove("block");
                btnKirim.classList.add("hidden");

                fetch(scriptURL, {
                        method: "POST",
                        body: new FormData(form)
                    })
                    .then((response) => {
                        // Tampil tombol kirim , hilangkan tombol loading
                        btnLoading.classList.remove("block");
                        btnLoading.classList.add("hidden");
                        btnKirim.classList.remove("hidden");
                        btnKirim.classList.add("block");

                        // tampilkan alert
                        // alertForm.classList.toggle("d-none");
                        alert('success')

                        // reset form
                        form.reset();
                        console.log("Success!", response);
                    })
                    .catch((error) => console.error("Error!", error.message));
            });
        </script>
    </body>
</html>
