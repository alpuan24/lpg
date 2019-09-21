<div class="container-fluid">
    <div class="row" style="margin-top:25px;">
        <form action="aksi-distribusi.php" method="post" class="form-inline">
        <input type="hidden" name="niap" value="<?=$_SESSION['niap'];?>">
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
        <div class="col-sm-12">
            <h4>Pencarian Laporan</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">Tanggal Distribusi : </div>
        <div class="col-sm-3">
            <input type="date" id="tgDistribusi" class="form-control">
        </div>
        <div class="col-sm-1">
            <button class="btn btn-success" id="crDistrib">Cari!</button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Pangkalan </th>
                        <th>Desa</th>
                        <th>Kecamatan</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody id="dataDistrib"></tbody>
            </table>
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

    $("#crDistrib").click( function(){
        let tgl = $("#tgDistribusi").val();
        let nia = "<?=$_SESSION['niap'];?>";
        $.getJSON('cariDistrib.php?tgl='+tgl+'&niap='+nia , function(distrib){
            $("#dataDistrib tr").remove();
            $.each( distrib , function(i,data){
                $("#dataDistrib").append(`
                <tr>
                <td>${data.tanggal}</td>
                <td>${data.pangkalan}</td>
                <td>${data.desa}</td>
                <td>${data.kecamatan}</td>
                <td align='right'>${data.jumlah} Tabung</td>
                </tr>
                `);
            })
        })
    })
})
</script>