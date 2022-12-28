<tr x-data="{ modalIsOpen : false }">
    
    @if(getCrudConfig('Bill')->delete or getCrudConfig('Bill')->update)
        <td>

            @if(getCrudConfig('Bill')->update && hasPermission(getRouteName().'.bill.update', 0, 0, $bill))
                <a href="@route(getRouteName().'.bill.update', $bill->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Bill')->delete && hasPermission(getRouteName().'.bill.delete', 0, 0, $bill))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Bill') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Bill') ]) }}</p>
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
