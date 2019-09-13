<div class="container-fluid">
    <div class="row" style="margin-top:25px;">
        <form action="aksi-distribusi.php" method="post" class="form-inline">
        <!-- tanggal,idPangkalan,jumlah -->
        <div class="form-group">
            <label for="tanggal">Tanggal: </label>
            <input type="date" name="tanggal" id="tanggal" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="tanggal">ID Pangkalan</label>
            <input type="text" name="pangkalan" id="pangkalan" class="form-control"
            placeholder="Nama / Pemilik Pangkalan" list="dlPangkalan">
            <datalist id="dlPangkalan"></datalist>
        </div>

        <div class="form-group">
            <label for="tanggal">Jumlah Tabung </label>
            <input type="number" name="jumlahtabung" id="jumlahtabung" class="form-control" min=1 value=1>
        </div>

        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>

        </form>
    </div>
    <div class="row">
        <div class="col-sm-3">
        <h4>Pencarian Laporan</h4>
        <span>
            Tanggal Distribusi : <input type="date" id="tgDistribusi" class="form-control">
        </span>
        </div>
    </div>
</div>

<script>
$(document).ready( function(){

    $("#pangkalan").keyup( function(){
        if($(this).val().length >=3 ){
            $.getJSON('cariPangkalan.php?niap=<?=$_SESSION['niap'];?>&nama='+$(this).val() , function(pangkal){
                $("dlPangkalan option").remove();
                $.each(pangkal, function(i,data){
                    $("#dlPangkalan").append(`
                    <option value='${data.idPang}'>${data.nmPang}</option>
                    `);
                })
            })
        }
    })
})
</script>