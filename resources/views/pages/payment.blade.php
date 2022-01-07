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

      <div class="inline-flex mx-72">
        <div class="w-2/4">

          <img src="{{ URL::to('/images/nature.jpg') }}" class="border-solid border-4 border-white  mt-14  w-full h-4/6">

          <h1 class="font-bold text-2xl pt-14">BEAUTIFUL STRANGE NATURE</h1>
          <p class="mt-10  text-xl mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eos id ipsam distinctio nesciunt illum animi officia provident repellendus.</p>


        </div>

        <div class="mt-14 ml-60 w-2/4">
          <div class="flex wrap-flex gap-x-6 mt-8 ">
            <input type="text" placeholder="Name" class="border-2 rounded-lg w-1/2 h-12 pl-8">
            <input type="email" placeholder="Surname" class="border-2 rounded-lg w-1/2 h-12 pl-8">
          </div>
          <div>
            <input type="email" placeholder="E-mail Addresse" class="rounded-lg border-2 w-full mt-8 pl-8 h-12">
          </div>
          <div class="flex wrap-flex gap-x-6 mt-8 ">
            <input type="password" placeholder="Password" class="border-2 rounded-lg w-1/2 h-12 pl-8">
            <input type="password" placeholder="Repeat Password" class="border-2 rounded-lg w-1/2 h-12 pl-8">
          </div>
          <div class="flex wrap-flex gap-x-6 mt-8 ">
            <input type="text" placeholder="Addres" class="border-2 rounded-lg w-1/2 h-12 pl-8">
            <input type="text" placeholder="Addres" class="border-2 rounded-lg w-1/2 h-12 pl-8">
          </div>
          <div class="flex wrap-flex gap-x-6 mt-8 ">
            <input type="number" placeholder="Birthday" class="border-2 rounded-lg w-1/2 h-12 pl-8">
            <input type="text" placeholder="Gender" class="border-2 rounded-lg w-1/2 h-12 pl-8">
          </div>
          <div class="flex wrap-flex gap-x-6 mt-8 ">
            <input type="checkbox" name="checkbox1" class="w-7 h-7 rounded-lg">
            <label for="checkbox1">Card</label>
            <input type="checkbox" name="checkbox2" class="w-7 h-7 rounded-lg ml-44">
            <label for="checkbox2">Cash</label>
          </div>
          <div>
            <input type="number" placeholder="Card Number" class="rounded-lg border-2 w-full mt-8 pl-8 h-12">
          </div>
          <div class="flex wrap-flex gap-x-6 mt-8 ">
            <input type="number" placeholder="Expiry Date" class="border-2 rounded-lg w-1/2 h-12 pl-8">
            <input type="number" placeholder="CVV" class="border-2 rounded-lg w-1/2 h-12 pl-8">
          </div>
          <div class="my-8 ">
            <input type="checkbox" name="agree" class="w-7 h-7 rounded-lg ml-24 ">
            <label for="agree" class="ml-6 text-lg  ">Save this card for future payments?</label>
          </div>
          <div>
            <button class=" py-4  rounded-lg  bg-amber-500 text-3xl font-medium text-black w-full mt-8 mb-14">Pay 20$</button>
          </div>
        </div>

      </div>



    </div>
    <livewire:footer>
      @livewireScripts
</body>

</html>