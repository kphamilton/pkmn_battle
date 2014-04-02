<?php
/**
 * Created by PhpStorm.
 * User: khamilton
 * Date: 4/2/14
 * Time: 4:06 PM
 */

$mr_mime = array(
    'name' => 'Mr. Mime',
    'types' => array(
        'psychic',
    ),
    'attacks' => array(
        array(
            'name' => 'Psychic',
            'type' => 'psychic',
            'power' => 90,
            'accuracy' => 100,
            'description' => 'A strong telekinetic attack. It may also lower the foe’s SP. DEF stat.',
            'STAB' => TRUE,
        ),
        array(
            'name' => 'Safeguard',
            'type' => 'normal',
            'power' => 0,
            'accuracy' => 100,
            'description' => 'It protects the user’s party from all status problems for five turns.',
            'STAB' => FALSE,
        ),
        array(
            'name' => 'Thunderbolt',
            'type' => 'electric',
            'power' => 90,
            'accuracy' => 100,
            'description' => 'A strong electrical attack that may also leave the foe paralyzed.',
            'STAB' => FALSE,
        ),
        array(
            'name' => 'Shadow Ball',
            'type' => 'Ghost',
            'power' => 80,
            'accuracy' => 100,
            'description' => 'A shadowy blob is hurled at the foe. May also lower the foe’s SP. DEF.',
            'STAB' => FALSE,
        ),
    ),
    'HP' => 138,
    'Attack' => 55,
    'Defense' => 102,
    'Special Attack' => 127,
    'Special Defense' => 149,
    'Speed' => 166
);

$electabuzz = array(
    'name' => 'Electabuzz',
    'types' => array(
        'electric',
    ),
    'attacks' => array(
        array(
            'name' => 'Psychic',
            'type' => 'psychic',
            'power' => 90,
            'accuracy' => 100,
            'description' => 'A strong telekinetic attack. It may also lower the foe’s SP. DEF stat.',
            'STAB' => FALSE,
        ),
        array(
            'name' => 'Thunderwave',
            'type' => 'electric',
            'power' => 0,
            'accuracy' => 100,
            'description' => 'A weak electric shock that is sure to cause paralysis if it hits.',
            'STAB' => TRUE,
        ),
        array(
            'name' => 'Thunderbolt',
            'type' => 'electric',
            'power' => 90,
            'accuracy' => 100,
            'description' => 'A strong electrical attack that may also leave the foe paralyzed.',
            'STAB' => TRUE,
        ),
        array(
            'name' => 'Hidden Power',
            'type' => 'flying',
            'power' => 60,
            'accuracy' => 100,
            'description' => 'An attack that varies in type and intensity depending on the user.',
            'STAB' => FALSE,
        ),
    ),
    'HP' => 140,
    'Attack' => 115,
    'Defense' => 94,
    'Special Attack' => 158,
    'Special Defense' => 103,
    'Speed' => 135
);

$kangaskhan = array(
    'name' => 'Kangaskhan',
    'types' => array(
        'normal',
    ),
    'attacks' => array(
        array(
            'name' => 'Hyper Beam',
            'type' => 'normal',
            'power' => 150,
            'accuracy' => 90,
            'description' => 'A severely damaging attack that makes the user rest on the next turn.',
            'STAB' => TRUE,
        ),
        array(
            'name' => 'Body Slam',
            'type' => 'normal',
            'power' => 85,
            'accuracy' => 100,
            'description' => 'The user drops its full body on the foe. It may leave the foe paralyzed.',
            'STAB' => TRUE,
        ),
        array(
            'name' => 'Brick Break',
            'type' => 'fighting',
            'power' => 75,
            'accuracy' => 100,
            'description' => 'An attack that also breaks any barrier like LIGHT SCREEN and REFLECT.',
            'STAB' => FALSE,
        ),
        array(
            'name' => 'Return',
            'type' => 'normal',
            'power' => 102,
            'accuracy' => 100,
            'description' => 'This attack move grows more powerful the more the user likes its TRAINER.',
            'STAB' => TRUE,
        ),
    ),
    'HP' => 220,
    'Attack' => 151,
    'Defense' => 99,
    'Special Attack' => 63,
    'Special Defense' => 102,
    'Speed' => 121
);

$nidoking = array(
    'name' => 'Nidoking',
    'types' => array(
        'poison',
        'ground'
    ),
    'attacks' => array(
        array(
            'name' => 'Surf',
            'type' => 'water',
            'power' => 95,
            'accuracy' => 100,
            'description' => 'A big wave crashes down on the foe. Can also be used for crossing water.',
            'STAB' => FALSE,
        ),
        array(
            'name' => 'Sludge Bomb',
            'type' => 'poison',
            'power' => 90,
            'accuracy' => 100,
            'description' => 'Filthy sludge is hurled at the foe. It may poison the target.',
            'STAB' => TRUE,
        ),
        array(
            'name' => 'Megahorn',
            'type' => 'bug',
            'power' => 120,
            'accuracy' => 85,
            'description' => 'A brutal ramming attack delivered with a tough and impressive horn.',
            'STAB' => FALSE,
        ),
        array(
            'name' => 'Earthquake',
            'type' => 'ground',
            'power' => 100,
            'accuracy' => 100,
            'description' => 'An earthquake that strikes all POKéMON in battle excluding the user.',
            'STAB' => TRUE,
        ),
    ),
    'HP' => 158,
    'Attack' => 147,
    'Defense' => 99,
    'Special Attack' => 101,
    'Special Defense' => 103,
    'Speed' => 129
);

$omastar = array(
    'name' => 'Omastar',
    'types' => array(
        'water',
        'rock'
    ),
    'attacks' => array(
        array(
            'name' => 'Brick Break',
            'type' => 'fighting',
            'power' => 75,
            'accuracy' => 100,
            'description' => 'An attack that also breaks any barrier like LIGHT SCREEN and REFLECT.',
            'STAB' => TRUE,
        ),
        array(
            'name' => 'Rain Dance',
            'type' => 'water',
            'power' => 0,
            'accuracy' => 100,
            'description' => 'A heavy rain falls for five turns, powering up WATER- type moves.',
            'STAB' => TRUE,
        ),
        array(
            'name' => 'Toxic',
            'type' => 'poison',
            'power' => 0,
            'accuracy' => 90,
            'description' => 'A move that badly poisons the foe. Its poison damage worsens every turn.',
            'STAB' => FALSE,
        ),
        array(
            'name' => 'Ice Beam',
            'type' => 'ice',
            'power' => 90,
            'accuracy' => 100,
            'description' => 'The foe is struck with an icy beam. It may freeze the foe solid.',
            'STAB' => FALSE,
        ),
    ),
    'HP' => 154,
    'Attack' => 74,
    'Defense' => 170,
    'Special Attack' => 178,
    'Special Defense' => 73,
    'Speed' => 106
);


$hitmonlee = array(
    'name' => 'Hitmonlee',
    'types' => array(
        'fighting'
    ),
    'attacks' => array(
        array(
            'name' => 'Surf',
            'type' => 'water',
            'power' => 95,
            'accuracy' => 100,
            'description' => 'A big wave crashes down on the foe. Can also be used for crossing water.',
            'STAB' => TRUE,
        ),
        array(
            'name' => 'Hidden Power',
            'type' => 'ice',
            'power' => 70,
            'accuracy' => 100,
            'description' => 'An attack that varies in type and intensity depending on the user.',
            'STAB' => FALSE,
        ),
        array(
            'name' => 'Focus Punch',
            'type' => 'fighting',
            'power' => 150,
            'accuracy' => 100,
            'description' => 'An attack that is executed last. The user flinches if hit beforehand.',
            'STAB' => TRUE,
        ),
        array(
            'name' => 'Substitute',
            'type' => 'normal',
            'power' => 0,
            'accuracy' => 100,
            'description' => 'The user creates a decoy using one- quarter of its full HP.',
            'STAB' => FALSE,
        ),
    ),
    'HP' => 137,
    'Attack' => 188,
    'Defense' => 75,
    'Special Attack' => 51,
    'Special Defense' => 136,
    'Speed' => 151
);


$pokemon_array = array($mr_mime, $electabuzz, $kangaskhan, $omastar, $nidoking, $hitmonlee);
