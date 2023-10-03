<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body class="flex h-screen bg-gray-100">
<div class="flex-1 flex flex-col overflow-hidden">
        <header class="flex justify-between items-center p-4 bg-white border-b-2 border-gray-100">
            <h1 class="text-4xl">Tambah Pembayaran</h1>
        </header>

        <div class="my-8 mx-4"> <!-- Tambahkan margin di sini -->
            <div class="bg-white p-6 rounded-lg shadow-lg contrast-50">
                <form action="<?php echo base_url('keuangan/aksi_tambah_pembayaran') ?>" enctype="multipart/form-data"
                    method="POST" class="grid grid-cols-2 gap-4">
                    <div class="mb-4 col-span-1">
                        <label for="nama" class="block text-gray-700 font-bold mb-2">Nama Siswa</label>
                        <select id="siswa" name="siswa" class="w-full border border-gray-300 p-2 rounded-lg" required>
                            <option selected>Pilih Siswa</option>
                            <?php foreach ($siswa as $row): ?>
                                <option value="<?php echo $row->id_siswa ?>">
                                    <?php echo $row->nama_siswa ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-4 col-span-1">
                        <label for="total" class="block text-gray-700 font-bold mb-2">Total
                            Pembayaran</label>
                        <div class="relative">
                            <span class="text-gray-700 font-bold absolute top-2 left-3">Rp</span>
                            <input type="text" id="total" name="total"
                                class="pl-10 w-full border border-gray-300 p-2 rounded-lg" required>
                        </div>
                    </div>
                    <div class="mb-4 col-span-1">
                        <label for="jenis" class="block text-gray-700 font-bold mb-2">Jenis Pembayaran</label>
                        <select id="jenis" name="jenis" class="w-full border border-gray-300 p-2 rounded-lg" required>
                            <option selected>Pilih Jenis Pembayaran</option>
                            <option value="SPP">SPP</option>
                            <option value="Uang Gedung">Uang Gedung</option>
                            <option value="Uang Seragam">Uang Seragam</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded col-span-2">
                        Tambah Pembayaran
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>