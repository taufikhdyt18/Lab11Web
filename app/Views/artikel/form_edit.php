<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<form action="" method="post" enctype="multipart/form-data">
    <p>
        <input type="text" name="judul" value="<?= $data['judul']; ?>">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"><?= $data['isi']; ?></textarea>
    </p>
    <p>
        <label>Upload Gambar Baru (jika ingin mengganti):</label><br>
        <input type="file" name="gambar">
    </p>
    <p>
        Gambar Saat Ini:<br>
        <img src="<?= base_url('gambar/' . $data['gambar']) ?>" width="200" alt="Gambar Artikel">
    </p>
    <p>
        <input type="submit" value="Kirim" class="btn btn-large">
    </p>
</form>

<?= $this->include('template/admin_footer'); ?>
