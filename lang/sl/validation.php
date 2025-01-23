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

    'accepted' => 'Polje :attribute mora biti sprejeto.',
    'accepted_if' => 'Polje :attribute mora biti sprejeto, ko je :other :value.',
    'active_url' => 'Polje :attribute mora biti veljaven URL.',
    'after' => 'Polje :attribute mora biti datum po :date.',
    'after_or_equal' => 'Polje :attribute mora biti datum po :date ali enako.',
    'alpha' => 'Polje :attribute mora vsebovati le črke.',
    'alpha_dash' => 'Polje :attribute mora vsebovati le črke, številke, črtice in podčrtaje.',
    'alpha_num' => 'Polje :attribute mora vsebovati le črke in številke.',
    'array' => 'Polje :attribute mora biti matrika (array).',
    'ascii' => 'Polje :attribute mora vsebovati le enobajtne alfanumerične znake in simbole.',
    'before' => 'Polje :attribute mora biti datum, preden :date.',
    'before_or_equal' => 'Polje :attribute mora biti datum pred ali enako :date.',
    'between' => [
        'array' => 'Polje :attribute mora imeti med elementi :min in :max.',
        'file' => 'Polje :attribute mora biti med :min in :max kilobajtov.',
        'numeric' => 'Polje :attribute mora biti med :min in :max.',
        'string' => 'Polje :attribute mora biti med znaki :min in :max.',
    ],
    'boolean' => 'Polje :attribute mora biti true ali false.',
    'can' => 'V polju :attribute je vrednost za katero niste pooblaščeni.',
    'confirmed' => 'Potrditev polja :attribute se ne ujema.',
    'current_password' => 'Geslo ni pravilno.',
    'date' => 'Polje :attribute mora biti veljaven datum.',
    'date_equals' => 'V polju :attribute mora biti datum, enak :date.',
    'date_format' => 'Polje :attribute se mora ujemati z obliko :format.',
    'decimal' => 'Polje :attribute mora imeti :decimal decimalna mesta.',
    'declined' => 'Polje :attribute je treba zavrniti.',
    'declined_if' => 'Polje :attribute je treba zavrniti, ko je :other :value.',
    'different' => 'Polji :attribute in :other morata biti različni.',
    'digits' => 'Polje :attribute mora biti :digits številk.',
    'digits_between' => 'Polje :attribute mora vsebovati med :min in :max številk.',
    'dimensions' => 'Polje :attribute ima neveljavne dimenzije slike.',
    'distinct' => 'Polje :attribute ima podvojeno vrednost.',
    'doesnt_end_with' => 'Polje :attribute se ne sme končati z enim od teh možnosti: :values.',
    'doesnt_start_with' => 'Polje :attribute se ne sme začeti z eno od teh možnosti: :values.',
    'email' => 'Polje :attribute mora biti veljaven e-poštni naslov.',
    'ends_with' => 'Polje :attribute se mora končati z enim od teh: :values.',
    'enum' => 'Izbrani :attribute ni veljaven.',
    'exists' => 'Izbrani :attribute ni veljaven.',
    'extensions' => 'Polje :attribute mora imeti eno od teh pripon: :values.',
    'file' => 'Polje :attribute mora biti datoteka.',
    'filled' => 'Polje :attribute mora imeti vrednost.',
    'gt' => [
        'array' => 'V polju :attribute mora biti več kot :value elementov.',
        'file' => 'Polje :attribute mora biti večje od :value kilobajtov.',
        'numeric' => 'Polje :attribute mora biti večje od :value.',
        'string' => 'Polje :attribute mora vsebovati manj kot :value znakov.',
    ],
    'gte' => [
        'array' => 'V polju :attribute mora biti več ali enako kot  :value elementov.',
        'file' => 'Polje :attribute mora biti večje ali enako od :value kilobajtov.',
        'numeric' => 'Polje :attribute mora biti večje ali enako od :value.',
        'string' => 'Polje :attribute mora vsebovati najmanj :value znakov.',
    ],
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    'image' => 'The :attribute field must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field must exist in :other.',
    'integer' => 'Polje :attribute mora biti naravno število.',
    'ip' => 'The :attribute field must be a valid IP address.',
    'ipv4' => 'The :attribute field must be a valid IPv4 address.',
    'ipv6' => 'The :attribute field must be a valid IPv6 address.',
    'json' => 'The :attribute field must be a valid JSON string.',
    'list' => 'The :attribute field must be a list.',
    'lowercase' => 'The :attribute field must be lowercase.',
    'lt' => [
        'array' => 'The :attribute field must have less than :value items.',
        'file' => 'The :attribute field must be less than :value kilobytes.',
        'numeric' => 'The :attribute field must be less than :value.',
        'string' => 'The :attribute field must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute field must not have more than :value items.',
        'file' => 'The :attribute field must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be less than or equal to :value.',
        'string' => 'The :attribute field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute field must be a valid MAC address.',
    'max' => [
        'array' => 'Polje :attribute ne sme imeti več kot :max elementa(ov).',
        'file' => 'Polje :attribute ne sme biti večje od :max kilobajtov.',
        'numeric' => 'Polje :attribute ne sme biti večje od :max.',
        'string' => 'Polje :attribute ne sme imeti več kot :max znakov.',
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.',
    'mimes' => 'The :attribute field must be a file of type: :values.',
    'mimetypes' => 'The :attribute field must be a file of type: :values.',
    'min' => [
        'array' => 'Polje :attribute mora imeti vsaj :min elementov.',
        'file' => 'The :attribute field must be at least :min kilobytes.',
        'numeric' => 'Polje :attribute mora biti vsaj :min.',
        'string' => 'Polje :attribute mora vsebovati vsaj :min znakov.',
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute field must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute field format is invalid.',
    'numeric' => 'Polje :attribute mora biti številka.',
    'password' => [
        'letters' => 'Polje :attribute mora vsebovati vsaj eno črko.',
        'mixed' => 'Polje :attribute mora vsebovati vsaj eno veliko in eno malo črko.',
        'numbers' => 'Polje :attribute mora vsebovati vsaj eno številko.',
        'symbols' => 'Polje :attribute mora vsebovati vsaj en simbol.',
        'uncompromised' => ':attribut se je pojavil pri puščanju podatkov. Prosimo, izberite drug :attribut.',
    ],
    'present' => 'The :attribute field must be present.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'Polje :attribute je obvezno.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'Polje :attribute se mora ujemati z :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string' => 'Polje :attribute mora biti niz.',
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => ':attribute že obstaja.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => 'The :attribute field must be a valid URL.',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'The :attribute field must be a valid UUID.',

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
