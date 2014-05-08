<html>
<head>
        <meta charset="utf-8" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
            require_once '../animacio_correcte_'.$_SESSION['idioma'].'.php';
            require_once '../animacio_comodin.php';
            require_once '../llibreria_text.php';
        ?>
   
       <script src="../js/nivel9.js"></script>
       <style>
           ul li{
               list-style-type: none;
           }
           
           ul{
               /*border: 1px solid black;*/
           }
           
           li{
               display:block;
               border: 2px solid gray;
               border-radius: 5px;
           }
           
           
       </style>
   
</head>

<body id="container" style="overflow:hidden;" class="<?php echo $_SESSION['estil']; ?>" >

	</table>
   
   
       <div id="plantilla">
            <div id="portada" class="no_portada">
                 <span class="nivel_pantalla">9</span>
                 <table class="tbl_lvl9">
                     <tr>
                         <td rowspan="2" class="c91"></td>
                         <td colspan="2" class="c911"></td>              
                         <td colspan="2" class="c93"></td>
                         <td colspan="2" class="c98"></td>
                     </tr>
                     <tr>
                         <td colspan="2" class="c92"></td>
                         <td colspan="2" class="c910"></td>
                         <td rowspan="2" class="c95"></td>
                         <td class="c99"></td>
                     </tr>
                     <tr>
                         <td class="c96"></td>
                         <td class="c96"></td>
                         <td colspan="1" class="c97"></td>
                         <td class="c94"></td>
                         <td class="c94"></td>
                         <td></td>
                     </tr>
                 </table>
             </div>
             <div id="marcadores" class="gridster">
                 <ul class="cgridFont">
                     <li data-row="2" data-col="7" data-sizex="1" data-sizey="2" class="c91"><?php $var_final = "l91_".$_SESSION['idioma']; echo $$var_final; ?></li>
                     <li data-row="3" data-col="1" data-sizex="2" data-sizey="1" class="c911"><?php $var_final = "l92_".$_SESSION['idioma']; echo $$var_final; ?></li>
                     <li data-row="2" data-col="4" data-sizex="2" data-sizey="1" class="c93"><?php $var_final = "l93_".$_SESSION['idioma']; echo $$var_final; ?></li>
                     <li data-row="2" data-col="2" data-sizex="2" data-sizey="1" class="c98"><?php $var_final = "l94_".$_SESSION['idioma']; echo $$var_final; ?></li> 
                     <li data-row="1" data-col="6" data-sizex="2" data-sizey="1" class="c92"><?php $var_final = "l95_".$_SESSION['idioma']; echo $$var_final; ?></li>
                     <li data-row="3" data-col="4" data-sizex="2" data-sizey="1" class="c910"><?php $var_final = "l96_".$_SESSION['idioma']; echo $$var_final; ?></li>
                     <li data-row="1" data-col="1" data-sizex="1" data-sizey="2" class="c95"><?php $var_final = "l97_".$_SESSION['idioma']; echo $$var_final; ?></li>
                     <li data-row="3" data-col="3" data-sizex="1" data-sizey="1" class="c99"><?php $var_final = "l98_".$_SESSION['idioma']; echo $$var_final; ?></li>
                     <li data-row="1" data-col="2" data-sizex="2" data-sizey="1" class="c96"><?php $var_final = "l99_".$_SESSION['idioma']; echo $$var_final; ?></li>
                     <li data-row="2" data-col="6" data-sizex="1" data-sizey="1" class="c97"><?php $var_final = "l910_".$_SESSION['idioma']; echo $$var_final; ?></li>
                     <li data-row="1" data-col="4" data-sizex="2" data-sizey="1" class="c94"><?php $var_final = "l911_".$_SESSION['idioma']; echo $$var_final; ?></li>
                 </ul>
            </div>
           <div id="vidas">
                <div id="logo_icons_<?php echo $_SESSION['idioma'];?>"></div>
                <div id="vidas_icons" class="icono_vidas<?php echo $_SESSION['comodins']; ?>"></div>
                <div id="logo_vides_<?php echo $_SESSION['idioma'];?>"></div>
                <div id="vidas_rest" class="cVidas_rest<?php echo $_SESSION['vides']; ?>"></div>
            </div>
       </div>
	   
	   
<input type="text" value="9" id="getLvl" />
<input type="text" value="<?php echo $_SESSION['vides'];?>" class="cHiden" id="videsbd" />
<input type="text" value="<?php echo $_SESSION['comodins']; ?>" class="cHiden" id="getComodins" />
</body>

</html>