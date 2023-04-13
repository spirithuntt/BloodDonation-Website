<x-app-layout>
    <div class="p-6 md:p-12 space-y-6 container mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
            <h1 class="text-4xl font-semibold text-red-700">Red Crescent Morocco Cities</h1>
            <button data-modal-toggle="modalCity" data-modal-target="modalCity"
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
        <div id="modalCity" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <form action="{{ route('cities.store') }}" method="POST" data-parsley-validate>
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                                City
                            </label>
                            <input type="text" name="city_name" id="city"
                                class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                placeholder="City" data-parsley-required data-parsley-trigger="keyup">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="region">
                                Region
                            </label>
                            <input type="text" name="region" id="region"
                                class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                placeholder="region" data-parsley-required data-parsley-trigger="keyup">
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
        <!-- end city modal popoup-->
</x-app-layout>