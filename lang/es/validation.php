<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El :attribute debe ser aceptada.',
    'accepted_if' => 'El :attribute debe ser aceptada cuando :other sea :value.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El :attribute sólo debe contener letras.',
    'alpha_dash' => 'El :attribute sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute sólo debe contener letras y números.',
    'array' => 'El :attribute debe ser una matriz.',
    'ascii' => 'El :attribute sólo debe contener caracteres alfanuméricos de un byte y símbolos.',
    'before' => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El :attribute debe tener entre :min y :max elementos.',
        'file' => 'El :attribute debe estar entren :min y :max kilobytes.',
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'string' => 'El :attribute debe estar entre :min y :max caracteres.',
    ],
    'boolean' => 'El :attribute debe ser verdadero o falso.',
    'confirmed' => 'El :attribute la confirmación no coincide.',
    'current_password' => 'La clave es incorrecta.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El :attribute no coincide con el formato :format.',
    'declined' => 'El :attribute debe rechazarse.',
    'declined_if' => 'El :attribute debe rechazarse cuando :other es :value.',
    'different' => 'El :attribute y :other debe ser diferente.',
    'digits' => 'El :attribute debe ser :digits dígitos.',
    'digits_between' => 'El :attribute debe estar entre :min y :max digits.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El :attribute no puede terminar con: :values.',
    'doesnt_start_with' => 'El :attribute no puede empezar por uno de los siguientes: :values.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :attribute debe terminar con una de las siguientes opciones: :values.',
    'enum' => 'La selección :attribute es inválida.',
    'exists' => 'La selección :attribute es inválida.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El :attribute debe tener un valor.',
    'gt' => [
        'array' => 'El :attribute debe tener más de :value elementos.',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'string' => 'El :attribute debe ser mayor que :value caracteres.',
    ],
    'gte' => [
        'array' => 'El :attribute debe tener :value elementos o más.',
        'file' => 'El :attribute debe ser mayor que o igual que :value kilobytes.',
        'numeric' => 'El :attribute debe ser mayor que o igual que :value.',
        'string' => 'El :attribute debe ser mayor que o igual que :value caracteres.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'La selección :attribute es inválido.',
    'in_array' => 'El :attribute no existe en :other.',
    'integer' => 'El :attribute debe ser un número entero.',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lowercase' => 'El :attribute debe estar en minúsculas.',
    'lt' => [
        'array' => 'El :attribute debe tener menos de :value elementos.',
        'file' => 'El :attribute debe ser inferior a :value kilobytes.',
        'numeric' => 'El :attribute debe ser inferior a :value.',
        'string' => 'El :attribute debe ser inferior a :value caracteres.',
    ],
    'lte' => [
        'array' => 'El :attribute no debe tener más de :value elementos.',
        'file' => 'El :attribute debe ser inferior o igual a :value kilobytes.',
        'numeric' => 'El :attribute debe ser inferior o igual a :value.',
        'string' => 'El :attribute debe ser inferior o igual a :value caracteres.',
    ],
    'mac_address' => 'El :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El :attribute no debe tener más de :max elementos.',
        'file' => 'El :attribute no debe ser superior a :max kilobytes.',
        'numeric' => 'El :attribute no debe ser superior a :max.',
        'string' => 'El :attribute no debe ser superior a :max caracteres.',
    ],
    'max_digits' => 'El :attribute no debe tener más de :max digits.',
    'mimes' => 'El :attribute debe ser un fichero de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un fichero de tipo: :values.',
    'min' => [
        'array' => 'El :attribute debe tener al menos :min elementos.',
        'file' => 'El :attribute debe ser como mínimo :min kilobytes.',
        'numeric' => 'El :attribute debe ser como mínimo :min.',
        'string' => 'El :attribute debe ser como mínimo :min caracteres.',
    ],
    'min_digits' => 'El :attribute debe tener al menos :min digits.',
    'multiple_of' => 'El :attribute debe ser un múltiplo de :value.',
    'not_in' => 'La selección :attribute es inválido.',
    'not_regex' => 'El :attribute formato inválido.',
    'numeric' => 'El :attribute debe ser un número.',
    'password' => [
        'letters' => 'El :attribute debe contener al menos una letra.',
        'mixed' => 'El :attribute debe contener al menos una mayúscula y una minúscula.',
        'numbers' => 'El :attribute debe contener al menos un número.',
        'symbols' => 'El :attribute debe contener al menos un símbolo.',
        'uncompromised' => ':attribute ha aparecido en una filtración de datos. Por favor, elija otro :attribute.',
    ],
    'present' => 'El :attribute debe estar presente.',
    'prohibited' => 'El :attribute está prohibido.',
    'prohibited_if' => 'El :attribute está prohibido cuando :other es :value.',
    'prohibited_unless' => 'El :attribute está prohibido a menos que :other esté en :values.',
    'prohibits' => 'El :attribute prohibido :other de estar presente.',
    'regex' => 'El :attribute formato inválido.',
    'required' => 'El :attribute campo obligatorio.',
    'required_array_keys' => 'El :attribute debe contener entradas para: :values.',
    'required_if' => 'El :attribute es obligatorio cuando :other es :value.',
    'required_if_accepted' => 'El :attribute es obligatorio cuando :other se acepta.',
    'required_unless' => 'El :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El :attribute es obligatorio cuando :values es present.',
    'required_with_all' => 'El :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El :attribute es obligatorio cuando ninguna de :values están presentes.',
    'same' => 'El :attribute y :other deben coincidir.',
    'size' => [
        'array' => 'El :attribute debe contener :size elementos.',
        'file' => 'El :attribute debe ser :size kilobytes.',
        'numeric' => 'El :attribute debe ser :size.',
        'string' => 'El :attribute debe ser :size caracteres.',
    ],
    'starts_with' => 'El :attribute debe empezar por uno de los siguientes: :values.',
    'string' => 'El :attribute debe ser un string.',
    'timezone' => 'El :attribute debe ser una zona horaria válida.',
    'unique' => 'El :attribute ya se ha tomado.',
    'uploaded' => 'El :attribute error al cargar.',
    'uppercase' => 'El :attribute debe estar en mayúsculas.',
    'url' => 'El :attribute debe ser una URL válida.',
    'ulid' => 'El :attribute debe ser una ULID válida.',
    'uuid' => 'El :attribute debe ser una UUID válida.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];