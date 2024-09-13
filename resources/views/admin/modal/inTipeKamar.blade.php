<button data-modal-target="#modalId" class="py-2 px-4 rounded outline-none bg-lime-400 hover:outline-2 hover:outline-lime-400 hover:bg-white hover:text-lime-400 transition-all duration-100 ease-in-out"><i class="fa-solid fa-plus"></i> Tambah</button>

<div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-25 hidden min-h-screen"></div>

<div class="z-50 inset-0 hidden fixed " id="modalId">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-4 rounded w-96">
            <div class="justify-end flex">
                <button class="text-[#333]" onclick="closeModal()">✕</button>
            </div>
            <form action="" method="POST" class="items-center grid gap-4">
                <div class="grid gap-2">
                    <div class="grid w-full text-[#333] text-sm">
                        <label for="tipe_kamar">Tipe Kamar</label>
                        <input type="text" name="tipe_kamar" id="tipe_kamar" class="border rounded w-auto px-1.5 py-1">
                    </div>
                    <div class="grid w-full text-[#333]">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" class="border rounded w-auto px-1.5 py-1">
                    </div>
                    <div class="grid w-full text-[#333]">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" id="image" class="border rounded cursor-pointer text-xs file:border-0 file:bg-lime-400 file:text-white file:py-1.5 file:px-2 file:">
                    </div>
                </div>
                <div class="justify-end flex items-center">
                    <button type="input" class="bg-lime-400 p-2 rounded text-sm">Tambah</button>
                </div>
            </form>
        </div>
    </div>    
</div> 

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const button = document.querySelector('[data-modal-target]');
        const modal = document.querySelector(button.getAttribute('data-modal-target'));
        const overlay = document.getElementById('modalOverlay');

        button.addEventListener('click', function () {
            modal.classList.remove('hidden');
            overlay.classList.remove('hidden');
        });
    });

    function closeModal() {
        document.getElementById('modalId').classList.add('hidden');
        document.getElementById('modalOverlay').classList.add('hidden');
    }
</script>