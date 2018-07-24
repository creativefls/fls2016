<div class="container content">
    
                <!--=== Content Part ===-->
        <div class="row wow animated fadeInUp">
            <div class="col-md-12 mb-margin-bottom-30">
            
<div class="col-md-3">
    
</div>
<div class="col-md-6">
    <div class="tag-box tag-box-v3 form-page">
               <center> <h2 class="nunito">Form Pendaftaran Kerjasama</h2>
               <h3 class="nunito">Future Leader Summit 2016</h3> </center>
               <?php if($this->session->flashdata('info')): ?>
                <div class="row">
                    <div class="col-md-11">
                        <div class="alert alert-info fade in alert-dismissable ">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('info'); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
                <hr class="divider">    
                <form action="<?=base_url(); ?>main/add_kerjasama" method="post" id="sky-form3" class="sky-form contact-style">
                    <fieldset class="no-padding">
                        <label>Nama Perusahaan</label>
                        <div class="row sky-space-20">
                            <div class="col-md-12 col-md-offset-0">
                                <div>
                                    <input type="text" name="nama_p" id="nama_p" class="form-control">
                                </div>
                            </div>                
                        </div>
                        <label>Nama Anda</label>
                        <div class="row sky-space-20">
                            <div class="col-md-12 col-md-offset-0">
                                <div>
                                    <input type="text" name="nama_cu" id="nama_cu" class="form-control">
                                </div>
                            </div>                
                        </div>
                        <label>Email</label>
                        <div class="row sky-space-20">
                            <div class="col-md-12 col-md-offset-0">
                                <div>
                                    <input type="text" name="email_cu" id="email_cu" class="form-control">
                                </div>
                            </div>                
                        </div>
                        <label>Handphone / Telepon</label>
                        <div class="row sky-space-20">
                            <div class="col-md-12 col-md-offset-0">
                                <div>
                                    <input type="text" name="no_telp" id="no_telp" class="form-control">
                                </div>
                            </div>                
                        </div>
                        <label>Bentuk Kerjasama</label>
                         <div class="row sky-space-20">
                            <div class="col-md-12 col-md-offset-0">
                                <label class="select">
                                    <select name="ks">
                                        <option value="Sponsorship">Sponsorship</option>
                                        <option value="Media">Media Patner</option>
                                        <option value="Lainya">Lainya..</option>
                                    </select>
                                    <i></i>
                                </label>
                            </div>                
                        </div>

                        <label>Pesan <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-12 col-md-offset-0">
                                <div>
                                    <textarea rows="8" name="pesan_cu" id="pesan_cu" class="form-control"></textarea>
                                </div>
                            </div>                
                        </div>
                        
                        <p><button type="submit" class="btn-u">Send Message</button></p>
                    </fieldset>

                    <div class="message">
                        <i class="rounded-x fa fa-check"></i>
                        <p>Your message was successfully sent!</p>
                    </div>
                </form>
            </div><!--/col-md-9-->
</div>
<div class="col-md-3">
    
</div>
       </div>     
        </div><!--/row-->           
    <!--=== End Content Part ===-->

</div>