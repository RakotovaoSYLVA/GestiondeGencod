<div class="content-wrapper">
<div class="box-body">
         <div class="row">
         <div classe="box-header"><h3 style="color : green;">-OUPS! Pas encore trouver, SVP veillez resaisir ici le nom de cette produit Parce que peut etre deja dans la table Article</h3></div>

         <div class="col-lg-3"><img src="<?php echo base_url(); ?>tools/image/71.jpg"  alt="User Image"></div>
          <div class="col-lg-6 text-center">
          <form action="<?php echo base_url().'index.php/art/searcharticle'?>" method="post">
          <label>Libelle</label>
            <input type="text"  name="libelle_art" class="form-control" style="width:100%; height:50px;"><br>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Rechercher</button>
            </div>
          </form>
          </div>
          <div class="col-lg-3"><img src="<?php echo base_url(); ?>tools/image/71.jpg"  alt="User Image"></div>
          <img src="<?php echo base_url(); ?>tools/image/photo.jpg"  alt="User Image">
         </div>