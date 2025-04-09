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
                    <h2 class="text-2xl font-medium text-gray-800">Confirm Password</h2>
                    <p class="text-gray-700">This is a secure area of the application</p>
                </div>
                
                <div class="p-8">
                    <div class="mb-6 text-sm text-gray-600">
                        Please confirm your password before continuing.
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
                        @csrf

                        <!-- Password -->
                        <div class="space-y-1">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input id="password" class="w-full px-4 py-3 border-b border-gray-300 focus:border-[#d8ba89] focus:outline-none transition-colors"
                                type="password" name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-1" />
                        </div>

                        <button type="submit"
                            class="w-full bg-[#d8ba89] hover:bg-[#c9ab79] text-white py-3 px-4 rounded-lg transition-colors">
                            Confirm
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>