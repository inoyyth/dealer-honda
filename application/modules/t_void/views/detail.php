<div id="detailTransaksi"></div>
<script>
    $(document).ready(function (){
        selectList(<?php echo $id;?>);
    });
    
    function selectList(id){
    console.log(id);
        $("#detailTransaksi").empty();
        $("#detailTransaksi").load("<?php echo base_url();?>t_void/load_transaksi_detail_detail/" + id);
    }
</script>