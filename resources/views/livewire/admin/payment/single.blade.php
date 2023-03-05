<tr x-data="{ modalIsOpen : false }">
    <td class="">${{ $payment->totalCost }}</td>
    <td class="">
        <img src="{{asset($payment->voucher)}}" width="150" height="150" >
    </td>
    
    @if(getCrudConfig('Payment')->delete or getCrudConfig('Payment')->update)
        <td>

            @if(getCrudConfig('Payment')->update && hasPermission(getRouteName().'.payment.update', 0, 0, $payment))
                <a href="@route(getRouteName().'.payment.update', $payment->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Payment')->delete && hasPermission(getRouteName().'.payment.delete', 0, 0, $payment))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Payment') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Payment') ]) }}</p>
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
