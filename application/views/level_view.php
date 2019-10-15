    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Level
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
                  <th style="text-align: center;">ID Level</th>
                  <th>Nama Level</th>
                  <th>Action</th>
                  <?php
                    $no=0;
                      foreach ($data_level as $level) {
                        $no++;
                        echo '
                        <tr> 
                          <td>'.$no.'</td>
                          <td style="text-align: center;">'.$level->id_level.'</td>
                          <td>'.$level->nama_level.'</td>
                          <td><a href="#update_level" class="btn btn-success" data-toggle="modal" onclick="tm_detail('.$level->id_level.')">Update</a> <a href="'.base_url('index.php/level/hapus_level/'.$level->id_level).'" class="btn btn-danger" onclick="return confirm(\'Anda Yakin?\')">Delete</a></td>
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
                <h4 class="modal-title">Tambah Level</h4>
              </div>
              <div class="modal-body">
                <form action="<?=base_url('index.php/level/simpan_level')?>" method="post" enctype="multipart/form-data">
                  Nama level 
                  <input type="text" class="form-control" name="nama_level">
                  <br>
                  <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                </form>
              </div>              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal fade in" id="update_level">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Update Level</h4>
              </div>
              <div class="modal-body">
                <form action="<?=base_url('index.php/level/update_level')?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id_level" id="id_level">
                  Nama level 
                  <input id="nama_level" type="text" name="nama_level" class="form-control"><br>
                  <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                </form>
              </div>              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<script>
  
  function tm_detail(id_level) {
    $.getJSON("<?=base_url()?>index.php/level/get_detail_level/"+id_level,function(data){
        $("#id_level").val(data['id_level']);
        $("#nama_level").val(data['nama_level']);
    });
  }

</script>