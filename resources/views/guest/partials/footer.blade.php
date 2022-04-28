<footer>
    <div class="sfondo-footer">
      <div class="container-footer flexato">
        <div class="left-side">
          <div>
            <ul class="lista-footer">
              <li><h3>DC COMICS</h3></li>
              @foreach ($linkdccomics as $item)
              <li>
                <a href="">{{ $item['text'] }}</a>
              </li>
              @endforeach
            </ul>

            <ul class="lista-footer">
                <li><h3>SHOP</h3></li>
                @foreach ($linkshop as $item)
                <li>
                  <a href="">{{ $item['text'] }}</a>
                </li>
                @endforeach
            </ul>
          </div>

          <div>
            <ul class="lista-footer">
                <li><h3>DC</h3></li>
                @foreach ($linkdc as $item)
                <li>
                  <a href="">{{ $item['text'] }}</a>
                </li>
                @endforeach
            </ul>
          </div>

          <div>
            <ul class="lista-footer">
                <li><h3>SITES</h3></li>
                @foreach ($linkshop as $item)
                <li>
                  <a href="">{{ $item['text'] }}</a>
                </li>
                @endforeach
            </ul>
          </div>
        </div>

        <div class="right-side">
          <img src={{url("/images/dc-logo-bg.png")}} alt="" />
        </div>
      </div>
    </div>
    
    <div class="credits">
      <div class="container-footer flex">
        <div class="credits-left">
          <button>SIGN-UP NOW!!</button>
        </div>

        <div class="credits-right">
          <h3>FOLLOW US</h3>
          <div><img src={{url("/images/footer-facebook.png")}} alt="" /></div>
          <div><img src={{url("/images/footer-twitter.png")}} alt="" /></div>
          <div><img src={{url("/images/footer-youtube.png")}} alt="" /></div>
          <div><img src={{url("/images/footer-pinterest.png")}} alt="" /></div>
          <div><img src={{url("/images/footer-periscope.png")}} alt="" /></div>
        </div>
      </div>
    </div>
  </footer>
