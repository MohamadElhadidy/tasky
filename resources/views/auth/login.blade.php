<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-24 w-auto" src="/images/logo.png" alt="Tasky Logo">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" autocomplete="email" required
                            class="block w-full rounded-md  px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2  sm:text-sm/6

                            @error('email') bg-red-50  text-red-900 outline-red-500 focus:outline-[#ff240c]   @else focus:outline-[#E74A3A]  bg-white text-gray-900 @enderror
                            ">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                                {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>

                    </div>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                            class="block w-full rounded-md  px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2  sm:text-sm/6

                            @error('password') bg-red-50  text-red-900 outline-red-500 focus:outline-[#ff240c]   @else focus:outline-[#E74A3A]  bg-white text-gray-900 @enderror
                            ">
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                                {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="flex gap-3 ">
                        <div class="flex h-6 shrink-0 items-center">
                            <div class="group grid size-4 grid-cols-1">
                                <input id="rememberme" aria-describedby="rememberme-description" name="remember_me"
                                    type="checkbox"
                                    class=" hover:cursor-pointer col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-[#E74A3A] checked:bg-[#E74A3A] indeterminate:border-[#E74A3A] indeterminate:bg-[#E74A3A] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#E74A3A] disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25"
                                    viewBox="0 0 14 14" fill="none">
                                    <path class="opacity-0 group-has-[:checked]:opacity-100" d="M3 8L6 11L11 3.5"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path class="opacity-0 group-has-[:indeterminate]:opacity-100" d="M3 7H11"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="text-sm/6">
                            <label for="rememberme" class="font-medium text-gray-900  hover:cursor-pointer">Remember
                                me</label>
                        </div>
                    </div>
                    <div class="text-sm">
                        <a href="{{ route('password.request') }}"
                            class="font-semibold text-[#E74A3A] hover:text-[#FF8000]">Forgot
                            password?</a>
                    </div>
                </div>



                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-[#E74A3A] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-[#FF8000] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#E74A3A]">Sign
                        in</button>
                </div>

            </form>
            <div>
                <div class="my-6 border-b text-center">
                    <div
                        class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
                        Or
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <button
                        class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-[#FBDF79] text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">
                        <div class="bg-white p-2 rounded-full">
                            <svg class="w-4" viewBox="0 0 533.5 544.3">
                                <path
                                    d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z"
                                    fill="#4285f4" />
                                <path
                                    d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z"
                                    fill="#34a853" />
                                <path
                                    d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z"
                                    fill="#fbbc04" />
                                <path
                                    d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z"
                                    fill="#ea4335" />
                            </svg>
                        </div>
                        <span class="ml-4">
                            Sign in with Google
                        </span>
                    </button>

                    <button
                        class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-[#FBDF79] text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline mt-5">
                        <div class="bg-white p-1 rounded-full">
                            <svg class="w-6" viewBox="0 0 32 32">
                                <path fill-rule="evenodd"
                                    d="M16 4C9.371 4 4 9.371 4 16c0 5.3 3.438 9.8 8.207 11.387.602.11.82-.258.82-.578 0-.286-.011-1.04-.015-2.04-3.34.723-4.043-1.609-4.043-1.609-.547-1.387-1.332-1.758-1.332-1.758-1.09-.742.082-.726.082-.726 1.203.086 1.836 1.234 1.836 1.234 1.07 1.836 2.808 1.305 3.492 1 .11-.777.422-1.305.762-1.605-2.664-.301-5.465-1.332-5.465-5.93 0-1.313.469-2.383 1.234-3.223-.121-.3-.535-1.523.117-3.175 0 0 1.008-.32 3.301 1.23A11.487 11.487 0 0116 9.805c1.02.004 2.047.136 3.004.402 2.293-1.55 3.297-1.23 3.297-1.23.656 1.652.246 2.875.12 3.175.77.84 1.231 1.91 1.231 3.223 0 4.61-2.804 5.621-5.476 5.922.43.367.812 1.101.812 2.219 0 1.605-.011 2.898-.011 3.293 0 .32.214.695.824.578C24.566 25.797 28 21.3 28 16c0-6.629-5.371-12-12-12z" />
                            </svg>
                        </div>
                        <span class="ml-4">
                            Sign in with GitHub
                        </span>
                    </button>
                </div>
            </div>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Not a member?
                <a href="{{ route('register') }}" class="font-semibold text-[#E74A3A] hover:text-[#FF8000]">Create an
                    account</a>
            </p>
        </div>
    </div>

</x-layout>
