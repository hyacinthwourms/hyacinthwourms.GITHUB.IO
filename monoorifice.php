<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MooreStarter!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>

<div id="bigContainer">


  <?php include 'templates/header.html';?>



  <div id="projectHeader">
    <h1>MonoOrfice™</h1>
    <h2>Let us give you a hand, giving a hand.</h2>
  </div>


  <div id="projectStart">

    <div id="projectVideo">
      <!-- <img src="images/0.png" alt="" style="object-fit:cover;"> -->
    </div>

    <div id="projectStartRight">

      <div id="projectStartName">
        <img src="images/test.jpg" alt="">
        <p><b>by CJ Moore</b><br>Montreal, QC</p>
      </div>

      <div id="projectStartFeatures">
        <h3>Features</h3>
        <p>
          <ul>
            <li><span>Simple, 30 minute outpatient fitting procedure</span></li>
            <li><span>Bundled with an at home cleaning kit</span></li>
            <li><span>24/7 Mono-Orifice™ customer service available, for both in home and in store appointments</span></li>
          </ul>
        </p>

      </div>

      <div id="projectStartLike">
        <!-- oooo wow javascript -->
        <h2>Like this project</h2>
      </div>

    </div>
  </div>


  <div id="projectNav">
    <!-- oooo wow more javascript -->
    <a href="#" class="2d switcher active">About</a>
    <a href="#" class="3d switcher">Comments</a>
  </div>

  <div id="projectContainer">



    <div id="projectAbout" class="plans 2d-plan active">
      <h3 class="titleTop">Title</h3>
      <p>
      The article draws on a set of in-depth
      conversational interviews with expert critical
      designers. Each has played a part in the
      development and theorization of the practice. The
      interviews were analyzed to identify salience in
      the participants’ perspectives on critical design.
      </p>
      <img src="images/mono-orifice.jpg" alt="">
      <p>From this analysis, satire, rationality, and narrative
      are identified as salient concepts in the operation
      of critical practices in design. They engage user
      audiences and establish the critical move through
      design.  </p>
      <h3 class="titleTop">Title</h3>
      <p>They also help differentiate between three
      types of critical practice. These types are defined in
      the article as associative, speculative, and critical
      design. </p>
      <img src="images/test.jpg" alt="">
      <p>They are structured into a taxonomic space
      by attending to the satiric devices used in each.
      This taxonomy provides theoretical apparatus to
      analyze and discuss critical practices in design.</p>
    </div>


    <div id="projectComments" class="plans 3d-plan">

      <div class="comment">
        <div class="commentProfile">
          <img src="images/test.jpg" class="borderRight" alt="">
          <p class="commentName borderRight">Hyacinth</p>
          <p class="commentDate borderRight">June 21st, 2018</p>
        </div>
        <div class="commentBody">
          <p>Moreover, fields such as participatory design, socially responsive design, and codesign have emerged in parallel to critical practice. These modes reflect upon the relationship between design and the communities that are being designed for, and, or with.
          </p>
        </div>
      </div>

      <div class="comment">
        <div class="commentProfile">
          <img src="images/test.jpg" class="borderRight" alt="">
          <p class="commentName borderRight">Hyacinth</p>
          <p class="commentDate borderRight">June 21st, 2018</p>
        </div>
        <div class="commentBody">
          <p>A lack of in-depth analysis might cause it to disappear, particularly in light of the growing prominence and interest in other design practices that strive to extend the social agency and affect change through product design approaches in response to complex social problems.
          </p>
        </div>
      </div>

    </div>


    <div id="testimonials">
      <div id="testimonialsHeader">
        <h3>Testimonials</h3>
        <!-- stars? -->
      </div>

      <div class="testimonialQuote">
        <h2>"I love this project. It's amazing and wonderful."</h2>
        <div class="testimonialName">
          <img src="images/test.jpg" alt="">
          <p><b>-Hyacinth Wourms, Relevant Person</b></p>
        </div>
      </div>

      <div class="testimonialQuote">
        <h2>"I love this project."</h2>
        <div class="testimonialName">
          <img src="images/test.jpg" alt="">
          <p><b>-Hyacinth Wourms, Relevant Person</b></p>
        </div>
      </div>

      <div class="testimonialQuote">
        <h2>"I love this project. It's amazing and wonderful."</h2>
        <div class="testimonialName">
          <img src="images/test.jpg" alt="">
          <p><b>-Hyacinth Wourms, Relevant Person</b></p>
        </div>
      </div>

    </div>

  </div>

  <div id="interested">
    <h1>You may also be interested in</h1>

    <div id="interestedContainer">


      <div class="interestedProject">
        <a href="#"><img src="images/test.jpg" alt=""></a>
        <a href="#"><h2>Project Title</h2></a>
    </div>

      <div class="interestedProject borderRight borderLeft">
        <a href="#"><img src="images/test.jpg" alt=""></a>
        <a href="#"><h2>Project Title</h2></a>
    </div>


      <div class="interestedProject">
        <a href="#"><img src="images/test.jpg" alt=""></a>
        <a href="#"><h2>Project Title</h2></a>
    </div>

    </div>

  </div>


  <?php include 'templates/footer.html';?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script  src="js/toggle.js"></script>


</div>

</body>
</html>
