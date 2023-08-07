<!DOCTYPE html>
<html lang="en" data-theme="emerald">

<head>
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Hosting Detector: Detect Full Server Details of Any Site/Blog</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="description" content="Here find Any Website or Blog’s Server Details like Hosting Provider, Server Location, Nameserver, Host IP, Site Owner Name And More">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Anurag Deep | https://anuragdeep.com">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/logo.png') }}" />

    <!-- Main Stylesheet -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Javascripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

</head>

<body class="min-h-screen">


    <!-- Header start  -->
    <div id="arya-fly-wrap">
        <div id="arya-fly-menu-top" class="left relative pt-3">
            <div class="arya-fly-top-out left relative">
                <div class="arya-fly-top-in">
                    <div id="arya-fly-logo" class="left relative logo">
                        <a href="/"><img src="{{ URL::asset('images/logo.png') }}" class="" alt="HostingDetector" />
                            <h1 class="text-2xl font-bold ">HostingDetector</h1>
                        </a>
                    </div>
                </div>
                <div class="arya-fly-but-wrap arya-fly-but-menu arya-fly-but-click">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div id="arya-fly-menu-wrap">
            <nav class="arya-fly-nav-menu pt-6 left relative">
                <div class="menu">
                    <ul>
                        <li class=""><a href="/">Home</a></li>
                        <li class=""><a href="/about-site">About Site</a></li>
                        <li class=""><a href="/privacy-policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div id="arya-fly-soc-wrap">
            <!-- <span class="arya-fly-soc-head">Connect with us</span> -->
            <ul class="arya-fly-soc-list left relative">
            </ul>
        </div>
    </div>

    <header>
        <nav class="fixed mx-auto top-0 left-0 right-0 z-[500] shadow-xl flex bg-[#2BC380] 2xl:px-[11%] xl:px-[11%] lg:px-[11%] md:px-[10rem] sm:px-10 px-5 ">

            <!-- Left Navigation -->
            <div class="flex-1 flex justify-center mr-auto">
                <div id="" class="">
                    <div id="arya-nav-bot-wrap" class="left">
                        <div class="arya-nav-bot-left left relative">
                            <div class="arya-fly-but-wrap arya-fly-but-click left relative">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo -->
            <div class="">
                <div class="">

                    <a href="/"><img src="{{ URL::asset('images/logo.png') }}" class="w-16 md:w-20 lg:w-20 p-2 mt-5 inline" alt="HostingDetector" />
                        <h1 class="mt-5 p-2 font-bold text-white text-xl md:text-3xl lg:text-3xl  self-center" style="float: right;">HostingDetector</h1>
                    </a>

                </div>
            </div>

            <!-- Right Navigation -->
            <div class="flex-1 flex justify-center ml-auto">
                <a class=""></a>
            </div>

        </nav>

        <nav class="flex fixed w-screen">
        </nav>
    </header>

    <div id="overlay" class="arya-fly-fade"></div>
    <!-- Header end  -->


    <div class="sm:container mx-auto lg:px-40 md:px-10 sm:px-10 px-5 ">
        <div class="pt-[10rem]"></div>

        <div class="mb-9 sm:container mx-auto min-h-[70vh]">
            <div class="pt-[3rem]">

                <div class="card bg-base-100 shadow-xl my-6">
                    <div class="card-body">
                        <h2 class="card-title">About this Hosting Detector?</h2>
                        <p class="py-3 leading-normal text-slate-900 text-justify"><a class="text-blue-900 font-bold" style="color: green !important;" href="http://hostingdetector.in/">HostingDetector.in</a> is the best hosting detector over the internet, HostingDetector.in can detect any site’s hosting server's full details. it can detect the hosting provider name, hosting IP,nameverser details, and more secrets details about the hosted server.
                        </p>
                    </div>
                </div>

            </div>
        </div>


    </div>


    <!-- footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded mt-[9rem]">
        <div class="grid grid-flow-col gap-4">
            <a href="about-site" class="link link-hover text-black-500 font-bold">About Site</a>
            <a href="privacy-policy" class="link link-hover text-black-500 font-bold">Privacy Policy</a>
        </div>
        <div>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg></a>
            </div>
        </div>
        <div>
            <p>Copyright &copy;<script>
                    var CurrentYear = new Date().getFullYear()
                    document.write(CurrentYear)
                </script><a class="text-black-500 font-bold link link-hover" href="http://hostingdetector.in/"> HostingDetector.In</a> | Developed by <a class="link link-hover text-black-500 font-bold hover:text-white" href="https://anuragdeep.com">Anurag Deep</a></p>
        </div>
    </footer>
    <!-- /footer -->

    <style>
        .space-mt {
            margin-top: 100px !important;
        }

        .space-pt {
            padding-top: 100px !important;
        }
    </style>

</body>



</html>