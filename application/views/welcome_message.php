<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>FailPlay</title>
 		<link  href="/css/bootstrap.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="/css/bootstrap-responsive.css" rel="stylesheet">
		<script src="/js/jquery.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="row">
				<div class="span6">
					<div style="text-align: left; font-weight: bold; margin: 30px; color: #10549B">
						<img src="/images/failpay75.gif" /><br>
						version: 0.01 alpha
<?php 
	// Определяем название ветки
	$stringfromfile = file('.git/HEAD', FILE_USE_INCLUDE_PATH);
	$stringfromfile = $stringfromfile[0]; //get the string from the array
	$explodedstring = explode("/", $stringfromfile); //seperate out by the "/" in the string
	$branchname = $explodedstring[2]; //get the one that is always the branch name
	echo "<span style='color: #2A97D8; margin-left: 30px'>Current branch: ".$branchname."</span>"; //show it on the page
?>    						
					</div>
				</div>
				<div class="span6" style="text-align: center; margin-top: 40px">
					<h2>COUNT: 1024 грн</h2>
				</div>
			</header>
			<article class="row">
				<div class="span4">
					<h3>О проекте</h3>
					<p>FailPay является благотворительным проектом нацеленным в первую очередь на сбор средств для приобретения кофейной машины в целях обеспечения потребностей сотрудников "Инженерного сервиса"</p>
					</div>
				<div class="span4">
					<h3>Аппаратная часть</h3>
					<p>FailPay состоит из приемника купюр, Arduino с клавиатурой и экраном, Raspbery Pi. 
						Все гаджеты и девайсы устройства а также интелектуальные права на программное обеспечение принадлежат разработчикам и сотрудникам "Инженерного сервиса".</p>
					</div>
				<div class="span4">
					<h3>Принцип работы</h3>
					<p>Вставляете деньгу в купюроприемник, нажимаете "оплатить" и ваша транзакция через Arduino записывается в базу данных на Raspberry. Все транзакции хранятся в базе данных.
						Итоговая сумма видна через веб-интерфейс устройства.</p>
					</div>
			</article>
			<style>
				#transactions {
					width: 100%;
					
				}

				#transactions tr{
					border-bottom: 1px solid gray;
				}

				#transactions tr td{
					padding: 10px;
					border-left: 1px solid gray;
				}

				#transactions tr th{
					padding: 10px;
					background: lightgray;
					color: black;
				}

				#transactions tr:hover {
					background: lightgray;
				}

				#transactions tr td:nth-child(1) {
					border-left: none;
					text-align: center;
					width: 5%;
				}
				#transactions tr td:nth-child(2) {
					text-align: center;
					width: 5%;
				}
				#transactions tr td:nth-child(3) {
					text-align: center;
					width: 20%;
				}
				#transactions tr td:nth-child(4) {
					text-align: left;
				}
				
				#transactions tr td:nth-child(5) {
					text-align: right;
				}
			</style>
			<article class="row">
				<div class="span12">
					<h3>Транзакции</h3>
					<table id="transactions">
						<tr>
							<th>id</th>
							<th>user</th>
							<th>datetime</th>
							<th>description</th>
							<th>summ</th>
						</tr>
						<tr>
							<td>9</td>
							<td>anonymous</td>
							<td>21 января 2013 г. 13:07</td>
							<td>Пополнение баланса</td>
							<td>200 грн</td>
						</tr>
						<tr>
							<td>8</td>
							<td>anonymous</td>
							<td>21 января 2013 г. 13:05</td>
							<td>Пополнение баланса</td>
							<td>10 грн</td>
						</tr>
						<tr>
							<td>7</td>
							<td>anonymous</td>
							<td>21 января 2013 г. 12:57</td>
							<td>Пополнение баланса</td>
							<td>5 грн</td>
						</tr>
						<tr>
							<td>6</td>
							<td>anonymous</td>
							<td>21 января 2013 г. 12:37</td>
							<td>Пополнение баланса</td>
							<td>2 грн</td>
						</tr>
						<tr>
							<td>5</td>
							<td>anonymous</td>
							<td>21 января 2013 г. 12:33</td>
							<td>Пополнение баланса</td>
							<td>20 грн</td>
						</tr>
						<tr>
							<td>4</td>
							<td>anonymous</td>
							<td>21 января 2013 г. 12:31</td>
							<td>Пополнение баланса</td>
							<td>5 грн</td>
						</tr>
						<tr>
							<td>3</td>
							<td>anonymous</td>
							<td>21 января 2013 г. 12:23</td>
							<td>Пополнение баланса</td>
							<td>20 грн</td>
						</tr>
						<tr>
							<td>2</td>
							<td>anonymous</td>
							<td>21 января 2013 г. 12:20</td>
							<td>Пополнение баланса</td>
							<td>200 грн</td>
						</tr>
						<tr>
							<td>1</td>
							<td>anonymous</td>
							<td>21 января 2013 г. 12:03</td>
							<td>Пополнение баланса</td>
							<td>1 грн</td>
						</tr>
					</table>
					</div>
			</article>
						
			<article class="row">				
				<div class="span4">
					<h3>Утилиты</h3>
					<p><a href="/phpminiadmin.php" target="_blanc">PHPMiniAdmin</a></p>

				</div>
			</article>	
		</div>

	</body>
</html>