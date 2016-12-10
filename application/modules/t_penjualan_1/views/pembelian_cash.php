

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
        <input type="text" name="sisa_hutang" id="sisa_hutang" parsley-trigger="change" required placeholder="Sisa Hutang" class="form-control mask" data-inputmask="'mask':'Rp. 99.999.999', 'greedy' : false, 'rightAlignNumerics' : false" readonly>
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
        var harga_otr = $("#harga_otr").val();
        var diskon = $(this).val();
        
        harga_otr = parseFloat(harga_otr.split('.').join(''));
        var tagih = harga_otr - diskon;
        $("#tagih").val(tagih);
    })
    
    $("#dp").focusout(function(){
        var dp = parseFloat($(this).val());
        var harga = parseFloat($("#tagih").val());
        
        var sisa_hutang = harga - dp;
        $("#sisa_hutang").val(sisa_hutang);
    })

</script>