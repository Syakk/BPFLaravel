<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Resume</h2>
    <form action="{{ url('/resume/'.$resume->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Wajib untuk proses update di Laravel -->
        
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="Education" {{ $resume->kategori == 'Education' ? 'selected' : '' }}>Education</option>
                <option value="Professional Experience" {{ $resume->kategori == 'Professional Experience' ? 'selected' : '' }}>Professional Experience</option>
                <option value="Summary" {{ $resume->kategori == 'Summary' ? 'selected' : '' }}>Summary</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $resume->judul }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun</label>
            <input type="text" name="tahun" class="form-control" value="{{ $resume->tahun }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4">{{ $resume->deskripsi }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ url('/portofolio') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>