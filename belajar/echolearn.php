<?php 
$nama = "Indra Syahputra";
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Judul Halaman</title>
 </head>
 <body>
 <?php 
 	for ($i=0; $i < 5; $i++){ ?>
	<h1><?php echo $nama ?></h1>
 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi veritatis alias esse magni consectetur vero, necessitatibus. Alias reprehenderit rerum, voluptatibus quod cumque dolorum? Temporibus sunt accusantium, alias corporis eaque quidem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi hic quam nisi harum. Possimus asperiores non, vel repellat labore recusandae assumenda, quas odio doloribus deserunt, voluptatibus omnis fuga saepe tempora.
 		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque incidunt quibusdam voluptas, nihil fugit praesentium recusandae, obcaecati aliquam ipsum odit nam assumenda sit illum sapiente. Facilis odio quisquam itaque at.</p>
<?php } ?>
 	
 	
<table border ="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
	</tr>

<?php 
	for ($i=1; $i <= 10; $i++){ ?>

	<tr>
		<td><?php echo "$i"; ?></td>
		<td><?= $nama ?></td>
	</tr>
<?php } ?>
</table>

 </body>
 </html>