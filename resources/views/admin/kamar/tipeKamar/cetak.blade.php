<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.tailwindcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Tipe kamar | {{$title}}</title>
</head>
<body class="font-['poppins']">
    <div class="flex text-center items-center justify-center mt-8 mb-4">
        <h1 class="font-bold text-xl">DATA TIPE KAMAR</h1>
    </div>
    <div class="mx-10">
        <table class=" table-auto w-full border rounded text-sm">
            <thead>
                <tr class="bg-gray-50 text-[#333] text-center font-semibold">
                    <td class="border p-2">NO</td>
                    <td class="border p-2">TIPE KAMAR</td>
                    <td class="border p-2">HARGA</td>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($dataTipe as $d)
                    <tr>
                        <td class="border p-2 text-center">{{$i++}}</td>
                        <td class="border p-2">{{$d->tipe_kamar}}</td>
                        <td class="border p-2 ">Rp{{$d->harga}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<script>
    window.print();
</script>
</html>