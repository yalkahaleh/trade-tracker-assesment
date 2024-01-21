<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-6 py-4 mt-4 text-left bg-white shadow-lg max-w-lg mx-auto">
        <h3 class="text-2xl font-bold text-center">Create Company</h3>
        <form wire:submit.prevent="submit" class="mt-4">
            <div>
                <label class="block" for="name">Name</label>
                <input wire:model="name" type="text" id="name"
                       class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                       placeholder="Company Name" required>
                @error('name') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <label class="block" for="description">Description</label>
                <textarea wire:model="description" id="description"
                          class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                          placeholder="About the company"></textarea>
                @error('description') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <label class="block" for="address">Address</label>
                <input wire:model="address" type="text" id="address"
                       class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                       placeholder="1234 Main St" required>
                @error('address') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <label class="block" for="logo">Logo</label>
                <input wire:model="logo" type="file" id="logo"
                       class="w-full px-4 py-2 mt-2 border rounded-md">
                @error('logo') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
            </div>


            <div class="flex items-center justify-between mt-4">
                <button type="submit" class="px-6 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-900">
                    Create Company
                </button>
            </div>
        </form>
    </div>
</div>
