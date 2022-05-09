   
   	 <!-- Content Header (Page header) -->
    <section class="content-header container-fluid">
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin-dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Users List View</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="box" style="border-color: #605ca8;">
            <div class="box-header">
              <a href="<?php echo site_url('users-register-form') ?>" class="btn bg-purple"><i class="fa fa-plus"></i> Add New User</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>User Name</th>
                  <th>User Level</th>
                  <th>User Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no =1; foreach ($users as $u){ ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->user_name ?></td>
                      <td><?php echo $u->user_level ?></td>
                      <td><?php echo $u->user_status ?></td>
                      <td>
                        <a href="<?php echo site_url('users-edit-form/'.$u->user_slug); ?>" class="btn bg-purple btn-xs"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger btn-xs" data-toggle="modal" href="#delete" onclick="set_url('<?php echo site_url('users/delete/'.$u->user_id); ?>');"><i class="fa fa-trash"></i></a>
                      </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  
  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h6>Are You Sure Want To <b>Delete</b> This Record ?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <a class="btn text-white bg-purple" id="btn-yes">Yes</a>
      </div>
      </div>
    </div>
  </div>