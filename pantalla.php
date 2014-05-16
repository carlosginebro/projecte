
    <?php 
    
    session_start();
    
    function cone(){
            $conec = new mysqli("localhost", "root", "", "projecte");
            return $conec;
    }
    
    
    $conec= cone();
    $id = $_SESSION['id'];
    
    if(isset($_POST['idioma'])){
        $_SESSION['idioma'] = $_POST['idioma'];
        $idioma = $_SESSION['idioma'];
        
        $sql = "update idioma set idioma = '$idioma' where fk_usuari = $id";
        $conec->query($sql);
    }
    
    if(isset($_POST['sound'])){
        $_SESSION['sound'] = $_POST['sound'];
    }else{
		$_SESSION['sound'] = 1;
	}
    
    $sql = "select Vides, Comodins from usuari where id = $id";
    $consulta = $conec->query($sql);
    $reg = $consulta->fetch_array();
    $_SESSION['vides'] = $reg['Vides'];
    $_SESSION['comodins'] = $reg['Comodins'];
    
    $sql = "select estil from estils where fk_usuari = $id";
    
    $consulta = $conec->query($sql);
    $reg = $consulta->fetch_array();
    $estilo = $reg['estil'];
    
    $_SESSION['estil'] = $estilo;
    
    if(isset($_POST['interface'])){
        $estilo = $_POST['interface'];
        $sql = "update estils set estil = '$estilo' where fk_usuari = $id";
        $conec->query($sql);
        $_SESSION['estil'] = $estilo;
    }
    
    ?>
<html>
	<head>
        <meta charset="UTF-8" />
        <?php
            require_once 'head.php';
            require_once 'llibreria_'.$_SESSION["idioma"].'.php';
        ?>


    </head>
	
    <body id="container" class="<?php echo $estilo ?>" >
        <?php  
            include_once 'interface.php'; 
        ?>
          <div id="plantilla">
              <div id="creditos2" class="cHiden" style="color:black; margin-top:2%;">
                  <div id="margentop" style="width:829px; height:71px; border-top: solid 7px #aaa;  position:absolute; top:0px; z-index: 3; background-color: white; box-shadow:0px 21px 30px 0px rgba(255, 255, 255, 0.8); ">
                      
                  </div>
                  <div id="margenbot" style="width:829px; height:70px; border-bottom: solid 8px #aaa; position:absolute; top:599px; z-index: 3; background-color: white; box-shadow: 0px -21px 30px 0px rgba(255, 255, 255, 0.8);">
                      
                  </div>
                  
                  <div id="letras" style="font-size: 30px; line-height:35px; text-align: center; padding-left: 15px; padding-right: 15px; width:829px; height:590px; background-color: white;  z-index:1; position:absolute; top: 500px; left: 269px;">
                      <div style=" width:600px; height: 200px; background-image: url('css/galery/logo_index.png'); background-size: contain; background-repeat: no-repeat; margin-left: 280px;"></div>
                      Creadores de Crazy Univers:<br/><br/>
                      
                      Carlos Masegosa<br/>
                      <br/>
                      
                        &
                      <br/>
                    <br/>
                      Toni Llombart<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                      FIN
                  </div>
              </div>
              
              
          <div id="creditos">
            <div id="portada">
                
            </div>
            <!--<table cellspacing="0" id="marcadores" >-->
            <div id="marcadores" style="width:100%; height: 47%; margin-left: 5%;">
                <ul style="list-style: none outside none;">
                    <li id="bt1" class="bt1" name="jugar" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size"><?php echo $somi; ?></span>     
                        </div>
                    </li>
                    <li id="bt2" class="bt2" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta" style="width: 86%;">
                            <span class="size"><?php echo $credit; ?></span>
                        </div>
                    </li>
                </ul>
                <ul style="list-style: none outside none;">
                    <li id="bt3" class="bt3" data-toggle="modal" data-target="#myModal" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size"><?php  echo $conf; ?></span>
         

                        </div>
                    </li>
                    
                    <li id="bt4" class="bt4" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta">
                            <span class="size"><?php  echo $sortir; ?></span>
                         
                        </div>
                    </li>
                 
                </ul>
            <!--</table>-->
            </div>
            <div id="vidas">
                <div id="logo_icons_<?php echo $_SESSION['idioma'];?>"></div>
                <div id="vidas_icons" class="icono_vidas<?php echo $_SESSION['comodins']; ?>"></div>
                <div id="logo_vides_<?php echo $_SESSION['idioma'];?>"></div>
                <div id="vidas_rest" class="cVidas_rest<?php echo $_SESSION['vides']; ?>"></div>
            </div>
                <input type="text" value="<?php echo $_SESSION['sound']; ?>" class="cHiden" id="getSound" />
            </div>
          </div>

    </body>
   
</html>