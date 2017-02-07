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
<div id="printThis" style="padding: 10px;text-align: justify;">
    <div style="width:94%;">
        <img src="<?php echo base_url('assets/images/logo-honda.jpg'); ?>" height="80px;">
        <div style="text-align: center;font-weight: bolder;font-size: 18px;">
            SURAT PERNYATAAN 
        </div>
        <br>
        <div>
            <p>Yang bertanda tangan di bawah ini : </p>
            <table style="margin-left: 40px;">
                <tr>
                    <td>Nama</td>
                    <td>: <?php echo ucwords($detail_owner['company_name']); ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?php echo $detail_owner['owner_address']; ?></td>
                </tr>
            </table>
            <br>
            <p style="text-align: justify;">
                Dengan ini menyatakan bahwa akan menyerahkan/bertanggung jawab atas STNK, BPKB dan Faktur 1 (satu) unit sepeda motor : 
            </p>
            <table style="margin-left: 40px;">
                <tr>
                    <td>Merk/Type</td>
                    <td>: <?php echo ucwords($detail_motor['merk']) . " / " . $detail_penerimaan_motor['tipe']; ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>: <?php echo $detail_motor['nama_motor']; ?></td>
                </tr>
                <tr>
                    <td>Warna/Tahun</td>
                    <td>: <?php echo ucwords($detail_penerimaan_motor['warna']) . " / " . $detail_penerimaan_motor['tahun']; ?></td>
                </tr>
                <tr>
                    <td>No.Polisi</td>
                    <td>: </td>
                </tr>
                <tr>
                    <td>No.Rangka</td>
                    <td>: <?php echo $detail_penerimaan_motor['norangka']; ?></td>
                </tr>
                <tr>
                    <td>No.Mesin</td>
                    <td>: <?php echo $detail_penerimaan_motor['nomesin']; ?></td>
                </tr>
            </table>
            <br>
            <p style="text-align: justify;">
                BPKB tersebut di atas akan kami serahkan kepada <b>PT FEDERAL INTERNATIONAL FINANCE</b> dalam waktu kurang lebih 6 (enam) bulan dari tanggal penyerahan surat pernyataan ini.
            </p>
            <p style="text-align: justify;">
                Demikian surat pernyataan ini dibuat agar dipergunakan sebagaimana mestinya. Atas perhatian dan kerjasamanya, kami mengucapkan terima kasih.
            </p>
            <br>
            <br>
            <div style="text-align: right;">
                <p>
                    Jakarta, <?php echo tanggalan(date('Y-m-d')); ?><br>
                </p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p>
                    <?php echo ucwords($detail_owner['owner_name']); ?><br>
                    <?php echo ucwords($detail_owner['owner_jabatan']); ?>
                </p>
            </div>
        </div>
        <br>
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