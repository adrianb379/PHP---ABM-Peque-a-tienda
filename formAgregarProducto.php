<?php
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Formulario de alta de un producto</h1>

        <form action="agregarProducto.php" method="post">
            Nombre:
            <br>
            <input type="text" name="prdNombre" class="form-control" required>
            <br>
            Precio:
            <br>
            <input type="text" name="prdPrecio" class="form-control" required>
            <br>
            Marca:
            <br>
            <input type="text" name="idMarca" class="form-control" required>
            <br>
            Categoria:
            <br>
            <input type="text" name="idCategoria" class="form-control" required>
            <br>
            Presentacion:
            <br>
            <input type="text" name="prdPresentacion" class="form-control" required>
            <br>
            Imagen:
            <br>
            <input type="file" name="prdImagen" class="form-control" required>
            <br>
            <input type="submit" value="Agregar Marca" class="btn btn-secondary">
            <a href="adminProductos.php" class="btn btn-light">Volver a panel de marcas</a>

        </form>

    </main>

<?php  include 'includes/footer.php';  ?>