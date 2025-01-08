<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard')? 'active' : false }} " aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/posts')? 'active' : false }}" href="/dashboard/posts">
                <span data-feather="file"></span>
                My Posts
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" aria-current="page" href="/">
              <small>Back to home</small>
            </a>
          </li>
    </ul>
    @can('categories')
        
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Admin</span>
      <a class="link-secondary" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle"></span>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/categories')? 'active' : false }}" href="/dashboard/categories">
          <span data-feather="file-text"></span>
          Categories
        </a>
      </li>
    </ul>
    
    @endcan
    </div>
  </nav>