<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="flex h-screen flex-col justify-between border-e bg-gray-900 w-60 sticky top-0">
        <div class="px-4 py-6">
            <a href="<?php echo base_url('admin'); ?>" class="block rounded-lg px-4 py-2 text-xl font-bold text-white">
                Dashboard Admin
            </a>
            <ul class="mt-6 space-y-1">
                <li>
                    <a href="<?php echo base_url('pembayaran'); ?>"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-700">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('admin/siswa'); ?>"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-700">
                        Siswa
                    </a>
                </li>

                
                <li>
                    <a href="<?php echo base_url('admin/akun'); ?>"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-700">
                        akun
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('keuangan'); ?>"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-700">
                        keuangan
                    </a>
                </li>

                <li>
                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary>

                            <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </summary>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>

        <div class="sticky inset-x-0 bottom-0 border-t border-gray-900">
            <a href="<?php echo base_url('Auth/logout'); ?>"
                class="flex items-center gap-2 bg-gray-900 p-4 hover:bg-gray-700 text-white">
                <div>
                    <p class="text-base">
                        <strong class="block font-medium">Log out</strong>
                    </p>
                </div>
            </a>
        </div>
    </div>
</body>

</html>