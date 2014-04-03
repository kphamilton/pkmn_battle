var my_squad = {"Mr. Mime":{"name":"Mr. Mime","types":["psychic"],"attacks":{"Psychic":{"name":"Psychic","type":"psychic","power":90,"accuracy":100,"description":"A strong telekinetic attack. It may also lower the foe\u2019s SP. DEF stat.","STAB":true},"Safeguard":{"name":"Safeguard","type":"normal","power":0,"accuracy":100,"description":"It protects the user\u2019s party from all status problems for five turns.","STAB":false},"Thunderbolt":{"name":"Thunderbolt","type":"electric","power":90,"accuracy":100,"description":"A strong electrical attack that may also leave the foe paralyzed.","STAB":false},"Shadow Ball":{"name":"Shadow Ball","type":"Ghost","power":80,"accuracy":100,"description":"A shadowy blob is hurled at the foe. May also lower the foe\u2019s SP. DEF.","STAB":false}},"HP":138,"Attack":55,"Defense":102,"Special Attack":127,"Special Defense":149,"Speed":166},"Electabuzz":{"name":"Electabuzz","types":["electric"],"attacks":{"Psychic":{"name":"Psychic","type":"psychic","power":90,"accuracy":100,"description":"A strong telekinetic attack. It may also lower the foe\u2019s SP. DEF stat.","STAB":false},"Thunderwave":{"name":"Thunderwave","type":"electric","power":0,"accuracy":100,"description":"A weak electric shock that is sure to cause paralysis if it hits.","STAB":true},"Thunderbolt":{"name":"Thunderbolt","type":"electric","power":90,"accuracy":100,"description":"A strong electrical attack that may also leave the foe paralyzed.","STAB":true},"Hidden Power":{"name":"Hidden Power","type":"flying","power":60,"accuracy":100,"description":"An attack that varies in type and intensity depending on the user.","STAB":false}},"HP":140,"Attack":115,"Defense":94,"Special Attack":158,"Special Defense":103,"Speed":135},"Kangaskhan":{"name":"Kangaskhan","types":["normal"],"attacks":{"Hyper Beam":{"name":"Hyper Beam","type":"normal","power":150,"accuracy":90,"description":"A severely damaging attack that makes the user rest on the next turn.","STAB":true},"Body Slam":{"name":"Body Slam","type":"normal","power":85,"accuracy":100,"description":"The user drops its full body on the foe. It may leave the foe paralyzed.","STAB":true},"Brick Break":{"name":"Brick Break","type":"fighting","power":75,"accuracy":100,"description":"An attack that also breaks any barrier like LIGHT SCREEN and REFLECT.","STAB":false},"Return":{"name":"Return","type":"normal","power":102,"accuracy":100,"description":"This attack move grows more powerful the more the user likes its TRAINER.","STAB":true}},"HP":220,"Attack":151,"Defense":99,"Special Attack":63,"Special Defense":102,"Speed":121},"Omastar":{"name":"Omastar","types":["water","rock"],"attacks":{"Brick Break":{"name":"Brick Break","type":"fighting","power":75,"accuracy":100,"description":"An attack that also breaks any barrier like LIGHT SCREEN and REFLECT.","STAB":true},"Rain Dance":{"name":"Rain Dance","type":"water","power":0,"accuracy":100,"description":"A heavy rain falls for five turns, powering up WATER- type moves.","STAB":true},"Toxic":{"name":"Toxic","type":"poison","power":0,"accuracy":90,"description":"A move that badly poisons the foe. Its poison damage worsens every turn.","STAB":false},"Ice Beam":{"name":"Ice Beam","type":"ice","power":90,"accuracy":100,"description":"The foe is struck with an icy beam. It may freeze the foe solid.","STAB":false}},"HP":154,"Attack":74,"Defense":170,"Special Attack":178,"Special Defense":73,"Speed":106},"Nidoking":{"name":"Nidoking","types":["poison","ground"],"attacks":{"Surf":{"name":"Surf","type":"water","power":95,"accuracy":100,"description":"A big wave crashes down on the foe. Can also be used for crossing water.","STAB":false},"Sludge Bomb":{"name":"Sludge Bomb","type":"poison","power":90,"accuracy":100,"description":"Filthy sludge is hurled at the foe. It may poison the target.","STAB":true},"Megahorn":{"name":"Megahorn","type":"bug","power":120,"accuracy":85,"description":"A brutal ramming attack delivered with a tough and impressive horn.","STAB":false},"Earthquake":{"name":"Earthquake","type":"ground","power":100,"accuracy":100,"description":"An earthquake that strikes all POK\u00e9MON in battle excluding the user.","STAB":true}},"HP":158,"Attack":147,"Defense":99,"Special Attack":101,"Special Defense":103,"Speed":129},"Hitmonlee":{"name":"Hitmonlee","types":["fighting"],"attacks":{"Surf":{"name":"Surf","type":"water","power":95,"accuracy":100,"description":"A big wave crashes down on the foe. Can also be used for crossing water.","STAB":true},"Hidden Power":{"name":"Hidden Power","type":"ice","power":70,"accuracy":100,"description":"An attack that varies in type and intensity depending on the user.","STAB":false},"Focus Punch":{"name":"Focus Punch","type":"fighting","power":150,"accuracy":100,"description":"An attack that is executed last. The user flinches if hit beforehand.","STAB":true},"Substitute":{"name":"Substitute","type":"normal","power":0,"accuracy":100,"description":"The user creates a decoy using one- quarter of its full HP.","STAB":false}},"HP":137,"Attack":188,"Defense":75,"Special Attack":51,"Special Defense":136,"Speed":151}};
var type_chart = {"normal":{"rock":0.5,"ghost":0,"steel":0.5},"fire":{"fire":0.5,"water":0.5,"grass":2,"ice":2,"bug":2,"rock":0.5,"dragon":0.5,"steel":2},"water":{"fire":2,"water":0.5,"grass":0.5,"ground":2,"rock":2,"dragon":0.5},"electric":{"water":2,"electric":0.5,"grass":0.5,"ground":0,"flying":2,"dragon":0.5},"grass":{"fire":0.5,"water":2,"grass":0.5,"poison":0.5,"ground":2,"flying":0.5,"bug":0.5,"rock":2,"dragon":0.5,"steel":0.5},"ice":{"fire":0.5,"water":0.5,"grass":2,"ice":0.5,"ground":2,"flying":2,"dragon":2,"steel":0.5},"fighting":{"normal":2,"ice":2,"poison":0.5,"flying":0.5,"psychic":0.5,"bug":0.5,"rock":2,"ghost":0,"dark":2,"steel":2,"fai":0.5},"poison":{"grass":2,"poison":0.5,"ground":0.5,"rock":0.5,"ghost":0.5,"steel":0,"fai":2},"ground":{"fire":2,"electric":2,"grass":0.5,"poison":2,"flying":0,"bug":0.5,"rock":2,"steel":2},"flying":{"electric":0.5,"grass":2,"fighting":2,"bug":2,"rock":0.5,"steel":0.5},"psychic":{"fighting":2,"poison":2,"psychic":0.5,"dark":0,"steel":0.5},"bug":{"fire":0.5,"grass":2,"fighting":0.5,"poison":0.5,"flying":0.5,"psychic":2,"ghost":0.5,"dark":2,"steel":0.5,"fai":0.5},"rock":{"fire":2,"ice":2,"fighting":0.5,"ground":0.5,"flying":2,"bug":2,"steel":0.5},"ghost":{"normal":0,"psychic":2,"ghost":2,"dark":0.5},"dragon":{"dragon":2,"steel":0.5,"fai":0},"dark":{"fighting":0.5,"psychic":2,"ghost":2,"dark":0.5,"fai":0.5},"steel":{"fire":0.5,"water":0.5,"electric":0.5,"ice":2,"rock":2,"steel":0.5,"fai":2}};
var attack_lookup = {"normal":"Attack","fighting":"Attack","poison":"Attack","ground":"Attack","flying":"Attack","bug":"Attack","rock":"Attack","ghost":"Attack","steel":"Attack","fire":"Special Attack","water":"Special Attack","electric":"Special Attack","grass":"Special Attack","ice":"Special Attack","psychic":"Special Attack","dragon":"Special Attack","dark":"Special Attack"};
var level = 55;
function damage_calculation(my_poke, opp_poke, attack_name) {
    console.log(my_poke["name"]);
    var power = my_poke['attacks'][attack_name]['power'];
    var attack_stat = my_poke[attack_lookup[my_poke['attacks'][attack_name]['type']]];
    var defense_stat = "";
    if(attack_lookup[my_poke['attacks'][attack_name]['type']] == "Attack")
        defense_stat = "Defense";
    else if(attack_lookup[my_poke['attacks'][attack_name]['type']] == "Special Attack")
        defense_stat = "Special Defense";
    defense_stat = opp_poke[defense_stat];
    var stab = 1;
    if(my_poke[attack_lookup[my_poke['attacks'][attack_name]['STAB']]] == true)
        stab = 1.5;

    var weakness_resistance = get_weakness_resistance(my_poke['attacks'][attack_name]['type'], opp_poke['types']);
    console.log(weakness_resistance);


    console.log(level, attack_stat, power, defense_stat, stab, weakness_resistance);
    var high_damage_formula =  ((((2 * level / 5 + 2) * attack_stat * power / defense_stat) / 50) + 2) * stab * weakness_resistance * 100 / 100;
    var low =  ((((2 * level / 5 + 2) * attack_stat * power / defense_stat) / 50) + 2) * stab * weakness_resistance * 85 / 100;
    console.log(my_poke['name']+"'s "+attack_name+" will do a low damage of "+low+" and a high damage of "+high_damage_formula+" to Nidoking");

    }

function get_weakness_resistance(attack_type, opp_types) {
    var multiplier = 1;
    opp_types.forEach(function(type) {
        if(type_chart[attack_type][type])
            multiplier = multiplier * type_chart[attack_type][type]
    });
    return multiplier;
}


damage_calculation(my_squad['Mr. Mime'], my_squad['Nidoking'], 'Psychic');
55 127 90 103 1 2