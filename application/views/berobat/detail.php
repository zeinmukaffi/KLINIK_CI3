<div class="main-content">
    <section class="section">
        <div class="section-header"><h1>Detail Data Berobat Pasien</h1></div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <div class="table-responsive">
                            <table class="table table-stripped">
                                <tbody>
                                    <tr>
                                        <th>Nama Pasien</th>
                                        <td>:</td>
                                        <td>
                                            <?php foreach($pasien as $p):
                                                if($p->id == $berobat->nama_pasien_id):
                                                    echo $p->nama_pasien; 
                                                endif;
                                            endforeach;?>
                                        </td>
                                        <th>Keluhan Pasien</th>
                                        <td>:</td>
                                        <td style="width: 300px;" class="pb-2"><?= $berobat->keluhan; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Dokter</th>
                                        <td>:</td>
                                        <td>
                                            <?php foreach($dokter as $d):
                                                if($d->id == $berobat->nama_dokter_id):
                                                    echo $d->nama_dokter; 
                                                endif;
                                            endforeach;?>
                                        <th>Obat Yang Di Perlukan</th>
                                        <td>:</td>
                                        <td>
                                            <?php 
                                                if ($berobat->obat_id === null) {
                                                    echo "-";
                                                }else{
                                                    foreach($obat as $o):
                                                        if($o->id == $berobat->obat_id):
                                                            echo $o->nama_obat;
                                                        endif;
                                                    endforeach;
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Berobat</th>
                                        <td>:</td>
                                        <td>
                                            <?= $berobat->tgl_berobat; ?>
                                        </td>
                                        <th>Tujuan RS Rujukan</th>
                                        <td>:</td>
                                        <td>
                                            <?php 
                                                if ($berobat->rujukan_id === null) {
                                                    echo "-";
                                                }else{
                                                    foreach($rs_rujuk as $r):
                                                        if($r->id == $berobat->rujukan_id):
                                                            echo $r->nama_rs;
                                                        endif;
                                                    endforeach;
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Biaya Berobat</th>
                                        <td>:</td>
                                        <td>
                                            <?= $berobat->biaya; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex gap-2 mb-3">
                                <a href="/klinik_ci3/berobat" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>
                                <div onclick="javascript: return confirm('Apakah Anda Yakin Ingin Hapus Data?')">
                                    <?php echo anchor('berobat/destroy/'.$berobat->id, '<div class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
                                </div>
                                <div>
                                    <?php echo anchor('berobat/edit/'.$berobat->id, '<div class="btn btn-warning"><i class="fas fa-pen"></i></div>') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>