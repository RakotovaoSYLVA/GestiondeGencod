<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Article Tables
        <small>Informations tables</small>
      </h1>
    </section>
    <div class="row">
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                <form action="<?php echo base_url().'index.php/art/article';?>">
                    <h3><?php echo sizeof($tata);?></h3>
                    <p>Nombre d'article</p>
                </form>
               </div>
                
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url().'index.php/art/article'; ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <form action="<?php echo base_url().'index.php/art/article';?>">
                      <h3><?php echo sizeof($toa);?></h3>
                      
                  </form>

                <p>Informatin EAN</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url().'index.php/school/ean' ;?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
            <div class="inner">
                  <form action="<?php echo base_url().'index.php/art/article';?>">
                      <h3><?php echo sizeof($too);?></h3>
                      
                  </form>

              <p>Information Anomalie </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url().'index.php/school/Anoma'; ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
            <div class="inner">
                  <form action="<?php echo base_url().'index.php/art/article';?>">
                      <h3><?php echo sizeof($all_art);?></h3>
                      
                  </form>

              <p>Information Dossier </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url().'index.php/school/famille'; ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
    <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajouter Article</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?php echo base_url().'index.php/school/article2';?>" id="Ajoute-ean">
                <div class="form-group">
                  <label>reference</label>
                  <input type="number" class="form-control" required="required" name="reference" id="reference" placeholder="Entere le id">
                </div>
                <div class="form-group">
                  <label>Gencode</label>
                  <input type="number" class="form-control" required="required" name="Gencode" id="Gencode" placeholder="Entere le identifiant">
                </div>
                <div class="form-group">
                  <label>libelle_art</label>
                  <input type="number" class="form-control" required="required" name="libelle_art" id="libelle_art" placeholder="Entere le nom">
                </div>
                <div class="form-group">
                  <label>sect_Sect</label>
                  <input type="number" class="form-control" required="required" name="sect_sect" id="sect_sect" placeholder="Entere le id_sect">
                </div>
                <div class="form-group">
                  <label>ray_ray</label>
                  <input type="number" class="form-control" required="required" name="ray_ray" id="ray_ray" placeholder="Entere le id_ray">
                </div>
                <div class="form-group">
                  <label>fam_fam</label>
                  <input type="number" class="form-control" required="required" name="fam_fam" id="fam_fam" placeholder="Entere le id_fam">
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
            <div class="col-md-3"><h3 class="box-title">Table Dossier (<?php echo sizeof($all_art); ?>)</h3></div>
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
                  <th>Libelle</th>
                  <th>Gencode</th>
                  <th>Dossier</th>
                  <th>Fournisseur</th>
                  <th>Code</th>
                  <th>PComander</th>
                  <th>Qterecu</th>
                  <th>Colis</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                    foreach ($all_art as $cat)
                    {
                   
                  ?>
                    <tr>
                      <td><?php echo $cat['art_dossier']; ?></td> 
                      <td><?php echo $cat['libelle']; ?></td>
                      <td><?php echo $cat['ean']; ?></td>
                      <td><?php echo $cat['dossier'];?></td> 
                      <td><?php echo $cat['fournisseur'];?></td>
                      <td><?php echo $cat['Code'];?></td>
                      <td><?php echo $cat['PComander'];?></td>
                      <td><?php echo $cat['Qterecu'];?></td>
                      <td><?php echo $cat['Colis'];?></td>
                    </tr>
                  <?php 
                     }
                  ?>
                  
                    <tfoot>
                        <tr>
                          <th>Id_Art</th>
                          <th>Libelle</th>
                          <th>Gencode</th>
                          <th>Dossier</th>
                          <th>Fournisseur</th>
                          <th>Code</th>
                          <th>PComander</th>
                          <th>Qterecu</th>
                          <th>Colis</th>
                            

                        </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        </div>
     
      </section>

      

