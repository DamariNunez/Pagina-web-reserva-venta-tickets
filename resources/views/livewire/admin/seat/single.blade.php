<tr x-data="{ modalIsOpen : false }">
    
    @if(getCrudConfig('Seat')->delete or getCrudConfig('Seat')->update)
        <td>

            @if(getCrudConfig('Seat')->update && hasPermission(getRouteName().'.seat.update', 0, 0, $seat))
                <a href="@route(getRouteName().'.seat.update', $seat->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Seat')->delete && hasPermission(getRouteName().'.seat.delete', 0, 0, $seat))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Seat') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Seat') ]) }}</p>
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
