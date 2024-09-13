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
            @include('admin.modal.inTipeKamar')
            <a href="#" class="py-2 px-4 rounded outline-none bg-lime-400 hover:outline-2 hover:outline-lime-400 hover:bg-white hover:text-lime-400 transition-all duration-100 ease-in-out"><i class="fa-solid fa-file-import"></i> Import</a>
            <a href="#" class="py-2 px-4 rounded outline-none bg-lime-400 hover:outline-2 hover:outline-lime-400 hover:bg-white hover:text-lime-400 transition-all duration-100 ease-in-out"><i class="fa-solid fa-file-export"></i> Eksport</a>
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
                            <a href="#" class="bg-lime-400 text-white hover:text-lime-400 border-0 hover:border-2 hover:border-lime-400 hover:bg-white rounded py-1 px-2 transition-all duration-75 ease-in-out">
                                <i class="fa-solid fa-gear text-xs"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection