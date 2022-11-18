<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Input Data RS Rujukan</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <?php foreach($rs_rujuk as $item): ?>
                            <form action="<?= base_url().'rs_rujuk/update' ?>" method="POST">
                                <div class="form-group">
                                    <label class="form-label">Nama RS Rrjukan</label>
                                    <input type="hidden" name="id" id="id" value="<?= $item->id; ?>">
                                    <input type="text" name="nama_rs" value="<?= $item->nama_rs; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control"><?= $item->alamat; ?></textarea>
                                </div>
                                <a href="/klinik_ci3/berobat" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>                            
                                <button type="submit" class="btn btn-primary" onclick="javascript: return confirm('Apakah Anda Yakin Ingin Edit Data?')">Simpan</button>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>