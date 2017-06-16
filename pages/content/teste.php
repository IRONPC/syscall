   <!-- Modal -->
    <div class="modal-body">   
        <div class="modal fade" id="Responder" tabindex="0" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Excluir produto</h4>
      </div>
      <div class="modal-body">
        <p>    
        <?php 
            echo $tx = $obj->row['seqNumCh']; 
            echo '<br>';
            
            echo '<br>';
            echo 'Teste';
        ?>
        </p>

      </div>
      <div class="modal-footer">
        <form method="POST">
            <button type="button" name="botaoConfirma" value="<?php echo $dlt ?>" class="btn btn-danger">Excluir</button>
            <button type="button" class="btn btnn-default" data-dismiss="modal">Fechar</button>
        </form>

    <?php                  
        
        if (isset($_POST["botaoDelete"])) {
            $dlt = $_POST["botaoDelete"];
            if (isset($_POST["botaoConfirma"])) {
                $cnf = $_POST["botaoConfirma"];
                //$deleteSql = mysqli_query($conexao, "DELETE * FROM estoque WHERE id='".$cnf."'");
                echo $login = $_SESSION['login'];
            }
        }
      
    ?> 

    </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
