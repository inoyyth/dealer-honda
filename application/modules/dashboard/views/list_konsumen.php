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
            <th data-options="noso" style="width:10%;">No. SO</th>
            <th data-options="cara_pembelian" style="width:10%;">Cara Pembelian</th>
            <th data-options="marketing" style="width:10%;">Marketing</th>
            <th data-options="nama_customer" style="width:10%;">Customer</th>
            <th data-options="telepon_customer" style="width:10%;">Telp. Customer</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script type="text/javascript">
    var base_url = "<?= base_url(); ?>";

    if ($("#lstnk").hasClass("sapTable")) {
        $("#lstnk").refresh_sapTable({
            url: base_url + "dashboard/jlist_konsumen"
        });
    } else {
        $("#lstnk").sapTable({
            url: base_url + "dashboard/jlist_konsumen",
            showSearch: true,
            cSearch: {
                'noso': 'No. SO',
                'cara_pembelian': 'Cara Pembelian',
                'marketing': 'Marketing',
                'nama_customer': 'Nama Customer',
                'telepon_customer': 'Telp. Customer'
            }
        });
    }
</script>