<div class="content-wrapper">
    <div class="container">
    <h1>A propos du produit</h1>
      <div class="row"> 
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Produits sucrés</h3>
                    
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-4">
                            <img src="<?php echo base_url(); ?>tools/image/20.jpg" >
                            <p>FRITE DE SAONJO 200G</p>
                        </div>
                        <div class="col-xs-6 col-md-4">
                        
                            <?php foreach ($rows as $row){?>
                                <form method="post" action="<?php echo base_url().'index.php/det/detail' ?>">
                                    <div class="form-group">
                                        <label>ID_article</label>
                                        <input type="number" id="id_art" name="id_art" value="<?php echo $row['id_art']; ?>" class="form-control" placeholder="entrer le reference" />
                                    </div>
                                    <div class="form-group">
                                        <label>Refrence</label>
                                        <input type="number" id="reference" name="reference" value="<?php echo $row['reference']; ?>" class="form-control" placeholder="entrer le reference" />
                                    </div>
                                    <div class="form-group">
                                        <label>Gencode</label>
                                        <input type="number" id="ref_ean" name="sect_sect" value="<?php echo $row['Gencode']; ?>" class="form-control" placeholder="entrer le reference" />
                                    </div>
                                    <div class="form-group">
                                        <label>libelle_art</label>
                                        <input type="text" id="id_ean5" name="libelle_sect" value="<?php echo $row['libelle_art']; ?>" class="form-control" placeholder="entrer le Gencode"/>
                                    </div>
                                    <div class="form-group">
                                        <label>secteur</label>
                                        <input type="number" id="ean_ean" name="id_sect" value="<?php echo $row['secteur']; ?>" class="form-control" placeholder="entrer le Gencode"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Rayon</label>
                                        <input type="number" id="ean_ean" name="id_sect" value="<?php echo $row['rayon']; ?>" class="form-control" placeholder="entrer le Gencode"/>
                                    </div>
                                    <div class="form-group">
                                        <label>famille</label>
                                        <input type="number" id="ean_ean" name="id_sect" value="<?php echo $row['famille']; ?>" class="form-control" placeholder="entrer le Gencode"/>
                                    </div>
                                
                            <?php }?>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>
