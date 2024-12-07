<div x-data="{ close: true }">
  <div class="w-60 h-screen fixed bg-white pt-2 border-r transition-all ease-in-out duration-700 z-40 top-0 left-0"
    :class="{ 'w-60': !close, 'w-20': close }">
    <div class="relative">
      <a href="#" class="flex items-center rounded-lg min-h-[52px] px-6">
        <div
          class="bg-blue-500 p-2 text-white rounded-md flex items-center justify-center text-center transition ease-in-out duration-700"
          :class="close && 'scale-125'">
          <i class="text-lg fi fi-brands-slack leading-[0px]"></i>
        </div>
        <div class="flex flex-col ml-2 transition ease-in-out duration-500 overflow-hidden scale-100"
          :class="close && 'opacity-0 scale-95 m-0'">
          <div class="flex items-center space-x-0.5">
            <span class="font-logo font-bold text-gray-800">Portal</span>
            <span
              class="px-2 py-1 text-[0.625rem] font-secondary font-bold text-white bg-blue-500 rounded-md">Admin</span>
          </div>
          <span class="text-xs text-gray-400 leading-none line-clamp-1">SLB Negeri Jember</span>
        </div>
      </a>
      <button
        class="absolute top-[10px] right-3 bg-slate-200/70 hover:bg-slate-200 w-8 h-8 flex justify-center items-center rounded-full p-2 transition-all ease-in-out duration-700"
        :class="{ '-right-4 rotate-180': close }" @click="close = !close">
        <i class="fi fi-sr-angle-small-right text-lg leading-[0px]"></i>
      </button>
    </div>
  </div>
</div>
<header class="bg-white shadow-sm h-[70px] fixed w-full z-10 top-0">
  <div>
  </div>
</header>


<main class="p-4 ms-60 mt-[70px]">

</main>
