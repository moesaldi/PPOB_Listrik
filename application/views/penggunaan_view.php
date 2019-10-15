    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Penggunaan
      </h1>      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">         
          <div class="box-body no-padding">
            <table class="table table-striped">
              <thead>
                    <tr>
                        <th>PELANGGAN</th>
                        <th>NOMOR KWH</th>
                        <th>DAYA</th>
                        <th>ACTION</th>
                    </tr>
              </thead>
                <tbody>                  
                  <?php
                    $no=0;
                      foreach ($data_penggunaan as $penggunaan) {
                        $no++;
                        echo '<tr>
                                  <td>'.$penggunaan->nama_pelanggan.'</td>
                                  <td>'.$penggunaan->nomor_kwh.'</td>
                                  <td>'.$penggunaan->daya.'</td>
                                  <td><a href="'.base_url('index.php/penggunaan/tambah_guna/'.$penggunaan->id_pelanggan).'" class="btn btn-success">Tambah penggunaan</a> <a href="'.base_url('index.php/penggunaan/get_detail_Penggunaan/'.$penggunaan->id_pelanggan).'" class="btn btn-info">Detail penggunaan</a> <a href="'.base_url('index.php/penggunaan/get_detail_tagihan/'.$penggunaan->id_pelanggan).'" class="btn btn-primary">Detail Tagihan</a></td>
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
