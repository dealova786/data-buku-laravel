<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="mb-4">Edit Buku</h2>

        <form action="/buku/{{ $buku->id }}" method="POST">
            @csrf 
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="judul" value="{{ $buku->judul }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="penulis" value="{{ $buku->penulis }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" name="penerbit" value="{{ $buku->penerbit }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="/buku" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
</div>

</body>
</html>