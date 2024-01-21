<div class="container mx-auto px-4 py-8">
    <div class="max-w-xl mx-auto bg-white rounded-lg overflow-hidden md:max-w-2xl">
        <div class="w-full p-4">
            <div class="flex justify-center">
                <img class="rounded-full h-40 w-40 object-cover" src="{{ asset($company->logo) }}" alt="{{ $company->name }} Logo">
            </div>
            <div class="text-center mt-4">
                <h2 class="text-3xl font-semibold">{{ $company->name }}</h2>
                @if($company->description)
                    <p class="mt-2 text-gray-600">{{ $company->description }}</p>
                @endif
                <p class="mt-2 text-gray-600">{{ $company->address }}</p>

                @if($stockData)
                    <div wire:poll.15000ms> <!-- Polling every 15 seconds -->
                    <div class="mt-4 grid grid-cols-3 gap-4 text-sm">
                        <div class="font-semibold text-center">Price ($)</div>
                        <div class="font-semibold text-center">High ($)</div>
                        <div class="font-semibold text-center">Low ($)</div>

                        <div class="text-center">{{ $stockData[0]['price'] }}</div>
                        <div class="text-center">{{ $stockData[0]['dayHigh'] }}</div>
                        <div class="text-center">{{  $stockData[0]['dayLow'] }}</div>

                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-4 text-sm">
                        <div class="font-semibold text-center">Open ($)</div>
                        <div class="font-semibold text-center">Close ($)</div>
                        <div class="font-semibold text-center">Market Cap ($)</div>

                        <div class="text-center">{{ $stockData[0]['open'] }}</div>
                        <div class="text-center">{{ $stockData[0]['previousClose'] }}</div>
                        <div class="text-center">{{  $stockData[0]['marketCap'] }}</div>

                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-4 text-sm">
                        <div class="font-semibold text-center">Avg Volume</div>
                        <div class="font-semibold text-center">EPS</div>
                        <div class="font-semibold text-center">PE</div>

                        <div class="text-center">{{ $stockData[0]['avgVolume'] }}</div>
                        <div class="text-center">{{  $stockData[0]['eps'] }}</div>
                        <div class="text-center">{{  $stockData[0]['pe'] }}</div>

                    </div>
                    </div>

                @else
                    <p>No stock data available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
