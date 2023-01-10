<?php
    use App\Models\Place;
    use App\Models\City;
?>
<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Seat') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.seat.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Seat')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
            <!-- Row Input -->
            <div class='form-group'>
                <label for='input-row' class='col-sm-2 control-label '> {{ __('Row') }}</label>
                <select id='input-row' wire:model.lazy='row' class="form-control  @error('row') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <?php
                    $abecedary = ['A', 'B', 'C', 'D', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
                    ?>
                    <option></option>
                    <?php
                    foreach ($abecedary as $abc){
                        ?>
                        <option selected>{{ $abc }}</option>
                        <?php
                    }
                    ?>  
                </select>   
            </div>
            <!-- Chair Input -->
            <div class='form-group'>
                <label for='input-chair' class='col-sm-2 control-label '> {{ __('Chair') }}</label>
                <input type='number' id='input-chair' wire:model.lazy='chair' class="form-control  @error('chair') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('chair') <div class='invalid-feedback'>{{ $message }}</div> @enderror
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
                    <?php
                    foreach ($places as $place){
                        foreach($cities as $city){
                            if ($place->idCity == $city->id){
                                ?>
                                <option>{{ $place->name }}-{{ $city->name }}</option>
                                <?php
                            }
                        }
                    }
                    ?>  
                </select>   
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.seat.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
