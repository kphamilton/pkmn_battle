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
            ),
        'Safeguard' =>
            array(
                'name' => 'Safeguard',
                'type' => 'normal',
                'power' => 0,
                'accuracy' => 100,
                'description' => 'It protects the user’s party from all status problems for five turns.',
                'STAB' => FALSE,
            ),
        "Thunderbolt" =>
            array(
                'name' => 'Thunderbolt',
                'type' => 'electric',
                'power' => 90,
                'accuracy' => 100,
                'description' => 'A strong electrical attack that may also leave the foe paralyzed.',
                'STAB' => FALSE,
            ),
        "Shadow Ball" =>
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
        "Psychic" =>
            array(
                'name' => 'Psychic',
                'type' => 'psychic',
                'power' => 90,
                'accuracy' => 100,
                'description' => 'A strong telekinetic attack. It may also lower the foe’s SP. DEF stat.',
                'STAB' => FALSE,
            ),
        "Thunderwave" =>
            array(
                'name' => 'Thunderwave',
                'type' => 'electric',
                'power' => 0,
                'accuracy' => 100,
                'description' => 'A weak electric shock that is sure to cause paralysis if it hits.',
                'STAB' => TRUE,
            ),
        "Thunderbolt" =>
            array(
                'name' => 'Thunderbolt',
                'type' => 'electric',
                'power' => 90,
                'accuracy' => 100,
                'description' => 'A strong electrical attack that may also leave the foe paralyzed.',
                'STAB' => TRUE,
            ),
        "Hidden Power" =>
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
        "Hyper Beam" =>
            array(
                'name' => 'Hyper Beam',
                'type' => 'normal',
                'power' => 150,
                'accuracy' => 90,
                'description' => 'A severely damaging attack that makes the user rest on the next turn.',
                'STAB' => TRUE,
            ),
        "Body Slam" =>
            array(
                'name' => 'Body Slam',
                'type' => 'normal',
                'power' => 85,
                'accuracy' => 100,
                'description' => 'The user drops its full body on the foe. It may leave the foe paralyzed.',
                'STAB' => TRUE,
            ),
        "Brick Break" =>
            array(
                'name' => 'Brick Break',
                'type' => 'fighting',
                'power' => 75,
                'accuracy' => 100,
                'description' => 'An attack that also breaks any barrier like LIGHT SCREEN and REFLECT.',
                'STAB' => FALSE,
            ),
        "Return" =>
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
        "Surf" =>
            array(
                'name' => 'Surf',
                'type' => 'water',
                'power' => 95,
                'accuracy' => 100,
                'description' => 'A big wave crashes down on the foe. Can also be used for crossing water.',
                'STAB' => FALSE,
            ),
        "Sludge Bomb" =>
            array(
                'name' => 'Sludge Bomb',
                'type' => 'poison',
                'power' => 90,
                'accuracy' => 100,
                'description' => 'Filthy sludge is hurled at the foe. It may poison the target.',
                'STAB' => TRUE,
            ),
        "Megahorn" =>
            array(
                'name' => 'Megahorn',
                'type' => 'bug',
                'power' => 120,
                'accuracy' => 85,
                'description' => 'A brutal ramming attack delivered with a tough and impressive horn.',
                'STAB' => FALSE,
            ),
        "Earthquake" =>
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
        "Brick Break" =>
            array(
                'name' => 'Brick Break',
                'type' => 'fighting',
                'power' => 75,
                'accuracy' => 100,
                'description' => 'An attack that also breaks any barrier like LIGHT SCREEN and REFLECT.',
                'STAB' => TRUE,
            ),
        "Rain Dance" =>
            array(
                'name' => 'Rain Dance',
                'type' => 'water',
                'power' => 0,
                'accuracy' => 100,
                'description' => 'A heavy rain falls for five turns, powering up WATER- type moves.',
                'STAB' => TRUE,
            ),
        "Toxic" =>
            array(
                'name' => 'Toxic',
                'type' => 'poison',
                'power' => 0,
                'accuracy' => 90,
                'description' => 'A move that badly poisons the foe. Its poison damage worsens every turn.',
                'STAB' => FALSE,
            ),
        "Ice Beam" =>
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
        "Surf" =>
            array(
                'name' => 'Surf',
                'type' => 'water',
                'power' => 95,
                'accuracy' => 100,
                'description' => 'A big wave crashes down on the foe. Can also be used for crossing water.',
                'STAB' => TRUE,
            ),
        "Hidden Power" =>
            array(
                'name' => 'Hidden Power',
                'type' => 'ice',
                'power' => 70,
                'accuracy' => 100,
                'description' => 'An attack that varies in type and intensity depending on the user.',
                'STAB' => FALSE,
            ),
        "Focus Punch" =>
            array(
                'name' => 'Focus Punch',
                'type' => 'fighting',
                'power' => 150,
                'accuracy' => 100,
                'description' => 'An attack that is executed last. The user flinches if hit beforehand.',
                'STAB' => TRUE,
            ),
        "Substitute" =>
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




