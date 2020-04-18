<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://wiki.splitbrain.org/wiki:tpl:templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="google-site-verification" content="h8aqZFZxWbkuVTGdbzBfvjiPhf9uWF1MjhyGqNF9Pyk" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>
 <?php tpl_metaheaders()?>

  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
  <link type="text/css" rel="stylesheet" href="/lib/tpl/tortoise/css/style.css" />
<!--  <link type="text/css" rel="stylesheet" href="/lib/tpl/tortoise/css/print.css" />-->
<script src="https://use.fontawesome.com/6fc0f1207c.js"></script>
<?php
if (file_exists(DOKU_PLUGIN.'googleanalytics/code.php')) include_once(DOKU_PLUGIN.'googleanalytics/code.php');
if (function_exists('ga_google_analytics_code')) ga_google_analytics_code();
?>
</head>

<body>


<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki">
  <?php html_msgarea()?>

  <div class="stylehead">


    <?php if($conf['breadcrumbs']){?>
    <div class="breadcrumbs">
      <?php tpl_breadcrumbs()?>
      <?php //tpl_youarehere() //(some people prefer this)?>
    </div>
    <?php }?>

    <?php if($conf['youarehere']){?>
    <div class="breadcrumbs">
      <?php tpl_youarehere() ?>
    </div>
    <?php }?>

  </div>
  <?php flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>

<div id="pgContent">

<div id="pgSideWrap">
<div id="pgLogo">
	<center>
	<img src="<?php echo DOKU_TPL?>images/logo_pgfr_sans_100.png" />
	</center>
</div>
<br/>
<div id="pgSideNav">
<div id="follow">
<h2>Suivez-Nous !</h2>
<ul>
<li><i class="fa fa-twitter"></i>&nbsp;<a href="https://twitter.com/intent/user?screen_name=postgresqlfr" title="Twitter communauté PostgreSQL">Twitter</a></li>
<li><i class="fa fa-youtube-play"></i>&nbsp;<a href="https://www.youtube.com/channel/UCR7skKC85Zn6p7fJ-lW7G8g" title="chaine Youtube PostgreSQL">Youtube</a></li>
<li><i class="fa fa-linkedin-square"></i>&nbsp;<a href="https://www.linkedin.com/groups/8187772" title="Groupe Linkedin communauté PostgreSQL">Linkedin</a></li>
<li><i class="fa fa-google-plus-official"></i>&nbsp;<a href="https://plus.google.com/b/106731056161480789338/" title="Google Plus communauté PostgreSQL">Google +</a></li>
<li><i class="fa fa-github"></i>&nbsp;<a href="https://github.com/postgresqlfr/" title="Github communauté PostgreSQL">Github</a></li>
</ul>

</div>
<br/>
<div id="pgSideNav">
    <div id="blognav">
    <div>
	<h2>Utilisateur</h2>
        <ul>
	<li>
	<a href='https://forums.postgresql.fr/register.php'>Créer un Compte</a>
        </li><li>
	<?php tpl_actionlink('admin')?>
        </li><li>
	<?php tpl_actionlink('profile')?>
        </li><li>
	<?php tpl_actionlink('login')?>
   	</li>
	</ul>
	 </div>
	</br>
    </div>
   </div>
<br/>

    <div id="pgSideNav">

     <div id="blogextra">
       <div>
	<h2>Page</h2>
	 <ul>
	 <li>
      <?php tpl_actionlink('edit')?>
         </li><li>
	<?php tpl_actionlink('history')?> </li><li>

       <?php tpl_actionlink('recent')?>
 	</li>
	</ul>
	<br/>
        </div>
        </div>
        </div>
<br/>

    <div id="pgSideNav">
<div id="search"><h2>Rechercher</h2>

    <?php tpl_searchform()?>&nbsp;
</div>
    </div>

  </div>
</div>


  <div id="pgContentWrap">
  <div id="pgDownloadsWrap">
  <div id="content">

  <div class="page">
    <!-- wikipage start -->
    <?php tpl_content()?>
    <!-- wikipage stop -->
  </div>
  </div>
  </div>
  </div>
  <div class="clearer">&nbsp;</div>

  <?php flush()?>

  <div class="stylefoot">

    <div class="meta">
      <div class="user">
        <?php tpl_userinfo()?>
      </div>
      <div class="doc">
        <?php tpl_pageinfo()?>
      </div>
    </div>

   <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>


  </div>
</div>
</div>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
