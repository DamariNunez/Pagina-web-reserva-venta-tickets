<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Audience') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.audience.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Audience')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Type Input -->
            <div class='form-group'>
                <label for='input-type' class='col-sm-2 control-label '> {{ __('Type') }}</label>
                <input type='text' id='input-type' wire:model.lazy='type' class="form-control  @error('type') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('type') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Age Input -->
            <div class='form-group'>
                <label for='input-age' class='col-sm-2 control-label '> {{ __('Age') }}</label>
                <input type='number' id='input-age' wire:model.lazy='age' class="form-control  @error('age') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('age') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Description Input -->
            <div class='form-group'>
                <label for='input-description' class='col-sm-2 control-label '> {{ __('Description') }}</label>
                <input type='text' id='input-description' wire:model.lazy='description' class="form-control  @error('description') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('description') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.audience.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
