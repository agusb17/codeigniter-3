<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 

</head>
<style>
    body     {
        background-image: url('https://winpoin.com/wp-content/uploads/2021/10/Cara-Menonaktifkan-Desktop-Background-di-Windows-10-5-1280x720.jpg');
    }
</style>

<body>
<body>
    <?php foreach($user as $users) :?>
    <div class="min-vh-100 d-flex align-items-center bg-dark">
        <div class="card w-75 m-auto p-3 bg-dark text-light">
            <h3 class="text-center p-3">Akun</h3>
            <form action="<?php  echo base_url('admin/aksi_ubah_akun')?>" method="post" class="row" enctype="multipart/form-data">
                <div class="mb-3 col-6">
                    <label for="nama" class="form-label">Email</label>
                    <input type="text" value="<?php echo $users->email ?>" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3 col-6">
                    <label for="nama" class="form-label">Username</label>
                    <input type="text" class="form-control" value="<?php echo $users->username?>" id="nisn" name="nisn">
                </div>
                <div class="mb-3 col-6">
                    <label for="nama" class="form-label">Password Baru</label>
                    <input type="text" class="form-control" value="" id="nisn" name="nisn">
                </div>
                <div class="mb-3 col-6">
                    <label for="nama" class="form-label">Konfirmasi Password Baru</label>
                    <input type="text" class="form-control" value="" id="nisn" name="nisn">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
    <?php endforeach;?>
</body> 
</body>
</html