<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Histori Pembayaran
      </h1>      
    </section>
<!-- Main content -->
    <section class="content">
      <div class="box box-default">         
          <div class="box-body no-padding">
          	<table class="table table-striped">
                  <thead>
                    <tr>
                        <th>NOMOR KWH</th><th>NAMA PELANGGAN</th><th>TGL PEMBAYARAN</th><th>BULAN BAYAR</th><th>BIAYA ADMIN</th><th>TOTAL BAYAR</th><th>STATUS</th><th>BUKTI</th><th>VERFIKASI ADMIN</th>
                    </tr>
                   </thead>
                   <tbody>
                    <?php 
                     $no=0;
                      foreach ($data_histori as $histori) {
                        $data_admin=$this->admin->detail_admin(@$histori->id_admin);
                          $no++;
                          switch ($histori->bulan) {
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
                                  <td>'.$histori->nomor_kwh.'</td>
                                  <td>'.$histori->nama_pelanggan.'</td>
                                  <td>'.$histori->tanggal_pembayaran.'</td>  
                                  <td>'.$bulan.' '.$histori->tahun.'</td> 
                                  <td>'.$histori->biaya_admin.'</td> 
                                  <td>'.$histori->total_bayar.'</td>
                                  <td>'.$histori->status.'</td>
                                  <td><img src="'.base_url().'assets/bukti/'.$histori->bukti.'" width="40"></td>
                                  <td>'.@$data_admin->nama_admin.'</td>
                                  
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
