@extends('guest.template.base')

@section('content')

    <main>

        <div class="blu">
            <div class="jumbo"></div>
            <div class="container"></div>
        </div>
        
        
        <div class="container">
            <div class="carta-immagine">
                <img src="{{ $carta['thumb'] }}" alt="">
            </div>
        
            <div class="container-flexato">
                <div class="blocco-sinistra">
                <h1 class="mb">{{ $carta['title'] }}</h1>
                    <div class="verde mb">
                            <div class="left">
                                <div>U.S Price: <span>{{ $carta['price'] }}</span> </div> 
                                <div>AVAILABLE</div>
                            </div>
                            <div class="right">
                                Check Availability
                            </div>
                    </div>
    
                    <p class="l-height">{{ $carta['description'] }}</p>
                </div>
    
                <div class="blocco-destra">
                    <h3 class="t-end">ADVERTISMENT</h3>
                    <img src="/images/adv.jpg" alt="">
                </div>
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