<?php
    get_header();
?>
        <!--<section id="intro no">
            <div class="row">
                <div class="col-12">
                    <h1 class="nick-title" id="nick-title">Hi, I'm Nick, and this is my website!</h1>
                </div>
                <div class="col-12">
                    <h1 class="nick-title">This is 2 columns. now 3!</h1>
                </div>
            </div>
        </section>-->
        <section id="banner">
            <div class="container-fluid px-0 mx-0">
                <div class="row img-background mx-0">
                    <div  class="container fade-in banner-content font-white">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="slide-down-wrapper">
                                <div  class="banner-headline slide-down-content font-white">
                                    <h2 class="text-center">Nick Mendez</h2>
                                    <h3  class="text-center">Web Developer</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="memes">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 d-flex justify-content-center font-white">
                            <h3>My Memes</h3>
                        </div>
                        <div class="row">
                            <div class="img-wrapper col-12 col-sm-6 col-md-4 py-3">
                                <img src="<?php echo(get_template_directory_uri());?>/assets/img/Funny-Wedding-Meme-Old-People-At-Weddings-Always-Poke-Me-And-Say-You-Are-Next-Image.jpg" alt="nick's meme" />
                            </div>
                            <div class="img-wrapper col-12 col-sm-6 col-md-4 py-3">
                                <img src="<?php echo(get_template_directory_uri());?>/assets/img/50-percent-afro.jpg" alt="nick's meme" />
                            </div>
                            <div class="img-wrapper col-12 col-sm-6 col-md-4 py-3">
                                <img src="<?php echo(get_template_directory_uri());?>/assets/img/one-more-game.webp" alt="nick's meme" />
                            </div>
                            <div class="d-flex justify-content-center col-12">
                                <div class="img-wrapper col-sm-6 col-md-4 py-3">
                                    <img src="http://pandasareawesome06.com/wp-content/uploads/2019/03/dbfc6abdb06a16fb44182e535b99e37a.png" alt="roblox avatar" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="videos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 d-flex justify-content-center font-white">
                            <h3>My Videos</h3>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center video-wrapper py-5">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/G7RgN9ijwE4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 d-flex justify-content-center video-wrapper py-5">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/TRc85qoNo6w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
<?php
    get_footer();
?>
