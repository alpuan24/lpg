 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="container-fluid">
    <H2><center> FORMULIR AGEN</center></H2><br><br>

	  <div class="row">
	    <div class="col-sm-12">
        <div>
          <div class="form-group">
            <label>NIAP</label>
            <input class="form-control" placeholder="Isikan NIAP" readonly />
          </div>

          <div class="form-group">
            <label>NAMA AGEN</label>
            <!--<input type="text" class="form-control" placeholder="Nama Agen" required />-->
            <input type="text" class="form-control" name="namaAgen" value="<?php $namaAgen; ?>" />
          </div>

          <div class="form-group">
            <label>ALAMAT</label>
            <!--<input type="text" class="form-control" placeholder="Nama Agen" required />-->
            <input type="text" class="form-control" name="alamat" value="<?php $alamat; ?>" />
          </div>

          <div class="form-group">
            <label>NAMA PIMPINAN</label>
            <!--<input type="text" class="form-control" placeholder="Nama Agen" required />-->
            <input type="text" class="form-control" name="penjab" value="<?php $penjab; ?>" />
          </div>

         <br>
          <p> )*Pastikan semua data sudah terisi dengan benar <p>
          <div class="form-group">
            <a class="btn btn-primary" style="background-color:#228B22" id="simpanEvent">Simpan</a>
          </div>

        </div>
	    </div>
	  </div>
  </div>
  <div class="row">
	<div class="col-sm-12">
		<div id="listEvent"></div>
	</div>
  </div>

</body>
</html> 