<?php

return [
    'required' => 'Le champ :attribute est obligatoire.',
    'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'url' => 'Le champ :attribute doit être une URL valide.',
    'integer' => 'Le champ :attribute doit être un nombre entier.',
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'date' => 'Le champ :attribute doit être une date valide.',
    'image' => 'Le champ :attribute doit être une image.',
    'mimes' => 'Le champ :attribute doit être un fichier de type :values.',
    'after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égale à :date.',
    'min' => [
        'numeric' => 'Le champ :attribute doit être au moins égal à :min.',
        'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
        'file' => 'Le fichier :attribute doit peser au moins :min kilo-octets.',
        'array' => 'Le champ :attribute doit contenir au moins :min éléments.',
    ],
    'max' => [
        'numeric' => 'Le champ :attribute ne peut pas être supérieur à :max.',
        'string' => 'Le champ :attribute ne peut pas dépasser :max caractères.',
        'file' => 'Le fichier :attribute ne peut pas dépasser :max kilo-octets.',
        'array' => 'Le champ :attribute ne peut pas contenir plus de :max éléments.',
    ],
    'between' => [
        'numeric' => 'Le champ :attribute doit être compris entre :min et :max.',
        'string' => 'Le champ :attribute doit contenir entre :min et :max caractères.',
    ],
    'attributes' => [
        'name' => 'nom',
        'email' => 'adresse e-mail',
        'project_type' => 'type de projet',
        'message' => 'message',
        'title' => 'titre',
        'url' => 'URL',
    ],
];
