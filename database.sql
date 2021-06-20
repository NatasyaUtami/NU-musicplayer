create table tb_artist (
    artist_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
    artist_name CHAR (128),
    PRIMARY KEY(artist_id)
);

create table tb_album (
    artist_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
    album_id SMALLINT(4),
    album_name CHAR(128),
    PRIMARY KEY(artist_id),
    UNIQUE KEY(album_id)
);

create table tb_track (
    track_id SMALLINT(3) NOT NULL AUTO_INCREMENT,
    track_name CHAR(128),
    artist_id SMALLINT(5),
    album_id SMALLINT(4),
    time DECIMAL(5,2),
    PRIMARY KEY(track_id),
    UNIQUE KEY(album_id)
);

create table tb_played (
    artist_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
    album_id SMALLINT(4),
    track_id SMALLINT(3),
    played TIMESTAMP,
    PRIMARY KEY(artist_id),
    UNIQUE KEY(album_id)
);
