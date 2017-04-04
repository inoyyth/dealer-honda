<script type="text/javascript">
    var base_url = "<?= base_url(); ?>";
</script>

<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Pencairan Leasing</div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <section class="panel default blue_title h2">

                        <div class="panel-body">

                            <div id="accordion" class="panel-group  accordion accordion-color">

                                <?php
                                $no = 0;
                                foreach ($mleasing as $leasing) {
                                    $no++;
                                    echo '<div class="panel panel-default">
                                    <div class="panel-heading blue">
                                        <h4 class="panel-title ">
                                            <a href="#collapse' . $no . '" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                                ' . $leasing->leasing . ' (' . $leasing->count_rekap . ')
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapse' . $no . '" style="height: auto;">
                                        <div class="panel-body tbl_' . $no . '">
                                            <table class="display table table-bordered table-striped table-responsive cf" id="rlist_' . $no . '">
                                                <thead class="cf">
                                                    <tr>
                                                        <th data-options="no_tagihan" style="width:10%;">No. Tagihan</th>
                                                        <th data-options="jml_motor" style="width:10%;">Jumlah Motor</th>
                                                        <th data-options="tot_ptagihan" style="width:10%;">Jumlah Tagihan</th>
                                                        <th data-options="sdhbayar" style="width:10%;">Jumlah Sudah Dibayar</th>
                                                        <th data-options="sisa_ptagihan" style="width:10%;">Jumlah Outstanding</th>
                                                        <th data-options="aksi" style="width:10%;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><br/>';

                                    echo '<script type="text/javascript">
    if ($("#rlist_' . $no . '").hasClass("sapTable")) {
        $("#rlist_' . $no . '").refresh_sapTable({
            url : "' . base_url("leasing/pencairan_leasing/json_rlist?kdleasing=$leasing->kd_leasing") . '"
        });
    } else {
        $("#rlist_' . $no . '").sapTable({
            url : "' . base_url("leasing/pencairan_leasing/json_rlist/$leasing->kd_leasing") . '",
            showSearch: true,
            cSearch: {
                \'no_tagihan\': \'No. Tagihan\',
                \'jml_motor\': \'Jumlah Motor\',
                \'tot_tagihan\': \'Jumlah Tagihan\',
                \'sdhbayar\': \'Jumlah Sudah Bayar\',
                \'sisa_tagihan\': \'Jumlah Outstanding\'
            },
            formatters: {
                "sdhbayar" : function(){
                    var sdhbayar = formatCurrency(parseInt(rows.terbayar));
                    return sdhbayar;
                },
                "tot_ptagihan" : function(){
                    var total_tagihan = formatCurrency(rows.tot_tagihan);
                    return total_tagihan;
                },
                "sisa_ptagihan" : function(){
                    var sisa_tagihan = (parseFloat(rows.tot_tagihan) - parseFloat(rows.terbayar));
                    //formatCurrency(rows.sisa_tagihan);
                    return formatCurrency(sisa_tagihan);
                },
                "aksi": function () {
                    var buton = "<a href=\'" + base_url + "pencairan-leasing-list-" + rows . id + "\' class=\'btn btn-info btn-xs\' title=\'List Tagihan\'><i class=\'fa fa-bars\'></i> </a>";
                    buton += " <a href=\'" + base_url + "pencairan-leasing-view-" + rows . id + "\' class=\'btn btn-danger btn-xs\' title=\'View Tagihan\'><i class=\'fa fa-eye\'></i> </a>";
                    return buton;
                }
            }
        });
    }
</script>';
                                }
                                ?>

                            </div>

                        </div>
                    </section>

                </div>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-1 pull-left text-left">	

    </div>
</form>
<div class="col-lg-11 pull-right text-right">	

</div>
</div>
