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
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Reference</th>
                  <th>Id_ean</th>
                  <th>Gencode</th>
                  <th>Primaire</th>
                  <th>Cat_ean</th>
                 <!-- <th>Qunatite</th> -->
                  
                </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                    foreach ($result as $cat)
                    {
                   
                  ?>
                    <tr>
                      <td><?php echo $cat['ref_ean'];?></td>
                      <td><?php echo $cat['id_ean'];?></td>
                      <td><?php echo $cat['ean_ean'];?></td>
                      <td><?php echo $cat['primaire'];?></td>
                      <td><?php echo $cat['cat_ean'];?></td>

                    
                    </tr>
                  <?php 
                     }
                  ?>
                  
                    
              </table>
              </div>
            <!-- /.box-body -->
          </div>
        </div>
        

         <div class="col-lg-3"></div>
          <div class="col-lg-6 text-center">
          <h3 style="color : red;">SVP veillez remplire ce champs avec le gencode rechercher !</h3>
          <form action="<?php echo base_url().'index.php/art/codeexist'?>" method="post">
          <label>Gencode</label>
            <input type="text"  name="ean"  class="form-control" style="width:100%; height:50px;"><br>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Rechercher</button>
            </div>
          </form>
          </div>
          <div class="col-lg-3"></div>
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



<script>
  $(document).ready(function(){
    alert('ok');
  })
</script>