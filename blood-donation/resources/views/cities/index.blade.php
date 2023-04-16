<x-app-layout>
    <div class="p-6 md:p-12 space-y-6 container mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
            <h1 class="text-4xl font-semibold text-red-700">Red Crescent Morocco Cities</h1>
            <button onclick="add()" data-modal-toggle="modalCity" data-modal-target="modalCity"
                class="inline-flex px-5 py-3 text-white bg-red-700 hover:bg-red-700 focus:bg-red-700 rounded-md ml-6 mb-3">
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Create new City
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
                        <h1 id="title_add_city" class="text-red-700">Add City</h1>
                        <h1 id="title_edit_city" class="text-red-700">Edit City</h1>
                    <form id="city_form" action="{{ route('cities.store') }}" method="POST" data-parsley-validate>
                        @csrf
                        @method('PUT')
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function edit(id) {
                $('#title_add_city').hide();
                $('#title_edit_city').show();
                $.ajax({
                    url: '/cities/' + id+'/edit',
                    type: 'GET',
                    dataType: 'json',
                    complete: function(data) {
                        console.log(data.responseJSON);
                    },
                    success: function(data) {
                        // change form action #form-delete
                        $('#city_form').attr('action', '/cities/' + data.id);
                        $("input[name='_method']").val("PUT");
    
                        // fill form
                        $('#id').val(data.id);
                        $('#city').val(data.city_name);
                        $('#region').val(data.region);    
                    }
                });
            }
            
            function add() {
                $('#title_add_city').show();
                $('#title_edit_city').hide();
                // clear form
                $('#city').val('');
                $('#region').val('');
                $('#city_form').attr('action', '/cities');
                $("input[name='_method']").val("POST");
            }
    
        </script>
</x-app-layout>