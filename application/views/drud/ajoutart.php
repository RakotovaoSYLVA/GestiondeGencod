<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ajouter Article
        <small>Informations tables</small>
      </h1>
    </section>

    <!-- Main content -->
    <div class="page_container">
    <section class="content">
      <div class="row"> 
      <div class="col-xs-3">
            <div class="small-box bg-red">
              <div class="inner">
                <form action="<?php echo base_url().'index.php/art/article';?>">
                    <h3></h3>
                    <p>Nombre d'article</p>
                </form>
               </div>
                
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url().'index.php/school/article2'; ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
                
      </div>
      <form action="" id="update_sect">
        <div class="col-md-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Article</h3>  
            </div>
                <div class="form-group">
                    <label>Gencode</label>
                    <input type="text" id="Gencode" name="" value="" class="form-control" placeholder="entrer le reference" />
                </div>
                <div class="form-group">
                    <label>libelle_art</label>
                    <input type="text" id="libelle_art" name="" value="" class="form-control" placeholder="entrer le Gencode"/>
                </div>
                <div class="form-group">
                    <label>Secteur</label>
                    <select name="" id="secteur" class="form-control">
                        <?php foreach($libe as $res) { ?>
                        <option value="<?php echo $res['sect_sect'] ?>"><?php echo $res['libelle_sect'] ?></option>
                        <?php } ?>
                      
                    </select>
                </div>
                <div class="form-group">
                    <label>Rayon</label>
                    <select name="" id="rayon" class="form-control">
                      <?php foreach($ray as $res) { ?>
                      <option value="<?php echo $res['ray_ray'];?>"><?php echo $res['libelle_ray'] ?></option> 
                       <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Famille</label>
                    <select name="" id="famille" class="form-control">
                    <?php foreach($fami as $res) { ?>
                      <option value="<?php echo $res['fam_fam'];?>"><?php echo $res['libelle_fam'] ?></option> 
                    <?php } ?>
                    </select>
                </div>
                <br>
                <a href="#" id="savearticl" class="btn btn-success">Save</a>
          
            </div>
        </div>
        </div>
     
    </section>
    </div>
</div>

<!-- ./wrapper -->

<div class="modal fade " id="modalert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body">
                <div class="alert alert-danger">Nous n'avons pas trouver cette produit dans notre Magasin <br><h2>Vous voulez l'enregistrer?</h2> </div>
              </div>
              <div class = "modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Oui</button>
                <a href="<?php echo base_url().'index.php/art/article';?>" class="btn btn-success">Non</a>
              </div>
            
          </div>
        </div>
      </div>
  <!-- /.content-wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>tools/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>tools/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>tools/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>tools/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>tools/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>tools/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>tools/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>tools/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>tools/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>tools/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>tools/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>tools/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>tools/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>tools/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>tools/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>tools/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>tools/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>tools/dist/js/demo.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>tools/js/datatables.min.js"></script>
<!--<script rel="stylesheet" typre="text/css" src="<?php echo base_url(); ?>tools/js/datatables.min.css"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>tools/js/dataTables.bootstrap.min.js"></script> -->
<script src="<?php echo base_url(); ?>tools/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>tools/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>tools/js/custom.js"></script>


</body>
</html>
 

    

<script type="text/javascript">
  $(document).ready(function() {
    //showModal();
  $("#modalert").modal("show");
    //alert('ok');
} );

$(document).on('click', '#savearticl', function(event){
  var donne = {
    "ref" : $('#ref').val(),
    "Gencode" : $('#Gencode').val(),
    "libelle_art" : $('#libelle_art').val(),
    "secteur" : $('#secteur').val(),
    "rayon" : $('#rayon').val(),
    "famille" : $('#famille').val()
  };

  $.ajax({
    url : "<?php echo base_url().'index.php/art/addArt'?>",
    type : 'POST',
    dataType : 'JSON',
    data: donne,
    success : function(){
      alert('ok');
    }
  });
});
</script>

<script type="text/javascript">

</script>



