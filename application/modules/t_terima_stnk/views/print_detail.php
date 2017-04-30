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
    #footer {
        clear: both;
        position: relative;
        z-index: 10;
        height: 3em;
        margin-top: -3em;
    }
</style>
<div id="printThis" style="padding: 10px;text-align: justify;width: 900px;">
    <div style="width:94%;">
        <div style="height: 75px;">
            <img src="<?php echo base_url('assets/images/logo-honda.jpg'); ?>" style="float:left;" height="80px;">
            <div style="text-align: center;font-weight: bolder;font-size: 15px;padding-top: 20px;">
                SURAT TANDA TERIMA STNK DAN BPKB
            </div>
        </div>
        <br>
        <div>
            <table style="margin-left: 20px;" cellpadding="8" cellspacing="3">
                <tr>
                    <td style="width: 100px;">
                        <b>No.Process</b>
                    </td>
                    <td style="width: 200px;">
                        : <?php echo $stnk[0]['no_process'];?>
                    </td>
                    <td style="width: 100px;">
                        <b>Biro Jasa</b>
                    </td>
                    <td style="width: 200px;">
                        : <?php echo $birojasa[0]['nama_birojasa'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>No.SO</b>
                    </td>
                    <td>
                        : <?php echo $penjualan[0]['noso'];?>
                    </td>
                    <td>
                        <b>Tgl Jadi STNK</b>
                    </td>
                    <td>
                        : <?php echo tanggalan($detail['t_terima_tgl_stnk']);?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Customer</b>
                    </td>
                    <td>
                        : <?php echo $customer[0]['nama_customer'];?>
                    </td>
                    <td>
                        <b>Tgl. Jadi BPKB</b>
                    </td>
                    <td>
                        : <?php echo tanggalan($detail['t_terima_tgl_bpkb']);?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>No.Mesin</b>
                    </td>
                    <td>
                        : <?php echo $penjualan[0]['nomsn'];?>
                    </td>
                    <td>
                        <b>No.Polisi</b>
                    </td>
                    <td>
                        : <?php echo $detail['t_terima_no_polisi'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>No.Rangka</b>
                    </td>
                    <td>
                        : <?php echo $terima_motor[0]['norangka'];?>
                    </td>
                    <td>
                        <b>No.STNK</b>
                    </td>
                    <td>
                        : <?php echo $detail['t_terima_no_stnk'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Type</b>
                    </td>
                    <td>
                        : <?php echo $terima_motor[0]['tipe'];?>
                    </td>
                    <td>
                        <b>No.BPKB</b>
                    </td>
                    <td>
                        : <?php echo $detail['t_terima_no_bpkb'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Warna</b>
                    </td>
                    <td>
                        : <?php echo $terima_motor[0]['warna'];?>
                    </td>
                    <td>
                        <b>No.Bon BJ 1</b>
                    </td>
                    <td>
                        : <?php echo $detail['t_terima_no_bon_1'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Tahun</b>
                    </td>
                    <td>
                        : <?php echo $terima_motor[0]['tahun'];?>
                    </td>
                    <td>
                        <b>No.Bon BJ 2</b>
                    </td>
                    <td>
                        : <?php echo $detail['t_terima_no_bon_2'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Harga</b>
                    </td>
                    <td>
                        : <?php echo formatrp($penjualan[0]['harga_otr']);?>
                    </td>
                    <td>
                        <b>Biaya Tambahan 1</b>
                    </td>
                    <td>
                        : <?php echo formatrp($detail['t_terima_add_biaya_1']);?>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        <b>Biaya Tambahan 2</b>
                    </td>
                    <td>
                        : <?php echo formatrp($detail['t_terima_add_biaya_2']);?>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;
                    </td>
                    <td valign="top">
                        <b>Keterangan</b>
                    </td>
                    <td>
                        : <?php echo $detail['t_terima_add_biaya_1_description'];?>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <br>
        <div>
            <div class="head-covernote" style="float:left;">
                <b style="font-size: 22px;">PT.MANDALA KEKAR ABADI</b><br>
                <b style="font-size: 18px;">DEALER RESMI SEPEDA MOTOR HONDA</b><br>
                <b style="font-size: 9px;">Jl.Raya Bekasi Timur No.158 Cipinang Jakarta Timur Telp.8198484, 8517620 Fax.(021)8514855</b>
            </div>
            <div style="text-align: right;">
                <img src="<?php echo base_url('assets/images/mandala-kekar-abadi-logo.jpg'); ?>" height="75px;">
            </div>
        </div>
        <hr style="border: 2px solid #000000;margin-top: -1px;">
    </div>
</div>
<center><button id="btnPrint">Print</button></center>
<script>
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