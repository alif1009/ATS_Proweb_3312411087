@extends('layout.riwayat')

@section('content')
<div class="overflow-x-auto">
    <table class="table-auto w-full border border-black bg-white text-sm">
        <thead>
            <tr class="bg-gray-100 text-left border-b border-black">
                <th class="border border-black px-4 py-2 w-12">No</th>
                <th class="border border-black px-4 py-2">Nama</th>
                <th class="border border-black px-4 py-2">Kategori</th>
                <th class="border border-black px-4 py-2">Tempat</th>
                <th class="border border-black px-4 py-2">Barang</th>
                <th class="border border-black px-4 py-2">Status</th>
                <th class="border border-black px-4 py-2">Total</th>
                <th class="border border-black px-4 py-2">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembayaran as $index => $data)
            <tr>
                <td class="border border-black px-4 py-2 text-center font-bold">{{ $index + 1 }}.</td>
                <td class="border border-black px-4 py-2">{{ $data['nama'] }}</td>
                <td class="border border-black px-4 py-2">{{ $data['kategori'] }}</td>
                <td class="border border-black px-4 py-2">{{ $data['tempat'] }}</td>
                <td class="border border-black px-4 py-2">{{ $data['barang'] }}</td>
                <td class="border border-black px-4 py-2">{{ $data['status'] }}</td>
                <td class="border border-black px-4 py-2">Rp.{{ number_format((int)str_replace(['Rp.', '.'], '', $data['total']), 0, ',', '.') }}</td>
                <td class="border border-black px-4 py-2">{{ $data['tanggal'] }}</td>
            </tr>
            @endforeach

            {{-- Tambahkan baris kosong agar seperti di gambar --}}
            @for ($i = count($pembayaran); $i < 5; $i++)
            <tr>
                <td class="border border-black px-4 py-6 text-center font-bold">{{ $i + 1 }}.</td>
                <td class="border border-black px-4 py-6"></td>
                <td class="border border-black px-4 py-6"></td>
                <td class="border border-black px-4 py-6"></td>
                <td class="border border-black px-4 py-6"></td>
                <td class="border border-black px-4 py-6"></td>
                <td class="border border-black px-4 py-6"></td>
                <td class="border border-black px-4 py-6"></td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
@endsection

