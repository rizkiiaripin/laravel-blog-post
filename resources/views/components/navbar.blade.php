<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FacePost</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="{{ Request::is('/') ? 'active' : false}} nav-link " aria-current="page" href="/">Home</a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link {{ Request::is('posts') ? 'active' : false}}  " href="/posts"> Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('categories') ? 'active' : false}} " href="/categories">categories</a>
          </li>
        
        
          
        </ul>
        <ul class="navbar-nav ms-auto ">

        @auth
        <li class="nav-item ">
        <ul class="custom-navbar-nav navbar-nav mb-2 mb-md-0">
      <li class="nav-item dropdown position-relative">
      <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        hii {{ auth()->user()->name }}
      </a>
      <ul class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
        
      <li >
        <div class="dropdown-item">
        <form action="/logout" method="POST" >
          @csrf
          <button type="submit" class="border-0 btn">Logout</button>
        </form>
        </div>
      </li>
      <a class="dropdown-item "  href="/dashboard">
        <button class="border-0 btn">Dashboard</button>  
      </a>
      </li>

        </ul>
      </ul>
      </li>

        <li class="nav-item ">
          
    
       </li>
        
        @else
           <li class="nav-item ">
            
            <a class="nav-link" href="/login">login</a>
          </li>
        @endauth
      </ul>

      </div>
    </div>
  </nav>
  
  