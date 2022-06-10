
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

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
<?php
    /*  if(isset($error_message))
      {
      
        echo '<script>window.location.href="creer";</script>';
      }*/
    ?>

</body>
</html>
 

    

<script type="text/javascript">

$(document).on('click', '#rechercheDossier', function(event){
  var libelle = $('#libelledossier').val();
    $.ajax({
      url : "<?php echo base_url().'index.php/art/searchDossier'?>",
      type : 'POST',
      dataType : 'JSON',
      data : {libelle:libelle},
      success : function(){
        alert('tonga');
      }
    });
});
  $(document).ready(function() {
    $('.example').DataTable();
} );

$(document).on('click', '#vider', function(event){

$.ajax({
  url : "<?php echo base_url().'index.php/art/vider'?>",
  type : 'GET',
  dataType : 'JSON',
  success : function(){
    table2.ajax.reload();
  }
});
});

//Anomalies saveAnomalie
$(document).on('click', '#saveAnomalie', function(event){
  
  var donne = {
    //gencode = $('#gencode').val(),
    "gencode" : $('#gencode').val(),
    "Libelle" : $('#Libelle').val(),
    "Quantité" : $('#Quantité').val(),
    "Date" : $('#Date').val(),
    
  };

  $.ajax({
    url : "<?php echo base_url().'index.php/art/addAno'?>",
    type : 'POST',
    dataType : 'JSON',
    data: donne,
    success : function(){
      alert('ok');
    }
  });
});


$(document).on('click', '.ajouter', function(event){

  var don = {
  'libelle' : $(this).attr('data-libelle'),
  'gencode' : $(this).attr('data-gencode'),
  'number' : $('.number').val(),
  'daty' : $('.daty').val()
};
  

  $.ajax({
    url : "<?php echo base_url().'index.php/art/sess'?>",
    type : 'POST',
    dataType : 'JSON',
    data: don,
    success : function(result){
      table2.ajax.reload();
    }
  });
});
</script>
<script>
var table2 = $("#tableresult")
    .DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      "ajax" : {
        url : "<?php echo base_url().'index.php/art/tabletemp'?>",
        type : 'GET'
      }
    });



  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })

  $(function () {
    $('#table4').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

<script type="text/javascript">
  function Apoitra(){
    $("#modalefacture").modal("show");
  }
</script>

<script type="text/javascript">
  function showModal() {
    $("#userseModal").modal("show");

  }

  $("body").on("click","#users",function(e){
    e.preventDefault();

    $.ajax({
      url: '<?php echo base_url().'index.php/pages/savecreate'?>',
      type: "POST",
      data:{},
      dataType: 'json',
      success: function(response){

      }
    })
  })

</script>


<script type="text/javascript">
  function enregistre();{
    alert('hello');
    $("#ajaxalert").modal("show");
  }
    
</script>


<script>
  $(function () {
    "use strict";

    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '400', a: 100, b: 90},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75, b: 65},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });
  });
</script>

<script type="text/javascript">
//Rayon
  function showModal() {
    $("#modalrayon").modal("show");
    $("#modalrayon #title").html('Ajouter');
    $("#modalrayon .modal-title").html('Ajouter');

    $.ajax({
      url: "<?php echo base_url().'index.php/school/create_rayon'?>",
      type: 'POST',
      data:{},
      dataType: 'json',
      success: function(response){
        $("#response").html(response["html"]);
      }

    })
  }
  $("body").on('submit',"#Ajoute-ray",function(e){
    e.preventDefault();
    
    $.ajax({
      url: "<?php echo base_url().'index.php/school/ajout_rayon'?>",
      type: 'POST',
      data:$(this).serializeArray(),
      dataType: 'json',
      success: function(response){
        if(response['status'] == 0){
          if(response['ray_ray'] != 0){
            $(".rayon_Error").html(response['ray_ray']).addClass('invalid-feedback d-block');
            $("#ray_ray").addClass('id-invalid');
          }else{
            $(".rayon_Error").html("").removeClass('invalid-feedback d-block');
            $("#ray_ray").removeClass('id-invalid');
          }
          if(response['libelle_ray'] != 0){
            $(".libelleError").html(response['libelle_ray']).addClass('invalid-feedback d-block');
            $("#libelle_ray").addClass('id-invalid');
          }else{
            $(".libelleError").html("").removeClass('invalid-feedback d-block');
            $("#libelle_ray").removeClass('id-invalid');
          }
          if(response['sect_sect'] != 0){
            $(".SectError").html(response['sect_sect']).addClass('invalid-feedback d-block');
            $("#sect_sect").addClass('id-invalid');
          }else{
            $(".SectError").html("").removeClass('invalid-feedback d-block');
            $("#sect_sect").removeClass('id-invalid');
          }
        }else{

          $("#modalrayon").modal("hide");
          $("#ajaxResponseM .modal-body").html(response["message"]);  
          $("#ajaxResponseM").modal("show");           

          $(".rayon_Error").html("").removeClass('invalid-feedback d-block');
          $("#ray_ray").removeClass('id-invalid');

          $(".libelleError").html("").removeClass('invalid-feedback d-block');
          $("#libelle_ray").removeClass('id-invalid');

          $(".SectError").html("").removeClass('invalid-feedback d-block');
          $("#sect_sect").removeClass('id-invalid');
        }
      }
    });
  });
  function showeditform(id){
    
    $("#modalrayon .modal-title").html('edit');
    $.ajax({
      url: "<?php echo base_url().'index.php/school/edit_rayon/'?>"+id,
      type: 'POST',
      data :{},
      dataType: 'json',
      success: function(response){
        $("#modalrayon #response").html(response["html"]);
        $("#modalrayon").modal('show');
      }

    });
  };

</script>

<script type="text/javascript">
  function famiz(){
      $("#modalfamille").modal("show");
      $("#modalfamille #title").html('create');
  }

  $("body").on('submit',"#Ajoute-famille",function(e){
    e.preventDefault();
    $.ajax({
      url: "<?php echo base_url().'index.php/school/ajout_famille'?>",
      type: 'POST',
      data:$(this).serializeArray(),
      dataType: 'json',
      success: function(response){
        if(response['status'] == 0){
          if(response['fam_fam'] != 0){
            $(".fam_Error").html(response['fam_fam']).addClass('invalid-feedback d-block');
            $("#fam_fam").addClass('id-invalid');
          }else{
            $(".fam_Error").html("").removeClass('invalid-feedback d-block');
            $("#fam_fam").removeClass('id-invalid');
          }
          if(response['libelle_fam'] != 0){
            $(".libe_Error").html(response['libelle_fam']).addClass('invalid-feedback d-block');
            $("#libelle_fam").addClass('id-invalid');
          }else{
            $(".libe_Error").html("").removeClass('invalid-feedback d-block');
            $("#libelle_fam").removeClass('id-invalid');
          }
          if(response['ray_ray'] != 0){
            $(".ray_Error").html(response['ray_ray']).addClass('invalid-feedback d-block');
            $("#ray_ray").addClass('id-invalid');
          }else{
            $(".ray_Error").html("").removeClass('invalid-feedback d-block');
            $("#ray_ray").removeClass('id-invalid');
          }
        }else{

          $("#modalfamille").modal("hide");
          $("#ajaxResponseM .modal-body").html(response["message"]);  
          $("#ajaxResponseM").modal("show");           

          $(".rayon_Error").html("").removeClass('invalid-feedback d-block');
            $("#fam_fam").removeClass('id-invalid');

            $(".id_Error").html("").removeClass('invalid-feedback d-block');
            $("#libelle_fam").removeClass('id-invalid');


            $(".SectError").html("").removeClass('invalid-feedback d-block');
            $("#ray_ray").removeClass('id-invalid');
        }
      }
    });
  });

  function getfamiz(id)
  {

    $("#modalefamille ").modal("show");
    $("#modalefamille #title").html('create');

    $.ajax({
      url: "<?php echo base_url().'index.php/school/getfamille/'?>"+id,
      type: 'POST',
      dataType: 'json',
      success: function(response){
        $("#response").html(response["html"]);
      }
  });

}
  
</script>

<script type="text/javascript">
  function showsect(){
      $("#modalsect").modal("show");
      $("#modalsect #title").html('create');
  }

  $("body").on('submit',"#Ajoute-secteur",function(e){
    e.preventDefault();

    $.ajax({
      url: "<?php echo base_url().'index.php/school/ajout_secteur'?>",
      type: 'POST',
      data:$(this).serializeArray(),
      dataType: 'json',
      success: function(response){
        if(response['status'] == 0){
          if(response['sect_sect'] != 0){
            $(".sect_Error").html(response['sect_sect']).addClass('invalid-feedback d-block');
            $("#sect_sect").addClass('id-invalid');
          }else{
            $(".sect_Error").html("").removeClass('invalid-feedback d-block');
            $("#sect_sect").removeClass('id-invalid');
          }
          if(response['libelle_sect'] != 0){
            $(".libe_Error").html(response['libelle_sect']).addClass('invalid-feedback d-block');
            $("#libelle_sect").addClass('id-invalid');
          }else{
            $(".libe_Error").html("").removeClass('invalid-feedback d-block');
            $("#libelle_sect").removeClass('id-invalid');
          }
          
        }else{

          $("#modalsect").modal("hide");
          $("#ajaxResponseM .modal-body").html(response["message"]);  
          $("#ajaxResponseM").modal("show");           

          $(".fam_Error").html("").removeClass('invalid-feedback d-block');
            $("#sect_sect").removeClass('id-invalid');

            $(".libe_Error").html("").removeClass('invalid-feedback d-block');
            $("#libelle_sect").removeClass('id-invalid');

        }
      }
    });
  });
  
</script>

<script type="text/javascript">
  function showuser(){
    $("#userseModal").modal("show");

  }
    $("body").on('submit',"#users",function(e){
    e.preventDefault();
    alert('hello');
    $.ajax({
      url: "<?php echo base_url().'index.php/pages/savecreate'?>",
      type: 'POST',
      data:$(this).serializeArray(),
      dataType: 'json',
      success: function(response){
        if(response['status'] == 0){
          if(response['name'] != 0){
            $(".name_Error").html(response['name']).addClass('invalid-feedback d-block');
            $("#name").addClass('id-invalid');
          }else{
            $(".name_Error").html("").removeClass('invalid-feedback d-block');
            $("#name").removeClass('id-invalid');
          }
          if(response['email'] != 0){
            $(".email_Error").html(response['email']).addClass('invalid-feedback d-block');
            $("#email").addClass('id-invalid');
          }else{
            $(".email_Error").html("").removeClass('invalid-feedback d-block');
            $("#email").removeClass('id-invalid');
          }
          if(response['password'] != 0){
            $(".password_Error").html(response['password']).addClass('invalid-feedback d-block');
            $("#password").addClass('id-invalid');
          }else{
            $(".password_Error").html("").removeClass('invalid-feedback d-block');
            $("#password").removeClass('id-invalid');
          }
          
        }else{

          $("#userseModal").modal("hide");
          $("#ajaxResponseM .modal-body").html(response["message"]);  
          $("#ajaxResponseM").modal("show");           

          $(".name_Error").html("").removeClass('invalid-feedback d-block');
            $("#name").removeClass('id-invalid');

            $(".email_Error").html("").removeClass('invalid-feedback d-block');
            $("#email").removeClass('id-invalid');

            $(".password_Error").html("").removeClass('invalid-feedback d-block');
            $("#password").removeClass('id-invalid');

        }
      }
    });


  });

 

</script>