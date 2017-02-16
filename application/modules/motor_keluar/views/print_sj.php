<style>
    body {
        font-family: "Times New Roman", Times, serif;
        letter-spacing: 5px;
        font-size: 12px;
        font-family: Sans-Serif;
    }
    @media print {
        .no-print, .no-print * { display: none !important; }
        font-family: Sans-Serif;
        letter-spacing: 5px;
        font-size: 12px;
    }
</style>
<body>
    <div style="font-weight:bold;">PT. Mandala Kekar Abadi</div>
    <div>Dealer Resmi Sepeda Motor Honda</div>
    <div>Jl. Raya Bekasi Timur No. 158 Cipinang Jakarta Timur</div>
    <div>Telp.(021)6198464,8517484,8517620 Fax.:(021)8514855</div>
    <br>
    <div style="text-align: center;font-size: 13px;font-weight: bolder;">== Surat Jalan (Mutasi Motor) ==</div>
    <br>
    <table style="width: 100%;">
        <tr>
            <td style="border-top:2px solid;border-left:2px solid;border-bottom:2px solid;">
                <table style="font-size:12px;width:450px;" cellspacing="0" cellpadding="1">
                    <tr>
                        <td>No.Surat Jalan: <?php echo $motor_keluar['kode_motor_keluar']; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal: <?php echo $motor_keluar['tgl_motor_keluar']; ?></td>
                    </tr>
                    <tr>
                </table>
            </td>
            <td style="border-bottom:2px solid;border-right:2px solid;border-top:2px solid;">
                <table style="font-size:13px;" cellspacing="0" cellpadding="1">
                    <tr>
                        <td>No.PO: <?php echo $motor_keluar['kode_po_motor_keluar']; ?></td>
                    </tr>
                    <tr>
                        <td>No.DO: <?php echo $motor_keluar['kode_do_motor_keluar']; ?></td>
                    </tr>
                    <tr>
                        <td>PIC: <?php echo $motor_keluar['pic_motor_keluar']; ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <table style="width: 100%;" cellspacing="0" cellpadding="3">
        <tr style="text-align:center;font-size:12px;">
            <td style="border-bottom:2px solid;border-top:2px solid;border-left:2px solid;height: 30px;">No.</td>
            <td style="border-bottom:2px solid;border-top:2px solid;border-left:2px solid;">Tipe Motor</td>
            <td style="border-bottom:2px solid;border-top:2px solid;border-left:2px solid;">Warna</td>
            <td style="border-bottom:2px solid;border-top:2px solid;border-left:2px solid;">Tahun</td>
            <td style="border-bottom:2px solid;border-top:2px solid;border-left:2px solid;">No.Rangka</td>
            <td style="border-bottom:2px solid;border-top:2px solid;border-right:2px solid;border-left:2px solid;">No.Mesin</td>
        </tr>
        <?php foreach ($motor_keluar_list as $kMotor => $vMotor): ?>
            <tr style="text-align:center;font-size:12px;">
                <td style="border-left:2px solid;border-bottom:2px solid;"><?php echo $kMotor + 1; ?></td>
                <td style="border-left:2px solid;border-bottom:2px solid;"><?php echo $vMotor['tipe']; ?></td>
                <td style="border-left:2px solid;border-bottom:2px solid;"><?php echo $vMotor['warna']; ?></td>
                <td style="border-left:2px solid;border-bottom:2px solid;"><?php echo $vMotor['tahun']; ?></td>
                <td style="border-left:2px solid;border-bottom:2px solid;"><?php echo $vMotor['norangka']; ?></td>
                <td style="border-left:2px solid;border-bottom:2px solid;border-right:2px solid;"><?php echo $vMotor['nomesin']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <div style="margin-top:5px;">
        Harap Diterima Sepeda Motor Tsb diatas ini, dalam keadaan 100% tanpa cacat : <br>
        <u>Keterangan : </u>
    </div>
    <div>
        <?php echo $motor_keluar['keterangan_motor_keluar']; ?>
    </div>
    <br/>
    <br/>
    <br/>
<center>
    <table style="font-size: 12px;" cellpadding="1">
        <tr>
            <td style="font-size:12px;width: 20%;text-align: center;">Penjualan,</td>
            <td style="font-size:12px;width: 20%;text-align: center;">Pengirim,</td>
            <td style="font-size:12px;width: 20%;text-align: center;">Pimpinan,</td>
            <td style="font-size:12px;width: 20%;text-align: center;">Penerima,</td>
        </tr>
        <tr>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td style="width: 20%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
            <td style="width: 20%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
            <td style="width: 20%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
            <td style="width: 20%;text-align: center;">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
        </tr>
    </table>
</center>
<br>
<br>
<br>
<div style="text-align: center;">
    <button class="no-print" onclick="printPage();">Print</button>
</div>
</body>
<script src="<?php echo base_url(); ?>themes/js/jquery-2.1.0.js"></script>
<script>
        function printPage() {
            window.print();
        }
</script>