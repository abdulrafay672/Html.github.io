<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <style>
        input:checked~.radio {
            color: white;
            background-color: green;
        }
    </style>
</head>
<script>
    function order() {
        swal("your registration has been done..!", "Here's some payment methods after that you will get order", "success", {
            button: "Get Order",

        });
    }
</script>

<body>

    <header class="text-white body-font p-2 mt-0 fixed">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
                <span class="ml-3 text-xl">ONLIINE TUTOR</span>
            </a>


        </div>
    </header>

    <div class="relative min-h-screen flex items-center justify-center bg-center bg-white-50 py-12 px-4 sm:px-6 lg:px-8 bg-white-500 bg-no-repeat bg-cover relative items-center">
        <div class="absolute bg-black opacity-60 inset-0 z-0 "></div>
        <div class="mt-1 items-center z-10 ">
            <form class="p-14 bg-white max-w-sm mx-auto rounded-lg shadow-xl overflow-hidden space-y-4" action="Userlogin.php"  method="POST">
                <h2 class="text-2xl -mt-6 font-bold text-center text-green-600 ">Login</h2>

                <div class="m-8 bg-gray-200 rounded-md">
                    <div class="inline-flex rounded-md">
                        <input type="radio" name="room_type" id="roomPrivate" value="teacher" checked hidden/>
                        <label for="roomPrivate" class="radio text-center self-center py-2 px-4 rounded-lg cursor-pointer hover:opacity-75">Teacher</label>
                    </div>

                    <div class="inline-flex rounded-md">
                        <input type="radio" name="room_type" id="roomPublic" value="Student" hidden/>
                        <label for="roomPublic" class="radio text-center self-center py-2 px-4 rounded-lg cursor-pointer hover:opacity-75">Student</label>
                    </div>
                </div>

                <div class="f-outline px-2 relative border rounded-lg focus-within:border-green-500 ">
                    <input type="email" name="email" required="" placeholder=" " class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent " />
                    <label for="email" class="absolute ml-5 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0 ">Email</label>
                </div>
                <div class="f-outline px-2 relative border rounded-lg focus-within:border-green-500 ">
                    <input type="password" name="password" required="" placeholder=" " class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent " />
                    <label for="password" class="absolute ml-5 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0 ">Password</label>
                </div>
                <div class="block mt-2 ">
                    <label for=" " class="flex items-center ">
                        <input type="checkbox"
                            class="ml-2 rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 ">
                        </input>
                        <span class="ml-2 text-sm text-gray-600 ">Remember me</span>
                    </label>
                </div>


                <div class="flex items-center flex items-center justify-end mt-4 ">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 " href="# ">
                    Forgot Password?
                </a>
                    <button type="submit" onclick="" class="px-6 py-2 ml-4 font-semibold cursor-pointer text-center focus:outline-none transition hover:shadow-lg shadow hover:bg-green-600 rounded-full text-white bg-green-600 ">
              Log in
               </button>
                </div>

                <div class="flex items-center flex items-center justify-start mt-4 ">
                    <b>Not an Account</b>
                    <a class="underline text-sm text-green-600 hover:text-gray-900 " href="register.html">
                Register?
                </a>
                </div>

            </form>
        </div>
    </div>


    <style>
        .f-outline input:focus-within~label,
        .f-outline input:not(:placeholder-shown)~label {
            transform: translateY(-1.5rem) translatex(-1rem) scaleX(0.80) scaleY(0.80);
        }
    </style>


</body>

</html>