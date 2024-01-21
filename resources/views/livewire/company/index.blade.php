<div class="container mx-auto px-4 py-8 mt-10">
    @if($companies->isEmpty())
        <div class="text-center text-gray-500">No companies yet.</div>
    @else
        <div class="flex flex-wrap -mx-2">
            @foreach ($companies as $company)
                <div class="w-full md:w-1/3 px-2 mb-4">
                    <div class="rounded overflow-hidden">
                        <div class="flex justify-center">
                            <img class="rounded-full h-24 w-24 object-cover" src="{{ asset($company->logo) }}" alt="Logo">
                        </div>
                        <div class="text-center px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $company->name }}</div>
                            <a href="{{ route('company.show', $company->id) }}" class="text-blue-700 hover:text-blue-900">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
