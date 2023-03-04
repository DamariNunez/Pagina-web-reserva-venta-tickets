<?php
    use App\Models\User;
    use App\Models\Event;
    use App\Models\Held;
    use App\Models\Place;
    use App\Models\City;
?>
<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Ticket') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.ticket.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Ticket')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

            <!-- Quantity Input -->
            <div class='form-group'>
                <label for='input-quantity' class='col-sm-2 control-label '> {{ __('Quantity') }}</label>
                <input type='number' id='input-quantity' wire:model.lazy='quantity' class="form-control  @error('quantity') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('quantity') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- IdUser Input -->
            <div class='form-group'>
                <label for='input-idUser' class='col-sm-2 control-label '> {{ __('IdUser') }}: </label>
                <?php
                $users = User::where('username', '<>', 'admin')->get();
                foreach ($users as $user) {
                    if ($user->id == $ticket->idUser) {
                    ?>
                        <label class='col-sm-2 control-label '>{{ $user->username }} {{ $user->lastname }}</label>
                        <?php
                    }  
                }
                ?> 
            </div>
            <!-- IdEvent Input -->
            <div class='form-group'>
                <label for='input-idEvent' class='col-sm-2 control-label '> {{ __('IdEvent') }}: </label>
                <?php
                $events = Event::all();
                foreach ($events as $event){
                    if ($event->id == $ticket->idEvent) {
                        ?>
                        <label class='col-sm-2 control-label '>{{ $event->name }}</label>
                        <?php
                    } 
                }  
                ?>  
            </div>
            <!-- IdHeld Input -->
            <div class='form-group'>
                <label for='input-idHeld' class='col-sm-2 control-label '> {{ __('IdHeld') }}</label>
                <?php
                $helds = Held::all();
                foreach ($helds as $held){
                    if ($held->id == $ticket->idHeld) {
                        ?>
                        <label class='col-sm-4 control-label '>{{ $held->date }} {{ $held->time }}</label>
                        <?php
                    }
                }  
                ?> 
            </div>
            <!-- IdPlace Input -->
            <div class='form-group'>
                <label for='input-idPlace' class='col-sm-2 control-label '> {{ __('IdPlace') }}</label>
                <?php
                $places = Place::all();
                $cities = City::all();
                foreach ($places as $place){
                    if ($place->id == $held->idPlace) {
                        foreach ($cities as $city){
                            if ($city->id == $place->idCity){
                                ?>
                                <label class='col-sm-4 control-label '>{{ $place->name }}-{{ $city->name }}</label>
                                <?php
                            }
                        }
                    }   
                }   
                ?>   
            </div>
            <!-- Status Input -->
            <div class='form-group'>
                <label for='input-status' class='col-sm-2 control-label '> {{ __('Status') }}</label>
                <select id='input-status' wire:model.lazy='status' class="form-control  @error('status') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <option>approved</option>
                    <option>pending</option>
                    <option>denied</option>
                </select>  
            </div>
        </div>
        <input type="hidden" name="idUser" value="{{ $user->id }}">
        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.ticket.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
