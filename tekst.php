<?php
/**
 * Created by PhpStorm.
 * User: Reconion
 * Date: 25.01.2018
 * Time: 10:32
 */

class tekst
{ //klassi algus
    //klassi omadused - väljad -fields
    var $sone = ''; //teksti kirjeldavad sõnad

    /**
     * tekst constructor.
     * @param string $sone
     */
    public function __construct($sone)
    {
        $this->maaraTeks($sone);
    } //teksti kirjeldavad sõnad
    //klassi tegevused
    //meetodid
    //teksti määramine
    //maaraTekst
    function maaraTeks($sone){
        $this->sone = $sone;
    }
    //teksti väljastamine
    function prindiTekst(){
        echo $this->sone.'<br />';
    }

} //klassi lõpp