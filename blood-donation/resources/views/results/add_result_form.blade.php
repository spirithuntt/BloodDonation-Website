<x-app-layout>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class= "overflow-hidden">
                    <div class="mr-6 p-4">
                        <h1 class="text-4xl font-semibold mb-2 text-red-700 ">Enter a Result</h1>
                    </div>
                </div>
            </div>
         <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold mb-8 text-gray-700 ">Add Result to the Donation ID : {{$donation->donation_type_id}} </h1>
                    <form method="POST" action="{{route('results.store')}}" class="max-w-3xl mx-auto">
                        @csrf
                        <input type="hidden" name="donation_id" value="{{$donation->id}}">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach ($tests as $test)
                                <div class="bg-white shadow-md rounded-md p-6">
                                    <label for="test_{{$test->id}}" class="block text-sm font-medium text-red-700 mb-2">{{$test->test_name}}</label>
                                    <input type="hidden" name="result_type[{{$test->id}}]" value="{{$test->result_type}}">
                                    @if ($test->result_type == 'number')
                                        <input type="text" name="result_number[{{$test->id}}]" id="test_{{$test->id}}" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required>
                                    @else
                                        <select name="passed[{{$test->id}}]" id="test_{{$test->id}}" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required>
                                            <option value="1">Positive</option>
                                            <option value="0">Negative</option>
                                        </select>
                                    @endif
                                    <p class="text-sm text-gray-500 mt-2">{{$test->criteria}}</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-8 text-center">
                            <button type="submit" class="py-3 px-6 bg-red-700 text-white font-medium rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Save Results</button>
                        </div>
                    </form>
                    
                    
                </div>    
         </div>
         </div>
    </x-app-layout>