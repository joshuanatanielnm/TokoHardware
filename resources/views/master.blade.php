<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('sass/app.scss') }}">
    <title>@yield('PageTitle')</title>
</head>
<body class="">
    <div id="page-container">
        <div id="content-wrap">
            <!-- all other page content -->
            <div class="mx-auto bg-blue-300 container">
                <div class="container flex mx-auto text-xs">
                    Buka pukul 08:00 - 22:00
                </div>
            </div>
            <header class="container flex-wrap items-center p-6 mx-auto rounded-b-lg h-200">
                <div class="flex justify-between ">
                    <div>
                        <a href="{{ url('/') }}"><img src="{{ asset('logo/logo.png') }}" alt="" class="w-48"></a>
                    </div>

                    <div class="flex items-center">
                        @if (\Session::has('loginAnggota'))

                        <div class="px-3">
                            <a href="/cart/{{Session::get('id_anggota')}}" class="flex hover:font-medium"><img src="{{ asset('Icons/buy.svg') }}" alt="" class="w-10 px-2"> Cart</a>
                        </div>

                        @else

                        <div class="px-3">
                            <a href="/cart/1" class="flex hover:font-medium"><img src="{{ asset('Icons/buy.svg') }}" alt="" class="w-10 px-2"> Cart</a>
                        </div>

                        @endif
                        <div class="px-3">
                            @if(\Session::has('loginAnggota'))
                                <div class="font-medium py-2 px-4 bg-red-500 rounded-lg text-white hover:bg-red-600 cursor-pointer">
                                    <a href="/logoutUser">logout</a>
                                </div>
                            @else
                            <div class="font-medium">
                                <a href="/formloginUser" class="flex hover:font-medium"><img src="{{ asset('Icons/user.svg') }}" alt="" class="w-10 px-2"> Login/Register</a>
                            </div>
                            @endif


                        </div>
                    </div>
                </div>
            </header>

            @yield('banner')

            @yield('content')
        </div>
        <footer id="footer">
            <div class="flex align-center justify-center bg-black text-white font-medium mt-5 h-10">
                This is Footer
            </div>
        </footer>
    </div>

</body>
<script src=""></script>
</html>
