 <h1 align="center">Tanda Terima</h1>
 <table border="0">
     <tr>
         <td style="width:30%;"> No. Kwitansi</td>
         <td style="width:5%;"> : </td>
         <td style="width:60%;" colspan="3"> <?php echo $list->nokwitansi;?></td>  
     </tr>
     <tr>
         <td style="width:30%;"> No. SO</td>
         <td style="width:5%;"> : </td>
         <td style="width:60%;" colspan="3"> <?php echo $list->noso;?></td> 
     </tr>
     <tr>
         <td style="width:95%;" colspan="6"> </td>
         
     </tr>
     <tr>
         <td style="width:30%;"> Telah Terima Dari</td>
         <td style="width:5%;"> : </td>
         <td style="width:60%;" colspan="3"> <?php echo $list->nama_customer;?> </td> 
     </tr>
     <tr>
         <td style="width:30%;"> Uang Sejumlah</td>
         <td style="width:5%;"> : </td>
         <td style="width:60%;" colspan="3"> <?php echo terbilang($list->nominal);?> </td> 
     </tr>
      <tr>
         <td style="width:95%;" colspan="6"> </td>
         
     </tr>
      <tr>
         <td style="width:95%;" colspan="6"> </td>
         
     </tr>
     <tr>
         <td style="width:30%;"> Untuk Pembayaran</td>
         <td style="width:5%;"> : </td>
         <td style="width:60%;" colspan="3"> <?php echo $list->statusf;?> (<?php echo $list->nomsn .' - '.$list->warna_motor. ' - '. $list->tipe_motor; ;?>)  </td> 
     </tr>
     <tr>
         <td style="width:30%;"> </td>
         <td style="width:5%;">  </td>
         <td style="width:60%;" colspan="3">  </td> 
     </tr>
     <tr>
         
         <td style="width:60%;" colspan="3">  </td> 
         <td style="width:10%;"> Secara</td>
         <td style="width:5%;"> : </td>
         <td style="width:20%;"> <?php echo $list->cara_pembelian; ?> </td> 
     </tr>
     <tr>
         <td style="width:30%;"> Jumlah Rp. </td>
         <td style="width:5%;"> : </td>
         <td style="width:60%;" colspan="3"> <?php echo $list->nominal; ?> </td> 
     </tr>
     <tr>
         <td style="width:30%;"> No. Mesin</td>
         <td style="width:5%;"> : </td>
         <td style="width:60%;" colspan="3"> <?php echo $list->nomsn; ?></td> 
     </tr>
     <tr>
         <td style="width:30%;"> </td>
         <td style="width:5%;">   </td>
         <td style="width:60%;" colspan="3">   </td> 
     </tr>
      <tr>
         <td style="width:30%;"> </td>
         <td style="width:5%;">   </td>
         <td style="width:60%;" colspan="3">   </td> 
     </tr>
      <tr>
         <td style="width:30%;"> </td>
         <td style="width:5%;">   </td>
         <td style="width:60%;" colspan="3">   </td> 
     </tr>
     <tr>
         <td style="width:30%;"> </td>
         <td style="width:5%;">   </td>
         <td style="width:60%;" colspan="3"> JAKARTA , <?php echo tanggalan(date('Y m d'));?>  </td> 
     </tr>
       <tr align="center">
         <td style="width:30%;" >   </td>
         <td style="width:30%;">  Mengetahui  </td>
         <td style="width:35%;" colspan="3"> Kasir  </td> 
     </tr>
      <tr>
         <td style="width:30%;"> </td>
         <td style="width:5%;">   </td>
         <td style="width:60%;" colspan="3">   </td> 
     </tr>
      <tr>
         <td style="width:30%;"> </td>
         <td style="width:5%;">   </td>
         <td style="width:60%;" colspan="3">   </td> 
     </tr>
      <tr>
         <td style="width:30%;"> </td>
         <td style="width:5%;">   </td>
         <td style="width:60%;" colspan="3">   </td> 
     </tr>
      <tr>
         <td style="width:30%;"> </td>
         <td style="width:5%;">   </td>
         <td style="width:60%;" colspan="3">   </td> 
     </tr>
        <tr align="center">
         <td style="width:30%;" >   </td>
         <td style="width:30%;"> (&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;) </td>
         <td style="width:35%;" colspan="3"> (&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;) </td> 
     </tr>
     
      
 </table>
 <br>
 <br>
 
</div>