<?php

namespace App\Livewire;

use App\Models\Currency;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Database\Eloquent\Builder;

class CurrencyTable extends LivewireTableComponent
{

    protected $model = Currency::class;

    protected $listeners = ['refresh' => '$refresh', 'resetPageTable'];

    public bool $showButtonOnHeader = true;
    public string $buttonComponent = 'sadmin.currencies.add-button';

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setPageName('currency-table');
        $this->setDefaultSort('created_at', 'desc');
        $this->setColumnSelectStatus(false);
        $this->setQueryStringStatus(false);
        $this->resetPage('currency-table');

        $this->setThAttributes(function (Column $column) {
            if ($column->isField('id')) {
                return [
                    'class' => 'd-flex justify-content-center',
                ];
            }
            return [];
        });
    }
    public function columns(): array
    {
        return [
            Column::make(__('messages.common.name'), 'currency_name')
                ->sortable()->searchable(),
            Column::make(__('messages.currency.currency_icon'), 'currency_icon')
                ->sortable()->searchable(),
            Column::make(__('messages.currency.currency_code'), 'currency_code')
                ->sortable()->searchable(),
            Column::make(__('messages.common.action'), 'id')
                ->view('sadmin.currencies.columns.action'),
        ];
    }

    public function builder(): Builder
    {
        return Currency::query();
    }
    
    public function resetPageTable($pageName = 'currency-table')
    {
        $rowsPropertyData = $this->getRows()->toArray();
        $prevPageNum = $rowsPropertyData['current_page'] - 1;
        $prevPageNum = $prevPageNum > 0 ? $prevPageNum : 1;
        $pageNum = count($rowsPropertyData['data']) > 0 ? $rowsPropertyData['current_page'] : $prevPageNum;

        $this->setPage($pageNum, $pageName);
    }
    
    public function placeholder()
    {
        return view('lazy_loading.without-listing-skelecton');
    }
}
