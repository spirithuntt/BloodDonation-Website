<x-guest-layout>
    <div class="lg:flex">
        <div class="lg:w-1/2 xl:max-w-screen-sm">
            <x-validation-errors class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" />
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                <h2 class="text-center text-4xl text-red-700 font-display font-semibold lg:text-left xl:text-5xl xl:text-bold">Register</h2>
                <div class="mt-12">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div>
                            <div class="text-sm font-bold text-gray-700 tracking-wide">Name</div>
                            <input class="w-full text-lg py-2 border-b border-gray-300 rounded-md focus:outline-none focus:border-red-700" type="text" name="name" :value="old('name')" required autofocus placeholder="Enter your name">
                        </div>
                        <div class="mt-8">
                            <div class="text-sm font-bold text-gray-700 tracking-wide">Last Name</div>
                            <input class="w-full text-lg py-2 border-b border-gray-300 rounded-md focus:outline-none focus:border-red-700" type="text" name="last_name" :value="old('last_name')" required autofocus placeholder="Enter your last name">
                        </div>
                        <div class="mt-8">
                            <div class="text-sm font-bold text-gray-700 tracking-wide">ID Number</div>
                            <input class="w-full text-lg py-2 border-b border-gray-300 rounded-md focus:outline-none focus:border-red-700" type="text" name="ID_number" :value="old('id_number')" required autofocus placeholder="Enter your ID number">
                        </div>
                        <div class="mt-8">
                            <div class="text-sm font-bold text-gray-700 tracking-wide">Phone Number</div>
                            <input class="w-full text-lg py-2 border-b border-gray-300 rounded-md focus:outline-none focus:border-red-700" type="text" name="phone" :value="old('phone')" required placeholder="Enter your phone number">
                        </div>
                        <div class="mt-8">
                            <div class="text-sm font-bold text-gray-700 tracking-wide">Email Address</div>
                            <input class="w-full text-lg py-2 border-b border-gray-300 rounded-md focus:outline-none focus:border-red-700" type="email" name="email" :value="old('email')" required placeholder="mike@gmail.com">
                        </div>
                        <div class="mt-8">
                            <div class="flex justify-between items-center">
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Password</div>
                            </div>
                            <input class="w-full text-lg py-2 border-b border-gray-300 rounded-md focus:outline-none focus:border-red-700" type="password" name="password" required placeholder="Enter your password">
                        </div>
                        <div class="mt-8">
                            <div class="flex justify-between items-center">
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Confirm Password</div>
                            </div>
                            <input class="w-full text-lg py-2 border-b border-gray-300 rounded-md focus:outline-none focus:border-red-700" type="password" name="password_confirmation" required placeholder="Confirm your password">
                        </div>
                        <div class="mt-10">
                            <button class="bg-red-700 text-gray-100 p-4 w-full rounded-full tracking-wide font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-red-500 shadow-lg">
                                Register
                            </button>
                        </div>
                    </form>
                    <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                        Already have an account? <a class="cursor-pointer text-red-700 hover:text-red-500" href="{{ route('login') }}">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:flex items-center justify-center bg-red-100 flex-1 h-screen">
            <img class="max-w-4xl h-70 w-70" src="{{ asset('assets/img/illustration.png') }}" alt="2707653">
        </div>
    </div>
</x-guest-layout>