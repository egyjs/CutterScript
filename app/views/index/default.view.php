    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class=" col-lg-8 col-lg-push-2">
                    <img class="img-responsive  logo" 
<?php if($this->user_login->is_logged_in() ==""){ ?>src="img/profile.png"
<?php }else { 
        echo 'src="'.$this->user_login->get_gravatar($this->Urow['u_email']).'"';
     }  ?> alt="shortcut urls">
                    <div class="intro-text">
                        <?php if(!isset($this->msg)){ ?>
                        <h1><span class="name">Shorten the direct link, or Get paid to share your links on the Internet! <i class="fa fa-money" aria-hidden="true"></i></span></h1>
                        <?php }  else { 
                            
                            echo $this->msg ;
                            
                        } ?>
                        <hr class="star-light">
                        <div class="skills">
                        <form method="POST"  id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input type="url" class="form-control" placeholder="http://" name="link" id="copyText"  
                                    <?php echo 'value="'.@$_SESSION['urlresult'].'"'; ?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit"  name="suburl" class="btn btn-success btn-block">Get short URL</button>
                            </div>
                            <!--div class="form-group col-xs-6">
                                <button type="submit" class="btn btn-success btn-block">Delete last result</button>
                            </div-->
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Us</h2>
                    <hr class="cut-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                <h3>About Cutter</h3>
                    <p>Cutter is a free URL Shortener system created by <a class="btn btn-success" href="//fb.com/el3zahaby" >Abdulrahman El-zahaby</a>.
                        Ease of use, fun-profit money, shorten your links without discomfort.</p>
                </div>
                <div class="col-lg-4">
                    <h3>About APIs</h3>
                    <p>
                    If you are a blogger and want to profit from the shortcut links,, so you have to work with us .. Shorten your links now without reference to the site, all you have is written in the Code are shortcut any link you want to automatically :)
                    </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="signup" class="btn btn-lg btn-outline">
                        <i class="fa fa-angle-right"></i> Get started
                    </a>
                </div>
            </div>
        </div>
    </section>
