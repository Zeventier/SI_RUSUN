 <header class="header">
     <a href="#" class="logo">SI<span>Rusun</span></a>
     <nav class="navbar-portal">
         <a href="/portal/admin">Pelayanan</a>
         <a href="/portal/admin/home">Rusunku</a>
         <a href="/portal/admin/pemberitahuan">Pemberitahuan</a>
         <a href="/portal/admin/keluhan?date=<?php echo date('Y-m') ?>">Keluhan</a>
         <a href="/portal/admin/logout"> Logout</a>
     </nav>

     <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
     </div>
 </header>

 <section class="form-input">
     <div>
         <h1 class="heading">Edit Ruang Rusun</h1>
     </div>

     <div class="rule">
         <div class="list">
             <form method="post" action="/portal/admin/form_ruangan?kode_ruangan=<?php echo $_GET["kode_ruangan"] ?? ''; ?>" id="edit-ruang">
                 <div class="item">
                     <p>Nomor Rusun</p>
                     <input type="text" maxlength="3" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" name="no_ruangan" value="<?php echo $model['data']->no_ruang ?? "" ?>" required />
                 </div>
                 <div class="item">
                     <p>Lantai</p>
                     <select name="lantai" required>
                         <option value="">Select</option>
                         <option value="1" <?php if ($model['data']->lantai == 1) {
                                                echo "selected";
                                            } ?>>1</option>
                         <option value="2" <?php if ($model['data']->lantai == 2) {
                                                echo "selected";
                                            } ?>>2</option>
                         <option value="3" <?php if ($model['data']->lantai == 3) {
                                                echo "selected";
                                            } ?>>3</option>
                         <option value="4" <?php if ($model['data']->lantai == 4) {
                                                echo "selected";
                                            } ?>>4</option>
                     </select>
                 </div>
                 <div class="item">
                     <p>Keterangan</p>
                     <select name="keterangan" required>
                         <option value="">Select</option>
                         <option value="Kosong" <?php if ($model['data']->keterangan == 'Kosong') {
                                                    echo "selected";
                                                } ?>>Kosong</option>
                         <option value="Rusak" <?php if ($model['data']->keterangan == 'Rusak') {
                                                    echo "selected";
                                                } ?>>Rusak</option>
                         <option value="Terisi" <?php if ($model['data']->keterangan == 'Terisi') {
                                                    echo "selected";
                                                } ?>>Terisi</option>
                     </select>
                 </div>
                 <div class="nav-rule">
                     <div></div>
                     <div>
                         <button class="btn-success" type="submit" form="edit-ruang">Simpan</button>
                         <button onclick="location.href='/portal/admin/ruangan'" class="btn-danger">Kembali</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </section>

 <script src="assets/js/script.js"></script>