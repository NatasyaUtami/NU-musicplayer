<?php

$track = new App\Track();
$rows = $track->tampil();

?>
<h2>Data Track</h2>
<table>
<a href="index.php?page=track_input">Tambah</a> |
    <tr>
			<th>NO</th>
			<th>TRACK NAMA</th> 
			<th>ID ARTIST</th> 
			<th>ID ALBUM</th> 
			<th>TIME</th>
			<th>EDIT</th>
	</tr>

    <?php foreach ($rows as $row) { ?>
    <tr>
    <td><?php echo $row['track_id']; ?></td>
    <td><?php echo $row['track_name']; ?></td>
    <td><?php echo $row['artist_id']; ?></td>
    <td><?php echo $row['album_id']; ?></td>
    <td><?php echo $row['time']; ?></td>
    <td><a href="index.php?page=edit_track&id=<?php echo $row['track_id']; ?>">Edit</a></td>

</tr>
<?php } ?>
</table> 