<?php
// creo una API con i dati del file json
header('Content-Type: applicatoin/json');
echo file_get_contents('discs.json');
