<div class="row">
    <form action="<?php echo base_url("master-aksesoris-save"); ?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-8">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Master Aksesoris</h3>
                </div>
                <div class="porlets-content">
                    <div class="input-group">
                        <input type="hidden" name="kd_aksesoris" id="kd_aksesoris">
                        <input type="text" readonly="true" name="aksesoris" id="aksesoris" parsley-trigger="change" required placeholder="Pilih Kode Aksesoris" class="form-control">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBrowse">Browse</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Aksesoris</label>
                        <input type="text" name="aksesoris" parsley-trigger="change" required placeholder="Isi Nama Aksesoris" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select style="text-transform: capitalize;" name="kategori" class="form-control" required="true">
                            <?php foreach ($global_data as $k => $v) { ?>
                                <option value="<?php echo $v['id']; ?>"><?php echo $v['value']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="m_status" placeholder="Pilih Status" required class="form-control">
                            <option value="1">Aktif</option>
                            <option value="2">Non Aktif</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="<?php echo base_url('master-aksesoris'); ?>" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Foto Aksesoris</h3>
                </div>
                <div class="porlets-content">
                    <img id="image1"  onerror="this.onerror=null;this.src='<?php echo base_url('assets/images/aksesoris/user_icon.png'); ?>';" alt="..." class="img-circle img-responsive">
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

        $('#listmotor tbody').on('click', 'tr', function () {
            var row = $(this).closest('tr');
            var data = $('#listmotor').dataTable().fnGetData(row);
            //console.log(data[3]);
            $("#id_motor").val(data[1]);
            $("#nomsn").val(data[2]);
            $("#norangka").val(data[3]);
            $("#nama_motor").val(data[4]);
            $("#warna").val(data[5]);
            $("#tahun").val(data[6]);
            $("#varian").val(data[7]);
            $("#harga_otr").val(data[8]);
        });
    });
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image1')
                        .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>