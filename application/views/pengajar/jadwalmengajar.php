            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-lg">
                                <div class="btn-group btn-group-sm pull-right" role="group" aria-label="Basic example" style="margin-bottom: 10px">
                                    <a href="<?=base_url()?>Pengajar/jadwalMengajar/1" class="btn btn-secondary">Senin</a>
                                    <a href="<?=base_url()?>Pengajar/jadwalMengajar/2" class="btn btn-secondary">Selasa</a>
                                    <a href="<?=base_url()?>Pengajar/jadwalMengajar/3" class="btn btn-secondary">Rabu</a>
                                    <a href="<?=base_url()?>Pengajar/jadwalMengajar/4" class="btn btn-secondary">Kamis</a>
                                    <a href="<?=base_url()?>Pengajar/jadwalMengajar/5" class="btn btn-secondary">Jumat</a>
                                </div>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Mata Pelajaran</th>
                                                <th>Pengajar</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam_selesai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($jadwal as $key) { ?>
                                            <tr>
                                                <td><?=$key->pelajaran?></td>
                                                <td><?=$key->nama?></td>
                                                <td><?=$key->jam_mulai?></td>
                                                <td><?=$key->jam_selesai?></td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>