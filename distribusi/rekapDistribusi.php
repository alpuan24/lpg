<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="form-inline">
                <div class="form-group">
                    <label for="jenisrekap">Jenis Rekapitulasi</label>
                    <select id="jenisrekap" class="form-control">
                        <option value="gpa">Global Per Agen</option>
                        <option value="gpk">Global Per Kecamatan</option>
                        <option value="apk">Agen Per Kecamatan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bulanrekap">Bulan Distribusi</label>
                    <select id="bulanrekap" class="form-control">
                        <?php
                        for( $i = 1 ; $i <= 12 ; $i++ ){
                            echo "<option value='".date('Y')."-".sprintf("%02d",$i)."'>".sprintf("%02d",$i)."-".date('Y')."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" id="submitrekap">Buka Data!</button>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="export">Export Data!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-sm-12">
        <table class="table table-striped table-sm">
            <thead id="thead"></thead>
            <tbody id="tbody"></tbody>
        </table>
       </div>
    </div>
</div>

<script>
    $(document).ready( function(){
        $("#submitrekap").click(function(){
            let jenis = $("#jenisrekap").val();
            let bulan = $("#bulanrekap").val();

            if( jenis == 'gpa'){ agenGlobal(bulan); }
            if( jenis == 'gpk'){ kcmtGlobal(bulan); }
            if( jenis == 'apk'){ agenPerCam(bulan); }
        })

        $("#export").click( function(){
            let jr = $("#jenisrekap").val();
            let bl = $("#bulanrekap").val();
            let ur = './export/'+jr+'.php?bl='+bl;
            window.location.href=ur;
        })
    })

    function agenGlobal(bln){
        let thead = "<tr><th>Nomor</th><th>Nama Agen</th><th>Jumlah</th></tr>";
        $("#thead").html(thead);
        $.getJSON('./distribusi/agenGlobal.php?bl='+bln , function(rekap){
            $("#tbody tr").remove();
            let nomor = 1;
            $.each(rekap , function(i,data){
                $("#tbody").append(`
                <tr>
                <td align='right'>${nomor}.</td>
                <td>${data.agn}</td>
                <td align='right'>${data.jml} tabung</td>
                <tr>
                `);
                nomor+=1;
            })
        })
    }

    function kcmtGlobal(bln){
        let thead = "<tr><th>Nomor</th><th>Kecamatan</th><th>Jumlah</th></tr>";
        $("#thead").html(thead);

        $.getJSON('./distribusi/kecamatanGlobal.php?bl='+bln , function(rekap){
            $("#tbody tr").remove();
            let nomor = 1;
            $.each(rekap , function(i,data){
                $("#tbody").append(`
                <tr>
                <td align='right'>${nomor}.</td>
                <td>${data.kec}</td>
                <td align='right'>${data.jml} tabung</td>
                <tr>
                `);
                nomor+=1;
            })
        })
    }

    function agenPerCam(bln){
        let thead = "<tr><th>Nomor</th><th>Agen</th><th>Kecamatan</th><th>Jumlah</th></tr>";
        $("#thead").html(thead);

        $.getJSON('./distribusi/agenPerKecamatan.php?bl='+bln , function(rekap){
            $("#tbody tr").remove();
            let nomor = 1;
            $.each(rekap , function(i,data){
                $("#tbody").append(`
                <tr>
                <td align='right'>${nomor}.</td>
                <td>${data.agn}</td>
                <td>${data.kec}</td>
                <td align='right'>${data.jml} tabung</td>
                <tr>
                `);
                nomor+=1;
            })
        })
    }
</script>