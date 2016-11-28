<!doctype html>
<head>
  <title>Typing Tutor - Practice</title>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">  
  <link rel="stylesheet" href="<?php echo base_url('css/theme.css'); ?>">
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
        <a class="navbar-brand" href="<?php echo base_url('home') ?>">TypingTutor</a>
      </div>
    
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
          <li>
            <a href="<?php echo base_url('lesson') ?>">Lessons</a>
          </li>
          <li class="active">
            <a href="<?php echo base_url('practice'); ?>">Practice</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games <span class="caret"></span></a>
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

  <main class="container">
    
    <div class="jumbotron">
      <div class="container">
        <h1>Practise typing real-life text</h1>
        <p>Hundreds of paragraphs, all taken from English-language classics. Hone your skills while enjoying the beauty of literature.</p>
        <p>How long would you like your paragraph to be?</p>
        <p>
          <a class="btn btn-success" href="<?php echo base_url("practice/paragraph/100"); ?>">100 words</a> <a class="btn btn-warning" href="<?php echo base_url("practice/paragraph/150"); ?>">150 words</a> <a class="btn btn-danger" href="<?php echo base_url("practice/paragraph/200"); ?>">200 words</a>
        </p>
      </div>
    </div>
    
  </main>
</body>