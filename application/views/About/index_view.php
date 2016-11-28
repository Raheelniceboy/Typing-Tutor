<!doctype html>
<head>
  <title>Typing Tutor - About</title>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">  
  <link rel="stylesheet" href="<?php echo base_url('css/theme.css'); ?>">
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
          <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
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
              <li><a href="<?php echo base_url('random'); ?>">Random</a></li>
            </ul>
          </li>
          <li class="active">
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
    <section>
      <h1>About this website</h1>
      <p>This is a project for the fall 2016 Software Engineering class at University of Engineering and Technology, Vietnam. 
      The website is made with HTML5, jQuery, CodeIgniter, and most importantly, love and passion. Don't forget to check out the source code at 
      <a href="https://github.com/ntgiang71096/Typing-Tutor">our GitHub repository</a>.</p>
    </section>
    <section>
      <h1>About us</h1>
      <p>We are a team of five computer science majors at UET.</p>
      <h3>Nguyễn Trường Giang</h3>
      <p>As the leader of the team, Giang's contribution to the project is massive - he has done most of the back-end work. In addition to being 
      a full-stack web developer, he is interested in Japanese culture, especially Japanese AntiVirus <i>*wink wink*</i>.</p>
      <h3>Phạm Nguyễn Hoàng</h3>
      <p>Hoàng is responsible for most of the project's Javascript code, as well as some of the website's content.</p>
      <h3>Lương Ngọc Huyền</h3>
      <p>Huyền has created content for the website and written documentation for the project.</p>
      <h3>Nguyễn Văn Quang</h3>
      <p>The oldest member of the team, Quang's contributions include the <i>Basic lessons</i> page's layout, as well as the project's documentation.</p>
      <h3>Nguyễn Văn Tiến</h3>
      <p>A hard-working K59CA student and the team's secretary, Tiến has been diligently documenting every meeting. In addition, he helps out in various 
      other parts of the project, including design and documentation, finding resources.</p>
    </section>
    
  </main>
</body>