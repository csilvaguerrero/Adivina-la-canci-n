<?php

    class cancionModelo extends Modelo{
        public function __construct(){
            parent::__construct();
        }

        public function consultarCanciones(){
            $sql = "SELECT AC_respuestas.titulo, AC_categorias.nombre FROM AC_categorias INNER JOIN AC_canciones ON AC_canciones.id_categoria = AC_categorias.id
                    INNER JOIN AC_respuestas ON AC_respuestas.num_respuesta = AC_canciones.respuesta_correcta AND AC_canciones.id = AC_respuestas.id_cancion;";
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }
    }
?>