<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-24 w-auto" src="/images/logo.png" alt="Tasky Logo">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Verify your email address
            </h2>
        </div>



        <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('verification.send') }}" method="POST">
                @csrf
                <p class="text-center text-md @if (session('message')) text-green-700 @endif ">
                    We have sent a verification link to {{ auth()->user()->email }}</p>
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-[#E74A3A] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-[#FF8000] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#E74A3A]">Resend
                        Email</button>
                </div>
            </form>

        </div>
    </div>

</x-layout>
