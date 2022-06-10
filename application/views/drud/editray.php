<form method="post" action="<?php echo base_url().'index.php/school/edit_rayon'; ?>+id" id="Ajoute-ray" name="Ajoute-ray">
    <div class="modal-body">
              
    
        <div class="form-group">
            <label>ray_ray</label>
            <input type="number" class="form-control" name="ray_ray" id="ray_ray" value="<?php echo $row[0]['ray_ray']?>" placeholder="Entere le rayon">
            <p class="rayon_Error"></p>
        </div>
        <div class="form-group">
            <label>Idef_ray</label>
            <input type="number" class="form-control"  name="id_ray" id="id_ray" value="<?php echo $row[0]['id_ray']?>" placeholder="Entere le identifiant">
            <p class="id_Error"></p>
        </div>
            <div class="form-group">
            <label>libelle_ray</label>
            <input type="text" class="form-control" name="libelle_ray" id="libelle_ray" value="<?php echo $row['libelle_ray']?>" placeholder="Entere le nom">
            <p class="libelleError"></p>
        </div>
        <div class="form-group">
            <label>sect_sect</label>
            <input type="number" class="form-control"  name="sect_sect" id="sect_sect" value="<?php echo $row['sect_sect']?>" placeholder="Entere le id">
            <p class="SectError"></p>
        </div>
        <div class = "modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save</button>
    </div>
    
    </div>
</form>