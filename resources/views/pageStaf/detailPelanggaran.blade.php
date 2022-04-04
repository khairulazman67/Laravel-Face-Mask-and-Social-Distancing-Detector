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

    <div class="flex">
        <div class="">
            <h1 class="text-primary-900 font-bold text-2xl mt-6">Detail Pelanggaran</h1>
            <div class="w-full bg-primary-800 rounded-full h-1 mt-2"></div>
            <table class="table-auto mt-3">
                <thead>
                    <tr>
                        <th>Song</th>
                        <th>Artist</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                        <td>Malcolm Lockyer</td>
                        <td>1961</td>
                    </tr>
                    <tr>
                        <td>Witchy Woman</td>
                        <td>The Eagles</td>
                        <td>1972</td>
                    </tr>
                    <tr>
                        <td>Shining Star</td>
                        <td>Earth, Wind, and Fire</td>
                        <td>1975</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="">
            <div class="w-full h-20 bg-primary-900">

            </div>
        </div>
    </div>
@endsection