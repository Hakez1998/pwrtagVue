<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
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
    
                modalToggle() {
                    this.modelOpen = ! this.modelOpen
                }
            }))
        })
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
                <!-- <a href="#_"
                    class="relative z-40 px-3 py-2 mr-0 text-sm font-bold text-pink-500 md:px-5 lg:text-white sm:mr-3 md:mt-0">Login</a> -->
                <!-- <a href="#_" @click="modalToggle()"
                    class="relative z-40 inline-block w-auto h-full px-5 py-3 text-sm font-bold leading-none text-white transition-all transition duration-100 duration-300 bg-indigo-700 rounded shadow-md fold-bold lg:bg-white lg:text-indigo-700 sm:w-full lg:shadow-none hover:shadow-xl">Register</a> -->
                <!-- <svg class="absolute top-0 left-0 hidden w-screen max-w-3xl -mt-64 -ml-12 lg:block"
                    viewBox="0 0 818 815" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <linearGradient x1="100%" y1="100%" x2="100%" y2="100%" id="c">
                            <stop stop-color="#612381" offset="100%" />
                            <stop stop-color="#612381" offset="100%" />
                        </linearGradient>
                        <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="f">
                            <stop stop-color="#657DE9" offset="0%" />
                            <stop stop-color="#1C0FD7" offset="100%" />
                        </linearGradient>
                        <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                            id="a">
                            <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                            <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" in="shadowBlurOuter1" />
                        </filter>
                        <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                            id="d">
                            <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                            <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" in="shadowBlurOuter1" />
                        </filter>
                        <path
                            d="M160.52 108.243h497.445c17.83 0 24.296 1.856 30.814 5.342 6.519 3.486 11.635 8.602 15.12 15.12 3.487 6.52 5.344 12.985 5.344 30.815v497.445c0 17.83-1.857 24.296-5.343 30.814-3.486 6.519-8.602 11.635-15.12 15.12-6.52 3.487-12.985 5.344-30.815 5.344H160.52c-17.83 0-24.296-1.857-30.814-5.343-6.519-3.486-11.635-8.602-15.12-15.12-3.487-6.52-5.343-12.985-5.343-30.815V159.52c0-17.83 1.856-24.296 5.342-30.814 3.486-6.519 8.602-11.635 15.12-15.12 6.52-3.487 12.985-5.343 30.815-5.343z"
                            id="b" />
                        <path
                            d="M159.107 107.829H656.55c17.83 0 24.296 1.856 30.815 5.342 6.518 3.487 11.634 8.602 15.12 15.12 3.486 6.52 5.343 12.985 5.343 30.816V656.55c0 17.83-1.857 24.296-5.343 30.815-3.486 6.518-8.602 11.634-15.12 15.12-6.519 3.486-12.985 5.343-30.815 5.343H159.107c-17.83 0-24.297-1.857-30.815-5.343-6.519-3.486-11.634-8.602-15.12-15.12-3.487-6.519-5.343-12.985-5.343-30.815V159.107c0-17.83 1.856-24.297 5.342-30.815 3.487-6.519 8.602-11.634 15.12-15.12 6.52-3.487 12.985-5.343 30.816-5.343z"
                            id="e" />
                    </defs>
                    <g fill="none" fill-rule="evenodd" opacity=".9">
                        <g transform="rotate(65 416.452 409.167)">
                            <use fill="#000" filter="url(#a)" xlink:href="#b" />
                            <use fill="url(#c)" xlink:href="#b" />
                        </g>
                        <g transform="rotate(29 421.929 414.496)">
                            <use fill="#000" filter="url(#d)" xlink:href="#e" />
                            <use fill="url(#f)" xlink:href="#e" />
                        </g>
                    </g>
                </svg> -->
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
        
    <!-- HERO SECTION END -->

    <!-- About Us Section -->
    <div class="relative px-8 py-10 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div id="about-us" class="container flex flex-col items-center h-full max-w-6xl mx-auto">
            
            
            <div class="lg:flex w-full mt-5">
                <div class="lg:hidden flex w-full rounded-lg">
                    <img class=" border-spacing-1 object-fill rounded-lg" src="{{ asset('storage/about_us.PNG')}}">
                </div>
                <div class="w-full items-start lg:mt-0 mt-10">
                    <p class="my-5 text-3xl font-medium tracking-tight text-indigo-500 uppercase">About Us</p>
                    <h3
                        class="w-full max-w-2xl mt-2 text-2xl font-black leading-tight  text-slate-50 sm:mt-0 sm:px-0 sm:text-6xl md:px-0">
                        We are PIONEERS
                    </h3>
                    <div class="my-5 mx-auto">
                        <div>
                        <p class="font-semibold text-lg my-1">Background</p>
                       <p> How did PWRTAG began? </p>

                       <p class=" text-justify pr-10"> It started with a dream. A dream to unite the weightlifting community with positivity, empowerment and competition. Our mission is to build a community that supports everyone’s goal to become the best version of themselves, in strength, mental, and physique. With this goal in mind, our team are dedicated to create something big for the lifters of our generation. Follow us on our journey to revolutionise the weightlifting world and create a new era of <b>JIM!</b></p>
                    </div>
                    </div>
                </div>
                <div class="hidden lg:flex w-full rounded-lg">
                    <img class=" border-spacing-1 object-fill rounded-lg" src="{{ asset('storage/about_us.PNG')}}">
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

    <!-- Start Gallery -->
    <div id="gallery"
        class="flex items-center justify-center w-full px-8 py-10 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="max-w-6xl mx-auto">
            <div class="flex-col items-center ">
                <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl pr-8 mx-auto text-center">
                    <p class="my-5 text-3xl font-medium tracking-tight text-indigo-500 uppercase">gallery
                    </p>
                    <h2
                        class="text-4xl font-extrabold leading-10 tracking-tight text-gray-100 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                        HALL OF FAME</h2>
                    <p class="my-6 text-xl font-medium text-slate-400">Create your signature tag with us!</p>

                </div>
                <div class="flex flex-col items-center justify-center max-w-2xl py-8 mx-auto xl:flex-row xl:max-w-full">
                    <div class="w-full xl:w-1/2 xl:pr-8">
                        <blockquote
                            class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease">
                            <div class="flex flex-col pr-8">
                                <div class="relative pl-12">
                                    <p class="mt-2 text-base text-gray-600">The Baddest Weight Lifter!
                                </div>
                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">Mr. Luqman
                                     <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- Sang Pecinta
                                     </span>
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0"
                            img src="{{ asset('storage/luq.png')}}"
                                alt="">
                        </blockquote>
                        <blockquote
                            class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 mt-16 mb-16 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease xl:mb-0">
                            <div class="flex flex-col pr-10">
                                <div class="relative pl-12">
                                    <p class="mt-2 text-base text-gray-600">The Baddest Sit Ups!
                                    </p>
                                </div>
                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">Mr. Izzat Danial 
                                    <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- Mat Jambu
                                    </span>
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0"
                            img src="{{ asset('storage/ijat.png')}}"
                                alt="">
                        </blockquote>
                    </div>
                    <div class="w-full xl:w-1/2 xl:pl-8">
                        <blockquote
                            class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease">
                            <div class="flex flex-col pr-10">
                                <div class="relative pl-12">
                                    <!-- <svg class="absolute left-0 w-10 h-10 text-indigo-500 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg> -->
                                    <p class="mt-2 text-base text-gray-600">The Baddest Jumping Jacks!
                                    </p>
                                </div>

                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">Mr. Bo Eiman
                                    <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- Lover not Hater
                                    </span>
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0"
                            img src="{{ asset('storage/eiman.png')}}"
                                alt="">
                        </blockquote>
                        <blockquote
                            class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 mt-16 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease">
                            <div class="flex flex-col pr-10">
                                <div class="relative pl-12">
                                    <!-- <svg class="absolute left-0 w-10 h-10 text-indigo-500 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg> -->
                                    <p class="mt-2 text-base text-gray-600">The Baddest Buffet Eater!
                                    </p>
                                </div>
                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">Mr. Hakim 
                                    <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- Big Guy With Big Heart
                                    </span>
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0"
                            img src="{{ asset('storage/hakim.png')}}"
                                alt="">
                        </blockquote>
                    </div>
                </div>

                <x-carousel />
            </div>
        </div>
    </div>
    <!-- End Gallery-->

    


    <x-footer-content 
        leftInfo="Giving Gym Goers a Next Level of Gym Experience"
        trademark="© 2022 Pwrtag. All rights reserved."/>

    <!-- a little JS for the mobile nav button -->


</body>
</html>