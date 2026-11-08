<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link class="favicon" rel="icon" href="{{ $whatsappStore->logo_url }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $product->name }} | {{ $whatsappStore->store_name }}</title>
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('assets/css/whatsappp_store/sports_store.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ mix('assets/css/whatsappp_store/custom.css') }}" />
    @if ($whatsappStore->font_family || $whatsappStore->font_size || $whatsappStore->custom_css)
        <style>
            @if ($whatsappStore->font_family)
                body {
                    font-family: {{ $whatsappStore->font_family }};
                }
            @endif

            @if ($whatsappStore->font_size)
                div > h4 {
                    font-size: {{ $whatsappStore->font_size }}px !important;
                }
            @endif

            @if ($whatsappStore->custom_css)
                {!! $whatsappStore->custom_css !!}
            @endif
        </style>
    @endif
</head>
<body class="{{ getLocalLanguage() == 'ar' || getLocalLanguage() == 'fa' ? 'rtl' : '' }}">
  <div class="main-content mx-auto w-100 d-flex flex-column justify-content-between position-relative"
    @if (getLanguage($whatsappStore->default_language) == 'Arabic' || getLanguage($whatsappStore->default_language) == 'Persian') dir="rtl" @endif>
    <div class="position-relative">
      <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container-fluid p-0 gap-2 gap-lg-4 flex-nowrap d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex align-items-center gap-2 gap-sm-3 overflow-hidden">
                    <a class="navbar-brand p-1 m-0" href="{{ route('whatsapp.store.show', $whatsappStore->url_alias) }}" style="flex-shrink: 0;">
                        <img src="{{ $whatsappStore->logo_url }}" alt="logo" class="w-100 h-100 object-fit-cover" />
                    </a>
                    <span class="fw-bold fs-24 text-truncate">
                        <a href="{{ route('whatsapp.store.show', $whatsappStore->url_alias) }}" style="color: #212529; text-decoration: none;">
                            {{ $whatsappStore->store_name }}
                        </a>
                    </span>
                </div>
                <div class="d-flex align-items-center gap-lg-4 gap-sm-3 gap-2" style="flex-shrink: 0; z-index: 2;">
                    <div class="language-dropdown position-relative">
                        <button class="dropdown-btn position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                @if (array_key_exists(checkLanguageSession($whatsappStore->url_alias), \App\Models\User::FLAG))
                  <img class="flag" alt="flag" src="{{ asset(\App\Models\User::FLAG[getLanguageIsoCode($whatsappStore->default_language) ?? 'en']) }}" loading="lazy" />
                @endif
                {{ strtoupper(getLanguageIsoCode($whatsappStore->default_language) ?? 'en') }}
              </button>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" class="dropdown-arrow" height="26" viewBox="0 0 25 26" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.97382 9.28803C5.78611 9.47579 5.68066 9.73042 5.68066 9.99591C5.68066 10.2614 5.78611 10.516 5.97382 10.7038L11.9813 16.7113C12.1691 16.899 12.4237 17.0045 12.6892 17.0045C12.9547 17.0045 13.2093 16.899 13.3971 16.7113L19.4046 10.7038C19.587 10.515 19.6879 10.262 19.6856 9.99952C19.6834 9.73699 19.5781 9.48586 19.3924 9.30022C19.2068 9.11458 18.9557 9.00928 18.6931 9.007C18.4306 9.00472 18.1777 9.10564 17.9888 9.28803L12.6892 14.5877L7.38959 9.28803C7.20183 9.10032 6.9472 8.99487 6.6817 8.99487C6.41621 8.99487 6.16158 9.10032 5.97382 9.28803Z" fill="black" />
              </svg>
              <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                @foreach (getAllLanguageWithFullData() as $language)
                  <li>
                    <a class="dropdown-item" href="javascript:void(0)" id="languageName" data-name="{{ $language->iso_code }}">
                      @if (array_key_exists($language->iso_code, \App\Models\User::FLAG))
                        <img class="flag" alt="flag" src="{{ asset(\App\Models\User::FLAG[$language->iso_code]) }}" loading="lazy" />
                      @else
                        @if (count($language->media) != 0)
                          <img src="{{ $language->image_url }}" class="me-1" loading="lazy" />
                        @else
                          <i class="fa fa-flag fa-xl me-3 text-danger" aria-hidden="true"></i>
                        @endif
                      @endif
                      {{ strtoupper($language->iso_code) }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
            <button class="add-to-cart-btn d-flex align-items-center justify-content-center position-relative" id="addToCartViewBtn">
              <div class="position-absolute cart-count product-count-badge d-flex align-items-center justify-content-center"></div>
              <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.1301 11.6667C27.1301 11.9982 26.9984 12.3161 26.764 12.5505C26.5296 12.785 26.2116 12.9167 25.8801 12.9167C25.5486 12.9167 25.2306 12.785 24.9962 12.5505C24.7618 12.3161 24.6301 11.9982 24.6301 11.6667V9.16666C24.6301 7.95109 24.1472 6.7853 23.2877 5.92576C22.4281 5.06621 21.2623 4.58333 20.0468 4.58333C18.8312 4.58333 17.6654 5.06621 16.8059 5.92576C15.9463 6.7853 15.4634 7.95109 15.4634 9.16666V11.6667C15.4634 11.9982 15.3317 12.3161 15.0973 12.5505C14.8629 12.785 14.545 12.9167 14.2134 12.9167C13.8819 12.9167 13.564 12.785 13.3296 12.5505C13.0951 12.3161 12.9634 11.9982 12.9634 11.6667V9.16666C12.9634 7.28804 13.7097 5.48637 15.0381 4.15799C16.3665 2.82961 18.1682 2.08333 20.0468 2.08333C21.9254 2.08333 23.7271 2.82961 25.0554 4.15799C26.3838 5.48637 27.1301 7.28804 27.1301 9.16666V11.6667Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M32.2835 13.9167L33.6168 33.9167C33.6503 34.4289 33.5784 34.9425 33.4056 35.4258C33.2328 35.9092 32.9627 36.352 32.6121 36.7268C32.2614 37.1017 31.8376 37.4007 31.3669 37.6053C30.8961 37.81 30.3884 37.9159 29.8751 37.9167H10.2185C9.70502 37.9164 9.19708 37.8108 8.72611 37.6063C8.25514 37.4018 7.83116 37.1028 7.48041 36.7279C7.12966 36.3529 6.85961 35.9099 6.68698 35.4264C6.51435 34.9428 6.44281 34.429 6.4768 33.9167L7.81013 13.9167C7.87355 12.9675 8.29533 12.0779 8.99005 11.428C9.68477 10.7782 10.6005 10.4167 11.5518 10.4167H28.5418C29.4931 10.4167 30.4088 10.7782 31.1035 11.428C31.7983 12.0779 32.22 12.9675 32.2835 13.9167ZM24.1901 17.7967C23.8175 18.5799 23.2305 19.2415 22.4971 19.7047C21.7638 20.1679 20.9142 20.4138 20.0468 20.4138C19.1794 20.4138 18.3298 20.1679 17.5965 19.7047C16.8631 19.2415 16.2761 18.5799 15.9035 17.7967C15.833 17.6484 15.734 17.5154 15.6121 17.4054C15.4903 17.2954 15.3479 17.2104 15.1933 17.1554C15.0386 17.1004 14.8746 17.0764 14.7106 17.0847C14.5466 17.0931 14.3859 17.1337 14.2376 17.2042C14.0893 17.2746 13.9564 17.3736 13.8464 17.4955C13.7363 17.6173 13.6514 17.7597 13.5964 17.9144C13.5414 18.069 13.5173 18.2331 13.5257 18.397C13.5341 18.561 13.5747 18.7217 13.6451 18.87C14.2192 20.0821 15.1255 21.1063 16.2588 21.8235C17.3921 22.5407 18.7056 22.9214 20.0468 22.9214C21.3879 22.9214 22.7015 22.5407 23.8348 21.8235C24.9681 21.1063 25.8744 20.0821 26.4485 18.87C26.5189 18.7217 26.5595 18.561 26.5679 18.397C26.5762 18.2331 26.5522 18.069 26.4972 17.9144C26.4422 17.7597 26.3573 17.6173 26.2472 17.4955C26.1372 17.3736 26.0042 17.2746 25.856 17.2042C25.7077 17.1337 25.547 17.0931 25.383 17.0847C25.219 17.0764 25.055 17.1004 24.9003 17.1554C24.7456 17.2104 24.6033 17.2954 24.4815 17.4054C24.3596 17.5154 24.2606 17.6484 24.1901 17.7967Z" fill="currentColor" />
              </svg>
            </button>
          </div>
        </div>
      </nav>

      <div class="banner-section position-relative">
        <div class="container">
          <div class="vector vector-1">
            <img src="{{ asset('assets/img/whatsapp_stores/sports_store/vector-1.png') }}" class="bg-vector w-100" />
          </div>
          <div class="vector vector-2">
            <img src="{{ asset('assets/img/whatsapp_stores/sports_store/vector-2.png') }}" class="bg-vector w-100" />
          </div>
          <div class="vector vector-3">
            <img src="{{ asset('assets/img/whatsapp_stores/sports_store/vector-3.png') }}" class="bg-vector w-100" />
          </div>
          <div class="vector vector-4">
            <img src="{{ asset('assets/img/whatsapp_stores/sports_store/vector-4.png') }}" class="bg-vector w-100" />
          </div>
          <div class="vector vector-5">
            <img src="{{ asset('assets/img/whatsapp_stores/sports_store/vector-5.png') }}" class="bg-vector w-100" />
          </div>
          <div class="vector vector-6">
            <img src="{{ asset('assets/img/whatsapp_stores/sports_store/vector-6.png') }}" class="bg-vector w-100" />
          </div>
          <div class="vector vector-7">
            <img src="{{ asset('assets/img/whatsapp_stores/sports_store/vector-7.png') }}" class="bg-vector w-100" />
          </div>
        </div>
      </div>

      <div class="item-details-section mb-30">
        <div class="item-details-card overflow-hidden position-relative">
          <div class="container position-relative card-main">
            <div class="row gx-lg-5">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="row flex-sm-row flex-column-reverse align-items-center">
                  <div class="col-lg-3 col-sm-2 left-slider">
                    <div class="slider-nav">
                      @foreach ($product->images_url as $image)
                        <div>
                          <div class="thumbnail-img">
                            <img src="{{ $image }}" alt="items" class="w-100 h-100 object-fit-cover rounded" loading="lazy" />
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="col-lg-9 col-sm-10 ps-sm-0 mb-4 mb-sm-0">
                    <div class="slider-for">
                      @foreach ($product->images_url as $image)
                        <div>
                          <div class="details-img h-100 w-100">
                            <img src="{{ $image }}" alt="items" class="w-100 h-100 object-fit-cover rounded" loading="lazy" />
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 px-0">
                <div class="ps-0 ps-lg-4 details d-flex justify-content-between flex-column h-100">
                  <div>
                    {{-- <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                      <h4 class="fs-32 fw-7 mb-0 product-name">{{ $product->name }}</h4>
                      <a href="https://api.whatsapp.com/send?text={{ urlencode($product->name . ' - ' . url()->current()) }}" target="_blank" class="product-share-btn">
                        <i class="fas fa-share-alt me-1"></i>
                        <span class="fs-16">{{ __('messages.vcard.share') }}</span>
                      </a>
                    </div> --}}
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start mb-3 gap-3">
                      <h4 class="fs-32 fw-7 mb-0 product-name text-break">{{ $product->name }}</h4>
                      <a href="https://api.whatsapp.com/send?text={{ urlencode($product->name . ' - ' . url()->current()) }}" target="_blank" class="product-share-btn flex-shrink-0">
                        <i class="fas fa-share-alt me-1"></i>
                        <span class="fs-16">{{ __('messages.vcard.share') }}</span>
                      </a>
                    </div>
                    <input type="hidden" value="{{ $product->available_stock }}" class="available-stock">
                    <input type="hidden" value="{{ $product->category->name }}" class="product-category">
                    <input type="hidden" value="{{ $product->images_url[0] ?? '' }}" class="product-image">

                    <p class="fs-30 fw-7 mb-30 lh-sm">
                      <span class="text-primary selling_price">{{ currencyFormat($product->selling_price, 2, $product->currency->currency_code) }}</span>
                      @if ($product->net_price)
                        <del class="fs-20 fw-6 text-gray-200 ms-2">{{ currencyFormat($product->net_price, 2, $product->currency->currency_code) }}</del>
                      @endif
                    </p>
                    <p class="fs-20 fw-6 text-gray-200 mb-10 lh-sm">
                      {{ __('messages.whatsapp_stores_templates.description') }}
                    </p>
                    <p class="fw-5 fs-14 mb-40 lh-sm details-desc">
                      {!! $product->description !!}
                    </p>
                  </div>
                  @if ($product->available_stock != 0)
                    <button class="btn btn-primary d-flex justify-content-center align-items-center w-100 fs-18 gap-2 addToCartBtn" data-id="{{ $product->id }}">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                          <path d="M31.4875 25.4531L32.6527 19.1277C32.6781 18.9947 32.6706 18.8574 32.6307 18.728C32.5908 18.5985 32.5198 18.4808 32.424 18.3851C32.3281 18.2894 32.2102 18.2187 32.0807 18.1791C31.9512 18.1395 31.8139 18.1322 31.6809 18.1579C31.1281 18.2744 30.5648 18.3332 29.9999 18.3334C27.9216 18.3333 25.9184 17.5568 24.3831 16.1561C22.8478 14.7554 21.8912 12.8317 21.7009 10.7622C21.6834 10.5548 21.5887 10.3614 21.4357 10.2203C21.2826 10.0792 21.0823 10.0006 20.8741 10H9.1405L9.01987 9.45719C8.89649 8.90209 8.58751 8.40565 8.14395 8.04982C7.70039 7.694 7.14876 7.50005 6.58011 7.5H4.21081C3.79565 7.5 3.41097 7.78359 3.34425 8.19336C3.32398 8.31294 3.33004 8.43551 3.362 8.55251C3.39396 8.66952 3.45106 8.77814 3.52932 8.87081C3.60757 8.96348 3.7051 9.03796 3.81509 9.08907C3.92509 9.14018 4.04491 9.16667 4.1662 9.16672H6.57948C6.76931 9.16586 6.95368 9.23015 7.1018 9.34887C7.24992 9.46758 7.35282 9.63353 7.39331 9.81898L11.9122 30.1549C11.2522 30.362 10.6728 30.7689 10.2541 31.3196C9.83546 31.8702 9.59816 32.5372 9.57502 33.2286C9.55189 33.9199 9.74408 34.6013 10.125 35.1787C10.506 35.7561 11.0568 36.2009 11.7015 36.4516C12.3462 36.7023 13.0529 36.7465 13.7238 36.5782C14.3947 36.4099 14.9968 36.0374 15.4468 35.5121C15.8968 34.9867 16.1725 34.3346 16.2359 33.6458C16.2992 32.957 16.147 32.2655 15.8003 31.667H26.2828C25.9164 32.3022 25.7699 33.0407 25.8659 33.7678C25.962 34.4948 26.2953 35.1699 26.8141 35.6882C27.333 36.2065 28.0083 36.5392 28.7355 36.6345C29.4627 36.7299 30.201 36.5826 30.8359 36.2156C31.4708 35.8486 31.9669 35.2823 32.2472 34.6045C32.5275 33.9268 32.5763 33.1756 32.386 32.4673C32.1958 31.759 31.7772 31.1333 31.1951 30.6872C30.6129 30.2411 29.8999 29.9995 29.1665 30H13.5851L13.0296 27.5H29.029C29.6134 27.5 30.1794 27.2952 30.6285 26.9213C31.0777 26.5473 31.3816 26.0279 31.4875 25.4531ZM12.9165 34.5834C12.6693 34.5834 12.4276 34.51 12.2221 34.3727C12.0165 34.2353 11.8563 34.0401 11.7617 33.8117C11.6671 33.5833 11.6423 33.332 11.6905 33.0895C11.7388 32.847 11.8578 32.6243 12.0326 32.4495C12.2074 32.2747 12.4302 32.1556 12.6727 32.1074C12.9151 32.0591 13.1665 32.0839 13.3949 32.1785C13.6233 32.2731 13.8185 32.4333 13.9559 32.6389C14.0932 32.8445 14.1665 33.0861 14.1665 33.3334C14.1665 33.6649 14.0348 33.9828 13.8004 34.2172C13.566 34.4517 13.248 34.5834 12.9165 34.5834ZM30.4165 33.3334C30.4165 33.5806 30.3432 33.8223 30.2059 34.0278C30.0685 34.2334 29.8733 34.3936 29.6449 34.4882C29.4165 34.5828 29.1651 34.6076 28.9227 34.5593C28.6802 34.5111 28.4574 34.3921 28.2826 34.2172C28.1078 34.0424 27.9888 33.8197 27.9405 33.5772C27.8923 33.3347 27.9171 33.0834 28.0117 32.855C28.1063 32.6266 28.2665 32.4314 28.4721 32.294C28.6776 32.1567 28.9193 32.0834 29.1665 32.0834C29.498 32.0834 29.816 32.2151 30.0504 32.4495C30.2848 32.6839 30.4165 33.0018 30.4165 33.3334Z" fill="currentColor" />
                          <path d="M29.9997 3.3335C28.6811 3.3335 27.3922 3.72449 26.2959 4.45703C25.1995 5.18957 24.3451 6.23075 23.8405 7.44892C23.3359 8.66709 23.2039 10.0075 23.4611 11.3007C23.7183 12.5939 24.3533 13.7818 25.2856 14.7142C26.218 15.6465 27.4059 16.2814 28.6991 16.5387C29.9923 16.7959 31.3327 16.6639 32.5509 16.1593C33.769 15.6547 34.8102 14.8002 35.5428 13.7039C36.2753 12.6076 36.6663 11.3187 36.6663 10.0001C36.6663 8.23204 35.9639 6.53637 34.7137 5.28613C33.4634 4.0359 31.7677 3.33352 29.9997 3.3335ZM32.9163 10.8335H30.833V12.9169C30.8341 13.027 30.8133 13.1362 30.7719 13.2382C30.7305 13.3403 30.6693 13.4331 30.5918 13.5113C30.5143 13.5896 30.4221 13.6517 30.3205 13.6941C30.2188 13.7365 30.1098 13.7583 29.9997 13.7583C29.8896 13.7583 29.7805 13.7365 29.6789 13.6941C29.5773 13.6517 29.4851 13.5896 29.4076 13.5113C29.3301 13.4331 29.2689 13.3403 29.2275 13.2382C29.1861 13.1362 29.1653 13.027 29.1664 12.9169V10.8335H27.083C26.9729 10.8346 26.8637 10.8138 26.7616 10.7724C26.6596 10.731 26.5668 10.6698 26.4885 10.5923C26.4103 10.5148 26.3482 10.4226 26.3058 10.321C26.2634 10.2193 26.2416 10.1103 26.2416 10.0002C26.2416 9.89006 26.2634 9.78103 26.3058 9.6794C26.3482 9.57777 26.4103 9.48554 26.4885 9.40806C26.5668 9.33057 26.6596 9.26936 26.7616 9.22796C26.8637 9.18656 26.9729 9.16579 27.083 9.16686H29.1664V7.0835C29.1653 6.97338 29.1861 6.86415 29.2275 6.76211C29.2689 6.66008 29.3301 6.56725 29.4076 6.48901C29.4851 6.41077 29.5773 6.34866 29.6789 6.30628C29.7805 6.26389 29.8896 6.24207 29.9997 6.24207C30.1098 6.24207 30.2188 6.26389 30.3205 6.30628C30.4221 6.34866 30.5143 6.41077 30.5918 6.48901C30.6693 6.56725 30.7305 6.66008 30.7719 6.76211C30.8133 6.86415 30.8341 6.97338 30.833 7.0835V9.16686H32.9164C33.136 9.16898 33.3459 9.25771 33.5004 9.41376C33.655 9.56981 33.7417 9.78055 33.7417 10.0002C33.7417 10.2198 33.655 10.4305 33.5004 10.5866C33.3459 10.7426 33.136 10.8314 32.9164 10.8335H32.9163Z" fill="currentColor" />
                        </svg>
                      </span>
                      {{ __('messages.whatsapp_stores_templates.add_to_cart') }}
                    </button>
                  @else
                    <button class="btn btn-danger text-white d-flex justify-content-center align-items-center w-50 fs-18 gap-2 fw-5 out-of-stock-text mx-auto">
                      {{ __('messages.whatsapp_stores.out_of_stock') }}
                    </button>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="recommended-product-section px-40 position-relative">
        <div class="section-heading mb-40 text-center">
          <h2 class="position-relative mb-0 d-inline-block">{{ __('messages.whatsapp_stores_templates.recommended_products') }}</h2>
        </div>
        <div class="product-slider product-all-section">
          @foreach ($whatsappStore->products()->where('id', '!=', $product->id)->orderByRaw('sort IS NULL, sort ASC')->orderByDesc('created_at')->get() as $recProduct)
            <div>
              <div class="product-card responsive-product-card h-100 d-flex flex-column mx-auto">
                <a href="{{ route('whatsapp.store.product.details', [$whatsappStore->url_alias, $recProduct->id]) }}" class="d-block flex-grow-1 text-decoration-none">
                  <div class="product-img w-100 d-flex justify-content-center align-items-center mx-auto">
                    <img src="{{ $recProduct->images_url[0] ?? '' }}" alt="{{ $recProduct->name }}" class="h-100 w-100 object-fit-cover product-image" loading="lazy" />
                  </div>
                  <div class="product-desc">
                    <p class="fs-18 text-black fw-6 mb-0 product-name webkit-box-2">{{ $recProduct->name }}</p>
                    <p class="fs-14 text-gray-200 fw-normal mb-10 product-category webkit-box-1">{{ $recProduct->category->name }}</p>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <span class="text-primary fs-20 fw-6 selling_price">
                        {{ currencyFormat($recProduct->selling_price, 2, $recProduct->currency->currency_code) }}
                      </span>
                      @if ($recProduct->net_price)
                        <del class="fs-16 fw-5 text-gray-200">
                          {{ currencyFormat($recProduct->net_price, 2, $recProduct->currency->currency_code) }}
                        </del>
                      @endif
                    </div>
                  </div>
                </a>
                <input type="hidden" value="{{ $recProduct->available_stock }}" class="available-stock">
                <input type="hidden" value="{{ $recProduct->category->name }}" class="product-category">
                <input type="hidden" value="{{ $recProduct->images_url[0] ?? '' }}" class="product-image">
                <div class="d-flex justify-content-center align-items-center mt-auto">
                  @if ($recProduct->available_stock > 0)
                    <button data-id="{{ $recProduct->id }}" class="cart-btn d-flex justify-content-center align-items-center addToCartBtn">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.7103 6.00002H21.2921L19.8081 15H7.19428L5.7103 6.00002Z" stroke="white" stroke-width="1.48438" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 20C9.55228 20 10 19.5523 10 19C10 18.4477 9.55228 18 9 18C8.44772 18 8 18.4477 8 19C8 19.5523 8.44772 20 9 20Z" stroke="white" stroke-width="1.48438" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18 20C18.5523 20 19 19.5523 19 19C19 18.4477 18.5523 18 18 18C17.4477 18 17 18.4477 17 19C17 19.5523 17.4477 20 18 20Z" stroke="white" stroke-width="1.48438" />
                        <path d="M7 6H3" stroke="white" stroke-width="1.48438" stroke-linecap="round" />
                      </svg>
                    </button>
                  @else
                    <span class="bg-danger text-white d-flex p-2 justify-content-center align-items-center mx-auto gap-2 out-of-stock-text fs-16" style="border-radius: 10px;">
                      {{ __('messages.whatsapp_stores.out_of_stock') }}
                    </span>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <div class="bg-img">
        <img src="{{ asset('assets/img/whatsapp_stores/sports_store/bg-img.png') }}" class="bg-img w-100" />
      </div>
    </div>

    @include('whatsapp_stores.templates.order_modal')
    @include('whatsapp_stores.templates.sports_store.cart_modal')

    <footer class="position-relative text-black py-4 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="mb-3">
              <img src="{{ $whatsappStore->logo_url }}" alt="logo" style="width: 50px !important; height: 50px !important;">
            </div>
            <div>
              © {{ __('messages.placeholder.copyright') }} {{ now()->year }} {{ env('APP_NAME') }}. {{ __('messages.placeholder.all_rights_reserve') }}.
            </div>
          </div>

        @php
            $tc = $whatsappStore->termCondition?->term_condition;
            $hasTc = !empty($tc) && !in_array(trim($tc), ['<p><br></p>', '<p></p>', '<p>&nbsp;</p>']);
            $pp = $whatsappStore->privacyPolicy?->privacy_policy;
            $hasPp = !empty($pp) && !in_array(trim($pp), ['<p><br></p>', '<p></p>', '<p>&nbsp;</p>']);
            $rc = $whatsappStore->refundCancellation?->refund_cancellation_policy;
            $hasRc = !empty($rc) && !in_array(trim($rc), ['<p><br></p>', '<p></p>', '<p>&nbsp;</p>']);
            $sd = $whatsappStore->shippingDelivery?->shipping_delivery_policy;
            $hasSd = !empty($sd) && !in_array(trim($sd), ['<p><br></p>', '<p></p>', '<p>&nbsp;</p>']);
        @endphp

          <div class="col-lg-4 col-md-6 mb-3">
            @if ($hasTc || $hasPp || $hasRc || $hasSd)
                <h5 class="fw-bold text-black mb-3">
                    <i class="fas fa-headset me-2 text-black"></i>{{ __('messages.whatsapp_stores.support_services') }}
                </h5>
            <ul class="list-unstyled">
              @if ($hasTc)
              <li class="mb-2">
                <a href="{{ route('whatsapp.store.show-terms-conditions', $whatsappStore->url_alias) }}" target="_blank" class="text-decoration-none text-black footer-link-hover">
                  <i class="fas fa-file-contract me-2"></i>{{ __('messages.vcard.term_condition') }}
                </a>
              </li>
              @endif
              @if ($hasPp)
              <li class="mb-2">
                <a href="{{ route('whatsapp.store.show-privacy-policy', $whatsappStore->url_alias) }}" target="_blank" class="text-decoration-none text-black footer-link-hover">
                  <i class="fas fa-shield-alt me-2"></i>{{ __('messages.vcard.privacy_policy') }}
                </a>
              </li>
              @endif
              @if ($hasRc)
              <li class="mb-2">
                <a href="{{ route('whatsapp.store.show-refund-cancellation', $whatsappStore->url_alias) }}" target="_blank" class="text-decoration-none text-black footer-link-hover">
                  <i class="fas fa-undo-alt me-2"></i>{{ __('messages.vcard.refund_cancellation_policy') }}
                </a>
              </li>
              @endif
              @if ($hasSd)
              <li class="mb-2">
                <a href="{{ route('whatsapp.store.show-shipping-delivery', $whatsappStore->url_alias) }}" target="_blank" class="text-decoration-none text-black footer-link-hover">
                  <i class="fas fa-shipping-fast me-2"></i>{{ __('messages.vcard.shipping_delivery_policy') }}
                </a>
              </li>
              @endif
            </ul>
            @endif
          </div>

          <div class="col-md-4">
            <div class="fw-5 fs-16">
              <h5 class="fw-bold text-black mb-3">
                <i class="fas fa-comments me-2 text-black"></i>{{ __('messages.whatsapp_stores.talk_to_us') }}
              </h5>
              <div class="mb-2">
                <i class="fas fa-map-marker-alt"></i> {{ $whatsappStore->address }}
              </div>
              <div>
                <i class="fa-solid fa-phone"></i> +{{ $whatsappStore->region_code }} {{ $whatsappStore->whatsapp_no }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

    @include('whatsapp_stores.templates.whatsapp_widget')
    <!-- Scroll to top button -->
    <a href="#" class="scroll-to-top-btn" id="scrollToTopBtn" title="Scroll to top" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </a>
</body>

<script>
    @if ($whatsappStore->custom_js)
        {!! $whatsappStore->custom_js !!}
    @endif
</script>
<script>
    let vcardAlias = "{{ $whatsappStore->url_alias }}";
    let languageChange = "{{ url('whatsapp-stores/language') }}";
    let lang = "{{ checkLanguageSession($whatsappStore->url_alias) }}";
    let userlanguage = "{{ getLanguage($whatsappStore->default_language) }}";
    let isRtl = "{{ getLocalLanguage() == 'ar' || getLocalLanguage() == 'fa' ? 'true' : 'false' }}" === "true";
</script>
<script>
    let templateName = "sports_store";
</script>
<script src="{{ asset('messages.js?$mixID') }}"></script>
<script src="{{ asset('assets/js/intl-tel-input/build/intlTelInput.js') }}"></script>
<script src="{{ asset('assets/js/vcard11/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/front-third-party-vcard11.js') }}"></script>
<script src="{{ mix('assets/js/custom/helpers.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/whatsapp_store_template.js') }}"></script>
<script src="{{ asset('assets/js/slider/js/slick.min.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $(".product-slider").slick({
            infinite: true,
            slidesToShow: 4,
            rtl: isRtl,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            prevArrow: '<button class="slide-trending-arrow prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 10 20" fill="none"><path d="M8.01843 19.124L0.253456 10.7018C0.16129 10.6016 0.0961597 10.493 0.0580645 10.376C0.0193548 10.259 0 10.1337 0 10C0 9.86631 0.0193548 9.74098 0.0580645 9.62401C0.0961597 9.50704 0.16129 9.39842 0.253456 9.29815L8.01843 0.850923C8.23349 0.616974 8.50231 0.5 8.82489 0.5C9.14747 0.5 9.42396 0.62533 9.65438 0.875989C9.88479 1.12665 10 1.41909 10 1.7533C10 2.08751 9.88479 2.37995 9.65438 2.63061L2.88018 10L9.65438 17.3694C9.86943 17.6033 9.97696 17.8914 9.97696 18.2337C9.97696 18.5766 9.86175 18.8734 9.63134 19.124C9.40092 19.3747 9.1321 19.5 8.82489 19.5C8.51767 19.5 8.24885 19.3747 8.01843 19.124Z" fill="currentColor"/></svg></button>',
            nextArrow: '<button class="slide-trending-arrow next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 10 20" fill="none"><path d="M1.98157 19.124L9.74654 10.7018C9.83871 10.6016 9.90384 10.493 9.94194 10.376C9.98065 10.259 10 10.1337 10 10C10 9.86631 9.98065 9.74098 9.94194 9.62401C9.90384 9.50704 9.83871 9.39842 9.74654 9.29815L1.98157 0.850923C1.76651 0.616974 1.49769 0.5 1.17511 0.5C0.852534 0.5 0.576037 0.62533 0.345622 0.875989C0.115208 1.12665 0 1.41909 0 1.7533C0 2.08751 0.115208 2.37995 0.345622 2.63061L7.11982 10L0.345622 17.3694C0.130569 17.6033 0.0230408 17.8914 0.0230408 18.2337C0.0230408 18.5766 0.138248 18.8734 0.368663 19.124C0.599078 19.3747 0.867895 19.5 1.17511 19.5C1.48233 19.5 1.75115 19.3747 1.98157 19.124Z" fill="currentColor"/></svg></button>',
             responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 860,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        dots: false,
                        arrows: true,
                        prevArrow: '<button class="slide-trending-arrow prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M0 6.99998C0 6.74907 0.0960374 6.49819 0.287709 6.3069L6.32224 0.287199C6.70612 -0.0957328 7.3285 -0.0957328 7.71221 0.287199C8.09593 0.669975 8.09593 1.29071 7.71221 1.67367L2.37252 6.99998L7.71203 12.3263C8.09574 12.7092 8.09574 13.3299 7.71203 13.7127C7.32831 14.0958 6.70593 14.0958 6.32206 13.7127L0.287522 7.69306C0.09582 7.50167 0 7.25079 0 6.99998Z" fill="currentColor" /></svg></button>',
                        nextArrow: '<button class="slide-trending-arrow next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M8 7.00002C8 7.25093 7.90396 7.50181 7.71229 7.6931L1.67776 13.7128C1.29388 14.0957 0.671503 14.0957 0.287787 13.7128C-0.095929 13.33 -0.095929 12.7093 0.287787 12.3263L5.62748 7.00002L0.287973 1.67369C-0.0957425 1.29076 -0.0957425 0.670084 0.287973 0.287339C0.67169 -0.0957785 1.29407 -0.0957785 1.67794 0.287339L7.71248 6.30694C7.90418 6.49833 8 6.74921 8 7.00002Z" fill="currentColor"/></svg></button>',

                    },
                },
            ],
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".slider-for").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<button class="slide-banner-arrow prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M0 6.99998C0 6.74907 0.0960374 6.49819 0.287709 6.3069L6.32224 0.287199C6.70612 -0.0957328 7.3285 -0.0957328 7.71221 0.287199C8.09593 0.669975 8.09593 1.29071 7.71221 1.67367L2.37252 6.99998L7.71203 12.3263C8.09574 12.7092 8.09574 13.3299 7.71203 13.7127C7.32831 14.0958 6.70593 14.0958 6.32206 13.7127L0.287522 7.69306C0.09582 7.50167 0 7.25079 0 6.99998Z" fill="currentColor" /></svg></button>',
            nextArrow: '<button class="slide-banner-arrow next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M8 7.00002C8 7.25093 7.90396 7.50181 7.71229 7.6931L1.67776 13.7128C1.29388 14.0957 0.671503 14.0957 0.287787 13.7128C-0.095929 13.33 -0.095929 12.7093 0.287787 12.3263L5.62748 7.00002L0.287973 1.67369C-0.0957425 1.29076 -0.0957425 0.670084 0.287973 0.287339C0.67169 -0.0957785 1.29407 -0.0957785 1.67794 0.287339L7.71248 6.30694C7.90418 6.49833 8 6.74921 8 7.00002Z" fill="currentColor"/></svg></button>',
            fade: true,
            dots: false,
            rtl: isRtl,
            asNavFor: ".slider-nav",
        });
        $(".slider-nav").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: ".slider-for",
            vertical: true,
            autoplay: true,
            infinite: true,
            dots: false,
            arrows: false,
            prevArrow: '<button class="slide-banner-arrow prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M0 6.99998C0 6.74907 0.0960374 6.49819 0.287709 6.3069L6.32224 0.287199C6.70612 -0.0957328 7.3285 -0.0957328 7.71221 0.287199C8.09593 0.669975 8.09593 1.29071 7.71221 1.67367L2.37252 6.99998L7.71203 12.3263C8.09574 12.7092 8.09574 13.3299 7.71203 13.7127C7.32831 14.0958 6.70593 14.0958 6.32206 13.7127L0.287522 7.69306C0.09582 7.50167 0 7.25079 0 6.99998Z" fill="currentColor" /></svg></button>',
            nextArrow: '<button class="slide-banner-arrow next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M8 7.00002C8 7.25093 7.90396 7.50181 7.71229 7.6931L1.67776 13.7128C1.29388 14.0957 0.671503 14.0957 0.287787 13.7128C-0.095929 13.33 -0.095929 12.7093 0.287787 12.3263L5.62748 7.00002L0.287973 1.67369C-0.0957425 1.29076 -0.0957425 0.670084 0.287973 0.287339C0.67169 -0.0957785 1.29407 -0.0957785 1.67794 0.287339L7.71248 6.30694C7.90418 6.49833 8 6.74921 8 7.00002Z" fill="currentColor"/></svg></button>',

            focusOnSelect: true,
            responsive: [{
                    breakpoint: 1129,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 5,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 4,
                        vertical: false,
                        dots: true,
                        rtl: isRtl,
                    },
                },
                {
                    breakpoint: 460,
                    settings: {
                        slidesToShow: 3,
                        vertical: false,
                        dots: true,
                        rtl: isRtl,
                    },
                },
            ],
        });
    });
</script>
<script>
    let defaultCountryCodeValue = "{{ getSuperAdminSettingValue('default_country_code') }}"
</script>
<script>
    const getCookieUrl = "{{ route('whatsapp.store.getCookie') }}";
    const emailSubscriptionUrl = "{{ route('whatsapp.store.emailSubscriprion-store', ['alias' => $whatsappStore->url_alias]) }}";
</script>
<script>
$(document).ready(function() {
    function addAdvancedCursorZoom(selector, zoomLevel = 2) {
        $(selector).each(function() {
            const $img = $(this);
            const $container = $img.parent();
            let isZoomed = false;

            $container.addClass('zoom-container');
            $img.addClass('zoomable-image');

            $container.on('mouseenter', function(e) {
                isZoomed = true;
                $img.css({
                    'transform': `scale(${zoomLevel})`,
                    'transition': 'transform 0.3s ease'
                });
                updateTransformOrigin(e);
            });

            $container.on('mouseleave', function() {
                isZoomed = false;
                $img.css({
                    'transform': 'scale(1)',
                    'transform-origin': 'center center',
                    'transition': 'transform 0.3s ease, transform-origin 0.1s ease'
                });
            });

            $container.on('mousemove', function(e) {
                if (isZoomed) {
                    updateTransformOrigin(e);
                }
            });

            function updateTransformOrigin(e) {
                const rect = $container[0].getBoundingClientRect();
                const x = ((e.clientX - rect.left) / rect.width) * 100;
                const y = ((e.clientY - rect.top) / rect.height) * 100;

                $img.css({
                    'transform-origin': `${x}% ${y}%`,
                    'transition': 'transform 0.3s ease, transform-origin 0.1s ease'
                });
            }
        });
    }

    addAdvancedCursorZoom('.details-img img', 2.8);
    addAdvancedCursorZoom('.product-img img', 2.2);
    addAdvancedCursorZoom('.thumbnail-img img', 2);
});
</script>
<script>
    // Scroll to top button logic
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    if (scrollToTopBtn) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                scrollToTopBtn.classList.add("show");
            } else {
                scrollToTopBtn.classList.remove("show");
            }
        });
    }
</script>
</html>
