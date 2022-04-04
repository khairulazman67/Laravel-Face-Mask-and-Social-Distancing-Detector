@extends('../layouts/layoutStaf')
@section('title', 'DataMHS')
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

    <button class="bg-primary-700 rounded-xl py-3 mt-4 px-3 text-white font-bold hover:bg-primary-900">
        <i class="fa-solid fa-plus mr-1 "></i> Tambah Data
    </button>

    <!-- table -->
    <div class="w-full h-auto shadow-xl shadow-gray-400 mt-5 ">
        <div class="bg-secondary-900 rounded-t-xl px-10 py-3">
            <h1 class="font-bold text-white text-xl">Data Mahasiswa</h1>
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
@endsection