<?php

class Vistas{

    function __construct() {}

    function __destruct() {}

    public function menu($token){

        $menu ='
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <form action="items.php" method="POST" >
                            <input type="hidden" name="token" value="'.$token.'">
                            <input role="button" type="submit" class="btn btn-primary" style="width:100%;" value="Consultar items">   
                        </form>  
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-sm-offset-6">
                        <form action="crearItem.php" method="POST" >
                        <input type="hidden" name="token" value="'.$token.'">
                            <input role="button" type="submit" class="btn btn-primary" style="width:100%;" value="Crear item">    
                        </form>                    
                    </div>
                </div>
            </div>
            ';
        return $menu;    
    }

    public function recuperarPassword($destinatarioMail){
        $recuperar ='<br>
            <h5>Usted ha recibido este mensaje porque hay una solicitud en curso para ingresar a su cuenta</h5>
            <br>
            <form action="http://starapps.org/release/cocabonga/APP/control/iframeRecuperarPassword.php" method="POST">
                <label>Nueva contrase&ntilde;a: &nbsp;</label>
                <input style="padding:10px;" type="password" name="nueva" required>
                <br><br>
                <label>Repetir contrase&ntilde;a: </label>
                <input style="padding:10px;" type="password" name="nueva2" required><br><br>
                <input type="hidden" name="destinatarioMail" value="'.$destinatarioMail.'">
                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input style="padding:10px;" type="submit" value="Enviar">
            </form>
            <iframe id="rc" src="http://starapps.org/release/cocabonga/APP/control/view/iframeRecuperarPassword.php"></iframe>
            <br><br><br>
            Cordialmente:<br><br>
            Equipo de soporte<br>
            support@cocabonga.io<br><br><br>

            <p><i>
            AVISO DE CONFIDENCIALIDAD: El anterior mensaje de correo electr&oacute;nico y sus anexos contienen informaci&oacute;n confidencial y por lo tanto, sujeta a reserva. Si usted no es destinatario del mismo por favor proceda a informar mediante correo electr&oacute;nico a la persona que lo envi&oacute; y a borrar de su sistema tanto el correo recibido como el enviado, sin conservar copias. En todo caso el uso, difusi&oacute;n, distribuci&oacute;n o reproducci&oacute;n del presente mensaje, sin autorizaci&oacute;n, es prohibido y puede configurar un delito.
            <br><br>
            CONFIDENTIALITY NOTICE: The preceding email and its attachments contain information that is confidential, and, in consequence, constitute non-public information. If you are not an intended recipient of this message, please notify the sender at his email address and delete all copies. Unauthorized use, dissemination, distribution or reproduction of this message is strictly prohibited and may be unlawful.
            </i>
            </p>
            ';
        return $recuperar;    
    }
}

?>


