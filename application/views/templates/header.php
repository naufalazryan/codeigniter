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

<body background="<?= base_url() ?>assets/images/bg2.jpg?>" class="bg-gray-200 font-sans font-thin px-6 bg-fixed bg-cover bg-no-repeat">

	<header class="mx-auto max-w-xl py-20 text-center">
		<a class="block text-2xl mb-12 text-white">SMK TELKOM BANJARBARU</a>

		<ul class="flex justify-center uppercase text-xs">
			<li>
				<a href="<?= site_url('') ?>" class="mx-4 text-white hover:text-red">Home</a>
			</li>
			<li>
				<a href="<?= site_url('siswa') ?>" class="mx-4 text-white">Siswa</a>
			</li>
			<li>
				<a href="<?= site_url('guru') ?>" class="mx-4 text-white">Guru</a>
			</li>
			<li>
				<a href="#" class="mx-4 text-white">Nilai</a>
			</li>

			<li>
				<a href="<?= site_url('auth') ?>" class="mx-4 text-white">Login</a>
			</li>
		</ul>
	</header>