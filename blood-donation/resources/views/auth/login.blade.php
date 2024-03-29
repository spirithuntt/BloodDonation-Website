<x-guest-layout>
        <div class="lg:flex">
            <div class="lg:w-1/2 xl:max-w-screen-sm">
            {{-- <div class="py-12 bg-grey-200 lg:bg-white flex justify-center lg:justify-start lg:px-12">
                <div class="cursor-pointer flex items-center">
                    <img class="max-w-4xl w-20" src="{{ asset('assets/img/logo.png') }}" alt="logo">
                </div>
            </div> --}}
                 <x-validation-errors class="bg-red-100 border border-red-700 text-red-900 px-4 py-3 rounded relative" />
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                    <h2 class="text-center text-4xl text-red-700 font-display font-semibold lg:text-left xl:text-5xl
                    xl:text-bold">Log in</h2>
                    <div class="mt-12">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Email Address</div>
                                <input class="w-full text-lg py-2 border-b border-gray-300 rounded-md  focus:border-red-500" type="email" name="email" :value="old('email')" required autofocus placeholder="hamid@gmail.com">
                            </div>
                            <div class="mt-8">
                                <div class="flex justify-between items-center">
                                    <div class="text-sm font-bold text-gray-700 tracking-wide">
                                        Password
                                    </div>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a class="text-xs font-display font-semibold text-red-600 hover:text-red-800
                                            cursor-pointer" href="{{ route('password.request') }}">
                                                Forgot Password?
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <input class="w-full text-lg py-2 border-b border-gray-300 rounded-md  focus:border-red-500" type="password" name="password" required placeholder="Enter your password">
                            </div>
                            <div class="mt-10">
                                <button class="bg-red-700 text-gray-100 p-4 w-full rounded-full tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-red-500
                                shadow-lg">
                                    Log In
                                </button>
                            </div>
                        </form>
                        <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                            Don't have an account ? <a class="cursor-pointer text-red-600 hover:text-red-800" href="{{ route('register') }}">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex items-center justify-center bg-red-900 flex-1 h-400">
                <img class="max-w-4xl" src="{{ asset('assets/img/illustration.png') }}" alt="2707653">
            </div>
        </div>
</x-guest-layout>


