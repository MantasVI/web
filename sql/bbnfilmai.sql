create table users(
	id integer primary key identity(1,1),
	email varchar(255) not null unique,
	password varchar(255) not null);

create table movies(
	id integer primary key identity(1,1),
	title varchar(255) not null,
	genre varchar(255) not null);

	create table favorites(
	id integer primary key identity(1,1),
	userid integer  references users(id),
	movieid integer  references movies(id));
