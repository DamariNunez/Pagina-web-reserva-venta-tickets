<?php
    use App\Models\User;
    use App\Models\Event;
?>

<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Ticket') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.ticket.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Ticket')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
                        <!-- Quantity Input -->
            <div class='form-group'>
                <label for='input-quantity' class='col-sm-2 control-label '> {{ __('Quantity') }}</label>
                <input type='number' id='input-quantity' wire:model.lazy='quantity' class="form-control  @error('quantity') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('quantity') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- IdUser Input -->
            <div class='form-group'>
                <label for='input-idUser' class='col-sm-2 control-label '> {{ __('IdUser') }}</label>
                <select id='input-idUser' wire:model.lazy='idUser' class="form-control  @error('idUser') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <?php
                    $users = User::where('username', '<>', 'admin')->get();
                    ?>
                    @foreach ($users as $user)
                        <option selected>{{ $user->username.' '.$user->lastmane }}</option>
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
            <!-- Status Input -->
            <div class='form-group'>
                <label for='input-status' class='col-sm-2 control-label '> {{ __('Status') }}</label>
                <select id='input-status' wire:model.lazy='status' class="form-control  @error('status') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <option selected>approved</option>
                    <option>pending</option>
                    <option>denied</option>
                </select>  
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.ticket.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
