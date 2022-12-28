<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Event;

class EventComponent implements CRUDComponent
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
        return Event::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['name', 'duration', 'value', 'description', 'idAudience'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['name', 'duration', 'value', 'description', 'idAudience'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'name' => 'text',
            'duration' => 'text',
            'value' => 'number',
            'description' => 'text',
            'idAudience' => 'number'
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'name' => 'required',
            'duration' => 'required',
            'value' => 'required',
            'description' => 'required',
            'idAudience' => 'required'
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [
            'name' => 'text',
            'duration' => 'text',
            'value' => 'number',
            'description' => 'text',
            'idAudience' => 'number'
        ];
    }
}
