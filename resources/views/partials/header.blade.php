  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="{{asset('img/logo.png')}}" alt="Boolean">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" data="0" href="{{route('homepage')}}">Home</a>
          <a class="nav-item nav-link @if () @endif" data="1" href="{{route('privacy')}}">Privacy</a>
          <a class="nav-item nav-link" data="2" href="{{route('faq')}}">FAQ</a>
        </div>
      </div>
    </nav>
  </header>
