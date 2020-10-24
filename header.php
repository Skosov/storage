
<header>
		<nav>
			<ul>
				<li id = "home"><a id = "home-btn" href="index.php">
					<img src="../img/icons/home.png" alt="Домой">
				</a></li>
				<li><a href="сonnection.php">ТИПЫ ПОДКЛЮЧЕНИЯ</a></li>
				<li><a href="ssd.php">SSD</a></li>
				<li><a href="hdd.php">HDD</a></li>
				<li><a href="perspective.php">ПЕРСПЕКТИВЫ</a></li>
			</ul>
		</nav>
</header>


<div class="popup">
			<div class="popup-content" id = "check-in">
				<h1>Форма регистрации</h1>
				<img class="close" src='../img/icons/close.png'>
				<form action="validation-form/check.php" method="post">
					 <input type="text" name = "login" id ="login" placeholder="Введите логин" class="form-control"><br>
					 <input type="text" name = "name" id ="name" placeholder="Введите имя" class="form-control"><br>
					 <input type="text" name = "number" class="form-control" placeholder="Введите номер телефона"><br>
					 <input type="password" name = "pass" id ="pass" placeholder="Введите пароль" class="form-control"><br>
					 <button class="btn btn-success" type="submit">Зарегистрироваться</button>
				</form>
			</div>
		<div class="popup-content" id = "log-in">
				<h1>Форма авторизации</h1>
				<img class="close" src='../img/icons/close.png'>
				<form action="validation-form/auth.php " method="post">
					 <input type="text" name = "login" id ="login" placeholder="Введите логин" class="form-control"><br>
					 <input type="password" name = "pass" id ="pass" placeholder="Введите пароль" class="form-control"><br>
					 <button class="btn btn-success" type="submit"> Авторизоваться</button>
		</form>
	</div>
</div>			

