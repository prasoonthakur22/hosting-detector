<!DOCTYPE html>
<html lang="en" data-theme="emerald">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Hosting Detector: Detect Full Server Details of Any Site/Blog</title>

    <!-- Specific Metas -->
    <meta name="google-site-verification" content="KHR0WtCP1jeZDf5RMifPCJmoCNqlY_xwLqlGMl6C9DM" />
    <meta name="description" content="Here find Any Website or Blog’s Server Details like Hosting Provider, Server Location, Nameserver, Host IP, Site Owner Name And More">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Anurag Deep | https://anuragdeep.com">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

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

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7273719401369978" crossorigin="anonymous"></script>
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
        <nav style="height: 50px;" class="fixed mx-auto top-0 left-0 right-0 z-[500] shadow-xl flex bg-[#2BC380] 2xl:px-[11%] xl:px-[11%] lg:px-[11%] md:px-[10rem] sm:px-10 px-5 ">

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

                    <a href="/"><img src="{{ URL::asset('images/logo.png') }}" class="w-16 md:w-18 lg:w-18 p-1 mt-1 md:mt-1 lg:mt-1 inline" alt="HostingDetector" />
                        <h1 class="mt-2 md:mt-0 lg:mt-0  p-1 font-bold text-white text-xl md:text-3xl lg:text-3xl  self-center" style="float: right;">HostingDetector</h1>
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
        <div class=" bg-[Slate-100]">

            <div class="card bg-[#D8EFEF] shadow-xl ">
                <div class="card-body">
                    <form id="domainForm">
                        <div class="form-control">
                            <div class="input-group">
                                <input class="min-w-[10rem] input input-bordered shadow-2xl input-md lg:input-lg md:input-lg  w-full" type="text" id="domain" name="domain" placeholder="enter domain">
                                <button type="submit" id="domainSubmit" value="Submit" class="btn btn-md lg:btn-lg md:btn-lg btn-success gap-2 shadow-2xl">
                                    Find Host
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="mx-auto">
            <center>
                <div class="text-center">
                    <div class="ml-1">
                        <div class="overlay">
                            <div class="atom-spinner hide">
                                <div class="spinner-inner">
                                    <div class="spinner-line"></div>
                                    <div class="spinner-line"></div>
                                    <div class="spinner-line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>

            <div class="overflow-x-auto pt-[3rem]">
                <p class="py-3 text-red-700 font-bold p-3 hide" id="message"></p>

                <div id="hostingBox" class="overflow-x-auto hide">


                    <div class="pb-6">

                        <div class="flex flex-col w-full lg:flex-row">
                            <div class="grid flex-grow h-32 card bg-white rounded-box place-items-center">
                                <div class="text-slate-900 text-3xl md:text-4xl lg:text-4xl font-bold"><i class="fa-solid fa-server pr-3"></i> Hosting Provider</div>
                            </div>
                            <div class="divider lg:divider-horizontal">IS</div>
                            <div class="grid flex-grow h-32 card bg-white rounded-box place-items-center">
                                <div id="hosting" class="text-3xl md:text-4xl lg:text-4xl font-extrabold text-success"></div>
                            </div>
                        </div>


                    </div>

                    <div id="tableBox" class="hide">
                        <table class="table w-full">
                            <tbody>
                                <!-- row 1 -->
                                <tr class="hover">
                                    <td><i class="fa-solid fa-network-wired pr-3"></i>IP</td>
                                    <td id="ip"></td>
                                </tr>
                                <!-- row 2 -->
                                <tr class="hover">
                                    <td><i class="fa-solid fa-city pr-3"></i>Server Location</td>
                                    <td id="city"></td>
                                </tr>

                                <!-- row 3 -->
                                <tr class="hover">
                                    <td><i class="fa-solid fa-at pr-3"></i>Email</td>
                                    <td id="mail"></td>
                                </tr>

                                <!-- row 4 -->
                                <tr class="hover">
                                    <td><i class="fa-solid fa-phone pr-3"></i>Phone</td>
                                    <td id="phone"></td>
                                </tr>

                                <!-- row 5 -->
                                <tr class="hover">
                                    <td><i class="fa-solid fa-laptop-code pr-3"></i></i>Name Server</td>
                                    <td id="names"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="mapText" class="pt-3 hide">
                    <p class="py-3 leading-loose font-bold text-slate-900">Server Location in Map</p>
                </div>
                <div id="mapBox">
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <!-- /table -->

        <div class="mb-9 sm:container mx-auto">
            <div class="pt-[3rem]">

                <div class="card bg-base-100 shadow-xl my-6">
                    <div class="card-body">
                        <h2 class="card-title">Hosting Detector: Detect Any Website’s Hosting Details</h2>
                        <p class="py-3 leading-normal text-slate-900 text-justify">This is a web hosting detector tool where you can detect website hosting details, blog hosting details, and more. this tool can give you details about the hosting provider name, hosting IP address, hosting nameserver details, hosted site's server location, and more about the detected hosting server.
                        </p>
                    </div>
                </div>


                <div class="card bg-base-100 shadow-xl my-6">
                    <div class="card-body">
                        <h2 class="card-title">About this Hosting Detector?</h2>
                        <p class="py-3 leading-normal text-slate-900 text-justify"><a class="text-blue-900 font-bold" style="color: green !important;" href="http://hostingdetector.in/">HostingDetector.in</a> is the best hosting detector over the internet, HostingDetector.in can detect any site’s hosting server's full details. it can detect the hosting provider name, hosting IP,nameverser details, and more secrets details about the hosted server.
                        </p>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl my-6">
                    <div class="card-body">
                        <h2 class="card-title">Is it Wp Hosting Detector?</h2>
                        <p class="py-3 leading-normal text-slate-900 text-justify">Yes, this is a hosting detector which is also a WP hosting detector means WordPress hosting detector. you can also detect hosting of any with just one click.
                        </p>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl my-6">
                    <div class="card-body">
                        <h2 class="card-title">How To Detect Hosting of a Site/Blog?</h2>
                        <p class="py-3 leading-normal text-slate-900 text-justify">We can't detect hosting details by just visiting the site. But here, in this tool, you can detect server details of any site. Just enter the domain name, after entering a domain name it will detect all details related to the hosting server, in easiest way</p>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl my-6">
                    <div class="card-body">
                        <h2 class="card-title">About Hosting Details Finder?</h2>
                        <p class="py-3 leading-normal text-slate-900 text-justify">A hosting detector or hosting details finder is also almost the same thing, a hosting finder can detect the hosting details of the hosting server. details like nameserver, hosted IP, hosted location, hosted owner name etc.
                        </p>
                    </div>
                </div>

            </div>
        </div>


        <!-- Frequently Asked Questions  -->
        <div class="mb-9 sm:container mx-auto">
            <div class="pt-[2rem] pb-[5rem]">
                <div class="pt-3">
                    <h5 class="py-3 leading-loose font-bold text-slate-900">Frequently Asked Questions</h5>
                </div>

                <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box my-6 shadow-2xl">
                    <input type="checkbox" class="peer">
                    <h5 class="collapse-title text-xl bg-primary pr-7 pl-7">
                        Is it a hosting provider detector?
                    </h5>
                    <div class="collapse-content bg-[#ffffff] ">
                        <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">Yes, this is also a hosting provider detector </p>
                    </div>
                </div>

                <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box  my-6 shadow-2xl">
                    <input type="checkbox" class="peer">
                    <h5 class="collapse-title text-xl bg-primary pr-7 pl-7">
                        Can I detect any hosted domain hosting server details?
                    </h5>
                    <div class="collapse-content bg-[#ffffff] ">
                        <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">Yes, by using this tool you can detect any hosted site’s hosting details.</p>
                    </div>
                </div>

                <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box  my-6 shadow-2xl">
                    <input type="checkbox" class="peer">
                    <h5 class="collapse-title text-xl bg-primary pr-7 pl-7">
                        Is This hosting location checker?
                    </h5>
                    <div class="collapse-content bg-[#ffffff] ">
                        <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">This is a hosting detector but you can detect or check to host location also.</p>
                    </div>
                </div>

                <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box  my-6 shadow-2xl">
                    <input type="checkbox" class="peer">
                    <h5 class="collapse-title text-xl bg-primary pr-7 pl-7">
                        Is this a ​​wordpress hosting detector?
                    </h5>
                    <div class="collapse-content bg-[#ffffff] ">
                        <p class="py-3 leading-normal text-slate-900 text-justify pr-3 pl-3">Yes, this is also a WordPress hosting detector. if you want to detect WordPress themes and plugins then visit
                            <a class="text-blue-900 font-bold" style="color: green !important;" href="https://whatthemeis.com/">WhatThemeIs.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <!-- Start Data Loading from Backend  -->
    <script>
        $(document).ready(function() {
            $('#domainForm').on('submit', function(e) {
                $('#tableData').html(null);
                // $('#message').html("Wait... Not Available or Incorrect Domain");
                e.preventDefault()
                if (true) {
                    let domainURL = $('#domain').val();
                    if (!domainURL) {
                        $('#message').html("Please enter domain");
                        $('#tableData').html(null);

                        $('#message').addClass('show')
                        $('#message').removeClass('hide')
                        return null;
                    }
                    $.ajax({
                        type: "POST",
                        url: "{{ url('/hosting-checker/domain') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            domain: domainURL,
                        },
                        dataType: "json",
                        encode: true,
                        beforeSend: function() {
                            $('.atom-spinner').addClass('show')
                            $('.atom-spinner').removeClass('hide')

                            $('#message').addClass('hide')
                        },
                        success: function(result) {},
                        error: function(data) {
                            $('#tableData').html(null);
                            $('#message').html("Incorrect Domain or Data does not exist");
                            $('#message').addClass('show')
                            $('#message').removeClass('hide')

                            $('#hostingBox').addClass('hide')
                            $('#hostingBox').removeClass('show')


                            $('#tableBox').addClass('hide')
                            $('#tableBox').removeClass('show')

                            $('#mapText').addClass('hide')
                            $('#mapText').removeClass('show')
                        },
                        complete: function() {
                            $('.atom-spinner').addClass('hide')
                            $('.atom-spinner').removeClass('show')
                            $('#message').removeClass('hide')


                            $('#hostingBox').addClass('show')
                            $('#hostingBox').removeClass('hide')


                            $('#tableBox').addClass('show')
                            $('#tableBox').removeClass('hide')

                            $('#mapText').addClass('show')
                            $('#mapText').removeClass('hide')

                        },

                    }).done(function(result) {
                        if (result.success == true) {

                            $('#hosting').html(result.data['Hosting Provider']);
                            $('#ip').html(result.data['IP']);

                            let location = result.data['City'] + ", " + result.data['Country']

                            $('#city').html(location);
                            $('#mail').html(result.data['Email']);
                            $('#phone').html(result.data['Phone']);
                            $('#names').html(result.data['Name Server']);

                            document.getElementById('mapBox').innerHTML = "<div id='map' style='height: 380px;'></div>";

                            var mapbox;
                            if (map != undefined && map != null) {
                                map.remove();
                                console.log('sdfghsd');

                                map.remove();
                                map = undefined
                                document.getElementById('map').innerHTML = "";
                            }
                            var map = L.map('map', {
                                center: [result.data.lat, result.data.lon],
                                zoom: 5
                            });

                            var marker = L.marker([result.data.lat, result.data.lon]).addTo(map);

                            var tiles = new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                            }).addTo(map);

                            $('#message').html(null);
                        } else {
                            $('#tableData').html(result.message);

                            $('#message').addClass('show')
                            $('#message').removeClass('hide')
                        }
                    });
                }
            });
        });
    </script>
    <!-- End Data Loading from Backend  -->
    </div>

    <!-- footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
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
                </script><a class="text-black-500 font-bold link link-hover" href="http://hostingdetector.in/"> HostingDetector.In</a> | Developed by <a class="text-black-500 font-bold link link-hover hover:text-white" href="https://anuragdeep.com">Anurag Deep</a></p>
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

    <style>
        /* Start Loader Style  */
        .show {
            display: block !important;
        }

        .hide {
            display: none !important;
        }


        .atom-spinner,
        .atom-spinner * {
            box-sizing: border-box;
        }

        .atom-spinner {
            height: 100px;
            width: 100px;
            overflow: hidden;
        }

        .atom-spinner .spinner-inner {
            position: relative;
            display: block;
            height: 100%;
            width: 100%;
        }

        .atom-spinner .spinner-circle {
            display: block;
            position: absolute;
            color: #9c2424;
            font-size: calc(60px * 0.24);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .atom-spinner .spinner-line {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            animation-duration: 1s;
            border-left-width: calc(100px / 20);
            border-top-width: calc(100px / 20);
            border-left-color: #9c2424;
            border-left-style: solid;
            border-top-style: solid;
            border-top-color: transparent;
        }

        .atom-spinner .spinner-line:nth-child(1) {
            animation: atom-spinner-animation-1 1s linear infinite;
            transform: rotateZ(120deg) rotateX(66deg) rotateZ(0deg);
        }

        .atom-spinner .spinner-line:nth-child(2) {
            animation: atom-spinner-animation-2 1s linear infinite;
            transform: rotateZ(240deg) rotateX(66deg) rotateZ(0deg);
        }

        .atom-spinner .spinner-line:nth-child(3) {
            animation: atom-spinner-animation-3 1s linear infinite;
            transform: rotateZ(360deg) rotateX(66deg) rotateZ(0deg);
        }

        @keyframes atom-spinner-animation-1 {
            100% {
                transform: rotateZ(120deg) rotateX(66deg) rotateZ(360deg);
            }
        }

        @keyframes atom-spinner-animation-2 {
            100% {
                transform: rotateZ(240deg) rotateX(66deg) rotateZ(360deg);
            }
        }

        @keyframes atom-spinner-animation-3 {
            100% {
                transform: rotateZ(360deg) rotateX(66deg) rotateZ(360deg);
            }
        }

        /* End Loader Style  */
    </style>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3WJFB9M62N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3WJFB9M62N');
    </script>


</body>



</html>