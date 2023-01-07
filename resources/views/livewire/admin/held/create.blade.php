<?php
    use App\Models\Event;
    use App\Models\Place;
    use App\Models\City;
?>

<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Held') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.held.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Held')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
            <!-- IdEvent Input -->
            <div class='form-group'>
                <label for='input-idEvent' class='col-sm-2 control-label '> {{ __('IdEvent') }}</label>
                <select id='input-idEvent' wire:model.lazy='idEvent' class="form-control  @error('idEvent') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <?php
                    $events = Event::all();
                    ?>
                    <option></option>
                    @foreach ($events as $event)
                        <option>{{ $event->name }}</option>
                    @endforeach    
                </select>   
            </div>
            <!-- IdPlace Input -->
            <div class='form-group'>
                <label for='input-idPlace' class='col-sm-2 control-label '> {{ __('IdPlace') }}</label>
                <select id='input-idPlace' wire:model.lazy='idPlace' class="form-control  @error('idPlace') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <?php
                    $places = Place::all();
                    $cities = City::all();
                    ?>
                    <option></option>
                    @foreach ($places as $place)
                        @foreach ($cities as $city){
                            @if ($place->idCity == $city->id){
                                <option>{{ $place->name }}-{{ $city->name }}</option>
                            @endif
                        @endforeach
                    @endforeach    
                </select>   
            </div>
            <!-- Date Input -->
            <div class='form-group'>
                <label for='input-date' class='col-sm-2 control-label '> {{ __('Date') }}</label>
                <input type='date' id='input-date' wire:model.lazy='date' class="form-control  @error('date') is-invalid @enderror" autocomplete='on'>
                @error('date') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Time Input -->
            <div class='form-group'>
                <label for='input-time' class='col-sm-2 control-label '> {{ __('Time') }}</label>
                <input type='time' id='input-time' wire:model.lazy='time' class="form-control  @error('time') is-invalid @enderror" autocomplete='on'>
                @error('time') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.held.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
