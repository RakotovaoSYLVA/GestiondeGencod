<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Secteur Tables
        <small>Informations tables</small>
      </h1>
    </section>
    <!-- Button trigger modal -->
      <!--  ajout Modal -->
      <div class="modal fade" id="modalsect" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" action="" id= "Ajoute-secteur">
                <div class="form-group">
                  <label>sect_sect</label>
                  <input type="number" class="form-control" name="sect_sect" id="sect_sect" placeholder="Entere le id">
                  <p class="Sect_Error"></p>
                </div>
                <div class="form-group">
                  <label>libelle_sect</label>
                  <input type="text" class="form-control" name="libelle_sect" id="libelle_sect" placeholder="Entere le nom">
                  <p class="libe_Error"></p>
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
              <h3 class="box-title">Table Secteur (<?php echo sizeof($all_sect); ?>)</h3>
              <a href="javascript:void(0);" onclick="showsect();" class="btn btn-success pull-right" data-toggle="modal">
                    Ajouter
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sect_sect</th>
                  <th>Libelle_sect</th>

                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                    foreach ($all_sect as $cat)
                    {
                   
                  ?>
                    <tr>
                      <td><?php echo $cat['sect_sect'];?></td>
                      <td><?php echo $cat['libelle_sect'];?></td>

                      <td class="center">
                        <button id="delete_sect" type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        <a href="<?php echo base_url().'index.php/school/edit_secteur/'.$cat['sect_sect'];?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                  <?php 
                     }
                  ?>
                  
                    <tfoot>
                        <tr>
                            <th>Sect_sect</th>
                            <th>Libelle_sect</th>

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


      


