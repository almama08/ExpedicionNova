<?php
class EntidadEstelar {
    
    protected $id;
    protected $nombre;
    protected $planetaOrigen;
    protected $nivelEstabilidad;

    public function __construct($id, $nombre, $planetaOrigen, $nivelEstabilidad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->planetaOrigen = $planetaOrigen;
        $this->nivelEstabilidad = $nivelEstabilidad;
    }

    public function getId(){
        return $this->id;
        }
    public function getNombre(){
        return $this->nombre;
        }
    public function getPlanetaOrigen(){
        return $this->planetaOrigen;
        }
    public function getNivelEstabilidad(){
        return $this->nivelEstabilidad;
        }
 
    public function reaccionar() {
        return "La entidad emite una señal desconocida.";
    }
}