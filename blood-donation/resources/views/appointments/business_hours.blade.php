<x-app-layout>
    <div class="min-w-screen flex items-center justify-center px-4 py-12">
        <div class="w-full bg-white rounded-lg p-8 shadow-lg">
            <div class="bg-red-700 text-white py-4 mb-10">
                <h1 class="text-center text-2xl font-bold">Donation Hours</h1>
            </div>
            <form action="{{route('business_hours.update')}}" method="post" class="w-full max-w-3xl mx-auto">
                @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($businessHours as $businessHour)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="w-full md:w-1/4 px-4">
                        <h4 class="text-xl font-bold mb-4 text-red-700">
                            {{$businessHour->day}}
                        </h4>
                    </div>
                    <input type="hidden" name="data[{{$businessHour->day}}][day]" value="{{$businessHour->day}}">
                    <div class="w-full md:w-1/4 p-1">
                        <input type="text" class="timepicker block w-full rounded-md border-2 border-red-500 focus:border-red-700 focus:ring focus:ring-red-200 focus:ring-opacity-50" value="{{$businessHour->from}}" name="data[{{$businessHour->day}}][from]" placeholder="From">
                    </div>

                    <div class="w-full md:w-1/6 p-1">
                        <input type="text" class="timepicker block w-full rounded-md border-2 border-red-500 focus:border-red-700 focus:ring focus:ring-red-200 focus:ring-opacity-50" value="{{$businessHour->to}}" name="data[{{$businessHour->day}}][to]" placeholder="To">
                    </div>
                    <div class="w-full md:w-1/12 p-1">
                        <input type="number" name="data[{{$businessHour->day}}][step]" value="{{$businessHour->step}}" placeholder="Step" class="block w-full rounded-md border-2 border-red-500 focus:border-red-700 focus:ring focus:ring-red-200 focus:ring-opacity-50">
                    </div>

                    <div class="w-full md:w-1/4 p-1">
                        <p>
                            <label class="flex items-center space-x-2">
                                <input value="true" name="data[{{$businessHour->day}}][off]" class="filled-in" type="checkbox" @checked($businessHour->off) />
                                <span class="ml-2 text-red-500">OFF</span>
                            </label>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <button class="inline-flex px-5 py-3 text-white bg-red-700 hover:bg-red-500 focus:bg-red-700 rounded-md ml-3 mb-10" type="submit">Save</button>
            </div>
        </form>
        </div>
    </div>
    </div>
</x-app-layout>
