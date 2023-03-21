<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <title>Test</title>


</head>
<style>
    @font-face {
        font-family: aquagrow;
        src: url({{ Vite::asset('resources/fonts/aquag.ttf') }});

    }
</style>

<body style="background-color: white">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
        <title>Test</title>


    </head>
    <style>
        @font-face {
            font-family: aquagrow;
            src: url({{ Vite::asset('resources/fonts/aquag.ttf') }});

        }
    </style>

    <body class="flex
        justify-center content-center">
        <!-- outer container -->
        <div class="border border-gray-300 rounded-sm shadow-lg py-10 px-10 w-4/5 mt-10 mb-10">
            <!-- header (profile) -->
            <header>
                <div class="flex justify-between items-center">
                    <div>
                        <div class="bg-cover bg-no-repeat rounded-full h-52 w-52"
                            style="background-image: url({{ Vite::asset('resources/images/atnan.jpg') }})">
                        </div>
                    </div>
                    <div class="grid justify-items-end ">
                        <h1 class="text-3xl font-extrabold ">ATNAN ARI ANDERSON</h1>
                        <p class="text-xl mt-5">College Student</p>
                    </div>
                </div>
            </header>
            <main class="flex gap-x-10 mt-10 ">
                <div class="w-2/6">
                    <strong class="text-xl font-medium sm:text-2xl">Contact Details</strong>
                    <ul class="mt-2 mb-10">
                        <li class="px-2 mt-1"><strong class="mr-1">Phone </strong>
                            <a href="tel:+821023456789" class="block text-sm truncate sm:text-lg">+6282387550101</a>
                        </li>
                        <li class="px-2 mt-1"><strong class="mr-1 ">E-mail </strong>
                            <a href="mailto:" class="block text-sm truncate">atnanarianderson@gmail.com</a>
                        </li>
                        <li class="px-2 mt-1 text-sm"><strong class="mr-1">Location</strong><span
                                class="block">Batam,
                                Indonesia</span></li>
                    </ul>

                    <!-- github stats -->
                    <strong class="text-xl font-medium ">Github Stats</strong>
                    <ul class="flex w-full mt-2 mb-10">
                        <li class="px-2 mt-2 w-4/12 bg-pink-600 text-white text-center rounded-tl-lg rounded-bl-lg">HTML
                        </li>
                        <li class="px-2 mt-2 w-4/12 bg-blue-600 text-white text-center">CSS</li>
                        <li class="px-2 mt-2 w-5/12 bg-yellow-500 text-white text-center rounded-tr-lg rounded-br-lg">JS
                        </li>

                    </ul>
                    <!-- skills -->
                    <strong class="text-xl font-medium">Skills</strong>
                    <ul class="mt-2 mb-10">
                        <li class="px-2 mt-1">HTML</li>
                        <li class="px-2 mt-1">CSS</li>
                        <li class="px-2 mt-1">JavaScript</li>
                    </ul>
                    <strong class="text-xl font-medium">Further Education</strong>
                    <ul class="mt-2 mb-10">
                        <li class="px-2 mt-1">Flutter-Fundamental</li>
                        <li class="px-2 mt-1">Dicoding</li>
                    </ul>
                    </ul>
                    <!-- what I'm learning these days -->
                    <strong class="text-xl font-medium">Currently learning</strong>
                    <ul class="mt-2 mb-10">
                        <li class="px-2 mt-1">About Web Development</li>
                        <li class="px-2 mt-1">and User Experience</li>
                    </ul>
                    <strong class="text-xl font-medium">Interests & Hobbies</strong>
                    <ul class="mt-2">
                        <li class="px-2 mt-1">Sustainability</li>
                        <li class="px-2 mt-1">New technologies</li>
                        <li class="px-2 mt-1">Music</li>
                        <li class="px-2 mt-1">Travel</li>
                    </ul>
                </div>
                <!-- info -->
                <div class="w-4/6">
                    <section>
                        <!-- about me -->
                        <h2 class="text-2xl pb-1 border-b font-semibold">About</h2>
                        <p class="mt-4 text-xs">I'm a college student that interested in developing and programming! The
                            name is Atnan and I am 18 years old! You know what is more cool? I work as an accountant
                            even thought i major in computer science lol!</p>

                    </section>
                    <section>
                        <!-- projects -->
                        <h2 class="text-2xl mt-6 pb-1 border-b font-semibold">Projects</h2>
                        <ul class="mt-1">
                            <li class="py-2">
                                <div class="flex justify-between my-1">
                                    <strong>BodyFits (Final)</strong>
                                    <p class="flex">
                                        <span
                                            class="bg-gray-600 text-white px-2 py-1 ml-1 text-xs rounded ">React</span>
                                        <span
                                            class="bg-gray-600 text-white px-2 py-1 ml-1 text-xs rounded ">Laravel</span>
                                        <span class="bg-gray-600 text-white px-2 py-1 ml-1 text-xs rounded">JS</span>
                                    </p>
                                </div>
                                <ul class="flex mb-2 o">
                                    <li><a href="#"
                                            class="bg-blue-600 text-white px-2 py-1 mr-1 text-sm rounded">Code</a>
                                    </li>
                                </ul>
                                <p class="text-xs">A final project completed by amazing team of Developer and Designer
                                    of Group 2 in the past semester 1 in Information System, presented to public and
                                    lecturer as our final project grades.</p>
                            </li>
                            <li class="py-2">
                                <div class="flex justify-between my-1">
                                    <strong>Rent-N-Go</strong>
                                    <p class="flex">
                                        <span class="bg-gray-600 text-white px-2 py-1 ml-1 text-xs rounded">Go</span>
                                        <span class="bg-gray-600 text-white px-2 py-1 ml-1 text-xs rounded">React</span>
                                        <span class="bg-gray-600 text-white px-2 py-1 ml-1 text-xs rounded">JS</span>
                                    </p>
                                </div>
                                <ul class="flex mb-2">
                                    <li><a href="#"
                                            class="bg-blue-600 text-white px-2 py-1 mr-1 text-sm rounded">Code</a>
                                    </li>
                                </ul>
                                <p class="text-xs">
                                    A final project that is being develop by Group 2 to present for Industial and
                                    lecturer, and currently is still in developing stages.
                                </p>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <!-- work experiences -->
                        <h2 class="text-2xl mt-6 pb-1 border-b font-semibold">Work Experiences</h2>
                        <ul class="mt-2">
                            <li class="pt-2">
                                <p class="flex justify-between text-sm"><strong class="text-base">PT. Internasional
                                        Hardware Indo</strong>2023 - Now</p>
                                <p class="flex justify-between text-base">AP & AR Accountant<small>Batam</small></p>
                                <p class="text-justify text-xs">I have started my career as a accountant with my little
                                    knowdledge of basic accounting i got from my highschool education about economics.
                                </p>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <!-- education -->
                        <h2 class="text-2xl mt-6 pb-1 border-b font-semibold">Education</h2>
                        <ul class="mt-2">
                            <li class="pt-2">
                                <p class="flex justify-between text-sm"><strong class="text-base">Universitas
                                        Internasional Batam</strong>2022-Now</p>
                                <p class="flex justify-between text-sm">Information System<small>GPA 4.0</small></p>
                            </li>
                            <li class="pt-2">
                                <p class="flex justify-between text-sm"><strong class="text-base">SMA Ananda
                                        Batam</strong>2019-2022</p>
                                <p class="flex justify-between text-sm">Social Science<small>Average 89.90</small></p>
                            </li>
                        </ul>
                    </section>
                </div>
            </main>
            <footer class="mt-6">
                <p class="bg-gray-600 text-white text-center text-xs pt-2">The best way to predict the future is to
                    create it. <small>- AbrahamLincoln</small>
                </p>
                <p class="bg-gray-600 text-white text-center text-sm pb-2">I am creating my future by learning new
                    things
                    and
                    making small progresses everyday.</p>
            </footer>
        </div>
    </body>

    </html>


</body>

</html>
