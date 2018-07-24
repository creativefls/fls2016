<div class="row">
    <div class="col-lg-3 hidden-xs hidden-sm">
        
    </div>
    <div class="col-lg-7">
        <div class="headline"><h3>Formulir Pendaftaran Calon Delegates</h3></div>
        <form id="formx" method="post" action="" class="form-horizontal" role="form">
            
            <div class="tag-box tag-box-v3 form-page">
                <div class="headline"><h4>Room Pilihan</h4></div>
                
                <div class="form-group">
                    <label class="col-lg-3 control-label">Pilihan 1</label>
                    <div class="col-lg-9">
                        <select class="form-control select2" name="p1">
                            <option value="dm">Digital Media</option>
                            <option value="e">Environtmen</option>
                            <option value="ed">Education Development</option>                            
                            <option value="ia">International Affair</option>
                            <option value="pc">Potential Culture</option>
                            <option value="s">Sociopreneur</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-3 control-label">Pilihan 2</label>
                    <div class="col-lg-9">
                        <select class="form-control select2" name="p2">
                            <option value="dm">Digital Media</option>
                            <option value="e">Environtmen</option>
                            <option value="ed">Education Development</option>                            
                            <option value="ia">International Affair</option>
                            <option value="pc">Potential Culture</option>
                            <option value="s">Sociopreneur</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Pilihan 3</label>
                    <div class="col-lg-9">
                        <select class="form-control select2" name="p3">
                            <option value="dm">Digital Media</option>
                            <option value="e">Environtmen</option>
                            <option value="ed">Education Development</option>                            
                            <option value="ia">International Affair</option>
                            <option value="pc">Potential Culture</option>
                            <option value="s">Sociopreneur</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="tag-box tag-box-v3 form-page">
                <div class="headline"><h4>Data Pribadi</h4></div>                
                
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nama Lengkap</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" required="" name="cari_fullname" required=""/>
                        <div class="note"></div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-3 control-label">Tempat Lahir</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" placeholder="Contoh : Semarang" required="" name="cari_birthplace" required=""/>
                        <div class="note"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Tanggal Lahir</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" placeholder="Format tanggal/bulan/tahun. Contoh: 18/02/1980" id="date1" required="" name="cari_birthdate" required=""/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Jenis Kelamin</label>
                    <div class="col-lg-9">
                        <select class="form-control select2" name="cari_kelamin">
                            <option value="L">Pria</option>
                            <option value="W">Wanita</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Alamat Domisili</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" rows="3" required="" name="cari_alamat"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Kode Pos</label>
                    <div class="col-lg-9">
                        <input class="form-control" placeholder="Kode Pos" type="text" name="cari_kodepos" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">No Telepon / Handphone</label>
                    <div class="col-lg-9">
                        <input class="form-control" placeholder="No Telepon" type="text" name="cari_telepon" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Alamat Email</label>
                    <div class="col-lg-9">
                        <input type="email" class="form-control" placeholder="Alamat Email" required="" name="cari_email" required=""/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Facebook</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" placeholder="fb.com/id.indrakusuma" required="" name="cari_fb" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Twitter</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" placeholder="twitter.com/indra971" required="" name="cari_tw" required=""/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-3 control-label">Penyakit Khusus </label>
                    <div class="col-lg-9">
                        <input class="form-control" placeholder="" type="text" name="cari_cacat" />
                        <div class="note"><i>* isikan (-) Bila tidak ada</i></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Makanan Yang dihindari</label>
                    <div class="col-lg-9">
                        <input class="form-control" placeholder="" type="text" name="cari_makan" />
                        <div class="note"><i>* isikan (-) Bila tidak ada</i></div>
                    </div>
                </div>
                <hr />
                <div class="form-group">
                    <label class="col-lg-3 control-label"></label>
                    <div class="col-lg-9">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
