<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <link rel="icon" href="<?= base_url() ?>assets/images/logo.png">
  <title><?= $judul; ?></title>

</head>

<!-- component -->

<body background="<?= base_url() ?>assets/images/bg2.jpg?>" class="bg-gray-200 font-sans font-thin px-6 bg-fixed bg-cover bg-no-repeat">
  <center class="mt-20">

    <form action="<?= base_url('auth/login'); ?>" method="post">
      <?php if ($this->session->flashdata('message_login_error')) : ?>
        <div class="invalid-feedback">
          <?= $this->session->flashdata('message_login_error') ?>
        </div>
      <?php endif ?>

      <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
        <div class="space-y-4">
          <h1 class="text-center text-2xl font-semibold text-gray-600">Login</h1>
          <div>
            <label for="username" class="block mb-1 text-gray-600 font-semibold">Username</label>
            <input type="text" name="username" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">Password</label>
            <input type="password" name="password" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <a href="<?= site_url('register') ?>" method="post">Register Sekarang!</a>
        </div>
        <button class="mt-4 w-full bg-gradient-to-tr from-red-500 to-red-800 text-indigo-100 py-2 rounded-md text-lg tracking-wide">Login</button>
      </div>
    </form>
  </center>
</body>