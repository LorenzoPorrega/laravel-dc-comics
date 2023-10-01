
@php
  $menuItems = [
    [
      "title" => "Digital Comics",
      "sub" => [
        "1" => "Character",
        "2" => "Comics",
        "3" => "Movies",
        "4" => "TV",
        "5" => "Games",
        "6" => "News"
      ],
    ],
    [
      "title" => "Shop",
      "sub" => [
        "1" => "Shop DC",
        "2" => "Shop DC Collectibles"
      ],
    ],
    [
      "title" => "DC",
      "sub" => [
        "1" => "Terms Of Use",
        "2" => "Privacy policy (New)",
        "3" => "Ad Choices",
        "4" => "Advertising",
        "5" => "Jobs",
        "6" => "Subscriptions",
        "7" => "Talent Workshops",
        "8" => "Talent Workshops",
        "9" => "CPSC Certificates",
        "10" => "Ratings",
        "11" => "Shop Help",
        "12" => "Contact Us"
      ],
    ],
    [
      "title" => "Sites",
      "sub" => [
        "1" => "DC",
        "2" => "MAD Magazine",
        "3" => "DC Kids",
        "4" => "DC Universe",
        "5" => "DC Power Visa"
      ],
    ]
  ];

  $socialIcons = [
    "facebook" => "./../img/footer-facebook.png",
    "x" => "./../img/footer-twitter.png",
    "youtube" => "./../img/footer-youtube.png",
    "pinterest" => "./../img/footer-pinterest.png",
    "periscope" => "./../img/footer-periscope.png"
  ]
@endphp

<footer>
  <div class="top-footer overflow-hidden">
    <div class="container h-100 pt-5 pb-1">
      <div class="row">
        <div class="col-6">
          <div class="row g-1">
            @foreach ($menuItems as $menuTitle)
              <div class="col-3">
                <div class="title-box">
                  <h4 class="title fw-bold text-white text-uppercase">{{ $menuTitle['title'] }}</h4>
                </div>
                <ul class="list-unstyled">
                  @foreach ($menuTitle['sub'] as $singleSubTitle)
                    <li><a href="" class="sub-title">{{ $singleSubTitle }}</a></li>
                  @endforeach
                </ul>
              </div>
            @endforeach
          </div>
          <div class="row">
            <p class="copyright-notice">All Site Content TM and 2020 DC Entertainment, unless otherwise <a href="">noted here</a>. All rights reserved. <a href="">Cookies Settings</a>.</p>
          </div>
        </div>
        <div class="col-6 position-relative d-flex justify-content-end">
          <img src="../../img/dc-logo-bg.png" alt="" class="footer-bg-logo position-absolute">
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-8 d-flex justify-content-start align-items-center">
          <button type="button" class="btn btn-primary text-uppercase fw-bold px-2 rounded-0 py-2">Sign-up now!</button>
        </div>
        <div class="col-4 d-flex justify-content-start align-items-center">
          <h5 class="fw-bold mb-0">FOLLOW US</h5>
          <div class="d-flex justify-content-start align-items-center h-100 ms-2">
            @foreach ($socialIcons as $singleIcon)
            <div class="ms-4">
              <a href=""><img src="{{ $singleIcon }}" alt=""></a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>