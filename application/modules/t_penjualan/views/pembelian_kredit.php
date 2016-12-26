<script src="<?php echo base_url();?>themes/plugins/validation/parsley.min.js"></script>
<script src="<?php echo base_url();?>themes/plugins/input-mask/demo-mask.js"></script>
<script src="<?php echo base_url();?>themes/plugins/input-mask/jquery.inputmask.min.js"></script>
<div class="form-group">
    <label class="col-sm-3 control-label">Leasing</label>
    <div class="col-sm-9">
        <select name="leasing" id="leasing" required class="form-control">
            <option value="">Choose Leasing</option>
            <?php foreach($dtleasing as $leasing) { ?>
            <option label="<?=$leasing['leasing'];?>" value="<?=$leasing['kd_leasing'];?>"><?=$leasing['leasing'];?></option>
            <?php } ?>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">DP System</label>
    <div class="col-sm-9">
        <input type="text" value="0" autocomplete="false" name="dp_system" id="dp_system" parsley-trigger="change" required placeholder="DP System" class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" style="text-align: right;">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Diskon</label>
    <div class="col-sm-9">
        <input type="text" value="0" autocomplete="false" name="diskon" id="diskon" parsley-trigger="change" required placeholder="Diskon" class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" style="text-align: right;">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Tagih</label>
    <div class="col-sm-9">
            <input type="text" value="0" autocomplete="false" name="tagih" id="tagih" parsley-trigger="change" required placeholder="Tagih" class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" style="text-align: right;" readonly>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">DP / Uang Muka</label>
    <div class="col-sm-9">
        <input type="text" value="0" autocomplete="false" name="dp" id="dp" parsley-trigger="change" required placeholder="Down Payment" class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" style="text-align: right;">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Sisa Hutang</label>
    <div class="col-sm-9">
        <input type="text" value="0" autocomplete="false" readonly="true" name="sisa_hutang" id="sisa_hutang" parsley-trigger="change" required placeholder="Sisa Hutang" class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" style="text-align: right;">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Fee</label>
    <div class="col-sm-9">
        <input type="text" value="0" autocomplete="false" name="fee" id="fee" parsley-trigger="change" required placeholder="Fee Marketing" class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" style="text-align: right;">
    </div>
</div>

<script type="text/javascript">

    $("#diskon").keyup(function () {
        var dp_system = $("#dp_system").val().match(/\d/g);
        var diskon = $(this).val().match(/\d/g);
        var tagih = parseInt(dp_system.join("")) - parseInt(diskon.join(""));
        $("#tagih").val(tagih.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    });
    
    $("#dp_system").keyup(function(){
        if ($(this).val().trim().length == 0) {
            $(this).val(0);
            $("#diskon").val(0);
        }
        var diskon = $("#diskon").val().match(/\d/g);
        var dp_system = $(this).val().match(/\d/g);
        var tagih = parseInt(dp_system.join("")) - parseInt(diskon.join(""));
        $("#tagih").val(tagih.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    });
    
    $("#dp").keyup(function(){
        if ($(this).val().trim().length == 0) {
            $(this).val(0);
        }
        var dp = $(this).val().match(/\d/g);
        var harga = $("#tagih").val().match(/\d/g);
        var sisa_hutang = parseInt(harga.join("")) - parseInt(dp.join(""));
        $("#sisa_hutang").val(sisa_hutang.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    });

</script>