<div class="row">

    <form action="<?php echo base_url("kwitansi-dp-save"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Kwitansi DP</h3>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Kwitansi</label>
                        <div class="col-sm-9">
                            <input type="text" name="nokwitansi" id="nokwitansi" parsley-trigger="change" placeholder="No. Kwitansi" value="<?= $nokwitansi; ?>" required readonly="true" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                   
                    <div class="form-group" id="remote">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input class="typeahead form-control" parsley-trigger="change" required name="noso" id="noso" type="text" placeholder="Type No Sales Order">
                            <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" value="" class="form-control">
                          
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_customer" id="nama_customer" parsley-trigger="change" required placeholder="Nama Customer" readonly="true" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Harga OTR</label>
                        <div class="col-sm-9">
                            <input type="text" name="harga_otr" id="harga_otr" parsley-trigger="change" required placeholder="Harga OTR" readonly="true" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">DP</label>
                        <div class="col-sm-9">
                            <input type="text" name="dp" id="dp" parsley-trigger="change" required   placeholder="DP Keseluruhan" readonly="true" class="form-control">
                        </div>
                    </div>
                    
                       <div class="form-group">
                        <label class="col-sm-3 control-label">Pembelian Secara</label>
                        <div class="col-sm-9">
                            <input type="text" name="cara_pembelian" id="cara_pembelian" parsley-trigger="change" readonly="true" required placeholder="Pembelian Secara" class="form-control">
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Transaksi</label>
                        <div class="col-sm-9">
                            <select name="transaksi" id="transaksi" class="form-control">
                                <option value="1">DP 1</option>
                                <option value="2">DP 2</option>
                                <option value="3">DP 3</option>
                                <option value="4">DP 4</option>
                                <option value="5">Pelunasan </option>
                                <option value="6">Pelunasan DP</option>
                            </select>
                            
                        </div>
                    </div>

                 
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nominal</label>
                        <div class="col-sm-9">
                            <input type="text" name="nominal" id="nominal" parsley-trigger="change"  placeholder="Nominal" class="form-control">
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Fee</label>
                        <div class="col-sm-9">
                            <input type="text" name="fee" id="fee" parsley-trigger="change"  placeholder="Nominal" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sisa</label>
                        <div class="col-sm-9">
                            <input type="text" name="sisa_pembayaran" id="sisa" parsley-trigger="change" readonly="true" required placeholder="Sisa" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No.Mesin</label>
                        <div class="col-sm-9">
                            <input type="text" name="nomsn" id="nomsn" parsley-trigger="change" readonly="true" placeholder="No.Mesin" class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">No.Rangka</label>
                        <div class="col-sm-9">
                            <input type="text" name="norangka" id="norangka" parsley-trigger="change" readonly="true" placeholder="No.Rangka" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-9">
                            <input type="text" name="tipe_motor" id="tipe_motor" parsley-trigger="change" readonly="true" placeholder="Type" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Warna</label>
                        <div class="col-sm-9">
                            <input type="text" name="warna_motor" id="warna_motor" parsley-trigger="change" readonly="true" placeholder="Warna" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Terbilang</label>
                        <div class="col-sm-9">
                            <textarea name="terbilang" id="terbilang" readonly="true" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="block-web">
                <div class="form-group">
                    <button type="button" name="new_kwitansidp" id="new_kwitansidp" class="btn btn-default">New</button>
                    <button name="submit" id="simpan" class="btn btn-primary">Save</button>
                    <button type="reset" name="cancel" id="cancel" class="btn btn-danger">Cancel</button>
                    <button type="button" name="print" id="print" onclick="cetak()" class="btn btn-default">Print</button>
                </div>
            </div>
        </div>
        
    </form>
</div>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="modalBrowse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">List Motor</h4>
            </div>
            <div class="modal-body">
                <table style="width: 100%;" class="display table table-bordered table-hover" id="listmotor">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>No. Mesin</th>
                            <th>No. Rangka</th>
                            <th>Nama</th>
                            <th>Warna</th>
                            <th>Tahun</th>
                            <th>Varian</th>
                            <th>Harga OTR</th>
                        </tr>
                    </thead>
                    <tbody id="mesinList">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Apply</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        //$('#modalBrowse').modal({backdrop: 'static', keyboard: false})  
        //datatables
        table = $('#listmotor').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('t_penjualan/get_list_motor') ?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                    "className": 'select-checkbox',
                },
                {
                    "targets": [1],
                    "visible": false
                }
            ],
            select: {
                style: 'single'
            },
        });

        $("#edit").on("click", function () {
            //$("#noso").removeAttr("readonly");
        });

        $("#cancel").on("click", function () {
            
        });

        $("#noso").focusout(function () {
            var noso = $(this).val();
            var dt = {noso: noso};
            $.ajax({
                type: "post",
                url: "t_kwitansi/t_kwitansidp/load_transaction_by_noso",
                data: dt,
                dataType: "json",
                success: function (hasil) {
                    //console.log(hasil);
                    $.map(hasil, function (value, index) {
                        if (index != "noso" && index != "id") {
                            if (document.getElementById(index)) {
                                if ($.isNumeric(value)) {
                                    $("#" + index).val(formatCurrency(value));
                                } else {
                                    $("#" + index).val(value);
                                }
                            }
                        }

                    });
                }
            });
            return false;
        });

        $("#nominal").focusout(function () {
            var nominal = $(this).val();
            $.post("t_kwitansi/t_kwitansidp/terbilang/", {nominal: nominal}).done(function (data) {
                $("#terbilang").text(data);
            });
            
            var number = parseFloat(nominal.split('.').join(""));
            var hargaotr = $("#harga_otr").val();
            var dp = $("#dp").val();
            var dpnumber = parseFloat(dp.split('.').join(""));
            var sisahutang = parseFloat(hargaotr.split(".").join("")) - (dpnumber + number);
            
            $("#sisa").val(sisahutang);
            return false;
        });
        
        $("#new_kwitansidp").click(function(){
            window.location = "kwitansi-dp-tambah";
        })

    });
</script>



<script>
    $(document).ready(function(){
        
        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
              url: '<?php echo base_url('t_kwitansi/t_kwitansidp/getSO?query=%QUERY');?>',
              wildcard: '%QUERY'
            }
        });

        $('#remote .typeahead').typeahead(null, {
          name: 'noso',
          display: 'noso',
          source: bestPictures
        });
        
        $('#remote .typeahead').bind('typeahead:selected', function(obj, datum, name) {
            console.log(datum);
            $('#noso').val(datum.noso);
            $('#harga_otr').val(datum.harga_otr);
            $('#nama').val(datum.nama_customer);
            $('#fee').val(datum.fee);
            $('#no_mesin').val(datum.nomsn);
            $('#warna').val(datum.warna_motor);
            $('#type').val(datum.tipe_motor);
            $('#no_rangka').val(datum.norangka);
            //$('#terbilang').val(datum.terbilang);
            //$('#norangka').val(datum['norangka']);
            //$('#warna').val(datum['warna']);
            //$('#tahun').val(datum['tahun']);
        });
        
        table = $('#listItem').DataTable({
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.

                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo base_url('motor_keluar/get_list_temp'); ?>",
                        "type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columnDefs": [
                        {
                            "targets": [0], //first column / numbering column
                            "orderable": false, //set not orderable
                            //"className": 'select-checkbox',
                        },
                        {
                            "targets": [1],
                            "visible": false
                        }
                    ]
                });  
                
        $("#bulkDelete").on('click',function() { // bulk checked
            var status = this.checked;
            $(".deleteRow").each( function() {
                $(this).prop("checked",status);
            });
        });
     
        $('#deleteTriger').on("click", function(event){ // triggering delete one by one
            if( $('.deleteRow:checked').length > 0 ){  // at-least one checkbox checked
                var ids = [];
                $('.deleteRow').each(function(){
                    if($(this).is(':checked')) { 
                        ids.push($(this).val());
                    }
                });
                var ids_string = ids.toString();  // array to string conversion
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('motor_keluar/datatable_bulk_delete'); ?>",
                    data: {data_ids:ids},
                    success: function(result) {
                        table.draw(); // redrawing datatable
                    },
                    async:false
                });
            }
        }); 
        
        $('#modalBrowse').on('hidden.bs.modal', function (e) {
            $('#frmGroupUser').find('input:text').val('');    
        })
        
        $("#frmGroupUser").on("submit", function(event){
            event.preventDefault();
            var formData = new FormData(this);
            //console.log(formData);
             $.ajax({
                url : "<?php echo base_url('motor_keluar/inputTemp'); ?>",
                type : "post",
                data : formData,
                cache: false,
                contentType: false,
                processData: false,
                //dataType : "json",
                success: function(e){
                    table.ajax.reload();
                    $('#modalBrowse').modal('hide')
                },
                error: function(e){
                    alert('fail');
                }
           });
       });
    });
    
    function cetak(){
    var data = $('#noso').val();
    //var res = data.replace("/,/","-");
    
    //var mystring = "SO/MKA-2016/XI/000001"  
    var newchar = '_'
    var res = data.split('/').join(newchar);


    //alert(res);
    //$.post( "<?php echo base_url();?>kwitansi-diskon-printout/?template=table_html&name=kwitansi-dp-printout", { noso: data } );
    location.href="<?php echo base_url();?>kwitansi-dp-printout/"+res+"?template=table_html&name=kwitansi-dp-printout";
    //alert(data);
    }
    
    function getGudangTo(id){
        $("#id_gudang_in").html("<option value=''>Wait ...</option>")
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('motor_keluar/get_gudang_to'); ?>",
            data: {id:id},
            dataType:'html',
            success: function(result) {
                $("#id_gudang_in").html(result);
            },
            error: function(result){
                alert(result);
            }
        });
    }
</script>