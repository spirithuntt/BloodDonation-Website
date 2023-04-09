<div>
       {{-- city data --}}
       <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="pt-6 mt-4">
            <h2 class="text-lg font-medium leading-6 text-red-700">City Data</h2>
        </div>
        {{-- Search Bar --}}
    <div class="flex justify-end mb-4">
        <div class="relative">
            <input type="search"
                   wire:model.debounce.500ms="search"
                   class="border-gray-300 shadow-sm focus:ring-red-700 focus:border-red-700 block w-full pr-10 sm:text-sm rounded-md"
                   placeholder="Search cities...">
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <svg class="h-4 w-4 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M22 22l-6-6M13 10a7 7 0 1 1 0-4 7 7 0 0 1 0 4z" />
                </svg>
            </div>
        </div>
    </div>
        <div class="flex flex-col mt-2">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-4 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-800">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        ID</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        City</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Region</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit/Delete</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($cities as $city)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                            {{ $city->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                            {{ $city->city_name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-white">
                                            {{ $city->region }}</td>
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
                                                        <a href="{{ route('cities.edit', $city->id) }}"
                                                            class="flex items-center px-4 py-2 hover:bg-gray-100">
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('cities.destroy', $city->id) }}"
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
                        <div class="flex justify-center">
                            {{ $cities->links() }}
                          </div>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
