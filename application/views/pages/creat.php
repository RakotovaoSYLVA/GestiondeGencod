
                
              <form method="post" action="<?php echo base_url().'index.php/pages/users';?>" id="users">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" required = "required" id="name" placeholder="Entere votre nom">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" required = "required" id="email" placeholder="Entere votre email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control"  name="password" id="password" placeholder="Entere le identifiant">
                </div>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save</button>
</form>