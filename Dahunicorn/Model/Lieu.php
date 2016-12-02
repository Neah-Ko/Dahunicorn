<?php

namespace Dahunicorn\Model;

/**
 * Représente un lieu ou site.
 */
class Lieu extends Model implements \JsonSerializable
{
    protected $idlieu;
    protected $lieu_nom;
    protected $lieu_description;
    protected $lieu_periode;
    protected $lieu_rue;
    protected $lieu_complement;
    protected $lieu_cp;
    protected $lieu_ville;
    protected $lieu_latitude;
    protected $lieu_longitude;

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}
