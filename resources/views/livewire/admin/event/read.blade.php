<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Event')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Event')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('Event')->create && hasPermission(getRouteName().'.event.create', 0, 0))
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.event.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('Event') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('Event')->searchable())
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
                            <th scope="col" style='cursor: pointer' wire:click="sort('duration')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'duration') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'duration') fa-sort-amount-up ml-2 @endif'></i> {{ __('Duration') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('value')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'value') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'value') fa-sort-amount-up ml-2 @endif'></i> {{ __('Value') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('description')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'description') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'description') fa-sort-amount-up ml-2 @endif'></i> {{ __('Description') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('idAudience')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'idAudience') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'idAudience') fa-sort-amount-up ml-2 @endif'></i> {{ __('IdAudience') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('timetable')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'idTimetable') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'idTimetable') fa-sort-amount-up ml-2 @endif'></i> {{ __('IdTimetable') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('place')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'idPlace') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'idPlace') fa-sort-amount-up ml-2 @endif'></i> {{ __('IdPlace') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('language')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'idLanguage') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'idLanguage') fa-sort-amount-up ml-2 @endif'></i> {{ __('IdLanguage') }} </th>

                            @if(getCrudConfig('Event')->delete or getCrudConfig('Event')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                            @livewire('admin.event.single', [$event], key($event->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $events->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>
