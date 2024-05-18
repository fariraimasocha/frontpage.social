@extends('layout.app')

<div class="bg-black">
    <div class="flex">
        <img src="{{asset('images/socialmd.png')}}" alt="Phone" width="25%" class=""/>
        <div>
            <img src="{{ asset('images/WebLogo.png') }}" alt="Students" class="w-full h-32" />
            <p class="mt-2 text-white text-center">Soon to be home of Frontpage Social Platform </p>
            <p class="mt-5 text-white text-center">frontpage.social <span class="text-maroon">by MSHDLIVE</span></p>
            <div class="flex space-x-2 mt-5 justify-center mx-auto w-8/12">
                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32 flex flex-col justify-center items-center"> <!-- First div -->
                    <h1 class="text-2xl">188</h1>
                    <p class="text-xs font-thin">DAYS</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div> <!-- White section at the bottom -->
                </div>

                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32 flex flex-col justify-center items-center"> <!-- Second div -->
                    <h1 class="text-2xl">12</h1>
                    <p class="text-xs font-thin">HOURS</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div> <!-- White section at the bottom -->
                </div>

                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32 flex flex-col justify-center items-center"> <!-- Third div -->
                    <h1 class="text-2xl">19</h1>
                    <p class="text-xs font-thin">MINUTES</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div> <!-- White section at the bottom -->
                </div>

                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32 flex flex-col justify-center items-center"> <!-- Fourth div -->
                    <h1 class="text-2xl">22</h1>
                    <p class="text-xs font-thin">SECONDS</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div> <!-- White section at the bottom -->
                </div>
            </div>
            <p class="mt-10 text-white text-center">Notify me when ready</p>
            <div class="mt-4 flex w-8/12 justify-center mx-auto">
                <input
                    id="email"
                    type="email"
                    class="mt-1 block w-full focus:shadow-md"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="Get notification by email"
                    style="flex: 1; height: 40px;"
                />
                <button class="bg-maroon text-white px-2 rounded-r py-2 h-10 mt-1" style="height: 40px;">
                    Send
                </button>
            </div>
            <div class="mt-10">
                <div class="flex justify-center space-x-12 mt-4">
                    <a href="#" class="text-black bg-white hover:text-maroon px-4 hover:bg-gray-200 rounded-full p-2">
                        <i class="fab fa-facebook-f text-3xl"></i>
                    </a>
                    <a href="#" class="text-black bg-white hover:text-maroon px-3 hover:bg-gray-200 rounded-full p-2">
                        <i class="fab fa-twitter text-3xl"></i>
                    </a>
                    <a href="#" class="text-black bg-white hover:text-maroon px-3  hover:bg-gray-200 rounded-full p-2">
                        <i class="fab fa-instagram text-3xl"></i>
                    </a>
                    <a href="#" class="text-black bg-white hover:text-maroon px-3  hover:bg-gray-200 rounded-full p-2">
                        <i class="fab fa-linkedin-in text-3xl"></i>
                    </a>
                </div>
            </div>
            </div>
        </div>

    </div>

</div>
