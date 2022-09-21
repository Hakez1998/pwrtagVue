<footer class="px-4 pt-12 pb-8 text-white bg-white border-t border-gray-200">
    <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
        <div class="w-full pl-12 mr-4 text-left lg:w-1/4 sm:text-center sm:pl-0 lg:text-left">
            <a href="/"
                class="flex justify-start block text-left sm:text-center lg:text-left sm:justify-center lg:justify-start">
                <span class="flex items-start sm:items-center">
                    <svg class="w-auto h-6 text-gray-800 fill-current" viewBox="0 0 194 116"
                        xmlns="http://www.w3.org/2000/svg">
                        <g fill-rule="evenodd">
                            <path
                                d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z">
                            </path>
                            <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z"></path>
                        </g>
                    </svg>
                </span>
            </a>
            <p class="mt-6 mr-4 text-base text-start text-gray-500">{{ $leftInfo }}
            </p>
        </div>
        <div class="block w-full pl-10 mt-6 text-sm lg:w-3/4 sm:flex lg:mt-0">
            <!-- <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                    Product</li>
                <li><a href="#_"
                        class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Features</a>
                </li>
                <li><a href="#_"
                        class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Integrations</a>
                </li>
                <li><a href="#_"
                        class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Pricing</a>
                </li>
                <li><a href="#_"
                        class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">FAQ</a></li>
            </ul> -->
            <ul class="flex flex-col w-full p-0 font-medium text-center text-gray-700 list-none">
                <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                    Company</li>
                <li><a href="#_"
                        class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Privacy</a>
                </li>
                <li><a href="#_" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Terms of Service
                    </a></li>
            </ul>
            <!-- <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                    TailwindCSS
                </li>
                <li><a href="https://devdojo.com/tailwindcss/components"
                        class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Tailwind
                        Components</a></li>
                <li><a href="https://devdojo.com/tailwindcss/templates"
                        class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Tailwind
                        Templates</a></li>
                <li><a href="https://devdojo.com/tails"
                        class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Tails</a></li>
            </ul> -->
            <x-footer.follow-us />
        </div>
    </div>
    <div class="pt-4 pt-6 mt-10 text-center text-gray-500 border-t border-gray-100">{{ $trademark }}</div>

        <!-- <div class="pt-2 pt-4 mt-2 text-center text-gray-600 border-t border-gray-100">Distributed By <a href="https://themewagon.com/">Themewagon</a></div> -->
</footer>