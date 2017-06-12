<?php
return [
    'create' => 'Create Blog',
    'create_error' => 'Create blog error',
    'create_success' => 'Create blog success',
    'title' => 'Title',
    'video' => 'Video',
    'image' => 'Image',
    'validate' => [
        'title' => [
            'required' => 'Blog name is required',
            'minlengh' => 'Please enter at least 10 characters',
        ],
        'goal' => [
            'goal' => 'Goal',
            'required' => 'Goal is required',
            'number' => 'Please enter a valid number',
        ],
        'unit' => [
            'unit' => 'Unit',
            'required' => 'Unit is required',
        ],
        'image' => [
            'required' => 'Image is required',
        ],
        'video' => [
            'required' => 'Plese enter URL youtube',
        ],
        'description' => [
            'required' => 'Description is required',
        ],
    ],
];
