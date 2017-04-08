<style>
    .green_info:hover, .blue_info:hover, .red_info:hover, .gray_info:hover{
        cursor: pointer;
        cursor: hand;
    }
</style>

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="information green_info" onclick="stnkReady(<?php echo count($stnk_selesai); ?>);">
            <div class="information_inner">
                <div class="info green_symbols"><i class="fa fa-map icon"></i></div>
                <span>STNK </span>
                <h1 class="bolded"><?php echo count($stnk_selesai); ?></h1>
                <div class="infoprogress_green">
                    <div class="greenprogress"></div>
                </div>
                <b class=""><small>Sudah jadi/ selesai diproses.</small></b>
                <div class="pull-right" id="work-progress1">
                    <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="information blue_info" onclick="bpkbReady(<?php echo count($bpkb_selesai); ?>)">
            <div class="information_inner">
                <div class="info blue_symbols"><i class="fa fa-book icon"></i></div>
                <span>BPKB</span>
                <h1 class="bolded"><?php echo count($bpkb_selesai); ?></h1>
                <div class="infoprogress_blue">
                    <div class="blueprogress"></div>
                </div>
                <b class=""><small>Sudah jadi/ selesai diproses.</small></b>
                <div class="pull-right" id="work-progress2">
                    <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="information red_info" onclick="konTunggak(<?php echo count($pembayaran_konsumen); ?>);">
            <div class="information_inner">
                <div class="info red_symbols"><i class="fa fa-users icon"></i></div>
                <span>KONSUMEN</span>
                <h1 class="bolded"><?php echo count($pembayaran_konsumen); ?></h1>
                <div class="infoprogress_red">
                    <div class="redprogress"></div>
                </div>
                <b class=""><small>Belum melunasi pembayaran.</small></b>
                <div class="pull-right" id="work-progress3">
                    <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="information gray_info" onclick="tagihanLeasing(<?php echo count($tagihan_leasing); ?>);">
            <div class="information_inner">
                <div class="info gray_symbols"><i class="fa fa-list-alt icon"></i></div>
                <span>TAGIHAN</span>
                <h1 class="bolded"><?php echo count($tagihan_leasing); ?></h1>
                <div class="infoprogress_gray">
                    <div class="grayprogress"></div>
                </div>
                <b class=""><small>Belum ditagih ke leasing.</small></b>
                <div class="pull-right" id="work-progress4">
                    <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="information gray_info">
            <div class="information_inner" id="showDetailmain">

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var base_url = "<?= base_url(); ?>";

    function stnkReady(jml) {
        $("#showDetailmain").empty();
        $("#showDetailmain").load(base_url + "dashboard/list_stnk");
    }

    function bpkbReady(jml) {
        $("#showDetailmain").empty();
        $("#showDetailmain").load(base_url + "dashboard/list_bpkb");
    }

    function konTunggak(jml) {
        $("#showDetailmain").empty();
        $("#showDetailmain").html("Tagihan Ke Konsumen " + jml);
    }

    function tagihanLeasing(jml) {
        $("#showDetailmain").empty();
        $("#showDetailmain").html("Tagihan Ke-Leasing " + jml);
    }

</script>