<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="flex">
        <div class="container mt-12">
            <div class="overflow-x-auto">
                <form action="<?php echo base_url('admin/aksi_tambah_siswa') ?>" enctype="multipart/form-data"
                    method="post">
                    <div class="max-full rounded border overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <p class="text-xl font-bold text-center">Tambah Siswa</p>
                            <div class="grid grid-cols-2 gap-4 mt-5">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                                        Nama Siswa
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="nama" name="nama" type="text" placeholder="Nama">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nisn">
                                        NISN
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="nisn" name="nisn" type="number" placeholder="Nisn">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                                        Gender
                                    </label>
                                    <select name="gender" id="gender"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option selected>Pilih Gender</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="kelas">
                                        Kelas
                                    </label>
                                    <select name="kelas" id="kelas"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option selected>Pilih Kelas</option>
                                        <?php foreach($kelas as $row): ?>
                                        <option value="<?php echo $row->id ?>">
                                            <?php echo $row->tingkat_kelas.' '.$row->jurusan_kelas ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                    <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-2/6">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>