<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Payment Verification
      </h1>      
    </section>
<!-- Main content -->
    <section class="content">
      <div class="box box-default">         
          <div class="box-body no-padding">
          	<table class="table table-striped">
                  <thead>
                    <tr>
                        <th>NOMOR KWH</th><th>NAMA PELANGGAN</th><th>TGL PEMBAYARAN</th><th>BULAN BAYAR</th><th>BIAYA ADMIN</th><th>TOTAL BAYAR</th><th>STATUS</th><th>BUKTI</th><th>VERFIKASI ADMIN</th><th>AKSI</th>
                    </tr>
                   </thead>
                   <tbody>
                    <?php 
                     $no=0;
                      foreach ($data_pembayaran as $pembayaran) {
                        $data_admin=$this->admin->detail_admin(@$pembayaran->id_admin);
                          $no++;
                          switch ($pembayaran->bulan) {
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
                                  <td>'.$pembayaran->nomor_kwh.'</td>
                                  <td>'.$pembayaran->nama_pelanggan.'</td>
                                  <td>'.$pembayaran->tanggal_pembayaran.'</td>  
                                  <td>'.$bulan.' '.$pembayaran->tahun.'</td> 
                                  <td>'.$pembayaran->biaya_admin.'</td> 
                                  <td>'.$pembayaran->total_bayar.'</td>
                                  <td>'.$pembayaran->status_bayar.'</td>
                                  <td><img src="'.base_url().'assets/bukti/'.$pembayaran->bukti.'" width="40"></td>
                                  <td>'.@$data_admin->nama_admin.'</td>
                                  <td><div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                      Aksi
                                    <span class="caret"></span>
                                  </button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="'.base_url().'index.php/verification/verificated/'.$pembayaran->id_pembayaran.'/'.$pembayaran->id_tagihan.'/lunas">Lunas</a></li>
                                      <li><a href="'.base_url().'index.php/verification/verificated/'.$pembayaran->id_pembayaran.'/'.$pembayaran->id_tagihan.'/ditolak">Ditolak</a></li>
                                    </ul></div>
                                  </td>
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
