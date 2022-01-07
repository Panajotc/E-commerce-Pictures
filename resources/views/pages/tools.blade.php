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

    <div class="text-5xl font-bold mx-72 py-16">
      <h1>Artist Brushes and Painting Tools</h1>
    </div>
    <div class="mx-72 flex wrap-flex pb-10">
       <div class="">
         <h1 class="text-4xl py-2 border-solid border-2 border-white"><i class="fas fa-bars mr-4 pl-4"></i> Categories</h1>

         <div class="text-2xl pl-6 border-solid border-2 border-white">
           <ol class="list-none">
           <li class="py-6"> <a href="#">ART SUPPLIES ON SALE</a> </li>
           <li> <a href="#">ACRYLIC MEDIUS, GESSO AND ADDITIVIES</a></li>
           <li class="py-6"> <a href="#">ACRYLIC PAINT</a></li>
           <li> <a href="#">ADHESIVIES AND GLUES</a></li>
           <li class="py-6"> <a href="#">AIRBRUSHES AND AIRBRUSH SUPPLIES</a></li>
           <li> <a href="#">ART SETS AND ART KITS</a></li>
           <li class="py-6"> <a href="#">ARTIST COLORING BOOKS</a></li>
           <li> <a href="#">STRATHMORE BLANK GREETING CARD</a></li>
           <li class="py-6"> <a href="#">BOOKBINDING SUPPLIES</a></li>
           <li> <a href="#">BOOKS</a></li>
           <li class="py-6"> <a href="#">BRUSHES</a></li>
           <li> <a href="#">CALLIGRAPHY AND HAND LETTERING</a></li>
           <li class="py-6"> <a href="#">CANVAS, PANELS AND SURFACES</a></li>
           <li> <a href="#">CRAFTS</a></li>
           <li class="py-6"> <a href="#">DRAWING AND ILLUSTRATION</a></li>
           <li> <a href="#">EASELS</a></li>
           <li class="py-6"> <a href="#">ENCAUSTIC PAINTS</a></li>
           <li> <a href="#">FINE PENS</a></li>
           <li class="py-6"> <a href="#">FRAMING TOOLS AND SUPPLIES</a></li>
           <li> <a href="#">FURNITURE AND LIGHTING</a></li>
           <li class="py-6"> <a href="#">GIFT CARDS</a></li>
           <li class="pb-6"> <a href="#">GLASS PAINT</a></li>
           </ol>
         </div>

       </div>
        
       <div class="inline-flex gap-x-6 gap-y-10 pl-10  border-solid border-2 border-white pr-10">
         <div>
       <livewire:pictures2 imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
       <livewire:pictures2 imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
       <livewire:pictures2 imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
       </div>
       <div class="">
       <livewire:pictures2  imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
       <livewire:pictures2 imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
       <livewire:pictures2 imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
       </div>
       <div>
       <livewire:pictures2 imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
       <livewire:pictures2 imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
       <livewire:pictures2 imag="{{ URL::to('/images/nature.jpg') }}" name="Nature">
       </div>
       </div>
    </div>



   </div>
    <livewire:footer>
      @livewireScripts
</body>

</html>