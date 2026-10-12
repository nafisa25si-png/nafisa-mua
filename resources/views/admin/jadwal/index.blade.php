<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jadwal Makeup - MUA Ulva</title>
    <link rel="stylesheet" href="{{ asset('assets-admin/css/argon-dashboard-tailwind.css') }}">
</head>

<body class="bg-gray-50">

<div class="min-h-screen p-6">

    <h2 class="text-2xl font-bold text-slate-700 mb-2">
        Data Jadwal Makeup
    </h2>

    <p class="text-sm text-slate-500 mb-6">
        Kelola jadwal makeup pelanggan MUA Ulva
    </p>

    {{-- Notifikasi sukses --}}
    @if(session('success'))
        <div class="mb-5 p-4 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    {{-- Notifikasi validasi --}}
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

    <div class="bg-white rounded-xl shadow-md p-6">

        <div class="flex justify-between items-center mb-5">
            <h3 class="text-lg font-semibold text-slate-700">
                Daftar Jadwal
            </h3>

            <a href="{{ route('jadwal.create') }}"
               class="inline-block px-5 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">
                + Tambah Jadwal
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-slate-700">
                        <th class="p-3 border">No</th>
                        <th class="p-3 border">Nama Pelanggan</th>
                        <th class="p-3 border">Tanggal</th>
                        <th class="p-3 border">Waktu</th>
                        <th class="p-3 border">Status</th>
                        <th class="p-3 border text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($dataJadwal as $jadwal)
                        <tr class="text-slate-600 hover:bg-gray-50">
                            <td class="p-3 border">
                                {{ $loop->iteration }}
                            </td>

                            <td class="p-3 border">
                                {{ $jadwal->nama_pelanggan }}
                            </td>

                            <td class="p-3 border">
                                {{ $jadwal->tanggal }}
                            </td>

                            <td class="p-3 border">
                                {{ substr($jadwal->waktu, 0, 5) }}
                            </td>

                            <td class="p-3 border">
                                {{ $jadwal->status }}
                            </td>

                            <td class="p-3 border">
                                <div class="flex flex-wrap justify-center items-center gap-2">

                                    {{-- Tombol Edit --}}
                                    <a href="{{ route('jadwal.edit', $jadwal->id) }}"
                                       style="display:inline-block; padding:8px 14px; background-color:#eab308; color:#ffffff; border-radius:6px; text-decoration:none;">
                                        Edit
                                    </a>

                                    {{-- Tombol Hapus --}}
                                    <form action="{{ route('jadwal.destroy', $jadwal->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus jadwal makeup ini?')"
                                          style="display:inline-block; margin:0;">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                style="display:inline-block; padding:8px 14px; background-color:#ef4444; color:#ffffff; border:0; border-radius:6px; cursor:pointer;">
                                            Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="6"
                                class="p-5 border text-center text-slate-500">
                                Belum ada data jadwal makeup.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-5">
            <a href="{{ url('/admin') }}"
               class="text-blue-500 hover:underline">
                ← Kembali ke Dashboard
            </a>
        </div>

    </div>
</div>

</body>
</html>
