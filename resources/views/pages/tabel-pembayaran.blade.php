<x-layouts.app title="Tabel Pembayaran">
    <div class="overflow-x-auto">
        <table class="table-fixed w-full bg-white shadow border border-gray-400">
            <thead class="bg-gray-200 text-left">
                <tr>
                    <th class="border px-2 py-2">No</th>
                    <th class="border px-2 py-2">Nama</th>
                    <th class="border px-2 py-2">Kategori</th>
                    <th class="border px-2 py-2">Tempat</th>
                    <th class="border px-2 py-2">Barang</th>
                    <th class="border px-2 py-2">Status</th>
                    <th class="border px-2 py-2">Total</th>
                    <th class="border px-2 py-2">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-2 py-2 text-center">1</td>
                    <td class="border px-2 py-2">Petra</td>
                    <td class="border px-2 py-2">Bazar - Preloved</td>
                    <td class="border px-2 py-2">Auditorium</td>
                    <td class="border px-2 py-2">Kamera</td>
                    <td class="border px-2 py-2">Lunas</td>
                    <td class="border px-2 py-2">Rp.200.000</td>
                    <td class="border px-2 py-2">21/12/2015</td>
                </tr>

                @for ($i = 0; $i < 5; $i++)
                    <tr>
                        @for ($j = 0; $j < 8; $j++)
                            <td class="border px-2 py-6">&nbsp;</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</x-layouts.app>
