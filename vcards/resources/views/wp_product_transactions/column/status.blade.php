@php
    $statusArr = App\Models\WpOrder::STATUS_ARR;

    if ($row->order_type == App\Models\WpOrder::TAKE_AWAY) {
        $statusArr[App\Models\WpOrder::DISPATCHED] = __('ready_for_pickup');
        $statusArr[App\Models\WpOrder::DELIVERED]  = __('picked_up');
    }

    if ($row->status == App\Models\WpOrder::PENDING) {
        unset($statusArr[App\Models\WpOrder::DELIVERED]);
    } elseif ($row->status == App\Models\WpOrder::DISPATCHED) {
        unset($statusArr[App\Models\WpOrder::PENDING]);
        unset($statusArr[App\Models\WpOrder::CANCELLED]);
    }
@endphp

@if ($row->status == App\Models\WpOrder::PENDING || $row->status == App\Models\WpOrder::DISPATCHED)
    <div wire:key="order-status-{{ $row->id }}-{{ $row->status }}">
        {{ Form::select('status', getTranslatedData($statusArr)->toArray(), $row->status, ['class' => 'form-control form-select wp-product-order-status', 'data-id' => $row->id]) }}
    </div>
@elseif($row->status == App\Models\WpOrder::DELIVERED)
    <span class="badge bg-light-success" style="width: 100px">
        {{ $row->order_type == App\Models\WpOrder::TAKE_AWAY ? __('messages.picked_up') : __('messages.delivered') }}
    </span>
@elseif($row->status == App\Models\WpOrder::CANCELLED)
    <span class="badge bg-light-danger" style="width: 100px">{{ __('messages.cancelled') }}</span>
@endif