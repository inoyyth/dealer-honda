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
			font-size: 10px;
        }
		#footer {
		   position:fixed;
		   left:0px;
		   bottom:0px;
		   height:100px;
		   width:100%;
		   background:#999;
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
                    <td style="width: 110px;">Nama</td>
                    <td>: <?php echo ucwords($detail_owner['owner_name']); ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?php echo $detail_owner['owner_address']; ?></td>
                </tr>
                <tr>
                    <td>No.KTP</td>
                    <td>: <?php echo ucwords($detail_owner['owner_ktp']); ?></td>
                </tr>
            </table>
            <br>
            <p style="text-align: justify;">
                Dalam hal ini bertindak selaku pimpian/<?php echo $detail_owner['company_name']; ?> dari <b><?php echo ucfirst($detail_owner['owner_address']); ?></b> yang beralamat di <b><?php echo ucfirst($detail_owner['owner_address']); ?></b> (selanjutnya disebut <b>"Dealer"</b>) karenanya berhak dan berwenang bertindak untuk dan atas nama Dealer.
            </p>
            <p>
                Dengan ini menyatakan sebagai berikut : 
            </p>
            <div>
                <ol type="1">
                    <li>
                        Bahwa benar Dealer adalah pihak yang bertanggung jawab dalam pengurusan dokumen kendaraan 
                        namun tidak terbatas pada Bukti Pemilikan Kendaraan Bermotor (BPKB) dan Surat Tanda Nomor 
                        Kendaraan Kendaraan (STNK) untuk konsumen atas nama <b><?php echo ucfirst($stnk_bpkb_customer['t_stnk_nama']); ?></b>. 
                        Dengan data sebagai berikut : 
                        <ul>
                            <li>
                                Merk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                                <b><?php echo ucwords($detail_motor['merk']); ?></b> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Type: <b><?php echo ucwords($detail_penerimaan_motor['tipe']); ?></b> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Tahun: <b><?php echo ucwords($detail_penerimaan_motor['tahun']); ?></b> 
                            </li>
                            <li>
                                No.Rangka &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                                <b><?php echo ucwords($detail_penerimaan_motor['norangka']); ?></b> 
                            </li>
                            <li>
                                No.Mesin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                                <b><?php echo ucwords($detail_penerimaan_motor['nomesin']); ?></b> 
                            </li>
                        </ul>
                    </li>
                    <li>
                        Bahwa dokumen kendaraan diatas akan dibuat dengan atas nama <b><?php echo ucfirst($stnk_bpkb_customer['t_stnk_nama']); ?></b> 
                        Dengan alamat  <b><?php echo ucfirst($stnk_bpkb_customer['t_stnk_alamat']); ?></b> 
                        diselesaikan selambat-lambatnya 90 (sembilan puluh) hari kalender untuk BPKB dan 30 (tiga puluh) hari 
                        untu STNK.
                    </li>
                    <li>
                        Bahwa apabila dokumen kendaraan diatas telah selesai pengurusannya maka Dealer wajib menyerahkan 
                        kepada <b>PT Summit Oto Finance</b> berupa asli BPKB, asli copy faktur, beserta dokumen lain yang terkait.
                    </li>
                    <li>
                        Bahwa Dealer bertanggung jawab atas kesalahan, keterlambatan, kehilangan dalam pengurusan 
                        dokumen kendaraan termasuk kesalahan dalam penyerahan dokumen kendaraan yang disebutkan pada angka 3 diatas 
                        dan membebaskan <b>PT Summit Oto Finance</b> dengan menanggung segala hal tuntutan dan ganti rugi kerugian 
                        dari pihak lain termasuk dari konsumen sendiri yang akan timbul di kemudian hari.
                    </li>
                </ol>
            </div>
            <br>
            <p>
                Demikian surat pernyataan ini dibuat agar dipergunakan sebagaimana mestinya.
            </p>
            <br>
            <br>
            <div>
                <p>
                    Jakarta, <?php echo tanggalan(date('Y-m-d')); ?><br>
                </p>
                <p>Yang Menyatakan,</p>
                <br>
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
        <div id="footer">
            <div class="head-covernote" style="float:left;">
                <b style="font-size: 22px;">PT.MANDALA KEKAR ABADI</b><br>
                <b style="font-size: 18px;">DEALER RESMI SEPEDA MOTOR HONDA</b><br>
                <b style="font-size: 9px;">Jl.Raya Bekasi Timur No.158 Cipinang Jakarta Timur Telp.8198484, 8517620 Fax.(021)8514855</b>
            </div>
            <div style="text-align: right;">
                <img src="<?php echo base_url('assets/images/mandala-kekar-abadi-logo.jpg'); ?>" height="75px;">
            </div>
			<hr style="border: 2px solid #000000;margin-top: -1px;">
        </div>
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