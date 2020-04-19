<?php

    $data = file_get_contents('https://api.covid19api.com/summary');
    $coronadatas = json_decode($data);

?>