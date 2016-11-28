<!doctype html>
<head>
  <title>Typing Tutor - Lessons</title>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">  
  <link rel="stylesheet" href="<?php echo base_url('css/theme.css'); ?>">
  <link rel="stylesheet" href="css/lessons.css">
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
        <a class="navbar-brand" href="<?php echo base_url('home'); ?>">TypingTutor</a>
      </div>
    
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
          <li class="active">
            <a href="<?php echo base_url('lesson'); ?>">Lessons</a>
          </li>
          <li>
            <a href="<?php echo base_url('Practice'); ?>">Practice</a>
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
    <section id="home-row" class="row">
      <h2>Home Row</h2>
      <ul class="text-center">
        <li class="lesson" id="home-fj">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/1") ?>">fj</a></h3>
          <p class="lesson-detail">F and J</p>
        </li> 
        <li class="lesson" id="home-dk">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/2") ?>">dk</a></h3>
          <p class="lesson-detail">D and K</p>
        </li> 
        <li class="lesson" id="home-sl">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/3") ?>">sl</a></h3>
          <p class="lesson-detail">S and L</p>
        </li> 
        <li class="lesson" id="home-a">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/4") ?>">a;</a></h3>
          <p class="lesson-detail">A and ;</p>
        </li> 
        <li class="lesson" id="home-gh">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/5") ?>">gh</a></h3>
          <p class="lesson-detail">G and H</p>
        </li> 
        <li class="lesson" id="home-HR">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/6") ?>">HR</a></h3>
          <p class="lesson-detail">Home Row Keys</p>
        </li> 
      </ul>
    </section>

    <section id="top-row" class="row">
      <h2>Top Row</h2>
      <ul class="text-center">
        <li class="lesson" id="top-ru">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/7") ?>">ru</a></h3>
          <p class="lesson-detail">R and U</p>
        </li> 
        <li class="lesson" id="top-ei">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/8") ?>">ei</a></h3>
          <p class="lesson-detail">E and I</p>
        </li> 
        <li class="lesson" id="top-wo">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/9") ?>">wo</a></h3>
          <p class="lesson-detail">W and O</p>
        </li> 
        <li class="lesson" id="top-qp">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/10") ?>">qp</a></h3>
          <p class="lesson-detail">Q and P</p>
        </li> 
        <li class="lesson" id="top-ty">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/11") ?>">ty</a></h3>
          <p class="lesson-detail">T and Y</p>
        </li> 
        <li class="lesson" id="top-TR">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/12") ?>">TR</a></h3>
          <p class="lesson-detail">Top Row Keys</p>
        </li> 
      </ul>
    </section>

    <section id="bottom-row" class="row">
      <h2>Bottom Row</h2>
      <ul class="text-center">
        <li class="lesson" id="bottom-vm">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/13") ?>">vm</a></h3>
          <p class="lesson-detail">V and M</p>
        </li> 
        <li class="lesson" id="bottom-c">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/14") ?>">c,</a></h3>
          <p class="lesson-detail">C and ,</p>
        </li> 
        <li class="lesson" id="bottom-x">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/15") ?>">x.</a></h3>
          <p class="lesson-detail">X and .</p>
        </li> 
        <li class="lesson" id="bottom-z">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/16") ?>">z/</a></h3>
          <p class="lesson-detail">Z and /</p>
        </li> 
        <li class="lesson" id="bottom-bn">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/17") ?>">bn</a></h3>
          <p class="lesson-detail">B and N</p>
        </li> 
        <li class="lesson" id="bottom-BR">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/18") ?>">BR</a></h3>
          <p class="lesson-detail">Bottom Row Keys</p>
        </li> 
      </ul>
    </section>

    <section id="number-row" class="row">
      <h2>Number Row</h2>
      <ul class="text-center">
        <li class="lesson" id="number-47">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/19") ?>">47</a></h3>
          <p class="lesson-detail">4 and 7</p>
        </li> 
        <li class="lesson" id="number-38">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/20") ?>">38</a></h3>
          <p class="lesson-detail">3 and 8</p>
        </li> 
        <li class="lesson" id="number-29">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/21") ?>">29</a></h3>
          <p class="lesson-detail">2 and 9</p>
        </li> 
        <li class="lesson" id="number-10">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/22") ?>">10</a></h3>
          <p class="lesson-detail">1 and 0</p>
        </li> 
        <li class="lesson" id="number-56">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/23") ?>">56</a></h3>
          <p class="lesson-detail">5 and 6</p>
        </li> 
        <li class="lesson" id="number-NR">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/24") ?>">NR</a></h3>
          <p class="lesson-detail">Number Row Keys</p>
        </li> 
      </ul>
    </section>

    <section id="shift" class="row">
      <h2>Shift Key</h2>
      <ul class="text-center">
        <li class="lesson" id="shift-home">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/25") ?>">H+</a></h3>
          <p class="lesson-detail">Home Row</p>
        </li> 
        <li class="lesson" id="shift-top">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/26") ?>">T+</a></h3>
          <p class="lesson-detail">Top Row</p>
        </li> 
        <li class="lesson" id="shift-bottom">
          <h3 class="lesson-summary"><a href="<?php echo site_url("lesson/detail/27") ?>">B+</a></h3>
          <p class="lesson-detail">Bottom Row</p>
        </li> 
      </ul>
    </section>

    <section id="other" class="row">
      <h2>Other</h2>
      <ul class="text-center">
        <li class="lesson">
          <h3 class="lesson-summary" id="punctuations"><a href="<?php echo site_url("lesson/detail/28") ?>">?!</a></h3>
          <p class="lesson-detail">Punctuations</p>
        </li> 
      </ul>
    </section>
  </main>

</body>