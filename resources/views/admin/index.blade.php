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

        {{-- Tombol tambah --}}
        <a href="{{ route('pelanggan.create') }}"
            class="px-5 py-3 bg-blue-500 text-white rounded-lg">
            + Tambah Pelanggan
        </a>

        {{-- Tabel --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden mt-6">

            <table class="w-full text-left">

                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-4">No</th>
                        <th class="p-4">Nama</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">No HP</th>
                        <th class="p-4">Alamat</th>
                        <th class="p-4">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($dataPelanggan as $pelanggan)

                        <tr class="border-b">

                            <td class="p-4">
                                {{ $loop->iteration }}
                            </td>

                            <td class="p-4">
                                {{ $pelanggan->nama }}
                            </td>

                            <td class="p-4">
                                {{ $pelanggan->email }}
                            </td>

                            <td class="p-4">
                                {{ $pelanggan->no_hp }}
                            </td>

                            <td class="p-4">
                                {{ $pelanggan->alamat }}
                            </td>

                            <td class="p-4">

                                <a href="{{ route('pelanggan.edit', $pelanggan->id) }}"
                                    class="text-blue-500 mr-3">
                                    Edit
                                </a>

                                <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}"
                                    method="POST"
                                    class="inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="text-red-500"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="p-6 text-center text-gray-500">
                                Belum ada data pelanggan.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>
