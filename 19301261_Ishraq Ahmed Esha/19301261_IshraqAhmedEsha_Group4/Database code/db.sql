create database football_club_anagement

use football_club_management

create table users
	(
		name varchar(30) not null,
		email_address varchar(40) not null,
		user_id varchar(20) not null,
		password varchar(30) not null,
		phone_number int(13) not null,
		region varchar(20) not null,
		date_of_birth int(8) not null,
		primary key (user_id) 
		);

create table board
	(
		member_id varchar(20),
		name varchar(40),
		joining_date date,
		primary key (member_id)
		);

create table shop_staff
	(
		staff_id varchar(10),
		name varchar(40),
		email varchar(50),
		salary varchar(20),
		supervisor varchar(15),
		primary key(staff_id)
		);

create table club_staff
	(
		initial varchar(10),
		salary varchar(30),
		name varchar(40),
		position varchar(50),
		primary key (initial)
		);

insert into board (member_id, name, joining_date) values
('m01', 'Avram Gui', '2020-06-18'),
('m02', 'John Hooks ', '2019-04-13'),
('m03', 'Cliff Bata', '2019-04-20'),
('m04', 'Kevin Good', '2021-01-29'),
('m05', 'Richard Arnold ', '2020-03-06'),
('m06', 'Josh Hazel', '2021-05-11'),
('m07', 'Saby Raida', '2021-09-22');



insert into shop_staff (staff_id, name, email, salary, supervisor) values
('st01', 'David Beckham', 'beckhamdavid7@gmail.com', 7000, 'st04'),
('st02', 'John Wick', 'jhonwick10@gmail.com', 5000, 'st01'),
('st03', 'Jesse Lingard', 'jesseling@gmail.com', 4000, 'st08'),
('st04', 'Ravi Wing', 'winger.ravi@gmail.com', 10000, 'st04'),
('st05', 'Jason Roy', 'jason.hudson.roy@gmail.com', 4500, 'st01'),
('st06', 'Ben Stocks', 'benstocks2@gmail.com', 6000, 'st08'),
('st07', 'Ryan Hop', 'ryanhop11@gmail.com', 4700, 'st01'),
('st08', 'Rida Robin', 'robin.rida@gmail.com', 7000, 'st04'),
('st09', 'Piu Jane', 'piujane23@gmail.com', 6000, 'st01'),
('st10', 'Kate Hon', 'katehon2@gmail.com', 5000, 'st08'),
('st11', 'Jim Halpart', 'jimhal@gmail.com', 2500, 'st08');


insert into club_staff (initial, salary, name, position) values
('AM', '£35000', 'Andrew Meredith', 'Chief Analyst'),
('CA', '£30000', 'Chris Armas', 'Assistant Manager'),
('MC', '£35000', 'Mike Clegg', 'Conditioning Coach'),
('MMA', '£35000', 'Md Mostafizur', 'Goalkeeping coach'),
('MP', '£30000', 'Mike Phelan', 'Assistant Manager'),
('NC', '£25000', 'Nick Cox', 'Academy Manager'),
('RH', '£35000', 'Richard Hartis', 'Goalkeeping Coach'),
('RR', '£50000', 'Ralf Rangnick', 'Manager'),
('RT', '£20000', 'Rod Thornley', 'Physiotherapist');