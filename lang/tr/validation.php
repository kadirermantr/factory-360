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

    'accepted' => ':attribute kabul edilmelidir.',
    'accepted_if' => ':other :value olduğunda :attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after' => ':attribute, :date tarihinden daha eski bir tarih olmalıdır.',
    'after_or_equal' => ':attribute, :date tarihinden sonra veya aynı tarihte bir tarih olmalıdır.',
    'alpha' => ':attribute sadece harf içerebilir.',
    'alpha_dash' => ':attribute sadece harf, rakam, tire ve alt çizgi içerebilir.',
    'alpha_num' => ':attribute sadece harf ve rakam içerebilir.',
    'array' => ':attribute bir dizi olmalıdır.',
    'ascii' => ':attribute yalnızca tek baytlık alfasayısal karakterler ve semboller içermelidir.',
    'before' => ':attribute, :date tarihinden daha önceki bir tarih olmalıdır.',
    'before_or_equal' => ':attribute, :date tarihinden önce veya aynı tarihte bir tarih olmalıdır.',
    'between' => [
        'array' => ':attribute, en az :min ve en fazla :max öğe içermelidir.',
        'file' => ':attribute, :min ile :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute, :min ile :max arasında olmalıdır.',
        'string' => ':attribute, :min ile :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute doğrulaması eşleşmiyor.',
    'current_password' => 'Parola yanlış.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_equals' => ':attribute, :date ile aynı tarihte olmalıdır.',
    'date_format' => ':attribute, :format biçimi ile eşleşmiyor.',
    'decimal' => ':attribute alanı, :decimal ondalık basamağa sahip olmalıdır.',
    'declined' => ':attribute kabul edilmemelidir.',
    'declined_if' => ':other :value olduğunda :attribute kabul edilmemelidir.',
    'different' => ':attribute ile :other farklı olmalıdır.',
    'digits' => ':attribute, :digits basamak olmalıdır.',
    'digits_between' => ':attribute, :min ile :max basamak arasında olmalıdır.',
    'dimensions' => ':attribute geçersiz resim boyutlarına sahip.',
    'distinct' => ':attribute alanı yinelenen bir değere sahip.',
    'doesnt_end_with' => ':attribute şu değerlerden biri ile bitiremez: :values.',
    'doesnt_start_with' => ':attribute şu değerlerden biri ile başlayamaz: :values.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute şu değerlerden biri ile bitmelidir: :values.',
    'enum' => ':attribute şu değerlerden biri olmalıdır: :values.',
    'exists' => 'Seçili :attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanı bir değer içermelidir.',
    'gt' => [
        'array' => ':attribute, :value öğeden daha fazla öğe içermelidir.',
        'file' => ':attribute, :value kilobayttan daha büyük olmalıdır.',
        'numeric' => ':attribute, :value değerinden daha büyük olmalıdır.',
        'string' => ':attribute, :value karakterden daha uzun olmalıdır.',
    ],
    'gte' => [
        'array' => ':attribute, :value öğeden daha fazla veya :value öğeye eşit öğe içermelidir.',
        'file' => ':attribute, :value kilobayttan daha büyük veya :value kilobayta eşit olmalıdır.',
        'numeric' => ':attribute, :value değerinden daha büyük veya :value değerine eşit olmalıdır.',
        'string' => ':attribute, :value karakterden daha uzun veya :value karaktere eşit olmalıdır.',
    ],
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçili :attribute geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer' => ':attribute bir tamsayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'lowercase' => ':attribute yalnızca küçük harf içermelidir.',
    'lt' => [
        'array' => ':attribute, :value öğeden daha az öğe içermelidir.',
        'file' => ':attribute, :value kilobayttan daha az olmalıdır.',
        'numeric' => ':attribute, :value değerinden daha az olmalıdır.',
        'string' => ':attribute, :value karakterden daha kısa olmalıdır.',
    ],
    'lte' => [
        'array' => ':attribute, :value öğeden daha az veya :value öğeye eşit öğe içermelidir.',
        'file' => ':attribute, :value kilobayttan daha az veya :value kilobayta eşit olmalıdır.',
        'numeric' => ':attribute, :value değerinden daha az veya :value değerine eşit olmalıdır.',
        'string' => ':attribute, :value karakterden daha kısa veya :value karaktere eşit olmalıdır.',
    ],
    'mac_address' => ':attribute geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'array' => ':attribute, :max\'tan fazla öğeye sahip olmamalıdır.',
        'file' => ':attribute, :max kilobayttan büyük olmamalıdır.',
        'numeric' => ':attribute, :max değerinden büyük olmamalıdır.',
        'string' => ':attribute, :max karakterden büyük olmamalıdır.',
    ],
    'max_digits' => ':attribute, :max basamağa sahip olmamalıdır.',
    'mimes' => ':attribute, :values türünde bir dosya olmalıdır.',
    'mimetypes' => ':attribute, :values türünde bir dosya olmalıdır.',
    'min' => [
        'array' => ':attribute en az :min öğeye sahip olmalıdır.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute en az :min olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
    ],
    'min_digits' => ':attribute, :min basamaklı olmalıdır.',
    'missing' => ':attribute alanı eksik olmalıdır.',
    'missing_if' => ':attribute alanı, :other :value olduğunda eksik olmalıdır.',
    'missing_unless' => ':attribute alanı, :other :values içinde olmadığında eksik olmalıdır.',
    'missing_with' => ':attribute alanı, :values mevcut olduğunda eksik olmalıdır.',
    'missing_with_all' => ':attribute alanı, :values mevcut olduğunda eksik olmalıdır.',
    'multiple_of' => ':attribute, :value\'nin katları olmalıdır.',
    'not_in' => 'Seçili :attribute geçersiz.',
    'not_regex' => ':attribute biçimi geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'password' => [
        'letters' => ':attribute en az bir harf içermelidir.',
        'mixed' => ':attribute" en az bir büyük harf ve bir küçük harf içermelidir.',
        'numbers' => ':attribute en az bir rakam içermelidir.',
        'symbols' => ':attribute en az bir sembol içermelidir.',
        'uncompromised' => 'Verilen :attribute, bir veri sızıntısında görünmüş. Lütfen başka bir :attribute seçin.',
    ],
    'present' => ':attribute alanı mevcut olmalıdır.',
    'prohibited' => ':attribute alanı yasaktır.',
    'prohibited_if' => ':attribute alanı, :other :value değerine sahip olduğunda yasaktır.',
    'prohibited_unless' => ':attribute alanı, :other :values\'e sahip olmadığı sürece yasaktır.',
    'prohibits' => ':attribute, :other\'ın kullanımını yasaklar.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_array_keys' => ':attribute dizisi, :keys anahtarlarına sahip olmalıdır.',
    'required_if' => ':attribute alanı, :other :value değerine sahip olduğunda gereklidir.',
    'required_unless' => ':attribute alanı, :other :values\'e sahip olmadığı sürece gereklidir.',
    'required_with' => ':values mevcut olduğunda :attribute alanı gereklidir.',
    'required_with_all' => ':values mevcut olduğunda :attribute alanı gereklidir.',
    'required_without' => ':values mevcut olmadığında :attribute alanı gereklidir.',
    'required_without_all' => ':values değerlerinden hiçbiri mevcut olmadığında :attribute alanı gereklidir.',
    'same' => ':attribute ve :other eşleşmelidir.',
    'size' => [
        'array' => ':attribute, :size öğeye sahip olmalıdır.',
        'file' => ':attribute, :size kilobayt olmalıdır.',
        'numeric' => ':attribute, :size olmalıdır.',
        'string' => ':attribute, :size karakter olmalıdır.',
    ],
    'starts_with' => ':attribute, şu değerlerden biriyle başlamalıdır: :values',
    'string' => ':attribute bir dize olmalıdır.',
    'timezone' => ':attribute geçerli bir bölge olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'uppercase' => ':attribute yalnızca büyük harfler içermelidir.',
    'url' => ':attribute geçerli bir URL olmalıdır.',
    'ulid' => ':attribute geçerli bir ULID olmalıdır',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

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
            'rule-name' => 'Özel mesaj',
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

    'attributes' => [
        'name' => 'isim',
        'password' => 'parola',
        'email' => 'E-posta',
        'firstname' => 'isim',
        'lastname' => 'soyisim',
        'phone' => 'telefon',
        'gender' => 'cinsiyet',
        'company_id' => 'fabrika',
    ],
];
