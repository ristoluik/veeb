<?php
/**
 * Created by PhpStorm.
 * User: Reconion
 * Date: 25.01.2018
 * Time: 10:47
 */
require_once 'tekst.php';

//loome teksti objekti
$minuTekst = new tekst();
//määrame konkreetse sisu
$minuTekst->maaraTeks( 'Tere maailm!');
// vaatame, mis on objekti sees
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
//prindime välja
$minuTekst->prindiTekst();