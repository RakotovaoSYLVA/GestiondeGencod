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
                  <th>libelle</th>
                  <th>Gencode</th>
                  <th>Dossier</th>
                  <th>Fournisseur</th>
                  <th>Coder</th>
                  <th>PCommander</th>
                  <th>Qterecu</th>
                  <th>Colis</th>
                  <th>Qunatite</th>
                  <th>Date</th>
                  <th>Option</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php
     
                    foreach ($result as $cat)
                    {
                   
                  ?>
                    <tr>
                      <td><?php echo $cat['art_dossier'];?></td>
                      <td><?php echo $cat['libelle'];?></td>
                      <td><?php echo $cat['ean'];?></td>
                      <td><?php echo $cat['dossier'];?></td>
                      <td><?php echo $cat['fournisseur'];?></td>
                      <td><?php echo $cat['Code'];?></td>
                      <td><?php echo $cat['PComander'];?></td>
                      <td><?php echo $cat['Qterecu'];?></td>
                      <td><?php echo $cat['Colis'];?></td>
                      <td><input type="text"   name="" value="" class="form-control number" placeholder="entrer le quantite" /></td>
                      <td><input type="date"  name="" value="" class="form-control daty" placeholder="entrer le reference" /></td>
                      <td><a href="#" data-libelle = "<?php echo $cat['libelle'];?>" data-gencode = "<?php echo $cat['ean']; ?>"  class="btn btn-warning ajouter">Ajouter</a></td>
                      

                    
                    </tr>
                  <?php 
                     }
                  ?>
                  
                    
              </table>
              </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-12">
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
                      <th>Libelle_Art</th>
                      <th>Quantite</th>
                      <th>Date</th>
                      <th>Gencode</th>
                    </tr>
                    </thead>
              </table>

              <a href="<?php echo base_url().'index.php/school/article2' ;?>" type="button" class="btn btn-success pull-right">PLUS</a>
              <button onclick="window.print();" class="btn"><i class="ace-icon fa fa-print pull-right"></i></button>
              <a href="#" id="vider" type="button" class="btn btn-warning pull-right">Vider</a>
              </div>
        </div>
        
       </div>

      </section>




     