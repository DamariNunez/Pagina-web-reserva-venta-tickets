<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $timetable->time }}</td>
    <td class="">{{ $timetable->date }}</td>
    
    @if(getCrudConfig('Timetable')->delete or getCrudConfig('Timetable')->update)
        <td>

            @if(getCrudConfig('Timetable')->update && hasPermission(getRouteName().'.timetable.update', 0, 0, $timetable))
                <a href="@route(getRouteName().'.timetable.update', $timetable->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Timetable')->delete && hasPermission(getRouteName().'.timetable.delete', 0, 0, $timetable))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Timetable') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Timetable') ]) }}</p>
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
