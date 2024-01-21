<div class="container mx-auto px-4 py-8">
    <div class="max-w-xl mx-auto bg-white rounded-lg overflow-hidden md:max-w-2xl">
        <div wire:poll.60000ms class="w-full p-4"> <!-- Polling every minute -->
            <div class="flex justify-center">
                <img class="rounded-full h-40 w-40 object-cover" src="{{ asset($company->logo) }}" alt="{{ $company->name }} Logo">
            </div>
            <div class="text-center mt-4">
                <h2 class="text-3xl font-semibold">{{ $company->name }}</h2>
                @if($company->description)
                    <p class="mt-2 text-gray-600">{{ $company->description }}</p>
                @endif
                <p class="mt-2 text-gray-600">{{ $company->address }}</p>

                @if($company->stock)
                    <div class="mt-4 grid grid-cols-3 gap-4 text-sm">
                        <div class="font-semibold text-center">Price ($)</div>
                        <div class="font-semibold text-center">High ($)</div>
                        <div class="font-semibold text-center">Low ($)</div>

                        <div class="text-center">{{ $company->stock->price }}</div>
                        <div class="text-center">{{ $company->stock->day_high }}</div>
                        <div class="text-center">{{ $company->stock->day_low }}</div>

                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-4 text-sm">
                        <div class="font-semibold text-center">Open ($)</div>
                        <div class="font-semibold text-center">Close ($)</div>
                        <div class="font-semibold text-center">Market Cap ($)</div>

                        <div class="text-center">{{ $company->stock->open }}</div>
                        <div class="text-center">{{ $company->stock->previous_close }}</div>
                        <div class="text-center">{{ $company->stock->market_cap }}</div>

                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-4 text-sm">
                        <div class="font-semibold text-center">Avg Volume</div>
                        <div class="font-semibold text-center">EPS</div>
                        <div class="font-semibold text-center">PE</div>

                        <div class="text-center">{{ $company->stock->avg_volume }}</div>
                        <div class="text-center">{{ $company->stock->eps }}</div>
                        <div class="text-center">{{ $company->stock->pe }}</div>

                    </div>
                @else
                    <p>No stock data available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
