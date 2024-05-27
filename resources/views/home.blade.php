
@extends('layout.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>  <script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/plugin/duration.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Extend dayjs with the duration plugin
            dayjs.extend(window.dayjs_plugin_duration);

            // Set the target date
            let targetDate = dayjs("{{ $targetDate }}");

            // Update the count down every 1 second
            let countdownFunction = setInterval(() => {
                // Get today's date and time
                let now = dayjs();

                // Find the distance between now and the target date
                let duration = dayjs.duration(targetDate.diff(now));

                // Time calculations for days, hours, minutes, and seconds
                let days = Math.floor(duration.asDays());
                let hours = duration.hours();
                let minutes = duration.minutes();
                let seconds = duration.seconds();

                // Display the result in the respective divs
                document.getElementById("days").innerText = days;
                document.getElementById("hours").innerText = hours;
                document.getElementById("minutes").innerText = minutes;
                document.getElementById("seconds").innerText = seconds;

                // If the count down is over, write some text
                if (duration.asMilliseconds() <= 0) {
                    clearInterval(countdownFunction);
                    document.getElementById("countdown").innerHTML = "EXPIRED";
                }
            }, 1000);

            // Function to handle email submission using AJAX
            function submitEmail(email) {
                $.ajax({
                    url: "{{ route('email.store') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        email: email,
                    },
                    success: function(response) {
                        if (response.success) {
                            // Show success message without reloading the page
                            alert("Your email has been submitted successfully!");
                        } else {
                            alert("Your email has been submitted successfully!");
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Error submitting email:", textStatus, errorThrown);
                    }
                });
            }

            // Submit email on form submit using AJAX
            $("#email-form").submit(function(e) {
                e.preventDefault();
                let email = $("#email").val();
                submitEmail(email);
            });
        });
    </script>
</head>
<body>

<div class="bg-cover h-screen py-12" style="background-image: url('{{ asset('images/bg.jpeg') }}');">
    <div class="flex">
        <img src="{{asset('images/socialmd.png')}}" alt="Phone" width="30%"/>
        <div>
            <img src="{{ asset('images/WebLogo.png') }}" alt="Students" class="w-full h-32" />
            <p class="mt-2 text-white text-center">Soon to be home of Frontpage Social Platform </p>
            <p class="mt-5 text-white text-center">frontpage.social <span class="text-maroon">by MSHDLIVE</span></p>
            <div id="countdown" class="flex space-x-2 mt-5 justify-center mx-auto w-8/12">
                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32 flex flex-col justify-center items-center">
                    <h1 id="days" class="text-2xl">188</h1>
                    <p class="text-xs font-thin">DAYS</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div>
                </div>

                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32 flex flex-col justify-center items-center">
                    <h1 id="hours" class="text-2xl">12</h1>
                    <p class="text-xs font-thin">HOURS</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div>
                </div>

                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32 flex flex-col justify-center items-center">
                    <h1 id="minutes" class="text-2xl">19</h1>
                    <p class="text-xs font-thin">MINUTES</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div>
                </div>

                <div class="bg-maroon text-white py-3 px-4 text-center relative w-28 h-32 flex flex-col justify-center items-center">
                    <h1 id="seconds" class="text-2xl">22</h1>
                    <p class="text-xs font-thin">SECONDS</p>
                    <div class="absolute bottom-0 left-0 right-0 bg-white h-2"></div>
                </div>
            </div>
            <p class="mt-10 text-white text-center">Notify me when ready</p>
            <div class="mt-4 flex w-8/12 justify-center mx-auto">
                <form id="email-form" action="#" method="POST" class="flex w-full">
                    @csrf
                    <input
                        id="email"
                        name="email"
                        type="email"
                        class="mt-1 block w-full focus:shadow-md"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="Get notification by email"
                        style="flex: 1; height: 40px;"
                    />
                    <button type="submit" class="bg-maroon text-white px-2 rounded-r py-2 h-10 mt-1" style="height: 40px;">
                        Send
                    </button>
                </form>
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


</body>
</html>
