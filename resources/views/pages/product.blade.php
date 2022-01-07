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
      <div class="mx-72 flex flex-wrap ">
        <div class="w-2/6">
          <div class="border-b-2 border-white">
            <h1 class="font-bold text-2xl pt-14">BEAUTIFUL STRANGE NATURE</h1>
            <p class="mt-10  text-xl mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eos id ipsam distinctio nesciunt illum animi officia provident repellendus, ab fugit pariatur harum tempora iste! Quam ratione adipisci amet ullam.</p>
          </div>
          <div class="border-b-2 border-white pb-8">
            <h1 class="font-bold text-2xl my-4 ">Paint Size</h1>
            <input type="radio">
              <label>High size</label><br>
            <p class="mt-2 mb-4 ml-4">100cm x 100cm</p>
            <input type="radio">
              <label>Small size</label><br>
            <p class="mt-2 mb-4 ml-4">50cm x 50cm </p>
            <button class="p-2 bg-white rounded font-bold  text-black">BUY NOW <i class="fas fa-cart-arrow-down fa-2x"></i></button>
          </div>
          <div class="mt-4 mb-10">
            <p>Paint By : Matthey Henry</p>
            <div class="mr-10 inline-flex gap-x-4 mt-4">
              <p class="text-2xl">SHARE: </p>
              <a href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
              <a href="#"><i class="fab fa-whatsapp fa-2x"></i></a>
              <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
              <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
              <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
          </div>
        </div>
        <div>
          <img src="{{ URL::to('/images/nature.jpg') }}" class="border-solid border-4 border-white ml-20 mt-14  w-11/12 h-4/6">

        </div>

      </div>

    </div>


    <livewire:footer>
      @livewireScripts
</body>

</html>