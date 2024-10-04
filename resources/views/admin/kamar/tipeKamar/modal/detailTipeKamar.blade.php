<button detail-modal-target="#detailModalTK" class="flex text-sm w-full items-center text-left py-2 px-4 text-[#333] hover:bg-gray-300 gap-2 transition-all duration-100 ease-in-out"><i class="fa-solid fa-magnifying-glass"></i> Detail</button>

<div id="detailOverlayTK" class="fixed inset-0 bg-black bg-opacity-25 hidden min-h-screen"></div>

<div class="z-50 inset-0 hidden fixed " id="detailModalTK">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded w-96">
            <div class="justify-end flex p-2">
                <button class="text-[#333] hover:bg-gray-200 rounded-full py-1 px-2 font-semibold" onclick="detailCloseModal()">✕</button>
            </div>
            <div class="items-center grid gap-4 px-4 pb-4">
                <div class="">
                    <img src="" alt="">
                </div>
                <div class="grid gap-2">
                    <div class="grid w-full text-[#333] text-sm">
                    </div>
                    <div class="grid w-full text-[#333]">                        
                    </div>
                </div>
            </>
        </div>
    </div>    
</div> 

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const button = document.querySelector('[detail-modal-target]');
        const modal = document.querySelector(button.getAttribute('detail-modal-target'));
        const overlay = document.getElementById('detailOverlayTK');

        button.addEventListener('click', function () {
            modal.classList.remove('hidden');
            overlay.classList.remove('hidden');
        });
    });

    function detailCloseModal() {
        document.getElementById('detailModalTK').classList.add('hidden');
        document.getElementById('detailOverlayTK').classList.add('hidden');
    }
</script>