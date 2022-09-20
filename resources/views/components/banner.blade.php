<div id="events" class="relative w-full px-8 py-10 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
            <!-- <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Our Features</h2> -->
            <h3 {{ $attributes->merge(['class' => 'max-w-2xl px-5 mt-2 text-3xl font-black leading-tight text-center sm:mt-0 sm:px-0 sm:text-6xl text-'.$titleColor]) }}>
                {{ $title }}</h3>

                <x-countdown 
                    date="24" 
                    month="09" 
                    year="2022"/>

            <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-20">

                <x-info-banner
                    title="Automated Tools"
                    subtitle="Automate your workflow with these top of the line marketing tools." 
                    whiteTemplate="M342.8 3.7c24.7 14 18.1 75 22.1 124s18.6 85.8 8.7 114.2c-9.9 28.4-44.4 48.3-76.4 62.4-32 14.1-61.6 22.4-95.9 28.9-34.3 6.5-73.3 11.1-95.5-6.2-22.2-17.2-27.6-56.5-47.2-96C38.9 191.4 5 151.5.9 108.2-3.1 64.8 22.7 18 61.8 8.7c39.2-9.2 91.7 19 146 16.6 54.2-2.4 110.3-35.6 135-21.6z"
                    iconType="1"/>

                <x-info-banner
                    title="Machine Learning"
                    subtitle="Your Marketing tools will learn how to better convert and sell." 
                    whiteTemplate="M315.7 6.5c30.2 15.1 42.6 61.8 41.5 102.5-1.1 40.6-15.7 75.2-24.3 114.8-8.7 39.7-11.3 84.3-34.3 107.2-23 22.9-66.3 23.9-114.5 30.7-48.2 6.7-101.3 19.1-123.2-4.1-21.8-23.2-12.5-82.1-21.6-130.2C30.2 179.3 2.6 141.9.7 102c-2-39.9 21.7-82.2 57.4-95.6 35.7-13.5 83.3 2.1 131.2 1.7 47.9-.4 96.1-16.8 126.4-1.6z"
                    iconType="2"/>
                
                <x-info-banner
                    title="Smart Notifications"
                    subtitle="Our smart notifications will notify ou when users convert." 
                    whiteTemplate="M305.9 14.4c23.8 24.6 16.3 84.9 26.6 135.1 10.4 50.2 38.6 90.3 43.7 137.8 5.1 47.5-12.8 102.4-50.7 117.4-37.9 15.1-95.7-9.8-151.7-12.2-56.1-2.5-110.3 17.6-130-3.4-19.7-20.9-4.7-82.9-11.5-131.2C25.5 209.5-3 174.7 1.2 147c4.2-27.7 41-48.3 75-69.6C110.1 56.1 141 34.1 184 17.5c43.1-16.6 98.1-27.7 121.9-3.1z"
                    iconType="3"/>
                
            </div>
        </div>
    </div>