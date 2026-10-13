<?php
function getDiscs()
{
    $discs_json = file_get_contents("./discs.json");

    return json_decode($discs_json, true);
}

?>