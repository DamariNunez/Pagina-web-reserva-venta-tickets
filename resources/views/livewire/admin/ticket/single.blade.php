<?php
    use App\Models\User;
    use App\Models\Event;
?>

<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $ticket->quantity }}</td>
    <?php
    $users = User::all();
    foreach ($users as $user){
        if ($user->id == $ticket->idUser){
            ?>
            <td class="">{{ $user->username.' '.$user->lastname }}</td>
            <?php
        }
    }
    ?>
    <?php
    $events = Event::all();
    foreach ($events as $event){
        if ($event->id == $ticket->idEvent){
            ?>
            <td class="">{{ $event->name }}</td>
            <?php
        }
    }
    ?>
    <td class="">{{ $ticket->status }}</td>
    
    @if(getCrudConfig('Ticket')->delete or getCrudConfig('Ticket')->update)
        <td>

            @if(getCrudConfig('Ticket')->update && hasPermission(getRouteName().'.ticket.update', 0, 0, $ticket))
                <a href="@route(getRouteName().'.ticket.update', $ticket->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Ticket')->delete && hasPermission(getRouteName().'.ticket.delete', 0, 0, $ticket))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Ticket') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Ticket') ]) }}</p>
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
