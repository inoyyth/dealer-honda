<form action="<?php echo base_url("surat-jalan"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
    <div class="col-md-12">
        <div class="block-web">
            <div class="header">
                <div class="actions"> </div>
                <h3 class="content-header">Surat Jalan</h3>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group" id="remote">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" class="form-control">
                            <input class="typeahead form-control" parsley-trigger="change" required name="noso" id="noso" type="text" placeholder="Type No Sales Order">
                        </div>
                    </div>
                </div><!--col-md-6-->
                
                </div><!--row-->
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-sm-3">
                            
                        </div>
                        
                        <div class="col-sm-9">
                          <button type="button" name="print" id="print" onclick="cetak()" class="btn btn-default">Apply</button>
                        </div>
                    </div>
                </div>
                
            </div><!--block-web-->
        
        </div><!--col-md-12-->
</form>


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
              url: '<?php echo base_url('t_surat_jalan/t_surat_jalan/getSO?query=%QUERY');?>',
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
    location.href="<?php echo base_url();?>surat-jalan-printout/"+res+"?template=table_html&name=surat-jalan-printout";
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