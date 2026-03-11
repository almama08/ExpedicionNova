<?php
class Controller {
    private $gestor;

    public function __construct() {
        $this->gestor = new Gestor();
    }

    public function listar() {
        $porPagina = 5;
        $paginaActual = isset($_GET['p']) ? (int)$_GET['p'] : 1;
        $todos = $this->gestor->obtenerTodos();
        $inicio = ($paginaActual - 1) * $porPagina;
        $hallazgosPaginados = array_slice($todos, $inicio, $porPagina);
        $totalPaginas = ceil(count($todos) / $porPagina);
        require_once 'views/lista.php';
    }

    public function guardarVida() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $planeta = $_POST['planeta'];
        $estabilidad = $_POST['estabilidad'];
        $dieta = $_POST['dieta'];
        $vida = new FormaDeVida($id, $nombre, $planeta, $estabilidad, $dieta);
        $this->gestor->guardar($vida);
        header("Location: index.php?action=listar");
    }


    public function guardarMineral() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $planeta = $_POST['planeta'];
        $estabilidad = $_POST['estabilidad'];
        $dureza = $_POST['dureza'];
        $mineral = new MineralRaro($id, $nombre, $planeta, $estabilidad, $dureza);
        $this->gestor->guardar($mineral);
        header("Location: index.php?action=listar");
    }

    public function guardarArtefacto() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $planeta = $_POST['planeta'];
        $estabilidad = $_POST['estabilidad'];
        $antiguedad = $_POST['antiguedad'];
        $artefacto = new ArtefactoAntiguo($id, $nombre, $planeta, $estabilidad, $antiguedad);
        $this->gestor->guardar($artefacto);
        header("Location: index.php?action=listar");
    }

    public function eliminar() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->gestor->eliminar($id);
        }
        header("Location: index.php?action=listar");
    }

    public function mostrarFormulario(){
        require_once 'views/crear.php';
    }
}
?>