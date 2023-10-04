
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

</head>

<body>
    <button data-drawer-target=" default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>
    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="<?php echo base_url('admin/index') ?>"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/ubah_siswa/').$row->id_siswa ?>"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 18">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />

                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">DAFTAR KEUANGAN</span>

                    </a>
                </li>



                <li>

                    <a href="<?php echo base_url('auth/logout'); ?>"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ml-3 whitespace-nowrap">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a href="">Navbar</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">.......</a></li>
                        <li><a class="dropdown-item" href="#">.......</a></li>
                        <li><a class="dropdown-item" href="#">.......</a></li>
                    </div>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <h1 class="p-4"><i>DAFTAR KEUANGAN</i></h1>
        <br>

        <!-- Table -->
        <div class="bg-white p-6 rounded-lg shadow-2xl">
                    <div class="flex justify-end mt-4">
                        <div class="flex space-x-4 my-2">
                            <a href="<?php echo base_url('keuangan/tambah_pembayaran') ?>"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i
                                    class="fas fa-plus mr-2"></i>tambah</a>
                        </div>
                        <br>
                        <div class="flex space-x-4 my-2 px-4">
                            <a href="<?php echo base_url('keuangan/export') ?>"
                                class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded"><i
                                    class="fas fa-plus mr-2"></i>export</a>
                        </div>
                    </div>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="text-left border border-black p-2 border-2">No</th>
                                <th class="text-left border border-black p-2 border-2">Siswa</th>
                                <th class="text-left border border-black p-2 border-2">Jenis Pembayaran</th>
                                <th class="text-left border border-black p-2 border-2">Total Pembayaran</th>
                                <th class="text-left border border-black p-2 border-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($pembayaran as $row):
                                $no++ ?>
                                <tr>
                                    <td class="border border-black p-2 border-2">
                                        <?php echo $no ?>
                                    </td>
                                    <td class="border border-black p-2 border-2">
                                        <?php echo tampil_full_siswa_byid($row->id_siswa) ?>
                                    </td>
                                    <td class="border border-black p-2 border-2">
                                        <?php echo $row->jenis_pembayaran ?>
                                    </td>
                                    <td class="border border-black p-2 border-2">
                                        <?php echo convRupiah ($row->total_pembayaran)?>
                                    </td>
                                    <td class="border border-black p-2 border-2">
                                        <a href="<?php echo base_url('keuangan/ubah_pembayaran/') . $row->id ?>"
                                            class="bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded mb-2">
                                            Ubah
                                        </a>
                                        <button onClick="hapus(<?php echo $row->id; ?>)"
                                            class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded ml-2">
                                            Hapus
                                        </button>
                                    </td>


                                </tr>
                                <!-- Tambahkan baris data siswa lainnya sesuai kebutuhan -->
                            <?php endforeach ?>
                        </tbody>

                    </table>
                    <form class="mt-5" method="post" enctype="multipart/form-data"
                    action="<?= base_url('keuangan/import') ?>">
                    <input type="file" name="file" />
                    <input type="submit" name="import"
                        class="inline-block rounded bg-red-800 px-4 py-2 text-xs font-medium text-white hover:bg-red-450"
                        value="import" />

                </form>
        
    </div>
                    <script>
        function hapus(id) {
            var yes = confirm('Yakin DI Hapus?');
            if (yes == true) {
                window.location.href = "<?php echo base_url('keuangan/hapus_pembayaran/') ?>" + id;
            }
        }
    </script>
</body>
</html>
</body>
</html>