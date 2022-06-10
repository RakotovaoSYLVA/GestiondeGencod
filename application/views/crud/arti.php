<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Resultat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
              </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-4">      
          </div>
        </div>
        <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Resultat</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="tableresult" class="table table-bordered">
                <thead>
                    <tr>
                      <th>Id_Art</th>
                      <th>Gencode</th>
                      <th>Libelle_Art</th>
                      <th>quantity</th>
                      <th>Date</th>
                    </tr>
                    </thead>
              </table>

              <a href="<?php echo base_url().'index.php/school/article2' ;?>" type="button" class="btn btn-success pull-right">PLUS</a>
              <a href="javascript:void(0);" onclick="Apoitra();" type="button" class="btn btn-primary pull-right">Envoyer</a>
              <button type="button" class="btn btn-success" value=""><i class="ace-icon fa fa-user-plus">
              </button>
              <button onclick="window.print();" class="btn"><i class="ace-icon fa fa-print"></i></button>
              <a href="#" id="vider" type="button" class="btn btn-danger pull-right">Vider</a>
              </div>
        </div>
        
       </div>

      </section>
</div>



      <!-- Button trigger modal -->
      <!-- Alert -->
      <div class="modal fade" id="ajaxalert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body">
              </div>
              <div class = "modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            
          </div>
        </div>
      </div>

      <!-- Modal edit -->
      <div class="modal fade" id="modalefacture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajouter Famille</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div id="response"></div>
            
            </div>
          </div>
        </div>
      </div>


<script>
  $(document).ready(function(){
    alert('ok');
  })
</script>