<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    {{-- tailwind link--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css">
    {{-- font awesome link--}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>
</head>
<body class="font-sans">
    <div class="container mx-auto mt-8">
      <div class="text-center">
       <img class="mx-auto"src="{{ public_path('assets/img/logo.png') }}" alt="logo" width="100" height="100">
        <h1 class="text-2xl font-bold">Blood Test Results</h1>
        <p>Donation Time: {{ $donation_time }}</p>
        <p>Donor First Name: {{ $user->name }}</p>
        <p>Donor Last Name: {{ $user->last_name }}</p>
        <p>Donation Center: {{ $center->center_name }}, {{ $city->city_name }}</p>
      </div>
      <div class="my-8 overflow-x-auto p-25 m-10">
        <table class="table-auto w-full">
          <thead>
            <tr>
              <th class="px-4 py-2">Test Name</th>
              <th class="px-4 py-2">Result</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tests as $test)
              <tr>
                <td class="border px-4 py-2">{{ $test->test_name }}</td>
                <td class="border px-4 py-2">
                  @foreach ($results as $result)
                    @if ($result->test_id === $test->id)
                        @if ($test->result_type === 'number')
                        {{ number_format($result->result_number, 1) }}
                        @else
                            @if ($result->passed === 0)
                                Negative
                            @else
                                Positive
                            @endif
                        @endif
                        @break
                    @endif
                  @endforeach
                </td>
              </tr>
            @endforeach
          </tbody> 
</html>