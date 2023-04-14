<x-app-layout>
    <div class="flex justify-center container mt-10">
      <div class="w-full md:w-3/4 lg:w-1/2">
        <div class="bg-white shadow-md rounded-lg">
          <div class="px-6 py-4 bg-gray-100 border-b border-gray-200">
            <h2 class="text-lg font-bold">QR Code </h2>
            <p>(please can you provide this Qr_code to your appointment)</p>
          </div>
          <div class="p-6">
            <div class="text-center">
              {!! $qrCode !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
  