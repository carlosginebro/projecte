<html>
<head>
       <meta charset="utf-8" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
        ?>
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
           
           td{
               width:30px;
               height:30px;
               border:1px solid black;
           }
       </style>
   
</head>

<body id="container" style="overflow:hidden;" class="<?php echo $_SESSION['estil']; ?>" >

	</table>
   
   
       <div id="plantilla">
            <div id="portada" class="no_portada">
                 <span class="nivel_pantalla">9</span>
                 <table>
                     <tr>
                         <td rowspan="2" colspan="1" class="c91"></td>
                         <td colspan="2" rowspan="1" class="c92"></td>              
                         <td colspan="2" rowspan="1" class="c93"></td>
                         <td colspan="2" class="c98"></td>
                     </tr>
                     <tr>
                         <td colspan="2" class="c92"></td>
                         <td colspan="1" class="c94"></td>
                         <td rowspan="1" class="c95"></td>
                         <td class="c99"></td>
                     </tr>
                     <tr>
                         <td colspan="2" class="c96"></td>
                         <td class="c97"></td>
                         <td colspan="2" class="c94"></td>
                     </tr>
                 </table>
             </div>
             <div id="marcadores" class="gridster">
                 <ul class="cgridFont">
                     <li data-row="1" data-col="1" data-sizex="1" data-sizey="2" class="c91">Per<br />dob</li>
                     <li data-row="1" data-col="2" data-sizex="2" data-sizey="1" class="c92">passar</li>
                     <li data-row="1" data-col="4" data-sizex="2" data-sizey="1" class="c93">de niv</li>
                     <li data-row="1" data-col="6" data-sizex="2" data-sizey="1" class="c98">ell fes</li> 
                     <li data-row="2" data-col="2" data-sizex="2" data-sizey="1" class="c92">le clic</li>
                     <li data-row="2" data-col="4" data-sizex="2" data-sizey="1" class="c94">en el</li>
                     <li data-row="2" data-col="6" data-sizex="1" data-sizey="2" class="c95">nom<br />ten</li>
                     <li data-row="2" data-col="7" data-sizex="1" data-sizey="1" class="c99">bre</li>
                     <li data-row="3" data-col="1" data-sizex="2" data-sizey="1" class="c96">de vides</li>
                     <li data-row="3" data-col="3" data-sizex="1" data-sizey="1" class="c97">que</li>
                     <li data-row="3" data-col="4" data-sizex="2" data-sizey="1" class="c94">et fal </li>

                 </ul>
            </div>
       </div>
	   
	   
<input type="text" value="9" id="getLvl" />
<input type="text" value="<?php echo $_SESSION['vides'];?>" class="cHiden" id="videsbd" />

</body>

</html>