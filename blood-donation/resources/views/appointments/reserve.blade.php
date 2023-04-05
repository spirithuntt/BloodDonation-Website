<x-app-layout>
    <div class="min-w-screen flex items-center justify-center px-4 py-12">
        <div class="w-full bg-white rounded-lg p-8 shadow-lg">
            <div class="bg-gray-800 text-white py-4 mb-9">
                <div class="container mx-auto">
                    <h1 class="text-center text-2xl font-bold">
                        Available Donation Appointments
                    </h1>
                </div>
            </div>
        
        <div class="flex flex-wrap w-full justify-center">
            @foreach($appointments as $appointment)
            <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h5 class="text-center font-bold text-xl mb-4">{{ $appointment['date'] }}</h5>
                    <h5 class="text-center font-bold text-lg mb-4">{{ $appointment['day_name'] }}</h5>
                    @if(!$appointment['off'])
                    @foreach($appointment['business_hours'] as $time)
                    @if (!in_array($time, $appointment['reserved_hours']))
                    <form action="{{route('reserve')}}" method="post">
                        @csrf
                        <input type="hidden" name="date" value="{{ $appointment['full_date'] }}">
                        <input type="hidden" name="time" value="{{ $time }}">
                        <button class="bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-4 rounded w-full" type="submit">
                            {{ $time }}
                        </button>
                        <br>
                        <br>
                    </form>
                    @else
                    <button class="bg-gray-300 text-white font-bold py-2 px-4 rounded w-full mb-4" disabled>
                        {{ $time }}
                    </button>
                    @endif
                    @endforeach
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</x-app-layout>
