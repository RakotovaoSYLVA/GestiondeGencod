<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Article Tables
        <small>Informations tables</small>
      </h1>
    </section>

    <!-- Main content -->
    <div class="page_container">
    <section class="content">
      <div class="row"> 
      <div class="col-sm-3"></div>
      <form action="" id="update_sect">
        <div class="col-sm-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Article</h3>  
            </div>
             <form action="<?php echo base_url().'index.php/school/edit_article/'.$cat_art['art_dossier']; ?>" method="get">
                <div class="form-group">
                    <label> art_dossier</label>
                    <input type="number" id="ref_ean" name="id_art" value="<?php echo $cat_art[0]['art_dossier']?>" class="form-control" placeholder="entrer le reference" />
                </div>
                <div class="form-group">
                    <label>Libelle</label>
                    <input type="number" id="ref_ean" name="reference" value="<?php echo $cat_art['libelle']?>" class="form-control" placeholder="entrer le reference" />
                </div>
                <div class="form-group">
                    <label>Gencode</label>
                    <input type="number" id="ref_ean" name="Gencode" value="<?php echo $cat_art['ean']?>" class="form-control" placeholder="entrer le reference" />
                </div>
                <div class="form-group">
                    <label>Dossier</label>
                    <input type="text" id="id_ean5" name="libelle_art" value="<?php echo $cat_art['dossier']?>" class="form-control" placeholder="entrer le Gencode"/>
                </div>
                <div class="form-group">
                    <label>Fournisseur</label>
                    <input type="number" id="ref_ean" name="secteur" value="<?php echo $cat_art['fournisseur']?>" class="form-control" placeholder="entrer le reference" />
                </div>
                <div class="form-group">
                    <label>Code</label>
                    <input type="number" id="ean_ean" name="rayon" value="<?php echo $cat_art['Code']?>" class="form-control" placeholder="entrer le Gencode"/>
                </div>
                <div class="form-group">
                    <label>PComander</label>
                    <input type="number" id="ref_ean" name="famille" value="<?php echo $cat_art['PComander']?>" class="form-control" placeholder="entrer le reference" />
                </div>
                <div class="form-group">
                    <label>Qterecu</label>
                    <input type="number" id="ref_ean" name="famille" value="<?php echo $cat_art['Qterecu']?>" class="form-control" placeholder="entrer le reference" />
                </div>
                <div class="form-group">
                    <label>Colis</label>
                    <input type="number" id="ref_ean" name="famille" value="<?php echo $cat_art['Colis']?>" class="form-control" placeholder="entrer le reference" />
                </div>
                <br>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" value="update"/>
                </div>
                </form>
          
            </div>
        </div>
        </div>
     
    </section>
    </div>



