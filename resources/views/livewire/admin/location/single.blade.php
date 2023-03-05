<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $location->name }}</td>
    <td class="">{{ $location->capacity }}</td>
    <td class="">${{ $location->price }}</td>
    
    @if(getCrudConfig('Location')->delete or getCrudConfig('Location')->update)
        <td>

            @if(getCrudConfig('Location')->update && hasPermission(getRouteName().'.location.update', 0, 0, $location))
                <a href="@route(getRouteName().'.location.update', $location->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Location')->delete && hasPermission(getRouteName().'.location.delete', 0, 0, $location))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Location') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Location') ]) }}</p>
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
