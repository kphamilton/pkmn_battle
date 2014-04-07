<?php

$mr_mime = array(
    'name' => 'Mr. Mime',
    'types' => array(
        'psychic',
    ),
    'attacks' => array(
        'Psychic' =>
            array(
                'name' => "Psychic",
                'type' => 'psychic',
                'power' => 90,
                'accuracy' => 100,
                'description' => 'A strong telekinetic attack. It may also lower the foe’s SP. DEF stat.',
                'STAB' => TRUE,
                'damage' => 0
            ),
        'Safeguard' =>
            array(
                'name' => 'Safeguard',
                'type' => 'normal',
                'power' => 0,
                'accuracy' => 100,
                'description' => 'It protects the user’s party from all status problems for five turns.',
                'STAB' => FALSE,
                'damage' => 0
            ),
        "Thunderbolt" =>
            array(
                'name' => 'Thunderbolt',
                'type' => 'electric',
                'power' => 90,
                'accuracy' => 100,
                'description' => 'A strong electrical attack that may also leave the foe paralyzed.',
                'STAB' => FALSE,
                'damage' => 0
            ),
        "Shadow Ball" =>
            array(
                'name' => 'Shadow Ball',
                'type' => 'ghost',
                'power' => 80,
                'accuracy' => 100,
                'description' => 'A shadowy blob is hurled at the foe. May also lower the foe’s SP. DEF.',
                'STAB' => FALSE,
                'damage' => 0
            ),
    ),
    'HP' => 138,
    'Attack' => 55,
    'Defense' => 102,
    'Special Attack' => 127,
    'Special Defense' => 149,
    'Speed' => 166,
    'Number' => 122
);

$electabuzz = array(
    'name' => 'Electabuzz',
    'types' => array(
        'electric',
    ),
    'attacks' => array(
        "Psychic" =>
            array(
                'name' => 'Psychic',
                'type' => 'psychic',
                'power' => 90,
                'accuracy' => 100,
                'description' => 'A strong telekinetic attack. It may also lower the foe’s SP. DEF stat.',
                'STAB' => FALSE,
                'damage' => 0
            ),
        "Thunderwave" =>
            array(
                'name' => 'Thunderwave',
                'type' => 'electric',
                'power' => 0,
                'accuracy' => 100,
                'description' => 'A weak electric shock that is sure to cause paralysis if it hits.',
                'STAB' => TRUE,
                'damage' => 0
            ),
        "Thunderbolt" =>
            array(
                'name' => 'Thunderbolt',
                'type' => 'electric',
                'power' => 90,
                'accuracy' => 100,
                'description' => 'A strong electrical attack that may also leave the foe paralyzed.',
                'STAB' => TRUE,
                'damage' => 0
            ),
        "Hidden Power" =>
            array(
                'name' => 'Hidden Power',
                'type' => 'flying',
                'power' => 60,
                'accuracy' => 100,
                'description' => 'An attack that varies in type and intensity depending on the user.',
                'STAB' => FALSE,
                'damage' => 0
            ),
    ),
    'HP' => 140,
    'Attack' => 115,
    'Defense' => 94,
    'Special Attack' => 158,
    'Special Defense' => 103,
    'Speed' => 135,
    'Number' => 125
);

$kangaskhan = array(
    'name' => 'Kangaskhan',
    'types' => array(
        'normal',
    ),
    'attacks' => array(
        "Hyper Beam" =>
            array(
                'name' => 'Hyper Beam',
                'type' => 'normal',
                'power' => 150,
                'accuracy' => 90,
                'description' => 'A severely damaging attack that makes the user rest on the next turn.',
                'STAB' => TRUE,
                'damage' => 0
            ),
        "Body Slam" =>
            array(
                'name' => 'Body Slam',
                'type' => 'normal',
                'power' => 85,
                'accuracy' => 100,
                'description' => 'The user drops its full body on the foe. It may leave the foe paralyzed.',
                'STAB' => TRUE,
                'damage' => 0
            ),
        "Brick Break" =>
            array(
                'name' => 'Brick Break',
                'type' => 'fighting',
                'power' => 75,
                'accuracy' => 100,
                'description' => 'An attack that also breaks any barrier like LIGHT SCREEN and REFLECT.',
                'STAB' => FALSE,
                'damage' => 0
            ),
        "Return" =>
            array(
                'name' => 'Return',
                'type' => 'normal',
                'power' => 102,
                'accuracy' => 100,
                'description' => 'This attack move grows more powerful the more the user likes its TRAINER.',
                'STAB' => TRUE,
                'damage' => 0
            ),
    ),
    'HP' => 220,
    'Attack' => 151,
    'Defense' => 99,
    'Special Attack' => 63,
    'Special Defense' => 102,
    'Speed' => 121,
    'Number' => 115
);

$nidoking = array(
    'name' => 'Nidoking',
    'types' => array(
        'poison',
        'ground'
    ),
    'attacks' => array(
        "Surf" =>
            array(
                'name' => 'Surf',
                'type' => 'water',
                'power' => 95,
                'accuracy' => 100,
                'description' => 'A big wave crashes down on the foe. Can also be used for crossing water.',
                'STAB' => FALSE,
                'damage' => 0
            ),
        "Sludge Bomb" =>
            array(
                'name' => 'Sludge Bomb',
                'type' => 'poison',
                'power' => 90,
                'accuracy' => 100,
                'description' => 'Filthy sludge is hurled at the foe. It may poison the target.',
                'STAB' => TRUE,
                'damage' => 0
            ),
        "Megahorn" =>
            array(
                'name' => 'Megahorn',
                'type' => 'bug',
                'power' => 120,
                'accuracy' => 85,
                'description' => 'A brutal ramming attack delivered with a tough and impressive horn.',
                'STAB' => FALSE,
                'damage' => 0
            ),
        "Earthquake" =>
            array(
                'name' => 'Earthquake',
                'type' => 'ground',
                'power' => 100,
                'accuracy' => 100,
                'description' => 'An earthquake that strikes all POKéMON in battle excluding the user.',
                'STAB' => TRUE,
                'damage' => 0
            ),
    ),
    'HP' => 158,
    'Attack' => 147,
    'Defense' => 99,
    'Special Attack' => 101,
    'Special Defense' => 103,
    'Speed' => 129,
    'Number' => 034
);

$omastar = array(
    'name' => 'Omastar',
    'types' => array(
        'water',
        'rock'
    ),
    'attacks' => array(
        "Surf" =>
        array(
            'name' => 'Surf',
            'type' => 'water',
            'power' => 95,
            'accuracy' => 100,
            'description' => 'A big wave crashes down on the foe. Can also be used for crossing water.',
            'STAB' => TRUE,
            'damage' => 0
        ),
        "Rain Dance" =>
            array(
                'name' => 'Rain Dance',
                'type' => 'water',
                'power' => 0,
                'accuracy' => 100,
                'description' => 'A heavy rain falls for five turns, powering up WATER- type moves.',
                'STAB' => TRUE,
                'damage' => 0
            ),
        "Toxic" =>
            array(
                'name' => 'Toxic',
                'type' => 'poison',
                'power' => 0,
                'accuracy' => 90,
                'description' => 'A move that badly poisons the foe. Its poison damage worsens every turn.',
                'STAB' => FALSE,
                'damage' => 0
            ),
        "Ice Beam" =>
            array(
                'name' => 'Ice Beam',
                'type' => 'ice',
                'power' => 90,
                'accuracy' => 100,
                'description' => 'The foe is struck with an icy beam. It may freeze the foe solid.',
                'STAB' => FALSE,
                'damage' => 0
            ),
    ),
    'HP' => 154,
    'Attack' => 74,
    'Defense' => 170,
    'Special Attack' => 178,
    'Special Defense' => 73,
    'Speed' => 106,
    'Number' => 139
);


$hitmonlee = array(
    'name' => 'Hitmonlee',
    'types' => array(
        'fighting'
    ),
    'attacks' => array(
        "Brick Break" =>
        array(
            'name' => 'Brick Break',
            'type' => 'fighting',
            'power' => 75,
            'accuracy' => 100,
            'description' => 'An attack that also breaks any barrier like LIGHT SCREEN and REFLECT.',
            'STAB' => TRUE,
            'damage' => 0
        ),
        "Hidden Power" =>
            array(
                'name' => 'Hidden Power',
                'type' => 'ice',
                'power' => 70,
                'accuracy' => 100,
                'description' => 'An attack that varies in type and intensity depending on the user.',
                'STAB' => FALSE,
                'damage' => 0
            ),
        "Focus Punch" =>
            array(
                'name' => 'Focus Punch',
                'type' => 'fighting',
                'power' => 150,
                'accuracy' => 100,
                'description' => 'An attack that is executed last. The user flinches if hit beforehand.',
                'STAB' => TRUE,
                'damage' => 0
            ),
        "Substitute" =>
            array(
                'name' => 'Substitute',
                'type' => 'normal',
                'power' => 0,
                'accuracy' => 100,
                'description' => 'The user creates a decoy using one- quarter of its full HP.',
                'STAB' => FALSE,
                'damage' => 0
            ),
    ),
    'HP' => 137,
    'Attack' => 188,
    'Defense' => 75,
    'Special Attack' => 51,
    'Special Defense' => 136,
    'Speed' => 151,
    'Number' => 106
);


$pokemon_array = array('Mr. Mime' => $mr_mime, 'Electabuzz' => $electabuzz, 'Kangaskhan' => $kangaskhan, 'Omastar' => $omastar, 'Nidoking' => $nidoking, 'Hitmonlee' => $hitmonlee);
var_dump($pokemon_array);
$pokemon_array = json_encode($pokemon_array);

echo $pokemon_array;


$types = ['normal' => 'Normal', 'fire' => 'Fire', 'water' => 'Water', 'electric' => 'Electric', 'grass' => 'Grass', 'ice' => 'Ice', 'fighting' => 'Fighting', 'poison' => 'Poison', 'ground' => 'Ground', 'flying' => 'Flying', 'psychic' => 'Psychic', 'bug' => 'Bug', 'rock' => 'Rock', 'ghost' => 'Ghost', 'dragon' => 'Dragon', 'dark' => 'Dark', 'steel' => 'Steel'];
$normal = 'rock-,ghost--,steel-';
$fire = 'fire-,water-,grass+,ice+,bug+,rock-,dragon-,steel+';
$water = 'fire+,water-,grass-,ground+,rock+,dragon-';
$electric = 'water+,electric-,grass-,ground--,flying+,dragon-';
$grass = 'fire-,water+,grass-,poison-,ground+,flying-,bug-,rock+,dragon-,steel-';
$ice = 'fire-,water-,grass+,ice-,ground+,flying+,dragon+,steel-';
$fighting = 'normal+,ice+,poison-,flying-,psychic-,bug-,rock+,ghost--,dark+,steel+,fai-';
$poison = 'grass+,poison-,ground-,rock-,ghost-,steel--,fai+';
$ground = 'fire+,electric+,grass-,poison+,flying--,bug-,rock+,steel+';
$flying = 'electric-,grass+,fighting+,bug+,rock-,steel-';
$psychic = 'fighting+,poison+,psychic-,dark--,steel-';
$bug = 'fire-,grass+,fighting-,poison-,flying-,psychic+,ghost-,dark+,steel-,fai-';
$rock = 'fire+,ice+,fighting-,ground-,flying+,bug+,steel-';
$ghost = 'normal--,psychic+,ghost+,dark-';
$dragon = 'dragon+,steel-,fai--';
$dark = 'fighting-,psychic+,ghost+,dark-,fai-';
$steel = 'fire-,water-,electric-,ice+,rock+,steel-,fai+';

$typeCluster = array();;
foreach($types as $key => $name) {
    $strengths = explode(',', $$key);
    foreach($strengths as $strength) {
        if (stristr($strength, '--')) {
            $strength = str_replace('--', '', $strength);
            $typeCluster[strtolower($key)][$strength] = 0;
            continue;
        }
        if (stristr($strength, '-')) {
            $strength = str_replace('-', '', $strength);
            $typeCluster[strtolower($key)][$strength] = 0.5;
            continue;
        }
        if (stristr($strength, '+')) {
            $strength = str_replace('+', '', $strength);
            $typeCluster[strtolower($key)][$strength] = 2;
            continue;
        }
    }
}
var_dump($typeCluster);
echo json_encode($typeCluster);


$attack_stat_lookup = array(
    'normal' => 'Attack',
    'fighting' => 'Attack',
    'poison' => 'Attack',
    'ground' => 'Attack',
    'flying' => 'Attack',
    'bug' => 'Attack',
    'rock' => 'Attack',
    'ghost' => 'Attack',
    'steel' => 'Attack',
    'fire' => 'Special Attack',
    'water' => 'Special Attack',
    'electric' => 'Special Attack',
    'grass' => 'Special Attack',
    'ice' => 'Special Attack',
    'psychic' => 'Special Attack',
    'dragon' => 'Special Attack',
    'dark' => 'Special Attack',
);

var_dump($attack_stat_lookup);
echo json_encode($attack_stat_lookup);

$new_stats = array(
  'Arbok' => array(
      'HP' => (148+182)/2,
      'Attack' => (103+115+150+165)/4,
      'Defense' => (87+97+132+145)/4,
      'Special Attack' => (83+93+128+140)/4,
      'Special Defense' => (97+108+143+157)/4,
      'Speed' => (99+110+144+158)/4
      ),
    'Blastoise' => array(
        'HP' => (168+203)/2,
        'Attack' => (101+113+148+162)/4,
        'Defense' => (118+132+166+182)/4,
        'Special Attack' => (103+115+150+165)/4,
        'Special Defense' => (123+137+172+189)/4,
        'Speed' => (96+107+142+156)/4
    ),
    'Clefable' => array(
        'HP' => (186+221)/2,
        'Attack' => (89+99+133+146)/4,
        'Defense' => (91+102+137+150)/4,
        'Special Attack' => (103+115+150+165)/4,
        'Special Defense' => (108+121+155+170)/4,
        'Speed' => (79+88+122+134)/4
    ),
    'Electabuzz' => array(
        'HP' => (153+188)/2,
        'Attack' => (101+113+148+162)/4,
        'Defense' => (75+84+119+130)/4,
        'Special Attack' => (113+126+161+177)/4,
        'Special Defense' => (103+115+150+165)/4,
        'Speed' => (123+137+172+189)/4
    ),
    'Electrode' => array(
        'HP' => (148+182)/2,
        'Attack' => (69+77+111+122)/4,
        'Defense' => (89+99+133+146)/4,
        'Special Attack' => (99+110+144+158)/4,
        'Special Defense' => (99+110+144+158)/4,
        'Speed' => (158+176+210+231)/4
    ),
    'Fearow' => array(
        'HP' => (153+188)/2,
        'Attack' => (108+121+155+170)/4,
        'Defense' => (83+93+128+140)/4,
        'Special Attack' => (80+89+123+135)/4,
        'Special Defense' => (80+89+123+135)/4,
        'Speed' => (118+132+166+182)/4
    ),
    'Flareon' => array(
        'HP' => (153+188)/2,
        'Attack' => (148+165+199+218)/4,
        'Defense' => (79+88+122+134)/4,
        'Special Attack' => (113+126+161+177)/4,
        'Special Defense' => (128+143+177+194)/4,
        'Speed' => (83+93+128+140)/4
    ),
    'Golduck' => array(
        'HP' => (170+204)/2,
        'Attack' => (100+112+146+160)/4,
        'Defense' => (96+107+142+156)/4,
        'Special Attack' => (113+126+161+177)/4,
        'Special Defense' => (99+110+144+158)/4,
        'Speed' => (103+115+150+165)/4
    ),
    'Golem' => array(
        'HP' => (170+204)/2,
        'Attack' => (128+143+177+194)/4,
        'Defense' => (148+165+199+218)/4,
        'Special Attack' => (73+82+117+128)/4,
        'Special Defense' => (83+93+128+140)/4,
        'Speed' => (63+71+106+116)/4
    ),
    'Hitmonchan' => array(
        'HP' => (137+171)/2,
        'Attack' => (123+137+172+189)/4,
        'Defense' => (97+108+143+157)/4,
        'Special Attack' => (54+60+95+104)/4,
        'Special Defense' => (128+143+177+194)/4,
        'Speed' => (94+105+140+154)/4
    ),
    'Hitmonlee' => array(
        'HP' => (137+171)/2,
        'Attack' => (138+154+188+206)/4,
        'Defense' => (72+80+115+126)/4,
        'Special Attack' => (54+60+95+104)/4,
        'Special Defense' => (128+143+177+194)/4,
        'Speed' => (105+117+152+167)/4
    ),
    'Hypno' => array(
        'HP' => (175+210)/2,
        'Attack' => (91+102+137+150)/4,
        'Defense' => (89+99+133+146)/4,
        'Special Attack' => (91+102+137+150)/4,
        'Special Defense' => (133+148+183+201)/4,
        'Speed' => (85+95+130+143)/4
    ),
    'Kabutops' => array(
        'HP' => (148+182)/2,
        'Attack' => (133+148+183+201)/4,
        'Defense' => (123+137+172+189)/4,
        'Special Attack' => (83+93+128+140)/4,
        'Special Defense' => (89+99+133+146)/4,
        'Speed' => (99+110+144+158)/4
    ),
    'Kangaskhan' => array(
        'HP' => (197+232)/2,
        'Attack' => (113+126+161+177)/4,
        'Defense' => (99+110+144+158)/4,
        'Special Attack' => (59+66+100+110)/4,
        'Special Defense' => (99+110+144+158)/4,
        'Speed' => (108+121+155+170)/4
    ),
    'Kingler' => array(
        'HP' => (142+177)/2,
        'Attack' => (148+165+199+218)/4,
        'Defense' => (133+148+183+201)/4,
        'Special Attack' => (69+77+111+122)/4,
        'Special Defense' => (69+77+111+122)/4,
        'Speed' => (93+104+139+152)/4
    ),
    'Magmar' => array(
        'HP' => (153+188)/2,
        'Attack' => (113+126+161+177)/4,
        'Defense' => (75+84+119+130)/4,
        'Special Attack' => (118+132+166+182)/4,
        'Special Defense' => (103+115+150+165)/4,
        'Speed' => (111+124+159+174)/4
    ),
    'Mr. Mime' => array(
        'HP' => (126+160)/2,
        'Attack' => (63+71+106+116)/4,
        'Defense' => (83+93+128+140)/4,
        'Special Attack' => (118+132+166+182)/4,
        'Special Defense' => (138+154+188+206)/4,
        'Speed' => (108+121+155+170)/4
    ),
    'Muk' => array(
        'HP' => (197+232)/2,
        'Attack' => (123+137+172+189)/4,
        'Defense' => (93+104+139+152)/4,
        'Special Attack' => (83+93+128+140)/4,
        'Special Defense' => (118+132+166+182)/4,
        'Speed' => (69+77+111+122)/4
    ),
    'Nidoking' => array(
        'HP' => (171+205)/2,
        'Attack' => (110+123+157+172)/4,
        'Defense' => (95+106+141+155)/4,
        'Special Attack' => (103+115+150+165)/4,
        'Special Defense' => (93+104+139+152)/4,
        'Speed' => (103+115+150+165)/4
    ),
    'Nidoqueen' => array(
        'HP' => (181+215)/2,
        'Attack' => (100+112+146+160)/4,
        'Defense' => (105+117+152+167)/4,
        'Special Attack' => (93+104+139+152)/4,
        'Special Defense' => (103+115+150+165)/4,
        'Speed' => (94+105+140+154)/4
    ),
    'Ninetales' => array(
        'HP' => (162+197)/2,
        'Attack' => (94+105+140+154)/4,
        'Defense' => (93+104+139+152)/4,
        'Special Attack' => (99+111+145+159)/4,
        'Special Defense' => (118+132+166+182)/4,
        'Speed' => (118+132+166+182)/4
    ),
    'Omastar' => array(
        'HP' => (159+193)/2,
        'Attack' => (79+88+122+134)/4,
        'Defense' => (143+159+194+213)/4,
        'Special Attack' => (133+148+183+201)/4,
        'Special Defense' => (89+99+133+146)/4,
        'Speed' => (73+82+117+128)/4
    ),
    'Persian' => array(
        'HP' => (153+188)/2,
        'Attack' => (89+99+133+146)/4,
        'Defense' => (79+88+122+134)/4,
        'Special Attack' => (83+93+128+140)/4,
        'Special Defense' => (83+93+128+140)/4,
        'Speed' => (133+148+183+201)/4
    ),
    'Pinsir' => array(
        'HP' => (153+188)/2,
        'Attack' => (143+159+194+213)/4,
        'Defense' => (118+132+166+182)/4,
        'Special Attack' => (73+82+117+128)/4,
        'Special Defense' => (89+99+133+146)/4,
        'Speed' => (103+115+150+165)/4
    ),
    'Poliwrath' => array(
        'HP' => (181+215)/2,
        'Attack' => (103+115+150+165)/4,
        'Defense' => (113+126+161+177)/4,
        'Special Attack' => (89+99+133+146)/4,
        'Special Defense' => (108+121+155+170)/4,
        'Speed' => (89+99+133+146)/4
    ),
    'Primeape' => array(
        'HP' => (153+188)/2,
        'Attack' => (123+137+172+189)/4,
        'Defense' => (79+88+122+134)/4,
        'Special Attack' => (79+88+122+134)/4,
        'Special Defense' => (89+99+133+146)/4,
        'Speed' => (113+126+161+177)/4
    ),
    'Raichu' => array(
        'HP' => (148+182)/2,
        'Attack' => (108+121+155+170)/4,
        'Defense' => (73+82+117+128)/4,
        'Special Attack' => (108+121+155+170)/4,
        'Special Defense' => (99+110+144+158)/4,
        'Speed' => (118+132+166+182)/4
    ),
    'Rapidash' => array(
        'HP' => (153+188)/2,
        'Attack' => (118+132+166+182)/4,
        'Defense' => (89+99+133+146)/4,
        'Special Attack' => (99+110+144+158)/4,
        'Special Defense' => (99+110+144+158)/4,
        'Speed' => (123+137+172+189)/4
    ),
    'Sandslash' => array(
        'HP' => (164+199)/2,
        'Attack' => (118+132+166+182)/4,
        'Defense' => (128+143+177+194)/4,
        'Special Attack' => (63+71+106+116)/4,
        'Special Defense' => (73+82+117+128)/4,
        'Speed' => (83+93+128+140)/4
    ),
    'Scyther' => array(
        'HP' => (159+193)/2,
        'Attack' => (128+143+177+194)/4,
        'Defense' => (99+110+144+158)/4,
        'Special Attack' => (73+82+117+128)/4,
        'Special Defense' => (99+110+144+158)/4,
        'Speed' => (123+137+172+189)/4
    ),
    'Tangela' => array(
        'HP' => (153+188)/2,
        'Attack' => (73+82+117+128)/4,
        'Defense' => (133+148+183+201)/4,
        'Special Attack' => (118+132+166+182)/4,
        'Special Defense' => (59+66+100+110)/4,
        'Speed' => (79+88+122+134)/4
    ),
    'Tentacruel' => array(
        'HP' => (170+204)/2,
        'Attack' => (89+99+133+146)/4,
        'Defense' => (83+93+128+140)/4,
        'Special Attack' => (99+110+144+158)/4,
        'Special Defense' => (138+154+188+206)/4,
        'Speed' => (118+132+166+182)/4
    ),
    'Victreebel' => array(
        'HP' => (170+204)/2,
        'Attack' => (123+137+172+189)/4,
        'Defense' => (83+93+128+140)/4,
        'Special Attack' => (118+132+166+182)/4,
        'Special Defense' => (79+88+122+134)/4,
        'Speed' => (89+99+133+146)/4
    ),
    'Vileplume' => array(
        'HP' => (164+199)/2,
        'Attack' => (99+110+144+158)/4,
        'Defense' => (103+115+150+165)/4,
        'Special Attack' => (118+132+166+182)/4,
        'Special Defense' => (108+121+155+170)/4,
        'Speed' => (69+77+111+122)/4
    ),


);
var_dump($new_stats);
echo json_encode($new_stats);




?>

<script>
    var mr_mime = {"name":"Mr. Mime","types":["psychic"],"attacks":{"Psychic":{"name":"Psychic","type":"psychic","power":90,"accuracy":100,"description":"A strong telekinetic attack. It may also lower the foe\u2019s SP. DEF stat.","STAB":true},"Safeguard":{"name":"Safeguard","type":"normal","power":0,"accuracy":100,"description":"It protects the user\u2019s party from all status problems for five turns.","STAB":false},"Thunderbolt":{"name":"Thunderbolt","type":"electric","power":90,"accuracy":100,"description":"A strong electrical attack that may also leave the foe paralyzed.","STAB":false},"Shadow Ball":{"name":"Shadow Ball","type":"Ghost","power":80,"accuracy":100,"description":"A shadowy blob is hurled at the foe. May also lower the foe\u2019s SP. DEF.","STAB":false}},"HP":138,"Attack":55,"Defense":102,"Special Attack":127,"Special Defense":149,"Speed":166};
    var nidoking = {"name":"Nidoking","types":["poison","ground"],"attacks":{"Surf":{"name":"Surf","type":"water","power":95,"accuracy":100,"description":"A big wave crashes down on the foe. Can also be used for crossing water.","STAB":false},"Sludge Bomb":{"name":"Sludge Bomb","type":"poison","power":90,"accuracy":100,"description":"Filthy sludge is hurled at the foe. It may poison the target.","STAB":true},"Megahorn":{"name":"Megahorn","type":"bug","power":120,"accuracy":85,"description":"A brutal ramming attack delivered with a tough and impressive horn.","STAB":false},"Earthquake":{"name":"Earthquake","type":"ground","power":100,"accuracy":100,"description":"An earthquake that strikes all POK\u00e9MON in battle excluding the user.","STAB":true}},"HP":158,"Attack":147,"Defense":99,"Special Attack":101,"Special Defense":103,"Speed":129};

    function damage_calculation(my_poke, opp_poke, attack_name) {
        console.log(my_poke["name"]);
        var power = my_poke['attacks']['Psychic']['power'];
        console.log(power);
    }

    damage_calculation(mr_mime, nidoking, 'Psychic');


</script>




