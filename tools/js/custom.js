$('#Ajoute-ean').submit(function() {
    ean_ean = $('#ean_ean').val();
    id_ean = $('#id_ean').val();
    primaire = $('#primaire').val();
    cat_ean = $('#cat_ean').val();

    url = $(this).attr('action');
    $.post(url, { 'ean_ean': ean_ean }, { 'id_ean': id_ean }, { 'primaire': primaire }, { 'cat_ean': cat_ean }, function(fb) {
        if (fb.match('1')) {
            alert('Ajout au succes!');
            setTimeout(function() {
                location.reload();
            }, 2000);
        } else {
            alert(fb)
        }
    });
    return false;
});


$('#update_ean').submit(function() {
    ean_ean = $('#ean_ean').val();
    id_ean = $('#id_ean').val();
    primaire = $('#primaire').val();
    cat_ean = $('#cat_ean').val();

    url = $(this).attr('action');
    $.post(url, { 'ean_ean': ean_ean }, { 'id_ean': id_ean }, { 'primaire': primaire }, { 'cat_ean': cat_ean }, function(fb) {
        alert(fb);
    });
    return false;
});

$('#Ajoute-sect').submit(function() {
    sect_sect = $('#sect_sect').val();
    libelle_sect = $('#libelle_sect').val();
    id_sect = $('#id_sect').val();

    url = $this.attr('action');
    $.post(url, { 'sect_sect': sect_sect }, { 'libelle_sect': libelle_sect }, function(fb) {
        if (fb.match('1')) {
            alert('Ajout au succes!');
            setTimeout(function() {
                location.reload();
            }, 2000);
        } else {
            alert(fb);
        }
    });
    return false;
});

$('#delete_sect').submit(function() {
    var sect_sect = $('#sect_sect').val();
    var libelle_sect = $('#libelle_sect').val();
    var id_sect = $('#id_sect').val();

    $.ajax({
        url: "<?php echo base_url().'index.php/school/delete_secteur/'.$cat['sect_sect'];?>",
        type: 'POST',
        dataType: 'json',
        data: {},
        succes = function() {
            alert('vous voulez vraiment suppremer ?');
        }
    })

})

$('#ajouter_rayon').submit(function() {
    alert('hello');
    $("#modalrayon").modal('show');

})



$('#delete_ray').submit(function() {

})

$("body").on('submit', "#ajouarticle", function(e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url().'index.php/school/ajoutart'?>",
        type: 'POST',
        data: $(this).serializeArray(),
        dataType: 'json',
        success: function(response) {
            if (response['status'] == 0) {
                if (response['ref_ean'] != 0) {
                    $(".ref_Error").html(response['ref_ean']).addClass('invalid-feedback d-block');
                    $("#ref_ean").addClass('id-invalid');
                } else {
                    $(".ref_Error").html("").removeClass('invalid-feedback d-block');
                    $("#ref_ean").removeClass('id-invalid');
                }
                if (response['Gencode'] != 0) {
                    $(".Gen_Error").html(response['Gencode']).addClass('invalid-feedback d-block');
                    $("#Gencode").addClass('id-invalid');
                } else {
                    $(".Gen_Error").html("").removeClass('invalid-feedback d-block');
                    $("#Gencode").removeClass('id-invalid');
                }
                if (response['libelle_art'] != 0) {
                    $(".libe_Error").html(response['libelle_art']).addClass('invalid-feedback d-block');
                    $("#libelle_art").addClass('id-invalid');
                } else {
                    $(".libe_Error").html("").removeClass('invalid-feedback d-block');
                    $("#libelle_art").removeClass('id-invalid');
                }

            } else {


                $(".ref_Error").html("").removeClass('invalid-feedback d-block');
                $("#Gencode").removeClass('id-invalid');

                $(".Gen_Error").html("").removeClass('invalid-feedback d-block');
                $("#Gencode").removeClass('id-invalid');

                $(".libe_Error").html("").removeClass('invalid-feedback d-block');
                $("#libelle_art").removeClass('id-invalid');
            }
        }
    });

})