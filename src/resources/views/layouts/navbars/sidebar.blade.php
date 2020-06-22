<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  {{-- <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div> --}}
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ request()->is('home*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">list_alt</i>
          <p>{{ __('CABPED') }}</p>
        </a>
      </li>
      <li class="nav-item{{ request()->is('famdfa*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('famdfa') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('FAMDFA') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
          <i class="material-icons">people</i>
          <p>{{ __('USUARIOS') }}</p>
        </a>
      </li>
      <li class="nav-item{{ request()->is('ccmven') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('ccmven') }}">
          <i class="material-icons">people</i>
          <p>{{ __('VENDEDORES') }}</p>
        </a>
      </li>
      <li class="nav-item{{ request()->is('pdfviewer') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('pdfviewer') }}">
          <i class="material-icons">picture_as_pdf</i>
          <p>{{ __('PDF Viewer') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>