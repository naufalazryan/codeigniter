<center>
    <div class="mb-2">
        <a href="<?php echo site_url('siswa/save') ?>">
            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Tambah Data
            </button>
        </a>
    </div>
</center>
<center>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Nama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        NIS
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Kelamin
                    </th>
                    <th scope="col" class="py-3 px-6">
                        No Telp
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Alamat
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">Edit</span>Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $s) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo $s->nama_siswa ?>
                        </th>
                        <td class="py-4 px-6">
                            <?php echo $s->nis ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $s->kelamin ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $s->no_telp ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $s->alamat ?>
                        </td>
                        <td class="py-4 px-6text-right w-8">
                            <a href="<?= site_url('siswa/edit/' . $s->nis) ?>"><svg class="h-8 w-7 text-yellow-500" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">

                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <path d="M9 7 h-3a2 2 0 0 0  -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                    <line x1="16" y1="5" x2="19" y2="8" />
                                </svg>
                            </a>
                            <a href="<?= site_url('siswa/delete/' . $s->nis) ?>"></a><svg class="h-8 w-7 text-red-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="4" y1="7" x2="20" y2="7" />
                                <line x1="10" y1="11" x2="10" y2="17" />
                                <line x1="14" y1="11" x2="14" y2="17" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</center>