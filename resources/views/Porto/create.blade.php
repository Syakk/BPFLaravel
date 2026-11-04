<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Resume</title>
    <!-- Pastikan kamu menggunakan CSS Bootstrap atau sesuaikan dengan template kamu -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Tambah Resume Baru</h2>
    
    <!-- Form mengarah ke route POST /resume -->
    <form action="{{ url('/resume') }}" method="POST">
        @csrf <!-- Wajib ada untuk keamanan form di Laravel -->
        
        
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" id="kategori" class="form-control" required>
                <option value="Education">Education</option>
                <option value="Professional Experience">Professional Experience</option>
                <option value="Summary">Summary</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="text" name="tahun" id="tahun" class="form-control">
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ url('/portofolio') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

</body>
</html>