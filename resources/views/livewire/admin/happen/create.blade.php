<?php
    use App\Models\Timetable;
    use App\Models\Event;
?>

<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Happen') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.happen.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Happen')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
            <!-- IdTimetable Input -->
            <div class='form-group'>
                <label for='input-idTimetable' class='col-sm-2 control-label '> {{ __('IdTimetable') }}</label>
                <select id='input-idTimetable' wire:model.lazy='idTimetable' class="form-control  @error('idTimetable') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <?php
                    $timetables = Timetable::all();
                    ?>
                    @foreach ($timetables as $timetable)
                        <option selected>{{ $timetable->date.' '.$timetable->time }}</option>
                    @endforeach    
                </select>   
            </div>
            <!-- IdEvent Input -->
            <div class='form-group'>
                <label for='input-idEvent' class='col-sm-2 control-label '> {{ __('IdEvent') }}</label>
                <select id='input-idEvent' wire:model.lazy='idEvent' class="form-control  @error('idEvent') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <?php
                    $events = Event::all();
                    ?>
                    @foreach ($events as $event)
                        <option selected>{{ $event->name }}</option>
                    @endforeach    
                </select> 
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.happen.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
