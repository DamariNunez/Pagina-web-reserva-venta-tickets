<tr x-data="{ modalIsOpen : false }">
    <?php
    list($year, $month, $day) = explode("-", date($bill->date));
    switch ($month) {
        case 01: $month = 'Ene' ; break;
        case 02: $month = 'Feb' ; break;
        case 03: $month = 'Mar' ; break;
        case 04: $month = 'Abr' ; break;
        case 05: $month = 'May' ; break;
        case 06: $month = 'Jun' ; break;
        case 07: $month = 'Jul' ; break;
        case 8: $month = 'Ago' ; break;
        case 9: $month = 'Sep' ; break;
        case 10: $month = 'Oct' ; break;
        case 11: $month = 'Nov' ; break;
        case 12: $month = 'Dic' ; break;
    }
    ?>
    <td class="">{{ $month }} {{ $day }}, {{ $year }}</td>
    <td class="">${{ $bill->totalValue }}</td>
    <td class="">{{ $bill->idPayment }}</td>
    
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
