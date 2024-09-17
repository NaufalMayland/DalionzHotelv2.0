<div class="w-64 h-screen rounded-lg relative">
  <div class="w-64 h-screen bg-[#292929] text-white fixed top-0 left-0 overflow-y-scroll no-scrollbar">
    <div class="flex gap-2 items-center justify-center p-6 text-center font-bold text-xl">
      <i class="fa-solid fa-hotel text-lg"></i>
      <span>HDalionz</span>
    </div>
    <hr class="w-4/5 mx-auto border-gray-200">
    <nav class="my-4">
      <ul class="">
        <li>
          <a href="{{route('admin.dashboard')}}" class="flex items-center space-x-2 hover:border-l-4 pl-8 py-3 hover:text-lime-400 hover:border-lime-400 hover:bg-[#373737]  transition-all duration-100 ease-in-out {{($title === 'Dashboard') ? 'border-lime-400 bg-[#373737] text-lime-400 border-l-4' : ''}}">
            <i class="fas fa-home text-lg"></i>
            <span class="text-sm text-white">Dashboard</span>
          </a>
        </li> 
        <li>
          <a href="" class="flex items-center space-x-2 hover:border-l-4 pl-8 py-3 hover:text-lime-400 hover:border-lime-400 hover:bg-[#373737]  transition-all duration-100 ease-in-out {{($title === '') ? 'border-lime-400 bg-[#373737] text-lime-400 border-l-4' : ''}}">
            <i class="fa-solid fa-clipboard-list text-lg"></i>
            <span class="text-sm text-white">Booking</span>
          </a>
        </li>
        <li>
          <a href="" class="flex items-center space-x-2 hover:border-l-4 pl-8 py-3 hover:text-lime-400 hover:border-lime-400 hover:bg-[#373737]  transition-all duration-100 ease-in-out {{($title === '') ? 'border-lime-400 bg-[#373737] text-lime-400 border-l-4' : ''}}">
            <i class="fa-solid fa-money-check-dollar text-lg"></i>
            <span class="text-sm text-white">Reservasi</span>
          </a>
        </li>
        <li class="hover:border-lime-400 hover:border-l-4 hover:bg-[#373737] dropdown transition-all duration-100 ease-in-out @if (Route::is('tipe_kamar.*', 'nomor_kamar.*')) bg-[#373737] border-lime-400 border-l-4 @endif">
          <button type="button" class="flex w-full justify-between items-center space-x-2 py-3 px-8 transition-all duration-100 ease-in-out hover:text-lime-400 @if (Route::is('tipe_kamar.*', 'nomor_kamar.*')) bg-[#373737] text-lime-400 pl-8 @endif" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
            <div class="space-x-2 flex">
              <i class="fa-solid fa-door-open text-lg"></i>
              <span class="text-sm text-[#fff]">Kamar</span>
            </div>
            <div class="">
              <i class="fa-solid fa-caret-down text-lg toggle-icon"></i>
            </div>
          </button>
          <ul id="dropdown-pages" class="bg-[#222] @if (!Route::is('tipe_kamar.*', 'nomor_kamar.*')) hidden @endif">
            <li>
              <a href="{{route('tipe_kamar.index')}}" class="flex items-center space-x-2 py-3 pl-9 hover:bg-[#373737] hover:text-lime-400 transition-all duration-100 ease-in-out {{($title === 'Tipe Kamar') ? 'bg-[#373737] text-lime-400' : ''}}">
                <i class="fa-solid fa-gear text-lg"></i>
                <span class="text-sm text-white">Tipe Kamar</span>
              </a>
            </li>
            <li>
              <a href="{{route('nomor_kamar.index')}}" class="flex items-center space-x-2 py-3 pl-9 hover:bg-[#373737] hover:text-lime-400 transition-all duration-100 ease-in-out {{($title === 'Nomor Kamar') ? 'bg-[#373737] text-lime-400' : ''}}">
                <i class="fa-solid fa-gear text-lg"></i>
                <span class="text-sm text-white">Nomor Kamar</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <hr class="w-4/5 mx-auto border-gray-200">
    <div class="my-6 text-center">
      <button id="logout" class="text-sm border font-semibold rounded-full py-2 px-8 transition duration-75 hover:shadow-lg  hover:bg-lime-400 hover:border-lime-400 hover:text-[#292929] hidden md:inline-block" onclick="confirmLogout()">Logout</button>
    </div>
  </div>
</div>

<script>
  function confirmLogout() {
    if (window.confirm("Anda yakin ingin logout?")) {
      window.location.href = "/";
    }
  }

  document.querySelectorAll('[data-collapse-toggle]').forEach(button => {
    button.addEventListener('click', () => {
        const targetId = button.getAttribute('aria-controls');
        const target = document.getElementById(targetId);
        const parentDropdown = button.closest('.dropdown'); 
        const currentRoute = "{{ Route::currentRouteName() }}";

        document.querySelectorAll('.dropdown').forEach(dropdown => {
            if (currentRoute !== 'tipe_kamar.index' && currentRoute !== 'nomor_kamar.index') {
                dropdown.classList.remove('bg-[#373737]', 'border-lime-400', 'border-l-4');
                const dropdownButton = dropdown.querySelector('button');
                if (dropdownButton) {
                    dropdownButton.classList.remove('text-lime-400', 'pl-8');
                }
            }
        });

        if (target) {
            target.classList.toggle('hidden');
            button.setAttribute('aria-expanded', !target.classList.contains('hidden'));

            if (!target.classList.contains('hidden')) {
                parentDropdown.classList.add('bg-[#373737]', 'border-lime-400', 'border-l-4');
                button.classList.add('text-lime-400', 'pl-8');
            } else {
                if (currentRoute !== 'tipe_kamar.index' && currentRoute !== 'nomor_kamar.index') {
                    parentDropdown.classList.remove('bg-[#373737]', 'border-lime-400', 'border-l-4');
                    button.classList.remove('text-lime-400', 'pl-8');
                }
            }
        } else {
            console.error(`Element with ID ${targetId} not found`);
        }
    });
  });
</script>

