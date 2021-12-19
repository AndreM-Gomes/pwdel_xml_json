<?php

$pokemon_json = file_get_contents("https://pokeapi.co/api/v2/pokemon/ditto");
$pokemon_data = json_decode($pokemon_json);
echo "<h1>Habilidades Pokémon Ditto</h1>";
echo "<ul>";
foreach($pokemon_data->{'abilities'} as $hability){
    echo "<li>" .$hability->{'ability'}->{'name'}."</li>";
}
echo "</ul>";