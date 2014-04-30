
    <?php 
    
    session_start();
    
    function cone(){
            $conec = new mysqli("localhost", "root", "", "projecte");
            return $conec;
    }
    
    
    $conec= cone();
    $id = $_SESSION['id'];
    
    $sql = "select Vides from usuari where id = $id";
    $consulta = $conec->query($sql);
    $reg = $consulta->fetch_array();
    $_SESSION['vides'] = $reg['Vides'];
    
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
    
	<head>
        <meta charset="ISO-8859-15" />
        <?php
            require_once 'head.php';
        ?>


    </head>
	
    <body id="container" class="<?php echo $estilo ?>" >
        <?php  
            include_once 'interface.php'; 
        ?>
          <div id="plantilla">
            <div id="portada">
                
            </div>
            <!--<table cellspacing="0" id="marcadores" >-->
            <div id="marcadores" style="width:100%; height: 47%; margin-left: 5%;">
                <ul style="list-style: none outside none;">
                    <li id="bt1" class="bt1" name="jugar" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size">VENGAA!!</span>     
                        </div>
                    </li>
                    <li id="bt2" class="bt2" name="no" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta" style="width: 86%;">
                            <span class="size">CREDITOS</span>
                        </div>
                    </li>
                </ul>
                <ul style="list-style: none outside none;">
                    <li id="bt3" class="bt3" name="no" data-toggle="modal" data-target="#myModal" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size">Configuracion</span>
         

                        </div>
                    </li>
                    
                    <li id="bt4" class="bt4" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta">
                            <span class="size">SORTIR</span>
                         
                        </div>
                    </li>
                 
                </ul>
            <!--</table>-->
            </div>
            <div id="vidas">
                <div id="vidas_icons" class="icono_vidas0">
                  
                   
                </div>
            </div>
                
            </div>
       

    </body>
   
</html>