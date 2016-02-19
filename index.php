<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
  <meta charset="utf-8" />
  <jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css" />  
</head>

<body>
  <!--[if lt IE 9]>
    <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
    </script>
  <![endif]-->
  <header>
    <section id="logo">
      <h1><a href="http://repetylo.org.ua">REPETYLO<span>.ORG.UA</span></a></h1>
    </section>
    <section id="search">
      <jdoc:include type="modules" name="search" style="xhtml" />
    </section>
  </header>
  
  <nav>
    <jdoc:include type="modules" name="nav" style="xhtml" />
  </nav>
  
  <section id="main">
    <section id="breadcrumbs">
      <jdoc:include type="modules" name="breadcrumb" style="xhtml" />
    </section>
    
    <section id="content">
    </section>

    <section id="bottom">
      <jdoc:include type="modules" name="bottom" style="xhtml" />
    </section>
  </section>
  
  <aside>
  <jdoc:include type="modules" name="right" style="xhtml" />
	<jdoc:include type="modules" name="right2" style="xhtml" />
  </aside>
  
  <footer>
    <section class="userModules"><jdoc:include type="modules" name="user1" style="xhtml" /></section>
    <section class="userModules"><jdoc:include type="modules" name="user2" style="xhtml" /></section>
    <section class="userModules"><jdoc:include type="modules" name="user3" style="xhtml" /></section>
    <div class="copy">&copy; Богдан Репетило, 2009-<?php echo date("Y") ?><br>Всі права застережені.</div>
  </footer>
</body>
</html>

