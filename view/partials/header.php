<!-- <ul class="menu">
<?foreach ($menu as $key => $elem) {?>
	<li><a href="<?=$elem[0]?>"><?=$elem[1]?></a></li>		
<?}?>
</ul> -->

    <div class="navbar-header">
      <a class="navbar-brand" href="#">phpimt.com</a>
    </div>
    <ul class="nav navbar-nav">
      <?foreach ($menu as $key => $elem) {?>
      <li class="active"><a href="<?=$elem[0]?>"><?=$elem[1]?></a></li>
     <?}?> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Зарегистрироваться</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Авторизоваться</a></li>
    </ul>
  