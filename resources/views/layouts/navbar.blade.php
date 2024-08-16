<div id="navbar">
    <div class="container sticky top-0 ">
        <nav class="nav-bar-background-default-style z-10 block w-full max-w-full px-4 py-2 h-max bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
            <div class="flex items-center justify-between text-gray-900">
                    <img src="{{ asset('assets/images/main-logo.png') }}" width="70px" alt="">
                <div class="flex items-center gap-4 gap-x-1">
                    <div class="hidden mt-3 lg:block">
                        <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                            <li
                                class="block py-2 px-4 font-sans text-sm antialiased font-normal leading-normal text-gray-900">
                                <a href="#" class="flex items-center nav-bar-list-default-style hover:text-orange-400">
                                    Pages
                                </a>
                            </li>
                            <li
                                class="block py-2 px-4 font-sans text-sm antialiased font-normal leading-normal text-gray-900">
                                <a href="#" class="flex items-center nav-bar-list-default-style hover:text-orange-400">
                                    Account
                                </a>
                            </li>
                            <li
                                class="block py-2 px-4 font-sans text-sm antialiased font-normal leading-normal text-gray-900">
                                <a href="#" class="flex items-center nav-bar-list-default-style hover:text-orange-400">
                                    Blog
                                </a>
                            </li>
                            <li
                                class="block py-2 px-4 font-sans text-sm antialiased font-normal leading-normal text-gray-900">
                                <a href="#" class="flex items-center nav-bar-list-default-style hover:text-orange-400">
                                    Docs
                                </a>
                            </li>
                        </ul>
                    </div>
                    @guest
                        <div class="flex items-center gap-x-1">
                            <button
                                class="hidden px-4 py-2 font-sans text-xs font-bold text-center text-black-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block"
                                type="button" >
                                <a href="{{route('login')}}" class="text-black">Log In</a>
                            </button>
                            <button
                                class="hidden select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block"
                                type="button">
                                <a href="{{route('register')}}" class="text-white">Sign up</a>
                            </button>
                        </div>
                    @endguest
                    <button
                        class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
                        type="button">
                        <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</div>
