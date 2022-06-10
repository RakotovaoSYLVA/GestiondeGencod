<div class="content-wrapper">
            
  <div class="container">

            <h3> 
                Application
            <small>Gestion des articles</small>
            </h3>
              
          

        <!-- le contenue -->

        <div class="box-header">
          <h3 class="box-title">Voici Quelque article excistant dans notre magasin!!</h3>
                    
        </div>


      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
            <div class="col-md-3"><h3 class="box-title">Table Article (<?php echo sizeof($all_art); ?>)</h3></div>
            <div class="col-md-6"></div>
            <div class="col-md-3">
                  <form action="<?php echo base_url().'index.php/art/saisie';?>" method="post" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                    <button type="submit" name="submit" class="btn btn-flat" value="Search"><i class="fa fa-search"></i>
                    </button>
                    </span>
                        </div>
                    </form>
            </div>
              
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table4" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id_Art</th>
                  <th>Reference</th>
                  <th>Gencode</th>
                  <th>Libelle_Art</th>
                  <th>Secteur</th>
                  <th>Rayon</th>
                  <th>Famille</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                    foreach ($all_art as $cat)
                    {
                   
                  ?>
                    <tr>
                      <td><?php echo $cat['id_art']; ?></td> 
                      <td><?php echo $cat['reference']; ?></td>
                      <td><?php echo $cat['Gencode']; ?></td>
                      <td><?php echo $cat['libelle_art'];?></td> 
                      <td><?php echo $cat['secteur'];?></td>
                      <td><?php echo $cat['rayon'];?></td>
                      <td><?php echo $cat['famille'];?></td>

                      <td class="center">
                        <a href="#" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                  <?php 
                     }
                  ?>
                  
                    <tfoot>
                        <tr>
                          <th>Id_Art</th>
                          <th>Reference</th>
                          <th>Gencode</th>
                          <th>Libelle_Art</th>
                          <th>Secteur</th>
                          <th>Rayon</th>
                          <th>Famille</th>
                          <th>Action</th>

                        </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      <!-- /.row -->


  
         </div>

     
      

  </div>



    

    


