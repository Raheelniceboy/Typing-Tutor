<!doctype html>
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('bubbles'); ?>">Bubbles</a></li>
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
    <div class="well row">
      <div class="col-md-6">
        <div><img class="fb-picture img-responsive img-thumbnail center-block"/></div>
        <div class="text-center">
          <h3 id="name"></h3> 
          <a id="btn-logout" class="btn btn-danger">Sign out</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Your stats</h3>
          </div>
          <table class="table">
            <tbody>
              <tr><td>Words typed</td> <td><span id="words-typed">0</span></td></tr>
              <tr><td>Average CPM</td>  <td><span id="average-cpm">0</span></td></tr>
              <tr><td>Accuracy</td> <td><span id="accuracy">0</span>%</td></tr>
            </tbody>
          </table>
      </div>
      </div>
    </div>
      
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Activity log</h3>
    </div>
    <table class="table">
      <tbody>
        <tr>
          <td>You completed <a id="exercise-name" href="<?php echo site_url("lesson/detail/10") ?>">Q and P</a> in <span id="exercise-time">2:43</span> with a CPM rate of <span id="exercise-cpm">100</span> and <span id="exercise-activity">100</span>% accuracy.</td>
          <td><span id="log-time">09:10, 11 Dec 2013</span>
        </tr>
      </tbody>
    </table>
  </main>
  
</body>