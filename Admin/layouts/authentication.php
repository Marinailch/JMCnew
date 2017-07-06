<div class="form" style="margin-top: 10%">
<form class="form-horizontal" role="form" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
  <div class="form-group" style=" border: 1px solid #ccc; border-radius: 20px; padding: 55px; background-color: #efefef;">
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Логин</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Логин" name="login">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="Пароль" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="submit" class="btn btn-default btn-sm" value="Войти">
    </div>
  </div>  
</form>
    <a href="../index.php"><b style="color: #cdc639;">Перейти на сайт</b></a>
</div>
