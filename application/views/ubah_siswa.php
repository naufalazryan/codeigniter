<center>
  <div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" href="<?php echo site_url('siswa/edit') ?>" method="post">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
          Nama
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nama_siswa" type="text">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nis">
          NIS
        </label>
        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php echo form_error('nis') ? 'is-invalid' : '' ?>" name="nis">
        <?php echo form_error('nis') ?>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="jenis_kelamin">
          Jenis Kelamin
        </label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php echo form_error('kelamin') ? 'is-invalid' : '' ?>" name="jenis_kelamin">
        <?php echo form_error('kelamin') ?>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="no_telp">
          No Telp
        </label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php echo form_error('no_telp') ? 'is-invalid' : '' ?>" name="no_telp">
        <?php echo form_error('no_telp') ?>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="no_telp">
          Alamat
        </label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="alamat" <?php echo form_error('alamat') ? 'is-invalid' : '' ?>">
        <?php echo form_error('alamat') ?>
      </div>


      <div class="flex items-center justify-between">
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Tambah data
        </button>
      </div>
    </form>
  </div>
</center>

<!--  <div class="bg-zinc-300 m-10 rounded-lg">

        <h1 class="font-bold text-2xl p-3">Tambah Data Siswa</h1>

        <hr class="bg-black">

            <form action="<?php echo site_url('siswa/edit') ?>" method="post" class="p-5">
            <label for="" class="mr-[70px]">jenis_kelamin</label>
            <input type="text" name="nis" <?php echo form_error('nis') ? 'is-invalid' : '' ?>">
            <?php echo form_error('nis') ?>
            <br>
            <label for="" class="mr-[9.5px]">Nama Siswa</label>
            <input type="text" name="nama_siswa" <?php echo form_error('nama_siswa') ? 'is-invalid' : '' ?>"> 
            <?php echo form_error('nama_siswa') ?>
            <br>
            <label for="" class="mr-[38.5px]">Kelamin</label>
            <input type="text" name="kelamin" <?php echo form_error('kelamin') ? 'is-invalid' : '' ?>">
            <?php echo form_error('kelamin') ?>
            <br> 
            <label for="" class="mr-[22px]">No Telpon</label>
            <input type="text" name="no_telp" <?php echo form_error('no_telp') ? 'is-invalid' : '' ?>"> 
            <?php echo form_error('no_telp') ?>
            <br>
            <label for="" class="mr-[45px]">Alamat</label>
            <input type="text" name="alamat" <?php echo form_error('alamat') ? 'is-invalid' : '' ?>">
            <?php echo form_error('alamat') ?>
            <br>
            <input type="submit" class="rounded-md bg-zinc-400 hover:bg-white m-0.5 p-1 ml-[98.5px]" value="Simpan">
            <a href="<?php echo site_url('siswa') ?>" class="rounded-md bg-zinc-500 hover:bg-white p-1">Kembali</a>
            </form>

    </div>    
</body>





        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 



      <p class="text-red-500 text-xs italic"></p> = css nampilin error


</html> -->