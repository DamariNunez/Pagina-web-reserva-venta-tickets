<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Held;

class HeldComponent implements CRUDComponent
{
    // Manage actions in crud
    public $create = true;
    public $delete = true;
    public $update = true;

    // If you will set it true it will automatically
    // add `user_id` to create and update action
    public $with_user_id = true;

    public function getModel()
    {
        return Held::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['idEvent', 'idPlace', 'date', 'time'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['idEvent', 'idPlace', 'date', 'time'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'idEvent' => 'number',
            'idPlace' => 'number',
            'date' => 'date',
            'time' => 'time',     
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'idEvent' => 'required',
            'idPlace' => 'required',
            'date' => 'required',
            'time' => 'required',  
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [
            'idEvent' => 'number',
            'idPlace' => 'number',
            'date' => 'date',
            'time' => 'time',  
        ];
    }
}
