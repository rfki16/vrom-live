<x-app-layout>
  <x-slot name="title">Admin</x-slot>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      <a href="#!" onclick="window.history.go(-1); return false">
        ←
      </a>
      Sunting &raquo; Booking &raquo; #{{$booking->id}} {{$booking->name}}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div>
        @if ($errors->any())
        <div class="mb-5" role="alert">
          <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
            Ada Kesalahan!
          </div>
          <div class="px-4 py-3 text-red-700 bg-red-100 border border-t-0 border-red-400 rounded-b">
            <p>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            </p>
          </div>
        </div>
        @endif
        <!-- edit form tambahin ini -->

        <form class="w-full" action="{{ route('admin.bookings.update', $booking->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <!-- INPUT NAME -->
          <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
            <div class="w-full">
              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-last-name">
                Nama*
              </label>
              <input value="{{ old('name') ?? $booking->name }}" name="name"
                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-last-name" type="text" placeholder="Nama" required>
              <div class="mt-2 text-sm text-gray-500">
                Nama bookings. Contoh: Achmad
              </div>
            </div>
          </div>

          <!-- INPUT Alamat -->
          <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
            <div class="w-full">
              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-last-address">
                Alamat*
              </label>
              <input value="{{ old('address') ?? $booking->address }}" name="address"
                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-last-name" type="text" placeholder="Alamat" required>
              <div class="mt-2 text-sm text-gray-500">
                Alamat bookings. Contoh: Jl. Mengkudu
              </div>
            </div>
          </div>

          <!-- INPUT kota -->
          <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
            <div class="w-full">
              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-last-city">
                Kota*
              </label>
              <input value="{{ old('city') ?? $booking->city }}" name="city"
                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-last-name" type="text" placeholder="Alamat" required>
              <div class="mt-2 text-sm text-gray-500">
                Kota bookings. Contoh: Jakarta
              </div>
            </div>
          </div>

          <!-- INPUT kode pos -->
          <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
            <div class="w-full">
              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-last-zip">
                Kode Pos*
              </label>
              <input value="{{ old('zip') ?? $booking->zip }}" name="zip"
                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-last-name" type="text" placeholder="Alamat" required>
              <div class="mt-2 text-sm text-gray-500">
                Kode Pos bookings. Contoh: 14270
              </div>
            </div>
          </div>

          <!-- INPUT Status Booking -->
          <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
            <div class="w-full">
              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-last-status">
                Status Booking*
              </label>
              <select name="status" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="pending" {{$booking->status == 'pending' ? 'selected' : ''}}>Pending</option>
                <option value="confirmed" {{$booking->status == 'confirmed' ? 'selected' : ''}}>Confirmed</option>
                <option value="done" {{$booking->status == 'done' ? 'selected' : ''}}>Done</option>
              </select>
              <div class="mt-2 text-sm text-gray-500">
                Status Booking. Contoh: Pending
              </div>
            </div>
          </div>

          <div class="flex flex-wrap px-3 mt-4 mb-6 -mx-3">
            <div class="w-full">
              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-last-payment_status">
                Status Pembayaran*
              </label>
              <select name="payment_status" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="pending" {{$booking->payment_status == 'pending' ? 'selected' : ''}}>Pending</option>
                <option value="success" {{$booking->payment_status == 'success' ? 'selected' : ''}}>Success</option>
                <option value="failed" {{$booking->payment_status == 'failed' ? 'selected' : ''}}>Failed</option>
                <option value="expired" {{$booking->payment_status == 'expired' ? 'selected' : ''}}>Expired</option>
              </select>

              <div class="mt-2 text-sm text-gray-500">
                Status Pembayaran. Contoh: Pending
              </div>
            </div>
          </div>

          <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3 text-right">
              <button type="submit"
                class="px-4 py-2 font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700">
                Simpan Booking
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>