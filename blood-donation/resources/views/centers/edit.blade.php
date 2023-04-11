<x-app-layout>
        <div class="container">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                  <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                  <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                      <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg text-red-700 font-bold" id="modal-headline">
                          Add Center
                        </h3>
                        <div class="mt-2">
                          <form action="{{ route('centers.update', $center->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="center">
                                Center
                              </label>
                              <input type="text" name="center_name" id="center" class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Center" value="{{$center->center_name}}">
                            </div>
                            <div class="mb-4">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                                Address
                              </label>
                              <input type="text" name="address" id="address" class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500" placeholder="address" value="{{$center->address}}">
                            </div>
                            <div class="mb-4">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                Phone
                              </label>
                              <input type="text" name="phone" id="phone" class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500" placeholder="phone" value="{{$center->phone}}">
                            </div>
                            <div class="mb-4">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                                City
                              </label>
                              <select name="city_id" id="city" class="bg-gray-200  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500">
                                  <option value="{{ $center->city->id }}">{{ $center->city->city_name}}</option>
                              </select>
                              
                            </div>
                          {{-- buttons --}}
                          <div class="buttons">
                            <button type="submit" class="shadow bg-red-700 hover:bg-red-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                              Save
                            </button>
                            <button type="button" class="shadow bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" data-modal-close>
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
    </x-app-layout>