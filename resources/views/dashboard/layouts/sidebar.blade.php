<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
          <a class="nav-link {{ Request::is('/dashboard/index') ? 'active' : ''}}" href="/dashboard/index">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/postsedukasi') ? 'active' : ''}}" href="/dashboard/postsedukasi">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Edukasi Bisnis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/postskursus') ? 'active' : ''}}" href="/dashboard/postskursus">
              <span data-feather="briefcase" class="align-text-bottom"></span> <i class="bi bi-exclude"></i>
              Kursus Bisnis
            </a>
          </li>
          <!-- 
            <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/register') ? 'active' : ''}}" href="/dashboard/register">
              <span data-feather="users" class="align-text-bottom"></span>
              Register
            </a>
          </li>  -->
         
        </ul>
      </div>
    </nav>