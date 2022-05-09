   
   	 <!-- Content Header (Page header) -->
    <section class="content-header container-fluid">
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin-dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo site_url('users-list') ?>">User List View</a></li>
        <li class="active">Users Register Form</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">

        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-color: #605ca8;">

            <!-- form start -->
            <form action="<?php echo site_url('users/save') ?>" method="post" role="form" id="validation">
              <div class="box-body">
                  <div class="row">
                      <div class="col-xs-2 form-group">
                        <label>User ID</label>
                        <input type="text" class="form-control" placeholder="User ID" name="user_id" value="<?php echo $user_id; ?>" readonly>
                      </div>
                      <div class="col-xs-3 form-group">
                        <label>User Name</label>
                        <input type="email" class="form-control user_name" placeholder="User Name" name="user_name">
                      </div>
                      <div class="col-xs-3 form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="user_password">
                      </div>
                      <div class="col-xs-2 form-group">
                        <label>User Level</label>
                        <select class="form-control" name="user_level">
                          <option value=""> -- Select -- </option>
                          <option>Administrator</option>
                          <option>Receptionist</option>
                          <option>Engineer</option>
                        </select>
                      </div>
                      <div class="col-xs-2 form-group">
                        <label>User Status</label>
                        <select class="form-control" name="user_status">
                          <option value=""> -- Select -- </option>
                          <option>Active</option>
                          <option>Block</option>
                        </select>
                      </div>
                  </div>
                  <input type="hidden" name="slug" class="form-control preview_slug" placeholder="Clean Url" readonly>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('users-list') ?>" class="btn btn-default"> Back</a>
                <button type="submit" class="btn bg-purple">Save</button>
              </div>
            </form>

          </div>
          <!-- /.box -->
        </div>

      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->



<script>
    $(document).ready(function() {
    $('#validation').bootstrapValidator({
        fields: {
            container: '#messages',
            user_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter user name'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            container: '#messages',
            user_password: {
                validators: {
                    notEmpty: {
                        message: 'Please enter password'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The username must be more than 6 caracter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                },
            },
            container: '#messages',
            user_level: {
                validators: {
                    notEmpty: {
                        message: 'Please select user level'
                    }
                }
            },
            container: '#messages',
            user_status: {
                validators: {
                    notEmpty: {
                        message: 'Please select user status'
                    }
                }
            },
        },
    });
});
</script>

<script type="text/javascript">
  var slug = function(str) {
      var $slug = '';
      var trimmed = $.trim(str);
      $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
      replace(/-+/g, '-').
      replace(/^-|-$/g, '');
      return $slug.toLowerCase();
  }
  $('.user_name').on('keyup',function(){
    $('.preview_slug').val(slug($(this).val()));
  });
</script>