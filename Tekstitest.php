<?php
/**
 * Created by PhpStorm.
 * User: Reconion
 * Date: 25.01.2018
 * Time: 10:47
 */
require_once 'tekst.php';

//loome teksti objekti
//määrame konkreetse sisu
$minuTekst = new tekst( 'Tere maailm!');
// vaatame, mis on objekti sees
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
//prindime välja
$minuTekst->prindiTekst();

// loome veel ühe objekti
// ja määrame sisu
$mustTekst = new tekst('Must tekst');
// vaatame, mis on objekti sees
echo '<pre>';
print_r($mustTekst);
echo '</pre>';
//prindime välja
$mustTekst->prindiTekst();

require_once 'vtekst.php';
//loome värvilise objekti
//ja määrame sisu
$punaneTekst = new vtekst( 'punane tekst', '#FF000');
echo '<pre>';
print_r($punaneTekst);
echo '</pre>';
$punaneTekst->prindiTekst();