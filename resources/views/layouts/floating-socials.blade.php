{{-- Sidebar lateral (desktop/md+) --}}
<aside class="hidden md:flex fixed right-4 bottom-1 mt-20 flex-col gap-2 z-50">
    @include('layouts.partials.btn-socials')
</aside>

<div class="fab md:hidden">
    <!-- a focusable div with tabindex is necessary to work on all browsers. role="button" is necessary for accessibility -->
    <div tabindex="0" role="button" class="btn btn-lg btn-circle ch-btn-primary">
         <i data-lucide="message-circle-more"></i>
    </div>
      @include('layouts.partials.btn-socials')
</div>

