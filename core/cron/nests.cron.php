<?php
	
// -----------------------------------------------------------------------------------------------------------
// Nests datas 
// 
// 
// -----------------------------------------------------------------------------------------------------------


$pokemon_exclude_sql = "";
if (!empty($config->system->nest_exclude_pokemon)) {
	$pokemon_exclude_sql = "AND p.pokemon_id NOT IN (".implode(",", $config->system->nest_exclude_pokemon).")";
}

$req = "SELECT p.pokemon_id, max(p.lat) AS latitude, max(p.lon) AS longitude, count(p.pokemon_id) AS total_pokemon, from_unixtime(s.updated) AS latest_seen
        FROM pokemon p
        INNER JOIN spawnpoint s ON (p.spawn_id = s.id)
        WHERE from_unixtime(p.expire_timestamp) > UTC_TIMESTAMP() - INTERVAL 24 HOUR
        ".$pokemon_exclude_sql."
        GROUP BY p.spawn_id, p.pokemon_id
        HAVING count(p.pokemon_id) >= 6
        ORDER BY p.pokemon_id";
$result = $mysqli->query($req);

while ($data = $result->fetch_object()) {
	$nests['pid'] = $data->pokemon_id;
	$nests['c'] = $data->total_pokemon;
	$nests['lat'] = $data->latitude;
	$nests['lng'] = $data->longitude;
	$starttime = $data->latest_seen - 2 * 900;
	if ($starttime < 0) {
		$starttime = 3600 + $starttime;
	}
	$nests['st'] = sprintf('%02d', floor($starttime / 60));
	$nests['et'] = sprintf('%02d', floor($data->latest_seen / 60));

	// Add the data to array
	$nestsdatas[] = $nests;
}

// Write file
file_put_contents($nests_file, json_encode($nestsdatas));
