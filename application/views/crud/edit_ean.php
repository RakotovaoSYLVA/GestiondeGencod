<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        EAN Tables
        <small>Informations tables</small>
      </h1>
    </section>

    <!-- Main content -->
    <div class="page_container">
    <section class="content">
      <div class="row"> 
      <div class="col-sm-3"></div>
      <form action="<?php echo base_url().'index.php/school/edit_ean/'.$cat_info[0]['ref_ean']?>" id="update_ean">
        <div class="col-sm-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit EAN</h3>  
            </div>
             
                <div class="form-group">
                    <label>Ref_ean</label>
                    <input type="number" id="ref_ean" name="ref_ean" value="<?php echo $cat_info[0]['ref_ean'];?>" class="form-control" placeholder="entrer le reference" />
                </div>
                <div class="form-group">
                    <label>id_ean</label>
                    <input type="number" id="id_ean5" name="id_ean5" value="<?php echo $cat_info[0]['id_ean']; ?>" class="form-control" placeholder="entrer le Gencode"/>
                </div>
                <div class="form-group">
                    <label>ean_ean</label>
                    <input type="number" id="ean_ean" name="ean_ean" value="<?php echo $cat_info[0]['ean_ean']; ?>" class="form-control" placeholder="entrer le Gencode"/>
                </div>
                <div class="form-group">
                    <label>primaire</label>
                    <input type="number" id="primaire" name="primaire" value="<?php echo $cat_info[0]['primaire']; ?>" class="form-control" placeholder="entrer le Gencode"/>
                </div>
                <div class="form-group">
                    <label>cat_ean</label>
                    <input type="number" id="cat_ean" name="cat_ean" value="<?php echo $cat_info[0]['cat_ean']; ?>" class="form-control" placeholder="entrer le Gencode"/>
                </div><br>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" value="update"/>
                </div>
            
          
            </div>
        </div>
        </div>
     
    </section>
    </div>


