<x-app-layout>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class=" sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

            {{-- This is the modal dialog --}}
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d0021b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>                        </div>

                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modalTitle">Confirm Appointment
                                Update</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    You already have an appointment for this donation.
                                    Do you want to update it to {{ $date }} at {{ $time }}?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('appointments.update', $existingAppointmentId) }}"
                method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="date" value="{{ $date }}">
                <input type="hidden" name="time" value="{{ $time }}">
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit" id="confirmModalConfirmBtn" type="button"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Confirm
                    </button>
                    {{-- cancel button that redirects to the appointments page --}}
                    <a href="{{ route('reserve') }}" id="confirmModalCancelBtn" type="button"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </a>

                </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>

{{-- <x-app-layout>
    <div class="fixed inset-0 z-10 overflow-y-auto" >
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
          </div>
          <span class=" sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
          <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h2 class="text-2xl font-bold mb-6">Confirm Appointment Update</h2>
    
                    <p class="mb-6">You already have an appointment at {{ $existingAppointmentTime }} for this donation. Do you want to update it to {{ $date }} at {{ $time }}?</p>
    
                    <form action="{{ route('appointments.update', $existingAppointmentId) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="date" value="{{ $date }}">
                        <input type="hidden" name="time" value="{{ $time }}">
    
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update Appointment
                            </button>
    
                            <a href="#" class="text-gray-500 hover:text-gray-700">Cancel</a>
                        </div>
                </div>
              </div>
            </div>
      </div>
      </div>
      </div>
      </div>
    </x-app-layout> --}}
