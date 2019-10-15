    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tarif
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
                  <th style="text-align: center;">Daya</th>
                  <th>Tarif PerKWH</th>                  
                  <th>Action</th>
                  <?php
                    $no=0;
                      foreach ($data_tarif as $tarif) {
                        $no++;
                        echo '<tr>
                                <td>'.$no.'</td>
                                <td style="text-align:center">'.$tarif->daya.'</td>
                                <td>'.$tarif->tarifperkwh.'</td>
                                <td><a href="#update_tarif" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$tarif->id_tarif.')">Update</a> <a href="'.base_url('index.php/tarif/hapus_tarif/'.$tarif->id_tarif).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
                             </tr>';
                      }
                  ?>
                  
              </tbody></table>
              <?php 
                  if($this->session->flashdata('pesan')!=null){
                    echo $this->session->flashdata('pesan');
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
                <h4 class="modal-title">Tambah tarif</h4>
              </div>
              <div class="modal-body">
                <form action="<?=base_url('index.php/tarif/simpan_tarif')?>" method="post" enctype="multipart/form-data">
                  Daya
                  <input type="text" class="form-control" name="daya">
                  <br>
                  Tarif PerKWH 
                  <input type="text" class="form-control" name="tarifperkwh"> <br>                 
                  <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                </form>
              </div>              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal fade in" id="update_tarif">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Update tarif</h4>
              </div>
              <div class="modal-body">
                <form action="<?=base_url('index.php/tarif/update_tarif')?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id_tarif" id="id_tarif">
                  Daya
                  <input id="daya" type="text" name="daya" class="form-control"><br>
                  Tarif PerKWH
                  <input id="tarifperkwh" type="text" name="tarifperkwh" class="form-control"><br>
                  <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                </form>
              </div>              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<script>
  
  function tm_detail(id_tarif) {
    $.getJSON("<?=base_url()?>index.php/tarif/get_detail_tarif/"+id_tarif,function(data){
        $("#id_tarif").val(data['id_tarif']);
        $("#daya").val(data['daya']);
        $("#tarifperkwh").val(data['tarifperkwh']);
    });
  }

</script>        

       