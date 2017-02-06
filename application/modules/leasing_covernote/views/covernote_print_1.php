<style>
    @media screen {
        #printSection {
            display: none;
        }
        .head-covernote{
            font-family: TimesNewRoman,Times New Roman,Times,Baskerville,Georgia,serif;
        }
    }

    @media print {
        body * {
            visibility:hidden;
        }
        #printSection, #printSection * {
            visibility:visible;
        }
        /*        #printSection {
                    position:absolute;
                    left:0;
                    top:0;
                }*/
        .head-covernote{
            font-family: TimesNewRoman,Times New Roman,Times,Baskerville,Georgia,serif;
        }
    }
</style>
<div id="printThis" style="padding: 10px;text-align: justify;">
    <div style="height: 75px;">
        <img src="<?php echo base_url('assets/images/logo-honda.jpg');?>" style="float:left;" height="80px;">
        <div style="text-align: center;font-weight: bolder;font-size: 15px;padding-top: 20px;">
            SURAT PERNYATAAN <br>
            ("COVERNOTE")
        </div>
    </div>
    <br>
    <div>
        <p>Yang bertanda tangan di bawah ini : </p>
        <table style="margin-left: 40px;">
            <tr>
                <td>Nama</td>
                <td>: <?php echo $detail_owner['owner_name']; ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>: <?php echo $detail_owner['owner_jabatan']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?php echo $detail_owner['owner_address']; ?></td>
            </tr>
        </table>
        <br>
        <p>
            Dalam hal ini bertindak selaku kuasa hukum <b><?php echo ucwords($detail_owner['company_name']); ?></b>
            dan dengan demikian sah mewakili dan bertindak untuk dan atas nama <b><?php echo ucwords($detail_owner['company_name']); ?></b>
        </p>
        <p>
            Dengan ini menerangkan dan menyatakan hal-hal sebagai berikut :
        </p>
        <p>
            Bahwa konsumen (sebagai didefinisikan di bawah ini) telah membeli kendaraan dari dealer dengan data-data sebagai berikut : 
        </p>
        <table style="margin-left: 40px;">
            <tr>
                <td>Nama</td>
                <td>: <?php echo $detail_motor['nama_motor']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kendaraan</td>
                <td>: <?php echo $detail_motor['varian']; ?></td>
            </tr>
            <tr>
                <td>Merk</td>
                <td>: <?php echo $detail_motor['merk']; ?></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>: <?php echo $detail_penerimaan_motor['tipe']; ?></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>: <?php echo $detail_penerimaan_motor['tahun']; ?></td>
            </tr>
            <tr>
                <td>No.Rangka</td>
                <td>: <?php echo $detail_penerimaan_motor['norangka']; ?></td>
            </tr>
            <tr>
                <td>No.Mesin</td>
                <td>: <?php echo $detail_penerimaan_motor['nomesin']; ?></td>
            </tr>
            <tr>
                <td>atas Nama</td>
                <td>: <?php echo $stnk_bpkb_customer['t_stnk_nama']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?php echo $stnk_bpkb_customer['t_stnk_alamat']; ?></td>
            </tr>
            <tr>
                <td>No.Telp(Jika Ada)</td>
                <td>: <?php echo $stnk_bpkb_customer['t_stnk_telepon'] . " / " . $stnk_bpkb_customer['t_stnk_handphone']; ?></td>
            </tr>
        </table>
        <p>Selanjutnya disebut <b>"Kendaraan"</b></p>
        <p>
            Bahwa <b>Buku Pemilikan Kendaraan Kendaraan Bermotor ("BPKB")</b> dan faktur atas Kendaraan Tersebut 
            saat ini sedang dalam proses pengurusan pada instansi terkait : 
        </p>
        <p>
            Bahwa deale akan menyerahkan BPKP dan Faktur atas kendaraan tersebut kepada PT.Wahana Ottomitra Multiartha Tbk. 
            Cabang ................., jalan ....................("WOM Cabang") selambat-lambatnya 3 (Tiga) Bulan terhitung 
            sejak dikeluarkannya Surat Pernyataan ini atau tanggal ...............
        </p>
        <p>
            Apabila pada tanggal penyerahan dealer tidak dapat menyerahkan BPKB dan Faktur kendaraan tersebut, maka dengan ini 
            dealer setuju sebagai berikut : 
        </p>
        <p>
            <ol type="I">
                <li>
                    Menyerahkan faktur berikut dokumen lainnya yang diperlukan untuk pengurusan BPKB atau tanda bukti kepengurusan BPKB 
                    dan instansi terkait; dan
                </li>
                <li>
                    Semua biaya atas pengurusan BPKB tersebut akan menjadi beban sepenuhnya dari Dealer;
                </li>
                <li>
                    Memberi kuasa dengan hak substitusi kepada PT.Wahana Ottomitra Multiartha Tbk,("WOM Finance") untuk mengkompensasikan 
                    (menjumpakan) dengan tagihan-tagihan (Insentif Dealer) terhadap WOM Finance, dengan demikian tidak diperlukan lagi 
                    kuasa khusus tersendiri agar WOM Finance dapat melaksanakan haknya berdasarkan Covernote ini; dan
                </li>
                <li>
                    Melaksanakan hak-haknya sebagaimana ditentukan dalam Perjanjian Kerjasama Dealer Nomor ...............Tanggal ........
                </li>
            </ol>
        </p>
        <p>
            Demikian surat pernyataan ini dibuat untuk dipergunakan sebagaimanamestinya.
        </p>
        <p>
            Jakarta, <?php echo tanggalan(date('Y-m-d')); ?><br>
            <b><?php echo ucwords($detail_owner['company_name']); ?></b>
        </p>
        <br>
        <br>
        <p>Materai Rp.6000</p>
        <br>
        <br>
        <br>
        <p>
            <?php echo ucwords($detail_owner['owner_name']);?><br>
            <?php echo ucwords($detail_owner['owner_jabatan']);?>
        </p>
    </div>
    <div>
        <div class="head-covernote" style="float:left;">
            <b style="font-size: 22px;">PT.MANDALA KEKAR ABADI</b><br>
            <b style="font-size: 18px;">DEALER RESMI SEPEDA MOTOR HONDA</b><br>
            <b style="font-size: 9px;">Jl.Raya Bekasi Timur No.158 Cipinang Jakarta Timur Telp.8198484, 8517620 Fax.(021)8514855</b>
        </div>
        <div style="text-align: right;">
            <img src="<?php echo base_url('assets/images/mandala-kekar-abadi-logo.jpg');?>" height="75px;">
        </div>
    </div>
    <hr style="border: 2px solid #000000;margin-top: -1px;">
</div>
<center><button id="btnPrint">Print</button></center>
<script>
    document.getElementById("btnPrint").onclick = function () {
        printElement(document.getElementById("printThis"));
        window.print();
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
        }

        else if (append === true) {
            if (typeof (delimiter) === "string") {
                $printSection.innerHTML += delimiter;
            }
            else if (typeof (delimiter) === "object") {
                $printSection.appendChlid(delimiter);
            }
        }

        $printSection.appendChild(domClone);
    }
</script>