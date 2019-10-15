    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
      </h1>      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
          <div class="box-header">
            <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="fa fa-plus"></span> Tambah</a>
          </div>
          <div class="box-body no-padding">
            <table class="table table-striped">
                <tbody>
                  <tr>
                  <th style="width: 10px;">NO</th>
                  <th style="text-align: center;">ID Admin</th>
                  <th>Nama Admin</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Admin</th>
                  <th>Action</th>
                  <?php
                    $no=0;
                      foreach ($data_admin as $admin) {
                        $no++;
                        echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$admin->id_admin.'</td>
                                <td>'.$admin->nama_admin.'</td>
                                <td>'.$admin->username.'</td>
                                <td>'.$admin->password.'</td>
                                <td>'.$admin->nama_level.'</td>
                                <td><a href="#update_admin" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$admin->id_admin.')">Update</a> <a href="'.base_url('index.php/admin/hapus_admin/'.$admin->id_admin).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
                             </tr>';
                      }
                  ?>
                  
              </tbody></table>
              <?php 
                  if($this->session->flashdata('pesan')!=null){
                    echo '<div class="alert alert-danger">'.$this->session->flashdata('pesan').'</div>';
                  }
                ?>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>

    <div class="modal fade in" id="tambah">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Tambah Admin</h4>
              </div>
              <div class="modal-body">
                <form action="<?=base_url('index.php/admin/simpan_admin')?>" method="post" enctype="multipart/form-data">
                  Nama admin 
                  <input type="text" class="form-control" name="nama_admin">
                  <br>
                  Username 
                  <input type="text" class="form-control" name="username">
                  <br>
                 Password
                  <input type="text" class="form-control" name="password">
                  <br>
                  Level 
                  <select name="id_level" class="form-control">
                      <option></option>
                      <?php foreach ($data_level as $level): ?>
                          <option value="<?=$level->id_level?>"><?=$level->nama_level?></option>
                      <?php endforeach ?>
                  </select>
                  <br>
                  <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                </form>
              </div>              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal fade in" id="update_admin">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Update Admin</h4>
              </div>
              <div class="modal-body">
                <form action="<?=base_url('index.php/admin/update_admin')?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id_admin" id="id_admin">
                  Nama admin 
                  <input id="nama_admin" type="text" name="nama_admin" class="form-control"><br>
                  <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                </form>
              </div>              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<script>
  
  function tm_detail(id_admin) {
    $.getJSON("<?=base_url()?>index.php/admin/get_detail_admin/"+id_admin,function(data){
        $("#id_admin").val(data['id_admin']);
        $("#nama_admin").val(data['nama_admin']);
    });
  }

</script>        

       