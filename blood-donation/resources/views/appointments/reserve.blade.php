<x-app-layout>
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-center text-3xl font-bold mb-6">
          Available Appointments
        </h1>
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
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full" type="submit">
                            {{ $time }}
                        </button>
                        <br>
                        <br>
                    </form>
                    @else
                    <button class="bg-gray-500 text-white font-bold py-2 px-4 rounded w-full" disabled>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.timepicker');
            var instances = M.Timepicker.init(elems, {
                twelveHour:false
            });
        });
    </script>
</x-app-layout>
