@php
  $menuItems = [
    [
      "title" => "Digital Comics",
      "icon" => "img/buy-comics-digital-comics.png"
    ],
    [
      "title" => "DC Merchandise",
      "icon" => "img/buy-comics-merchandise.png"
    ],
    [
      "title" => "Subscription",
      "icon" => "img/buy-comics-shop-locator.png"
    ],
    [
      "title" => "Comic Shop Locator",
      "icon" => "img/buy-comics-subscriptions.png"
    ],
    [
      "title" => "DC Power Visa",
      "icon" => "img/buy-dc-power-visa.svg"
    ],
];
@endphp

<div class="menu-banner">
  <div class="container h-100">
    <div class="row gap-4 h-100 d-flex justify-content-center align-items-center">
      @foreach ($menuItems as $singleItem)
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 menu-col h-100 d-flex justify-content-center align-items-center">
          <div class="d-flex flex-row justify-content-center align-items-center">
            <div class="icon-box"><img src="{{ $singleItem['icon'] }}" alt="{{ $singleItem['title'] }}"></div>
            <a href="" class="text-decoration-none text-white text-uppercase"><p class="p-0 m-0 ms-2 fw-bold">{{ $singleItem['title'] }}</p></a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>