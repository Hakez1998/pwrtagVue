<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta property="og:title" content="Pwrtag" />
    <meta property="og:description" 
    content="Show us that your biceps is worthy." />
    <meta property="og:description " content="Show us that your biceps is worthy" />
    <!-- <meta property="og:type" content="video.movie" /> -->
    <meta property="og:url" content="https://pwrtag.com/" />
    <meta property="og:image" content="{{ url('storage/Pwrtag_Neon.PNG') }}" />
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('body', () => ({
                modelOpen: false,
                ticket: false,

                init() {
                    if (document.getElementById('nav-mobile-btn')) {
                        document.getElementById('nav-mobile-btn').addEventListener('click', function () {
                            if (this.classList.contains('close')) {
                                document.getElementById('nav').classList.add('hidden');
                                this.classList.remove('close');
                            } else {
                                document.getElementById('nav').classList.remove('hidden');
                                this.classList.add('close');
                            }
                        });
                    }
                },

                select() {
                    document.getElementById('nav').classList.add('hidden');
                    document.getElementById('nav-mobile-btn').classList.remove('close');
                },

                ticketToggle() {
                    this.ticket = !this.ticket;
                },

                modalToggle() {
                    this.modelOpen = ! this.modelOpen
                }
            }))
        })
    </script>
  
<link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

        <title>{{env("APP_NAME")}}</title>

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            @media(max-width:1520px) {
            .left-svg {
                display: none;
            }
        }
        /* small css for the mobile nav close */
        #nav-mobile-btn.close span:first-child {
            transform: rotate(45deg);
            top: 4px;
            position: relative;
            background: #a0aec0;
        }
        #nav-mobile-btn.close span:nth-child(2) {
            transform: rotate(-45deg);
            margin-top: 0px;
            background: #a0aec0;
        }
        </style>
    </head>
    <body x-data="body" class="overflow-x-hidden antialiased bg-[#0A0513]">
    <!-- Header Section -->
    <header class="relative z-50 w-full h-24">
        <div
            class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0 ">
            
            <div class="w-full flex items-center justify-between">
                <x-top-logo/>
            <x-top-menu/>
            </div>
            
            
            <div
                class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
                
            </div>

            <x-mobile-menu/>

        </div>
    </header>
    <!-- End Header Section-->

    <!-- BEGIN HERO SECTION -->
    <x-top-content 
        mainTitle="Unleash Your Power!"
        titleColor="gray-100"
        subTitle="Let's make it BIGGER"
        buttonText="Register Now"
        buttonColor="indigo-600"/>
    
        <div x-show='modelOpen' class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <x-registration-modal 
                formTitle="Registration form"
                formSubtitle="Add your information and start work to get things done"/>
        </div>

        <div x-show="ticket" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <x-check-ticket />
        </div>
        
    <!-- HERO SECTION END -->

    <!-- About Us Section -->
    <div class="relative w-full px-8 py-10 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div id="about-us" class="container flex flex-col items-center h-full max-w-6xl mx-auto">
        <p class="item-center text-center my-5 w-full max-w-2xl mt-2 text-2xl font-black leading-tight text-slate-50 sm:mt-0 sm:px-0 sm:text-6xl md:px-0 uppercase ">About Us</p>
            <div class="lg:flex w-full mt-1 lg:mt-5">
                <div class="lg:hidden flex w-full rounded-lg">
                    <img class=" border-spacing-1 object-fill rounded-lg" src="{{ asset('storage/about_us01.PNG')}}">
                </div>
                <div class="w-full items-start lg:mt-0 mt-10">
                    <div class="my-5 mx-auto">
                        <div>
                        <p class="font-semibold text-lg my-1">Background</p>
                       <p> How did PWRTAG began? </p>

                       <p class=" text-justify pr-10"> It started with a dream. A dream to unite the weightlifting community with positivity, empowerment and competition. Our mission is to build a community that supports everyone’s goal to become the best version of themselves, in strength, mental, and physique. With this goal in mind, our team are dedicated to create something big for the lifters of our generation. Follow us on our journey to revolutionise the weightlifting world and create a new era of <b>JIM!</b></p>
                    </div>
                    </div>
                </div>
                <div class="hidden lg:flex w-full rounded-lg lg:mt-1">
                    <img class="border-spacing-1 object-fill rounded-lg" src="{{ asset('storage/about_us01.PNG')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- End About Us Section -->

    <!-- BEGIN EVENTS SECTION -->
    <x-banner 
        title="PWRTAG GAMES"
        titleColor="gray-100"/>
    <!-- END EVENTS SECTION -->

    <!-- Start Leaderboard -->
    <div id="leaderboard" class="flex flex-col items-center justify-center w-full px-8 py-10 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="max-w-6xl mx-auto mb-10">
            <div class="flex-col items-center ">
                <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl pr-8 mx-auto text-center">
                    <h2 
                        class="text-4xl font-extrabold leading-10 tracking-tight text-gray-100 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                        HALL OF FAME
                    </h2>
                    <p class="my-6 text-xl font-medium text-slate-400">Carve your name here</p>
                </div>
            </div>
        </div>
        <!-- Start Table -->
        <div class="w-full lg:w-3/4 mb-10">
            <div class="mx-auto my-2 w-full rounded overflow-hidden shadow-md text-xs lg:text-base">
            <div class="flex bg-gray-200 px-2 py-2">
                <div class="w-3/12 lg:w-5/12 text-gray-700 text-left">Date</div>
                <div class="w-5/12 flex justify-center items-center">
                <p class="w-10 lg:w-12 px-2 font-bold text-center">1</p>
                <p class="w-10 lg:w-12 px-2 font-bold text-center">2</p>
                <p class="w-10 lg:w-12 px-2 font-bold text-center">3</p>
                <p class="w-10 lg:w-12 px-2 font-bold text-center">4</p>
                </div>
                <div class="w-5/12 lg:w-1/6 text-gray-700 text-right lg:text-center">Body Weight</div>
            </div>

            <div class="flex px-2 py-2 items-center">
                <div class="w-5/12 flex">
                <!-- <img class="w-6 sm:w-10 mr-2 self-center" alt="away-logo" src="https://a1.espncdn.com/combiner/i?img=/i/teamlogos/nba/500/scoreboard/tor.png&h=70&w=70"> -->
                <div class="flex flex-col">
                    <!-- <p class="text-sm font-bold">Raptors</p>
                    <p class="hidden sm:block text-gray-600">(58-24, 26-15 Away)</p> -->
                </div>
                </div>
                <div class="w-5/12 flex justify-end items-center">
                <!-- <p class="w-8 px-1 text-center">36</p>
                <p class="w-8 px-1 text-center">24</p>
                <p class="w-8 px-1 text-center">36</p>
                <p class="w-8 px-1 text-center">27</p> -->
                </div>
                <!-- <p class="w-1/6 text-lg sm:text-xl font-bold text-right">123</p> -->
            </div>

            <div class="flex px-2 py-2 items-center">
                <div class="w-5/12 flex">
                <!-- <img class="w-6 sm:w-10 mr-2 self-center" alt="home-logo" src="https://a1.espncdn.com/combiner/i?img=/i/teamlogos/nba/500/scoreboard/gs.png&h=70&w=70"> -->
                <div class="flex flex-col">
                    <!-- <p class="text-sm font-bold">Warriors</p>
                    <p class="hidden sm:block text-gray-600">(57-25, 30-11 Home)</p> -->
                </div>
                </div>
                <div class="w-5/12 flex justify-end items-center">
                <!-- <p class="w-8 px-1 text-center">29</p>
                <p class="w-8 px-1 text-center">23</p>
                <p class="w-8 px-1 text-center">31</p>
                <p class="w-8 px-1 text-center">26</p> -->
                </div>
                <!-- <p class="w-1/6 text-lg sm:text-xl font-bold text-right">109</p> -->
            </div>

            <div class="sm:block border-t border-gray-300">
                <p class="text-center text-xs lg:text-base text-gray-400 m-1 uppercase">Top Performers</p>
                <div class="flex">
                <div class="w-1/2 px-2 py-2">
                    <div class="flex">
                    <!-- <img class="w-10 mr-2 self-center" src="https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/6450.png?w=90&h=60&scale=crop&transparent=true"> -->
                    <div class="flex flex-col">
                        <!-- <p class="font-semibold">Kawhi Leonard</p>
                        <p class="text-gray-600">TOR - SF</p>
                        <p class="text-gray-600">30 PTS, 7 REB, 6 AST</p> -->
                    </div>
                    </div>
                </div>
                <div class="w-1/2 px-2 py-2">
                    <div class="flex">
                    <!-- <img class="w-10 mr-2 self-center" src="https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/3975.png?w=90&h=60&scale=crop&transparent=true"> -->
                    <div class="flex flex-col">
                        <!-- <p class="font-semibold">Stephen Curry</p>
                        <p class="text-gray-600">GS - SG</p>
                        <p class="text-gray-600">47 PTS, 8 REB, 7 AST</p> -->
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="border-t bg-gray-200 text-center px-1 py-1">
                <p class="lg:text-base text-gray-600 uppercase">King Of Deadlift</p>
            </div>

            <div class="flex border-t bg-gray-200">
                <div class="w-1/2 px-2 py-2 text-center">
                <p class="font-semibold lg:text-base text-gray-700">Mawar Fitness</p>
                <!-- <p class="font-light text-gray-600">Oakland, CA</p> -->
                </div>
                <div class="w-1/2 px-2 py-2 text-center">
                <p class="lg:text-base text-gray-600"><span class="font-semibold">No. Of Participant</span>: 15</p>
                <!-- <p class="text-gray-600"><span class="font-semibold">O/U</span>: 213.5</p> -->
                </div>
            </div>

            </div>
        </div>
        <!-- End Table -->
    </div>
    <!-- End Leaderboard -->

    <!-- Start Gallery -->
    <div id="gallery"
        class="flex flex-col items-center justify-center w-full px-8 py-10 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="max-w-6xl mx-auto mb-10">
            <div class="flex-col items-center ">
                <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl pr-8 mx-auto text-center">
                    <h2
                        class="my-6 text-4xl font-extrabold leading-10 tracking-tight text-gray-100 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl uppercase">
                        Gallery</h2>
                    <p class="my-6 text-xl font-medium text-slate-400">Create your signature tag with us!</p>

                </div>
            </div>
            
        </div>

        <div class="w-3/4 0">
            <x-carousel />
        </div>
    </div>
    <!-- End Gallery-->

    <!-- Start Footer Section -->
    <x-footer-content 
        leftInfo="Unleash Your Power!"
        trademark="© 2022 Pwrtag. All rights reserved."/>

    <!-- End Footer Section -->

    <!-- a little JS for the mobile nav button -->
</body>
</html>