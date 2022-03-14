<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-dark customgradient1 btn-icon-split" style="border:none;">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
    </div>
    <div class="card-body">
    <form action="simpan_catatan.php" method="post" id="formgue">
        <div class="form-group">
            <label>Pilih Tanggal</label>
            <input name="tanggal" type="date" required class="form-control" placeholder="Masukan Tanggal">
        </div>
        <div class="form-group">
            <label>Pilih Jam</label>
            <input name="jam" type="time" required class="form-control" placeholder="Masukan Jam">
        </div>
        <div class="form-group">
            <label>Pilih Lokasi</label>
            <input name="lokasi" type="text" required class="form-control" placeholder="Masukan Lokasi">
        </div>
        <div class="form-group">
            <label>Suhu Tubuh</label>
            <input name="suhu" type="text" required class="form-control" placeholder="Masukan Suhu Tubuh">
        </div>
      
        <div class="form-group">
        <label>Catatan</label>
        <textarea rows="4" cols="110" class="mb-4" name="catatan" placeholder="ada cerita apa hari ini?"></textarea>

            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN </button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> KOSONGKAN </button>
        </div>
    </form>
    </div>
</div>