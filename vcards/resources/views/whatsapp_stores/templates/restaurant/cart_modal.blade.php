<div class="modal fade restaurant-add-cart-modal" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-transparent border-0 py-4 px-2">
            <div class="modal-body p-0">
                <div class="row row-gap-30px mx-0">
                    <div class="col-lg-8">
                        <div class="recommended-section overflow-auto h-100">
                            <div class="p-3">
                                <p class="text-uppercase mb-1 fs-14 fw-6 text-primary">
                                    {{ __('messages.whatsapp_stores_templates.your_cart') }}
                                </p>
                                <h2 class="text-white fs-24"><span class="product-count-badge">0</span>
                                    {{ __('messages.whatsapp_stores_templates.curated_items') }}</h2>
                            </div>
                            <div class="recommended">
                                <table class="w-100">
                                    <thead>
                                        <tr>
                                            <th class="fs-18 fw-5 text-white"></th>
                                            <th class="fs-18 fw-5 text-white text-center text-nowrap"></th>
                                            <th class="fs-18 fw-5 text-white text-center text-nowrap"></th>
                                            <th class="fs-18 fw-5 text-white text-end"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="cartItemsCloth">

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-section d-flex justify-content-between flex-column h-100 p-3">
                            <div class="mb-20">
                                <p class="text-uppercase mb-1 fs-14 fw-6 text-primary">
                                    {{ __('messages.whatsapp_stores_templates.order_summary') }}
                                </p>
                                <div class="cart-box">
                                    <h2 class="fs-20 fw-5 text-white mb-0">
                                        {{ __('messages.whatsapp_stores_templates.total_price') }}</h2>
                                    <div id="totalDetails">

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <p class="fs-16 text-white fw-5 mb-0 total">{{ __('messages.nfc.total') }}</p>
                                    <p class="fs-16 text-white fw-5 mb-0 total">
                                        <span id="subTotal">0</span></p>
                                </div>
                                @if (!empty($whatsappStore->discount))
                                    <input type="hidden" id="storeDiscount" value="{{ $whatsappStore->discount }}">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="fs-16 text-white fw-5 mb-0 total">-
                                            {{ __('messages.whatsapp_stores.discount') }} ({{ $whatsappStore->discount }}%)
                                        </p>
                                        <p class="fs-16 text-success fw-5 mb-0 total">-
                                            <span id="discountPercentage">0</span></p>
                                    </div>
                                @endif

                                <div id="deliveryChargeSection" class="d-none">
                                    <input type="hidden" id="deliveryChargeAmount" value="{{ $whatsappStore->delivery_charge }}">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <p class="fs-16 text-white fw-5 mb-0 total">+
                                            {{ __('messages.whatsapp_stores.delivery_charge') }}</p>
                                        <p class="fs-16 text-white fw-5 mb-0 total">+
                                            <span id="deliveryChargeText">0</span></p>
                                    </div>
                                </div>

                                <div
                                    class="grand-total-box mt-4 p-3 py-2 rounded-4 d-flex justify-content-between align-items-center">
                                    <p class="fs-16 text-white text-uppercase fw-5 mb-0">
                                        {{ __('messages.whatsapp_stores.grand_total') }}
                                    </p>
                                    <p class="fs-24 text-white fw-6 mb-0">
                                        <span id="grandTotal">0</span>
                                    </p>
                                </div>

                                @if ($whatsappStore->take_away || $whatsappStore->delivery)
                                    <h3 class="fs-18 fw-5 text-white mb-3 mt-3">{{ __('messages.whatsapp_stores.fulfillment_method') }}</h3>
                                    <div class="d-flex flex-column flex-md-row gap-3 mb-4">
                                        @if ($whatsappStore->take_away)
                                            <div class="flex-grow-1">
                                                <input class="btn-check delivery-type" type="radio" name="order_type" id="takeAway" value="1" checked>
                                                <label class="btn w-100 d-flex align-items-center justify-content-center gap-2 py-7 rounded-3 fulfillment-label fs-16 fw-5" for="takeAway">
                                                    <i class="fas fa-shopping-bag"></i> {{ __('messages.whatsapp_stores.take_away') }}
                                                </label>
                                            </div>
                                        @endif
                                        @if ($whatsappStore->delivery)
                                            <div class="flex-grow-1">
                                                <input class="btn-check delivery-type" type="radio" name="order_type" id="delivery" value="2" {{ !$whatsappStore->take_away ? 'checked' : '' }}>
                                                <label class="btn w-100 d-flex align-items-center justify-content-center gap-2 py-7 rounded-3 fulfillment-label fs-16 fw-5" for="delivery">
                                                    <i class="fas fa-truck"></i> {{ __('messages.whatsapp_stores.delivery') }}
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                @endif

                                <button class="btn btn-primary w-100 order-btn py-7 mt-4 rounded-5 justify-content-center d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#orderNowModal">
                                    {{ __('messages.whatsapp_stores_templates.order_now') }} <i class="fas fa-arrow-right fs-18"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
