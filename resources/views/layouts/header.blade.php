<header class="shadow-sm">
  <div class="container">
      <div class="row">
          <div class="col-lg-8" id="header-menu">
              <ul class="list-unstyled p-0 m-0 text-right">
                  <li>
                    <a href="{{url('/')}}"class="d-inline-block float-right text-decoration-none p-3 font-18  BYekan">
                    خانه
                    </a>
                  </li>

                  <li>
                    <a href="{{url('/about')}}"class="d-inline-block float-right text-decoration-none p-3 font-18  BYekan">
                    درباره ما
                    </a>
                  </li>

                


                  <li>
                    <a href="{{url('/call')}}"class="d-inline-block float-right text-decoration-none p-3 font-18  BYekan">
                    تماس با ما
                    </a>
                  </li>

                  <li>
                    @if(auth()->check())
                    <a href="{{url('/admin')}}"class="d-inline-block float-right text-decoration-none p-3 font-18  BYekan">
                    ادمین
                    </a>
                    @else
                    <a href="{{url('/login')}}"class="d-inline-block float-right text-decoration-none p-3 font-18  BYekan">
                    ورود
                    </a>
                    @endif
                  </li>


                  <li>

<a class="d-inline-block float-right text-decoration-none p-3 font-18  BYekan" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      خروج
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>

</li>


              </ul>
          </div>

          <div class="col-lg-4" id="header-logo">
          <a href="">
         <img alt="kouventa" src="https://kouventa.ir/images/Kouventa-300-151.png" class="w-50 p-2">
         
          </a>
          </div>
      </div>
</div>
</header>