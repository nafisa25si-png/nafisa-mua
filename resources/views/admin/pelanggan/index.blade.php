<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Pelanggan - MUA Ulva</title>

    <link rel="stylesheet"
        href="{{ asset('assets-admin/css/argon-dashboard-tailwind.css') }}">
</head>

<body class="bg-gray-50">

    <div class="min-h-screen p-6">

        <h2 class="text-2xl font-bold text-slate-700 mb-2">
            Data Pelanggan
        </h2>

        <p class="text-sm text-slate-500 mb-6">
            Kelola data pelanggan MUA Ulva
        </p>

        {{-- Alert berhasil --}}
        @if(session('success'))
            <div class="mb-5 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        {{-- Alert validasi --}}
        @if($errors->any())
            <div class="mb-5 p-4 bg-red-100 text-red-700 rounded-lg">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mt-2 list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Tombol tambah --}}
        <a href="{{ route('pelanggan.create') }}"
           class="px-5 py-3 bg-blue-500 text-white rounded-lg"
           style="display: inline-block; text-decoration: none;">
            + Tambah Pelanggan
        </a>

        {{-- Tabel --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden mt-6">

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">

                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-4 border">No</th>
                            <th class="p-4 border">Nama</th>
                            <th class="p-4 border">Email</th>
                            <th class="p-4 border">No HP</th>
                            <th class="p-4 border">Alamat</th>
                            <th class="p-4 border text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($dataPelanggan as $pelanggan)

                            <tr class="border-b">

                                <td class="p-4 border">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="p-4 border">
                                    {{ $pelanggan->nama }}
                                </td>

                                <td class="p-4 border">
                                    {{ $pelanggan->email }}
                                </td>

                                <td class="p-4 border">
                                    {{ $pelanggan->no_hp }}
                                </td>

                                <td class="p-4 border">
                                    {{ $pelanggan->alamat }}
                                </td>

                                {{-- Tombol aksi --}}
                                <td class="p-4 border">
                                    <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">

                                        {{-- Tombol Edit --}}
                                        <a href="{{ route('pelanggan.edit', $pelanggan->id) }}"
                                           style="display: inline-block; padding: 8px 14px; background-color: #eab308; color: #ffffff; border-radius: 6px; text-decoration: none;">
                                            Edit
                                        </a>

                                        {{-- Tombol Hapus --}}
                                        <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus data pelanggan ini?')"
                                              style="display: inline-block; margin: 0;">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    style="display: inline-block; padding: 8px 14px; background-color: #ef4444; color: #ffffff; border: none; border-radius: 6px; cursor: pointer;">
                                                Hapus
                                            </button>

                                        </form>

                                    </div>
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="6"
                                    class="p-6 border text-center text-gray-500">
                                    Belum ada data pelanggan.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>
            </div>

        </div>

        <div class="mt-5">
            <a href="{{ url('/admin') }}"
               style="color: #3b82f6; text-decoration: none;">
                ← Kembali ke Dashboard
            </a>
        </div>

    </div>

</body>
</html>
