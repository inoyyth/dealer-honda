<style>
    .search_sapTable{
        margin-left: 0;
        text-align: left;
    }
    .lstnk_sRowCount span{
        margin-left: -10px;
    }
    
    #lstnk tbody tr td{
        text-align: left;
    }
</style>

<table class="display table table-bordered table-striped table-responsive cf" id="lstnk">
    <thead class="cf">
        <tr>
            <th data-options="no_so" style="width:10%;">No. SO</th>
            <th data-options="no_process" style="width:10%;">No. Proses</th>
            <th data-options="stnk_process_date" style="width:10%;">Tgl. Proses STNK</th>
            <th data-options="stnk_estimate_date" style="width:10%;">Tgl. Estimasi Selesai</th>
            <th data-options="t_stnk_ktp" style="width:10%;">KTP Pemilik</th>
            <th data-options="t_stnk_nama" style="width:10%;">Pemilik STNK</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script type="text/javascript">
    var base_url = "<?= base_url(); ?>";

    if ($("#lstnk").hasClass("sapTable")) {
        $("#lstnk").refresh_sapTable({
            url: base_url + "dashboard/jlist_stnk"
        });
    } else {
        $("#lstnk").sapTable({
            url: base_url + "dashboard/jlist_stnk",
            showSearch: true,
            cSearch: {
                'no_so': 'No. SO',
                'no_process': 'No. Proses',
                'stnk_process_date': 'Tgl. Proses STNK',
                'stnk_estimate_date': 'Tgl. Estimasi STNK Selesai',
                't_stnk_ktp': 'KTP Pemilik',
                't_stnk_nama': 'Pemilik STNK'
            }
        });
    }
</script>