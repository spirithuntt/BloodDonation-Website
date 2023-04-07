<x-app-layout>
    <div class="p-6 sm:p-10 space-y-6">
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
                <h1 class="text-4xl font-semibold mb-2 text-red-700">Dashboard</h1>
            </div>
            <div class="flex flex-wrap items-start justify-end -mb-3">
                <button data-modal-toggle data-modal-target="#modalCity"
                    class="inline-flex px-5 py-3 text-white bg-red-700 hover:bg-red-700 focus:bg-red-700 rounded-md ml-6 mb-3"
                    type="button">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>

                    Create new City
                </button>
                <button data-modal-toggle data-modal-target="#modalCenter"
                    class="inline-flex px-5 py-3 text-white bg-red-700 hover:bg-red-700 focus:bg-red-700 rounded-md ml-6 mb-3">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Create new Center
                </button>
                <button data-modal-toggle data-modal-target="#modalTest"
                    class="inline-flex px-5 py-3 text-white bg-red-700 hover:bg-red-700 focus:bg-red-700 rounded-md ml-6 mb-3">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Create new Test
                </button>
                <a href="{{ route('business_hours.index') }}"
                    class="inline-flex px-5 py-3 text-white bg-red-700 hover:bg-red-700 focus:bg-red-700 rounded-md ml-6 mb-3">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    modify working Hours
                </a>
            </div>
        </div>
        <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div>
                    <span class="block text-2xl font-bold">62</span>
                    <span class="block text-gray-500">Students</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <div>
                    <span class="block text-2xl font-bold">6.8</span>
                    <span class="block text-gray-500">Average mark</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                    </svg>
                </div>
                <div>
                    <span class="inline-block text-2xl font-bold">9</span>
                    <span class="inline-block text-xl text-gray-500 font-semibold">(14%)</span>
                    <span class="block text-gray-500">Underperforming students</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div
                    class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div>
                    <span class="block text-2xl font-bold">83%</span>
                    <span class="block text-gray-500">Finished homeworks</span>
                </div>
            </div>
        </section>

    <!-- city modal popoup-->
    <div id="modalCity" class="hidden fixed inset-0 z-10 overflow-y-auto" data-modal-backdrop>
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg text-red-700 font-bold" id="modal-headline">
                                Add City
                            </h3>
                            <div class="mt-2">
                                <form action="{{ route('cities.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                                            City
                                        </label>
                                        <input type="text" name="city_name" id="city"
                                            class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                            placeholder="City">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="region">
                                            Region
                                        </label>
                                        <input type="text" name="region" id="region"
                                            class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                            placeholder="region">
                                    </div>
                                    {{-- buttons --}}
                                    <div class="buttons">
                                        <button type="submit"
                                            class="shadow bg-red-700 hover:bg-red-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                                            Save
                                        </button>
                                        <button type="button"
                                            class="shadow bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                            data-modal-close>
                                            Cancel
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end city modal popoup-->
    <!-- center modal popoup and a select dropdown that has cities fetched from db with getCities method-->
    <div id="modalCenter" class="hidden fixed inset-0 z-10 overflow-y-auto" data-modal-backdrop>
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg text-red-700 font-bold" id="modal-headline">
                                Add Center
                            </h3>
                            <div class="mt-2">
                                <form action="{{ route('centers.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="center">
                                            Center
                                        </label>
                                        <input type="text" name="center_name" id="center"
                                            class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                            placeholder="Center">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                                            Address
                                        </label>
                                        <input type="text" name="address" id="address"
                                            class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                            placeholder="adress">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                            Phone
                                        </label>
                                        <input type="text" name="phone" id="phone"
                                            class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                            placeholder="phone">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                                            City
                                        </label>
                                        @php
                                            $cities = App\Models\City::all();
                                        @endphp
                                        <select name="city_id" id="city"
                                            class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500">
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    {{-- buttons --}}
                                    <div class="buttons">
                                        <button type="submit"
                                            class="shadow bg-red-700 hover:bg-red-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                                            Save
                                        </button>
                                        <button type="button"
                                            class="shadow bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                            data-modal-close>
                                            Cancel
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end center modal popoup-->
    <!-- Test modal popoup-->
    <div id="modalTest" class="hidden fixed inset-0 z-10 overflow-y-auto" data-modal-backdrop>
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg text-red-700 font-bold" id="modal-headline">
                                Add Test
                            </h3>
                            <div class="mt-2">
                                <form action="{{ route('tests.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="test">
                                            Test
                                        </label>
                                        <input type="text" name="test_name" id="test"
                                            class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                            placeholder="Test">
                                    </div>
                                    {{-- criteria --}}
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="criteria">
                                            Criteria
                                        </label>
                                        <input type="text" name="criteria" id="criteria"
                                            class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                            placeholder="criteria">
                                    </div>
                                    {{-- donation_type_id --}}
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2"
                                            for="donation_type_id">
                                            Donation Type
                                        </label>
                                        @php
                                            $donation_types = App\Models\DonationType::all();
                                        @endphp
                                        <select name="donation_type_id" id="donation_type_id"
                                            class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500">
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
                                            class="bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500">
                                            <option value="number">Number</option>
                                            <option value="boolean">Negative or Positive</option>
                                        </select>
                                    </div>

                                    {{-- buttons --}}
                                    <div class="buttons">
                                        <button type="submit"
                                            class="shadow bg-red-700 hover:bg-red-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                                            Save
                                        </button>
                                        <button type="button"
                                            class="shadow bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                            data-modal-close>
                                            Cancel
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- dashboard for centers data  -->
    <div class="flex-grow">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="py-4">
          <h2 class="text-lg font-medium leading-6 text-red-700">Center Data</h2>
      </div>
      <div class="flex flex-col mt-2">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-800">
                                <tr>
                                    <th class="px-6 py-5 text-left text-xs font-medium text-white uppercase tracking-wider"
                                        data-priority="1">Id</th>
                                    <th class="px-6 py-5 text-left text-xs font-medium text-white uppercase tracking-wider"
                                        data-priority="2">Center Name</th>
                                    <th class="px-6 py-5 text-left text-xs font-medium text-white uppercase tracking-wider"
                                        data-priority="3">Address</th>
                                    <th class="px-6 py-5 text-left text-xs font-medium text-white uppercase tracking-wider"
                                        data-priority="4">Phone</th>
                                    <th class="px-6 py-5 text-left text-xs font-medium text-white uppercase tracking-wider"
                                        data-priority="5">City</th>
                                    <th class="px-6 py-5 text-left text-xs font-medium text-white uppercase tracking-wider"
                                        data-priority="6"></th>
                                </tr>
                            </thead>
                            {{-- dropdown button with "Edit" and "Delete" options --}}
                            <tbody>
                                @php
                                    $centers = App\Models\Center::all();
                                @endphp
                                @foreach ($centers as $center)
                                    <tr>
                                        <td class="border-dashed border-t border-gray-200 bg-white">
                                            <span
                                                class="text-gray-700 px-3 py-3 flex items-center">{{ $center->id }}</span>
                                        </td>
                                        <td class="border-dashed border-t border-gray-200 bg-white">
                                            <span
                                                class="text-gray-700 px-3 py-3 flex items-center">{{ $center->center_name }}</span>
                                        </td>
                                        <td class="border-dashed border-t border-gray-200 bg-white">
                                            <span
                                                class="text-gray-700 px-3 py-3 flex items-center">{{ $center->address }}</span>
                                        </td>
                                        <td class="border-dashed border-t border-gray-200 bg-white">
                                            <span
                                                class="text-gray-700 px-3 py-3 flex items-center">{{ $center->phone }}</span>
                                        </td>
                                        <td class="border-dashed border-t border-gray-200 bg-white">
                                            <span
                                                class="text-gray-700 px-3 py-3 flex items-center">{{ $center->city->city_name }}</span>
                                        </td>
                                        <td class="border-dashed border-t border-gray-200 bg-white">

                                            <button id="dropdownMenuIconHorizontalButton"
                                                data-dropdown-toggle="dropdownDotsCities"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                                                type="button">
                                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <!-- Dropdown menu -->
                                            <div id="dropdownDotsCities"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                                <ul class="py-2 text-sm text-gray-700 "
                                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                                    <li>
                                                        {{-- edit and delete buttons here and fa icons --}}
                                                        <a href="{{ route('cities.edit', $center->id) }}"
                                                            class="flex items-center px-4 py-2 hover:bg-gray-100">
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('cities.destroy', $center->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="flex items-center px-4 py-2 hover:bg-gray-100">
                                                                <span>Delete</span>
                                                            </button>
                                                        </form>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
  
  {{-- Create new city --}}
  <div>
    @livewire('show-cities')
  </div>

{{-- Donation data table --}}
<div class="flex-grow">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="py-4">
        <h2 class="text-lg font-medium leading-6 text-red-700">Center Data</h2>
    </div>
    <div class="flex flex-col mt-2">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                          <thead class="bg-gray-800">
                            <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                first Name
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Last Name
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
                            @php
                            $donations = App\Models\Donation::all();
                            @endphp
                            @foreach ($donations as $donation)
                            <tr>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->user->name}}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->user->last_name }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->center->center_name }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $center->city->city_name }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->blood_type->type }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->donation_type->type }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{ $donation->appointment->date }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                @if ($donation->status == 0)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                  Pending
                                </span>
                                @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                  Done
                                </span>
                                @endif
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                {{-- {{ route('donation.test', $donation->id) }} --}}
                                <a href=""
                                  class="px-2 inline-flex text-xs leading-5 font-semibold rounded bg-blue-100 text-blue-800">
                                  Add test result
                                </a>
                              </td>
                                        {{-- drop down icon has edit and delete --}}
                                        <td
                                            class="px-3 py-3 text-sm font-medium text-gray-900 bg-white flex flex-row justify-center space-x-2">
                                            <button id="dropdownMenuIconHorizontalButton"
                                                data-dropdown-toggle="dropdownDotsCenters"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                                                type="button">
                                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <!-- Dropdown menu -->
                                            <div id="dropdownDotsCenters"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                                <ul class="py-2 text-sm text-gray-700 "
                                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                                    <li>
                                                        {{-- edit and delete buttons here and fa icons --}}
                                                        <a href="{{ route('centers.edit', $center->id) }}"
                                                            class="flex items-center px-4 py-2 hover:bg-gray-100">
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('centers.destroy', $center->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="flex items-center px-4 py-2 hover:bg-gray-100">
                                                                <span>Delete</span>
                                                            </button>
                                                        </form>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

                          
</x-app-layout>
