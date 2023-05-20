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

    'accepted' => 'Das :attribute muss akzeptiert werden.',
    'accepted_if' => 'Das :attribute muss akzeptiert werden, wenn :other :value ist.',
    'active_url' => 'Das :attribute ist keine gültige URL.',
    'after' => 'Das :attribute muss ein Datum nach dem :date sein.',
    'after_or_equal' => 'Das :attribute muss ein Datum nach dem :date oder gleich dem :date sein.',
    'alpha' => 'Das :attribute darf nur aus Buchstaben bestehen.',
    'alpha_dash' => 'Das :attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen.',
    'alpha_num' => 'Das :attribute darf nur aus Buchstaben und Zahlen bestehen.',
    'array' => 'Das :attribute muss ein Array sein.',
    'ascii' => 'Das :attribute darf nur aus ASCII-Zeichen bestehen.',
    'before' => 'Das :attribute muss ein Datum vor dem :date sein.',
    'before_or_equal' => 'Das :attribute muss ein Datum vor dem :date oder gleich dem :date sein.',
    'between' => [
        'array' => 'Das :attribute muss zwischen :min & :max Elemente haben.',
        'file' => 'Die :attribute muss zwischen :min & :max Kilobytes groß sein.',
        'numeric' => 'Das :attribute muss zwischen :min & :max liegen.',
        'string' => 'Die :attribute muss zwischen :min & :max Zeichen lang sein.',
    ],
    'boolean' => 'Das :attribute Feld muss entweder wahr oder falsch sein.',
    'confirmed' => 'Die :attribute Bestätigung stimmt nicht überein.',
    'current_password' => 'Das Passwort ist falsch.',
    'date' => 'Das :attribute ist kein gültiges Datum.',
    'date_equals' => 'Das :attribute muss ein Datum gleich :date sein.',
    'date_format' => 'Das :attribute stimmt nicht mit dem Format :format überein.',
    'decimal' => 'Das :attribute muss eine Dezimalzahl sein.',
    'declined' => 'Das :attribute muss abgelehnt werden.',
    'declined_if' => 'Das :attribute muss abgelehnt werden, wenn :other :value ist.',
    'different' => 'Die :attribute und :other müssen sich unterscheiden.',
    'digits' => 'Die :attribute muss :digits Ziffern haben.',
    'digits_between' => 'Die :attribute muss zwischen :min und :max Ziffern liegen.',
    'dimensions' => 'Das :attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das :attribute Feld hat einen doppelten Wert.',
    'doesnt_end_with' => 'Das :attribute darf nicht mit einem der folgenden enden: :values.',
    'doesnt_start_with' => 'Das :attribute darf nicht mit einem der folgenden anfangen: :values.',
    'email' => 'Das :attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with' => 'Das :attribute muss mit einem der folgenden enden: :values.',
    'enum' => 'Das :attribute hat einen ungültigen Wert.',
    'exists' => 'Das ausgewählte :attribute ist ungültig.',
    'file' => 'Das :attribute muss eine Datei sein.',
    'filled' => 'Das :attribute Feld muss einen Wert haben.',
    'gt' => [
        'array' => 'Das :attribute muss mehr als :value Elemente haben.',
        'file' => 'Das :attribute muss größer als :value Kilobytes sein.',
        'numeric' => 'Das :attribute muss größer als :value sein.',
        'string' => 'Das :attribute muss mehr als :value Zeichen haben.',
    ],
    'gte' => [
        'array' => 'Das :attribute muss mindestens :value Elemente haben.',
        'file' => 'Das :attribute muss größer oder gleich :value Kilobytes sein.',
        'numeric' => 'Das :attribute muss größer oder gleich :value sein.',
        'string' => 'Das :attribute muss mindestens :value Zeichen haben.',
    ],
    'image' => 'Das :attribute muss ein Bild sein.',
    'in' => 'Das ausgewählte :attribute ist ungültig.',
    'in_array' => 'Das :attribute Feld existiert nicht in :other.',
    'integer' => 'Das :attribute muss eine ganze Zahl sein.',
    'ip' => 'Das :attribute muss eine gültige IP-Adresse sein.',
    'ipv4' => 'Das :attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6' => 'Das :attribute muss eine gültige IPv6-Adresse sein.',
    'json' => 'Das :attribute muss ein gültiger JSON-String sein.',
    'lowercase' => 'Das :attribute darf nur aus Kleinbuchstaben bestehen.',
    'lt' => [
        'array' => 'Das :attribute muss weniger als :value Elemente haben.',
        'file' => 'Das :attribute muss kleiner als :value Kilobytes sein.',
        'numeric' => 'Das :attribute muss kleiner als :value sein.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'Das :attribute darf nicht mehr als :value Elemente haben.',
        'file' => 'Das :attribute muss kleiner oder gleich :value Kilobytes sein.',
        'numeric' => 'Das :attribute muss kleiner oder gleich :value sein.',
        'string' => 'Das :attribute darf nicht mehr als :value Zeichen haben.',
    ],
    'mac_address' => 'Das :attribute muss eine gültige MAC-Adresse sein.',
    'max' => [
        'array' => 'Das :attribute darf nicht mehr als :max Elemente haben.',
        'file' => 'Das :attribute darf nicht größer als :max Kilobytes sein.',
        'numeric' => 'Das :attribute darf nicht größer als :max sein.',
        'string' => 'Das :attribute darf nicht mehr als :max Zeichen haben.',
    ],
    'max_digits' => 'Das :attribute darf nicht mehr als :max Stellen haben.',
    'mimes' => 'Das :attribute muss eine Datei des Typs: :values sein.',
    'mimetypes' => 'Das :attribute muss eine Datei des Typs: :values sein.',
    'min' => [
        'array' => 'Das :attribute muss mindestens :min Elemente haben.',
        'file' => 'Das :attribute muss mindestens :min Kilobytes groß sein.',
        'numeric' => 'Das :attribute muss mindestens :min sein.',
        'string' => 'Das :attribute muss mindestens :min Zeichen lang sein.',
    ],
    'min_digits' => 'Das :attribute muss mindestens :min Stellen haben.',
    'missing' => 'Das :attribute Feld muss vorhanden sein.',
    'missing_if' => 'Das :attribute Feld muss vorhanden sein, wenn :other :value ist.',
    'missing_unless' => 'Das :attribute Feld muss vorhanden sein, wenn :other nicht in :values enthalten ist.',
    'missing_with' => 'Das :attribute Feld muss vorhanden sein, wenn :values vorhanden ist.',
    'missing_with_all' => 'Das :attribute Feld muss vorhanden sein, wenn :values vorhanden ist.',
    'multiple_of' => 'Das :attribute muss ein Vielfaches von :value sein.',
    'not_in' => 'Das ausgewählte :attribute ist ungültig.',
    'not_regex' => 'Das :attribute Format ist ungültig.',
    'numeric' => 'Das :attribute muss eine Zahl sein.',
    'password' => [
        'letters' => 'Das :attribute muss mindestens einen Buchstaben enthalten.',
        'mixed' => 'Das :attribute muss Buchstaben und Zahlen enthalten.',
        'numbers' => 'Das :attribute muss mindestens eine Zahl enthalten.',
        'symbols' => 'Das :attribute muss mindestens ein Sonderzeichen enthalten.',
        'uncompromised' => 'Das :attribute wurde in einer Datenbank mit :breaches Kompromittierungen gefunden.',
    ],
    'present' => 'Das :attribute Feld muss vorhanden sein.',
    'prohibited' => 'Das :attribute Feld ist verboten.',
    'prohibited_if' => 'Das :attribute Feld ist verboten, wenn :other den Wert :value hat.',
    'prohibited_unless' => 'Das :attribute Feld ist verboten, es sei denn, :other ist in :values enthalten.',
    'prohibits' => 'Das :attribute Feld verbietet :other.',
    'regex' => 'Das :attribute Format ist ungültig.',
    'required' => 'Das :attribute Feld ist erforderlich.',
    'required_array_keys' => 'Das :attribute Feld muss alle Schlüssel :keys enthalten.',
    'required_if' => 'Das :attribute Feld ist erforderlich, wenn :other den Wert :value hat.',
    'required_unless' => 'Das :attribute Feld ist erforderlich, es sei denn, :other ist in :values enthalten.',
    'required_with' => 'Das :attribute Feld ist erforderlich, wenn :values vorhanden ist.',
    'required_with_all' => 'Das :attribute Feld ist erforderlich, wenn :values vorhanden ist.',
    'required_without' => 'Das :attribute Feld ist erforderlich, wenn :values nicht vorhanden ist.',
    'required_without_all' => 'Das :attribute Feld ist erforderlich, wenn keines der :values vorhanden ist.',
    'same' => 'Das :attribute und :other müssen übereinstimmen.',
    'size' => [
        'array' => 'Das :attribute muss genau :size Elemente enthalten',
        'file' => 'Das :attribute muss :size Kilobytes groß sein.',
        'numeric' => 'Das :attribute muss :size sein.',
        'string' => 'Das :attribute muss :size Zeichen lang sein.',
    ],
    'starts_with' => 'Das :attribute muss mit einem der folgenden Werte beginnen: :values.',
    'string' => 'Das :attribute muss eine Zeichenkette sein.',
    'timezone' => 'Das :attribute muss eine gültige Zone sein.',
    'unique' => 'Das :attribute ist bereits vergeben.',
    'uploaded' => 'Das :attribute konnte nicht hochgeladen werden.',
    'uppercase' => 'Das :attribute muss Großbuchstaben enthalten.',
    'url' => 'Das :attribute Format ist ungültig.',
    'ulid' => 'Das :attribute muss eine gültige ULID sein.',
    'uuid' => 'Das :attribute muss eine gültige UUID sein.',

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
            'rule-name' => 'Benutzerdefinierte Nachricht',
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
