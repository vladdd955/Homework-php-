<?php

$item = [2, 6, 7, 8, 9, 10, 12];

for($i = 0; $i < count($item); $i++) {
    if($item[$i] % 3 === 0) {
        echo $item[$i];
    }

}