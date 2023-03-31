<x-app-layout>
<main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class= "overflow-hidden">
                <div class="mr-6 p-4">
                    <h1 class="text-4xl font-semibold mb-2 text-red-700 ">Schedule Appointment</h1>
                </div>
            </div>
        </div>
     <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold mb-8 text-gray-800 ">Enter Your Personal Information</h1>
    
                <form
                    action="{{ route('donation.store') }}">
                    @csrf
    
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-600 mb-2">First Name</label>
                            <input id="first_name" name="name" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" value={{$user->name}}>
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-600 mb-2">Last Name</label>
                            <input id="last_name" name="last_name" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" value={{$user->last_name}}>
                        </div>
                    </div>
                    {{-- ID_number --}}
                    <div class="mt-6">
                        <label for="id_number" class="block text-sm font-medium text-gray-600 mb-2">ID Card's Number</label>
                        <input id="id_number" name="ID_number" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" value={{$user->ID_number}}>
                    </div>
                    {{-- phone --}}
                    <div class="mt-6">
                        <label for="phone" class="block text-sm font-medium text-gray-600 mb-2">Phone</label>
                        <input id="phone" name="phone" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" value={{$user->phone}}>
                    </div>
                    <div class="mt-6">
                        <label for="blood_type" class="block text-sm font-medium text-gray-600 mb-2">Blood Type</label>
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
                <h1 class="text-3xl font-bold mb-8 mt-8 text-gray-800">Select a Donation Center and City Location</h1>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="donation_center" class="block text-sm font-medium text-gray-600 mb-2">Donation Center</label>
                        <select id="donation_center" name="donation_center" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-gray-00 focus:border-red-500 sm:text-sm">
                            <option value="">Select a donation center</option>
                            @foreach ($centers as $center)
                                <option value="{{ $center->center_id }}">{{ $center->center_name }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div>
                        <label for="city_location" class="block text-sm font-medium text-gray-600 mb-2">City Location</label>
                        <select id="city_location" name="city_location" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                            <option value="">Select a city location</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                        <h1 class="text-3xl font-bold mb-8 mt-8 text-gray-800">Choose a Slot Date/Time</h1>
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label for="slot_date" class="block text-sm font-medium text-gray-600 mb-2">Date</label>
                                    <input id="slot_date" name="slot_date" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                                </div>
                                <div>
                                    <label for="slot_time" class="block text-sm font-medium text-gray-600 mb-2">Time</label>
                                    <select id="slot_time" name="slot_time" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                                        <option value="">Select a time</option>
        
                                    </select>
                                </div>
                            </div>
            

                        </form>

                <div class="mt-8">
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-white bg-red-700 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Save Donor Info
                    </button>
                </div>
            </div>    
     </div>
     </div>
</main>
</x-app-layout>