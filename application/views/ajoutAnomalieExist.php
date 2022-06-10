<div class="content-wrapper">
<div class="box-body"><br><br>

<h4 style="color : red;"> <span style="color : grey!important">Ce produit existe dans notre article,, SVP selectionner si c'est bon </h4>
<br>
<div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8 text-center" style="background-color : #f4f4f4;">
        <h1 style="color : red;">Rataché gencode</h1>
        <form action="<?php echo base_url().'index.php/art/addAno';?>" method="POST" class="text-center">
            <div class="text-center">
                <label >Gencode</label>
                <input type="text" name="gencode" class="form-control">
                <label >Libelle</label>
                <select name="Libelle_art" id="Libelle_art" class="form-control">
                        <?php foreach($result as $res) { ?>
                        <option value="<?php echo $res['libelle_art']; ?>"><?php echo $res['libelle_art']; ?></option>
                        <?php } ?>      
                </select>
                <label >Quantité</label>
                <input type="text" name="Quantite" class="form-control">
                <label >Date</label>
                <input type="date" name="date" class="form-control"> <br><br>
            <button type="submit" id="saveAnomalie" class="btn btn-primary">Enregistrer</button><br><br>
            </div>
        </form>
        </div>
        <div class="col-lg-2">
        </div>
        <div class="col-md-12" >
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
              <a href="javascript:void(0);" onclick="Apoitra();" type="button" class="btn btn-primary danger pull-right">Envoyer</a>
              <a href="#" id="vider" type="button" class="btn btn-warning pull-right">Vider</a>
              </div>
        </div>
        
       </div>
    </div>

</div>