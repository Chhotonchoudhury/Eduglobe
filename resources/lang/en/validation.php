<?php
// resources/lang/en/validation.php

return [
    'required' => 'The :attribute field is required.',
    'email' => 'The :attribute must be a valid email address.',
    'password' => [
        'required' => 'The :attribute field is required.',
        'confirmed' => 'The :attribute confirmation does not match.',
        'min' => 'The :attribute must be at least :min characters long.',
    ],
    
    'mimes' => 'The :attribute must be a file of type: :values.',
    'max' => 'The :attribute may not be larger than :max kilobytes (2MB).',
    // Add other custom messages for different rules as needed
];
