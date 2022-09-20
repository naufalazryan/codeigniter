<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body class="w-full h-full"
      style="background-image: url('https://cdn.pixabay.com/photo/2022/02/15/13/00/building-7014904_1280.jpg');">
        
    <nav class="grid grid-cols-2 bg-gray-400">
       <div class="m-2 ml-3 space-x-4 text-black-500 font-bold">

            <a href="<?php echo site_url('') ?>" class="rounded hover:bg-white">Home</a>
            <a href="<?php echo site_url('siswa') ?>" class="rounded hover:bg-white">Siswa</a>
            <a href="<?php echo site_url('guru') ?>" class="rounded hover:bg-white">Guru</a>
            <a href="/nilai" class="rounded hover:bg-white">Nilai</a>

       </div>

       <div class="flex justify-end m-2">
            <a href="" class="font-bold rounded-md bg-zinc-300 hover:bg-white p-0.5 px-2">Login</a>
       </div>

    </nav>

    <div class="bg-zinc-300 m-10 rounded-lg">

        <h1 class="font-bold text-2xl p-3">Ubah Data Guru</h1>

        <hr class="bg-black">

            <form action="" method="post" class="p-5">
                <label for="" class="mr-[79px]">NIP</label>
                <input type="text" value="<?php echo $guru->nip ?>" name="nip" class="mb-1.5 <?php echo form_error('nip') ? 'is-invalid':''?>">
                <?php echo form_error('nip')?>
                <br>
                <label for="" class="mr-[23px]">Nama Guru</label>
                <input type="text" value="<?php echo $guru->nama_guru ?>" name="nama_guru" class="mb-1.5 <?php echo form_error('nama_guru') ? 'is-invalid':''?>"> 
                <?php echo form_error('nama_guru')?>
                <br>
                <label for="" class="mr-[1px]">Mata Pelajaran</label>
                <input type="text" value="<?php echo $guru->mapel ?>" name="mapel" class="mb-1.5 <?php echo form_error('mapel') ? 'is-invalid':''?>">
                <?php echo form_error('mapel')?>
                <br> 
                <label for="" class="mr-[31.5px]">No Telpon</label>
                <input type="text" value="<?php echo $guru->no_telp ?>" name="no_telp" class="mb-1.5 <?php echo form_error('no_telp') ? 'is-invalid':''?>"> 
                <?php echo form_error('no_telp')?>
                <br>
                <input type="submit" class="rounded-md bg-zinc-400 hover:bg-white m-0.5 p-1 ml-[98.5px]" value="Simpan">
                <a href="<?php echo site_url('guru') ?>" class="rounded-md bg-zinc-500 hover:bg-white p-1">Kembali</a>
            </form>

    </div>    
</body>
</html>