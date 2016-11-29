<!DOCTYPE html>
<head>
  <title>Typing Tutor</title>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">  
  <link rel="stylesheet" href="<?php echo base_url('css/theme.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/index.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/typing.css'); ?>">
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="<sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l></sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l>2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script>var base_url = '<?php echo base_url() ?>';</script>   
  <script src="<?php echo base_url('js/fb.js');?>"></script>
</head>
<body>
  
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('home'); ?>">TypingTutor</a>
      </div>
    
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url('home'); ?>">Home</a></li>
          <li>
            <a href="<?php echo base_url('lesson'); ?>">Lessons</a>
          </li>
          <li>
            <a href="<?php echo base_url('practice'); ?>">Practice</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Game <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('bubbles'); ?>">Bubbles</a></li>
                <li><a href="<?php echo base_url('random'); ?>">Random</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo base_url('about'); ?>">About</a>
          </li>
        </ul>
        <form class="nav navbar-form navbar-right">
          <div class="btn btn-primary btn-fb-login">Sign in</div>
        </form>
        <ul class="nav navbar-nav navbar-right" id="nav-profile">
          <a id="picture-logged-in" href="#"><img class="fb-picture"/></a>
          <li>
            <a id="msg-logged-in" href="#"></a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
  
  
  
  <main>
    <section id="section1" class="container-fluid">
      <div class="feature-container col-sm-6 col-lg-4 col-lg-offset-2">
        <div class="feature">
          <h1>TypingTutor.com teaches you how to touch type.</h1>
          <p>You'll be able to type fast and fluidly without looking at the keyboard.</p>
        </div>
      </div>
      <figure class="col-sm-6 col-lg-4"></figure>
    </section>

    <section id="section2" class="container-fluid">
      <figure class="col-sm-6 col-lg-4 col-lg-offset-2"></figure>
      <div class="feature-container col-sm-6 col-lg-4">
        <div class="feature">
          <h1>Steadily progress with our comprehensive lesson plan.</h1>
          <p>Learn everything from the home row to numbers and special character keys. You can also practise your typing skills with real-life texts.</p>
        </div>
      </div>
    </section>

    <section id="section3" class="container-fluid">
      <div class="feature-container col-sm-6 col-lg-4 col-lg-offset-2">
        <div class="feature">
          <h1>Watch yourself advancing everyday.</h1>
          <p>Sign in to save your progress and share it with your friends on Facebook. Learning to type should be a fun and rewarding experience.</p>
        </div>
      </div>
      <figure class="col-sm-6 col-lg-4"></figure>
    </section>

    <section id="section4" class="container-fluid">
      <figure class="col-sm-6 col-lg-4 col-lg-offset-2"></figure>
      <div class="feature-container col-sm-6 col-lg-4">
        <div class="feature">
          <h1>And better yet, it's free.</h1>
          <p>We believe touch typing is a must-have skill for everybody in this day and age. So, what are you waiting for?</p>
          <button class="btn btn-default btn-fb-login">Sign in with Facebook</button>
          <a class="btn btn-default" href="<?php echo base_url("practice/paragraph/100"); ?>">Try a demo</a>
        </div>
      </div>
    </section>
  </main>
</body>