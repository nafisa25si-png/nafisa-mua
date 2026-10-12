<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Pelanggan - MUA Ulva</title>

    <link rel="stylesheet"
        href="{{ asset('assets-admin/css/argon-dashboard-tailwind.css') }}">
</head>

<body class="bg-gray-50">

    <div class="min-h-screen p-6">

        <h2 class="text-2xl font-bold text-slate-700 mb-2">
            Edit Pelanggan
        </h2>

        <p class="text-sm text-slate-500 mb-6">
            Ubah data pelanggan MUA Ulva
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

            <form action="{{ route('pelanggan.update', $dataPelanggan->id) }}"
                method="POST">

                @csrf
                @method('PUT')

                {{-- Nama --}}
                <div class="mb-4">
                    <label class="block mb-2 font-semibold">
                        Nama
                    </label>

                    <input type="text"
                        name="nama"
                        value="{{ old('nama', $dataPelanggan->nama) }}"
                        class="w-full border rounded-lg p-3"
                        placeholder="Masukkan nama pelanggan">
                </div>

                {{-- Email --}}
                <div class="mb-4">
                    <label class="block mb-2 font-semibold">
                        Email
                    </label>

                    <input type="email"
                        name="email"
                        value="{{ old('email', $dataPelanggan->email) }}"
                        class="w-full border rounded-lg p-3"
                        placeholder="Masukkan email">
                </div>

                {{-- No HP --}}
                <div class="mb-4">
                    <label class="block mb-2 font-semibold">
                        No HP
                    </label>

                    <input type="text"
                        name="no_hp"
                        value="{{ old('no_hp', $dataPelanggan->no_hp) }}"
                        class="w-full border rounded-lg p-3"
                        placeholder="Masukkan nomor HP">
                </div>

                {{-- Alamat --}}
                <div class="mb-4">
                    <label class="block mb-2 font-semibold">
                        Alamat
                    </label>

                    <textarea name="alamat"
                        class="w-full border rounded-lg p-3"
                        rows="4"
                        placeholder="Masukkan alamat pelanggan">{{ old('alamat', $dataPelanggan->alamat) }}</textarea>
                </div>

                {{-- Tombol --}}
                <div class="flex gap-3">

                    <button type="submit"
                        class="px-5 py-3 bg-blue-500 text-white rounded-lg">
                        Update
                    </button>

                    <a href="{{ route('pelanggan.index') }}"
                        class="px-5 py-3 bg-gray-400 text-white rounded-lg">
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>

</html>
