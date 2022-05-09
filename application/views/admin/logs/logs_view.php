   
     <!-- Content Header (Page header) -->
    <section class="content-header container-fluid">
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin-dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Logs View</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <form method="post" action="<?php echo base_url('logs/delete_all') ?>" id="form-delete">
      <div class="box" style="border-color: #605ca8;">
        <div class="box-header">
            <button type="button" id="btn-delete" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"> Delete All</i></button>
        </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <?php foreach($logs as $os){
                  if ($os=="") { ?>
                    <th></th>
                  <?php 
                 }else{ ?>
                    <th><input type="checkbox" id="check-all" name="check-all"></th>
                  <?php }} ?>

                  <th>No</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Action</th>
                  <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <?php $no =1; foreach ($logs as $u){ ?>
                  <tr>
                      <td><input type="checkbox" class='check-item' id="id" name="id[]" value="<?php echo $u->log_code ?>"><div><?php echo form_error('id') ?></div></td>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->user_name ?></td>
                      <td><?php echo $u->log_date ?> <?php echo $u->log_time ?></td>
                      <td><?php echo $u->log_action ?></td>
                      <td><?php echo $u->log_description ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </form>
    </section>
    <!-- /.content -->
  
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="log" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
      <h6>Are You Sure Want To <b>Delete</b> This Record ?</h6>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      <a class="btn btn-primary text-white" id="btnYes">Yes</a>
    </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){ 
  $("#check-all").click(function(){ 
    if($(this).is(":checked")) 
      $(".check-item").prop("checked", true); 
    else 
      $(".check-item").prop("checked", false); 
  });
  
 $('#delete').on('show', function() {
    var link = $(this).data('link'),
        confirmBtn = $(this).find('.confirm');
  })

 $('#btnYes').click(function() {    
    $('#form-delete').submit(); 
  });

});
</script>

<script>
  $(document).ready(function() {

    if($("input[name='id[]']:checked").val()){
        $('#btn-delete').removeAttr('disabled');
    } else {
        $('#btn-delete').attr('disabled','disabled'); 
    }

    $('input:checkbox[name="id\[\]"]').click(function() {
        if (!$(this).is(':checked')) {
            $('#btn-delete').attr('disabled','disabled'); 
            $('#btn-delete').val('');
        } else {
            $('#btn-delete').removeAttr('disabled');
        }
    });
});
</script>

<script>
  $(document).ready(function() {

    if($("input[name='check-all']:checked").val()){
        $('#btn-delete').removeAttr('disabled');
    } else {
        $('#btn-delete').attr('disabled','disabled'); 
    }

    $('input:checkbox[name="check-all"]').click(function() {
        if (!$(this).is(':checked')) {
            $('#btn-delete').attr('disabled','disabled'); 
            $('#btn-delete').val('');
        } else {
            $('#btn-delete').removeAttr('disabled');
        }
    });
});
</script>

