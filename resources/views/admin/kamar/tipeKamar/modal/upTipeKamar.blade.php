<button update-modal-target="#upModalTK" class="flex text-sm w-full items-center text-left py-2 px-4 text-[#333] hover:bg-gray-300 gap-2 transition-all duration-100 ease-in-out"><i class="fa-solid fa-pen"></i> Edit</button>

<div id="upOverlayTK" class="fixed inset-0 bg-black bg-opacity-25 hidden min-h-screen"></div>

<div class="z-50 inset-0 hidden fixed " id="upModalTK">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded w-96">
            <div class="justify-end flex p-2">
                <button class="text-[#333] hover:bg-gray-200 rounded-full py-1 px-2 font-semibold" onclick="upCloseModal()">✕</button>
            </div>
            <form action="" method="POST" class="items-center grid gap-4 px-4 pb-4">
                @csrf
                <div class="grid gap-2">
                    <div class="grid w-full text-[#333] text-sm">
                        <label class="text-left" for="tipe_kamar">Tipe Kamar</label>
                        <input type="text" name="tipe_kamar" id="tipe_kamar" class="border rounded w-auto px-1.5 py-1">
                    </div>
                    <div class="grid w-full text-[#333]">
                        <label class="text-left" for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" class="border rounded w-auto px-1.5 py-1">
                    </div>
                </div>
                <div class="justify-end flex items-center">
                    <button type="input" class="bg-lime-400 p-2 text-white rounded text-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>    
</div> 

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const button = document.querySelector('[update-modal-target]');
        const modal = document.querySelector(button.getAttribute('update-modal-target'));
        const overlay = document.getElementById('upOverlayTK');

        button.addEventListener('click', function () {
            modal.classList.remove('hidden');
            overlay.classList.remove('hidden');
        });
    });

    function upCloseModal() {
        document.getElementById('upModalTK').classList.add('hidden');
        document.getElementById('upOverlayTK').classList.add('hidden');
    }
</script>