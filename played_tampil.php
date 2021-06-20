<?php

$played = new App\Played();
$rows = $played->tampil();

?>
<h2>Data Played</h2>
<table>
<a href="index.php?page=played_input">Tambah</a> |
    <tr>
			<th>NO</th>
			<th>ID ALBUM</th> 
			<th>ID TRACK</th> 
			<th>PLAYED</th> 
			<th>EDIT</th>
	</tr>

    <?php foreach ($rows as $row) { ?>
    <tr>
    <td><?php echo $row['artist_id']; ?></td>
    <td><?php echo $row['album_id']; ?></td>
    <td><?php echo $row['track_id']; ?></td>
    <td><?php echo $row['played']; ?></td>
    <td><a href="index.php?page=edit_played&id=<?php echo $row['artist_id']; ?>">Edit</a></td>

</tr>
<?php } ?>
</table> 