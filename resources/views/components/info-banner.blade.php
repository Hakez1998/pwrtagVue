<div class="w-full lg:max-w-6xl mx-auto">
   
        <!-- Import or change icon here -->
        @if($iconType == 1)
        <div class="relative flex flex-col items-center justify-center w-full h-full mr-5 rounded-3xl  ">
        
            <x-svg4/>
        @elseif($iconType == 2 || $iconType == 3)
        
        <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-3xl  bg-slate-200 opacity-50">
            <div class="absolute text-yellow-300 top-0 right-0">COMING SOON</div>
            <x-svg4/>
        @endif
        

    </div>
</div>

