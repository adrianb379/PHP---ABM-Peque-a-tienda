<?php

    class Categoria
    {
        private $idCategoria;
        private $catNombre;

        public function listarCategorias()
        {
            $link = Conexion::conectar();
            $sql = "SELECT idCategoria, catNombre
                        FROM categorias";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }

        public function verMarcaPorID()
        {
            
        }

        public function agregarCategoria()
        {
            $catNombre = $_POST['catNombre'];
            $link = Conexion::conectar();
            $sql = "INSERT INTO categorias
                        VALUES
                            ( default, :catNombre )";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':catNombre', $catNombre, PDO::PARAM_STR);

            if( $stmt->execute() ){
                $this->setIdMarca($link->lastInsertId());
                $this->setMkNombre($catNombre);
                return true;
            }
            return false;



        }

        public function modificarMarca()
        {
            
        }

        public function eliminarMarca()
        {

        }
        
        
        /**
         * @return mixed
         */
        public function getIdMarca()
        {
            return $this->idMarca;
        }

        /**
         * @param mixed $idMarca
         */
        public function setIdMarca($idMarca)
        {
            $this->idMarca = $idMarca;
        }

        /**
         * @return mixed
         */
        public function getMkNombre()
        {
            return $this->mkNombre;
        }

        /**
         * @param mixed $mkNombre
         */
        public function setMkNombre($mkNombre)
        {
            $this->mkNombre = $mkNombre;
        }

        

    }