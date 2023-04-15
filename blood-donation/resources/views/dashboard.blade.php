<x-app-layout>
    <div class="p-6 sm:p-10 space-y-6">
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
                <h1 class="text-4xl font-semibold mb-2 text-red-700">Dashboard</h1>
            </div>
            
            <div class="flex flex-wrap items-start justify-end -mb-3">
                <button data-modal-target="popup-modal-test" data-modal-toggle="popup-modal-test"
                    class="inline-flex px-5 py-3 text-white bg-red-700 hover:bg-red-500 focus:bg-red-700 rounded-md ml-6 mb-3">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    Create new Test
                </button>
                <a href="{{ route('business_hours.index') }}"
                    class="inline-flex px-5 py-3 text-white bg-red-700 hover:bg-red-500 focus:bg-red-700 rounded-md ml-6 mb-3">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    modify working Hours
                </a>
            </div>
        </div>
        <div class="flex-grow">
        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#CA8A05" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <div>
                    <span class="block text-2xl font-bold">{{$donorsCount}}</span>
                    <span class="block text-gray-500">Donors</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#15A34A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>                </div>
                <div>
                    <span class="block text-2xl font-bold">{{$doneDonationsCount}}</span>
                    <span class="block text-gray-500">Done Donations</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg>                </div>
                <div>
                    <span class="inline-block text-2xl font-bold">{{$pendingDonationsCount}}</span>
                    <span class="block text-gray-500">Pending</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="10" r="3"/><path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z"/></svg>
                </div>
                <div>
                    <span class="block text-2xl font-bold">{{$centersCount}}</span>
                    <span class="block text-gray-500">All Our Centers</span>
                </div>
            </div>
        </div>
    </div>




  {{-- tet popup modal --}}
  <div id="popup-modal-test" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <form action="{{ route('tests.store') }}" method="POST" data-parsley-validate id="form">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="test">Test Name</label>
                    <input type="text" name="test_name" id="test" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-md focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Enter test name" required data-parsley-required data-parsley-trigger="keyup">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="criteria">Criteria</label>
                    <input type="text" name="criteria" id="criteria" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-md focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Enter criteria" required data-parsley-required data-parsley-trigger="keyup">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                        for="donation_type_id">
                        Donation Type
                    </label>
                    @php
                        $donation_types = App\Models\DonationType::all();
                    @endphp
                    <select name="donation_type_id" id="donation_type_id"
                        class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500" required>
                        @foreach ($donation_types as $donation_type)
                            <option value="{{ $donation_type->id }}">{{ $donation_type->type }}
                            </option>
                        @endforeach
                    </select>
                </div>
                {{-- result_type_id --}}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                        for="result_type_id">
                        Result Type
                    </label>
                    <select name="result_type" id="result_type_id"
                        class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500">
                        <option value="1">Positive</option>
                        <option value="0">Negative</option>
                    </select>
                </div>
                {{-- buttons --}}
                <div class="flex justify-end">
                    <button type="button"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                        data-modal-close="popup-modal">
                        Cancel
                    </button>
                    <button type="submit"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>




{{-- Donation data table --}}
<div class="flex-grow">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="py-4">
        <h2 class="text-lg font-medium leading-6 text-red-700">Donation Data</h2>
    </div>
    <div class="flex justify-end mb-4">
        <div class="relative">
            <input type="search" id="dashboardSearchInput"
                   wire:model.debounce.500ms="search"
                   class="border-gray-300 shadow-sm focus:ring-red-700 focus:border-red-700 block w-full pr-10 sm:text-sm rounded-md"
                   placeholder="Search Donations...">
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <svg class="h-4 w-4 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M22 22l-6-6M13 10a7 7 0 1 1 0-4 7 7 0 0 1 0 4z" />
                </svg>
            </div>
        </div>
    </div>
    <div class="flex flex-col mt-2">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200" id="dashboardTable">
                          <thead class="bg-gray-800">
                            <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    ID
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                first Name
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Last Name
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Phone Number
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    ID Card
                                </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Center
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                City
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Blood type
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Donation type
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Donation date
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Donation status
                              </th>
                              {{-- test result --}}
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Test result
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Action
                              </th>
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                            {{-- @dd($donations) --}}
                            @foreach ($donations as $donation)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                    {{ $donation->id }}
                                </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->user->name}}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->user->last_name }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->user->phone }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                    {{ $donation->user->ID_number }}
                                </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->center->center_name }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->center->city->city_name }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->blood_type->type}}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->donation_type->type }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->date }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                @if ($donation->is_donated == 0)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                  Pending
                                </span>
                                @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Donated
                                </span>
                                @endif
                              </td>
                              @foreach ($results as $result)
                              @if ($result->donation_id == $donation->id || $result == null)
                                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                    <a href="{{ route('results.pdf', ['donation_id' => $donation->id]) }}"
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded bg-pink-100 text-pink-700">
                                        View test result
                                      </a>
                                  </td>
                                  @break
                              @endif
                          @endforeach
                          {{-- The isset() function is used to check if $result is defined before checking its properties, to avoid a 
                          "Trying to get property 'donation_id' of non-object" error. --}}
                          @if (!isset($result) || $result->donation_id != $donation->id)
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                <a href="{{ route('donations.add_result_form', ['donation' => $donation->id]) }}"
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded bg-blue-100 text-blue-800">
                                    Add test result
                                  </a>
                              </td>
                          @endif
                                

                              <td class="px-3 py-3 text-sm font-medium text-gray-900 bg-white">
                                <button id="dropdownMenuIconHorizontalButton"
                                data-dropdown-toggle="dropdownDots_{{ $donation->id }}"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                                type="button">
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            </svg>
                        </button>
                        
                                <div id="dropdownDots_{{ $donation->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="{{ route('donation.edit', $donation->id) }}"
                                                class="flex items-center px-4 py-2 hover:bg-gray-100">
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('donation.destroy', $donation->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="flex items-center px-4 py-2 hover:bg-gray-100">
                                                    <span>Delete</span>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                                @endforeach
                            </tr>
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</x-app-layout>
