<style>
    .search_sapTable{
        margin-left: 0;
        text-align: left;
    }
    .lbpkb_sRowCount span{
        margin-left: -10px;
    }
    
    #lbpkb tbody tr td{
        text-align: left;
    }
</style>

<table class="display table table-bordered table-striped table-responsive cf" id="lbpkb">
    <thead class="cf">
        <tr>
            <th data-options="no_so" style="width:10%;">No. SO</th>
            <th data-options="no_process" style="width:10%;">No. Proses</th>
            <th data-options="bpkb_process_date" style="width:10%;">Tgl. Proses BPKB</th>
            <th data-options="bpkb_estimate_date" style="width:10%;">Tgl. Estimasi Selesai</th>
            <th data-options="t_stnk_ktp" style="width:10%;">KTP Pemilik</th>
            <th data-options="t_stnk_nama" style="width:10%;">Pemilik STNK</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script type="text/javascript">
    var base_url = "<?= base_url(); ?>";

    if ($("#lbpkb").hasClass("sapTable")) {
        $("#lbpkb").refresh_sapTable({
            url: base_url + "dashboard/jlist_bpkb"
        });
    } else {
        $("#lbpkb").sapTable({
            url: base_url + "dashboard/jlist_bpkb",
            showSearch: true,
            cSearch: {
                'no_so': 'No. SO',
                'no_process': 'No. Proses',
                'bpkb_process_date': 'Tgl. Proses BPKB',
                'bpkb_estimate_date': 'Tgl. Estimasi BPKB Selesai',
                't_stnk_ktp': 'KTP Pemilik',
                't_stnk_nama': 'Pemilik STNK'
            }
        });
    }
</script>