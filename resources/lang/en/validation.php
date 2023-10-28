<?php
// resources/lang/en/validation.php

return [
    'required' => 'The :attribute field is required.',
    'email' => 'The :attribute must be a valid email address.',
    'password' => [
        'required' => 'The :attribute field is required.',
        'min' => 'The :attribute must be at least :min characters long.',
    ],
    
    'unique' => 'The :attribute has already been taken.', // Custom message for the "unique" rule
    'mimes' => 'The :attribute must be a file of type: :values.',
    'max' => 'The :attribute may not be larger than :max kilobytes (2MB).',
    'confirmed' => 'The :attribute confirmation does not match.',
    // Add other custom messages for different rules as needed
];
