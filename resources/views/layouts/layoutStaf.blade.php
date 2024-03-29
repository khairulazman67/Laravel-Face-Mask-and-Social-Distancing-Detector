<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

    <div class="flex flex-col">
        <div class="bg-primary-700 px-3 py-2 flex flex-row justify-center text-white font-bold">
            <div>
                <div class="bg-primary-900 hover:bg-primary-800 py-2 px-3 inline">
                    <a href="{{ url('staf/') }}">Beranda</a>
                </div>
                <div class="px-[2px] rounded-lg bg-primary-600 inline"></div>
                <div class="bg-primary-900 hover:bg-primary-800 py-2 px-3 inline">
                    <a href="{{ url('staf/dataMahasiswa') }}">Data Mahasiswa</a>
                </div>
            </div>
            <div class="absolute right-3 flex flex-row ">
                <div class="mr-3">
                    @if (auth()->check())
                        {{ Auth::user()->name }}
                    @endif
                </div>
                <div >
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="underline text-sm hover:text-gray-900">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container mx-auto mb-10">
            @yield('content')
        </div>
    </div>
</body>

</html>
