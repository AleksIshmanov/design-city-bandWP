<?php
/**
 * Template name: Главная страница
 */
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="d-lg-none d-xl-none d-md-none w-100" style="height: 76px; background-color: #181e2d">
            </div>

            <div id="desktop" style="background-image: url('<?= get_template_directory_uri()?>/assets/images/main-bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                <div class="mask flex-center">
                    <!-- Content -->
                    <div class="container">

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-sm-12 col-12 white-text text-center">
                                <div class="row text-center justify-content-center title">
                                    <div class="col-lg-12 col-sm-12 wow fadeInUpBig slow">
                                        <p id="Free-classifieds-usi-main">C<span>i</span>TY BAND</p>
                                    </div>
                                </div>

                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <div class="row py-5 d-none "></div>
                    </div>
                    <!-- Content -->

                    <!-- Welcome -->
                </div>
            </div>


            <div id="mobile" style="max-width: 100vw;">
                <img width="100%" src="<?= get_template_directory_uri()?>/assets/images/main-bg.jpg" alt="">
                <p class="text-center wow fadeInUp slow" style="position: absolute; left:0; right:0; margin-left: auto; margin-right: auto; margin-top: -20%; margin-bottom: 35%" id="Free-classifieds-usi-main">C<span>i</span>TY BAND</p>
            </div>


            <section class="sect-one">
                <div class="container py-5">
                    <div class="row flex-center justify-content-center h-auto">
                        <div class="col-lg-6 col-sm-4 col-md-6 text-center">
                            <p class="When-the-morning-daw wow fadeInLeft">Кавер-группа<br> City Band</p>
                            <p class="Far-far-away-behind wow fadeInLeft" data-wow-delay="1s">Кавер-группа City Band — это качественная живая музыка, живой<br> звук и многолетний опыт выступления на различных концертных<br> площадках. Живая музыка на праздник, любимые всеми <br>танцевальные мелодии и хиты. Мы создаём атмосферу радости и веселья.<br><br>

                                Большой репертуар - более трёхсот популярных песен. <br>
                                Каждое выступление подготавливается индивидуально и всегда <br>проходит на самом высоком уровне.</p>
                            <button type="button" class="btn wow fadeInLeft coolis Register-new-account overflow-hidden" data-wow-delay="1.5s"><span>УЗНАТЬ ПОДРОБНЕЕ</span></button>
                        </div>
                        <div class="col-lg-6 col-sm-4 col-md-6 text-center blue-photo">
                            <img class="Photo wow fadeInRight" src="<?= get_template_directory_uri()?>/assets/images/Photo.png">
                        </div>
                    </div>

                </div>

            </section>





            <div class="view Group-6 main-bg-img-fixed" id="index-bg-img-full" style="background-image: url('<?= get_template_directory_uri()?>/assets/images/Group%206.png');">

                <div class="group-1" style="background-image: url('<?= get_template_directory_uri()?>/assets/images/group-1.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

                    <div class="container px-0 max-width-auto">
                        <div class="row justify-content-center title-2">
                            <div class="col-lg-12 col-sm-12">
                                <p class="Authorization">Узнать даты и цены</p>
                            </div>
                        </div>
                        <div class="row justify-content-center title-3">
                            <div class="col-lg-3 col-sm-3 wow lightSpeedIn">
                                <p class="Phone-number">Ваше Имя</p>
                                <form>
                                    <div class="form-row">
                                        <div class="col-lg-12 col-sm-12">
                                            <input type="text" class="form-control" placeholder="Введите имя">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3 col-sm-3 wow lightSpeedIn" data-wow-delay="0.5s">
                                <p class="Phone-number">Ваш Телефон</p>
                                <form>
                                    <div class="form-row">
                                        <div class="col-lg-12 col-sm-12">
                                            <input type="text" class="form-control" placeholder="Введите номер телефона">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3 col-sm-3 wow lightSpeedIn" data-wow-delay="0.7s">
                                <p class="Phone-number">Ваши пожелания</p>
                                <form>
                                    <div class="form-row">
                                        <div class="col-lg-12 col-sm-12">
                                            <input type="text" class="form-control" placeholder="Коротко опишите пожелания">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3 col-sm-3 text-center d-flexu wow lightSpeedIn" data-wow-delay="1s">
                                <button type="button" class="btn btn-primary col-sm-12 coolis overflow-hidden"><span>ЗАКАЗАТЬ</span></button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <section class="sect-two">
                <div class="container p-0">
                    <div class="row text-center justify-content-center title-4">
                        <div class="col-lg-12 col-sm-12 p-0 two-title">
                            <p class="Features wow fadeIn" data-wow-duration="1s">Почему выбирают нас</p>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center title-5">
                        <div class="col-lg-3 col-sm-3 wow fadeIn" data-wow-delay="1s">
                            <img src="<?= get_template_directory_uri()?>/assets/images/Profile(2).png" alt="">
                            <p class="Personal-info">Более 500 популярных песен</p>
                            <p class="Far-far-away-behind-2">Любимые хиты Российской<br>
                                и Зарубежной эстрады</p>
                        </div>
                        <div class="col-lg-3 col-sm-3 wow fadeIn" data-wow-delay="1.5s">
                            <img src="<?= get_template_directory_uri()?>/assets/images/Profile(3).png" alt="">
                            <p class="Personal-info">15 лет на сцене</p>
                            <p class="Far-far-away-behind-2">Опыт выступлений<br>
                                на различных площадках России<br>
                                и Европы</p>
                        </div>
                        <div class="col-lg-3 col-sm-3 wow fadeIn" data-wow-delay="2s">
                            <img src="<?= get_template_directory_uri()?>/assets/images/Profile.png" alt="">
                            <p class="Personal-info">6 харизматичных музыкантов</p>
                            <p class="Far-far-away-behind-2">Уникальное сочетание таланта, профессионализма и красивого <br> голоса</p>
                        </div>
                        <div class="col-lg-3 col-sm-3 wow fadeIn" data-wow-delay="2.5s">
                            <img src="<?= get_template_directory_uri()?>/assets/images/Profile(1).png" alt="">
                            <p class="Personal-info">Индивидуальный подход</p>
                            <p class="Far-far-away-behind-2">Подбор композиций под<br>
                                Тематические мероприятия и<br>
                                любые задумки ведущего</p>

                        </div>
                    </div>
                </div>
            </section>



            <section class="sect-three">
                <div class="container">
                    <div class="row text-center justify-content-center title-6">
                        <div class="col-lg-12 col-sm-12 p-0 pb-4">
                            <p class="Look-up-in-the-sky">Видео выступления</p>
                        </div>
                    </div>
                    <div class="row text-center justify-content-center">
                        <div class="col-lg-1 col-md-1 d-none d-sm-block align-self-center text-center owl-loaded owl-controls">
                            <div class="owl-nav">
                                <img class="back-btn" src="<?= get_template_directory_uri()?>/assets/images/Arrow%20Basic.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-6 col-md-10 owl-carousel owl-video owl-theme">
                            <!--
                            <div class="image flex-center" style="background-image: url(images/Image.png);">
                                <div class="Background flex-center" style="background-image: url(images/Background-1.png);">
                                    <img src="<?= get_template_directory_uri()?>/assets/images/Icon.png" alt="">
                                </div>
                            </div>
        -->


                            <div class="">
                                <iframe width="100%" height="500" src="https://www.youtube.com/embed/qYT-JM-0OtU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>


                            <div class="">
                                <iframe width="100%" height="500" src="https://www.youtube.com/embed/ohdVg5_YKjM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div>
                                <iframe width="100%" height="500" src="https://www.youtube.com/embed/oWX6mMpkTVQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div>
                                <iframe width="100%" height="500" src="https://www.youtube.com/embed/oLM3Mlv0-rk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 d-none d-sm-block align-self-center text-center owl-loaded owl-controls">
                            <div class="owl-nav">
                                <img class="next-btn" src="<?= get_template_directory_uri()?>/assets/images/Arrow%20Basic.png" alt="" style="transform: rotate(180deg);">
                            </div>
                        </div>
                    </div>
                </div>
            </section>





            <section class="sect-four">
                <div class="container p-0 m-0 d-sm-inline">
                    <div class="row justify-content-center text-center four-phone" style="padding: 0;margin: 0;">
                        <div class="col-lg-6 col-sm-12 col-md-6 image-2">
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-6 text-center p-0">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-sm-8">
                                    <p class="Write-a-message">Заказать группу</p>
                                </div>
                            </div>


                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-sm-8 px-5 p-md-0">
                                    <form>

                                        <div class="form-group col-lg-12 col-sm-12 p-0">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Введите ваш email">
                                        </div>
                                        <div class="form-group col-lg-12 col-sm-12 p-0">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Введите имя">
                                        </div>

                                        <div class="form-group col-lg-12 col-sm-12 p-0">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                                        </div>

                                    </form>
                                </div>

                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-sm-8 text-center px-5 d-flex">
                                    <button type="button" class="btn btn-primary col-lg-12 four-btn coolis overflow-hidden"><span>ЗАКАЗАТЬ</span></button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>

            <script src="<?= get_template_directory_uri()?>/assets/js/WOW.js"></script>
            <script>

                //======================== Adaptive screen ===========================//
                if (document.documentElement.clientWidth < 767) {

                    document.getElementById('desktop').remove();

                    $('#Free-classifieds-usi-main').css({
                        'font-size': "4em",
                        'margin': '0'
                    });

                } else { // десктопная версия
                    new WOW().init();
                    document.getElementById('mobile').remove();
                }

                //======================Owl carousel=======================//

                var owlVideo = $(".owl-video");
                owlVideo.owlCarousel({
                    items: 1,
                    margin: 0,
                    loop: true,
                    nav: false,
                    dots: document.documentElement.clientWidth < 767 ? true : false,
                    smartSpeed: 1500,
                });

                $('.next-btn').click(function() { // Go to the next item
                    owlVideo.trigger('next.owl.carousel', [1500]);
                })

                $('.back-btn').click(function() { // Go to the previous item
                    owlVideo.trigger('prev.owl.carousel', [1500]);
                })

            </script>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
