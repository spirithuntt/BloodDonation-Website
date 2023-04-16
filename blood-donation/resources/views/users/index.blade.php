<x-app-layout>
    <!-- Table -->
    <div class="flex-grow">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-4">
                <h1 class="text-4xl font-semibold text-red-700">All Users</h1>
            </div>
            <div class="flex justify-end mb-4">
                <div class="relative">
                    <input type="search" id="userSearchInput" wire:model.debounce.500ms="search"
                        class="border-gray-300 shadow-sm focus:ring-red-700 focus:border-red-700 block w-full pr-10 sm:text-sm rounded-md"
                        placeholder="Search Donations...">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <svg class="h-4 w-4 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M22 22l-6-6M13 10a7 7 0 1 1 0-4 7 7 0 0 1 0 4z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-col mt-2">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table id="UserTable" class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        <th scope="col" width="%1"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-white uppercase ">
                                            First Name
                                        </th>
                                        <th scope="col" width="%1"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-white uppercase">
                                            Last Name
                                        </th>
                                        <th scope="col" width="%1"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-white uppercase">
                                            Email
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-white uppercase">
                                            Phone
                                        </th>

                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-center text-white uppercase">
                                            Joined At
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-white uppercase">
                                            Action
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-white uppercase">
                                            Role
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($users as $user)
                                        <tr class="{{ $loop->even ? 'bg-gray-50' : '' }}">
                                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                                                {{ $user->name }}
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                                                {{ $user->last_name }}
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap">
                                                {{ $user->email }}
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                                                {{ $user->phone }}
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    {{ $user->created_at->diffForHumans() }}
                                                </span>
                                            </td>
                                            {{-- role --}}
                                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                                                @foreach ($user->roles as $role)
                                                    <span>

                                                        @if ($role->name == 'admin')
                                                            <span
                                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                                {{ $role->name }}
                                                            </span>
                                                        @elseif($role->name == 'user')
                                                            <span
                                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                                {{ $role->name }}
                                                            </span>
                                                        @elseif($role->name == 'nurse')
                                                            <span
                                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                                {{ $role->name }}
                                                            </span>
                                                        @endif

                                                    </span>
                                                @endforeach
                                            </td>
                                            {{-- action --}}

                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap text-center">
                                                <button type="button" onclick="editeuser({{ $user->id }})"
                                                    name="edite" data-drawer-target="drawer-user"
                                                    data-drawer-show="drawer-user" aria-controls="drawer-user"
                                                    data-drawer-placement="right">
                                                    <svg class="h-6 w-6 text-blue-500"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="h-6 w-6" x-tooltip="tooltip">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                    </svg>
                                                </button>
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

    {{-- drawer --}}
    <div id="drawer-user" aria-hidden="true"
        class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-gray-100"
        tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase">Edit
            User</h5>
        <button type="button" data-drawer-dismiss="drawer-user" aria-controls="drawer-user"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>


        <form action="" method="POST" id="user_form">
            @csrf
            @method('PUT')
            <div class="space-y-4">
                <input type="hidden" id="user_id" value="">
                <div>
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900">{{ __('Name') }}</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                        placeholder="{{ __('Name') }}" required="">
                </div>
                <div>
                    <label for="last_name"
                        class="block mb-2 text-sm font-medium text-gray-900">{{ __('last Name') }}</label>
                    <input type="text" name="last_name" id="last_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                        placeholder="{{ __('last Name') }}" required="">
                </div>

                <div>
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900">{{ __('Email') }}</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                        placeholder="{{ __('Email') }}" required="">
                </div>
                <div>
                    <label for="phone"
                        class="block mb-2 text-sm font-medium text-gray-900">{{ __('Phone Number') }}</label>
                    <input type="phone" name="phone" id="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                        placeholder="{{ __('Phone Number') }}" required="">
                </div>
                <div>
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                    <select id="role" name="role"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                        <option selected disabled>Select Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" flex justify-center w-full pb-4 space-x-4 ">
                    <button type="submit" onclick="changeFormAction('PUT')"
                        class="text-white w-full justify-center bg-gray-800 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Update User
                    </button>
                    <button type="submit" onclick="changeFormAction('DELETE')"
                        class="text-white w-full justify-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        Delete User
                    </button>
                </div>
            </div>
        </form>
    </div>
    </div>

    {{-- include jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- include bootstrap --}}
    <script>
        // get user using ajax
        function editeuser(id) {
            $.ajax({
                url: '/users/' + id + '/edit',
                type: 'GET',
                dataType: 'json',
                complete: function(data) {
                    console.log(data.responseJSON);
                },
                success: function(data) {
                    // change form action #form-delete
                    $('#form-delete').attr('action', '/users/' + data.user.id);

                    $('#user_id').val(data.user.id);
                    $('#user_form').attr('action', '/users/' + data.user.id);
                    $('#name').val(data.user.name);
                    $('#last_name').val(data.user.last_name);
                    $('#email').val(data.user.email);
                    $('#phone').val(data.user.phone);
                    $('#role').val(data.role);

                }
            });
        }

        function changeFormAction(method) {
            $("input[name='_method']").val(method);
        }
    </script>
    <script>
        // JavaScript code for the User table search input
        function handleUserSearch() {
            // Get the input field and the table rows
            const searchInputUser = document.getElementById('userSearchInput');
            const tableRowsUser = document.querySelectorAll('#UserTable tbody tr');

            // Convert the search input value to lowercase
            const searchTermUser = searchInputUser.value.toLowerCase();

            // Loop through all the table rows
            tableRowsUser.forEach(row => {
                // Get the row's text content and convert to lowercase
                const rowTextUser = row.textContent.toLowerCase();

                // If the row text contains the search term, show the row
                // Otherwise, hide the row
                if (rowTextUser.includes(searchTermUser)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
        const searchInputUser = document.getElementById('userSearchInput');
searchInputUser.addEventListener('input', handleUserSearch);
    </script>
</x-app-layout>
