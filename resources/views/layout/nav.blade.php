    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
        
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="#">Authors</a>
          <a class="nav-link" href="/posts/create">Create</a>
          <a class="nav-link" href="#">About Us</a>

          @if (Auth::check())
            <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
          @elseif (! Auth::check())
            <a class="nav-link ml-auto" href="/login">Login</a>
          @endif

          @if (Auth::check())
            <a class="nav-link ml-auto" href="/logout">Logout</a>
          @endif

        </nav>
      </div>
    </div>