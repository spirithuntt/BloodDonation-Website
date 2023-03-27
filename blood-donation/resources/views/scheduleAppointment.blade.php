<x-app-layout>
    <main>
        {{-- schedule appointment title --}}
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class= "overflow-hidden">
                <div class="p-6">
                    <h1 class="text-3xl font-bold mb-8">Schedule Appointment</h1>
                </div>
            </div>
        {{-- chose donation center and city location --}}  
            
     <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">             
                    <h1 class="text-3xl font-bold mb-8">Select a Donation Center and City Location</h1>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="donation_center" class="block text-sm font-medium text-gray-700 mb-2">Donation Center</label>
                            <select id="donation_center" name="donation_center" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                                <option value="">Select a donation center</option>
                                @php
                                    $centers = App\Models\Center::all();
                                @endphp
                                @foreach ($centers as $center)
                                    <option value="{{ $center->center_id }}">{{ $center->center_name }}</option>
                                @endforeach
                            </select>
                        </div>
        
                        <div>
                            <label for="city_location" class="block text-sm font-medium text-gray-700 mb-2">City Location</label>
                            <select id="city_location" name="city_location" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                                <option value="">Select a city location</option>
                                @php
                                    $cityLocations = App\Models\City::all();
                                @endphp
                                @foreach ($cityLocations as $city)
                                    <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

    {{-- chose date/time slots--}}
    {{-- <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold mb-8">Choose a Slot Date/Time</h1>
    
                <form action="{{ route('save-donor-slot') }}" method="POST">
                    @csrf
    
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="slot_date" class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                            <input id="slot_date" name="slot_date" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="slot_time" class="block text-sm font-medium text-gray-700 mb-2">Time</label>
                            <select id="slot_time" name="slot_time" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                                <option value="">Select a time</option>
                                @foreach ($available_times as $time)
                                    <option value="{{ $time }}">{{ $time }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
    
                    <div class="mt-8">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Save Slot
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr('#slot_date', {
                enableTime: false,
                dateFormat: "Y-m-d",
                minDate: "today",
                maxDate: new Date().fp_incr(30), // allow booking for the next 30 days
                disable: {!! json_encode($booked_dates) !!} // pass an array of booked dates to disable them
            });
    
            $('#slot_date').on('change', function() {
                var selected_date = $(this).val();
    
                // make an AJAX request to fetch available times for the selected date
                $.ajax({
                    url: '{{ route('get-available-times') }}',
                    data: { date: selected_date },
                    success: function(response) {
                        var options = '<option value="">Select a time</option>';
                        for (var i = 0; i < response.length; i++) {
                            options += '<option value="' + response[i] + '">' + response[i] + '</option>';
                        }
                        $('#slot_time').html(options);
                    },
                    error: function() {
                        console.log('Error fetching available times.');
                    }
                });
            });
        </script>
    @endpush
    
    @endpush
     --}}
    
     <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold mb-8">Enter Your Personal Information</h1>
    
                {{-- <form action="{{ route('save-donor-info') }}" method="POST"> --}}
                    @csrf
    
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                            <input id="first_name" name="first_name" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                            <input id="last_name" name="last_name" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                        </div>
                    </div>
    
                    <div class="mt-6">
                        <label for="blood_type" class="block text-sm font-medium text-gray-700 mb-2">Blood Type</label>
                        <select id="blood_type" name="blood_type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                            <option value="">Select a blood type</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
    
                    <div class="mt-6">
                        <label for="id_card" class="block text-sm font-medium text-gray-700 mb-2">ID Card</label>
                        <input id="id_card" name="id_card" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                    </div>
    
                    <div class="mt-6">
                        <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input id="phone_number" name="phone_number" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                    </div>
    
                    <div class="mt-8">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-white bg-red-700 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Save Donor Info
                        </button>
                    </div>
                </form>
            </div>
        </div>
     </div>

</x-app-layout>