<div class="box-border">
    <!-- Alpine -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <section class="bg-team">
        <header class="bg-slate-800 sticky top-0 left-0 right-0 z-50 font-lg p-2 transition duration-500 ease-in-out"
            :class="{ 'shadow-lg': atTop, 'bg-white text-[rgba(255,70,5,.1)] z-50': !
                atTop, 'bg-slate-800 text-indigo-800': atTop }"
            @scroll.window="atTop = (window.pageYOffset < 50) ? false: true">
            <nav class="flex items-center" aria-label="Global">
                <div class="flex">
                    <div class="flex px-8 h-8">
                        <a href="#" class="-m-1.5 p-1.5 text-white">
                            <span class="sr-only">Your Company</span>
                            <img class="h-full"
                                src="https://demo.vehica.com/wp-content/uploads/2021/09/vehica-logo-dark-retina.png"
                                alt="">
                        </a>
                    </div>
                    <div class="flex gap-8">
                        <div class="relative">
                            <button type="button"
                                class="flex items-center gap-x-1 text-2xl text-white font-semibold leading-6 text-black-900 before:content-[''] before:w-2 ease-in duration-300 hover:text-orange-500 hover:border-t-2 hover:border-orange-600"
                                aria-expanded="false">
                                Product
                                <svg class="h-5 w-5 flex-none text-orange-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div
                                class="absolute hidden hover:visible -left-8 top-full z-10 mt-3 w-40 max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                                <div class="p-2">
                                    <div
                                        class="group relative flex items-center gap-x-6 rounded-lg p-2 text-sm leading-6 hover:bg-black-50">

                                        <div class="flex-auto">
                                            <a href="#" class="block font-semibold text-black-900 border-b-2">
                                                Analytics
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex items-center gap-x-6 rounded-lg p-2 text-sm leading-6 hover:bg-black-50">
                                        <div class="flex-auto">
                                            <a href="#" class="block font-semibold text-black-900 border-b-2">
                                                Engagement
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex items-center gap-x-6 rounded-lg p-2 text-sm leading-6 hover:bg-black-50">
                                        <div class="flex-auto">
                                            <a href="#" class="block font-semibold text-black-900 border-b-2">
                                                Security
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex items-center gap-x-6 rounded-lg p-2 text-sm leading-6 hover:bg-black-50">
                                        <div class="flex-auto">
                                            <a href="#" class="block font-semibold text-black-900 border-b-2">
                                                Integrations
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex items-center gap-x-6 rounded-lg p-2 text-sm leading-6 hover:bg-black-50">
                                        <div class="flex-auto">
                                            <a href="#" class="block font-semibold text-black-900 border-b-2">
                                                Automations
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <button type="button"
                                class="flex items-center gap-x-1 text-2xl text-white font-semibold leading-6 text-black-900"
                                aria-expanded="false">
                                Search
                                <svg class="h-5 w-5 flex-none text-orange-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="relative">
                            <button type="button"
                                class="flex items-center gap-x-1 text-2xl text-white font-semibold leading-6 text-black-900"
                                aria-expanded="false">
                                Listing
                                <svg class="h-5 w-5 flex-none text-orange-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="relative">
                            <button type="button"
                                class="flex items-center gap-x-1 text-2xl text-white font-semibold leading-6 text-black-900"
                                aria-expanded="false">
                                Pages
                                <svg class="h-5 w-5 flex-none text-orange-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="relative">
                            <button type="button"
                                class="flex items-center gap-x-1 text-2xl text-white font-semibold leading-6 text-black-900"
                                aria-expanded="false">
                                More
                                <svg class="h-5 w-5 flex-none text-orange-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-1 justify-end `">
                    @if (Route::has('login'))
                        <div class="flex gap-2 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="font-semibold text-black-600 hover:text-black-900 dark:text-black-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <button type="button"
                                    class="flex items-center gap-x-1 text-xl text-white font-semibold leading-6 text-black-900"
                                    aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                    <a href="{{ route('login') }}"
                                        class="ease-in text-xl duration-300 hover:text-orange-700 ">
                                        <span class="border-r-2 p-2">
                                            Log in
                                        </span>
                                    </a>
                                </button>

                                @if (Route::has('register'))
                                    <button type="button"
                                        class="flex items-center gap-x-1 text-xl text-white font-semibold leading-6 text-black-900 ease-in duration-300 hover:text-orange-700 "
                                        aria-expanded="false">
                                        <a href="{{ route('register') }}"
                                            class="ml-4 font-semibold text-black-600 hover:text-black-900 dark:text-black-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                            Register
                                        </a>
                                    </button>
                                @endif
                                <button type="button"
                                    class="flex items-center gap-x-1 text-xl text-white border rounded-lg p-2 border-orange-700 hover:bg-orange-700 hover:text-white font-semibold leading-6  ease-in duration-300"
                                    aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                    Add Listing
                                </button>
                            @endauth

                        </div>
                    @endif
                </div>
            </nav>
        </header>
        <section>
            <div class="flex justify-between w-4/5 m-0 m-auto">
                <div class="mt-8 ">
                    <h1 class="text-9xl text-white font-bold">
                        Find your <br>dream car
                    </h1>
                    <p class="text-gray-400 mb-8">
                        We can help you find the best car. Check our <br> reviews, compare models and find cars for
                        sale.
                    </p>
                    <button
                        class="flex items-center gap-x-1 text-xl text-white border rounded-lg p-2 border-orange-700 hover:bg-orange-700 font-semibold leading-6 text-black-900 ease-in duration-300 mb-8 px-4">About
                        us</button>
                </div>
                <div class="bg-gray-300 rounded-lg mt-8 h-fit p-8">
                    <div class="flex gap-4 justify-around">
                        <button class="text-orange-700 underline-offset-2">All</button>
                        <button class="hover:text-orange-700">New</button>
                        <button class="hover:text-orange-700">Used</button>
                    </div>
                    <div class="bg-white w-full border rounded-lg p-4">

                        <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                        <select id="countries"
                            class="bg-gray-50 mb-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>All Makes</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                        <div class="flex gap-4">
                            <select id="countries"
                                class="bg-gray-50 mb-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Min Price</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                            <select id="countries"
                                class="bg-gray-50 mb-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Max Price</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                        </div>
                        <div class="flex justify-center item-center gap-2 flex-wrap">
                            <button
                                class="hover:text-orange-600 gap-x-1 text-xl  p-2  font-semibold leading-6 ease-in duration-300 mb-8 px-4">
                                <a href="">
                                    Advanced Search
                                </a>
                            </button>
                            <button
                                class="flex items-center gap-x-1 text-xl text-white border rounded-lg p-2 bg-orange-600 font-semibold leading-6 ease-in duration-300 mb-8 px-4">
                                Search
                                <span class="hidde">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div>
                        <p class="text-center">
                            We found <span class="text-orange-600">xxx</span> listings for you
                        </p>
                    </div>
                </div>
                <div class="hidden relative">
                    <div class="w-16 absolute top-0 right-0 bg-gray-200 h-16"></div>
                    <div class="w-16 absolute  bg-gray-200 h-16"></div>
                    <div class="w-16 absolute bg-gray-200 h-16"></div>
                    <div class="w-16 absolute bg-gray-200 h-16"></div>
                </div>
            </div>
        </section>
    </section>
    <section class="mb-8">
        <div>
            <div class="flex w-4/5 m-0 m-auto mt-8 justify-between">
                <div>
                    <h4 class="text-[#ff4605] text-xl text-bold">Handy picked</h4>
                    <h2 class="text-5xl">Featured Listing</h2>
                </div>
                <div class="flex gap-4">
                    <button
                        class="flex items-center text-[#ff4605] gap-x-1 text-xl border-[#ff4605] border rounded-lg  bg-[#fff0eb] font-semibold leading-6 ease-in duration-300 mt-8 py-3 px-12">
                        New
                    </button>
                    <button
                        class="flex items-center gap-x-1 text-xl hover:border-[#ff4605] text-black bg-gray-300 border rounded-lg  hover:bg-[#fff0eb] font-semibold leading-6 ease-in duration-300 mt-8 px-12 py-3">
                        Used
                    </button>
                </div>
            </div>
            <div class="w-4/5 m-0 m-auto">
                <div class="flex mt-8 gap-4">
                    <div class="w-1/2 bg-gray-800 rounded-lg border-2">
                        <div class="relative">
                            <div class="overflow-hidden">
                                <img class="rounded-lg rounded-b-none hover:scale-110 delay-500 duration-300 transition-transform"
                                    src="{{ URL::asset('/images/6.jpg') }}" alt="">
                            </div>
                            <div class="flex justify-evenly absolute bottom-48 left-0 bg-yellow">
                                <div>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                        </svg>
                                    </p>
                                </div>
                            </div>
                            <div class="">
                                <div class="bg-gray-800 p-8">
                                    <h2
                                        class="text-white text-xl after:content[''] after:mt-4 after:bg-gray-300 after:w-5/11 after:h-px after:block">
                                        BMW 8-serie 2-door coupe grey
                                    </h2>
                                    <div class="flex justify-between mt-8">
                                        <div class="flex justify-between gap-4">
                                            <p
                                                class="text-white text-bold px-4 py-2 rounded flex justify- bg-[#ff4605]">
                                                2021</p>
                                            <button class="text-[#99a1b2] text-xl"><a href="#">
                                                    Automatic
                                                </a></button>
                                            <button class="text-[#99a1b2] text-xl"><a href="#">
                                                    Petrol
                                                </a></button>
                                            <button class="text-[#99a1b2] text-xl"><a href="#">
                                                    Front Wheel Drive
                                                </a> </button>
                                        </div>
                                        <p class="text-white text-4xl font-bold">$62,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-1/2 gap-x-4 gap-y-4">
                        <div class="flex flex-col gap-4">
                            <div>
                                <div class="overflow-hidden">
                                    <img class="rounded-lg rounded-b-none hover:scale-110 delay-500 duration-300 transition-transform"
                                        src="{{ URL::asset('/images/5.jpg') }}" alt="">
                                </div>
                                <div class="">
                                    <div class="rounded-b-lg bg-gray-800 p-4">
                                        <h2 class="text-white text-l">
                                            Chevrolet Camaro 2-door convertible
                                        </h2>
                                        <p class="text-white text-xl font-bold border-b-2">$62,000</p>
                                        <div class="flex justify-between">
                                            <div class="flex justify-between align-center mt-4 gap-4">
                                                <p class="text-white bg-[#ff4605] px-4 rounded">2021</p>
                                                <button class="text-[#99a1b2] text-l"><a href="#">
                                                        Automatic
                                                    </a></button>
                                                <button class="text-[#99a1b2] text-l"><a href="#">
                                                        Diesel
                                                    </a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="overflow-hidden">
                                    <img class="rounded-lg rounded-b-none hover:scale-110 delay-500 duration-300 transition-transform"
                                        src="{{ URL::asset('/images/car-red.jpg') }}" alt="">
                                </div>
                                <div class="rounded-b-lg bg-gray-800">
                                    <div class="rounded-b-lg bg-gray-800 p-4">
                                        <h2 class="text-white text-l">
                                            Chevrolet Camaro 2-door convertible
                                        </h2>
                                        <p class="text-white text-xl font-bold border-b-2">$62,000</p>
                                        <div class="flex justify-between">
                                            <div class="flex justify-between align-center mt-4 gap-4">
                                                <p class="text-white bg-[#ff4605] px-4 rounded">2021</p>
                                                <button class="text-[#99a1b2] text-l"><a href="#">
                                                        Automatic
                                                    </a></button>
                                                <button class="text-[#99a1b2] text-l"><a href="#">
                                                        Diesel
                                                    </a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-4">
                                <div>
                                    <div class="overflow-hidden">
                                        <img class="rounded-lg rounded-b-none hover:scale-110 delay-500 duration-300 transition-transform"
                                            src="{{ URL::asset('/images/audi3.jpg') }}" alt="">
                                    </div>
                                    <div class="">
                                        <div class="rounded-b-lg bg-gray-800 p-4">
                                            <h2 class="text-white text-l">
                                                Chevrolet Camaro 2-door convertible
                                            </h2>
                                            <p class="text-white text-xl font-bold border-b-2">$62,000</p>
                                            <div class="flex justify-between">
                                                <div class="flex justify-between align-center mt-4 gap-4">
                                                    <p class="text-white bg-[#ff4605] px-4 rounded">2021</p>
                                                    <button class="text-[#99a1b2] text-l"><a href="#">
                                                            Automatic
                                                        </a></button>
                                                    <button class="text-[#99a1b2] text-l"><a href="#">
                                                            Diesel
                                                        </a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="overflow-hidden">
                                        <img class="rounded-lg rounded-b-none hover:scale-110 delay-500 duration-300 transition-transform"
                                            src="{{ URL::asset('/images/mrec.jpg') }}" alt="">
                                    </div>
                                    <div class="rounded-b-lg bg-gray-800">
                                        <div class="rounded-b-lg bg-gray-800 p-4">
                                            <h2 class="text-white text-l">
                                                Chevrolet Camaro 2-door convertible
                                            </h2>
                                            <p class="text-white text-xl font-bold border-b-2">$62,000</p>
                                            <div class="flex justify-between">
                                                <div class="flex justify-between align-center mt-4 gap-4">
                                                    <p class="text-white bg-[#ff4605] px-4 rounded">2021</p>
                                                    <button class="text-[#99a1b2] text-l"><a href="#">
                                                            Automatic
                                                        </a></button>
                                                    <button class="text-[#99a1b2] text-l"><a href="#">
                                                            Diesel
                                                        </a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-8">
        <div class="flex align-center justify-between w-4/5 m-0 m-auto">
            <div class="flex align-center justify-center gap-4">
                <p class="flex items-center">
                    Follow Us
                </p>
                <div class="flex gap-2">
                    <div class="bg-[#eff0f1] hover:bg-[#ebebeb] p-4 rounded-full">
                        <svg viewBox="0 0 20 20" aria-hidden="true" class="h-5 w-5 fill-slate-400">
                            <path
                                d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0 0 20 3.92a8.19 8.19 0 0 1-2.357.646 4.118 4.118 0 0 0 1.804-2.27 8.224 8.224 0 0 1-2.605.996 4.107 4.107 0 0 0-6.993 3.743 11.65 11.65 0 0 1-8.457-4.287 4.106 4.106 0 0 0 1.27 5.477A4.073 4.073 0 0 1 .8 7.713v.052a4.105 4.105 0 0 0 3.292 4.022 4.095 4.095 0 0 1-1.853.07 4.108 4.108 0 0 0 3.834 2.85A8.233 8.233 0 0 1 0 16.407a11.615 11.615 0 0 0 6.29 1.84">
                            </path>
                        </svg>
                    </div>
                    <div class="bg-[#eff0f1] hover:bg-[#ebebeb] p-4 rounded-full">
                        <svg viewBox="0 0 20 20" aria-hidden="true" class="h-5 w-5 fill-slate-400">
                            <path
                                d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0 0 20 3.92a8.19 8.19 0 0 1-2.357.646 4.118 4.118 0 0 0 1.804-2.27 8.224 8.224 0 0 1-2.605.996 4.107 4.107 0 0 0-6.993 3.743 11.65 11.65 0 0 1-8.457-4.287 4.106 4.106 0 0 0 1.27 5.477A4.073 4.073 0 0 1 .8 7.713v.052a4.105 4.105 0 0 0 3.292 4.022 4.095 4.095 0 0 1-1.853.07 4.108 4.108 0 0 0 3.834 2.85A8.233 8.233 0 0 1 0 16.407a11.615 11.615 0 0 0 6.29 1.84">
                            </path>
                        </svg>
                    </div>
                    <div class="bg-[#eff0f1] hover:bg-[#ebebeb] p-4 rounded-full">
                        <svg viewBox="0 0 20 20" aria-hidden="true" class="h-5 w-5 fill-slate-400">
                            <path
                                d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0 0 20 3.92a8.19 8.19 0 0 1-2.357.646 4.118 4.118 0 0 0 1.804-2.27 8.224 8.224 0 0 1-2.605.996 4.107 4.107 0 0 0-6.993 3.743 11.65 11.65 0 0 1-8.457-4.287 4.106 4.106 0 0 0 1.27 5.477A4.073 4.073 0 0 1 .8 7.713v.052a4.105 4.105 0 0 0 3.292 4.022 4.095 4.095 0 0 1-1.853.07 4.108 4.108 0 0 0 3.834 2.85A8.233 8.233 0 0 1 0 16.407a11.615 11.615 0 0 0 6.29 1.84">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <button class="bg-[#ff4605] px-4 py-2 rounded-lg text-white font-bold">
                View 29 New
            </button>
        </div>
    </section>
    <section class="bg-[#eff3fa] mb-16">
        <div class="w-4/5 m-0 m-auto">
            <div class="flex justify-between">
                <h2 class="font-bold text-6xl mt-24">Popular Makes</h2>
                <div class="flex gap-4">
                    <button class="border-[#ff4605] border-2 mt-24 px-8 py-0 rounded-lg bg-[#fff0eb]">
                        <a href="">
                            Audi <br>
                            <span> 14 Listings </span>
                        </a>
                    </button>
                    <button
                        class="hover:border-[#ff4605] border-transparent border-2 mt-24 hover:bg-[#fff0eb] px-8 py-0 rounded-lg bg-[rgba(255,255,255,.7)]">
                        <a href="">
                            Audi <br>
                            <span> 14 Listings </span>
                        </a>
                    </button>
                    <button
                        class="hover:border-[#ff4605] border-transparent border-2 mt-24 hover:bg-[#fff0eb] px-8 py-0 rounded-lg bg-[rgba(255,255,255,.7)]">
                        <a href="">
                            Audi <br>
                            <span> 14 Listings </span>
                        </a>
                    </button>
                    <button
                        class="hover:border-[#ff4605] border-transparent border-2 mt-24 hover:bg-[#fff0eb] px-8 py-0 rounded-lg bg-[rgba(255,255,255,.7)]">
                        <a href="">
                            Audi <br>
                            <span> 14 Listings </span>
                        </a>
                    </button>
                    <button
                        class="hover:border-[#ff4605] border-transparent border-2 mt-24 hover:bg-[#fff0eb] px-8 py-0 rounded-lg bg-[rgba(255,255,255,.7)]">
                        <a href="">
                            Audi <br>
                            <span> 14 Listings </span>
                        </a>
                    </button>
                </div>
            </div>
            <div class="">
                <div>
                    <div class="flex flex-row mt-24 mb-16 gap-4">
                        <div>
                            <div class="overflow-hidden">
                                <img class="rounded-lg rounded-b-none hover:scale-110 delay-500 duration-300 transition-transform"
                                    src="{{ URL::asset('/images/audi3.jpg') }}" alt="">
                            </div>
                            <div class="">
                                <div class="rounded-b-lg bg-gray-800 p-4">
                                    <h2 class="text-white text-l">
                                        Chevrolet Camaro 2-door convertible
                                    </h2>
                                    <p class="text-white text-xl font-bold border-b-2">$62,000</p>
                                    <div class="flex justify-between">
                                        <div class="flex justify-between align-center mt-4 gap-4">
                                            <p class="text-white bg-[#ff4605] px-4 rounded">2021</p>
                                            <button class="text-[#99a1b2] text-l"><a href="#">
                                                    Automatic
                                                </a></button>
                                            <button class="text-[#99a1b2] text-l"><a href="#">
                                                    Diesel
                                                </a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="overflow-hidden">
                                <img class="rounded-lg rounded-b-none hover:scale-110 delay-500 duration-300 transition-transform"
                                    src="{{ URL::asset('/images/mrec.jpg') }}" alt="">
                            </div>
                            <div class="rounded-b-lg bg-gray-800">
                                <div class="rounded-b-lg bg-gray-800 p-4">
                                    <h2 class="text-white text-l">
                                        Chevrolet Camaro 2-door convertible
                                    </h2>
                                    <p class="text-white text-xl font-bold border-b-2">$62,000</p>
                                    <div class="flex justify-between">
                                        <div class="flex justify-between align-center mt-4 gap-4">
                                            <p class="text-white bg-[#ff4605] px-4 rounded">2021</p>
                                            <button class="text-[#99a1b2] text-l"><a href="#">
                                                    Automatic
                                                </a></button>
                                            <button class="text-[#99a1b2] text-l"><a href="#">
                                                    Diesel
                                                </a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="overflow-hidden">
                                <img class="rounded-lg rounded-b-none hover:scale-110 delay-500 duration-300 transition-transform"
                                    src="{{ URL::asset('/images/audi3.jpg') }}" alt="">
                            </div>
                            <div class="">
                                <div class="rounded-b-lg bg-gray-800 p-4">
                                    <h2 class="text-white text-l">
                                        Chevrolet Camaro 2-door convertible
                                    </h2>
                                    <p class="text-white text-xl font-bold border-b-2">$62,000</p>
                                    <div class="flex justify-between">
                                        <div class="flex justify-between align-center mt-4 gap-4">
                                            <p class="text-white bg-[#ff4605] px-4 rounded">2021</p>
                                            <button class="text-[#99a1b2] text-l"><a href="#">
                                                    Automatic
                                                </a></button>
                                            <button class="text-[#99a1b2] text-l"><a href="#">
                                                    Diesel
                                                </a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="overflow-hidden">
                                <img class="rounded-lg rounded-b-none hover:scale-110 delay-500 duration-300 transition-transform"
                                    src="{{ URL::asset('/images/mrec.jpg') }}" alt="">
                            </div>
                            <div class="rounded-b-lg bg-gray-800">
                                <div class="rounded-b-lg bg-gray-800 p-4">
                                    <h2 class="text-white text-l">
                                        Chevrolet Camaro 2-door convertible
                                    </h2>
                                    <p class="text-white text-xl font-bold border-b-2">$62,000</p>
                                    <div class="flex justify-between">
                                        <div class="flex justify-between align-center mt-4 gap-4">
                                            <p class="text-white bg-[#ff4605] px-4 rounded">2021</p>
                                            <button class="text-[#99a1b2] text-l"><a href="#">
                                                    Automatic
                                                </a></button>
                                            <button class="text-[#99a1b2] text-l"><a href="#">
                                                    Diesel
                                                </a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between mb-8">
                <div class="flex gap-4">
                    <div class="bg-[#fff] rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </div>
                    <div class="bg-[#fff] rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>
                <div>
                    <button class="bg-[#ff4605] px-4 py-2 rounded-lg text-white font-bold">
                        View 29 New
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-4/5 m-0 m-auto text-center">
            <h2 class="text-6xl font-bold mb-24 mt-16 tracking-wide">
                Why choose us?
            </h2>
            <div class="flex justify-evenly align-center">
                <div class="flex  flex-col">
                    <p class="self-center rounded-full p-4 mb-16 text-[#ff4605] bg-[rgba(255,70,5,.1)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3.75v16.5M2.25 12h19.5M6.375 17.25a4.875 4.875 0 004.875-4.875V12m6.375 5.25a4.875 4.875 0 01-4.875-4.875V12m-9 8.25h16.5a1.5 1.5 0 001.5-1.5V5.25a1.5 1.5 0 00-1.5-1.5H3.75a1.5 1.5 0 00-1.5 1.5v13.5a1.5 1.5 0 001.5 1.5zm12.621-9.44c-1.409 1.41-4.242 1.061-4.242 1.061s-.349-2.833 1.06-4.242a2.25 2.25 0 013.182 3.182zM10.773 7.63c1.409 1.409 1.06 4.242 1.06 4.242S9 12.22 7.592 10.811a2.25 2.25 0 113.182-3.182z" />
                        </svg>
                    </p>
                    <h3 class="font-bold text-2xl tracking-wide leading-8">
                        Wide range of brands
                    </h3>
                    <p class="text-[#6f6f6f] mb-16 text-xl font-medium mt-8">
                        We can help with your financing plan, <br> we can offer some tips and tricks. Drive <br> off
                        with this dream car of yours <br> regardless of your credit history.
                    </p>
                </div>
                <div class="flex  flex-col">
                    <p class="self-center rounded-full p-4 mb-16 text-[#0fdf2c] bg-[rgba(64,255,5,.1)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </p>
                    <h3 class="font-bold text-2xl tracking-wide leading-8">
                        Trusted by our clients
                    </h3>
                    <p class="text-[#6f6f6f] mb-16 text-xl font-medium mt-8">
                        We can help with your financing plan, <br> we can offer some tips and tricks. Drive <br> off
                        with this dream car of yours <br> regardless of your credit history.
                    </p>
                </div>
                <div class="flex  flex-col">
                    <p class="self-center rounded-full p-4 mb-16 text-[#0575ff] bg-[rgba(5,117,255,.1)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3.75v16.5M2.25 12h19.5M6.375 17.25a4.875 4.875 0 004.875-4.875V12m6.375 5.25a4.875 4.875 0 01-4.875-4.875V12m-9 8.25h16.5a1.5 1.5 0 001.5-1.5V5.25a1.5 1.5 0 00-1.5-1.5H3.75a1.5 1.5 0 00-1.5 1.5v13.5a1.5 1.5 0 001.5 1.5zm12.621-9.44c-1.409 1.41-4.242 1.061-4.242 1.061s-.349-2.833 1.06-4.242a2.25 2.25 0 013.182 3.182zM10.773 7.63c1.409 1.409 1.06 4.242 1.06 4.242S9 12.22 7.592 10.811a2.25 2.25 0 113.182-3.182z" />
                        </svg>
                    </p>
                    <h3 class="font-bold text-2xl tracking-wide leading-8">
                        Fast & easy financing
                    </h3>
                    <p class="text-[#6f6f6f] mb-16 text-xl font-medium mt-8">
                        We can help with your financing plan, <br> we can offer some tips and tricks. Drive <br> off
                        with this dream car of yours <br> regardless of your credit history.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="mb-52">
        <div class="flex flex-col relative">
            <div class="bg-team flex w-4/5 m-0 m-auto rounded-xl z-10">
                <div class="p-16 w-4/12">
                    <h2 class="text-white text-6xl mb-12 font-muli font-bold ">
                        Our team
                    </h2>
                    <ul>
                        <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                            <span class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-4 h-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-2 h-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span>
                            <span class="text-lg font-muli font-medium px-4">
                                Praesent nibh luctus viverra
                            </span>
                        </li>
                        <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                            <span class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-4 h-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-2 h-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span>
                            <span class="text-lg font-muli font-medium px-4">
                                Praesent nibh luctus viverra
                            </span>
                        </li>
                        <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                            <span class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-4 h-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-2 h-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span>
                            <span class="text-lg font-muli font-medium px-4">
                                Praesent nibh luctus viverra
                            </span>
                        </li>
                        <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                            <span class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-4 h-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-2 h-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span>
                            <span class="text-lg font-muli font-medium px-4">
                                Praesent nibh luctus viverra
                            </span>
                        </li>
                    </ul>
                    <button class="bg-[#ff4605] px-6 py-2 rounded-lg text-white font-bold mb-16 mt-16">
                        Learn More
                    </button>
                    <div class="flex gap-4">
                        <div class="bg-[#fff] rounded-full p-4 transition-shadow duration-300 hover:shadow-3xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </div>
                        <div class="bg-[#fff] rounded-full p-4 transition-shadow duration-300 hover:shadow-3xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="grid p-16 gap-4" style="grid-template-columns: 40% 40% 40%">
                    <div class="bg-white rounded-xl">
                        <div class="">
                            <img class="rounded-t-xl outline-none" src="{{ URL::asset('/images/p7-1-336x284.jpg') }}"
                                alt="">
                        </div>
                        <div class="relative p-8">
                            <div>
                                <h3 class="text-[#222732] text-3xl font-bold">
                                    Emily Rees
                                </h3>
                                <p
                                    class="text-[#99a1b2] mb-4 after:content[''] after:mt-4 after:bg-gray-300 after:w-5/11 after:h-px after:block">
                                    Cutstomer Advisor
                                </p>
                                <p class="text-[#ff4605] text-lg font-muli">
                                    emily@vehica.com
                                </p>
                                <p class="text-[#99a1b2]">
                                    (111) 222-3456
                                </p>
                            </div>
                            <div class="flex gap-4 absolute top-[-1.5rem]">
                                <button class="bg-[#ff4605] px-3 py-3 rounded-lg text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button class="bg-[#ff4605] px-3 py-3 rounded-lg text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                        <path
                                            d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl">
                        <div class="">
                            <img class="rounded-t-xl outline-none" src="{{ URL::asset('/images/p7-1-336x284.jpg') }}"
                                alt="">
                        </div>
                        <div class="relative p-8">
                            <div>
                                <h3 class="text-[#222732] text-3xl font-bold">
                                    Emily Rees
                                </h3>
                                <p
                                    class="text-[#99a1b2] mb-4 after:content[''] after:mt-4 after:bg-gray-300 after:w-5/11 after:h-px after:block">
                                    Cutstomer Advisor
                                </p>
                                <p class="text-[#ff4605] text-lg font-muli">
                                    emily@vehica.com
                                </p>
                                <p class="text-[#99a1b2]">
                                    (111) 222-3456
                                </p>
                            </div>
                            <div class="flex gap-4 absolute top-[-1.5rem]">
                                <button class="bg-[#ff4605] px-3 py-3 rounded-lg text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button class="bg-[#ff4605] px-3 py-3 rounded-lg text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                        <path
                                            d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl">
                        <div class="">
                            <img class="rounded-t-xl outline-none" src="{{ URL::asset('/images/p7-1-336x284.jpg') }}"
                                alt="">
                        </div>
                        <div class="relative p-8">
                            <div>
                                <h3 class="text-[#222732] text-3xl font-bold">
                                    Emily Rees
                                </h3>
                                <p
                                    class="text-[#99a1b2] mb-4 after:content[''] after:mt-4 after:bg-gray-300 after:w-5/11 after:h-px after:block">
                                    Cutstomer Advisor
                                </p>
                                <p class="text-[#ff4605] text-lg font-muli">
                                    emily@vehica.com
                                </p>
                                <p class="text-[#99a1b2]">
                                    (111) 222-3456
                                </p>
                            </div>
                            <div class="flex gap-4 absolute top-[-1.5rem]">
                                <button class="bg-[#ff4605] px-3 py-3 rounded-lg text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button class="bg-[#ff4605] px-3 py-3 rounded-lg text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                        <path
                                            d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#f2f5fb] mt-32 h-4/5 absolute top-40 left-0 w-full">

            </div>
        </div>
    </section>

    <section class="mt-32 mb-8">
        <div class="flex w-4/5 m-0 m-auto justify-between gap-8">
            <div class="bg-[#fff] shadow-4xl rounded-full p-4 text-black-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </div>
            <div class="opacity-40 hover:opacity-100 transition duration-300">
                <img src="{{ URL::asset('/images/themeforest.png') }}" alt="">
            </div>
            <div class="opacity-40 hover:opacity-100 transition duration-300">
                <img src="{{ URL::asset('/images/codecanyon.png') }}" alt="">
            </div>
            <div class="opacity-40 hover:opacity-100 transition duration-300">
                <img src="{{ URL::asset('/images/graphicriver.png') }}" alt="">
            </div>
            <div class="opacity-40 hover:opacity-100 transition duration-300">
                <img src="{{ URL::asset('/images/audiojungle.png') }}" alt="">
            </div>
            <div class="bg-[#fff] shadow-4xl rounded-full p-4 text-black-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </section>
    <section class="mb-16 after:content[''] after:mt-28 after:bg-gray-300 after:w-5/11 after:h-px after:block">
        <div class="w-4/5 m-0 m-auto">
            <div class="flex gap-4">
                <div class="bg-[#ff4605] flex rounded-2xl w-2/4 relative">
                    <div class="p-16">
                        <h2 class="font-muli font-bold text-white text-4xl mb-12">
                            Download <br> our app
                        </h2>
                        <button class="flex px-8 py-2 items-center rounded-3xl text-black font-normal bg-white mb-4">
                            <span class="flex items-center flex-nowrap mr-4 text-[#ff4605]">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" height="20"
                                    width="18" id="Layer_1" stroke="currentColor">
                                    <title />
                                    <g id="Apple">
                                        <g data-name="&lt;Group&gt;" id="_Group_">
                                            <path d="M12.5,5.5a5,5,0,0,0,4-5A5,5,0,0,0,12.5,5.5Z"
                                                data-name="&lt;Path&gt;" id="_Path_"
                                                style="fill:none;stroke:#303c42;stroke-linecap:round;stroke-linejoin:round" />
                                            <path
                                                d="M18.5,12.5A5,5,0,0,1,21,8.22,5.43,5.43,0,0,0,17,6.5c-1.8,0-2.57,1-4.5,1s-2.7-1-4.5-1-5.5,1-5.5,6.5S6.25,23.5,8,23.5c2.32,0,2.79-1,4.5-1s2.18,1,4.5,1c1.29,0,3.33-2.9,4.5-6.5A4.81,4.81,0,0,1,18.5,12.5Z"
                                                data-name="&lt;Path&gt;" id="_Path_2"
                                                style="fill:none;stroke:#303c42;stroke-linecap:round;stroke-linejoin:round" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span>
                                For iOS
                            </span>
                        </button>
                        <button class="flex px-6 py-2 items-center rounded-3xl text-black font-normal bg-white mb-4">
                            <span class="flex items-center flex-nowrap">
                                <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="none" height="256" width="256" stroke="currentColor"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" />
                                    <path
                                        d="M39.8,224.1a8,8,0,0,0,12.1,6.8l167.8-96.1a7.7,7.7,0,0,0,0-13.6L51.9,25.1a8,8,0,0,0-12.1,6.8Z"
                                        fill="none" stroke="#ff4605" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="8" />
                                    <line fill="none" stroke="#ff4605" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="8" x1="42.2" x2="175.9"
                                        y1="26.2" y2="159.9" />
                                    <line fill="none" stroke="#ff4605" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="8" x1="42.2" x2="175.9"
                                        y1="229.8" y2="96.1" />
                                </svg>
                                <svg height="20" style="enable-background:new 0 0 56.6934 56.6934;"
                                    width="30">
                                </svg>
                            </span>
                            <span>
                                For Android
                            </span>
                        </button>
                    </div>
                    <div class="absolute top-10 right-10">
                        <div>
                            <img src="{{ URL::asset('/images/phone.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="bg-[#222732] rounded-2xl flex px-16 py-16  gap-12 w-2/4">
                    <div>
                        <h2 class="font-muli font-bold text-white text-5xl mb-12">
                            How to buy <br> a car?
                        </h2>
                        <button
                            class="flex items-center gap-x-1 text-xl text-white border rounded-lg p-2 border-orange-700 hover:bg-orange-700 font-semibold leading-6 text-black-900 ease-in duration-300 mb-8 px-4">
                            Read more
                        </button>
                    </div>
                    <div class="">
                        <div>
                            <ul>
                                <li class="text-[#99a1b2] flex items-center font-muli">
                                    <span
                                        class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-4 h-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-2 h-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    <span class="text-lg font-muli font-medium px-4">
                                        Praesent nibh luctus viverra
                                    </span>
                                </li>
                                <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                                    <span
                                        class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-4 h-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-2 h-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    <span class="text-lg font-muli font-medium px-4">
                                        Praesent nibh luctus viverra
                                    </span>
                                </li>
                                <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                                    <span
                                        class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-4 h-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-2 h-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    <span class="text-lg font-muli font-medium px-4">
                                        Praesent nibh luctus viverra
                                    </span>
                                </li>
                                <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                                    <span
                                        class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-4 h-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-2 h-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    <span class="text-lg font-muli font-medium px-4">
                                        Praesent nibh luctus viverra
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-4/5 m-0 m-auto mb-4 p-24">
            <div class="mb-16 grid" style="grid-template-columns:1fr 2fr 1fr ">
                <div class="text-[#222732] text-5xl font-bold font-muli">Newsletter</div>
                <div class="grid gap-4" style="grid-template-columns:70% 20%">
                    <div class="mb-6">
                        <input type="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-300 focus:border-gray-300 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-300 dark:focus:border-gray-300"
                            placeholder="Your email" required>
                    </div>
                    <button
                        class="flex items-center gap-x-1 text-xl text-white border rounded-lg p-4 bg-orange-600 font-semibold leading-6 ease-in duration-300 mb-8 px-4hover:block">
                        Search
                        <span class="hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div>
                    <p class="text-[#222732] text-lg font-muli">
                        Subscribe to our newsletter abd <br> stay updated with our offer
                    </p>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-[#222732] p-20">
        <div class="w-11/12 m-0 m-auto font-muli">
            <div class="flex justify-between gap-24">
                <div class="flex h-8">
                    <a href="#" class="-m-1.5 p-1.5 text-white">
                        <span class="sr-only">Your Company</span>
                        <img class="h-full" {{-- src="https://demo.vehica.com/wp-content/uploads/2021/09/vehica-logo-dark-retina.png" --}}
                            src="{{ URL::asset('/images/vehica-logo-white-retina-165x29.png') }}" alt="">
                    </a>
                </div>
                <div>
                    <ul class="flex gap-16 w-full">
                        <div>
                            <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                                <span
                                    class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-2 h-2">

                                </span>
                                <span class="text-lg font-muli font-medium px-4">
                                    Listings
                                </span>
                            </li>
                            <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                                <span
                                    class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-2 h-2">

                                </span>
                                <span class="text-lg font-muli font-medium px-4">
                                    FAQ
                                </span>
                            </li>
                            <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                                <span
                                    class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-2 h-2">

                                </span>
                                <span class="text-md font-muli font-medium px-4">
                                    About us
                                </span>
                            </li>
                        </div>
                        <div>
                            <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                                <span
                                    class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-2 h-2">

                                </span>
                                <span class="text-lg font-muli font-medium px-4">
                                    Blog
                                </span>
                            </li>
                            <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                                <span
                                    class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-2 h-2">

                                </span>
                                <span class="text-lg font-muli font-medium px-4">
                                    Our team
                                </span>
                            </li>
                            <li class="text-[#99a1b2] mb-4 flex items-center font-muli">
                                <span
                                    class="flex content-center flex-wrap rounded-full text-black bg-[#ff4605] w-2 h-2">

                                </span>
                                <span class="text-lg font-muli font-medium px-4">
                                    Contact
                                </span>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="">
                    <p class="text-white text-lg">
                        Award-winning, family owned dealership of new <br> amd pre-owned vehicles with several locations
                        <br>across the city. Lowest prices and the best br customer service guaranteed.
                    </p>
                </div>
                <div class="text-xl text-white text-right leaing-9">
                    <p class="font-black text-white text-2xl">
                        (123) <span class="text-[#ff4605]">222-33456</span>
                    </p>
                    <p><a href="">support@vehica.com</a></p>
                    <p><a href="">West 12th Stree</a>t</p>
                    <p> <a href="">New York, NY, USA</a></p>
                </div>
            </div>
            <div class="after:content[''] after:m-8 after:bg-gray-300 after:w-full after:h-px after:block"></div>
            <div class="flex text-white justify-between">
                <div>
                    <p>
                        Copyright © 2021. All rights reserved. Privacy Policy
                    </p>
                </div>
                <div class="flex gap-4">
                    <p class="bg-gray-300 rounded-full flex items-center justify-center px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                            shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                            image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                            viewBox="0 0 640 640">
                            <path
                                d="M380.001 120.001h99.993V0h-99.993c-77.186 0-139.986 62.8-139.986 139.986v60h-80.009V320h79.985v320h120.013V320h99.994l19.996-120.013h-119.99v-60.001c0-10.843 9.154-19.996 19.996-19.996v.012z" />
                        </svg>
                    </p>
                    <p class="bg-gray-300 rounded-full flex items-center justify-center px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                            shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                            image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                            viewBox="0 0 640 640">
                            <path
                                d="M640.012 121.513c-23.528 10.524-48.875 17.516-75.343 20.634 27.118-16.24 47.858-41.977 57.756-72.615-25.347 14.988-53.516 25.985-83.363 31.866-24-25.5-58.087-41.35-95.848-41.35-72.508 0-131.21 58.736-131.21 131.198 0 10.228 1.134 20.232 3.355 29.882-109.1-5.528-205.821-57.757-270.57-137.222a131.423 131.423 0 0 0-17.764 66c0 45.497 23.102 85.738 58.347 109.207-21.508-.638-41.74-6.638-59.505-16.359v1.642c0 63.627 45.225 116.718 105.32 128.718-11.008 2.988-22.63 4.642-34.606 4.642-8.48 0-16.654-.874-24.78-2.35 16.783 52.11 65.233 90.095 122.612 91.205-44.989 35.245-101.493 56.233-163.09 56.233-10.63 0-20.988-.65-31.334-1.89 58.229 37.359 127.206 58.997 201.31 58.997 241.42 0 373.552-200.069 373.552-373.54 0-5.764-.13-11.35-.366-16.996 25.642-18.343 47.87-41.493 65.469-67.844l.059-.059z" />
                        </svg>
                    </p>
                    <p class="bg-gray-300 rounded-full flex items-center justify-center px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                            shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                            image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                            viewBox="0 0 640 640">
                            <path
                                d="M184.715 2.752h270.582C556.908 2.752 640 84.816 640 185.069v269.85c0 100.277-83.092 182.317-184.703 182.317H184.715C83.104 637.236 0 555.196 0 454.919v-269.85C0 84.816 83.103 2.752 184.715 2.752zm133.561 145.939c98.741 0 178.868 80.127 178.868 178.868 0 98.753-80.127 178.868-178.868 178.868-98.765 0-178.88-80.115-178.88-178.868 0-98.741 80.115-178.868 178.88-178.868zm0 60.414c65.387 0 118.454 53.056 118.454 118.454s-53.068 118.466-118.454 118.466c-65.41 0-118.466-53.067-118.466-118.466 0-65.398 53.056-118.454 118.466-118.454zM491.321 123.9c16.04 0 29.044 13.004 29.044 29.032 0 16.04-13.004 29.044-29.044 29.044-16.028 0-29.032-13.004-29.032-29.044 0-16.028 13.004-29.032 29.032-29.032zM206.825 54.58H433.21c85.005 0 154.526 69.178 154.526 153.712V435.81c0 84.532-69.52 153.699-154.526 153.699H206.825c-85.005 0-154.537-69.167-154.537-153.7V208.29c0-84.532 69.532-153.71 154.537-153.71z" />
                        </svg>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
