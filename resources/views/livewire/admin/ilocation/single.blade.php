<?php
    use App\Models\Place;
?>
<tr x-data="{ modalIsOpen : false }">
    <?php
    $places = Place::all();
    foreach ($places as $place){
        if ($place->id == $ilocation->idPlace){
            ?>
            <td class="">{{ $place->name }}</td>
            <?php
        }
    }
    ?>
    <td class="">
        <img src="{{asset($ilocation->img)}}" width="150" height="150" >
    </td>

    @if(getCrudConfig('Ilocation')->delete or getCrudConfig('Ilocation')->update)
        <td>

            @if(getCrudConfig('Ilocation')->update && hasPermission(getRouteName().'.ilocation.update', 0, 0, $ilocation))
                <a href="@route(getRouteName().'.ilocation.update', $ilocation->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Ilocation')->delete && hasPermission(getRouteName().'.ilocation.delete', 0, 0, $ilocation))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Ilocation') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Ilocation') ]) }}</p>
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
