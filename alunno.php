<?php
class Alunno
{
    // Properties
    public $nominativo;
    public $materie_insufficienti;
    public $esito;

    // Methods
    function __construct($nominativo, $materie_insufficienti, $esito)
    {
        $this->nominativo = $nominativo;
        $this->materie_insufficienti = $materie_insufficienti;
        $this->esito = $esito;
    }
    function set_nominativo($nominativo)
    {
        $this->nominativo = $nominativo;
    }
    function setmaterie_insufficienti($materie_insufficienti)
    {
        $this->materie_insufficienti = $materie_insufficienti;
    }
    function set_esito($esito)
    {
        $this->esito = $esito;
    }
    function get_nominativo()
    {
        return $this->nominativo;
    }
    function get_materie_insufficienti()
    {
        return $this->materie_insufficienti;
    }
    function get_esito()
    {
        return $this->esito;
    }
}
