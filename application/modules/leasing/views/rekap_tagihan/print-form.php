 
<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Rekap Tagihan
                    </div>
                    <div class="col-md-6 pull-right text-right">
                        <a href="<?php echo base_url('rekap-tagihan'); ?>" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-fast-backward"></i> Cancel </a>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="block-web">
                    <div class="header">
                        <div class="actions"> </div>
                        <h3 class="content-header">Transaksi  </h3>
                    </div>
                    <div class="porlets-content" id="frmlist">
                        <div class="form-group">
                            <label class="col-sm-12 control-label">Tanggal</label>
                            <div class="col-sm-6">
                                <input type="text" name="tanggal_start" id="tanggal_start" parsley-trigger="change" class="frmrekap form-control datepicker">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="tanggal_end" id="tanggal_end" parsley-trigger="change" class="frmrekap form-control datepicker">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label">Leasing</label>
                            <div class="col-sm-6">
                                <select name="kdleasing" id="kdleasing" required class="frmrekap form-control">
                                    <option value="">Choose Leasing</option>
                                    <?php
                                    foreach ($dtleasing as $leasing) {
                                        $selected = "";
                                        if (isset($price_list)) {
                                            if ($price_list['leasing'] == $leasing['kd_leasing'] && $price_list['cara_pembelian'] == "Kredit") {
                                                $selected = "selected";
                                            }
                                        }
                                        ?>
                                        <option label="<?= $leasing['leasing']; ?>" value="<?= $leasing['kd_leasing']; ?>" <?php echo $selected; ?>><?= $leasing['leasing']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>


                        <br>
                        &nbsp;
                        <br>
                        <hr>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="list" id="listTagihan" class="btn btn-warning"> List </button>
                                <button type="button" name="generate" id="generateTagihan" class="btn btn-danger">  Generate </button>
                                <button type="button" name="save" id="saveTagihan" class="btn btn-primary"> Save </button>
                                <button type="button" name="print" id="printTagihan" class="btn btn-default">
                                    <i class="glyphicon glyphicon-print"></i> Print 
                                </button>
                            </div>
                        </div>
                        &nbsp;
                        <br>
                        <hr>
                        <h2 align='center'> REKAPAN TAGIHAN </h2>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">No. Tagihan</label>
                                <div class="col-sm-12">
                                    <input type="text" name="no_tagihan" id="no_tagihan" value="<?= $notagihan; ?>" class="form-control" readonly/>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">Leasing</label>
                                <div class="col-sm-12">
                                    <input type="text" name="leasing" id="leasing" class="form-control" disabled>
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
                                    <input type="text" name="tgl_tagihan" id="tgl_tagihan" parsley-trigger="change" class="form-control datepicker">
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
                                    <input type="text" name="sisa_tagihan" id="sisa_tagihan" class="form-control" value="0" readonly />
                                </div>
                            </div>
                        </div>


                        <div style="clear: both;margin-bottom: 10px;"></div>

                        <table class="table table-bordered" id="tblRekapTagihan">
                            <thead>
                                <tr>
                                    
                                    <td><input type="checkbox" name="cnokwitansi" class="cnokwitansi"></td>
                                    
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
                            </tbody>
                        </table>

                        <div style="clear: both;margin-bottom: 10px;"></div>

                        <div class="col-md-12 col-xs-12">
                            <label class="col-sm-12 control-label">Total Tagihan :</label>
                            <div class="col-sm-12">
                                <input type="text" name="tot_tagihan" id="tot_tagihan" class="form-control" placeholder="Total Tagihan" readonly>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#listTagihan").click(function () {
            var dt = $(".frmrekap").serialize();
            //console.log(dt);
            $.ajax({
                type: 'post',
                url: 'leasing/rekap_tagihan/dt_leasing_json',
                data: dt,
                dataType: 'json',
                success: function (hsl) {
                    $("#leasing").val(hsl.leasing.leasing);

                    table = $('#tblRekapTagihan').DataTable({
                        buttons: [
                            'selectAll',
                            'selectNone'
                        ],
                        language: {
                            buttons: {
                                selectAll: "Select all items",
                                selectNone: "Select none"
                            }
                        },
                        "destroy": true,
                        "processing": true, //Feature control the processing indicator.
                        "serverSide": true, //Feature control DataTables' server-side processing mode.
                        "ordering": false,
                        "order": [], //Initial no order.

                        // Load data for the table's content from an Ajax source
                        "ajax":
                                {
                                    "url": "<?php echo base_url('leasing/rekap_tagihan/get_list_kwitansi?'); ?>" + dt,
                                    "type": "POST"
                                },
                        //Set column definition initialisation properties.
                        "columnDefs": [
                            {
                                "targets": [0], //first column / numbering column
                                "orderable": false, //set not orderable
                                //"className": 'select-checkbox',
                            }
                        ],
                        select: {
                            style: 'multi'
                        }
                    });
                }
            })

            return false;
        })

        $('#tblRekapTagihan tbody').on('click', 'tr', function () {
            var row = $(this).closest('tr');
            var data = $('#tblRekapTagihan').dataTable().fnGetData(row);
            console.log(data);
            //$(".idkwitansileasing").prop('checked', this.checked);
        });

        $("#generateTagihan").click(function () {
            var idkwitansi_leasing = $('.idkwitansileasing:checked').map(function () {
                return this.value;
            }).get();
            var dtkwitansi = idkwitansi_leasing.join(",");

            table = $('#tblRekapTagihan').DataTable({
                "destroy": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.

                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo base_url('leasing/rekap_tagihan/get_rekap_tagihan?dt='); ?>" + dtkwitansi,
                    "type": "POST"
                },
                //Set column definition initialisation properties.
                "columnDefs": [
                    {
                        "targets": [0], //first column / numbering column
                        "orderable": false, //set not orderable
                        //"className": 'select-checkbox',
                    }
                ]
            });

            return false;
        });

        $(".cnokwitansi").change(function () {
            $(".idkwitansileasing").prop('checked', this.checked);
        })
    }
    )
</script>