
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Jadwal Makeup - MUA Ulva</title>

    <link rel="stylesheet"
        href="{{ asset('assets-admin/css/argon-dashboard-tailwind.css') }}">
</head>

<body class="bg-gray-50">

    <div class="min-h-screen p-6">

        <h2 class="text-2xl font-bold text-slate-700 mb-2">
            Tambah Jadwal Makeup
        </h2>

        <p class="text-sm text-slate-500 mb-6">
            Masukkan jadwal makeup pelanggan MUA Ulva
        </p>

        {{-- Menampilkan error validation --}}
        @if($errors->any())
            <div class="mb-5 p-4 bg-red-100 text-red-700 rounded-lg">

                <strong>Terjadi kesalahan:</strong>

                <ul class="mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <div class="bg-white rounded-xl shadow-md p-6">

            <form action="{{ route('jadwal.store') }}" method="POST">

                @csrf

                {{-- Nama Pelanggan --}}
                <div class="mb-4">
                    <label class="block mb-2 font-semibold">
                        Nama Pelanggan
                    </label>

                    <input type="text"
                        name="nama_pelanggan"
                        value="{{ old('nama_pelanggan') }}"
                        class="w-full border rounded-lg p-3"
                        placeholder="Masukkan nama pelanggan"
                        required>
                </div>

                {{-- Tanggal --}}
                <div class="mb-4">
                    <label class="block mb-2 font-semibold">
                        Tanggal Makeup
                    </label>

                    <input type="date"
                        name="tanggal"
                        value="{{ old('tanggal') }}"
                        class="w-full border rounded-lg p-3"
                        required>
                </div>

                {{-- Waktu --}}
                <div class="mb-4">
                    <label class="block mb-2 font-semibold">
                        Waktu Makeup
                    </label>

                    <input type="time"
                        name="waktu"
                        value="{{ old('waktu') }}"
                        class="w-full border rounded-lg p-3"
                        required>
                </div>

                {{-- Status --}}
                <div class="mb-4">
                    <label class="block mb-2 font-semibold">
                        Status Jadwal
                    </label>

                    <select name="status"
                        class="w-full border rounded-lg p-3"
                        required>

                        <option value="Menunggu"
                            {{ old('status', 'Menunggu') == 'Menunggu' ? 'selected' : '' }}>
                            Menunggu
                        </option>

                        <option value="Dikonfirmasi"
                            {{ old('status') == 'Dikonfirmasi' ? 'selected' : '' }}>
                            Dikonfirmasi
                        </option>

                        <option value="Selesai"
                            {{ old('status') == 'Selesai' ? 'selected' : '' }}>
                            Selesai
                        </option>

                        <option value="Dibatalkan"
                            {{ old('status') == 'Dibatalkan' ? 'selected' : '' }}>
                            Dibatalkan
                        </option>

                    </select>
                </div>

                {{-- Tombol --}}
                <div class="flex gap-3">

                    <button type="submit"
                        class="px-5 py-3 bg-blue-500 text-white rounded-lg">
                        Simpan Jadwal
                    </button>

                    <a href="{{ route('jadwal.index') }}"
                        class="px-5 py-3 bg-gray-400 text-white rounded-lg">
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>

</html>
