

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('/')}}">Welcome to Crud Operation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     



      @guest
      @if(Route::has('login'))
          <li class="nav-item">
            <a href="{{route('login')}}" class="nav-link">{{__('Login')}}</a>
          </li>
      @endif

        @if(Route::has('register'))
          <li class="nav-item">
            <a href="{{route('register')}}" class="nav-link">{{__('Register')}}</a>
          </li>
      @endif

       @else
      <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                
                  <div class="dropdown-divider"></div>
                  

                  <a class="dropdown-item"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}"> {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                        </form>
                </div>
              </li>
              @endif
      
    </ul>
  </div>
</nav>