<?php

/**
 * Représente un lieu ou site.
 */
class Lieu extends Model
{
    protected $idlieu;
    protected $lieu_longitude;
    protected $lieu_latitude;
    protected $lieu_ville;
    protected $lieu_cp;
    protected $lieu_complement;
    protected $lieu_rue;
    protected $lieu_periode;
    protected $lieu_description;
    protected $lieu_nom;

    public function getAllJson() {
        $data = [];
        foreach ($this->findAll() as $lieu) {
            $data[] = get_object_vars($lieu);
        }
        return json_encode($data, true);
    }

}