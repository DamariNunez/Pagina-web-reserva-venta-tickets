<?php
    use App\Models\Audience;
    use App\Models\Event;
    use App\Models\Language;
    use App\Models\Available;
?>

<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Event') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.event.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Event')) }}</a></li>
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
            <!-- Duration Input -->
            <div class='form-group'>
                <label for='input-duration' class='col-sm-2 control-label '> {{ __('Duration') }}</label>
                <input type='text' id='input-duration' wire:model.lazy='duration' class="form-control  @error('duration') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('duration') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Value Input -->
            <div class='form-group'>
                <label for='input-value' class='col-sm-2 control-label '> {{ __('Value') }}</label>
                <input type='number' id='input-value' wire:model.lazy='value' class="form-control  @error('value') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('value') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Description Input -->
            <div class='form-group'>
                <label for='input-description' class='col-sm-2 control-label '> {{ __('Description') }}</label>
                <input type='text' id='input-description' wire:model.lazy='description' class="form-control  @error('description') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('description') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- IdAudience Input -->
           <div class='form-group'>
                <label for='input-idAudience' class='col-sm-2 control-label '> {{ __('IdAudience') }}</label>
                <select id="input-idAudience" name="input-idAudience" wire:model.lazy='idAudience' class="form-control  @error('idAudience') is-invalid @enderror" placeholder='' autocomplete='on' required>
                    <?php
                    $i = 0;
                    $audiences = Audience::all();
                    ?>
                    @foreach ($audiences as $audience)
                        <?php
                        $i = 0;
                        if ($audience->id == $event->idAudience) {
                            ?>
                            <option selected>{{ $audience->type }}-{{ $audience->description }}</option>
                            <?php
                            $i = 1;
                        }
                        if($i == 0 ){
                            ?>
                            <option>{{ $audience->type }}-{{ $audience->description  }}</option>
                            <?php
                        }    
                        ?>
                    @endforeach    
                </select>   
            </div>
            <!-- IdLanguage Input -->
           <div class='form-group'>
                <label for='input-idLanguage' class='col-sm-2 control-label '> {{ __('IdLanguage') }}</label>
                <select id="input-idLanguage" name="input-idLanguage" wire:model.lazy='idLanguage' class="form-control  @error('idLanguage') is-invalid @enderror" placeholder='' autocomplete='on' required multiple>
                    <?php
                    $i = 0;
                    $languages = Language::all();
                    $availables = Available::all();
                    $arrayLanguages[] = null;
                    foreach ($availables as $available){
                        if ($available->idEvent == $event->id) {
                            array_push($arrayLanguages, $available->idLanguage);
                        }
                    } 
                    foreach ($languages as $language){
                        $i = 0;
                        foreach ($arrayLanguages as $alanguage){
                            if ($language->id == $alanguage){
                                ?>
                                <option selected>{{ $language->name }}</option>
                                <?php
                                $i = 1;
                            }
                        }
                        if($i == 0)
                        {
                            ?>
                            <option>{{ $language->name }}</option>
                            <?php
                        }
                    }
                    ?>   
                </select>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.event.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
