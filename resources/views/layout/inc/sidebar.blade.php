<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
       <img src="{{asset('assets/admin/assets/img/ppkd.jpg')}}" alt="" width="50" height="50">
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Perpus</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

 
        
  
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="{{route('dashboard.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

     
      
      <!-- Layouts -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-book"></i>
          <div data-i18n="Layouts">Data Masters</div>
        </a>

       

        <ul class="menu-sub">

          <li class="menu-item">
            <a href="{{ route('user.index') }}" class="menu-link">
              <div data-i18n="Without menu">Users</div>
            </a>
          </li>
          @if (Auth::user()->id_level == 1)
          <li class="menu-item">
            <a href="{{ route('levels.index') }}" class="menu-link">
              <div data-i18n="Without navbar">Level</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('member.index') }}" class="menu-link">
              <div data-i18n="Container">Member</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('book.index') }}" class="menu-link">
              <div data-i18n="Fluid">Books</div>
            </a>
          </li>

           @endif

          {{-- <li class="menu-item">
            <a href="#" class="menu-link">
              <div data-i18n="Blank">Data Peserta</div>
            </a>
          </li> --}}

        </ul>
      </li>

      {{-- <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-data"></i>
            <div data-i18n="Layouts">Data History</div>
          </a>

          <ul class="menu-sub">
            <li class="menu-item">
              <a href="{{ route('histroy.gelombang1') }}" class="menu-link">
                <div data-i18n="Without menu">Gelombang 1</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('histroy.gelombang2') }}" class="menu-link">
                <div data-i18n="Without navbar">Gelombang 2</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('histroy.gelombang3') }}" class="menu-link">
                <div data-i18n="Container">Gelombang 3</div>
              </a>
            </li>
          </ul>
      </li> --}}

      {{-- <li class="menu-item">
          <a href="{{ route('pengumuman') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-file"></i>
            <div data-i18n="Analytics">Pengumuman</div>
          </a>
        </li> --}}

    </ul>
  </aside>
