<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Famille Tables
        <small>Informations tables</small>
      </h1>
    </section>
    <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="modalfamille" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajouter Famille</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="" id="Ajoute-famille">
                <div class="form-group">
                  <label>fam_fam</label>
                  <input type="number" class="form-control"  name="fam_fam" id="fam_fam" placeholder="Entere le id">
                  <p class="fam_Error"></p>
                </div>
                <div class="form-group">
                  <label>libelle_fam</label>
                  <input type="text" class="form-control"  name="libelle_fam" id="libelle_fam" placeholder="Entere le nom">
                  <p class="libe_Error"></p>
                </div>
                <div class="form-group">
                  <label>ray_ray</label>
                  <input type="number" class="form-control"  name="ray_ray" id="ray_ray" placeholder="Entere le id_ray">
                  <p class="ray_Error"></p>
                </div>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" value="save">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Table Famille (<?php echo sizeof($all_fam); ?>)</h3>
              <a href="javascript:void(0);" onclick="famiz();" class="btn btn-success pull-right" data-toggle="modal" data-target="#exampleModal">
                    Ajouter
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Fam_fam</th>
                  <th>Libelle_fam</th>
                  <th>ray_ray</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                    foreach ($all_fam as $cat)
                    {
                   
                  ?>
                    <tr>
                      <td><?php echo $cat['fam_fam']; ?></td> 
                      <td><?php echo $cat['libelle_fam'];?></td> 
                      <td><?php echo $cat['ray_ray'];?></td>
                      

                      <td class="center">
                        <a href="<?php echo base_url().'index.php/school/delete_famille/'.$cat['fam_fam'];?>" class="btn btn-danger" id="deletesecteur"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        <a href="<?php echo base_url().'index.php/school/edit_famille/'.$cat['fam_fam'];?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                  <?php 
                     }
                  ?>
                  
                    <tfoot>
                        <tr>
                            <th>Fam_fam</th>
                            <th>Libelle_fam</th>
                            <th>ray_ray</th>
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


      <!-- Modal edit -->
      <div class="modal fade" id="modalefamille" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


