<x-guest-layout>
    <div class="flex min-h-screen bg-[#f5f0e6]">
        <!-- Left side with restaurant image -->
        <div class="hidden lg:block lg:w-1/2 relative overflow-hidden">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center transform hover:scale-105 transition duration-1000"></div>
            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                <div class="text-center p-8">
                    <h1 class="text-5xl font-light tracking-wider text-white mb-2">AmbatuEat</h1>
                    <div class="w-24 h-1 bg-[#d8ba89] mx-auto mb-4"></div>
                    <p class="text-xl text-white font-thin">Restoran Tradisional Pemalang</p>
                </div>
            </div>
        </div>
        
        <!-- Right side with registration form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Form header -->
                <div class="bg-[#d8ba89] px-8 py-6">
                    <h2 class="text-2xl font-medium text-gray-800">Create Account</h2>
                    <p class="text-gray-700">Join our restaurant family</p>
                </div>
                
                <!-- Form content -->
                <div class="p-8">
                    <form method="POST" action="{{ route('register') }}" class="space-y-6">
                        @csrf
                        
                        <!-- Name -->
                        <div class="space-y-1">
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input id="name" name="name" type="text" required
                                class="w-full px-4 py-3 border-b border-gray-300 focus:border-[#d8ba89] focus:outline-none transition-colors"
                                placeholder="John Doe">
                            <x-input-error :messages="$errors->get('name')" class="mt-1" />
                        </div>
                        
                        <!-- Email -->
                        <div class="space-y-1">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input id="email" name="email" type="email" required
                                class="w-full px-4 py-3 border-b border-gray-300 focus:border-[#d8ba89] focus:outline-none transition-colors"
                                placeholder="your@email.com">
                            <x-input-error :messages="$errors->get('email')" class="mt-1" />
                        </div>
                        
                        <!-- Password -->
                        <div class="space-y-1">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input id="password" name="password" type="password" required
                                class="w-full px-4 py-3 border-b border-gray-300 focus:border-[#d8ba89] focus:outline-none transition-colors"
                                placeholder="••••••••">
                            <x-input-error :messages="$errors->get('password')" class="mt-1" />
                        </div>
                        
                        <!-- Confirm Password -->
                        <div class="space-y-1">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                class="w-full px-4 py-3 border-b border-gray-300 focus:border-[#d8ba89] focus:outline-none transition-colors"
                                placeholder="••••••••">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                        </div>
                        
                        <!-- Submit button -->
                        <button type="submit"
                            class="w-full bg-[#d8ba89] hover:bg-[#c9ab79] text-white py-3 px-4 rounded-lg transition-colors">
                            Create Account
                        </button>
                        
                        <!-- Login link -->
                        <div class="text-center text-sm text-gray-600">
                            Already have an account? 
                            <a href="{{ route('login') }}" class="text-[#d8ba89] hover:underline">Sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>