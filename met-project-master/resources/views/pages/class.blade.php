@extends('layout')


@section('style')

@endsection

@section('content')
<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
         style="background-image: url(/front/images/page-banner-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Синфҳо</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Асосӣ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Синфҳо</li>
                        </ol>
                    </nav>
                </div>
                <!-- page banner cont -->
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!--====== PAGE BANNER PART ENDS ======-->

<!--====== FAQ PART START ======-->

<!-- Demo header-->


<style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*/

    .nav-pills-custom .nav-link {
        color: #07294d;
        background: #fff;
        position: relative;
    }

    .nav-pills-custom .nav-link.active {
        /* color: #45b649;
            background: #fff; */
        color: white;
        background: #07294d;
    }

    /* Add indicator arrow for the active tab */

    @media (min-width: 992px) {
        .nav-pills-custom .nav-link::before {
            content: '';
            display: block;
            border-top: 8px solid transparent;
            border-left: 10px solid #07294d;
            border-bottom: 8px solid transparent;
            position: absolute;
            top: 50%;
            right: -10px;
            transform: translateY(-50%);
            opacity: 0;
        }
    }

    .nav-pills-custom .nav-link.active::before {
        opacity: 1;
    }

    /*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*/
    /* body {
            min-height: 100vh;
            background: linear-gradient(to left, #dce35b, #45b649);
        } */
</style>


<section class="py-5 header">
    <div class="container py-4">
        <!-- <header class="text-center mb-5 pb-5 text-white">
            <h1 class="display-4">Bootstrap vertical tabs</h1>
            <p class="font-italic mb-1">Making advantage of Bootstrap 4 components, easily build an awesome tabbed interface.</p>
            <p class="font-italic">Snippet by
                <a class="text-white" href="https://bootstrapious.com/">
                    <u>Bootstrapious</u>
                </a>
            </p>
        </header> -->


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical" style="color: #234565">

                    <a class="nav-link mb-3 p-3 shadow active"
                       id="v-pills-home-tab" data-toggle="pill" href="#sinfi-1" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Синфи
                                1</span></a>
                    <a class="nav-link mb-3 p-3 shadow "
                       id="v-pills-home-tab" data-toggle="pill" href="#sinfi-2" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Синфи
                                2</span></a>
                    <a class="nav-link mb-3 p-3 shadow "
                       id="v-pills-home-tab" data-toggle="pill" href="#sinfi-3" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Синфи
                                3</span></a>
                    <a class="nav-link mb-3 p-3 shadow "
                       id="v-pills-home-tab" data-toggle="pill" href="#sinfi-4" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Синфи
                                4</span></a>
                    <a class="nav-link mb-3 p-3 shadow "
                       id="v-pills-home-tab" data-toggle="pill" href="#sinfi-5" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Синфи
                                5</span></a>
                    <a class="nav-link mb-3 p-3 shadow "
                       id="v-pills-home-tab" data-toggle="pill" href="#sinfi-6" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Синфи
                                6</span></a>
                    <a class="nav-link mb-3 p-3 shadow "
                       id="v-pills-home-tab" data-toggle="pill" href="#sinfi-7" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Синфи
                                7</span></a>
                    <a class="nav-link mb-3 p-3 shadow "
                       id="v-pills-home-tab" data-toggle="pill" href="#sinfi-8" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Синфи
                                8</span></a>
                    <a class="nav-link mb-3 p-3 shadow "
                       id="v-pills-home-tab" data-toggle="pill" href="#sinfi-9" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Синфи
                                9</span></a>
                    <a class="nav-link mb-3 p-3 shadow "
                       id="v-pills-home-tab" data-toggle="pill" href="#sinfi-10" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Синфи
                                10</span></a>
                    <a class="nav-link mb-3 p-3 shadow "
                       id="v-pills-home-tab" data-toggle="pill" href="#sinfi-11" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Синфи
                                11</span></a>
                </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white  show active p-5"
                         id="sinfi-1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/alifbo.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="{{route('subject')}}">
                                                <h5>АЛИФБО</h5>
                                                <span>135 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zaboni_modari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=1&id_book=2">
                                                <h5>ЗАБОНИ МОДАРӢ</h5>
                                                <span>23 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/khr.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=1&id_book=3">
                                                <h5>ҚОИДАҲОИ ҲАРАКАТИ РОҲ</h5>
                                                <span>25 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/matematika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=1&id_book=4">
                                                <h5>МАТЕМАТИКА</h5>
                                                <span>78 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/sanatVaMehnat.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=1&id_book=5">
                                                <h5>САНЪАТ ВА МЕҲНАТ</h5>
                                                <span>52 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/surud.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=1&id_book=6">
                                                <h5>СУРУД ВА МУСИҚӢ</h5>
                                                <span>25 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tabiatshinosi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=1&id_book=7">
                                                <h5>ТАБИАТШИНОСӢ</h5>
                                                <span>35 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarbyaiLismoni.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=1&id_book=8">
                                                <h5>ТАРБИЯИ ҶИСМОНӢ</h5>
                                                <span>24 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5"
                         id="sinfi-2" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/sanatVaMehnat.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=2&id_book=9">
                                                <h5>САНЪАТ ВА МЕҲНАТ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/alifboiMusuqi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=2&id_book=10">
                                                <h5>АЛИФБОИ МУСИҚӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zaboni_modari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=2&id_book=11">
                                                <h5>ЗАБОНИ МОДАРӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/khr.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=2&id_book=12">
                                                <h5>ҚОИДАҲОИ ҲАРАКАТИ РОҲ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/matematika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=2&id_book=13">
                                                <h5>МАТЕМАТИКА</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/rusRech.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=2&id_book=14">
                                                <h5>РУССКАЯ РЕЧЬ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/surud.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=2&id_book=15">
                                                <h5>СУРУД ВА МУСИҚӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tabiatshinosi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=2&id_book=16">
                                                <h5>ТАБИАТШИНОСӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5"
                         id="sinfi-3" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zAnglisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=3&id_book=17">
                                                <h5>ЗАБОНИ АНГЛИСӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zArabi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=3&id_book=18">
                                                <h5>ЗАБОНИ АРАБӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zaboni_modari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=3&id_book=19">
                                                <h5>ЗАБОНИ МОДАРӢ  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/matematika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=3&id_book=20">
                                                <h5>МАТЕМАТИКА</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/rusRech.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=3&id_book=21">
                                                <h5>РУССКАЯ РЕЧЬ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/sanatVaMehnat.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=3&id_book=22">
                                                <h5>САНЪАТ ВА МЕҲНАТ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/surud.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=3&id_book=23">
                                                <h5>СУРУД ВА МУСИҚӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tabiatshinosi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=3&id_book=24">
                                                <h5>ТАБИАТШИНОСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarbyaiLismoni.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=3&id_book=25">
                                                <h5>ТАРБИЯИ ҶИСМОНӢ  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarzi_hayoti_solim.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=3&id_book=26">
                                                <h5>ТАРЗИ ҲАЁТИ СОЛИМ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5"
                         id="sinfi-4" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zAnglisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=4&id_book=27">
                                                <h5>ЗАБОНИ АНГЛИСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zaboni_modari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=4&id_book=28">
                                                <h5>ЗАБОНИ МОДАРӢ  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/matematika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=4&id_book=29">
                                                <h5>МАТЕМАТИКА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/rusRech.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=4&id_book=30">
                                                <h5>РУССКАЯ РЕЧЬ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/sanatVaMehnat.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=4&id_book=31">
                                                <h5>САНЪАТ ВА МЕҲНАТ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/surud.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=4&id_book=32">
                                                <h5>СУРУД ВА МУСИҚӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tabiatshinosi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=4&id_book=33">
                                                <h5>ТАБИАТШИНОСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5"
                         id="sinfi-5" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/adabiyotiTojik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=34">
                                                <h5>АДАБИЁТИ ТОҶИК</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/botanika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=35">
                                                <h5>БОТАНИКА</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zArabi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=36">
                                                <h5>ЗАБОНИ АРАБӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zaboni_modari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=37">
                                                <h5>ЗАБОНИ ТОҶИКӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/kasbuHunar.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=38">
                                                <h5>КАСБУ ҲУНАР</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zAnglisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=39">
                                                <h5>ЗАБОНИ АНГЛИСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/matematika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=40">
                                                <h5>МАТЕМАТИКА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/rusYazik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=41">
                                                <h5>РУССКИЙ ЯЗЫК</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/sanatVaMehnat.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=42">
                                                <h5>САНЪАТИ ТАСВИРӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/surud.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=43">
                                                <h5>СУРУД ВА МУСИҚӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarbyaiLismoni.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=44">
                                                <h5>ТАРБИЯИ ҶИСМОНӢ  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tht.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=45">
                                                <h5>ТАЪРИХИ ХАЛҚИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarihiUmumi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=46">
                                                <h5>ТАЪРИХИ УМУМӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tI.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=47">
                                                <h5>ТЕХНОЛОГИЯИ ИТТИЛООТӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tehnologiyaDuhtarona.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=5&id_book=48">
                                                <h5>ТЕХНОЛОГИЯ (ДУХТАРОНА)</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5"
                         id="sinfi-6" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/adabiyotiTojik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=49">
                                                <h5>АДАБИЁТИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/asoshoiBexatari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=50">
                                                <h5>АСОСҲОИ БЕХАТАРИИ ҲАЁТ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/botanika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=51">
                                                <h5>БОТАНИКА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/geography.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=52">
                                                <h5>ГЕОГРАФИЯ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zNemisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=53">
                                                <h5>ЗАБОНИ НЕМИСӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zFransavi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=54">
                                                <h5>ЗАБОНИ ФРАНСАВӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zAnglisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=55">
                                                <h5>ЗАБОНИ АНГЛИСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zArabi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=56">
                                                <h5>ЗАБОНИ АРАБӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zaboni_modari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=57">
                                                <h5>ЗАБОНИ ТОҶИКӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/matematika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=58">
                                                <h5>МАТЕМАТИКА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/rusYazik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=59">
                                                <h5>РУССКИЙ ЯЗЫК  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/sanatVaMehnat.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=60">
                                                <h5>САНЪАТИ ТАСВИРӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/surud.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=61">
                                                <h5>СУРУД ВА МУСИҚӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarbyaiLismoni.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=62">
                                                <h5>ТАРБИЯИ ҶИСМОНӢ  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tht.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=63">
                                                <h5>ТАЪРИХИ ХАЛҚИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarihiUmumi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=64">
                                                <h5>ТАЪРИХИ УМУМӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tehnologiyaDuhtarona.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=65">
                                                <h5>ТЕХНОЛОГИЯ (ДУХТАРОНА) </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tehnologiyaPisarona.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=66">
                                                <h5>ТЕХНОЛОГИЯ (ПИСАРОНА) </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tI.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=6&id_book=67">
                                                <h5>ТЕХНОЛОГИЯИ ИТТИЛООТӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5"
                         id="sinfi-7" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zArabi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=68">
                                                <h5>АЛИФБО ВА МАТНИ НИЁГОН</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/adabiyotiTojik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=69">
                                                <h5>АДАБИЁТИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/algebra.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=70">
                                                <h5>АЛГЕБРА</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/asoshoiBexatari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=71">
                                                <h5>АСОСҲОИ БЕХАТАРИИ ҲАЁТ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/geographyMaterikOcean.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=72">
                                                <h5>ГЕОГРАФИЯИ МАТЕРИКҲО ВА УҚЁНУСҲО</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/geometry.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=73">
                                                <h5>ГЕОМЕТРИЯ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zArabi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=74">
                                                <h5>ЗАБОНИ АРАБӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zNemisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=75">
                                                <h5>ЗАБОНИ НЕМИСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zaboni_modari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=76">
                                                <h5>ЗАБОНИ ТОҶИКӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zoology.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=77">
                                                <h5>ЗООЛОГИЯ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tehnologiyaPisarona.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=78">
                                                <h5>ТЕХНОЛОГИЯ (ПИСАРОНА) </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tehnologiyaDuhtarona.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=79">
                                                <h5>ТЕХНОЛОГИЯ (ДУХТАРОНА) </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/rusYazik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=80">
                                                <h5>РУССКИЙ ЯЗЫК  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/sanatVaMehnat.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=81">
                                                <h5>САНЪАТИ ТАСВИРӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarbyaiLismoni.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=82">
                                                <h5>ТАРБИЯИ ҶИСМОНӢ  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarihiUmumi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=83">
                                                <h5>ТАЪРИХИ УМУМӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zAnglisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=84">
                                                <h5>ЗАБОНИ АНГЛИСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tht.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=85">
                                                <h5>ТАЪРИХИ ХАЛҚИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tI.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=86">
                                                <h5>ТЕХНОЛОГИЯИ ИТТИЛООТӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/fizika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=7&id_book=87">
                                                <h5>ФИЗИКА</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5"
                         id="sinfi-8" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/adabiyotiTojik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=88">
                                                <h5>АДАБИЁТИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/algebra.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=89">
                                                <h5>АЛГЕБРА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zAnglisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=90">
                                                <h5>ЗАБОНИ АНГЛИСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/geographyTj.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=91">
                                                <h5>ГЕОГРАФИЯИ ТОҶИКИСТОН</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/geometry.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=92">
                                                <h5>ГЕОМЕТРИЯ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zaboni_modari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=93">
                                                <h5>ЗАБОНИ ТОҶИКӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zoology.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=94">
                                                <h5>ЗООЛОГИЯ  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zNemisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=95">
                                                <h5>ЗАБОНИ НЕМИСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/odobiMuoshiratVaRuzgordori.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=96">
                                                <h5>ОДОБИ МУОШИРАТ ВА РӮЗГОРДОРӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/rusYazik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=97">
                                                <h5>РУССКИЙ ЯЗЫК  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarihiUmumi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=98">
                                                <h5>ТАЪРИХИ УМУМӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tht.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=99">
                                                <h5>ТАЪРИХИ ХАЛҚИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tI.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=100">
                                                <h5>ТЕХНОЛОГИЯИ ИТТИЛООТӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tehnologiyaPisarona.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=101">
                                                <h5>ТЕХНОЛОГИЯ (ПИСАРОНА) </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tehnologiyaDuhtarona.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=102">
                                                <h5>ТЕХНОЛОГИЯ (ДУХТАРОНА) </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/fizika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=103">
                                                <h5>ФИЗИКА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/khimiya.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=104">
                                                <h5>ХИМИЯ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/huquq.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=8&id_book=105">
                                                <h5>АСОСҲОИ ДАВЛАТ ВА ҲУҚУҚИ ҶУМҲУРИИ ТОҶИКИСТОН</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5"
                         id="sinfi-9" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/adabiyotiTojik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=106">
                                                <h5>АДАБИЁТИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/algebra.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=107">
                                                <h5>АЛГЕБРА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/biology.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=108">
                                                <h5>БИОЛОГИЯ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/geography.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=109">
                                                <h5>ГЕОГРАФИЯ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/geometry.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=110">
                                                <h5>ГЕОМЕТРИЯ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zAnglisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=111">
                                                <h5>ЗАБОНИ АНГЛИСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zaboni_modari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=112">
                                                <h5>ЗАБОНИ ТОҶИКӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tehnologiyaPisarona.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=113">
                                                <h5>АСОСҲОИ КАСБУ ҲУНАР (ПИСАРОНА)</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/naqsha.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=114">
                                                <h5>НАҚШАКАШӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/rusYazik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=115">
                                                <h5>РУССКИЙ ЯЗЫК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarixiDin.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=116">
                                                <h5>ТАЪРИХИ ДИН</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarihiUmumi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=117">
                                                <h5>ТАЪРИХИ УМУМӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tht.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=118">
                                                <h5>ТАЪРИХИ ХАЛҚИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tehnologiyaDuhtarona.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=119">
                                                <h5>ТЕХНОЛОГИЯ (ДУХТАРОНА) </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tI.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=120">
                                                <h5>ТЕХНОЛОГИЯИ ИТТИЛООТӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/fizika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=121">
                                                <h5>ФИЗИКА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/khimiya.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=122">
                                                <h5>ХИМИЯ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/huquq.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=9&id_book=123">
                                                <h5>АСОСҲОИ ДАВЛАТ ВА ҲУҚУҚИ ҶУМҲУРИИ ТОҶИКИСТОН </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5"
                         id="sinfi-10" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/adabiyotiTojik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=124">
                                                <h5>АДАБИЁТИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/algebra.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=125">
                                                <h5>АЛГЕБРА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/asoshoiIntixibiKasb.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=126">
                                                <h5>АСОСҲОИ ИНТИХОБИ КАСБ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/biology.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=127">
                                                <h5>БИОЛОГИЯ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/geography.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=128">
                                                <h5>ГЕОГРАФИЯ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/geometry.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=129">
                                                <h5>ГЕОМЕТРИЯ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zFransavi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=130">
                                                <h5>ЗАБОНИ ФРАНСАВӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zArabi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=131">
                                                <h5>ЗАБОНИ АРАБӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zNemisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=132">
                                                <h5>ЗАБОНИ НЕМИСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zaboni_modari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=133">
                                                <h5>ЗАБОНИ ТОҶИКӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/marifatiOiladori.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=134">
                                                <h5>МАЪРИФАТИ ОИЛАДОРӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/harbi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=135">
                                                <h5>ОМОДАГИИ ИБТИДОИИ ҲАРБӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/rusYazik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=136">
                                                <h5>РУССКИЙ ЯЗЫК  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarbyaiLismoni.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=137">
                                                <h5>ТАРБИЯИ ҶИСМОНӢ  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarihiUmumi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=138">
                                                <h5>ТАЪРИХИ УМУМӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tht.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=139">
                                                <h5>ТАЪРИХИ ХАЛҚИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tehnologiyaPisarona.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=140">
                                                <h5>ТЕХНОЛОГИЯ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tI.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=141">
                                                <h5>ТЕХНОЛОГИЯИ ИТТИЛООТӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/fizika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=142">
                                                <h5>ФИЗИКА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/khimiya.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=143">
                                                <h5>ХИМИЯ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/huquq.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=10&id_book=144">
                                                <h5>ҲУҚУҚИ ИНСОН</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5"
                         id="sinfi-11" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zAnglisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=145">
                                                <h5>ЗАБОНИ АНГЛИСӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center ">
                                        <div class="items-image">
                                            <img src="/front/images/subject/adabiyotiTojik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=146">
                                                <h5>АДАБИЁТИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/algebra.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=147">
                                                <h5>АЛГЕБРА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/iqtisodiyot.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=148">
                                                <h5>АСОСҲОИ ИҚТИСОИЁТ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/biology.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=149">
                                                <h5>БИОЛОГИЯИ УМУМӢ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/geography.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=150">
                                                <h5>ГЕОГРАФИЯ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/geometry.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=151">
                                                <h5>ГЕОМЕТРИЯ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zArabi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=152">
                                                <h5>ЗАБОНИ АРАБӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zNemisi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=153">
                                                <h5>ЗАБОНИ НЕМИСӢ </h5>
                                                <span>4 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zFransavi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=154">
                                                <h5>ЗАБОНИ ФРАНСАВӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/zaboni_modari.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=155">
                                                <h5>ЗАБОНИ ТОҶИКӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/asoshoiIntixibiKasb.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=156">
                                                <h5>АСОСҲОИ ИНТИХОБИ КАСБ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/nujum.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=157">
                                                <h5>НУҶУМ</h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/harbi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=158">
                                                <h5>ОМОДАГИИ ИБТИДОИИ ҲАРБӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/rusYazik.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=159">
                                                <h5>РУССКИЙ ЯЗЫК  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarbyaiLismoni.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=160">
                                                <h5>ТАРБИЯИ ҶИСМОНӢ  </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tarihiUmumi.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=161">
                                                <h5>ТАЪРИХИ УМУМӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tht.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=162">
                                                <h5>ТАЪРИХИ ХАЛҚИ ТОҶИК </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/tI.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=163">
                                                <h5>ТЕХНОЛОГИЯИ ИТТИЛООТӢ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/fizika.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=164">
                                                <h5>ФИЗИКА </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/khimiya.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=165">
                                                <h5>ХИМИЯ </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-items text-center mt-30">
                                        <div class="items-image">
                                            <img src="/front/images/subject/huquq.jpg" width="372px"
                                                 height="145px" alt="Category">
                                        </div>
                                        <div class="items-cont">
                                            <a href="theme.php?id_class=11&id_book=166">
                                                <h5>ҲУҚУҚИ ИНСОН </h5>
                                                <span>0 мавзӯъҳо</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single items -->
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white   p-5"
                         id="sinfi-12" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="category-2-items">
                            <div class="row">
                                <p class="alert alert-danger ">Дар зергурӯҳи зерин мавод ёфт нашуд!</p>                                </div>
                            <!-- row -->
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<!--====== FAQ PART ENDS ======-->
 @endsection


@section('script')

@endsection
