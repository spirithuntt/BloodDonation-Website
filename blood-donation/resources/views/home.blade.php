<x-app-layout>
    <div class="p-6 sm:p-10 space-y-6">
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
          <div class="mr-6">
          </div>
          <div class="flex flex-wrap items-start justify-end -mb-3">
            {{-- href to scheduleAnappointment --}}
            <button class="inline-flex px-5 py-3 text-white bg-red-700 hover:bg-red-700 focus:bg-red-700 rounded-md ml-6 mb-3" 
            onclick="window.location='{{ route('donation.create') }}'">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Schedule an Appointment
            </button>
          </div>
        </div>
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                <div class="flex flex-wrap items-start justify-end -mb-3">
                <h1 class="text-2xl font-bold text-gray-900">Last Donations</h1>
                </div>
            </div>
            {{-- table of last donations  --}}
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <div class="flex justify-between items-center px-4 py-3 bg-red-700">
                  <h2 class="text-white font-semibold text-lg">My Donations History</h2>
                  <div class="flex items-center">
                    <div class="relative mr-4">
                      <input type="text" class="w-48 px-4 py-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-gray-500" placeholder="Search...">
                      <button class="absolute top-0 right-0 mt-3 mr-3">
                        <svg class="h-4 w-4 text-gray-500 hover:text-gray-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                      </button>
                    </div>
                    <div>
                      <select class="px-4 py-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-gray-500">
                        <option selected>Filter by Donation type</option>
                        <option value="O+">plasma</option>
                      </select>
                    </div>
                  </div>
                </div>
                <table class="w-full">
                  <thead>
                      <tr class="bg-gray-100 text-gray-500 uppercase tracking-wide text-xs">
                          <th class="text-left py-3 px-4 font-semibold">Donation Id</th>
                          <th class="text-left py-3 px-4 font-semibold">Blood Type</th>
                          <th class="text-left py-3 px-4 font-semibold">Type of Donation</th>
                          <th class="text-left py-3 px-4 font-semibold">Center Name</th>
                          <th class="text-left py-3 px-4 font-semibold">City Name</th>
                          <th class="text-left py-3 px-4 font-semibold">Date</th>
                          <th class="text-left py-3 px-4 font-semibold">Test Results</th>
                      </tr>
                  </thead>
                  <tbody>
                      @if (!empty($donations) && !empty($appointments))
                          @foreach ($donations as $donation)
                              @if (!empty($donation->blood_type) && !empty($donation->donation_type) && !empty($donation->center) && !empty($donation->center->city))
                                      {{-- @if ($appointment->id == $donation->appointment_id) --}}
                                          <tr class="text-gray-700">
                                              <td class="text-left py-3 px-4">{{ $donation->id }}</td>
                                              <td class="text-left py-3 px-4">{{ $donation->blood_type->type }}</td>
                                              <td class="text-left py-3 px-4">{{ $donation->donation_type->type }}</td>
                                              <td class="text-left py-3 px-4">{{ $donation->center->center_name }}</td>
                                              <td class="text-left py-3 px-4">{{ $donation->center->city->city_name }}</td>
                                              <td class="text-left py-3 px-4">{{ $donation->appointment->date }}</td>
                                              {{-- <td class="text-left py-3 px-4">{{ $donation->test_result }}</td> --}}
                                          </tr>
                                      {{-- @endif --}}
                              @endif
                          @endforeach
                      @endif
                  </tbody>
              </table>
                </div>
            </div>
</x-app-layout>