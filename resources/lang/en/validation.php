<?php

return [
    'accepted' => 'The :attribute field must be equivalent to \"yes\", \"on\", \"1\", or \"true\"',
    'active_url' => 'The :attribute field is not a valid URL',
    'after' => 'The :attribute field must match the date that comes after the :date.',
    'after_or_equal' => 'The :attribute field must match a date equal to or coming after the :date.',
    'alpha' => 'The :attribute field can only contain letters',
    'alpha_dash' => 'The :attribute field can only contain letters, numbers and dashes',
    'alpha_num' => 'The :attribute field can only contain letters and numbers',
    'latin' => 'The :attribute field can only contain latin letters',
    'latin_dash_space' => ':attribute field can only contain basic ISO Latin letters, numbers, dashes, hyphens and spaces.',
    'array' => 'The :attribute field must be an array',
    'before' => 'The :attribute field must match the date going before the :date.',
    'before_or_equal' => 'The :attribute field must match the date equal to or going before the :date.',
    'between' => [
        'numeric' => 'The value of the :attribute field must be between :min and :max',
        'file' => 'The size of the uploaded file in the :attribute field must be in the range of :min to :max Kb',
        'string' => 'The length of the :attribute field must be in the range of :min to :max characters',
        'array' => 'The :attribute field must contain from :min to :max elements',
    ],
    'boolean' => 'The :attribute field must have a value of true or false',
    'confirmed' => 'The :attribute field and its confirming field do not match',
    'date' => 'The value of the :attribute field is not a date in the correct format',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute field value does not match the :format.',
    'different' => 'The values of :attribute and :other must be different',
    'digits' => 'The value of the :attribute field must match the digits of :digits',
    'digits_between' => 'The value of the :attribute field must be between :min and :max digits',
    'dimensions' => 'The image loaded in the :attribute field has invalid dimensions',
    'distinct' => 'The array in the :attribute field must not contain duplicate values',
    'email' => 'The value of the :attribute field must be a valid email address',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The :attribute field value is invalid',
    'file' => 'The :attribute field can only accept files',
    'filled' => 'The :attribute field is mandatory',
    'gt' => [
        'numeric' => 'The :attribute field must be larger than the :value.',
        'file' => 'The :attribute field must be larger than :value Kb.',
        'string' => 'The :attribute field must be larger than :value characters.',
        'array' => 'The :attribute field must contain more than :value elements.',
    ],
    'gte' => [
        'numeric' => 'The :attribute field must be greater than or equal to :value.',
        'file' => 'The :attribute field must be greater than or equal to :value Kb.',
        'string' => 'The :attribute field must be greater than or equal to :value characters.',
        'array' => 'The :attribute field must contain :value or more elements.',
    ],
    'image' => 'The :attribute field must be an image.',
    'in' => 'The value of the :attribute field is invalid.',
    'in_array' => 'The value of the :attribute field must also be present in the :other field.',
    'integer' => 'The value of the :attribute field must be an integer.',
    'ip' => 'The value of the :attribute field must be a valid IP address.',
    'ipv4' => 'The value of the :attribute field must be a valid IPv4 address.',
    'ipv6' => 'The value of the :attribute field must be a valid IPv6 address.',
    'json' => 'The value of the :attribute field must be a valid JSON string.',

    'lt' => [
        'numeric' => 'The :attribute field must be less than :value',
        'file' => 'The value of the :attribute field must be less than :value KB',
        'string' => 'The number of characters in the :attribute field must be less than :value.',
        'array' => 'The number of elements in the :attribute field must be less than :value',
    ],
    'lte' => [
        'numeric' => 'The :attribute field must be less than or equal to :value.',
        'file' => 'The file size in the :attribute field must be less than :value Kb',
        'string' => 'The number of characters in the :attribute field must be less than or equal to :value.',
        'array' => 'The number of elements in the :attribute field must be less than or equal to :value.',
    ],
    'max' => [
        'numeric' => 'The value of the :attribute field must not exceed the value of :max',
        'file' => 'The value of the :attribute field must not exceed the value of :max kilobytes',
        'string' => 'The value of the :attribute field must not be longer than :max characters',
        'array' => 'The :attribute field should not contain more than :max elements in the array',
    ],
    'mimes' => 'The file loaded in the :attribute field should match the formats: :values.',
    'mimetypes' => 'The :attribute field must be a file of one of the following types: :values',
    'min' => [
        'numeric' => 'The value of the :attribute field must be at least :min',
        'file' => 'The file loaded in the :attribute field must be no smaller than :min kilobytes',
        'string' => 'Value of :attribute field must not be shorter than :min characters',
        'array' => 'The :attribute field should not contain less than :min elements in the array',
    ],
    'not_in' => 'The value of the :attribute field is invalid',
    'not_regex' => 'The :attribute field has the wrong format',
    'numeric' => 'The value of the :attribute field has to be a number',
    'password' => 'The password is wrong',
    'present' => 'The :attribute field must be present in the query (but can be empty)',
    'regex' => 'The data in the :attribute field is in an invalid format',
    'required' => 'The :attribute field is required',
    'required_if' => 'The :attribute field is required when :other equals :value.',
    'required_unless' => 'The :attribute field is required when :other equals one of the :values.',
    'required_with' => 'The :attribute field is required when :values is in the query',
    'required_with_all' => 'The :attribute field is required when :values is in the query',
    'required_without' => 'The :attribute field is required when :values are not in the query',
    'required_without_all' => 'The :attribute field is required when none of the :values are in the query',
    'same' => 'The :attribute field and the :other field must match',
    'size' => [
        'numeric' => 'The :attribute field must be of size :size.',
        'file' => 'The :attribute field must be of size :size kilobytes',
        'string' => 'The :attribute field must have a size of :size characters',
        'array' => 'The :attribute field must have a :size of elements',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute field must be a string',
    'timezone' => 'The :attribute field must be a valid zone',
    'unique' => 'The :attribute field is already occupied',
    'uploaded' => 'Error loading the :attribute field',
    'url' => 'The :attribute field has the wrong format',
    'uuid' => 'The :attribute must be a valid UUID',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word' => 'The :attribute field contains a reserved word',
    'dont_allow_first_letter_number' => 'The first character of the \":input\" field cannot be a number',
    'exceeds_maximum_number' => 'The value of the :attribute field exceeds the maximum number of characters',
    'db_column' => ':attribute can only contain basic ISO Latin letters, numbers, dashes and cannot start with a number...',
    'attributes'                     => [],
];
