<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Penggunaan
      </h1>      
    </section>
<!-- Main content -->
    <section class="content">
      <div class="box box-default">         
          <div class="box-body no-padding">
          	<form action="<?=base_url('index.php/penggunaan/simpan')?>" method="post">            
                <table class="table table-hover table-striped">
                    <tr>
                        <td>NAMA PELANGGAN</td><td>
                          <input type="hidden" name="id_pelanggan" value="<?=$data_penggunaan->id_pelanggan?>">
                          <?=$data_penggunaan->nama_pelanggan?></td>
                    </tr>
                    <tr>
                        <td>BULAN</td><td>
                          <?php 
                          $arr_bulan=array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                          ?>
                          <select name="bulan" class="form-control">
                            <option></option>
                            <?php foreach ($arr_bulan as $key => $bulan): ?>
                              <option value="<?=$key?>"><?=$bulan?></option>
                            <?php endforeach ?>
                          </select>
                        </td>
                    </tr>
                    <tr>
                        <td>TAHUN</td><td>
                          <select class="form-control" name="tahun">
                            <option></option>
                            <?php 
                          for($i=2019;$i<2025;$i++){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                          }
                          ?>
                          </select>
                        </td>
                    </tr>
                    <tr>
                        <td>METER AWAL</td><td><input type="number" name="meter_awal" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>METER AKHIR</td><td><input type="number" name="meter_akhir" class="form-control"></td>
                    </tr> 
                    <tr>
                        <td></td><td><input type="submit" name="kirim" class="btn btn-success"></td>
                    </tr> 
                 </table>
                 </form>  
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
