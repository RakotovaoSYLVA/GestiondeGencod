<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Famille Tables
        <small>Informations tables</small>
      </h1>
    </section>

    <!-- Main content -->
    <div class="page_container">
    <section class="content">
      <div class="row"> 
      <div class="col-sm-3"></div>
      <form action="<?php echo base_url().'index.php/school/edit_famille/'.$cat_fam[0]['fam_fam']?>" id="update_sect">
        <div class="col-sm-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Famille</h3>  
            </div>
             
                <div class="form-group">
                    <label> fam_Fam</label>
                    <input type="number" id="ref_ean" name="sect_sect" value="<?php echo $cat_fam[0]['fam_fam']; ?>" class="form-control" placeholder="entrer le reference" />
                </div>
                <div class="form-group">
                    <label>libelle_fam</label>
                    <input type="text" id="id_ean5" name="libelle_sect" value="<?php echo $cat_fam[0]['libelle_fam']; ?>" class="form-control" placeholder="entrer le Gencode"/>
                </div>
                <div class="form-group">
                    <label>ray_ray</label>
                    <input type="number" id="ean_ean" name="id_sect" value="<?php echo $cat_fam[0]['ray_ray']; ?>" class="form-control" placeholder="entrer le Gencode"/>
                </div>
                <br>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" value="update"/>
                </div>
            
          
            </div>
        </div>
        </div>
     
    </section>
    </div>



