@extends('layout.app')

<div class="bg-black">
    <div class="flex">
        <img src="{{asset('images/socialmd.png')}}" alt="Phone" width="25%" class=""/>
        <div>
            <img src="{{ asset('images/WebLogo.png') }}" alt="Students" class="w-96 h-20" />
            <p class="mt-10 text-white">Soon to be home of Frontpage Social Platform </p>
            <p class="mt-5 text-white">frontpage.social <span class="text-maroon">by MSHDLIVE</span></p>
            <div class="flex space-x-2 mt-5">
                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32"> <!-- First div -->
                    <h1 class="text-2xl">188</h1>
                    <p class="text-xs font-thin">DAYS</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div> <!-- White section at the bottom -->
                </div>

                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32"> <!-- Second div -->
                    <h1 class="text-2xl">12</h1>
                    <p class="text-xs font-thin">HOURS</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div> <!-- White section at the bottom -->
                </div>

                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32"> <!-- Third div -->
                    <h1 class="text-2xl">19</h1>
                    <p class="text-xs font-thin">MINUTES</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div> <!-- White section at the bottom -->
                </div>

                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32"> <!-- Fourth div -->
                    <h1 class="text-2xl">22</h1>
                    <p class="text-xs font-thin">SECONDS</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div> <!-- White section at the bottom -->
                </div>
            </div>
            <p class="mt-10 text-white">Notify me when ready</p>
            <div class="justify-center mt-4 flex">
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
        </div>
    </div>
</div>
