<div class="content-wrapper">
<div class="box-body"><br><br>
    <div class="row">
    <div classe="box-header"><h3 style="color : red;">-Nous n'avons pas cette produit,SVP veillez remplire les champs suivantes !</h3></div>
<br>
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8 text-center" style="background-color : #f4f4f4;">
        
        <h1 style="color : red;">Ajout anomalie</h1>
            <form action="<?php echo base_url().'index.php/art/addAno1';?>" method="POST" class="text-center">
                <label >Gencode</label>
                <input type="text" name="gencode" class="form-control" placeholder="Veillez saisir ici le gencode Inconnue">
                <label >Libelle</label>
                <input type="text" name="Libelle" class="form-control" placeholder="Veillez saisir ici le nom de produit">
                <label >Quantité</label>
                <input type="text" name="Quantite" class="form-control" placeholder="Veillez saisir ici le quantité" >
                <label >Date</label>
                <input type="date" name="date" class="form-control"> <br><br>
            <button type="submit" id="saveAnomalie" class="btn btn-primary">Enregistrer</button><br><br>
            </form>
        </div>
        <div class="col-lg-2">
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
              <a href="javascript:void(0);" onclick="Apoitra();" type="button" class="btn btn-primary danger pull-right">Envoyer</a>
              <a href="#" id="vider" type="button" class="btn btn-warning pull-right">Vider</a>
              </div>
        </div>
        
       </div>

</div>

