<div class="relative w-full h-auto flex justify-center rounded-lg ">
    <div class="absolute bottom-0 lg:h-48 h-28 lg:w-full w-full">
        <div class="flex flex-col items-start justify-center bg-black opacity-70 w-full h-full px-2 lg:px-20">
        
            <p class="text-white text-left opacity-100 text-xs lg:text-2xl font-bold">PWRTAG King of Bench Press</p>
            <p class="text-white text-left opacity-100 text-xs lg:text-2xl ">Location : Bunga Mawar Fitness</p>
            <p class="text-white text-left opacity-100 text-xs lg:text-2xl ">Date: 1 Oct 2022</p>
            <p class="text-white text-left opacity-100 text-xs lg:text-2xl ">Time: 4.00 pm - 6.00 pm</p>
            <p class="text-white text-left opacity-100 text-xs lg:text-2xl ">Weight Class: Open</p>
        </div>
           <!-- Start Neon Button -->
            <div class="flex w-full items-start justify-center">
                <div class="relative group w-full">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-purple-600 rounded-lg blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-tilt"></div>
                <button class="relative px-7 py-4 w-full bg-black rounded-b-xl leading-none flex items-center justify-between divide-x divide-gray-600">
                    <span class="flex items-center justify-center w-full space-x-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-600 -rotate-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                        <span class="pr-6 text-gray-100">Are you a GYM RAT?</span>
                    </span>
                    <span @click="modalToggle" class="pl-6 text-indigo-400 group-hover:text-gray-100 transition duration-200">Join us Now &rarr;</span>
                </button>
                </div>
            </div>
            <!-- End Neon Button -->
    </div>
    <img class="w-full" src="{{ asset('storage/JIM.jpg')}}">
</div>