<!DOCTYPE html>
<html>
  <head>
    <title>prueba php html</title>
  </head>
  
  <body>
   
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}
.container-form{
    width: 100%;
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    grid-gap: 50px;
    margin-top: 90px;
}
.container-form h2{
    margin-bottom: 15px;
    font-size: 35px
}
.container-form p{
    font-size: 17px;
    line-height: 1.6;
    margin-bottom: 30px;
}
.container-form a{
    font-size: 17px;
    display: inline-block;
    text-decoration: none;
    width: 100%;
    margin-bottom: 15px;
    color: black;
    font-weight: 700;
}
.container-form a i{
    color: orange;
    margin-right: 10px;
}
.container-form form .campo, textarea{
    width: 100%;
    padding: 15px 10px;
    font-size: 16px;
    border: 1px solid #dbdbdb;
    margin-bottom: 20px;
    border-radius: 3px;
    outline: 0px;
}
.container-form form textarea{
    max-width: 530px;
    min-width: 530px;
    min-height: 140px;
    max-height: 150px;
}
.container-form .btn-enviar{
    padding: 15px;
    font-size: 16px;
    border: none;
    outline: 0px;
    background: orange;
    color: white;
    border-radius: 3px;
    cursor: pointer;
    transition: all 300ms ease;
}
.container-form .btn-enviar:hover{
    background: #e39403;
}


<?php 
                          $nombre = $_POST['nombre'];
                          $email = $_POST['email'];
                          $asunto = 'Formulario Rellenado';
                          $mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];


                          if(mail('zackuraharuno@.com', $asunto, $mensaje)){
                            echo "Correo enviado";
                          }
                         ?>
 









</body>
</html>