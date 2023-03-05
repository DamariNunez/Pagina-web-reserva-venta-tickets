<?php
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\City;
?>

<tr x-data="{ modalIsOpen : false }">
    <?php
    $events = Event::all();
    foreach ($events as $event){
        if ($event->id == $held->idEvent){
            ?>
            <td class="">{{ $event->name }}</td>
            <?php
        }
    }
    ?>

    <?php
    $places = Place::all();
    $cities = City::all();
    foreach ($places as $place){
        if ($place->id == $held->idPlace){
            foreach ($cities as $city){
                if ($place->idCity == $city->id){
                    ?>
                    <td class="">{{ $place->name }}-{{ $city->name }}</td>
                    <?php
                }
            }
        }
    }
    ?>

    <td class="">{{ $held->date }}</td>
    <td class="">{{ $held->time }}</td>
    
    @if(getCrudConfig('Held')->delete or getCrudConfig('Held')->update)
        <td>

            @if(getCrudConfig('Held')->update && hasPermission(getRouteName().'.held.update', 0, 0, $held))
                <a href="@route(getRouteName().'.held.update', $held->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Held')->delete && hasPermission(getRouteName().'.held.delete', 0, 0, $held))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Held') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Held') ]) }}</p>
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
