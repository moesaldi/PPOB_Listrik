<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Tagihan Anda
      </h1>      
    </section>
<!-- Main content -->
    <section class="content">
      <div class="box box-default">         
          <div class="box-body no-padding">
          	<table class="table table-striped">
                  <thead>
                    <tr>
                        <th>ID TAGIHAN</th>
                        <th>BULAN</th>
                        <th>KWH PENGGUNAAN</th>
                        <th>GRANDTOTAL</th>
                        <th>BUKTI</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                   </thead>
                   <tbody>
                    <?php foreach ($data_tagihan as $dt_tagihan) :
                        $cek_bayar=$this->tagihan->cek_pembayaran($dt_tagihan->id_tagihan);
                          switch ($dt_tagihan->bulan) {
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
                    ?>
                        <tr>
                          <td><?=$dt_tagihan->id_tagihan?></td>
                          <td><?=$bulan.' '.$dt_tagihan->tahun?></td>
                          <td><?=$dt_tagihan->jumlah_meter?></td>
                          <td><?=($dt_tagihan->tarifperkwh*$dt_tagihan->jumlah_meter+2500)?></td>
                          <td>
                            <?php
                            if(@$cek_bayar->bukti!=""){
                              echo '<img src="'.base_url().'assets/bukti/'.$cek_bayar->bukti.'" width="40">';
                            }
                            ?>
                          </td>
                          <td>
                            <?php 
                            if(@$cek_bayar->status==null){
                              echo $dt_tagihan->status;
                            } else{
                              echo $cek_bayar->status;
                            }
                            ?>  
                          </td>
                          <td>
                            <?php 
                            if(@$cek_bayar->status=='lunas'){
                              echo 'LUNAS';
                            } else{
                              echo '<a href="#upload_tagihan" data-toggle="modal" onclick=bayar('.$dt_tagihan->id_tagihan.') class="btn btn-warning">UPLOAD</a>';
                            }
                          
                            ?>
                            </td>
                        </tr>
                      <?php endforeach ?>
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

    <div class="modal fade in" id="upload_tagihan">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Upload Bukti Pembayaran</h4>
              </div>
              <div class="modal-body">
                <form method="post" action="<?=base_url('index.php/trans/upload_bukti')?>" enctype="multipart/form-data"> 
                  <input type="file" name="bukti" class="form-control"><br>
                  <input type="hidden" name="id_tagihan" id="id_tagihan">
                  <input type="submit" name="submit" value="Kirim" class="btn btn-success">
                   
                </form>
              </div>              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<script type="text/javascript">
  function bayar(id_tagihan){
    $("#id_tagihan").val(id_tagihan);
  }
</script>

