<?php

$profil = $agen->profil($_SESSION['niap']);
// print_r($profil);

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">&nbsp;</div>
        <div class="col-sm-6">
            <h2>PROFIL PERUSAHAAN</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>NIAP</td>
                        <td id="prfNiap"><?=$profil['niap'];?></td>
                    </tr>
                    <tr>
                        <td>NAMA PERUSAHAAN</td>
                        <td id="prfNagn"><?=$profil['namaAgen'];?></td>
                    </tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td id="prfAlmt"><?=$profil['alamat'];?></td>
                    </tr>
                    <tr>
                        <td>PIMPINAN</td>
                        <td id="prfPimp"><?=$profil['penjab'];?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <button class="btn btn-primary" id="editProfil"  data-toggle="modal" data-target="#agenModal">Edit Profil</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">&nbsp;</div>
    </div>
</div>

<!-- modal profil perusahaan -->
<!-- Modal -->
<div id="agenModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PROFIL PERUSAHAAN</h4>
      </div>
      <div class="modal-body">
        <form action="aksi-profil.php" method="post" class="form-horizontal">
        <input type="hidden" name="niap" value="<?=$_SESSION['niap'];?>">
            <div class="form-group">
                <label for="namaAgen" class="col-sm-4">Nama Perusahaan</label>
                <div class="col-sm-8">
                    <input type="text" name="namaAgen" id="fag_namaAgen" class="form-control" value="<?=$profil['namaAgen'];?>">
                </div>
            </div>
            
            <div class="form-group">
                <label for="alamat" class="col-sm-4">Alamat</label>
                <div class="col-sm-8">
                    <input type="text" name="alamat" id="fag_alamat" class="form-control" value="<?=$profil['alamat'];?>">
                </div>
            </div>

            <div class="form-group">
                <label for="pimpinan" class="col-sm-4">Pimpinan</label>
                <div class="col-sm-8">
                    <input type="text" name="pimpinan" id="fag_pimpinan" class="form-control" value="<?=$profil['penjab'];?>">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>

  </div>
</div>
<!-- modal profil perusahaan -->