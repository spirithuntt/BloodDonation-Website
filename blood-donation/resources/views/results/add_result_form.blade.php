<x-app-layout>
    <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class= "overflow-hidden">
                    <div class="mr-6 p-4">
                        <h1 class="text-4xl font-semibold mb-2 text-red-700 ">Create a Result</h1>
                    </div>
                </div>
            </div>
         <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold mb-8 text-gray-800 ">Enter the Results of the Tests</h1>
                        <h1>Add Result to Donation {{$donation->donation_type_id}}</h1>
                        <form method="POST" action="{{route('results.store')}}">
                            @csrf
                            <input type="hidden" name="donation_id" value="{{$donation->id}}">
                            @foreach ($tests as $test)
                                <div class="form-group">
                                    <label for="test_{{$test->id}}">{{$test->test_name}}</label>
                                    <input type="text" name="results[{{$test->id}}]" id="test_{{$test->id}}" class="form-control" required>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                </div>    
         </div>
         </div>
    </main>
    </x-app-layout>