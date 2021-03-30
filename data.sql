create table Users(
ID_user int primary key auto_increment,
name_user varchar(50),
pass varchar(15),
phone_num decimal(10),
email varchar(30),
address varchar(50)
 );
 
 insert into Users(name_user, pass, phone_num, email, address)
 values('Nam','123',12343,'jhsdfg','Da Nang'),('Ni','234',23435255,'ni@gmal.com','Da Nang');

 create table admin(
 user_AD varchar(50),
 pass varchar(15)
 );
 
 insert into admin(user_AD, pass) value('Sang','12345');

 create table Products(
  ID_pro int primary key auto_increment,
 name_pro varchar(50),
 price decimal(10, 2),
 describes varchar(100)
 );
 
insert into Products(name_pro, price, describes )
values('Bánh','10000','Ngọt'),('Kẹo','20000','Chua');

 create table orders(
 ID_order int primary key auto_increment,
  ID_user int,
  ID_pro int,
  datee varchar(50),
	FOREIGN KEY (ID_user) REFERENCES Users (ID_user) ,
	FOREIGN KEY (ID_pro) REFERENCES Products (ID_pro) 
 );
 
 insert into orders(ID_user, ID_pro, datee )
 values(1,1,'25-3-2005'),(1,2,'15-3-2005');
 
 create table picture(
 ID_pro int ,
FOREIGN KEY (ID_pro) REFERENCES Products (ID_pro) ,
 pic varchar(250)
 );
 
insert into picture(ID_pro, pic)
values(1,'https://cdn.tgdd.vn/Products/Images/7199/79592/bhx/keo-mem-sugus-trai-cay-tui-210g-4-700x467.jpg'),
 (1,'https://bizweb.dktcdn.net/thumb/large/100/004/714/products/keo-marshies-trai-tim-vi-dau-1.png?v=1605501325813');
 
 create table material(
  ID_mate int primary key auto_increment,
	name_mate varchar(30),
    amount_mate int ,
    price_mate decimal(10,2),
    date_input varchar(50)
  );
  
insert into material(name_mate,amount_mate,price_mate,date_input)
 values('Nam',1,10000,'11-12-2019'),('Ni',2,10000,'10-11-2017');