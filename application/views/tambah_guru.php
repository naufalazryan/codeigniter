<center>
  <div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 action="<?php echo site_url('guru/save') ?>" method="post">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
          Nama Guru
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php echo form_error('nama_guru') ? 'is-invalid':''?>" name="nama_guru" type="text">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
         NIP
        </label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php echo form_error('nip') ? 'is-invalid':''?>">
        <?php echo form_error('nip') ?>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="jenis_kelamin">
          Mata Pelajaran
        </label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php echo form_error('mapel') ? 'is-invalid':''?>" name="nis">
        <?php echo form_error('mapel') ?>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="no_telp">
          No Telp
        </label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php echo form_error('no_telp') ? 'is-invalid':''?>" name="no_telp">
        <?php echo form_error('no_telp') ?>
      </div>


      <div class="flex items-center justify-between">
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Tambah Data
        </button>
      </div>
    </form>
  </div>
</center>

<!-- <hr class="bg-black">

<form action="" method="post" class="p-5">
    <label for="" class="mr-[79px]">NIP</label>
    <input type="text" name="nip" class="mb-1.5 <?php echo form_error('nip') ? 'is-invalid' : '' ?>">
    <?php echo form_error('nip') ?>
    <br>
    <label for="" class="mr-[23px]">Nama Guru</label>
    <input type="text" name="nama_guru" class="mb-1.5 <?php echo form_error('nama_guru') ? 'is-invalid' : '' ?>">
    <?php echo form_error('nama_guru') ?>
    <br>
    <label for="" class="mr-[1px]">Mata Pelajaran</label>
    <input type="text" name="mapel" class="mb-1.5 <?php echo form_error('mapel') ? 'is-invalid' : '' ?>">
    <?php echo form_error('mapel') ?>
    <br>
    <label for="" class="mr-[31.5px]">No Telpon</label>
    <input type="text" name="no_telp" class="mb-1.5 <?php echo form_error('no_telp') ? 'is-invalid' : '' ?>">
    <?php echo form_error('no_telp') ?>
    <br>
    <input type="submit" class="rounded-md bg-zinc-400 hover:bg-white m-0.5 p-1 ml-[98.5px]" value="Simpan">
    <a href="<?php echo site_url('guru') ?>" class="rounded-md bg-zinc-500 hover:bg-white p-1">Kembali</a>
</form>

</div>
</body>

</html> -->