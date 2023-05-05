<?php

?>


<!DOCTYPE html>
<!-- <?php ?> -->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="min-w-screen min-h-screen bg-gray-800 flex items-center justify-center relative px-5 py-5">
    <div class="absolute top-20 text-center">
      <h1 class="text-8xl text-shadows font-black">Password</h1>
      <h1 class="text-8xl text-shadows font-black">Generator</h1>
    </div>
    <form action="" class="w-full mx-auto rounded-lg bg-white shadow p-5 text-gray-800" style="max-width: 500px">
      <div class="mb-2">
        <label class="block text-xs font-semibold text-gray-500 mb-2">PASSWORD LENGTH</label>
        <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="Min 8 - Max 32" type="number" min="8" max="32" id="passLenghtInput" />
        <input class="w-full" type="range" min="8" max="32" id="passLenghtRange">
      </div>
      <div class="flex -mx-2 mb-2">
        <div class="w-1/2 px-2">
          <label for="charsLower">
            <input type="checkbox" class="align-middle" id="charsLower" checked>
            <span class="text-xs font-semibold text-gray-500">LOWERCASE</span>
          </label>
        </div>
        <div class="w-1/2 px-2">
          <label for="charsUpper">
            <input type="checkbox" class="align-middle" id="charsUpper" checked>
            <span class="text-xs font-semibold text-gray-500">UPPERCASE</span>
          </label>
        </div>
      </div>
      <div class="flex -mx-2">
        <div class="w-1/2 px-2">
          <label for="charsNumeric">
            <input type="checkbox" class="align-middle" id="charsNumeric" checked>
            <span class="text-xs font-semibold text-gray-500">NUMBERS</span>
          </label>
        </div>
        <div class="w-1/2 px-2">
          <label for="charsSymbols">
            <input type="checkbox" class="align-middle" id="charsSymbols" checked>
            <span class="text-xs font-semibold text-gray-500">SYMBOLS</span>
          </label>
        </div>
      </div>
    </form>
  </div>
  <script src="./js/utility.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>