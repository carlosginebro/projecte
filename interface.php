           <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Configuracion</h4>
      </div>
      <div class="modal-body">
          <form id="form_config" method="post" action="">
              <legend>Estilos del juego: </legend>
                
              <fieldset>
                  <ul>
                      <li><input type="radio" value="normal" name="interface"/> Normal</li>

                      <li><input type="radio" value="molon" name="interface"/> Molon</li>

                      <li><input type="radio" value="rock" name="interface"/> Roca</li>
                  <br />
       
       
                  <input type="submit" value="Aceptar"  id="btestilos"/>

              </fieldset>
          </form>
              
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->