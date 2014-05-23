           <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $config; ?></h4>
      </div>
      <div class="modal-body">
          <form id="form_config" method="post" action="">
              <legend><?php echo $estil_joc; ?></legend>
                
              <fieldset>
                  <ul>
                    <?php

                      if(  $_SESSION['estil']=='normal' ){
                    ?>
                          <li><input type="radio" value="normal" name="interface" checked="true"/> Normal</li>
                    <?php
                      }else{
                    ?>
                          <li><input type="radio" value="normal" name="interface"/> Normal</li>
                    <?php
                      }

                    ?>
                      
                    <?php
                    if ($_SESSION['estil'] == 'molon') {
                        ?>
                        <li><input type="radio" value="molon" name="interface" checked="true"/> Molon</li>
                        <?php
                    } else {
                        ?>
                        <li><input type="radio" value="molon" name="interface"/> Molon</li>
                        <?php
                    }
                    ?>
                        
                    <?php
                    if ($_SESSION['estil'] == 'rock') {
                        ?>
                        <li><input type="radio" value="rock" name="interface" checked="true"/> Roca</li>
                        <?php
                    } else {
                        ?>
                        <li><input type="radio" value="rock" name="interface"/> Roca</li>
                        <?php
                    }
                    ?>

                  </ul>
                  <br />
                  <span style="font-size: 21px; line-height: inherit; color: #333333;">Idioma: </span>
                  
                  <ul>
                      <?php
                      if( $_SESSION['idioma']=='es' ){
                      ?>
                        <li><input type="radio" value="es" name="idioma" checked="true"/> Castellano</li>
                        <li><input type="radio" value="ca" name="idioma"/> Català</li>
                      <?php
                      }else{
                      ?>
                          <li><input type="radio" value="es" name="idioma"/> Castellano</li>
                          <li><input type="radio" value="ca" name="idioma" checked="true"/> Català</li>
                      <?php
                      }
                      ?>
                      
                  </ul>
                  <br />
                  <span style="font-size: 21px; line-height: inherit; color: #333333;">Música: </span>
                  
                  <ul>
                      <?php
                      if( $_SESSION['sound']== 1 ){
                       ?> 
                      <li><input type="radio" value="1" name="sound" checked="true"/> Activar</li>
                      <li><input type="radio" value="0" name="sound"/> Desactivar</li>
                        
                      <?php
                      }else{
                      ?>
                        <li><input type="radio" value="1" name="sound"/> Activar</li>
                        <li><input type="radio" value="0" name="sound" checked="true"/> Desactivar</li>
                      <?php    
                      }   
                      ?>

                  </ul>
       
       
                  <input type="submit" value="Aceptar"  id="btestilos"/>

              </fieldset>
          </form>
              
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->