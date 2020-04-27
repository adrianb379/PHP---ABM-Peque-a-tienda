<?php

    class Producto
    {
        private $idProducto;
        private $prdNombre;
        private $prdPrecio;
        private $idMarca;
        private $idCategoria;
        private $prdPresentacion;
        private $prdImagen;

	public private get$IdProducto() {
		return this.$idProducto;
	}

	public void set$IdProducto(private $idProducto) {
		this.$idProducto = $idProducto;
	}

	public private get$PrdNombre() {
		return this.$prdNombre;
	}

	public void set$PrdNombre(private $prdNombre) {
		this.$prdNombre = $prdNombre;
	}

	public private get$PrdPrecio() {
		return this.$prdPrecio;
	}

	public void set$PrdPrecio(private $prdPrecio) {
		this.$prdPrecio = $prdPrecio;
	}

	public private get$IdMarca() {
		return this.$idMarca;
	}

	public void set$IdMarca(private $idMarca) {
		this.$idMarca = $idMarca;
	}

	public private get$IdCategoria() {
		return this.$idCategoria;
	}

	public void set$IdCategoria(private $idCategoria) {
		this.$idCategoria = $idCategoria;
	}

	public private get$PrdPresentacion() {
		return this.$prdPresentacion;
	}

	public void set$PrdPresentacion(private $prdPresentacion) {
		this.$prdPresentacion = $prdPresentacion;
	}

	public private get$PrdImagen() {
		return this.$prdImagen;
	}

	public void set$PrdImagen(private $prdImagen) {
		this.$prdImagen = $prdImagen;
	}



        public function listarProductos()
        {
            $link = Conexion::conectar();
            $sql = "SELECT idProducto, prdNombre, prdPrecio, idMarca, idCategoria, prdPresentacion, prdImagen
                        FROM productos";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }

        public function verMarcaPorID()
        {
            
        }

        public function agregarProducto()
        {
            
            $prdNombre = $_POST['prdNombre'];
            $prdPrecio = $_POST['prdPrecio'];
            $idMarca = $_POST['idMarca'];
            $idCategoria = $_POST['idCategoria'];
            $prdPresentacion = $_POST['prdPresentacion'];
            $prdImagen = $_POST['prdImagen'];

            $link = Conexion::conectar();
            $sql = "INSERT INTO productos
                        VALUES
                            ( default, :prdNombre,:prdPrecio,:idMarca,:idCategoria,:prdPresentacion,:prdImagen )";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':prdNombre', $prdNombre, PDO::PARAM_STR);
            $stmt->bindParam(':prdPrecio', $prdPrecio, PDO::PARAM_STR);
            $stmt->bindParam(':idMarca', $idMarca, PDO::PARAM_STR);
            $stmt->bindParam(':idCategoria', $idCategoria, PDO::PARAM_STR);
            $stmt->bindParam(':prdPresentacion', $prdPresentacion, PDO::PARAM_STR);
            $stmt->bindParam(':prdImagen', $prdImagen, PDO::PARAM_STR);
            if( $stmt->execute() ){
                $this->setIdMarca($link->lastInsertId());
                $this->setMkNombre($prdNombre);
                $this->setMkNombre($prdPrecio);
                $this->setMkNombre($idMarca);
                $this->setMkNombre($idCategoria);
                $this->setMkNombre($prdPresentacion);
                $this->setMkNombre($prdImagen);
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
        public function getIdProducto()
        {
            return $this->idProducto;
        }

        /**
         * @param mixed $idMarca
         */
        public function setIdMarca($idProducto)
        {
            $this->idProducto = $idProducto;
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