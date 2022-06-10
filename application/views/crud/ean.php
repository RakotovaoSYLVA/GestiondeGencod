<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        EAN Tables
        <small>Informations tables</small>
      </h1>
    </section>
    <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajouter Ean</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?php echo base_url().'index.php/school/ean';?>" id="Ajoute-ean">
                <div class="form-group">
                  <label>id_ean</label>
                  <input type="number" class="form-control" required="required" name="id_ean" id="id_ean" placeholder="Entere le id">
                </div>
                <div class="form-group">
                  <label>ean_Ean</label>
                  <input type="number" class="form-control" required="required" name="ean_ean" id="ean_ean" placeholder="Entere le gencode">
                </div>
                <div class="form-group">
                  <label>primaire</label>
                  <input type="number" class="form-control" required="required" name="primaire" id="primaire" placeholder="Entere le primaire">
                </div>
                <div class="form-group">
                  <label>Cat_ean</label>
                  <input type="number" class="form-control" required="required" name="cat_ean" id="cat_ean" placeholder="Entere le cate_ean">
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
              <h3 class="box-title">Table EAN (<?php echo sizeof($all_ean); ?>)</h3>
              <a href="javascript:;" class="btn btn-success pull-right" data-toggle="modal" data-target="#exampleModal">
                    Ajouter
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Reference</th>
                  <th>ID-EAN</th>
                  <th>Ean_ean</th>
                  <th>primaire</th>
                  <th>Cat_ean</th>

                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                    foreach ($all_ean as $cat)
                    {
                   
                  ?>
                    <tr>
                      <td><?php echo $cat['ref_ean'];?></td>
                      <td><?php echo $cat['id_ean'];?></td>
                      <td><?php echo $cat['ean_ean'];?></td>
                      <td><?php echo $cat['primaire'];?></td>
                      <td><?php echo $cat['cat_ean'];?></td>

                      <td class="center">
                        <a href="<?php echo base_url().'index.php/school/delete_ean/'.$cat['id_ean']?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        <a href="<?php echo base_url().'index.php/school/edit_ean/'.$cat['id_ean']?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                  <?php 
                     }
                  ?>
                  
                    <tfoot>
                        <tr>
                          <th>Reference</th>
                          <th>ID-EAN</th>
                          <th>Ean_ean</th>
                          <th>primaire</th>
                          <th>Cat_ean</th>

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


