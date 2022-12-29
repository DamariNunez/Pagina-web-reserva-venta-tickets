<?php
    use App\Models\City;
?>

<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $place->name }}</td>
    <td class="">{{ $place->capacity }}</td>
    <td class="">{{ $place->address }}</td>
    <?php
    $cities = City::all();
    foreach ($cities as $city){
        if ($city->id == $place->idCity){
            ?>
            <td class="">{{ $city->name }}</td>
            <?php
        }
    }
    ?>
    
    @if(getCrudConfig('Place')->delete or getCrudConfig('Place')->update)
        <td>

            @if(getCrudConfig('Place')->update && hasPermission(getRouteName().'.place.update', 0, 0, $place))
                <a href="@route(getRouteName().'.place.update', $place->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Place')->delete && hasPermission(getRouteName().'.place.delete', 0, 0, $place))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Place') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Place') ]) }}</p>
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
