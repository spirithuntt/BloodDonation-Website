<x-app-layout>
<main>
<div class="max-w-6xl mx-auto mt-10">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
        <h1 class="text-xl font-bold">Schedule Blood Donation Appointment</h1>
        <p class="text-gray-600">Please fill out the form below to schedule your appointment.</p>
      </div>
      <form>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="name">
            Name
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="John Doe">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="email">
            Email
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="johndoe@example.com">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="date">
            Date
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" type="date">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="time">
            Time
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="time" type="time">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="blood-type">
            Blood Type
          </label>
          <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="blood-type">
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>O+</option>
            <option>O-</option>
          </select>
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Schedule Appointment
          </button>
        </div>
      </form>
    </div>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
        <h1 class="text-xl font-bold">Past Donations</h1>
        <p class="text-gray-600">Here are your past blood donations along with the date and time.</p>
        </div>
        <table class="table-auto w-full">
          <thead>
            <tr>
              <th class="px-4 py-2">Date</th>
              <th class="px-4 py-2">Time</th>
              <th class="px-4 py-2">Blood Type</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border px-4 py-2">2020-01-01</td>
              <td class="border px-4 py-2">12:00 PM</td>
              <td class="border px-4 py-2">A+</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border px-4 py-2">2020-01-01</td>
              <td class="border px-4 py-2">12:00 PM</td>
              <td class="border px-4 py-2">A+</td>
            </tr>
            <tr>
              <td class="border px-4 py-2">2020-01-01</td>
              <td class="border px-4 py-2">12:00 PM</td>
              <td class="border px-4 py-2">A+</td>
            </tr>
          </tbody>
        </table>
    </div>
    </div>
    </main>
</x-app-layout>