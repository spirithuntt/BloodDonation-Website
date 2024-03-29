<x-app-layout>
    <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class= "overflow-hidden">
                    <div class="mr-6 p-4">
                        <h1 class="text-4xl font-semibold mb-2 text-red-700 ">Update Doantion Info</h1>
                    </div>
                </div>
            </div>
         <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold mb-8 text-gray-800 ">Update Donor's Personal Information</h1>
        
                    <form action="{{ route('donation.update', $donation->id) }}" method="POST" data-parsley-validate>
                        @csrf
                        @method('PUT')
                        {{-- donation status --}}
                        <div class="mt-6">
                                {{-- select button --}}
                                <label for="select" class="block text-sm font-medium text-gray-600 mb-2">Donation Status</label>
                                <select id="select" name="is_donated" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                                    <option value="0" {{ $donation->is_donated == 0 ? 'selected' : '' }}>Pending</option>
                                    <option value="1" {{ $donation->is_donated == 1 ? 'selected' : '' }}>Donated</option>
                                </select>

                        </div>
                        {{--  name --}}
                        <div class="grid grid-cols-2 gap-6 mt-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-600 mb-2">First Name</label>
                                <input id="first_name" name="name" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" value={{$user->name}} data-parsley-required data-parsley-trigger="keyup">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-600 mb-2">Last Name</label>
                                <input id="last_name" name="last_name" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" value={{$user->last_name}} data-parsley-required data-parsley-trigger="keyup">
                            </div>
                        </div>
                        {{-- ID_number --}}
                        <div class="mt-6">
                            <label for="id_number" class="block text-sm font-medium text-gray-600 mb-2">ID Card's Number</label>
                            <input id="id_number" name="ID_number" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" value={{$user->ID_number}} data-parsley-required data-parsley-trigger="keyup" minlength="4">
                        </div>
                        
                        {{-- phone --}}
                        <div class="mt-6">
                            <label for="phone" class="block text-sm font-medium text-gray-600 mb-2">Phone</label>
                            <input id="phone" name="phone" type="text" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" value={{$user->phone}} data-parsley-required data-parsley-trigger="keyup" type="number" minlength="10">
                        </div>
                        {{-- blood type --}}
                        <div class="mt-6">
                            <label for="blood_type" class="block text-sm font-medium text-gray-600 mb-2">Blood Type</label>
                            <select id="blood_type" name="blood_type_id" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                                @foreach ($bloodTypes as $bloodType)
                                    <option value="{{ $bloodType->id }}" {{ $bloodType->id == $donation->blood_type_id ? 'selected' : '' }}>{{ $bloodType->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- donation type --}}
                        @foreach ($donationTypes as $donationType)
                        @endforeach
                        <div class="mt-6">
                            <label for="donation_type" class="block text-sm font-medium text-gray-600 mb-2">Blood Donation Type</label>
                            <select id="donation_type" name="donation_type_id" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                                @foreach ($donationTypes as $donationType)
                                    <option value="{{ $donationType->id }}" {{ $donationType->id == $donation->donation_type_id ? 'selected' : '' }}>{{ $donationType->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- donation center --}}
                    <h1 class="text-3xl font-bold mb-8 mt-8 text-gray-800">Select a Donation Center and City Location</h1>
                    
                    <div class="grid grid-cols-2 gap-6">
    
                        {{-- city location --}}
        
                        <div>
                            <label for="city_location" class="block text-sm font-medium text-gray-600 mb-2">City Location</label>
                            <select id="city_location" name="city_id" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" data-url="{{ url('api/fetch-donation-centers') }}" data-token="{{ csrf_token() }}" data-parsley-required data-parsley-trigger="keyup">
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->city_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="">
                            <label for="donation_center" class="block text-sm font-medium text-gray-600 mb-2">Donation Center</label>
                            <select id="donation_center" name="center_id" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-gray-00 focus:border-red-500 sm:text-sm" data-parsley-required data-parsley-trigger="keyup">
                                @foreach ($centers as $center)
                                    <option value="{{ $center->id }}">{{ $center->center_name}}</option>
                                @endforeach
                            </select>
                        </div>
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
    </main>
    </x-app-layout>