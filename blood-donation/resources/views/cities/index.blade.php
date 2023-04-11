<x-app-layout>
    <div class="p-6 md:p-12 space-y-6 container mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
            <h1 class="text-4xl font-semibold text-red-700">Red Crescent Morocco Cities</h1>
            <button data-modal-toggle data-modal-target="#modalCity"
                class="inline-flex items-center px-5 py-3 text-white bg-red-700 hover:bg-red-800 focus:bg-red-800 rounded-md"
                type="button">
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="flex-shrink-0 h-6 w-6 text-white mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                <span>Create new City</span>
            </button>
        </div>
        
        {{-- Create new city --}}
        <div>
            @livewire('show-cities')
        </div>
    </div>
    

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
</x-app-layout>