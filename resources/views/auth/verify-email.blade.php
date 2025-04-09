<x-guest-layout>
    <div class="flex min-h-screen bg-[#f5f0e6]">
        <!-- Left side with restaurant image -->
        <div class="hidden lg:block lg:w-1/2 relative overflow-hidden">
            <div class="absolute inset-0 bg-[url('/images/restaurant-interior.jpg')] bg-cover bg-center"></div>
            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                <div class="text-center p-8">
                    <h1 class="text-5xl font-light tracking-wider text-white mb-2">RESTAURANT</h1>
                    <div class="w-24 h-1 bg-[#d8ba89] mx-auto mb-4"></div>
                    <p class="text-xl text-white font-thin">Authentic Indonesian Cuisine</p>
                </div>
            </div>
        </div>
        
        <!-- Right side with form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-[#d8ba89] px-8 py-6">
                    <h2 class="text-2xl font-medium text-gray-800">Verify Email</h2>
                    <p class="text-gray-700">Almost there!</p>
                </div>
                
                <div class="p-8">
                    <div class="mb-6 text-sm text-gray-600">
                        Thanks for signing up! Before getting started, please verify your email address by clicking on the link we emailed to you.
                    </div>

                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-6 text-sm text-green-600">
                            A new verification link has been sent to your email address.
                        </div>
                    @endif

                    <div class="mt-6 space-y-4">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit"
                                class="w-full bg-[#d8ba89] hover:bg-[#c9ab79] text-white py-3 px-4 rounded-lg transition-colors">
                                Resend Verification Email
                            </button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-center text-sm text-[#d8ba89] hover:underline">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>