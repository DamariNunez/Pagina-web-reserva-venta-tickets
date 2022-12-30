<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Bill')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Bill')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('Bill')->create && hasPermission(getRouteName().'.bill.create', 0, 0))
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.bill.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('Bill') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('Bill')->searchable())
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" @if(config('easy_panel.lazy_mode')) wire:model.lazy="search" @else wire:model="search" @endif placeholder="{{ __('Search') }}" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-default">
                                        <a wire:target="search" wire:loading.remove><i class="fa fa-search"></i></a>
                                        <a wire:loading wire:target="search"><i class="fas fa-spinner fa-spin" ></i></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style='cursor: pointer' wire:click="sort('date')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'date') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'date') fa-sort-amount-up ml-2 @endif'></i> {{ __('Date') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('totalValue')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'totalValue') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'totalValue') fa-sort-amount-up ml-2 @endif'></i> {{ __('TotalValue') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('idPayment')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'idPayment') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'idPayment') fa-sort-amount-up ml-2 @endif'></i> {{ __('IdPayment') }} </th>
                            
                            @if(getCrudConfig('Bill')->delete or getCrudConfig('Bill')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bills as $bill)
                            @livewire('admin.bill.single', [$bill], key($bill->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $bills->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>
