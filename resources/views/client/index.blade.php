<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skyspecs Media Company | Home</title>

    {{-- bootstrap links --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset("client/css/style.css") }}">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet"/>
    <link href="https://skyspecsmediaco.com/client/assets/logo.png"
        rel="shortcut icon" type="image/x-icon" />
    <link href="https://skyspecsmediaco.com/client/assets/logo.png"
        rel="apple-touch-icon" />
</head>
<body class="bg-beige" style="height: 100vh;">
    @include('client.blog.modal')
    @include('client.media.modal')
    @include('client.portfolio.modal-2')
    <div class="main-bg position animation" style="opacity: 0.7;z-index:-1;">
    </div>
    <img src="{{ asset("client/assets/robot.png") }}" alt="" style="position: fixed;bottom:0;right:0;opacity:0.7;">
    <section class="px-3" style="z-index: 1;">
        <div style="height: 50vh">
            <div class="mt-3">
                <div>
                    <img src="{{ asset("client/assets/logo2.svg") }}" alt="">
                    <h5 class="ps-3 " style="line-height: 20px; text-transform: uppercase;font-weight:800">
                        Independent <br> minority-owned <br>
                        <span class="" style="line-height: 20px; text-transform: uppercase;font-weight:800;cursor:pointer;" data-bs-toggle="modal" data-bs-target="#portfolio">
                            PORTFOLIO
                        </span>
                    </h5>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <img src="{{ asset("client/assets/logo.png") }}" style="width:100px" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center mt-3">
                <a target="_blank" href="https://www.youtube.com/@skyspecsmediaco"><img src="{{ asset("client/assets/youtube.png") }}" alt="" style="width: 50px;height:40px" class="mx-2"></a>
                {{-- <a target="_blank" href="{{ url("/compatibility-statement.pdf") }}"><img src="{{ asset("client/assets/compatibility.png") }}" alt="" style="width: 30px;height:40px" class="mx-2"></a> --}}
                <a target="_blank" href="https://tiktok.com/@skyspecsmediaco?_t=8jLONH2hVYE&_r=1"><img src="{{ asset("client/assets/tiktok.png") }}" alt="" style="width: 30px;height:40px" class="mx-2"></a>
                <a target="_blank" href="mailto:chudi@skyspecsmediaco.com"><img src="{{ asset("client/assets/mail.png") }}" alt="" style="width: 40px;height:35px" class="mx-2"></a>
                <a target="_blank" href="https://calendly.com/skyspecsmediaco"><img src="{{ asset("client/assets/calendar.png") }}" alt="" style="width: 40px;height:40px" class="mx-2"></a>
                <img data-bs-toggle="modal" data-bs-target="#blog" src="{{ asset("client/assets/blog.png") }}" alt="" style="width: 40px;height:40px" class="mx-2">
                <img data-bs-toggle="modal" data-bs-target="#media" src="{{ asset("client/assets/media.png") }}" alt="" style="width: 40px;height:40px" class="mx-2">
            </div>
        </div>
        <div class="mt-5 container-fluid courier-prime-regular" style="overflow-y:scroll;height:50vh;">
            <div class="row my-3">
                <div class="col-md-2">
                    24-3-24
                </div>
                <div class="col-md-9">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item bg-transparent border-0">
                            <h2 class="accordion-header border-0" id="headingOne">
                                <button class="accordion-button p-0 bg-transparent text-dark fw-bold" onclick="typing(`SkySpecs Media Company LLC achieved its Small Business Enterprise (SBE) and Disadvantaged Business Enterprise (DBE) certifications through the LA County Metropolitan Transportation Authority, securing CUCP#52098, by meeting stringent eligibility requirements and providing comprehensive documentation. These certifications enable the company to participate in various transportation projects and enhance its business opportunities within Los Angeles County.`,'one')" style="box-shadow: 0px 0px 0px black" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    LA COUNTY METROPOLITAN TRANSPORTATION AUTHORITY CERTIFIES SKYSPECS MEDIA COMPANY AS A DBE AND SBE ENTERPRISE
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0 pt-2" id="one">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-2">
                    26-3-24
                </div>
                <div class="col-md-9">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item bg-transparent border-0">
                            <h2 class="accordion-header border-0" id="heading2">
                                <button class="accordion-button p-0 bg-transparent text-dark fw-bold" onclick="typing(`SkySpecs Media Company LLC, 100% owned by Chudi Aniezue, CEO, earned its Minority Business Enterprise (MBE) certification through the NMSDC (certificate number SC59239) by undergoing a rigorous process to provide necessary documentation proving minority ownership and control. This prestigious certification enables the company to access a network of corporate members dedicated to supplier diversity and expanding business opportunities.`,'two')" style="box-shadow: 0px 0px 0px black" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    SKYSPECS MEDIA COMPANY BECOMES AN MBE CERTIFIED COMPANY THROUGH NMSDC
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0 pt-2" id="two">
                                    ..
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-2">
                    26-3-24
                </div>
                <div class="col-md-9">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item bg-transparent border-0">
                            <h2 class="accordion-header border-0" id="heading3">
                                <button class="accordion-button p-0 bg-transparent text-dark fw-bold" onclick="typing(`SkySpecs Media Company LLC achieved its Minority Business Enterprise (MBE) certification through the Supplier Clearinghouse by meeting the rigorous criteria for minority ownership and management, securing Vendor Number (VON) 24000105. This certification enhances the company’s ability to engage in supplier diversity programs and expand its business opportunities.`,'three')" style="box-shadow: 0px 0px 0px black" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    SKYSPECS MEDIA COMPANY BECOMES A MBE CERTIFIED COMPANY THROUGH SUPPLIER CLEARINGHOUSE
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0 pt-2" id="three">
                                    ..
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-2">
                    31-1-24
                </div>
                <div class="col-md-9">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item bg-transparent border-0">
                            <h2 class="accordion-header border-0" id="heading4">
                                <button class="accordion-button p-0 bg-transparent text-dark fw-bold" onclick="typing(`SkySpecs Media Company LLC, under certification number 2037204, has earned EBE, SBE (Proprietary), SBE (City of Los Angeles), and VSBE (HARBOR) certifications. These certifications legitimize SkySpecs Media Company to work with the City of Los Angeles and enhance its opportunities for growth in the industry.`,'four')" style="box-shadow: 0px 0px 0px black" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                    SKYSPECS MEDIA COMPANY BECOMES AN EBE, SBE(PROPRIETARY), SBE (CITY OF LOS ANGELES), VSBE(HARBOR) CERTIFIED COMPANY
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0 pt-2" id="four">
                                    ..
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-2">
                    22-12-23
                </div>
                <div class="col-md-9">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item bg-transparent border-0">
                            <h2 class="accordion-header border-0" id="heading5">
                                <button class="accordion-button p-0 bg-transparent text-dark fw-bold" onclick="typing(`SkySpecs Media Company LLC specializes in high-quality video production(NAICS: 512110), aerial drone videography (NAICS: 516210) and commercial photography. We create visually stunning and compelling content. Leveraging cutting-edge technology and creative expertise, we deliver exceptional results, and we provide high quality cinematic video production services to enhance our clients needs to fulfill greatness.`,'five')" style="box-shadow: 0px 0px 0px black" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    THE FORMATION OF SKYSPECS MEDIA COMPANY
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse hide" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0 pt-2" id="five">
                                    ..
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        let i, txt, id, speed = 10;

        function typing(text, section) {
            i = 0;
            txt = text;
            id = section;
            document.getElementById(id).innerHTML = "";
            print();
        }

        function print() {
            if (i < txt.length) {
                console.log(id);

                document.getElementById(id).innerHTML += txt.charAt(i);
                i++;
                setTimeout(print, speed);
            }
        }

    </script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            items: 1,
            margin:20,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                    , nav: true
                }
                , 600: {
                    items: 2
                    , nav: false
                }
                , 1000: {
                    items: 3
                    , nav: true
                    , loop: false
                }
            }
        })

    </script>

</body>
</html>
