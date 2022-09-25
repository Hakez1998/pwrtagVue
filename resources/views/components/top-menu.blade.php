<nav x-data="nav" id="nav"
    class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-72 pt-5 mt-24 text-sm text-gray-100 bg-[#1a1c23] md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
    <a href="#" @click="select"
        class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Home</a>
    <a href="#about-us" @click="select"
        class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">About Us</a>
    <a href="#events" @click="select"
        class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Events</a>
    <a href="#gallery" @click="select"
        class="font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Gallery</a>
    <span @click="ticket = true" @click="select"
    class="font-bold hidden md:flex duration-100 mb-4 md:mb-0 transition-color hover:text-indigo-600 cursor-pointer">Check your ticket</span>
    <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden cursor-pointer">
                    <span @click="ticket = true; select()" 
                        class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-indigo-700 hover:bg-indigo-800 fold-bold">Check your ticket
                        </span>
                    
                </div>
</nav>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('nav', () => ({
            open: false,
 
            toggle() {
                this.open = ! this.open
            }
        }))
    })
</script>