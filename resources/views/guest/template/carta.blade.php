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
                <h1 class="mb uppercase">{{ $carta['title'] }}</h1>
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


    
    
        <div class="grigio">

            <div class="container container-grigio">
                <div class="talent">
                    <h2>Talent</h2>
                    <div class="sezione-t-s">
                        <div class="titolo-t-s">
                            Art by:
                        </div>

                        <div class="descrizione-t-s">
                            @foreach ($carta['artists'] as $artista)
                                {{ $artista }},
                            @endforeach
                        </div>
                    </div>

                    <div class="sezione-t-s">
                        <div class="titolo-t-s">
                            Written by:
                        </div>

                        <div class="descrizione-t-s">
                            @foreach ($carta['writers'] as $artista)
                                {{ $artista }},
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="specs">
                    <h2>Specs</h2>
                    <div class="sezione-t-s">
                        <div class="titolo-t-s">
                            Series:
                        </div>

                        <div class="comic">
                           {{ $carta['series'] }}
                        </div>
                    </div>

                    <div class="sezione-t-s">
                        <div class="titolo-t-s">
                            U.S. Price:
                        </div>

                        <div class="descrizione-t-s">
                            {{ $carta['price'] }}
                        </div>
                    </div>

                    <div class="sezione-t-s">
                        <div class="titolo-t-s">
                            On Sale Date:
                        </div>

                        <div class="descrizione-t-s">
                            {{ $carta['sale_date'] }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-3">
                <ul class="list-main">

                    @foreach ($linkmain as $link)
                    <li class="bright">
                        <a class="reverse" href="">
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