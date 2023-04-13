<x-app-layout>
    <div class="p-6 md:p-12 space-y-6 container mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
            <h1 class="text-4xl font-semibold text-red-700">Red Crescent Morocco Center</h1>
            <button data-modal-toggle="modalCenter" data-modal-target="modalCenter"
            class="inline-flex px-5 py-3 text-white bg-red-700 hover:bg-red-700 focus:bg-red-700 rounded-md ml-6 mb-3">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Create new Center
        </button>
        </div>
        
        <div>
            @livewire('show-centers')
        </div>
  {{-- efuzwuvb --}}
    </div>
    

        <!-- center modal popoup and a select dropdown that has cities fetched from db with getCities method-->
        <div id="modalCenter" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <form action="{{ route('centers.store') }}" method="POST" data-parsley-validate>
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="center">
                                Center
                            </label>
                            <input type="text" name="center_name" id="center"
                                class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                placeholder="Center" data-parsley-required data-parsley-trigger="keyup">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                                Address
                            </label>
                            <input type="text" name="address" id="address"
                                class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                placeholder="adress" data-parsley-required data-parsley-trigger="keyup">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                Phone
                            </label>
                            <input type="text" name="phone" id="phone"
                                class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500"
                                placeholder="phone" data-parsley-required data-parsley-trigger="keyup">
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
    <!-- end center modal popoup-->
    
</x-app-layout>