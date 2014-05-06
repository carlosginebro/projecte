<html>
<head>
       <meta charset="utf-8" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
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
                     <li data-row="2" data-col="7" data-sizex="1" data-sizey="2" class="c91">Per<br />dob</li>
                     <li data-row="3" data-col="1" data-sizex="2" data-sizey="1" class="c911">passar</li>
                     <li data-row="2" data-col="4" data-sizex="2" data-sizey="1" class="c93">de niv</li>
                     <li data-row="2" data-col="2" data-sizex="2" data-sizey="1" class="c98">ell fes</li> 
                     <li data-row="1" data-col="6" data-sizex="2" data-sizey="1" class="c92">le clic</li>
                     <li data-row="3" data-col="4" data-sizex="2" data-sizey="1" class="c910">en el</li>
                     <li data-row="1" data-col="1" data-sizex="1" data-sizey="2" class="c95">nom<br />ten</li>
                     <li data-row="3" data-col="3" data-sizex="1" data-sizey="1" class="c99">bre</li>
                     <li data-row="1" data-col="2" data-sizex="2" data-sizey="1" class="c96">de vides</li>
                     <li data-row="2" data-col="6" data-sizex="1" data-sizey="1" class="c97">que</li>
                     <li data-row="1" data-col="4" data-sizex="2" data-sizey="1" class="c94">et fal </li>
                 </ul>
            </div>
           <div id="vidas">
                <div id="logo_icons"></div>
                <div id="vidas_icons" class="icono_vidas<?php echo $_SESSION['comodins']; ?>"></div>
                <div id="logo_vides"></div>
                <div id="vidas_rest" class="cVidas_rest<?php echo $_SESSION['vides']; ?>" name="nextLvl9"></div>
            </div>
       </div>
	   
	   
<input type="text" value="9" id="getLvl" />
<input type="text" value="<?php echo $_SESSION['vides'];?>" class="cHiden" id="videsbd" />

</body>

</html>