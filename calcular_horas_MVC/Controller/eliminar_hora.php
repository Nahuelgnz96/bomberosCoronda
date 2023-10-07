<?php
include "../Model/conexion_bd.php";
if (!empty($_GET["id"])) {
        $id=$_GET["id"];
        $sql=$conexion->query(" delete from bombero_hora where id_hora=$id ");
        if ($sql==1) {
            
            header("location: ../Views/index.php");
            echo '<div class="alert alert-success">Hora elimanada correctamente</div>';
        }else {
            echo '<div class="alert alert-warning">Error al eliminar hora del bombero</div>';
        }
    }


?>