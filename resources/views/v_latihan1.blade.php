<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet" />
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#ECF8FF] transition-all h-screen w-screen grid place-items-center dark:bg-[#141D26] font-['Source Sans 3']">
  <div class="fixed top-5 left-5">
    <a href="/lat1" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Home</a>
    <a href="/lat1/m2" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Daftar Mahasiswa</a>
  </div>

  {{-- card --}}
  <div class="bg-white w-[400px] rounded-lg py-[35px] px-[31px] space-y-4 shadow-[0_15px_60px_0px_rgba(29,161,242,0.15)] dark:bg-[#243447] dark:shadow-[0_15px_60px_0px_rgba(52,81,116,0.15)]">
    <!-- header -->

    <div class="flex flex-col items-center">
      <img class="aspect-square w-24 rounded-full mb-4" src={{ $img }} alt="profile-photo" />
      <div class="text-center">
        <h1 class="font-bold text-lg dark:text-white">{{ $nama }}</h1>
        <p class="text-gray-600 dark:text-white/70">{{ $username }} - {{ $asal}}</p>
      </div>
    </div>

    <!-- body -->
    <div class="dark:text-white">
      <p>{{ $deskripsi }}</p>
    </div>

    <!-- footer -->
    </div>
  </div>
  
</body>
</html>

<script>
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        fontFamily: {
          sourceSans: ["Source Sans 3", sans - serif],
        },
      },
    } /* 'class' or 'media', we use 'class' to enable dark mode manually */,
  };
</script>