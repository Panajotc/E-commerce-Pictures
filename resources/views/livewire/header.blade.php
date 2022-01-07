<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/0a55ccbade.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

    <div class="mx-72 text-sm flex justify-between py-3.5">
        <div>
            <a href="#" class="mr-4"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
            <button class="p-2 bg-black rounded text-white">Join Free</button>
        </div>

        <div>
            <div class="inline-flex">
                <button class="p-2 bg-black rounded text-white">Submit Picture</button>
            </div>
            <div class="inline-flex">
                <a href="#" class="border-x-2 border-black mx-4"><i class="fas fa-shopping-cart m-4"></i></a>
            </div>
            <div class="inline-flex gap-x-2">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="inline-flex ml-8 ">
                <select name="Langue">
                    <option value="english">English</option>
                    <option value="italian">Italian</option>
                    <option value="german">German</option>
                </select>
            </div>
        </div>
    </div>
    <div class="bg-black">
        <div class="inline-flex mx-72">
            <div class="">
                <img src="{{ URL::to('/images/company.jpg') }}" class="w-32">
            </div>

            <div class="inline-flex flex items-center justify-center ">
                <form class=" ml-10 bg-white w-96 rounded  border-2">
                    <input class="h-11 text-2xl font-semibold pl-4  " type="text" placeholder="Search">
                    <button class="p-2.5 bg-white float-right" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <div class="inline-flex flex items-center justify-center font-bold text-xl gap-x-6 text-white ml-32">
                <a class="underline underline-offset-4 " href="#">Collections</a>
                <a href="#">Painting Tools</a>
                <a href="#">Bussines Ideas</a>
                <button class="p-2 bg-white rounded font-bold  text-black">Become a contributor</button>
            </div>

        </div>
    </div>




</body>

</html>