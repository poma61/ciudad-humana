 <!-- NAVBAR -->
 <nav class="navbar bg-base-100 shadow-md z-20 top-10 pt-10 md:pt-0
  {{ empty($is404) ? 'ch-bg-transparent absolute ch-color-white' : 'fixed' }}"
     id="navbar">
     <div class="navbar-start">
         <div class="drawer xl:hidden">
             <input id="my-drawer-1" type="checkbox" class="drawer-toggle" />
             <div class="drawer-content">
                 <!-- Page content here -->
                 <label for="my-drawer-1" class='btn'>
                     <i data-lucide='menu'></i>
                 </label>
             </div>
             <div class="drawer-side">
                 <label for="my-drawer-1" aria-label="close sidebar" class="drawer-overlay"></label>
                 <ul class="menu bg-base-100 min-h-full w-80 p-5 pt-15 ch-color-black">
                     @include('layouts.partials.nb-menu')
                 </ul>
             </div>
         </div>
         <a href="{{ Route('n-home') }}" style="height: 50px; width: 150px">
             <img  src="{{ asset('assets/icons/ch-logo.png') }}" alt="logo"
              >
         </a>
     </div>

     <div class="navbar-center hidden xl:flex 
     {{ empty($is404) ? 'ch-bg-transparent' : '' }}" id="navbar-center">
         <ul class="menu menu-horizontal">
             @include('layouts.partials.nb-menu')
         </ul>
     </div>

     <div class="navbar-end mr-2" id="navbar-end">
         <label class="swap swap-rotate">
             <!-- this hidden checkbox controls the state -->
             <input type="checkbox" class="theme-controller" value="dark" />
             <i class="btn swap-off btn-sm btn-ghost btn-circle m-1" data-lucide="sun"></i>
             <i class="btn swap-on btn-sm btn-ghost btn-circle  m-1" data-lucide="moon"></i>
         </label>
         <a class="btn m-1 ch-btn-primary">Únete</a>
         <button class="btn btn-circle btn-ghost" onclick="modal_search.showModal()">
             <i data-lucide="search"></i>
         </button>
     </div>
 </nav>


 <!-- You can open the modal using ID.showModal() method -->
 <dialog id="modal_search" class="modal">
     <div class="modal-box max-w-5xl">
         <form method="dialog">
             <button type="submit" class="btn btn-md btn-circle btn-ghost absolute right-2 top-2">
                 <i data-lucide="x"></i>
             </button>
         </form>

         <h3 class="text-2xl font-bold italic mb-5">Buscar</h3>
         <label class="input input-info input-xl w-full">
             <i data-lucide="search"></i>
             <input type="text" id="searchInput" placeholder="Buscar..." autofocus />
         </label>

         <div class="modal-action">
             <button onclick="search()" class="btn p-2 ch-btn-secondary">
                 Buscar
             </button>
         </div>
     </div>
     <form method="dialog" class="modal-backdrop">
         <button>close</button>
     </form>
 </dialog>
