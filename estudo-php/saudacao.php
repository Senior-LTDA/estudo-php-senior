<?php

if ($argc !== 2) {
    echo "Use: php {$argv[0]} <nome>\n";
    exit(1);
}

echo "Olá, {$argv[1]}!\n";