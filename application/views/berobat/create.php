<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Input Data Berobat Pasien</h1>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body p0">
						<form action="<?= base_url().'berobat/store' ?>" method="POST">
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label class="form-label">Nama Pasien</label>
										<select required name="nama_pasien_id" class="form-select">
											<option selected></option>
											<?php foreach($pasien as $p): ?>
											<option value="<?= $p->id ?>"><?= $p->nama_pasien; ?></option>
											<?php endforeach ;?>
										</select>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label class="form-label">Nama Dokter</label>
										<select required name="nama_dokter_id" class="form-select">
											<option selected value=""></option>
											<?php foreach($dokter as $d): ?>
											<option value="<?= $d->id ?>"><?= $d->nama_dokter; ?></option>
											<?php endforeach ;?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label class="form-label">Keluhan</label>
										<textarea required class="form-control" rows="3" name="keluhan""></textarea> 
                                    </div>
                                </div>
                                <div class=" col-6">
                                    <div class="row">
                                        <div class="col-3 form-group">
                                            <label>Rujuk Pasien</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="konfirm_rujuk" value="1" id="val_equipfc" onChange="checkOption(this)">
                                                        <label class="form-check-label">Ya</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="konfirm_rujuk" value="0" id="val_equipfc" onChange="checkOption(this)">
                                                        <label class="form-check-label">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label class="form-label">RS Rujukan</label>
                                                <select name="rujukan_id" id="rujuk" class="form-select">
                                                        <option></option>
                                                        <?php foreach($rs_rujuk as $r): ?>
                                                            <option value="<?= $r->id ?>"><?= $r->nama_rs ?></option>
                                                        <?php endforeach ;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="form-label">Obat</label>
                                                <select name="obat_id" id="obat" class="form-select">
                                                        <option></option>
                                                        <?php foreach($obat as $o): ?>
                                                            <option value="<?= $o->id ?>"><?= $o->nama_obat ?></option>
                                                        <?php endforeach ;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                    <label class="form-label">Tanggal Berobat</label>
                                                    <input required type="date" class="form-control" name="tgl_berobat">
                                                </div>
                                            </div>
                                            <input required type="hidden" value="15000" name="biaya" class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <a href="/klinik_ci3/berobat" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>                        
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    function checkOption(obj) 
    {
        var input = document.getElementById("rujuk");
        input.disabled = obj.value == "0";
        var input = document.getElementById("obat");
        input.disabled = obj.value == "1";
    }
</script>

