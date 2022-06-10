<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rayon Tables
        <small>Informations tables</small>
      </h1>
    </section>
    <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="modalrayon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajouter</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="response"></div>
            
          </div>
        </div>
      </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Table Rayon (<?php echo sizeof($sise); ?>)</h3>
              <a href="javascript:void(0);" onclick="showModal();" class="btn btn-success pull-right">
                    Ajouter
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Ray_ray</th>
                  <th>Libelle_ray</th>
                  <th>Sect_sect</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php if(!empty($all_ray)){?>
                    
                    <?php
                    $i=0;
                      foreach ($all_ray as $cat)
                      {
                    
                    ?>
                    <tr>
                      <td><?php echo $cat['ray_ray']; ?></td> 
                      <td><?php echo $cat['libelle_ray'];?></td>
                      <td><?php echo $cat['sect_sect'];?></td>
                      

                      <td class="center">
                        <button type="submit" id="delete_ray" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        <a href="javascript:void(0);" onclick = "showeditform(<?php echo $cat['ray_ray']; ?>);" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                  <?php 
                     }
                  ?>
                  <?php } else { ?>
                    <tr>
                      <td>record not found</td>
                    </tr>
                    <?php }  ?>
                </tbody>  
                    <tfoot>
                        <tr>
                            <th>Ray_ray</th>
                            <th>Libelle_ray</th>
                            <th>Sect_sect</th>

                            <th>Action</th>

                        </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        </div>
     
      </section>


      <!-- Button trigger modal -->
      <!-- Alert -->
      <div class="modal fade" id="ajaxResponseM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


