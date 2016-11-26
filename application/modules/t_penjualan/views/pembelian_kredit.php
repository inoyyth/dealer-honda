<div class="form-group">
    <label class="col-sm-3 control-label">Leasing</label>
    <div class="col-sm-9">
        <select name="leasing" id="leasing" required class="form-control">
            <option value="">Choose Leasing</option>
            <?php foreach($dtleasing as $leasing) { ?>
            <option value="<?=$leasing['kd_leasing'];?>"><?=$leasing['leasing'];?></option>
            <?php } ?>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">DP System</label>
    <div class="col-sm-9">
        <input type="text" name="dp_system" id="dp_system" parsley-trigger="change" required placeholder="DP System" class="form-control mask" data-inputmask="'mask':'Rp. 99.999.999', 'greedy' : false, 'rightAlignNumerics' : false">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Diskon</label>
    <div class="col-sm-9">
        <input type="text" name="diskon" id="diskon" parsley-trigger="change" required placeholder="Diskon" class="form-control mask" data-inputmask="'mask':'Rp. 99.999.999', 'greedy' : false, 'rightAlignNumerics' : false">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Tagih</label>
    <div class="col-sm-9">
            <input type="text" name="tagih" id="tagih" parsley-trigger="change" required placeholder="Tagih" class="form-control mask" data-inputmask="'mask':'Rp. 99.999.999', 'greedy' : false, 'rightAlignNumerics' : false" readonly>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">DP / Uang Muka</label>
    <div class="col-sm-9">
        <input type="text" name="dp" id="dp" parsley-trigger="change" required placeholder="Down Payment" class="form-control mask" data-inputmask="'mask':'Rp. 99.999.999', 'greedy' : false, 'rightAlignNumerics' : false">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Sisa Hutang</label>
    <div class="col-sm-9">
        <input type="text" name="sisa_hutang" id="sisa_hutang" parsley-trigger="change" required placeholder="Sisa Hutang" class="form-control mask" data-inputmask="'mask':'Rp. 99.999.999', 'greedy' : false, 'rightAlignNumerics' : false">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Fee</label>
    <div class="col-sm-9">
        <input type="text" name="fee" id="fee" parsley-trigger="change" required placeholder="Fee Marketing" class="form-control mask" data-inputmask="'mask':'Rp. 99.999.999', 'greedy' : false, 'rightAlignNumerics' : false">
    </div>
</div>

<script type="text/javascript">

    $("#diskon").focusout(function () {
        var dp_system = $("#dp_system").val();
        var diskon = $(this).val();
        
        dp_system = parseFloat(dp_system.split('.').join(''));
        var tagih = dp_system - diskon;
        $("#tagih").val(tagih);
    })
    
    $("#dp_system").focusout(function(){
        var dp_system = $("#dp_system").val();
        var diskon = $(this).val();
        
        dp_system = parseFloat(dp_system.split('.').join(''));
        var tagih = dp_system - diskon;
        $("#tagih").val(tagih);
    })
    
    $("#dp").focusout(function(){
        var dp = parseFloat($(this).val());
        var harga = parseFloat($("#tagih").val());
        
        var sisa_hutang = harga - dp;
        $("#sisa_hutang").val(sisa_hutang);
    })

</script>