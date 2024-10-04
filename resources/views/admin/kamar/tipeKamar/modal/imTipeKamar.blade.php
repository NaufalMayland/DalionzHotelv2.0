<button import-modal-target="#imModalTK" class="py-2 px-4 rounded outline-none bg-lime-400 hover:outline-2 hover:outline-lime-400 hover:bg-white hover:text-lime-400 transition-all duration-100 ease-in-out"><i class="fa-solid fa-file-import"></i> Import</button>

<div id="imOverlayTK" class="fixed inset-0 bg-black bg-opacity-25 hidden min-h-screen"></div>

<div class="z-50 inset-0 hidden fixed " id="imModalTK">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded w-96">
            <div class="justify-end flex p-2">
                <button class="text-[#333] hover:bg-gray-200 rounded-full py-1 px-2 font-semibold" onclick="closeButton()">✕</button>
            </div>
            <form action="" method="POST" class="items-center grid px-4 pb-4 gap-4 w-full">
                <div class="flex gap-2 items-center justify-center">
                    <div class="grid w-full text-[#333] text-sm">
                        <input type="file" name="image" id="image" class="border rounded cursor-pointer text-xs file:mr-2 file:text-sm file:border-0 file:bg-lime-400 file:text-white file:px-2 file:py-1.5">
                    </div>
                    <div class="justify-end w-auto flex items-center">
                        <button type="input" class="bg-lime-400 px-2 py-1.5 w-auto rounded text-sm">Import</button>
                    </div>
                </div>
                <div class="w-full flex text-center items-center justify-center text-sm">
                    <a href="{{route('tipe_kamar.template')}}" class="bg-lime-400 text-white outline-none hover:outline-4 hover:outline-lime-400 hover:bg-white hover:text-lime-400 transition-all duration-100 ease-in-out w-full p-2 rounded"><i class="fa-solid fa-download"></i> Download Template</a>
                </div>
            </form>
        </div>
    </div>    
</div> 

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const button = document.querySelector('[import-modal-target]');
        const modal = document.querySelector(button.getAttribute('import-modal-target'));
        const overlay = document.getElementById('imOverlayTK');

        button.addEventListener('click', function () {
            modal.classList.remove('hidden');
            overlay.classList.remove('hidden');
        });
    });

    function closeButton() {
        document.getElementById('imModalTK').classList.add('hidden');
        document.getElementById('imOverlayTK').classList.add('hidden');
    }
</script>