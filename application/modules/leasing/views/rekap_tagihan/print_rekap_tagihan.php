<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">

            <div class="panel-body">
                <div class="block-web">

                    <div class="porlets-content">

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="button" name="print" id="print_tagihan" class="btn btn-default">
                                    <i class="glyphicon glyphicon-print"></i> Print 
                                </button>
                            </div>
                        </div>

                        <div id="printRekap">
                            <h2 align='center'> REKAPAN TAGIHAN </h2>

                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="col-sm-12 control-label">No. Tagihan</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="no_tagihan" id="no_tagihan" value="<?= $rkwitansi[0]['no_tagihan']; ?>" class="form-control rtagihan" readonly/>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="col-sm-12 control-label">Leasing</label>
                                    <div class="col-sm-12">
                                        <input type="hidden" name="kdleasing" id="kdleasing" value="<?= $rkwitansi[0]['kdleasing']; ?>" class="form-control">
                                        <input type="text" name="leasing" id="leasing" value="<?= $dtleasing[0]['leasing']; ?>" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="col-sm-12 control-label">Dealer</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="nmdealer" id="nmdealer" class="form-control" value="PT. Mandala Kekar Abadi" disabled />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-sm-12 control-label">Tanggal Tagihan</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="tgl_tagihan" id="tgl_tagihan" value="<?= date("Y-m-d", strtotime($rkwitansi[0]['tgl_tagihan'])); ?>" parsley-trigger="change" class="form-control rtagihan" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="col-sm-12 control-label"></label>
                                    <div class="col-sm-12"></div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-sm-12 control-label">Sisa Tagihan</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="sisa_tagihan" id="sisa_tagihan" value="<?= formatrp($rkwitansi[0]['sisa_tagihan']); ?>" class="form-control rtagihan" value="0" readonly />
                                    </div>
                                </div>
                            </div>


                            <div style="clear: both;margin-bottom: 10px;"></div>
                            <div class="col-md-12">
                                <table class="table table-bordered" id="tblRekapTagihan" width="95%">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Tgl Kwitansi</td>
                                            <td>Nmr Kwitansi</td>
                                            <td>Nama</td>
                                            <td>Type</td>
                                            <td>No.Mesin</td>
                                            <td>No.Rangka</td>
                                            <td>OTR</td>
                                            <td>DP</td>
                                            <td>Subsidi</td>
                                            <td>Sisa</td>
                                            <td>Price List</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;

                                        foreach ($list_rekapan as $lrekapan) {
                                            $no++;

                                            $sisaTagihan = formatrp(($lrekapan['harga_otr'] - $lrekapan['dp']) + ($lrekapan['subsidi1'] + $lrekapan['subsidi2']));
                                            $subsidi = formatrp($lrekapan['subsidi1'] + $lrekapan['subsidi2']);
                                            echo "<tr>
                                                <td>{$no}</td>
                                                <td>" . date('d F Y', strtotime($lrekapan['sys_create_date'])) . "</td>
                                                <td>{$lrekapan['nokwitansi']}</td>
                                                <td>{$lrekapan['nama_customer']}</td>
                                                <td>{$lrekapan['tipe']}</td>
                                                <td>{$lrekapan['nomsn']}</td>
                                                <td>{$lrekapan['norangka']}</td>
                                                <td>" . formatrp($lrekapan['harga_otr']) . "</td>
                                                <td>" . formatrp($lrekapan['dp']) . "</td>
                                                <td>" . $subsidi . "</td>
                                                <td>" . $sisaTagihan . "</td>
                                                <td>" . $lrekapan['varian'] . "</td>
                                            </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                            <div style="clear: both;margin-bottom: 10px;"></div>

                            <div class="col-md-12 col-xs-12">
                                <label class="col-sm-12 control-label">Total Tagihan :</label>
                                <div class="col-sm-12">
                                    <input type="text" name="tot_tagihan" id="tot_tagihan" class="form-control rtagihan" placeholder="Total Tagihan" style="text-align: right;" value="<?= formatrp($rkwitansi[0]['tot_tagihan']); ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>

<script type="text/javascript">

    $("#print_tagihan").click(function () {
        printDiv('printRekap');
    })

    function printDiv(div) {
        // Create and insert new print section
        var elem = document.getElementById(div);
        var domClone = elem.cloneNode(true);
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        $printSection.appendChild(domClone);
        document.body.insertBefore($printSection, document.body.firstChild);

        window.print();

        // Clean up print section for future use
        var oldElem = document.getElementById("printSection");
        if (oldElem != null) {
            oldElem.parentNode.removeChild(oldElem);
        }
        //oldElem.remove() not supported by IE

        return true;
    }

</script>