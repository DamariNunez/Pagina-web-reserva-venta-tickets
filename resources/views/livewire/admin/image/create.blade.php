<?php
    use App\Models\Event;
?>
<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Image') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.image.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Image')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">
        <div class="card-body">
            <!-- IdEvent Input -->
            <div class='form-group'>
                <label for='input-idEvent' class='col-sm-2 control-label '> {{ __('IdEvent') }}</label>
                <select id="input-idEvent" id='input-idEvent' wire:model.lazy='idEvent' class="form-control  @error('idEvent') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <?php
                    $events = Event::all();
                    ?>
                    <option selected>Seleccionar...</option>
                    @foreach ($events as $event)
                        <option>{{ $event->name }}</option>
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
            <a href="@route(getRouteName().'.image.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
