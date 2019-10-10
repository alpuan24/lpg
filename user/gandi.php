<!-- FORM ANGGOTA -->
<?php

	$id  = $_GET['id'];
	
	// fungsi tampil($kolom,$tabel,$kondisi,$urut,$baris)
	$data = $cit->tampil("*","tabeluser","id = '$id'","nama",0);
	
	//print_r($data);
	// outputnya Array ( [0] => Array ( [nomor] => 1 [nama] => Abdulah Jongos ) )
	
	$id = $data[0]['id'];
	$user  =  $data[0]['user'];
	$password  =  '';

?>

<form action="user/gantisandi.php" method="POST">
	
	<div class="form-group" style="display:none;">
		<label>ID</label>
		<input type="text" class="form-control" name="id" 
		value="<?php echo $id; ?>" readonly/>
	</div>
	
	<div class="form-group">
		<label>User</label>
		<input type="text" class="form-control" name="user" 
		value="<?php echo $user; ?>" />
	</div>

	<div class="form-group">
		<label>Password Baru</label>
		<input type="password" class="form-control" name="password" id="p1"
		value="<?php echo $password; ?>" />
	</div>

	<div class="form-group">
		<label>Konformasi Password</label>
		<input type="password" class="form-control" name="password2" id="p2"
		value="<?php echo $password; ?>" />
	</div>

    <div class="form-control">
        <label id="pascok"></label>
    </div>

	<div style="text-align:right">
		<input type="submit" value="Simpan" class="btn btn-primary" />
	</div>
</form>

<script>
$(document).ready( function(){
    $('#p2').keyup( function(){
        let p1 = $('#p1').val();
        let p2 = $('#p2').val();
        if( p2.length < p1.length ){
            $('#pascok').html('sandi belum sesuai');
        }else if(p2.length == p1.length){
            $('#pascok').html('Kata sandi sesuai .. !');
        }else{
            $('#pascok').html('sandi terlalu panjang');
        }
    })
})
</script>