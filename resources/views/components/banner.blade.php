<div id="events" class="relative w-full px-8 py-10 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
            <!-- <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Our Features</h2> -->
            <h3 {{ $attributes->merge(['class' => 'max-w-xl px-5 mt-2 text-2xl font-black leading-tight text-center sm:mt-0 sm:px-0 sm:text-6xl text-'.$titleColor]) }}>
                {{ $title }}</h3>
                
            <div class="mt-10">
                <p class="font-semibold text-lg my-1">Hype, Energy, Support.</p>
                <p class="text-justify sm:text-sm lg:text-lg lg:pr-10">These are what you need to break through your limits and UNLEASH YOUR POWER! Are you ready for something EPIC?!
                    Come join our PWRTAG Games where we challenge your strength, mental and endurance. Reminder! We are not powerlifting, This is a battle between you and yourself with the community behind your back to give you the push of support. 
                    Do you have what it takes to smash that PR and carve it on our PWRTAG leaderboard?
                    Register now and lets smash some records!</p>
            </div>
        </div>

        <div class="mt-16 w-full text-center">
            <p class="text-xl lg:text-2xl"> Next Event Coming In</p> 
        </div>

        <x-countdown 
            date="01" 
            month="10" 
            year="2022"/>

        <div class="my-8">
            <div class="flex flex-col w-full mt-0 lg:flex-row  ">
                <x-info-banner
                    title="First Event"
                    subtitle1="Location"
                    subtitle2="Time" 
                    whiteTemplate="M342.8 3.7c24.7 14 18.1 75 22.1 124s18.6 85.8 8.7 114.2c-9.9 28.4-44.4 48.3-76.4 62.4-32 14.1-61.6 22.4-95.9 28.9-34.3 6.5-73.3 11.1-95.5-6.2-22.2-17.2-27.6-56.5-47.2-96C38.9 191.4 5 151.5.9 108.2-3.1 64.8 22.7 18 61.8 8.7c39.2-9.2 91.7 19 146 16.6 54.2-2.4 110.3-35.6 135-21.6z"
                    iconType="1"/>
            </div>
        </div>
    </div>