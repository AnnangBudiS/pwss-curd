<?php
include 'connection.php';

$sqlAktor = "create table if not exists actor(
    actorId int not null auto_increment primary key,
    firstName varchar(20) not null,
    lastName varchar(20) not null,
    birthDate date,
    age int,
    work varchar(12) default '',
    activeYear varchar(20) default '',
    image varchar(70) default ''
)";

$resultAktor = mysqli_query($con, $sqlAktor);

$sqlMovie = "create table if not exists movie(
    movieId int not null auto_increment primary key,
    title varchar(45) not null,
    genre varchar(20) not null,
    rating int not null,
    director varchar(30) not null,
    production varchar(40) not null,
    company varchar(40) not null,
    releaseDate varchar(20) not null,
    duration varchar(10) not null,
    poster varchar(70) default '',
    description varchar(255) default 'description' 
    
)";

$resultMovie = mysqli_query($con, $sqlMovie);

$sqlAM = "create table if not exists actorMovie(
    actorMovieId int not null auto_increment primary key,
    actorId int,
    movieId int,
    foreign key (actorId) references actor(actorId),
    foreign key (movieId) references movie(movieId)
)";

$resultAm = mysqli_query($con, $sqlAM);


if (!$resultAktor || !$resultMovie || !$resultAm) {
    echo "cant create some table <br/>";
    echo mysqli_error;
} else {
    echo "success";
}


?>