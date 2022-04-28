@extends('guest.template.base')

@section('title')
    DC Comics - HomePage
@endsection

@section('content')

    <main>
        <div class="black">
          <div class="jumbo"></div>
          <div class="container">
            <div class="current-series">current series</div>

            @foreach ($carte as $carta)
            <div class="carta">
                <div class="immagine"><img src="{{ $carta['thumb'] }}" alt="titolo" /></div>
                <div class="titolo">{{ $carta['series'] }}</div>
              </div>
            @endforeach

    
            <div class="load-more">Load More</div>
          </div>
        </div>
    
        <div class="blu">
          <div class="container-2">
            <ul class="list-main">

                @foreach ($linkmain as $link)
                <li>
                    <a href="">
                      <img
                        src="{{ $link['img'] }} "
                        alt="{{ $link['text']}}"
                      />
                      {{ $link['text']}}
                    </a>
                  </li>
                @endforeach
             
            </ul>
          </div>
        </div>
      </main>
@endsection