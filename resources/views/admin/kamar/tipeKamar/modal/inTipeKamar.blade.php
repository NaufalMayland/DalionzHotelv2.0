<button input-modal-target="#inModalTK" class="py-2 px-4 rounded outline-none bg-lime-400 hover:outline-2 hover:outline-lime-400 hover:bg-white hover:text-lime-400 transition-all duration-100 ease-in-out"><i class="fa-solid fa-plus"></i> Tambah</button>

<div id="inOverlayTK" class="fixed inset-0 bg-black bg-opacity-25 hidden min-h-screen"></div>

<div class="z-50 inset-0 hidden fixed " id="inModalTK">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded w-96">
            <div class="justify-end flex p-2">
                <button class="text-[#333] hover:bg-gray-200 rounded-full py-1 px-2 font-semibold" onclick="closeModal()">✕</button>
            </div>
            <form id="myForm" action="{{route('tipe_kamar.insert')}}" method="POST" enctype="multipart/form-data" class="items-center grid gap-4 px-4 pb-4">
                @csrf
                <div class="grid gap-2">
                    <div class="grid w-full text-[#333] text-sm">
                        <label for="tipe_kamar">Tipe Kamar</label>
                        <input type="text" name="tipe_kamar" id="tipe_kamar" class="border rounded w-auto px-1.5 py-1" required>
                    </div>
                    <div class="grid w-full text-[#333]">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" class="border rounded w-auto px-1.5 py-1" required>
                    </div>
                    <div class="grid w-full text-[#333]">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" id="image" class="border rounded cursor-pointer text-xs file:mr-2 file:border-0 file:bg-lime-400 file:text-white file:p-2">
                    </div>
                </div>
                <div class="justify-end flex items-center">
                    <button type="submit" class="bg-lime-400 p-2 rounded text-sm">Tambah</button>
                </div>
            </form>
        </div>
    </div>    
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const button = document.querySelector('[input-modal-target]');
        const modal = document.querySelector(button.getAttribute('input-modal-target'));
        const overlay = document.getElementById('inOverlayTK');
        const form = document.getElementById('myForm');

        button.addEventListener('click', function () {
            modal.classList.remove('hidden');
            overlay.classList.remove('hidden');
        });

    });

    function closeModal() {
        document.getElementById('inModalTK').classList.add('hidden');
        document.getElementById('inOverlayTK').classList.add('hidden');
    }
</script>
