<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Detail Tagihan <?=$data_pelanggan->nama_pelanggan?>
      </h1>      
    </section>
<!-- Main content -->
    <section class="content">
      <div class="box box-default">         
          <div class="box-body no-padding">
          	<table class="table table-striped">
                  <thead>
                    <tr>
                        <th>BULAN</th><th>TAHUN</th><th>TOTAL PENGGUNAAN</th><th>STATUS</th>
                    </tr>
                   </thead>
                   <tbody>
                    <?php 
                     $no=0;
                      foreach ($data_detail as $penggunaan) {
                          $no++;
                          switch ($penggunaan->bulan) {
                            case '1':$bulan="Januari";break;
                            case '2':$bulan="Februari";break;
                            case '3':$bulan="Maret";break;
                            case '4':$bulan="April";break;
                            case '5':$bulan="Mei";break;
                            case '6':$bulan="Juni";break;
                            case '7':$bulan="Juli";break;
                            case '8':$bulan="Agustus";break;
                            case '9':$bulan="September";break;
                            case '10':$bulan="Oktober";break;
                            case '11':$bulan="November";break;
                            case '12':$bulan="Desember";break;
                            default:
                              "bukan Nama Bulan";
                              break;
                          }
                          echo '<tr>
                                  <td>'.$bulan.'</td>
                                  <td>'.$penggunaan->tahun.'</td>
                                  <td>'.$penggunaan->jumlah_meter.'</td>  
                                  <td>'.$penggunaan->status.'</td>  
                               </tr>';
                      }
                      ?>
                   </tbody>
                   
                    
                 </table>


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
