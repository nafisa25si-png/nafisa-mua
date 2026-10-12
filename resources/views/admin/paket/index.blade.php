<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Paket Makeup - MUA Ulva</title>
    <link rel="stylesheet" href="{{ asset('assets-admin/css/argon-dashboard-tailwind.css') }}">
</head>

<body class="bg-gray-50">

<div class="min-h-screen p-6">

    <h2 class="text-2xl font-bold text-slate-700 mb-2">
        Data Paket Makeup
    </h2>

    <p class="text-sm text-slate-500 mb-6">
        Kelola paket makeup MUA Ulva
    </p>

    {{-- Pesan berhasil --}}
    @if(session('success'))
        <div class="mb-5 p-4 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    {{-- Pesan kesalahan --}}
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

        {{-- Judul dan tombol tambah --}}
        <div class="flex justify-between items-center mb-5">
            <h3 class="text-lg font-semibold text-slate-700">
                Daftar Paket Makeup
            </h3>

            <a href="{{ route('paket.create') }}"
               class="px-5 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">
                + Tambah Paket
            </a>
        </div>

        {{-- Tabel paket makeup --}}
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">

                <thead>
                    <tr class="bg-gray-100 text-slate-700">
                        <th class="p-3 border">No</th>
                        <th class="p-3 border">Nama Paket</th>
                        <th class="p-3 border">Harga</th>
                        <th class="p-3 border">Deskripsi</th>
                        <th class="p-3 border text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($dataPaket as $paket)
                        <tr class="text-slate-600 hover:bg-gray-50">

                            <td class="p-3 border">
                                {{ $loop->iteration }}
                            </td>

                            <td class="p-3 border">
                                {{ $paket->nama_paket }}
                            </td>

                            <td class="p-3 border whitespace-nowrap">
                                Rp {{ number_format($paket->harga, 0, ',', '.') }}
                            </td>

                            <td class="p-3 border">
                                {{ $paket->deskripsi ?: '-' }}
                            </td>

                            {{-- Aksi Edit dan Hapus --}}
                            <td class="p-3 border">
                                <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">

                                    {{-- Tombol Edit --}}
                                    <a href="{{ route('paket.edit', $paket->id) }}"
                                       title="Edit Paket"
                                       aria-label="Edit Paket"
                                       style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: #eab308; color: white; border-radius: 8px; text-decoration: none;">

                                        {{-- Ikon pensil --}}
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="20"
                                             height="20"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path d="M12 20h9"/>
                                            <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L9 17l-4 1 1-4Z"/>
                                        </svg>
                                    </a>

                                    {{-- Tombol Hapus --}}
                                    <form action="{{ route('paket.destroy', $paket->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus paket ini?')"
                                          style="margin: 0;">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                title="Hapus Paket"
                                                aria-label="Hapus Paket"
                                                style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: #ef4444; color: white; border: none; border-radius: 8px; cursor: pointer;">

                                            {{-- Ikon tempat sampah --}}
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 width="20"
                                                 height="20"
                                                 viewBox="0 0 24 24"
                                                 fill="none"
                                                 stroke="currentColor"
                                                 stroke-width="2"
                                                 stroke-linecap="round"
                                                 stroke-linejoin="round">
                                                <path d="M3 6h18"/>
                                                <path d="M8 6V4h8v2"/>
                                                <path d="M19 6l-1 14H6L5 6"/>
                                                <path d="M10 11v5"/>
                                                <path d="M14 11v5"/>
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5"
                                class="p-5 border text-center text-slate-500">
                                Belum ada data paket makeup.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

        {{-- Kembali ke Dashboard --}}
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
