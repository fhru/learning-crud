<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .img-preview {
            max-width: 200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
            </div>
            <form action="/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="gambarlama" value="<?= $hasil['gambar']; ?>">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="id_barang">Id Barang</label>
                        <input type="text" id="id_barang" name="id_barang" class="form-control" readonly value="<?= $hasil['id_barang']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $hasil['nama_barang']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Spesifikasi</label>
                        <input type="text" name="spesifikasi" class="form-control" id="exampleInputPassword1" value="<?= $hasil['spesifikasi']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" id="exampleInputPassword1" value="<?= $hasil['lokasi']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">kondisi</label>
                        <input type="text" name="kondisi" class="form-control" id="exampleInputPassword1" value="<?= $hasil['kondisi']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">jumlah_barang</label>
                        <input type="text" name="jumlah_barang" class="form-control" id="exampleInputPassword1" value="<?= $hasil['jumlah_barang']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">sumber_dana</label>
                        <input type="text" name="sumber_dana" class="form-control" id="exampleInputPassword1" value="<?= $hasil['sumber_dana']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">gambar</label>
                        <input type="file" name="gambar" class="form-control" id="exampleInputPassword1" value="<?= $hasil['gambar']; ?>">
                    </div>
                    <img src="/img/<?= $hasil['gambar']; ?>" class="img-thumbnail img-preview" alt="">

                </div>
                <div class="modal-footer">
                    <a href="/" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>