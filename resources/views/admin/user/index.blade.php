@extends('admin.layout.layout')
@section('content')
    <div class="bg-[#292929] rounded-lg w-full p-4">
        <table class="w-full table-auto">
            <tr class="text-[#292929] font-bold text-sm bg-lime-400 rounded-lg">
                <td class="p-2 text-center rounded-l-lg">No</td>
                <td class="p-2 text-center">Username</td>
                <td class="p-2 text-center">Email</td>
                <td class="p-2 text-center">Role</td>
                <td class="p-2 text-center rounded-r-lg">Option</td>
            </tr>
            @foreach ($dataUser as $d)                
                @php
                    $i = 1
                @endphp
                <tr class="text-white text-sm p-2 text-center">
                    <td>{{$i++}}</td>
                    <td>{{$d->username}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->role}}</td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection