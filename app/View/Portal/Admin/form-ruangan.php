 <header class="header">
       <a href="#" class="logo">SI<span>Rusun</span></a>
       <nav class="navbar-portal">
           <a href="portal-rusun.html">Beranda</a>
           <a href="portal-rusunku.html">Rusunku</a>
           <a href="portal-pemberitahuan.html">Pemberitahuan</a>
           <a href="portal-keluhan.html">Keluhan</a>
           <a href="portal-login.html"> Logout</a>
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
               <form method="post" action="/portal/admin/form_ruangan" id="edit-ruang">
                   <div class="item">
                       <p>Nomor Rusun</p>

                       <input type="text" name="no_ruangan" value="<?php echo $model['data']->no_ruang ?? "" ?>" required />
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
                       <p>Harga Sewa</p>
                       <input type="text" name="" required />
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
                           <button class="btn-rule" type="submit" form="edit-ruang">Simpan</button>
                           <a href="/portal/admin/ruangan" class="btn-rule">Kembali</a>
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </section>