<footer class="px-4 pt-12 pb-8 text-white bg-white border-t border-gray-200">
    <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
        <div class="flex w-auto items-center pl-12 mr-4 text-left sm:text-center sm:pl-0 lg:text-left">
            <a href="/"
                class="flex justify-start block text-left sm:text-center lg:text-left sm:justify-center lg:justify-start border-r-2 border-gray-400">
                <span class="flex items-start sm:items-center w-40 h-auto">
                    <x-logo01 />
                </span>
            </a>
            <p class=" mx-5 w-72 text-base text-start text-gray-500">{{ $leftInfo }}</p>
        </div>
        <div class="block w-auto pl-10 mt-6 text-sm  sm:flex lg:mt-0">
            <ul class="flex flex-col w-full p-0 font-medium text-center text-gray-700 list-none">
                <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                    Company</li>
                <li><a href="#_"
                        class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Privacy</a>
                </li>
                <li><a href="#_" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Terms of Service
                    </a></li>
            </ul>
            
        </div>
        <x-footer.follow-us />
    </div>
    <div class="pt-4 pt-6 mt-10 text-center text-gray-500 border-t border-gray-100">{{ $trademark }}</div>
</footer>