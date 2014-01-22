<?php 
if ($num_res > 0) {
	?>
<!-- <table id="transactions">  -->
	<tr>
		<th>id</th>
		<th>user</th>
		<th>datetime</th>
		<th>description</th>
		<th>summ</th>
	</tr>

<?php for ($i = 0; $i < $num_res; $i ++) { ?> 
	<tr>
		<td><?= $transactions[$i]['id']; ?></td>
		<td><?= $transactions[$i]['user']; ?></td>
		<td><?= $transactions[$i]['date']; ?></td>
		<td><?= $transactions[$i]['type']; ?></td>
		<td><?= $transactions[$i]['money']; ?> грн.</td>
	</tr>
<?php } ?>

<!--  </table>  -->

<?php } else echo "Транзакции отсутствуют"; ?>