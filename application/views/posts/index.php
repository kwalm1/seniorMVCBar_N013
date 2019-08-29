<h6><?= $title ?></h6>
<a href="<?php echo base_url(); ?>/home" >HOME</a>
<table border = '1'>
<?php foreach ($posts as $post) : ?>
	<tr>
		<td><?php echo $post['Drink']?></td>
		<td><?php echo $post['Quantity']?></td>
	</tr>
	<br>
	<?php endforeach; ?>
</table>
