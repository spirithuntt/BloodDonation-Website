<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        {{-- include fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.4/tailwind.min.css" />
        {{-- include css --}}
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    {{-- <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <body class="bg-gray-100">
                <!-- navbar with a logo in the left and two buttons int right -->
                <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6 bg-gray-800 text-white">
                    <div class="flex items-center text-white mr-6">
                        <img src="{{asset('assets/img/logo.png')}}" alt="logo" class="fill-current h-8 w-8 mr-2">
                        <span class="font-serif text-2xl tracking-tight">Moroccan Red Crescent</span>
                    </div>
                    <div class="block lg:hidden">
                        <button
                            class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto">
                        <div class="text-sm lg:flex-grow">
                            <a href="#responsive-header"
                                class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-red-700 mr-4 text-xs">
                                Why donate blood
                            </a>
                            <a href="#responsive-header"
                                class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-red-700 mr-4 text-xs">
                                Types of Blood Donations
                            </a>
                            <a href="#responsive-header"
                                class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-red-700 mr-4 text-xs">
                                The Donation Process
                            </a>
                            <a href="#responsive-header"
                                class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-red-700 mr-4 text-xs">
                                Compatible blood types
                            </a>
                        </div>
                        @if (Route::has('login'))
                        <div class="buttons">
                        @auth
                        <a href="{{ url('/dashboard') }}"
                            class="bg-red-700 inline-block text-sm px-4 py-2 leading-none text-white hover:text-teal-500 hover:bg-red-900 mt-4 lg:mt-0 rounded-full py-3 px-6 mr-4 shadow-2xl">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}"
                            class="bg-red-700 inline-block text-sm px-4 py-2 leading-none text-white hover:text-teal-500 hover:bg-red-900 mt-4 lg:mt-0 rounded-full py-3 px-6 mr-4 shadow-2xl">Login</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="bg-red-700 inline-block text-sm px-4 py-2 leading-none text-white hover:text-teal-500 hover:bg-red-900 mt-4 lg:mt-0 rounded-full py-3 px-6 mr-4 shadow-2xl">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                    </div>
                </nav>
            
                <!-- black hero section -->
                <section class="bg-gray-800 text-white">
                    <img src="{{asset('assets/img/hero.png')}}" alt="hero" class="w-1/4 float-right m-0">
                    <div class="container mx-auto px-6 py-20" style="height: 50%;">
                        <h2 class="text-4xl font-bold mb-2">Drop of your blood is a <span class="text-red-700">New life </span>for
                            someone</h2>
                        <h3 class="text-2xl mb-8 p-4">Be the reason for someone's heartbeat, You can become a superhero too.</h3>
                        <!-- bg-red-900 text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg uppercase tracking-wider but with hover but big button-->
                        <a href="#"
                            class="bg-gray-200 text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg uppercase tracking-wider hover:bg-red-700 donatenow">Donate
                            Now</a>
                    </div>
                </section>
            
                <!-- TESTING -->
                <section class="bg-gray-100 text-gray-800 py-16">
                    <div class="container mx-auto px-6">
                        <div class="lg:flex items-center">
                            <div class="lg:w-1/2">
                                <img src="{{asset('assets/img/donateblood.jpg')}}" alt="donateblood" class="rounded-lg">
                            </div>
                            <div class="lg:w-1/2 lg:pl-10">
                                <h2 class="text-3xl font-bold text-red-700 mb-4">Why donate blood?</h2>
                                <p class="mb-4 text-gray-700 font-medium">Donating blood is a simple and effective way to save lives. Your
                                    donation can help individuals who have been in accidents, undergoing surgeries, receiving
                                    treatments like chemotherapy, and more.</p>
                                <p class="mb-4 text-gray-700 font-medium">In addition to the satisfaction of knowing you're helping others,
                                    donating blood also has health benefits for the donor. It can help reduce the risk of heart
                                    disease, lower iron levels in the blood, and stimulate the production of new blood cells.</p>
                                <a href="#" class="bg-white text-red-700 font-bold py-2 px-4 rounded hover:bg-gray-800">Learn
                                    more</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- poäj -->
            
                <!-- donor testimonials section -->
                <section class="bg-white py-10">
                    <div class="container mx-auto px-6">
                        <div class="flex flex-col items-center justify-center">
                            <h2 class="text-3xl font-bold mb-2 text-gray-800">Donor Testimonials</h2>
                            <div class="h-1 w-20 bg-red-700 mb-4"></div>
                        </div>
            
                        <div class="flex flex-wrap -mx-4">
                            <!-- donor testimonial card 1 -->
                            <div class="w-full md:w-1/3 px-4 mb-8">
                                <div class="bg-gray-100 rounded-lg shadow overflow-hidden">
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2 font-sans">"I always thought donating blood was only for emergencies or accidents, but after learning about the constant need for blood in hospitals, I now make it a point to donate regularly. It's a small gesture that can make a big impact"</p>
                                        <p class="text-gray-600 font-bold">-Ilias bouain, Regular Donor</p>
                                    </div>
                                </div>
                            </div>
            
                            <!-- donor testimonial card 2 -->
                            <div class="w-full md:w-1/3 px-4 mb-8">
                                <div class="bg-gray-100 rounded-lg shadow overflow-hidden">
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2 font-sans">"I was hesitant to donate blood at first, but the Moroccan Red Crescent Blood Donation team made the experience comfortable and easy. Their professionalism and care for donors made me feel at ease.."</p>
                                        <p class="text-gray-600 font-bold">- lchi wa7ed, First Time Donor</p>
                                    </div>
                                </div>
                            </div>
            
                            <!-- donor testimonial card 3 -->
                            <div class="w-full md:w-1/3 px-4 mb-8">
                                <div class="bg-gray-100 rounded-lg shadow overflow-hidden">
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2 font-sans">"As a healthcare worker, I see the critical need for blood every day. Donating blood is a way for me to directly contribute to my patients' well-being and recovery. It's a fulfilling experience that I highly recommend."</p>
                                        <p class="text-gray-600 font-bold">- Dr. zakaria l3zi, Regular Donor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- uezuqbe -->
                <section class="py-16 px-6" id="contact">
                    <div class="max-w-4xl mx-auto">
                        <h2 class="text-3xl font-bold mb-6">Contact Us</h2>
                        <form class="grid grid-cols-2 gap-6">
                            <label for="name" class="sr-only">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="Full Name"
                                class="border border-gray-400 rounded-lg py-2 px-4">
            
                            <label for="email" class="sr-only">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="Email Address"
                                class="border border-gray-400 rounded-lg py-2 px-4">
            
                            <label for="phone" class="sr-only">Phone Number</label>
                            <input type="tel" name="phone" id="phone" placeholder="Phone Number"
                                class="border border-gray-400 rounded-lg py-2 px-4">
            
                            <label for="message" class="sr-only">Message</label>
                            <input name="message" id="message" cols="30" rows="10" placeholder="Message"
                                class="border border-gray-400 rounded-lg py-2 px-4">
                            
                            <button 
                                class="text-white py-2 px-6 rounded-lg shadow-lg font-bold bg-red-700 hover:bg-red-900 transition duration-300 col-span-2">Send
                                Message</button>
                        </form>
                    </div>
                </section>
                <!-- iuohfu   -->
                <!-- <section class="py-16 px-6" id="appointment">
                    <div class="max-w-4xl mx-auto">
                        <h2 class="text-3xl font-bold mb-6">Schedule Your Appointment</h2>
                        <form class="grid grid-cols-2 gap-6">
                            <label for="name" class="sr-only">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="Full Name"
                                class="border border-gray-400 rounded-lg py-2 px-4">
            
                            <label for="email" class="sr-only">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="Email Address"
                                class="border border-gray-400 rounded-lg py-2 px-4">
            
                            <label for="phone" class="sr-only">Phone Number</label>
                            <input type="tel" name="phone" id="phone" placeholder="Phone Number"
                                class="border border-gray-400 rounded-lg py-2 px-4">
            
                            <label for="date" class="sr-only">Appointment Date</label>
                            <input type="date" name="date" id="date" class="border border-gray-400 rounded-lg py-2 px-4">
            
                            <label for="time" class="sr-only">Appointment Time</label>
                            <input type="time" name="time" id="time" class="border border-gray-400 rounded-lg py-2 px-4">
            
                            <button type="submit"
                                class="bg-red-700 text-white py-2 px-6 rounded-lg shadow-lg font-bold hover:bg-red-700 hover:text-white transition duration-300 col-span-2">Schedule
                                Appointment</button>
                        </form>
                    </div>
                </section> -->
                <!-- iejcoiejc   -->
                <section class="py-20 bg-gray-100">
                    <div class="container mx-auto">
                        <h2 class="text-3xl font-bold text-center mb-2">Benefits of Donating Blood</h2>
                        <div class="h-1 w-20 bg-red-700 mb-4 mx-auto mb-5"></div>
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full md:w-1/3 p-6">
                                <div class="flex items-center mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500 mr-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 00-1.414-1.414l-6 6a1 1 0 000 1.414l6 6a1 1 0 001.414-1.414L7.414 12H18a1 1 0 000-2H7.414l4.879-4.879z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <h3 class="text-xl font-bold">Helps save lives</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">Donating blood is one of the simplest ways to help save a
                                    life. Blood is essential for treating a wide variety of conditions, including cancer, sickle
                                    cell anemia, and severe burns, among others.</p>
                            </div>
                            <div class="w-full md:w-1/3 p-6">
                                <div class="flex items-center mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500 mr-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-6a1 1 0 00-1 1v3H6a1 1 0 100 2h3v3a1 1 0 102 0v-3h3a1 1 0 100-2h-3V5a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <h3 class="text-xl font-bold">Improves your own health</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">Donating blood can have health benefits for the donor as
                                    well. It can help reduce the risk of heart disease, stroke, and certain cancers, and may even
                                    improve blood flow and cholesterol levels.</p>
                            </div>
                            <div class="w-full md:w-1/3 p-6">
                                <div class="flex items-center mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500 mr-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 4a1 1 0 011 1v10a1 1 0 01-1 1h-6.414l-2.293 2.293A1 1 0 019 19H3a1 1 0 01-1-1V5a1 1 0 011-1h14zm-2 2H5v10h11V6zm-3 2a1 1 0 100 2 1 1 0 000-2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <h3 class="text-xl font-bold">It's easy and quick</h3>
                                </div>
                                <p class="text-gray-700 leading-relaxed">Donating blood is a simple process that takes about an
                                    hour. The actual donation itself takes less than 10 minutes, and you can donate blood every 56
                                    days.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- zigegzu -->
                          <section class="bg-white py-10">
                            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                              <div class="text-center">
                                <h2 class="text-base text-red-700 font-semibold tracking-wide uppercase">Donate Blood Today</h2>
                                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-800 sm:text-4xl">
                                  The Donation Process
                                </p>
                                <p class="mt-4 max-w-2xl text-xl text-gray-600 mx-auto">
                                  Donating blood is a simple process that can save lives. Here's what you can expect when you donate blood with us:
                                </p>
                              </div>
                              <div class="mt-10 grid grid-cols-2 gap-4">
                                <div class="col-span-1">
                                  <div class="flex items-center">
                                    <span class="text-5xl text-red-700 font-bold mr-4">1.</span>
                                    <div>
                                      <h3 class="text-xl font-bold text-gray-800">Register and Take an Appointment</h3>
                                      <p class="text-gray-600 mt-2">Visit our website to register as a donor and schedule an appointment at one of our blood donation centers.</p>
                                    </div>
                                  </div>
                                  <div class="flex items-center mt-8">
                                    <span class="text-5xl text-red-700 font-bold mr-4">2.</span>
                                    <div>
                                      <h3 class="text-xl font-bold text-gray-800">Come to the Appointment</h3>
                                      <p class="text-gray-600 mt-2">On the day of your appointment, come to the blood donation center and check in at the front desk.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-span-1 col-start-2">
                                  <div class="flex items-center">
                                    <span class="text-5xl text-red-700 font-bold mr-4">3.</span>
                                    <div>
                                      <h3 class="text-xl font-bold text-gray-800">Donate Blood</h3>
                                      <p class="text-gray-600 mt-2">Our trained staff will guide you through the blood donation process, which typically takes less than an hour.</p>
                                    </div>
                                  </div>
                                  <div class="flex items-center mt-8">
                                    <span class="text-5xl text-red-700 font-bold mr-4">4.</span>
                                    <div>
                                      <h3 class="text-xl font-bold text-gray-800">Refreshment and Recovery</h3>
                                      <p class="text-gray-600 mt-2">After you've finished donating, you'll be given snacks and drinks to help replenish your fluids and energy levels, Take a brief rest before leaving and avoid heavy activity to prevent lightheadedness or dizziness.</p>
                                    </div>
                                  </div>
                                </div>
                                </div>
                                </div>
                                </section>
                                {{--  --}}
                          {{-- öoirevjn --}}
                <!-- gueuc -->
                <section class="bg-gray-100 py-10">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-4">
                        <div class="lg:text-center">
                            <h2 class="text-base text-red-700 font-semibold tracking-wide uppercase">Blood Type Compatibility</h2>
                            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-800 sm:text-4xl">
                                Which Blood Types Can Give to Each Other?
                            </p>
                            <p class="mt-4 max-w-2xl text-xl text-gray-600 lg:mx-auto">
                                Knowing your blood type and understanding blood type compatibility is important when it comes to
                                blood donation. Here's a guide to help you understand which blood types can donate to which.
                            </p>
                            <!-- include typeOfDonation.gif -->
                            <div class="flex justify-center mt-5">
                                <img class="shadow-xl dark:shadow-gray-800 rounded-2xl lg\:h-28" src="{{asset('/assets/img/typeOfBlood.gif')}}" alt="type of blood" class="">
                            </div>
                        </div>
                    </div>
            
                </section>
                <!-- tzfguhiouzf -->
                <section class="bg-white py-10">
                    <div class="container mx-auto px-4 m-5 p-5">
                        <div class="max-w-3xl mx-auto text-center">
                            <h2 class="text-3xl font-bold mb-2">Blood Donation Statistics</h2>
                            <div class="h-1 w-20 bg-red-700 mb-4 mx-auto"></div>
                            <p class="text-gray-600 leading-loose mb-8">See how your blood donation can make a difference in
                                someone's life.</p>
                        </div>
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                                <div class="p-6 rounded-lg shadow bg-gray-100">
                                    <div class="text-5xl font-bold mb-4 text-red-700">2.7M</div>
                                    <p class="leading-loose text-gray-800 font-medium">Number of Blood Donations</p>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                                <div class="p-6 rounded-lg shadow bg-gray-100">
                                    <div class="text-5xl font-bold mb-4 text-red-700">1.3M</div>
                                    <p class="leading-loose text-gray-800 font-medium">Lives Saved by Blood Donations</p>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                                <div class="p-6 rounded-lg shadow bg-gray-100">
                                    <div class="text-5xl font-bold mb-4 text-red-700">8</div>
                                    <p class="leading-loose text-gray-800 font-medium">Blood Types</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- footer -->
                <footer class="container bg-gray-800 py-8">
                    <div class="mx-auto px-6">
                        <div class="lg:flex">
                            <div class="lg:w-1/3">
                                <h2 class="text-2xl font-bold text-gray-100 mb-4">Follow Us</h2>
                                <div class="flex">
                                    <a href="#" class="text-gray-400 hover:text-gray-100 mr-4">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-gray-100 mr-4">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-gray-100 mr-4">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="lg:w-1/3">
                                <h2 class="text-2xl font-bold text-gray-100 mb-4">Quick Links</h2>
                                <ul class="list-none">
                                    <li class="mb-2"><a href="#" class="text-gray-400 hover:text-red-700">Home</a></li>
                                    <li class="mb-2"><a href="#" class="text-gray-400 hover:text-red-700">About</a></li>
                                    <li class="mb-2"><a href="#" class="text-gray-400 hover:text-red-700">Donate Now</a></li>
                                    <li class="mb-2"><a href="#" class="text-gray-400 hover:text-red-700">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="lg:w-1/3">
                                <h2 class="text-2xl font-bold text-gray-100 mb-4">Subscribe to our newsletter</h2>
                                <form>
                                    <div class="flex items-center">
                                        <input type="email"
                                            class="w-full px-3 py-2 mr-2 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                            placeholder="Enter your email address">
                                        <button class="bg-red-700 text-white px-4 py-2 rounded hover:bg-red-900">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr class="my-8 border-gray-700">
                        <div class="text-center text-gray-500 text-sm">
                            <span>&copy; 2023 Moroccan Red Crescent. All rights reserved.</span>
                        </div>
                    </div>
                </footer>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.4/tailwind.min.css"></script>
            </body>
</html>
