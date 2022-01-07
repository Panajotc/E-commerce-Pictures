<!DOCTYPE html>
<html lang="en">

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
      <div class=" mx-72">
        <h1 class="font-bold text-5xl pt-14">Online shopping & ecommerce painting</h1>
        <p class="mt-10 w-3/4 text-xl mb-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eos id ipsam distinctio nesciunt illum animi officia provident repellendus, ab fugit pariatur harum tempora iste! Quam ratione adipisci amet ullam.</p>
      </div>

      <div class="mx-72 inline-flex gap-x-6 text-3xl font-bold mb-10">
        <a href="#">Latest</a>
        <a href="#" class="underline">Popular</a>
      </div>

      <div class="mx-72 bg-white inline-flex gap-x-6 py-6 text-black font-bold text-base mb-10">
        <a href="#" class="pl-8">Nature</a>
        <a href="#">Wallpapers</a>
        <a href="#">Textures & Patterns</a>
        <a href="#">People</a>
        <a href="#">Bussines & Work</a>
        <a href="#">Travel</a>
        <a href="#">Technology</a>
        <a href="#">Animals</a>
        <a href="#">Interiors</a>
        <a href="#">Architecture</a>
        <a href="#">Food & Drink</a>
        <a href="#" class="pr-8">Spirituality</a>
      </div>

      <div class="flex flex-wrap mx-72 gap-x-20 gap-y-24 pb-14">
        <livewire:pictures imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
          <livewire:pictures imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
            <livewire:pictures imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
              <livewire:pictures imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
                <livewire:pictures imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
                  <livewire:pictures imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">



      </div>
    </div>
    <livewire:footer>
      @livewireScripts
</body>

</html>