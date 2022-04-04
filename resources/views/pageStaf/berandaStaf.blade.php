@extends('../layouts/layoutStaf')
@section('title', 'Beranda')
@section('content')
    <!-- tulisan atas -->
    <div class="mt-4">
        <div class="flex justify-center text-secondary-900 font-bold text-2xl">
            Sistem Deteksi Physical Distancing dan Wajah Bermasker
        </div>
        <div class="flex justify-center text-primary-900 font-bold text-xl">
            Menggunakan Metode You Only Look Once (YOLO)
        </div>
    </div>
    <div class="w-full bg-secondary-300 h-2 mt-7"></div>

    <!-- info -->
    <div class="flex justify-center h-40 mt-6 grid-rows-1 grid-flow-col gap-20 ">
        <div class="bg-primary-900 w-64 rounded-xl shadow-lg shadow-gray-400 py-10 px-7">
            <h1 class="text-white font-semibold text-2xl">Mahasiswa</h1>
            <div class="w-auto h-[3px] bg-white rounded-xl mt-2"></div>
            <div class="text-white text-xl mt-2">
                <i class="fa-solid fa-users inline"></i>
                <p class="inline font-semibold">19</p>
            </div>
        </div>
        <div class="bg-primary-900 w-64 rounded-xl shadow-lg shadow-gray-400 py-10 px-7">
            <h1 class="text-white font-semibold text-xl">Pelanggar Terdeteksi</h1>
            <div class="w-auto h-[3px] bg-white rounded-xl mt-2"></div>
            <div class="text-white text-xl mt-2">
                <i class="fa-solid fa-users inline"></i>
                <p class="inline font-semibold">19</p>
            </div>
        </div>
        <div class="bg-primary-900 w-64 rounded-xl shadow-lg shadow-gray-400 py-10 px-7 text-lg">
            <div class="text-white font-semibold text-lg">
                <div id="tanggal"></div>
            </div>
            <div class="w-auto h-[3px] bg-white rounded-xl mt-2"></div>
            <div class="text-white text-xl mt-2 font-bold">
                <div id="jam"></div>
            </div>
        </div>
    </div>

    <!-- table -->
    <div class="w-full h-auto shadow-xl shadow-gray-400 mt-10 ">
        <div class="bg-secondary-900 rounded-t-xl px-10 py-3">
            <h1 class="font-bold text-white text-xl">Data Pelanggar Pengguna Masker</h1>
        </div>
        <!-- table -->
        <div class="my-5 pb-5 flex justify-center mx-auto">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="border-b border-gray-200 shadow ">
                        <table class="divide-y divide-gray-300 ">
                            <thead class="bg-gray-900 text-white">
                                <tr>
                                    <th class="px-6 py-2 text-xs ">
                                        No
                                    </th>
                                    <th class="px-20 py-2 text-xs">
                                        Nama Mahasiswa
                                    </th>
                                    <th class="px-10 py-2 text-xs ">
                                        NIM
                                    </th>
                                    <th class="px-16 py-2 text-xs ">
                                        Waktu Pelanggaran
                                    </th>
                                    <th class="px-10 py-2 text-xs ">
                                        Hapus 
                                    </th>
                                    <th class="px-10 py-2 text-xs ">
                                        Detail
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-300 text-black">
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm">
                                            Khairul Azman
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm">1857301038</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm">
                                        Senin, 2 Januari 2022
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="#" class="px-6 py-1 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded-lg">Edit</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="px-6 py-1 text-sm text-white bg-red-600 hover:bg-red-700 rounded-lg">Hapus</a>
                                    </td>
                                </tr>
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm">
                                            Khairul Azman
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm">1857301038</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm">
                                        Senin, 2 Januari 2022
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="#" class="px-6 py-1 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded-lg">Edit</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="px-6 py-1 text-sm text-white bg-red-600 hover:bg-red-700 rounded-lg">Hapus</a>
                                    </td>
                                </tr>
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm">
                                            Khairul Azman
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm">1857301038</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm">
                                        Senin, 2 Januari 2022
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="#" class="px-6 py-1 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded-lg">Edit</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="px-6 py-1 text-sm text-white bg-red-600 hover:bg-red-700 rounded-lg">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.setTimeout("waktu()", 1000);
    
        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu
                .getSeconds();
        }
        window.setTimeout("tanggal()");
    
        function tanggal() {
            var tanggallengkap = new String();
            var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
            namahari = namahari.split(" ");
            var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
            namabulan = namabulan.split(" ");
            var tgl = new Date();
            var hari = tgl.getDay();
            var tanggal = tgl.getDate();
            var bulan = tgl.getMonth();
            var tahun = tgl.getFullYear();
            tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
            document.getElementById("tanggal").innerHTML = tanggallengkap
        }
    </script>
@endsection