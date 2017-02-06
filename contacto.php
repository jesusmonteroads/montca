<?php 

  //require("conexion.php");

  if(isset($_POST['boton'])){
        if($_POST['nombre'] == ''){
            $errors[1] = '<span class="error">Ingrese su nombre</span>';
        }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = '<span class="error">Ingrese un email correcto</span>';
        }else if($_POST['asunto'] == ''){
            $errors[3] = '<span class="error">Ingrese un asunto</span>';
        }else if($_POST['mensaje'] == ''){
            $errors[4] = '<span class="error">Ingrese un mensaje</span>';
        }else{
            $dest = "handresvegarodriguez@gmail.com"; //Email de destino
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $asunto1 = "Mensaje de formulario";
            $asunto = $_POST['asunto']; //Asunto
            $mensaje = $_POST['mensaje'];
            $cuerpo = "Nombre: $nombre <br/> Email: $email <br/> Telefono: $asunto <br/> Mensaje: $mensaje"; //Cuerpo del mensaje

            //Cabeceras del correo
            $headers = "From: $nombre <$email>\r\n"; //Quien envia?
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //

            //Cabeceras del correo
            /*
            $headers2 = "From: Jurgen Klaric <handresvegarodriguez@gmail.com>\r\n"; //Quien envia?
            $headers2 .= "X-Mailer: PHP5\n";
            $headers2 .= 'MIME-Version: 1.0' . "\n";
            $headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
            */
 
            if(mail($dest,$asunto1,$cuerpo,$headers)){

            /*
              foreach($_POST AS $key => $value) { 
                $_POST[$key] = mysql_real_escape_string($value); 
              } 

              $sql = "INSERT INTO `cf` (`nombre`,`email`,`asunto`,`mensaje`) VALUES ('{$_POST['nombre']}','{$_POST['email']}','{$_POST['asunto']}','{$_POST['mensaje']}')";
                mysql_query($sql) or die(mysql_error());  

            */
                $result = '<div class="result_ok">Tu información ha sido enviada correctamente</div>';
                // si el envio fue exitoso reseteamos lo que el usuario escribio:
                $_POST['nombre'] = '';
                $_POST['email'] = '';
                $_POST['asunto'] = '';
                $_POST['mensaje'] = '';

              //$envia = mail($email,"Su mensaje fue recibido!",$template_1,$headers2); 
              
            }else{
                $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
            }
        }
    }
 ?>



<?php include("header.php"); ?>


        <div class="blocks-container">

            <!-- BLOCK "TYPE 14" -->
            <!-- <div class="block type-14">
                <img class="center-image" src="img/background-14.jpg" alt="" />
                <div class="container">

                    <div class="row wow fadeInDown">
                        <div class="block-header col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
                            <h2 class="title">The NRGHost Support</h2>
                            <div class="text">Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla nisl blandit</div>
                        </div>
                    </div>

                    <div class="block-button-container wow fadeInUp">
                        <div class="button-description">Hot Number <a href="tel:+485558453264">+48 555 8453 264</a> <br/> or</div>
                        <a class="button" href="contact.html">have a question? form for suggestions and comments</a>
                    </div>

                </div>
            </div>
 -->
            <!-- BLOCK "TYPE 3" -->


            <!-- BLOCK "TYPE 18" -->
            <div class="block">
                <div class="container">
                    <div class="row">

                        <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                            <div class="form-block">
                                <!-- <img class="img-circle form-icon" src="img/icon-123.png" alt="" /> -->

                                <div class="form-wrapper">
                                    <div class="row">
                                        <div class="block-header col-md-8 col-md-offset-2">
                                            <h2 class="title">Cotiza tu proyecto ahora!</h2>
                                            <div class="text"><b>E-mail: </b><a href="mailto:contacto@montca.co"></a>contacto@montca.co | <b>WhatsApp:</b> 301 6861 707</div>
                                        </div>
                                    </div>
                                    <form method="POST" action="">
                                        <div class="field-entry">
                                            <label for="field-1">Nombre *</label>
                                            <input class="nombre" name="nombre" type="text" required value="<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; } ?>" id="field-1" />

                                            <?php if(isset($errors)){ echo $errors[1]; } ?>
                                        </div>

                                        <div class="field-entry">
                                            <label for="field-2">Email *</label>
                                            <input type="email" class="email" name="email" required value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>" id="field-2" />
                                            <?php if(isset($errors)){ echo $errors[2]; } ?>
                                        </div>

                                        <div class="field-entry">
                                            <label for="field-4">Telefono *</label>
                                            <input type="text" class="asunto" name="asunto" required value="<?php if(isset($_POST['asunto'])){ echo $_POST['asunto']; } ?>" id="field-4" />
                                            <?php if(isset($errors)){ echo $errors[3]; } ?>
                                        </div>

                                        <div class="field-entry">
                                            <label for="field-3">Mensaje</label>
                                            <textarea class="mensaje" name="mensaje" value="<?php if(isset($_POST['mensaje'])){ echo $_POST['mensaje']; } ?>" id="field-3"><?php if(isset($errors)){ echo $errors[4]; } ?></textarea>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <div class="button">Enviar<input class="boton" name="boton" type="submit" value="" /></div>
                                            </div>

                                        </div>
                                        <?php if(isset($result)) { echo $result; } ?>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            
            <!-- BLOCK "TYPE 6" -->
           <!--  <div>
                <div id="map-canvas" data-lat="43.653226" data-lng="-79.383184" data-zoom="3">

                </div>
                <div class="addresses-block">
                    <a data-lat="43.653226" data-lng="-107.383184" data-string="1. Here is some address or email or phone or something else..."></a>
                    <a data-lat="57.653226" data-lng="-77.383184" data-string="2. Here is some address or email or phone or something else..."></a>
                </div>
            </div> -->

            <!-- BLOCK "TYPE 3" -->
           <!--  <div class="block type-3">
                <div class="container">

                    <div class="row wow fadeInDown">
                        <div class="block-header col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
                            <h2 class="title">Support Center</h2>
                            <div class="text">Integer faucibus, dui quis pellentesque vestibulum, nulla ante aliquet turpis, in consectetur ex dui vitae erat in eleifend eros</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="icon-entry col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                            <img class="img-circle" src="img/icon-113.png" alt="">
                            <div class="content">
                                <h3 class="title">Email Support</h3>
                                <div class="text">Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla nisl blandit.</div>
                            </div>
                            <a class="button" href="#">send email</a>
                        </div>
                        <div class="icon-entry col-sm-6 col-md-3 wow fadeInLeft">
                            <img class="img-circle" src="img/icon-114.png" alt="">
                            <div class="content">
                                <h3 class="title">Live Chat</h3>
                                <div class="text">Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla nisl blandit.</div>
                            </div>
                            <a class="button" href="#">start chat</a>
                        </div>

                        <div class="clearfix visible-sm"></div>

                        <div class="icon-entry col-sm-6 col-md-3 wow fadeInRight">
                            <img class="img-circle" src="img/icon-115.png" alt="">
                            <div class="content">
                                <h3 class="title">Call Center</h3>
                                <div class="text">Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla nisl blandit.</div>
                            </div>
                            <a class="button" href="#">call center</a>
                        </div>
                        <div class="icon-entry col-sm-6 col-md-3 wow fadeInRight" data-wow-delay="0.3s">
                            <img class="img-circle" src="img/icon-116.png" alt="">
                            <div class="content">
                                <h3 class="title">Support Ticket</h3>
                                <div class="text">Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla nisl blandit.</div>
                            </div>
                            <a class="button" href="#">submit a ticket</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div> -->

    <!-- FOOTER -->

<?php include("footer.php"); ?>
