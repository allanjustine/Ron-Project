<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: white;">
    <img src="{{ url('images/logo.png') }}" alt="logo" class="img-fluid rounded-circle img-responsive" style="width: 50px; margin-left: 50px">
    @role('writer')
    <a href="/" style="text-decoration: none; color: black; font-size: 30px; font-weight:800">FRIENDLY TALK ONLINE</a>
    @endrole
    @role('admin')
    <a href="/admin" style="text-decoration: none; color: black; font-size: 30px; font-weight:800">FRIENDLY TALK ONLINE</a>
    @endrole
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link rounded {{ 'home' == request()->path() ? 'active' : '' }}" id="hover-nav" href="{{ '/home' }}">Home</a>
        </li>
        @role('admin')
        <li class="nav-item">
          <a class="nav-link rounded {{ 'admin' == request()->path() ? 'active' : '' }}" id="hover-nav" href="{{ '/admin' }}">Admin Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rounded {{ 'logs' == request()->path() ? 'active' : '' }}" id="hover-nav" href="{{ '/logs' }}">Logs</a>
        </li>
        <li class="nav-item">
        @endrole
          <a class="nav-link rounded {{ 'recentPost' == request()->path() ? 'active' : '' }}" id="hover-nav" href="{{ '/recentPost' }}">Recent Posts</a>
        </li>
        @role('admin')
        <li class="nav-item">
          <a class="nav-link rounded {{ 'admin/users' == request()->path() ? 'active' : '' }}" id="hover-nav" href="{{ route('admin.users.index') }}">Users</a>
        </li>
        @endrole
      </ul>
    </div>
      <div class="dropdown" style="margin-right: 60px;">
                <a class="btn dropdown-toggle" id="buttt" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if (Auth::check())
                    {{Auth::user()->name}}
                    @else
                    Login or Register here
                    @endif
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="select3" style="background-color: white;">
                    @if (Auth::check())
                    <li class="nav-item  {{ 'create' == request()->path() ? 'active2' : '' }}"  id="hover-drop">
                        <a style="margin-left: 20px" class="nav-link" href="/create">Create Post</a>
                    </li>
                    <li class="nav-item  {{ 'myPost' == request()->path() ? 'active2' : '' }}" id="hover-drop">
                        <a style="margin-left: 20px"  class="nav-link" href="/myPost">My Post</a>
                    </li>
                    <li class="nav-item"  id="hover-drop">
                        <a href="{{ '/logout' }}" class="nav-link" style="text-decoration: none; margin-right: 10px;"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
                    </li>
                    @else
                    <li class="nav-item" id="hover-drop">
                        <a class="nav-link" href="{{url('/register')}}">Register</a>
                    </li>
                    <li class="nav-item" id="hover-drop">
                        <a class="nav-link" href="{{url('/')}}">Login</a>
                    </li>
                    @endif
                </div>
        </div>
</nav>

<style>
  a{
    margin-left: 20px;
  }
  #select3 {
    width: 150px;
    height: auto;
  }
  #hover-nav {
    border: 3px solid transparent;
  }
  #hover-nav:hover {
    border-bottom: 3px solid rgb(109, 199, 240);
  }
  #hover-drop {
    padding: 10px;
  }
  #hover-drop:hover {
    background-color:rgb(109, 199, 240);
  }
  .active {
    background-color:rgb(109, 199, 240);
  }
  .active2 {
    background-color:rgb(109, 199, 240);
  }
  #buttt {
    border: none;
  }
  #buttt:hover {
    background-color:rgb(109, 199, 240);
  }
</style>
