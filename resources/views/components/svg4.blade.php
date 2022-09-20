<div class="relative w-full h-auto flex justify-center rounded-lg ">
    <div class="absolute bottom-0 lg:h-48 w-full">
        <div class="flex flex-col items-start justify-center bg-black opacity-70 w-full h-full px-3 lg:px-20 ">
        
            <p class="text-white text-left opacity-100 text-xs lg:text-2xl font-bold">PWRTAG King of Bench Press</p>
            <p class="text-white text-left opacity-100 text-xs lg:text-2xl ">Location:</p>
            <p class="text-white text-left opacity-100 text-xs lg:text-2xl ">Date:</p>
            <p class="text-white text-left opacity-100 text-xs lg:text-2xl ">Time:</p>
            <p class="text-white text-left opacity-100 text-xs lg:text-2xl ">Weight Class:</p>
        </div>
        <div class="fix right-0">
            <button @click="modalToggle" class="opacity-100 relative self-start inline-block w-full px-8 lg:py-4 py-2 mx-auto mt-0 text-base font-bold text-white  border-t border-gray-200 rounded-b-md shadow-xl sm:mt-1 fold-bold lg:mx-0 bg-indigo-600 hover:bg-indigo-700"> Join Now</button>
        </div>
    </div>
    
    <img class="w-full" src="{{ asset('storage/JIM.JPG')}}">
</div>