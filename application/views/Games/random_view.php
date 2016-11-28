<!doctype html>
<head>
  <title>Typing Tutor - Bubbles</title>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">  
  <link rel="stylesheet" href="<?php echo base_url('css/theme.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/random.css'); ?>">
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="<sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l></sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l>2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script>var base_url = '<?php echo base_url() ?>';</script>   
  <script src="<?php echo base_url('js/fb.js');?>"></script>
  <script src="<?php echo base_url('js/random.js');?>"></script>  
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
          <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
          <li>
            <a href="<?php echo base_url('lesson'); ?>">Lessons</a>
          </li>
          <li>
            <a href="<?php echo base_url('practice'); ?>">Practice</a>
          </li>
          <li class="dropdown active">
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

  
  <div class="modal fade" id="modal-intro">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">How to play</h4>
        </div>
        <div class="modal-body">
          <p>A random string of characters will appear on the page. Your task is to type that string into the box and press Enter before the time runs out.</p>
          <p>If you submit the wrong string or the time is up, you lose the game.</p>
          <p>It'll get harder and harder, so be prepared!</p>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Top players</h3>
            </div>
            <table class="table">
              <tbody>
                <tr><td>ajflkjad</td> <td>34</td></tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <a href="<?php echo base_url(); ?>" class="btn btn-danger">Back</a>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Start</button>
        </div>
      </div>
    </div>
  </div>
  
  

  <main class="container text-center">
    <p>Press any key when you're ready!</p>
    <h3>Level <span id="level">1</span></h3>
    <h2 id="timer">0</h2>
    <h2 id="text-game"></h2>
    <form id="game-form" autocomplete="off" role="form">
      <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
        <input type="text" class="form-control" id="text-input"
        placeholder="Type your text here!">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>    
    </form>
  </main>

  <div class="modal fade" id="modal-over" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Game over</h4>
        </div>
        <div class="modal-body">
          <p id="modal-message"></p>
        </div>
        <div class="modal-footer text-center">
          <a href="<?php echo base_url(); ?>" class="btn btn-danger">Back</a>
          <a href="<?php echo base_url('random'); ?>"  class="btn btn-info">Play again</a>
          <button type="button" class="btn btn-success btn-share">Share on Facebook</button>
        </div>
      </div>
    </div>
  </div>
</body>