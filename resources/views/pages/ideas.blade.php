<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/0a55ccbade.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @livewireStyles
</head>

<body>
  <livewire:header>
    <div class="bg-black text-white">

      <div class="mx-72 pt-24">
        <h1 class="font-bold text-5xl ">Not sure what the paint? </h1>
        <p class="mt-6  text-2xl w-3/4 text-gray-400 leading-10 ">Check out our top searches this season</p>

      </div>

      <div class="mx-72 mt-12 mb-28 text-gray-500 font-semibold flex wrap-flex gap-x-48">
        <div class="text-2xl">
          <p>01 Home Office</p>
          <p>02 Family</p>
          <p>03 Summer</p>
          <p>04 Coofe</p>
          <p>05 Outdoors (Be safe)</p>
        </div>
        <div class="text-2xl">
          <p>06 Beach</p>
          <p>07 Life style</p>
          <p>08 Beauty</p>
          <p>09 Yoga</p>
          <p>10 Kitchen</p>
        </div>
        <div class="text-2xl">
          <p>11 Bussines</p>
          <p>12 Food & Drink</p>
          <p>13 Echo-Friendly</p>
          <p>14 Fitness</p>
          <p>15 Sports</p>
        </div>
        <div class="text-2xl">
          <p>16 Baby</p>
          <p>17 Shopping/Retail</p>
          <p>18 Baking Bread</p>
          <p>19 Dogs</p>
          <p>20 Technology</p>
        </div>
      </div>
      <div class="bg-white ">
        <div class="  flex wrap-flex gap-x-6 mx-72">
          <div class="text-black text-3xl w-2/4 py-8 font-semibold">
            <h1>Get first access to new paints and other content.</h1>
            <h1>Unsubscribe anytime.</h1>
          </div>

          <div class="pt-8 ml-10">
            <input type="text" placeholder="Your Email Address" class="bg-black rounded-lg pl-6 text-white h-16 w-80">
          </div>
          <div class="pt-8">
            <button class="bg-indigo-700 px-24 py-4 text-2xl font-semibold text-white rounded-lg">Submit</button>
          </div>
        </div>
      </div>

      <div class="text-black py-12">
        <h1>ruci</h1>
      </div>


    </div>
    <livewire:footer>
      @livewireScripts
</body>

</html>