<?php

$album = new App\Album();
$rows = $album->tampil();

?>
<h2>Data Album</h2>
<table>
<a href="index.php?page=album_input">| Tambah</a> |
    <tr>
			<th>NO</th>
			<th>ID ALBUM</th> 
			<th>NAMA ALBUM</th> 
			<th>EDIT</th>
	</tr>

    <?php foreach ($rows as $row) { ?>
    <tr>
    <td><?php echo $row['artist_id']; ?></td>
    <td><?php echo $row['album_id']; ?></td>
    <td><?php echo $row['album_name']; ?></td>
    <td><a href="index.php?page=edit_artist&id=<?php echo $row['artist_id']; ?>">Edit</a></td>

</tr>
<?php } ?>
</table> 