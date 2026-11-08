@if (isset($whatsappStore->display_whatsapp_widget) && $whatsappStore->display_whatsapp_widget)
    @php
        $waNumber = preg_replace('/[^0-9]/', '', ($whatsappStore->region_code ?? '') . ($whatsappStore->whatsapp_no ?? ''));
        // $waMessage = rawurlencode("Hello! I'm interested in your store. Can you please help me?");
    @endphp

    <div class="store-whatsapp-widget">
        <!-- Modal -->
        <div id="storeWhatsappModal" class="store-whatsapp-modal">
            <div class="store-whatsapp-header d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center overflow-hidden">
                    <div class="bg-white rounded-circle d-flex align-items-center justify-content-center p-1 me-2 flex-shrink-0" style="width: 40px; height: 40px;">
                        <img src="{{ $whatsappStore->logo_url }}" alt="{{ $whatsappStore->store_name }}" class="img-fluid" style="max-height: 32px; object-fit: contain;">
                    </div>
                    <div class="text-white" style="min-width: 0;">
                        <h6 class="fw-bold mb-0 text-white" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                            {{ $whatsappStore->store_name }}
                        </h6>
                    </div>
                </div>
                <button id="closeStoreWhatsapp" type="button" class="btn btn-link text-white p-0 border-0 shadow-none">
                    <i class="fa-solid fa-xmark fs-2"></i>
                </button>
            </div>

            <div class="p-4">
                <div class="store-whatsapp-message mb-4">
                    <div class="text-dark">
                        <p class="mb-1">{{ __('messages.front_cms.hi_there') }} 👋</p>
                        <p class="mb-0">{{ __('messages.front_cms.how_can_help_you') }}</p>
                    </div>
                </div>

                <a href="https://wa.me/{{ $waNumber }}" target="_blank"
                   class="store-whatsapp-chat-btn d-flex align-items-center justify-content-center gap-2">
                    <i class="fa-brands fa-whatsapp fs-4 text-white"></i>
                    <span class="text-white">{{__('messages.front_cms.chat_on_whatsapp')}}</span>
                </a>
            </div>
        </div>

        <!-- Sticky Button -->
        <button id="toggleStoreWhatsapp" type="button" class="store-whatsapp-sticky-btn" aria-label="Open WhatsApp Chat">
            <span class="store-whatsapp-notification"></span>
            <i class="fa-brands fa-whatsapp text-white fs-3"></i>
        </button>
    </div>

    <script>
        (function() {
            var toggle = document.getElementById('toggleStoreWhatsapp');
            var modal = document.getElementById('storeWhatsappModal');
            var close = document.getElementById('closeStoreWhatsapp');

            if (toggle && modal) {
                toggle.addEventListener('click', function() {
                    if (modal.style.display === 'block') {
                        modal.style.display = 'none';
                    } else {
                        modal.style.display = 'block';
                    }
                });
            }

            if (close && modal) {
                close.addEventListener('click', function() {
                    modal.style.display = 'none';
                });
            }
        })();
    </script>
@endif
