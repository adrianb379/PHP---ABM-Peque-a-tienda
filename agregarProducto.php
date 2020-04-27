<?php

    require 'clases/Conexion.php';
    require 'clases/Producto.php';
    $objProducto = new Producto;
    $chequeo = $objProducto->agregarProducto();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de un nuevo producto</h1>
<?php
        $mensaje = 'No se pudo agregar el producto';
        $class = 'danger';
        if( $chequeo ){
            $mensaje = 'Producto '.$objProducto->getMkNombre();
            $mensaje .= ' agregado correctamente.';
            $class = 'success';
        }
?>
        <div class="alert alert-<?= $class; ?>">
            <?= $mensaje; ?>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>