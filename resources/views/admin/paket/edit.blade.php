<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Paket Makeup - MUA Ulva</title>
    <link rel="stylesheet" href="{{ asset('assets-admin/css/argon-dashboard-tailwind.css') }}">
</head>
<body class="bg-gray-50">

<div class="min-h-screen p-6">
    <h2 class="text-2xl font-bold text-slate-700 mb-2">
        Edit Paket Makeup
    </h2>

    <p class="text-sm text-slate-500 mb-6">
        Perbarui informasi paket makeup MUA Ulva
    </p>

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
        <form action="{{ route('paket.update', $paket->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-2 font-semibold">Nama Paket</label>
                <input type="text"
                       name="nama_paket"
                       value="{{ old('nama_paket', $paket->nama_paket) }}"
                       class="w-full border rounded-lg p-3"
                       required>
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-semibold">Harga Paket (Rp)</label>
                <input type="number"
                       name="harga"
                       value="{{ old('harga', $paket->harga) }}"
                       min="0"
                       step="0.01"
                       class="w-full border rounded-lg p-3"
                       required>
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-semibold">Deskripsi Paket</label>
                <textarea name="deskripsi"
                          rows="4"
                          class="w-full border rounded-lg p-3">{{ old('deskripsi', $paket->deskripsi) }}</textarea>
            </div>

            <div class="flex gap-3">
                <button type="submit"
                        class="px-5 py-3 bg-blue-500 text-white rounded-lg">
                    Simpan Perubahan
                </button>

                <a href="{{ route('paket.index') }}"
                   class="px-5 py-3 bg-gray-400 text-white rounded-lg">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
