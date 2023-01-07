<?php
    use App\Models\Ticket;
?>
<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Payment') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.payment.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Payment')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">
            <!-- IdTicket Input -->
            <div class='form-group'>
                <label for='input-idTicket' class='col-sm-2 control-label '> {{ __('IdTicket') }}</label>
                <select id='input-idTicket' wire:model.lazy='idTicket' class="form-control  @error('idTicket') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <?php
                    $i = 0;
                    $tickets = Ticket::all();
                    foreach ($tickets as $ticket){
                        $i = 0;
                        if ($ticket->id == $payment->idTicket) {
                            ?>
                            <option selected>{{ $ticket->id }}</option>
                            <?php
                            $i = 1;
                        }
                        if($i == 0 ){
                            ?>
                            <option>{{ $ticket->id }}</option>
                            <?php
                        }    
                    }
                    ?>   
                </select>
            </div>
            <!-- TotalCost Input -->
            <div class='form-group'>
                <label for='input-totalCost' class='col-sm-2 control-label '> {{ __('TotalCost') }}</label>
                <input type='double' id='input-totalCost' wire:model.lazy='totalCost' class="form-control  @error('totalCost') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('totalCost') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.payment.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
