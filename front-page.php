<!-- automattically loads on front page -->
<?php get_header(); ?>
<!-- <div style="height:60px"> </div> -->

    <!-- hero-video -->
    <div class="hero-video">
        <!-- <video autoplay muted loop src="http://p2.local/wp-content/uploads/hero_video.mov"></video> -->
        <video  id="videoPlayer">
    </div>

    <!-- news -->
    <section class="news">
        <figure class="quote">
            <blockquote>This is where a quote from Tagespiegel should be placed, like something that sounds nice and complimentry.</blockquote>
            <figcaption>
                &mdash; Tagespiegel
            </figcaption>
        </figure>
    </section> 

     <!-- steps -->
     <section class="steps">
         <h3>How it works</h3>
        <div class="container">
            <div class="stepwizard col-md-offset-3">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <p>Step</p>
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    </div>
                    <div class="stepwizard-step">
                        <p>Step</p>
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    </div>
                    <div class="stepwizard-step">
                        <p>Step</p>
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    </div>
                    <div class="stepwizard-step">
                        <p>Step</p>
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    </div>
                    <div class="stepwizard-step">
                        <p>Step</p>
                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                    </div>
                </div>
            </div>


            <!-- form -->
            <form role="form" action="" method="post">
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-6 col-md-offset-1">
                        <div class="col-md-12">
                        <h3> Choose a Date </h3>
                            this is where the detail description of each step should go
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-6 col-md-offset-2">
                        <div class="col-md-12">
                        <h3> Select a Bike </h3>
                            this is where the detail description of each step should go
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-6 col-md-offset-3">
                        <div class="col-md-12">
                        <h3> Select Add-Ons </h3>
                            this is where the detail description of each step should go
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-4">
                    <div class="col-xs-6 col-md-offset-4">
                        <div class="col-md-12">
                        <h3> Complete Payment </h3>
                            this is where the detail description of each step should go
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-5">
                    <div class="col-xs-6 col-md-offset-5">
                        <div class="col-md-12">
                        <h3> Pick up your Order </h3>
                            this is where the detail description of each step should go
                        </div>
                    </div>
                </div>
            </form>
  

          <div>
    </section> 

    <!-- product -->
    <section class="product-intro">
     
       <!-- <div class="image camping-image"></div> -->
       <div class="image brand-image2"></div>
       About Us

       <div class="image brand-image1"></div>
      
       <div class="image brand-image3"></div>

       <div class="image bike-image"></div>
    </section> 
    
    


<?php get_footer(); ?>



<!-- <?php get_template_part('includes/section','header-bg-image');?> -->

    <!-- <div class="section-1">
    <?php get_template_part('includes/section','content');?>
    </div> -->

<style>
.news {
    width: 90vw;
    margin: 0 auto;
    font-size: 20px;
    text-align: center;
}
blockquote::before {
    content: open-quote;
    font-size: 35px;
}
blockquote::after {
    content: close-quote;
    font-size: 35px;
}
.quote {
    margin: 1em;
  font: 1.2rem/1.4;
   /* //Georgia, serif; */
  margin: 0;
  background: #eee;
  padding: 10px;
  border-radius: 1em;
}
.quote figcaption,
.quote blockquote {
  margin: 5px;
}
.quote figcaption {
    /* float:right; */
}
.cover-text input {
    border-radius: 25px;
    padding: 10px 20px
}


/* steps */
.steps {
    text-align: center;
}
body {
    margin-top:40px;
}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    background: white;
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
.stepwizard {
    margin: 0 auto;
}
.stepwizard-step {
    width: 150px;
}
.col-xs-6 {
    margin: 0 auto;
}
.stepwizard-row:before {
    top: 50px;
}
.btn-primary {
    background: var(--main-green-color) !important;
    border-color: var(--main-light-green-color) !important;
}
p {
    margin-bottom: 2px;
}

</style>


<script>
$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn'),
  		  allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });
  
  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepWizard.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});


//video
let videoSource = new Array();
videoSource[0] = 'http://p2.local/wp-content/uploads/hero_video.mov';
videoSource[1] = 'http://p2.local/wp-content/uploads/hero_video2.mov';
videoSource[2] = 'http://p2.local/wp-content/uploads/hero_video3.mov';
// videoSource[3] = 'http://p2.local/wp-content/uploads/hero_video.mov';
let i = 0; // global
const videoCount = videoSource.length;
const element = document.getElementById("videoPlayer");

function videoPlay(videoNum) {
    element.setAttribute("src", videoSource[videoNum]);
    element.autoplay = true;
    element.load();
    element.play();
}
document.getElementById('videoPlayer').addEventListener('ended', myHandler, false);

videoPlay(0); // play the video

function myHandler() {
    i++;
    if (i == videoCount) {
        i = 0;
        videoPlay(i);
    } else {
        videoPlay(i);
    }
}
</script>