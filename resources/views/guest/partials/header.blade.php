<header>
    <div class="container-header">
      <img src={{url("/images/dc-logo.png")}} alt="logo dc" />
      <ul class="ul-nav">
        
        @foreach ($linknav as $elemento)

        <li>
            <a href="">{{ $elemento['text'] }}</a>
          </li>

        @endforeach
      </ul>
    </div>
  </header>