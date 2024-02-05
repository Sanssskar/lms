<div>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">LMS</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="clock"></i><span>Overview</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('Student.index')}}" class="nav-link"><i data-feather="users"></i><span>Students</span></a>
              </li>
              <li class="dropdown">
                <a href="{{route('Book.index')}}" class="nav-link"><i data-feather="book"></i><span>Books</span></a>
              </li>
              <li class="dropdown">
                <a href="index.html" class="nav-link"><i data-feather="check-circle"></i><span>Issue</span></a>
              </li>
              {{-- <li class="dropdown">
                <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Record</span></a>
              </li> --}}
      </div>
</div>
