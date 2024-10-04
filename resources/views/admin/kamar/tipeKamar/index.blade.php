@extends('admin.layout.layout')
@section('content')
    <style>
        td{
            padding : 0.75rem;
        }
    </style>
    <div class="flex justify-between items-center">
        <div class="">
            <h1 class="text-xl font-bold text-[#333]">Tipe Kamar</h1>
        </div>
        <div class="text-sm space-x-1 text-white">
            @include('admin.kamar.tipeKamar.modal.inTipeKamar')
            @include('admin.kamar.tipeKamar.modal.imTipeKamar')
            <a href="{{route('tipe_kamar.cetak')}}" target="_blank" class="py-2 px-4 rounded outline-none bg-lime-400 hover:outline-2 hover:outline-lime-400 hover:bg-white hover:text-lime-400 transition-all duration-100 ease-in-out"><i class="fa-solid fa-file"></i> Cetak</a>
        </div>
    </div>
    <div class="rounded bg-white p-4 my-4 shadow-md">
        <table class=" table-auto w-full border rounded text-sm">
            <thead>
                <tr class="bg-gray-50 text-[#333] text-center font-semibold">
                    <td class="border">NO</td>
                    <td class="border">TIPE KAMAR</td>
                    <td class="border">HARGA</td>
                    <td class="border" class="text-center">OPTION</td>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($dataTipe as $d)
                    <tr>
                        <td class="border text-center">{{$i++}}</td>
                        <td class="border">{{$d->tipe_kamar}}</td>
                        <td class="border ">Rp{{$d->harga}}</td>
                        <td class="border text-center">
                            <div class="flex justify-center w-full">
                                <div class="grid text-center justify-center w-full">
                                    <button id="button-{{$d->id}}" onclick="dropdown({{$d->id}})" class=" bg-gray-200 text-[#333] hover:bg-gray-300 rounded py-1 px-2 transition-all duration-75 ease-in-out">
                                        <i class="fa-solid fa-gear text-xs"></i>
                                    </button>
                                </div>
                                <ul id="dropdown-{{$d->id}}" class="hidden absolute bg-gray-200 rounded mr-32 ">
                                    <li class="">
                                        @include('admin.kamar.tipeKamar.modal.detailTipeKamar')
                                    </li>
                                    <li class="">
                                        @include('admin.kamar.tipeKamar.modal.upTipeKamar')
                                    </li>
                                    <li class="">
                                        <form action="{{ route('tipe_kamar.delete', $d->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex text-sm w-full items-center rounded-b text-left py-2 px-4 text-[#333] hover:bg-gray-300 gap-2 transition-all duration-100 ease-in-out">
                                                <i class="fa-solid fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function dropdown(tipeId) {
            var dropdown = document.getElementById('dropdown-' + tipeId);
            var button = document.getElementById('button-' + tipeId);

            dropdown.classList.toggle('hidden');

            if (dropdown.classList.contains('hidden')) {
                button.classList.remove('bg-gray-300', 'text-[#333]');
                button.classList.add('bg-gray-200', 'text-[#333]');
            } else {
                button.classList.remove('bg-gray-200', 'text-[#333]');
                button.classList.add('bg-gray-300', 'text-[#333]');
            }

            document.addEventListener('click', function(event) {
                var isClickInsideButton = button.contains(event.target);
                var isClickInsideDropdown = dropdown.contains(event.target);

                if (!isClickInsideButton && !isClickInsideDropdown) {
                    dropdown.classList.add('hidden');
                    button.classList.remove('bg-gray-300', 'text-[#333]');
                    button.classList.add('bg-gray-200', 'text-[#333]');
                }
            });
        }
    </script>
@endsection