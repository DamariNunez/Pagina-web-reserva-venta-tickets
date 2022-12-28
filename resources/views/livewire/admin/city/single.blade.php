<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $city->city }}</td>
    
    @if(getCrudConfig('City')->delete or getCrudConfig('City')->update)
        <td>

            @if(getCrudConfig('City')->update && hasPermission(getRouteName().'.city.update', 0, 0, $city))
                <a href="@route(getRouteName().'.city.update', $city->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('City')->delete && hasPermission(getRouteName().'.city.delete', 0, 0, $city))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('City') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('City') ]) }}</p>
                        <div class="mt-5 d-flex justify-content-between">
                            <a wire:click.prevent="delete" class="text-white btn btn-success shadow">{{ __('Yes, Delete it.') }}</a>
                            <a @click.prevent="modalIsOpen = false" class="text-white btn btn-danger shadow">{{ __('No, Cancel it.') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        </td>
    @endif
</tr>
