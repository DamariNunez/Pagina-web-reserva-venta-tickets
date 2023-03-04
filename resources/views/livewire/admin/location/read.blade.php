<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Location')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Location')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('Location')->create && hasPermission(getRouteName().'.location.create', 0, 0))
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.location.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('Location') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('Location')->searchable())
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
                            <th scope="col" style='cursor: pointer' wire:click="sort('name')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'name') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'name') fa-sort-amount-up ml-2 @endif'></i> {{ __('Name') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('capacity')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'capacity') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'capacity') fa-sort-amount-up ml-2 @endif'></i> {{ __('Capacity') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('price')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'price') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'price') fa-sort-amount-up ml-2 @endif'></i> {{ __('Price') }} </th>
                            
                            @if(getCrudConfig('Location')->delete or getCrudConfig('Location')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($locations as $location)
                            @livewire('admin.location.single', [$location], key($location->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $locations->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>
