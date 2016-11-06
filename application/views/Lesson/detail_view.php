<!doctype html>
<head>
  <title>Typing Tutor - Practice</title>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">  
  <link rel="stylesheet" href="<?php echo base_url('css/theme.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/typing.css'); ?>">
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script>var base_url = '<?php echo base_url() ?>';</script>   
  <script src="<?php echo base_url('js/fb.js');?>"></script>
  <script src="<?php echo base_url('js/results.js'); ?>"></script>
  <script src="<?php echo base_url('js/typing.js'); ?>"></script>
</head>
<body>
  <script>
    var userId;
    var titleName = '<?php echo $lesson['name']; ?>';
    var titleId = '<?php echo $lesson['id']; ?>';
    var typeName = "lesson";
  </script>

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
          <li class="active">
            <a href="<?php echo base_url('practice'); ?>">Practice</a>
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
    <h1 class="text-center">Typing practice</h1>
    <p class="text-center">Start typing when you're ready.</p>
    <div class="row">
      <div class="col-xs-6 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-body text-center">
              Time: <span id="timer-minutes">00</span>:<span id="timer-seconds">00</span>
            </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4">
        <div class="panel panel-warning">
          <div class="panel-body text-center">
            CPM: <span id="cpm">0</span>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4">
        <div class="panel panel-danger">
          <div class="panel-body text-center">
            Accuracy: <span id="accuracy">0</span>%
          </div>
        </div>
      </div>
    </div>
   <div id="typing-panel" class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 panel panel-success pre-scrollable">
      <div class="panel-body">
        <textarea id="space-trick" autofocus="" style="opacity: 0; display:none"></textarea>
        <samp id="typing-field"><span class="text-current" id="0"><?php echo $text[0]; ?></span><?php for ($i = 1; $i < 5; $i++){ echo "<span id ='". $i ."'>" . $text[$i] . "</span>"; }?></samp>
      </div>
    </div>
    
  </main>
  
  
  <div class="container-fluid">
    <div class="text-center"><div class="btn btn-default" style="margin-bottom: 2vh;" checked id="keyboard-toggle">Toggle keyboard</div></div>
    <div id="hint">
      <div id="left-hand" class="hidden-xs hidden-sm col-md-2"></div>
      <div id="keyboard" class="col-sm-12 col-md-8">
        <ul id="number-row">
          <li id="key-`" class="key key-normal key-pinky key-left">`<sup> ~</sup></li>
          <li id="key-1" class="key key-normal key-pinky key-left">1<sup> !</sup></li>
          <li id="key-2" class="key key-normal key-ring key-left">2<sup> @</sup></li>
          <li id="key-3" class="key key-normal key-middle key-left">3<sup> #</sup></li>
          <li id="key-4" class="key key-normal key-index key-left">4<sup> $</sup></li>
          <li id="key-5" class="key key-normal key-index key-left">5<sup> %</sup></li>
          <li id="key-6" class="key key-normal key-index key-right">6<sup> ^</sup></li>
          <li id="key-7" class="key key-normal key-index key-right">7<sup> &</sup></li>
          <li id="key-8" class="key key-normal key-middle key-right">8<sup> *</sup></li>
          <li id="key-9" class="key key-normal key-ring key-right">9<sup> (</sup></li>
          <li id="key-0" class="key key-normal key-pinky key-right">0<sup> )</sup></li>
          <li id="key--" class="key key-normal key-pinky key-right">-<sup> _</sup></li>
          <li id="key-=" class="key key-normal key-pinky key-right">=<sup> +</sup></li>
          <li id="key-backspace" class="key">bksp</li>
        </ul>
        <ul id="top-row">
          <li id="key-tab" class="key">tab</li>
          <li id="key-q" class="key key-normal key-pinky key-left">q</li>
          <li id="key-w" class="key key-normal key-ring key-left">w</li>
          <li id="key-e" class="key key-normal key-middle key-left">e</li>
          <li id="key-r" class="key key-normal key-index key-left">r</li>
          <li id="key-t" class="key key-normal key-index key-left">t</li>
          <li id="key-y" class="key key-normal key-index key-left">y</li>
          <li id="key-u" class="key key-normal key-index key-right">u</li>
          <li id="key-i" class="key key-normal key-middle key-right">i</li>
          <li id="key-o" class="key key-normal key-ring key-right">o</li>
          <li id="key-p" class="key key-normal key-pinky key-right">p</li>
          <li id="key-[" class="key key-normal key-pinky key-right">[<sup> {</sup></li>
          <li id="key-]" class="key key-normal key-pinky key-right">]<sup> }</sup></li>
          <li id="key-backslash" class="key key-pinky key-right">\<sup> |</sup></li>
        </ul>
        <ul id="home-row">
          <li id="key-capslock" class="key">caps</li>
          <li id="key-a" class="key key-normal key-pinky key-left">a</li>
          <li id="key-s" class="key key-normal key-ring key-left">s</li>
          <li id="key-d" class="key key-normal key-middle key-left">d</li>
          <li id="key-f" class="key key-normal key-index key-left">f</li>
          <li id="key-g" class="key key-normal key-index key-left">g</li>
          <li id="key-h" class="key key-normal key-index key-right">h</li>
          <li id="key-j" class="key key-normal key-index key-right">j</li>
          <li id="key-k" class="key key-normal key-middle key-right">k</li>
          <li id="key-l" class="key key-normal key-ring key-right">l</li>
          <li id="key-semicolon" class="key key-normal key-pinky key-right">;<sup> :</sup></li>
          <li id="key-'" class="key key-normal key-pinky key-right">'<sup> "</sup></li>
          <li id="key-enter" class="key">enter</li>
        </ul>
        <ul id="bottom-row">
          <li id="key-lshift" class="key key-shift">shift</li>
          <li id="key-z" class="key key-normal key-pinky key-left">z</li>
          <li id="key-x" class="key key-normal key-ring key-left">x</li>
          <li id="key-c" class="key key-normal key-middle key-left">c</li>
          <li id="key-v" class="key key-normal key-index key-left">v</li>
          <li id="key-b" class="key key-normal key-index key-left">b</li>
          <li id="key-n" class="key key-normal key-index key-right">n</li>
          <li id="key-m" class="key key-normal key-index key-right">m</li>
          <li id="key-comma" class="key key-normal key-middle key-right">,<sup> &lt;</sup></li>
          <li id="key-period" class="key key-normal key-ring key-right">.<sup> &gt;</sup></li>
          <li id="key-/" class="key key-normal key-pinky key-right">/<sup> ?</sup></li>
          <li id="key-rshift" class="key key-shift">shift</li>
        </ul>
        <ul id="space">
          <li id="key-space" class="key">space</li>
        </ul>
      </div>
      <div id="right-hand" class="hidden-xs hidden-sm col-md-2"></div>
    </div>
  </div>

  <div class="modal fade" id="modal-success" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Congratulations!</h4>
        </div>
        <div class="modal-body">
          <p id="modal-message"></p>
        </div>
        <div class="modal-footer text-center">
          <a href="<?php echo base_url('lesson'); ?>" class="btn btn-danger">Back</a>
          <a href=""  class="btn btn-info">Practise again</a>
          <button type="button" class="btn btn-success btn-share">Share on Facebook</button>
        </div>
      </div>
    </div>
  </div>
  

</body>