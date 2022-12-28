<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Timetable') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.timetable.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Timetable')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Time Input -->
            <div class='form-group'>
                <label for='input-time' class='col-sm-2 control-label '> {{ __('Time') }}</label>
                <input type='time' id='input-time' wire:model.lazy='time' class="form-control  @error('time') is-invalid @enderror" autocomplete='on'>
                @error('time') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Date Input -->
            <div class='form-group'>
                <label for='input-date' class='col-sm-2 control-label '> {{ __('Date') }}</label>
                <input type='date' id='input-date' wire:model.lazy='date' class="form-control  @error('date') is-invalid @enderror" autocomplete='on'>
                @error('date') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.timetable.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
