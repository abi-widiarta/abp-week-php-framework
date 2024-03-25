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
  {{-- <div class="bg-white w-[601px] rounded-lg py-[35px] px-[31px] space-y-4 shadow-[0_15px_60px_0px_rgba(29,161,242,0.15)] dark:bg-[#243447] dark:shadow-[0_15px_60px_0px_rgba(52,81,116,0.15)]">
    <!-- header -->
    <div class="header flex items-center justify-between">
      <div class="flex space-x-4">
        <img class="aspect-square w-12 rounded-full" src={{ $img }} alt="profile-photo" />
        <div class="flex flex-col justify-between">
          <h1 class="font-bold text-lg dark:text-white">{{ $nama }}</h1>
          <p class="text-gray-600 dark:text-white/70">{{ $username }} - {{ $asal}}</p>
        </div>
      </div>
      <div>
        <img src="./img/twitter-logo.png" alt="logo-twitter" />
      </div>
    </div>

    <!-- body -->
    <div class="dark:text-white">
      <p>{{ $deskripsi }}</p>
    </div>

      <!-- footer -->
      <div class="flex space-x-4 text-gray-500 dark:text-white/60">
        <div class="flex space-x-2">
          <img class="dark:invert" src="./img/heart.png" alt="" />
          <p class="font-medium">650</p>
        </div>

        <div class="flex">
          <p class="font-medium">3:40 PM - Feb 24, 2022</p>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="fixed top-5 left-5">
    <a href="/lat1" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Home</a>
    <a href="/lat1/m2" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Daftar Mahasiswa</a>
  </div>

  <div class="space-y-4">
    <h1 class="dark:text-white text-center text-xl font-semibold">{{ $title }}</h1>
    <div class="relative overflow-x-auto rounded-lg">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      Nama
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Asal
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Prodi
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Semester
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($daf_mhs as $mhs)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{ $mhs["nama"] }}
                  </th>
                  <td class="px-6 py-4">
                    {{ $mhs["asal"] }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $mhs["prodi"] }}
                  </td>
                  <td class="px-6 py-4 text-center">
                    {{ $mhs["semester"] }}
                  </td>
              </tr>
            @endforeach
          </tbody>
      </table>
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