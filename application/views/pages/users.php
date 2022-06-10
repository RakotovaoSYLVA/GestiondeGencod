<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Tables
        <small>Informations tables</small>
      </h1>
    </section>
    <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="userseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajouter</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="" id="users">
                <div class="form-group">
                  <label>Name</label>
                  <input type="number" class="form-control"  name="name" id="name" placeholder="Entere le id">
                  <p class="name_Error"></p>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control"  name="email" id="email" placeholder="Entere le nom">
                  <p class="email_Error"></p>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control"  name="password" id="password" placeholder="Entere le identifiant">
                  <p class="password_Error"></p>
                </div>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" value="save">Save</button>
              </form>
            
          </div>
        </div>
      </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Table User (<?php echo sizeof($use); ?>)</h3>
              <a href="javascript:void(0);" onclick="showuser();" class="btn btn-success pull-right">
                    Ajouter
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Num</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Created</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php if(!empty($use)){?>
                    
                    <?php
                    $i=0;
                      foreach ($use as $cat)
                      {
                    
                    ?>
                    <tr>
                      <td><?php echo $cat['Num']; ?></td> 
                      <td><?php echo $cat['name'];?></td> 
                      <td><?php echo $cat['email'];?></td>
                      <td><?php echo $cat['password'];?></td>
                      <td><?php echo $cat['create_ad'];?></td>
                      

                      <td class="center">
                        <button type="submit" id="delete_ray" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        <a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                  <?php 
                     }
                  ?>
                  <?php } else { ?>
                    <tr>
                      <td>record not found</td>
                    </tr>
                    <?php }  ?>
                </tbody>  
                    <tfoot>
                        <tr>
                          <th>Num</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Created</th>
                          <th>Action</th>

                        </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        </div>
     
      </section>


      <!-- Button trigger modal -->
      <!-- Alert -->
      <div class="modal fade" id="ajaxResponseM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body">
              </div>
              <div class = "modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            
          </div>
        </div>
      </div>


