<nav x-data="nav" id="nav"
    class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 md:text-gray-100 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
    <a href="#"
        class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Home</a>
    <a href="#about-us"
        class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">About Us</a>
    <a href="#events"
        class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Events</a>
    <a href="#gallery"
        class="font-bold duration-100 transition-color hover:text-indigo-600">Gallery</a>
    <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
        <a href="#_" @click="$dispatch('modal')"
            class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-indigo-700 fold-bold">Register</a>
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