<?php
    use App\Models\Audience;
?>

<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $event->name }}</td>
    <td class="">{{ $event->duration }}</td>
    <td class="">{{ $event->value }}</td>
    <td class="">{{ $event->description }}</td>
    <?php
    $audiences = Audience::all();
    foreach ($audiences as $audience){
        if ($audience->id == $event->idAudience){
            ?>
            <td class="">{{ $audience->type }} - {{ $audience->description }}</td>
            <?php
        }
    }
    ?>
    
    
    @if(getCrudConfig('Event')->delete or getCrudConfig('Event')->update)
        <td>

            @if(getCrudConfig('Event')->update && hasPermission(getRouteName().'.event.update', 0, 0, $event))
                <a href="@route(getRouteName().'.event.update', $event->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Event')->delete && hasPermission(getRouteName().'.event.delete', 0, 0, $event))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Event') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Event') ]) }}</p>
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
