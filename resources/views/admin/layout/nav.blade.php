<div class="w-64 h-screen rounded-lg relative m-2">
  <div class="w-64 h-[calc(100vh-2rem)] bg-[#292929] text-white rounded-lg fixed m-2">
    <div class="flex gap-2 items-center justify-center p-4 text-center font-bold text-xl">
      <i class="fa-solid fa-hotel text-lg"></i>
      <span>HDalionz</span>
    </div>
    <hr class="w-4/5 mx-auto border-[#707070]">
    <nav class="">
      <ul class="space-y-2 py-2 px-6">
        <a href="{{route('admin.dashboard')}}" class="flex items-center space-x-2 hover:px-4 p-2 rounded-lg hover:shadow-lg hover:shadow-lime-400/50 hover:bg-lime-400 hover:text-[#292929] transition-all duration-100 ease-in-out {{($title === 'Dashboard') ? 'shadow-lg shadow-lime-400/50 bg-lime-400 text-[#292929] px-4' : ''}}">
          <i class="fas fa-home"></i>
          <span class="text-sm">Dashboard</span>
        </a>
      </ul>
    </nav>
    <hr class="w-4/5 mx-auto border-[#707070]">
    <nav class="my-2">
      <ul class="space-y-2 py-2 px-6">
        <a href="{{route('admin.user')}}" class="flex items-center space-x-2 hover:px-4 p-2 rounded-lg hover:shadow-lg hover:shadow-lime-400/50 hover:bg-lime-400 hover:text-[#292929] transition-all duration-100 ease-in-out  {{($title === 'User') ? 'shadow-lg shadow-lime-400/50 bg-lime-400 text-[#292929] px-4' : ''}}">
          <i class="fas fa-user"></i>
          <span class="text-sm">User</span>
        </a>
        <a href="#" class="flex items-center space-x-2 hover:px-4 p-2 rounded-lg hover:shadow-lg hover:shadow-lime-400/50 hover:bg-lime-400 hover:text-[#292929] transition-all duration-100 ease-in-out">
          <i class="fas fa-cog"></i>
          <span class="text-sm">Booking</span>
        </a>
        <a href="#" class="flex items-center space-x-2 hover:px-4 p-2 rounded-lg hover:shadow-lg hover:shadow-lime-400/50 hover:bg-lime-400 hover:text-[#292929] transition-all duration-100 ease-in-out">
          <i class="fas fa-cog"></i>
          <span class="text-sm">Reservasi</span>
        </a>
        <a href="#" class="flex items-center space-x-2 hover:px-4 p-2 rounded-lg hover:shadow-lg hover:shadow-lime-400/50 hover:bg-lime-400 hover:text-[#292929] transition-all duration-100 ease-in-out">
          <i class="fas fa-cog"></i>
          <span class="text-sm">Kamar</span>
        </a>
      </ul>
    </nav>
    <hr class="w-4/5 mx-auto border-[#707070]">
    <div class="my-6 text-center">
      <button id="logout" class="text-sm border font-semibold rounded-full py-2 px-8 transition duration-100 hover:shadow-lg hover:shadow-lime-400/50 hover:bg-lime-400 hover:border-lime-400 hover:text-[#292929] hidden md:inline-block" onclick="confirmLogout()">Logout</button>
    </div>
  </div>
</div>

<script>
  function confirmLogout() {
    if (window.confirm("Anda yakin ingin logout?")) {
        window.location.href = "/";
    }
}
</script>
