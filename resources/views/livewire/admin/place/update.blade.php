<?php
    use App\Models\City;
?>

<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Place') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.place.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Place')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Name Input -->
            <div class='form-group'>
                <label for='input-name' class='col-sm-2 control-label '> {{ __('Name') }}</label>
                <input type='text' id='input-name' wire:model.lazy='name' class="form-control  @error('name') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('name') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Capacity Input -->
            <div class='form-group'>
                <label for='input-capacity' class='col-sm-2 control-label '> {{ __('Capacity') }}</label>
                <input type='number' id='input-capacity' wire:model.lazy='capacity' class="form-control  @error('capacity') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('capacity') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Address Input -->
            <div class='form-group'>
                <label for='input-address' class='col-sm-2 control-label '> {{ __('Address') }}</label>
                <input type='text' id='input-address' wire:model.lazy='address' class="form-control  @error('address') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('address') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- IdCity Input -->
            <div class='form-group'>
                <label for='input-idCity' class='col-sm-2 control-label '> {{ __('IdCity') }}</label>
                <select id='input-idCity' wire:model.lazy='idCity' class="form-control  @error('idCity') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <?php
                    $i = 0;
                    $cities = City::all();
                    ?>
                    @foreach ($cities as $city)
                        <?php
                        $i = 0;
                        if ($city->id == $place->idCity) {
                            ?>
                            <option selected>{{ $city->name }}</option>
                            <?php
                            $i = 1;
                        }
                        if($i == 0 ){
                            ?>
                            <option>{{ $city->name }}</option>
                            <?php
                        }    
                        ?>
                    @endforeach    
                </select>   
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.place.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
