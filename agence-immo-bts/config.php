<?php
session_start();

$annonces = [
    [
        'id' => 1,
        'titre' => 'Appartement lumineux',
        'type' => 'Appartement',
        'ville' => 'Paris',
        'prix' => 245000,
        'pieces' => 3,
        'date' => '2026-05-01',
        'vendeur' => 'contact.vendeur1@example.com',
        'description' => 'Bel appartement proche des transports avec balcon.',
        'images' => [
            'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=900',
            'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=900'
        ]
    ],
    [
        'id' => 2,
        'titre' => 'Maison familiale',
        'type' => 'Maison',
        'ville' => 'Lyon',
        'prix' => 389000,
        'pieces' => 5,
        'date' => '2026-04-18',
        'vendeur' => 'contact.vendeur2@example.com',
        'description' => 'Maison avec jardin, garage et cuisine équipée.',
        'images' => [
            'https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=900',
            'https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=900'
        ]
    ],
    [
        'id' => 3,
        'titre' => 'Loft moderne',
        'type' => 'Loft',
        'ville' => 'Marseille',
        'prix' => 315000,
        'pieces' => 2,
        'date' => '2026-03-22',
        'vendeur' => 'contact.vendeur3@example.com',
        'description' => 'Grand loft rénové avec belle hauteur sous plafond.',
        'images' => [
            'https://images.unsplash.com/photo-1493809842364-78817add7ffb?w=900',
            'https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?w=900'
        ]
    ],
    [
        'id' => 4,
        'titre' => 'Studio centre-ville',
        'type' => 'Appartement',
        'ville' => 'Paris',
        'prix' => 155000,
        'pieces' => 1,
        'date' => '2026-02-15',
        'vendeur' => 'contact.vendeur1@example.com',
        'description' => 'Studio idéal étudiant ou investissement locatif.',
        'images' => [
            'https://images.unsplash.com/photo-1484154218962-a197022b5858?w=900'
        ]
    ],
    [
        'id' => 5,
        'titre' => 'Maison avec piscine',
        'type' => 'Maison',
        'ville' => 'Nice',
        'prix' => 620000,
        'pieces' => 6,
        'date' => '2026-05-10',
        'vendeur' => 'contact.vendeur4@example.com',
        'description' => 'Grande maison au calme avec terrasse et piscine.',
        'images' => [
            'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=900',
            'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=900'
        ]
    ],
    [
        'id' => 6,
        'titre' => 'Loft industriel',
        'type' => 'Loft',
        'ville' => 'Lille',
        'prix' => 278000,
        'pieces' => 4,
        'date' => '2026-01-30',
        'vendeur' => 'contact.vendeur5@example.com',
        'description' => 'Loft style industriel avec grandes fenêtres.',
        'images' => [
            'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=900'
        ]
    ]
];

function est_connecte() {
    return isset($_SESSION['user']);
}

function role() {
    return $_SESSION['role'] ?? 'visiteur';
}

function format_prix($prix) {
    return number_format($prix, 0, ',', ' ') . ' €';
}
?>
