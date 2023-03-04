<?php
    use App\Models\Place;
    use App\Models\City;
?>
<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Ilocation') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.ilocation.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Ilocation')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
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
                                <option>{{ $place->name }}, {{ $city->name }}</option>
                            @endif
                        @endforeach
                    @endforeach    
                </select>   
            </div>
            <!-- IdImage Input -->
            <div class='form-group'>
                <label for='input-idImage' class='col-sm-2 control-label '> {{ __('IdImage') }}</label>
                <input type='file' wire:model="img" class='form-control mb-2'>
                @error('file') <span class='text danger'>{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.ilocation.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
