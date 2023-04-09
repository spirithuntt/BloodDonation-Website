<div>
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
