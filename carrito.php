<?php

$mensaje="";
 if(isset($_POST['btnAccion'])){
     switch($_POST['btnAccion']){
         case 'Agregar':
         
         if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY ))){
             $ID= openssl_decrypt($_POST['id'],COD,KEY );
             $mensaje.="Ok ID correcto".$ID."<br/>";
         }else{
             $mensaje.= "Upps... ID icorrecto".$ID."<br/>";
         }
        
         if(is_string( openssl_decrypt($_POST['nombre'],COD,KEY ))){
             $NOMBRE= openssl_decrypt($_POST['nombre'],COD,KEY );
             $mensaje.="Nombre correcto".$NOMBRE."<br/>";
         }else{
             $mensaje.="Sucedio un problema con el precio"."<br/>";break;}
        
        if(is_numeric( openssl_decrypt($_POST['precio'],COD,KEY ))){
             $PRECIO= openssl_decrypt($_POST['precio'],COD,KEY );
             $mensaje.="Precio correcto".$PRECIO."<br/>";
         }else{
             $mensaje.= "Sucedio un problema con el precio"."<br/>";break;}
        
        if(is_string( openssl_decrypt($_POST['tipo_producto'],COD,KEY ))){
             $TIPO_PRODUCTO= openssl_decrypt($_POST['tipo_producto'],COD,KEY );
             $mensaje.="Nombre correcto".$TIPO_PRODUCTO."<br/>";
         }else{
             $mensaje.="Sucedio un problema con el producto"."<br/>";break;}
        
        if(is_string( openssl_decrypt($_POST['tipo_venta'],COD,KEY ))){
             $TIPO_VENTA= openssl_decrypt($_POST['tipo_venta'],COD,KEY );
             $mensaje.="Nombre correcto".$TIPO_VENTA."<br/>";
         }else{
             $mensaje.="Sucedio un problema con la categoria"."<br/>";break;}
         
         break;
     }
     }
?>