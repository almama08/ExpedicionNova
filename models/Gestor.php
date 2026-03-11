<?php
class Gestor {
    public function __construct() {
        if (!isset($_SESSION['hallazgosNova'])) {
            $_SESSION['hallazgosNova'] = [];
        }
    }

    public function guardar($entidad) {
        $_SESSION['hallazgosNova'][] = $entidad;
    }

    public function obtenerTodos() {
        return $_SESSION['hallazgosNova'];
    }

    public function eliminar($id) {
        foreach ($_SESSION['hallazgosNova'] as $indice => $entidad) {
            if ($entidad->getId() == $id) {
                unset($_SESSION['hallazgosNova'][$indice]);
                $_SESSION['hallazgosNova'] = array_values($_SESSION['hallazgosNova']);
            }
        }
    }
}
?>