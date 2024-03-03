<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Nilai Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3">
    <h1>Form Nilai Mahasiswa</h1>
    <form method="GET" action="form_nilai.php" class="row g-3">
      <div class="col-md-6">
        <label for="nama" class="form-label">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="" size="30">
      </div>
      <div class="col-md-6">
        <label for="matkul" class="form-label">Mata Kuliah:</label>
        <select class="form-select" id="matkul" name="matkul" aria-label="Default select example">
          <option value="DDP">Dasar-Dasar Pemrograman</option>
          <option value="BDI">Basis Data I</option>
          <option value="WEB1">Pemrograman Web</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="nilai_uts" class="form-label">Nilai UTS:</label>
        <input type="text" class="form-control" id="nilai_uts" name="nilai_uts" value="" size="6">
      </div>
      <div class="col-md-4">
        <label for="nilai_uas" class="form-label">Nilai UAS:</label>
        <input type="text" class="form-control" id="nilai_uas" name="nilai_uas" value="" size="6">
      </div>
      <div class="col-md-4">
        <label for="nilai_tugas" class="form-label">Nilai Tugas/Praktikum:</label>
        <input type="text" class="form-control" id="nilai_tugas" name="nilai_tugas" value="" size="6">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jrtANYz<---replace with actual sha from CDN--->" crossorigin="anonymous"></script>
</body>

</html>
