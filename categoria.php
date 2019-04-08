<?php 
include'global/config.php';
include'global/conexion.php';
include'carrito.php';
include'templates/cabecera.php';
?>


    <br/>
    <br/>

    <div class="container">
        <br>
            <div class="alert alert-success"> 
            <?php echo $mensaje;?>
                <a href="" class="badge badge-success">Ver Carrito</a>
            </div> 
        <div class="row">
                <?php
                $sentencia=$PDO->prepare("SELECT * FROM `productos`");
                $sentencia->execute();
                $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

                ?>
       <?php foreach ($listaProductos as $producto) { ?> 
        
                <div class="col-3">
                    <div class="card">
                        <img 
                        title=""                         
                        alt="" 
                        class="card-img-top" 
                        style="height:300px;"
                        src= "<?php echo $producto['imagen'] ?>" >
                        <div class="card-body">
                            <span><?php echo $producto['nombre'] ?></span>
                                <h5 class="card-text"><?php echo $producto['precio'] ?></h5>  
                                <p class="card-text">Descripción</p> 
                                
                                <form action="" method="post">
                                    <input type="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>">
                                    <input type="text" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>">
                                    <input type="text" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'],COD,KEY);?>">
                                    <input type="text" name="tipo_producto" id="tipo_producto" value="<?php echo openssl_encrypt($producto['tipo_producto'],COD,KEY);?>">
                                    <input type="text" name="tipo_venta" id="tipo_venta" value="<?php echo openssl_encrypt($producto['tipo_venta'],COD,KEY);?>">
                                    <input type="text" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
                                <button class="btn btn-primary" 
                                    name="btnAccion" 
                                    value="Agregar" 
                                    type="submit">
                                    Agregar al carrito
                                </button>
                                </form>
                        </div>
                    </div>
                
            </div>
        
        <?php } 
include'templates/pie.php'; 
        ?>    
