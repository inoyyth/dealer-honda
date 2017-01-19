<div class="col-md-12">
    <section class="panel default blue_title h2">
        <div class="panel-heading">Transaksi STNK & BPKB</div>
        <div class="panel-body">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#Tab1">Proses STNK/BPKB</a></li>
                <li><a data-toggle="tab" href="#Tab2">TT STNK BPKB</a></li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div id="Tab1" class="tab-pane fade in active">
                    <form action="<?php echo base_url("stnk-save-proses"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
                        <div class="col-md-12">
                            <div class="block-web">
                                <div class="header">
                                    <div class="actions"> </div>
                                    <h3 class="content-header">Proses STNK/BPKB</h3>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">No Proses</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_proses" id="no_proses" value="<?php echo $codeso; ?>" parsley-trigger="change" required placeholder="No Proses" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" id="remote">
                                            <label class="col-sm-3 control-label">No Sales Order</label>
                                            <div class="col-sm-9">
                                                <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" class="form-control">
                                                <div class="col-md-9">
                                                    <input class="typeahead form-control" parsley-trigger="change" required name="noso" id="noso" type="text" placeholder="Type No Sales Order">
                                                </div>
                                                <button type="submit" name="search" id="search" class="btn btn-default">Search</button>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">No. Mesin</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="no_mesin" id="no_mesin" parsley-trigger="change" required placeholder="No. Mesin" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">No. Rangka</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="no_rangka" id="no_rangka" parsley-trigger="change"     placeholder="No. Rangka" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Type</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="type" id="type" parsley-trigger="change"     placeholder="Type" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Warna</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="warna" id="warna" parsley-trigger="change"     placeholder="Warna" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Tahun</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tahun" id="tahun" parsley-trigger="change"     placeholder="Tahun" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">No Proses</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="no_proses" id="no_proses" value="<?php echo $codeso; ?>" parsley-trigger="change" required placeholder="No Proses" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Leasing</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="leasing" id="leasing" parsley-trigger="change"  placeholder="Leasing" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Tgl Proses STNK</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tgl_proses_stnk" id="tgl_proses_stnk" parsley-trigger="change" required placeholder="Tanggal Proses STNK" class="form-control datepicker">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Tgl Proses BPKB</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tgl_proses_bpkb" id="tgl_proses_bpkb" parsley-trigger="change" required   placeholder="Tanggal Proses BPKB" class="form-control datepicker">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Est. STNK selesai</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="est_stnk_selesai" id="est_stnk_selesai" parsley-trigger="change" required   placeholder="Estimasi STNK Selesai" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Est. BPKB selesai</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="est_bpkb_selesai" id="est_bpkb_selesai" parsley-trigger="change" required   placeholder="Estimasi BPKB Selesai" class="form-control">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <input type="checkbox" name="est_bpkb_selesai" onclick="handleClick(this);" > <label class="control-label">Beri tanda apabila STNK sama dengan data customer</label>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="header">
                                    <div class="actions"> </div>
                                    <h3 class="content-header">Data Customer</h3>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">ID/KTP</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ktp_stnk" id="no_ktp" parsley-trigger="change"  placeholder="ID/KTP" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" id="nama" parsley-trigger="change"  placeholder="Nama" class="form-control">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tempat_lahir" id="tempat_lahir_customer" parsley-trigger="change" placeholder="Tempat Lahir" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tanggal_lahir" id="tanggal_lahir_customer" parsley-trigger="change"  placeholder="Tanggal Lahir" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="kelamin_customer"  id="kelamin_customer">
                                            <option value=""> --Pilih-- </option>
                                            <option value="P"> Laki-Laki </option>
                                            <option value="W"> Perempuan </option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea name="alamat" id="alamat_customer" class="form-control"> </textarea>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">RT - RW </label>
                                    <div class="col-sm-9">

                                        <div class="col-sm-6">
                                            <input type="text" name="rt" id="rt" parsley-trigger="change"     placeholder="RT" class="form-control">
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="text" name="rw" id="rw" parsley-trigger="change"     placeholder="RW" class="form-control">
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Wilayah</label>
                                    <div class="col-sm-9">
                                        <select name="wilayah" id="wilayah">
                                            <option value="">--Pilih--</option>
                                            <option value="jakpus"> JAKARTA PUSAT </option>
                                            <option value="jaktim"> JAKARTA TIMUR </option>
                                            <option value="jaksel"> JAKARTA SELATAN </option>
                                            <option value="jakut"> JAKARTA UTARA </option>
                                            <option value="jakbar"> JAKARTA BARAT </option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kel/Desa</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kel_desa" id="kelurahan" parsley-trigger="change"     placeholder="Kel/Desa" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kecamatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kecamatan" id="kecamatan" parsley-trigger="change"     placeholder="Kecamatan" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="telepon" id="telepon_customer" parsley-trigger="change"     placeholder="Telepon" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Handphone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="handphone" id="handphone_customer" parsley-trigger="change"     placeholder="Handphone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--form2-->
                            <div class="col-md-6">
                                <div class="header">
                                    <div class="actions"> </div>
                                    <h3 class="content-header">Data Customer</h3>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">ID/KTP</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ktp_stnk_same" id="no_ktp_same" parsley-trigger="change"  placeholder="ID/KTP" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_same" id="nama_same" parsley-trigger="change"  placeholder="Nama" class="form-control">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tempat_lahir_same" id="tempat_lahir_same" parsley-trigger="change" placeholder="Tempat Lahir" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tanggal_lahir_same" id="tanggal_lahir_same" parsley-trigger="change"  placeholder="Tanggal Lahir" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="kelamin_customer_same"  id="kelamin_customer_same">
                                            <option value=""> --Pilih-- </option>
                                            <option value="P"> Laki-Laki </option>
                                            <option value="W"> Perempuan </option>
                                        </select>


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea name="alamat_same" id="alamat_same" class="form-control"> </textarea>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">RT - RW </label>
                                    <div class="col-sm-9">

                                        <div class="col-sm-6">
                                            <input type="text" name="rt_same" id="rt_same" parsley-trigger="change"     placeholder="RT" class="form-control">
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="text" name="rw_same" id="rw_same" parsley-trigger="change"     placeholder="RW" class="form-control">
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Wilayah</label>
                                    <div class="col-sm-9">
                                        <select name="wilayah" id="wilayah_same">
                                            <option value="">--Pilih--</option>
                                            <option value="jakpus"> JAKARTA PUSAT </option>
                                            <option value="jaktim"> JAKARTA TIMUR </option>
                                            <option value="jaksel"> JAKARTA SELATAN </option>
                                            <option value="jakut"> JAKARTA UTARA </option>
                                            <option value="jakbar"> JAKARTA BARAT </option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kel/Desa</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kel_desa" id="kelurahan_same" parsley-trigger="change"     placeholder="Kel/Desa" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kecamatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kecamatan" id="kecamatan_same" parsley-trigger="change"     placeholder="Kecamatan" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="telepon" id="telepon_customer_same" parsley-trigger="change"     placeholder="Telepon" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Handphone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="handphone" id="handphone_customer_same" parsley-trigger="change"     placeholder="Handphone" class="form-control">
                                    </div>
                                </div>


                            </div>
                            <div class="clear"></div>
                        </div>



                        <div class="col-md-12">
                            <button name="submit" id="new" class="btn btn-default">New</button>
                            <button type="submit" name="save" id="save" class="btn btn-default">Save</button>
                            <button type="submit" name="New" id="edit" class="btn btn-default">Edit</button>
                            <button type="reset" name="cancel" id="cancel" class="btn btn-default">Cancel</button>
                        </div>

                    </form>





                </div>

                <!--form2 tab kedua-->
                <div id="Tab2" class="tab-pane fade">

                    <form action="<?php echo base_url("stnk-save-tt"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
                        <div class="col-md-12">
                            <div class="block-web">
                                <div class="header">
                                    <div class="actions"> </div>
                                    <h3 class="content-header">Tanda Terima STNK/BPKB</h3>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group" id="remotex">
                                        <label class="col-sm-3 control-label">No Proses</label>
                                        <div class="col-sm-9">
                                            <input type="hidden" name="id_tt" id="id_tt" parsley-trigger="change" required readonly="true" class="form-control">
                                            <input class="typeahead1 form-control" parsley-trigger="change" required name="no_proses_tt" id="no_proses_tt" type="text" placeholder="Type No Sales Order">
                                            <!--<input type="text" name="no_proses" id="no_proses"   parsley-trigger="change" required placeholder="No Proses" class="form-control">-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">


                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"> Nama</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="nama" id="nama" parsley-trigger="change" required placeholder="No. Mesin" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Alamat</label>
                                                <div class="col-sm-9">
                                                    <textarea name="alamat" class="form-control"> </textarea>

                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">No. Mesin</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="nomsn" id="nomsn"   placeholder="No Mesin" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">No. Rangka</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="norangka" id="norangka"   placeholder="No Rangka" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Type</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="tipe_motor" id="tipe_motor"   placeholder="Type" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Warna</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="warna" id="warna"  placeholder="Warna" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tahun</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="tahun" id="tahun" parsley-trigger="change"     placeholder="Tahun" class="form-control">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">No.Polisi</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="nopolisi" id="nopolisi" parsley-trigger="change"     placeholder="Tahun" class="form-control">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">No.BPKB</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="no_bpkb" id="no_bpkb" parsley-trigger="change"     placeholder="Tahun" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Biro Jasa</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="biro_jasa" id="biro_jasa" parsley-trigger="change"     placeholder="Leasing" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tgl Jadi STNK </label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="tgl_jadi_stnk" id="tgl_jadi_stnk" parsley-trigger="change"     placeholder="Tanggal Proses STNK" class="form-control datepicker">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">No Bon Biro Jasa 1</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="bon_biro_jasa_1" id="bon_biro_jasa_1" parsley-trigger="change" required   placeholder="Tanggal Proses BPKB" class="form-control ">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tanggal jadi BPKB </label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="tgl_jadi_bpkb" id="tgl_jadi_bpkb" parsley-trigger="change"     placeholder="Tanggal Proses STNK" class="form-control datepicker">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">No Bon Biro Jasa 2</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="bon_biro_jasa2" id="bon_biro_jasa_2" placeholder="Tanggal Proses BPKB" class="form-control ">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">No.BPKB</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="no_bpkb_jadi" id="no_bpkb_jadi"   placeholder="Tanggal Proses BPKB" class="form-control ">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Biaya Tambahan 1</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="biaya_tambahan_1" id="biaya_tambahan_1"   placeholder="Tanggal Proses BPKB" class="form-control ">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Ket</label>
                                                <div class="col-sm-9">
                                                    <textarea name="ket_1" class="form-control"> </textarea>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Biaya Tambahan 2</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="biaya_tambahan_2" id="biaya_tambahan_2"   placeholder="Tanggal Proses BPKB" class="form-control ">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Ket</label>
                                                <div class="col-sm-9">
                                                    <textarea name="ket_2" class="form-control"> </textarea>

                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="col-md-12">
                                <button name="submit" id="new" class="btn btn-default">New</button>
                                <button type="submit" name="save" id="save" class="btn btn-default">Save</button>
                                <button type="submit" name="New" id="edit" class="btn btn-default">Edit</button>
                                <button type="reset" name="cancel" id="cancel" class="btn btn-default">Cancel</button>
                                <button type="reset" name="cancel" class="btn btn-default">Print TT STNK </button>
                                <button type="reset" name="cancel" class="btn btn-default">Print TT BPKB </button>
                                <button type="reset" name="cancel" class="btn btn-default">Print KW Ket 1 </button>
                                <button type="reset" name="cancel" class="btn btn-default">Print KW Ket 2 </button>
                            </div>

                    </form>


                </div>

            </div>
        </div>
    </section>
</div>





<script>
    $(document).ready(function () {
        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '<?php echo base_url('t_stnk_bpkb/t_stnk_bpkb/getSO?query=%QUERY'); ?>',
                wildcard: '%QUERY'
            }
        });

        $('#remote .typeahead').typeahead(null, {
            name: 'noso',
            display: 'noso',
            source: bestPictures
        });

        $('#remote .typeahead').bind('typeahead:selected', function (obj, datum, name) {
            console.log(datum);
            $('#noso').val(datum.noso);
            $('#harga_otr').val(datum.harga_otr);
            $('#nama').val(datum.nama_customer);
            $('#fee').val(datum.fee);
            $('#no_mesin').val(datum.nomsn);
            $('#warna').val(datum.warna_motor);
            $('#type').val(datum.tipe_motor);
            $('#no_rangka').val(datum.norangka);
            $('#tahun').val(datum.tahunmotor);
            $('#leasing').val(datum.leasing);
            $('#no_ktp').val(datum.no_ktp);
            $('#tempat_lahir_customer').val(datum.tempat_lahir_customer);
            $('#tanggal_lahir_customer').val(datum.tanggal_lahir_customer);
            $('#alamat_customer').val(datum.alamat_customer);
            $('#kelamin_customer').val(datum.kelamin_customer);
            $('#telepon_customer').val(datum.telepon_customer);
            $('#handphone_customer').val(datum.handphone_customer);
            $('#rt').val(datum.rt);
            $('#rw').val(datum.rw);
            $('#wilayah').val(datum.wilayah);
            $('#kelurahan').val(datum.kelurahan);
            $('#kecamatan').val(datum.kecamatan);
            //$('#terbilang').val(datum.terbilang);
            //$('#norangka').val(datum['norangka']);
            //$('#warna').val(datum['warna']);
            //$('#tahun').val(datum['tahun']);
        });




        var get = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '<?php echo base_url('t_stnk_bpkb/t_stnk_bpkb/getNOPRO?hasil=%HASIL'); ?>',
                wildcard: '%HASIL'
            }
        });

        $('#remotex #no_proses_tt').typeahead(null, {
            name: 'no_proses_tt',
            display: 'no_proses_tt',
            source: get
        });

        $('#remotex #no_proses_tt').bind('typeahead:selected', function (obj, datumx, name) {
            console.log(datumx);
            $('#no_proses_tt').val('okegan');
            $('#tgl_jadi_stnk').val(datumx.estimasi_stnk_selesai);
            alert(datumx.noproses);
        });


    });

    function cetak() {
        var data = $('#noso').val();
        //var res = data.replace("/,/","-");

        //var mystring = "SO/MKA-2016/XI/000001"  
        var newchar = '_'
        var res = data.split('/').join(newchar);


        //alert(res);
        //$.post( "<?php echo base_url(); ?>kwitansi-diskon-printout/?template=table_html&name=kwitansi-dp-printout", { noso: data } );
        location.href = "<?php echo base_url(); ?>pdi-printout/" + res + "?template=table_html&name=pdi-printout";
        //alert(data);
    }


    $("#tgl_proses_stnk").focusout(function () {
        var tgl_proses_stnk = $(this).val();
        //alert(tgl_proses_stnk);

        $.post("t_stnk_bpkb/pro_est_date_stnk/", {tgl_proses_stnk: tgl_proses_stnk}).done(function (data) {
            $("#est_stnk_selesai").val(data);
            //alert(data); 
        });

        //var number = parseFloat(nominal.split('.').join(""));
        //var hargaotr = $("#harga_otr").val();
        //var dp = $("#dp").val();
        //var dpnumber = parseFloat(dp.split('.').join(""));
        //var sisahutang = parseFloat(hargaotr.split(".").join("")) - (dpnumber + number);

        //$("#sisa").val(sisahutang);
        return false;
    });

    $("#tgl_proses_bpkb").focusout(function () {
        var tgl_proses_bpkb = $(this).val();
        //alert(tgl_proses_stnk);

        $.post("t_stnk_bpkb/pro_est_date_bpkb/", {tgl_proses_bpkb: tgl_proses_bpkb}).done(function (data) {
            $("#est_bpkb_selesai").val(data);
            //alert(data); 
        });

        //var number = parseFloat(nominal.split('.').join(""));
        //var hargaotr = $("#harga_otr").val();
        //var dp = $("#dp").val();
        //var dpnumber = parseFloat(dp.split('.').join(""));
        //var sisahutang = parseFloat(hargaotr.split(".").join("")) - (dpnumber + number);

        //$("#sisa").val(sisahutang);
        return false;
    });

    function handleClick(cb) {
        var no_ktp_source = $('#no_ktp').val();
        var nama_source = $('#nama').val();
        var tempat_lahir_customer_source = $('#tempat_lahir_customer').val();
        var tanggal_lahir_customer_source = $('#tanggal_lahir_customer').val();
        var kelamin_customer_source = $('#kelamin_customer').val();
        var alamat_source = $('#alamat_customer').val();
        var rt_source = $('#rt').val();
        var rw_source = $('#rw').val();
        var wilayah_source = $('#wilayah').val();
        var kelurahan_source = $('#kelurahan').val();
        var kecamatan_source = $('#kecamatan').val();
        var telepon_source = $('#telepon_customer').val();
        var handphone_source = $('#handphone_customer').val();


        //var no_ktp_same = $('#no_ktp_same').val();

        if (cb.checked == true) {
            $('#no_ktp_same').val(no_ktp_source);
            $('#nama_same').val(nama_source);
            $('#tempat_lahir_same').val(tempat_lahir_customer_source);
            $('#tanggal_lahir_same').val(tanggal_lahir_customer_source);
            $('#kelamin_customer_same').val(kelamin_customer_source);
            $('#alamat_same').val(alamat_source);
            $('#rt_same').val(rt_source);
            $('#rw_same').val(rw_source);
            $('#wilayah_same').val(wilayah_source);
            $('#kelurahan_same').val(kelurahan_source);
            $('#kecamatan_same').val(kecamatan_source);
            $('#telepon_customer_same').val(telepon_source);
            $('#handphone_customer_same').val(handphone_source);
        } else {
            $('#no_ktp_same').val('');
            $('#nama_same').val('');
            $('#tempat_lahir_same').val('');
            $('#tanggal_lahir_same').val('');
            $('#kelamin_customer_same').val('');
            $('#alamat_same').val('');
            $('#rt_same').val('');
            $('#rw_same').val('');
            $('#wilayah_same').val('');
            $('#kelurahan_same').val('');
            $('#kecamatan_same').val('');
            $('#telepon_customer_same').val('');
            $('#handphone_customer_same').val('');
        }
        //alert(cb.checked);

        //var ktp = $('#no_ktp').val();
        //alert(ktp);
        //display("Click, new value = " + cb.checked);
    }




    function getGudangTo(id) {
        $("#id_gudang_in").html("<option value=''>Wait ...</option>")
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('motor_keluar/get_gudang_to'); ?>",
            data: {id: id},
            dataType: 'html',
            success: function (result) {
                $("#id_gudang_in").html(result);
            },
            error: function (result) {
                alert(result);
            }
        });
    }
</script>

