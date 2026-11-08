<div class="modal fade common-modal-card" id="addCurrencyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ __('messages.currency.new_currency') }}</h3>
                <button type="button" class="modal-close bg-transparent p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Menu / Close_MD"> <path id="Vector" d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                </button>
            </div>
            {{ Form::open(['id'=>'addCurrencyForm']) }}
            <div class="modal-body pt-0">
                <div class="alert alert-danger fs-4 text-white d-flex align-items-center  d-none" role="alert" id="currencyValidationErrorsBox">
                    <i class="fa-solid fa-face-frown me-5"></i>
                </div>
                <div class="mb-3">
                    {{ Form::label('currency_name',__('messages.common.name').':', ['class' => 'form-label required']) }}
                    {{ Form::text('currency_name', null, ['class' => 'form-control', 'required','placeholder' => __('messages.common.name'),'id' => 'currencyName','autofocus']) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('currency_icon',__('messages.currency.currency_icon').':', ['class' => 'form-label required']) }}
                    {{ Form::text('currency_icon', null, ['class' => 'form-control','autofocus','required','placeholder' => __('messages.currency.currency_icon')]) }}
                </div>
                <div>
                    {{ Form::label('currency_code',__('messages.currency.currency_code').':', ['class' => 'form-label required']) }}
                    {{ Form::text('currency_code', null, ['class' => 'form-control', 'autofocus','required','maxlength' => '3', 'minlength' => '3', 'pattern' => '^[A-Z]{3}$', 'title' => 'The currency code must be exactly 3 letters.', 'style' => 'text-transform: uppercase', 'oninput' => 'this.value = this.value.toUpperCase()', 'onkeypress' => 'return (event.charCode > 64 && event.charCode < 91 ) || (event.charCode > 96 && event.charCode < 123)','placeholder' => __('messages.currency.currency_code')]) }}
                </div>
            </div>
            <div class="modal-footer pt-0 justify-content-start">
                {{ Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary m-0','id'=>'btnSave']) }}
                <button type="button" class="btn discard-btn my-0 ms-3 me-0"
                        data-bs-dismiss="modal">{{ __('messages.common.discard') }}</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
