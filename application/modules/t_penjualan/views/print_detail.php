<style>
    @media screen {
        #printSection {
            display: none;
        }
    }

    @media print {
        body > *:not(#printSection) {
            display: none;
        }
        #printSection, #printSection * {
            visibility: visible;
        }
        #printSection {
            position:absolute;
            left:0;
            top:0;
        }
    }
</style>
<link href="<?php echo base_url(); ?>themes/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<div id="printThis">
    <div>
        <div class="head-covernote">
            <b style="font-size: 14px;">PT.MANDALA KEKAR ABADI</b><br>
            <b style="font-size: 12px;">DEALER RESMI SEPEDA MOTOR HONDA</b><br>
            <b style="font-size: 8px;text-align: left;">Jl.Raya Bekasi Timur No.158 Cipinang Jakarta Timur Telp.8198484, 8517620 Fax.(021)8514855 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
            <hr style="border: 1px solid #000000;margin-top: -1px;">
        </div>
        <div>
            <h2>Detail Transaksi</h2>
            <table>
                <tr>
                    <td>
                        <table cellspacing="5" cellpadding="3">
                            <tr>
                                <td>No.SO </td>
                                <td>: <?php echo $detail_penjualan['noso']; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal </td>
                                <td>: <?php echo $detail_penjualan['tanggal']; ?></td>
                            </tr>
                            <tr>
                                <td>No.Mesin </td>
                                <td>: <?php echo $detail_penerimaan_motor['nomesin']; ?></td>
                            </tr>
                            <tr>
                                <td>No.Rangka </td>
                                <td>: <?php echo $detail_penerimaan_motor['norangka']; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Motor </td>
                                <td>: <?php echo $detail_motor['nama_motor']; ?></td>
                            </tr>
                            <tr>
                                <td>Warna </td>
                                <td>: <?php echo $detail_penerimaan_motor['warna']; ?></td>
                            </tr>
                            <tr>
                                <td>Tahun </td>
                                <td>: <?php echo $detail_penerimaan_motor['tahun']; ?></td>
                            </tr>
                            <tr>
                                <td>Harga OTR </td>
                                <td>: <?php echo formatrp($detail_motor['harga_otr']); ?></td>
                            </tr>
                            <tr>
                                <td>Marketing </td>
                                <td>: <?php echo $detail_harga['marketing']; ?></td>
                            </tr>
                        </table>
                    </td>
                    <td valign="top">
                        <table cellspacing="0" cellpadding="3" style="margin-left: 50px;">
                            <?php if ($detail_harga['cara_pembelian'] == "Kredit") { ?>
                                <tr>
                                    <td>Leasing </td>
                                    <td>: <?php echo $detail_leasing['leasing']; ?></td>
                                </tr>
                                <tr>
                                    <td>DP System </td>
                                    <td>: <?php echo formatrp($detail_harga['dp_system']); ?></td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td>Diskon </td>
                                <td>: <?php echo formatrp($detail_harga['diskon']); ?></td>
                            </tr>
                            <tr>
                                <td>Tagih </td>
                                <td>: <?php echo formatrp($detail_harga['tagih']); ?></td>
                            </tr>
                            <tr>
                                <td>DP/Uang Muka </td>
                                <td>: <?php echo formatrp($detail_harga['dp']); ?></td>
                            </tr>
                            <tr>
                                <td>Sisa Hutang </td>
                                <td>: <?php echo formatrp($detail_harga['sisa_hutang']); ?></td>
                            </tr>
                            <tr>
                                <td>Fee </td>
                                <td>: <?php echo formatrp($detail_harga['fee']); ?></td>
                            </tr>
                            <tr>
                                <td>Cara Beli </td>
                                <td>: <?php echo $detail_harga['cara_pembelian']; ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <h2>Detail Customer</h2>
            <table>
                <tr>
                    <td>
                        <table cellspacing="5" cellpadding="3">
                            <tr>
                                <td>No.KTP </td>
                                <td>: <?php echo $detail_customer['no_ktp']; ?></td>
                            </tr>
                            <tr>
                                <td>Nama </td>
                                <td>: <?php echo $detail_customer['nama_customer']; ?></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir </td>
                                <td>: <?php echo $detail_customer['tempat_lahir_customer']; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir </td>
                                <td>: <?php echo $detail_customer['tanggal_lahir_customer']; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin </td>
                                <td>: <?php echo ($detail_customer['tanggal_lahir_customer'] == "P" ? "Pria" : "Wanita"); ?></td>
                            </tr>
                            <tr>
                                <td>Alamat </td>
                                <td>: <?php echo $detail_customer['alamat_customer']; ?></td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="3" style="margin-left: 50px;">
                            <tr>
                                <td>RT / RW </td>
                                <td>: <?php echo $detail_customer['rt']; ?> / <?php echo $detail_customer['rw']; ?></td>
                            </tr>
                            <tr>
                                <td>Wilayah </td>
                                <td>: <?php echo $detail_customer['wilayah']; ?></td>
                            </tr>
                            <tr>
                                <td>Kelurahan </td>
                                <td>: <?php echo $detail_customer['kelurahan']; ?></td>
                            </tr>
                            <tr>
                                <td>Kecamatan </td>
                                <td>: <?php echo $detail_customer['kecamatan']; ?></td>
                            </tr>
                            <tr>
                                <td>Telepon </td>
                                <td>: <?php echo $detail_customer['telepon_customer']; ?></td>
                            </tr>
                            <tr>
                                <td>Handphone </td>
                                <td>: <?php echo $detail_customer['handphone_customer']; ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<center><button id="btnPrint">Print</button></center>
<script src="<?php echo base_url(); ?>themes/js/jquery-2.1.0.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            printDiv('printThis');
        }, 1000);
    });

    document.getElementById("btnPrint").onclick = function () {
        //printElement(document.getElementById("printThis"));
        //window.print();
        printDiv('printThis');
    }

    function printElement(elem, append, delimiter) {
        var domClone = elem.cloneNode(true);

        var $printSection = document.getElementById("printSection");

        if (!$printSection) {
            var $printSection = document.createElement("div");
            $printSection.id = "printSection";
            document.body.appendChild($printSection);
        }

        if (append !== true) {
            $printSection.innerHTML = "";
        } else if (append === true) {
            if (typeof (delimiter) === "string") {
                $printSection.innerHTML += delimiter;
            } else if (typeof (delimiter) === "object") {
                $printSection.appendChlid(delimiter);
            }
        }

        $printSection.appendChild(domClone);
    }

    function printDiv(div) {
        // Create and insert new print section
        var elem = document.getElementById(div);
        var domClone = elem.cloneNode(true);
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        $printSection.appendChild(domClone);
        document.body.insertBefore($printSection, document.body.firstChild);

        window.print();

        // Clean up print section for future use
        var oldElem = document.getElementById("printSection");
        if (oldElem != null) {
            oldElem.parentNode.removeChild(oldElem);
        }
        //oldElem.remove() not supported by IE

        return true;
    }

</script>