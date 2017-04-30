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
            <table>
                <tr>
                    <td>
                        <b>No.Process</b>
                    </td>
                    <td>
                        : <?php echo $stnk[0]['no_process'];?>
                    </td>
                    <td>
                        <b>No.SO</b>
                    </td>
                    <td>
                        : <?php echo $penjualan[0]['noso'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>No.Process</b>
                    </td>
                    <td>
                        : <?php echo $stnk[0]['no_process'];?>
                    </td>
                    <td>
                        <b>No.SO</b>
                    </td>
                    <td>
                        : <?php echo $penjualan[0]['noso'];?>
                    </td>
                </tr>
            </table>
        </div>
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