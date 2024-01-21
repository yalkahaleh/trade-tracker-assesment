
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-6 py-4 mt-4 text-left bg-white shadow-lg w-1/3">
            <h3 class="text-2xl font-bold text-center">Register</h3>
            <form wire:submit.prevent="register" class="mt-4">
                <div>
                    <label class="block" for="name">Name</label>
                    <input wire:model="name" type="text" id="name"
                           class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                           placeholder="John Doe" required>
                    @error('name') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                <div class="mt-4">
                    <label class="block" for="email">Email</label>
                    <input wire:model="email" type="email" id="email"
                           class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                           placeholder="john@example.com" required>
                    @error('email') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                <div class="mt-4">
                    <label class="block" for="password">Password</label>
                    <input wire:model="password" type="password" id="password"
                           class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                           placeholder="********" required>
                    @error('password') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                <div class="mt-4">
                    <label class="block" for="passwordConfirmation">Confirm Password</label>
                    <input wire:model="password_confirmation" type="password" id="passwordConfirmation"
                           class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                           placeholder="********" required>
                </div>

                <div class="flex items-center justify-between mt-4">
                    <button type="submit" class="px-6 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-900 w-full">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>

