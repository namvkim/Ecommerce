-- -----------------------------------------delete table----------------------------------

drop table admin;
drop table carts;
drop table materials;
drop table order_details;
drop table orders;
drop table pictures;
drop table products;
drop table users;


--------------------------------------------create table----------------------------------

create table users(
  ID_user int primary key auto_increment,
  name_user varchar(50),
  pass varchar(15),
  phone_num decimal(10),
  email varchar(50),
  address varchar(50),
  status int
);

insert into users(name_user, pass, phone_num, email, address,status)
values('Nam', '123', 12343, 'sonnamttt@gmail.com', 'Da Nang',1),
  ('Ni', '234', 23435255, 'ni@gmal.com', 'Da Nang',1),
  ('ha', '456', 0168600552, 'ha@gmail.com', 'Da Nang',1);

create table admin(user_AD varchar(50), pass varchar(15));
insert into admin(user_AD, pass) value('admin', '12345');

create table products(
  ID_pro int primary key auto_increment,
  name_pro varchar(50),
  price decimal(10,0),
  describes varchar(100),
  category char(50),
  status int
);
insert into products(name_pro, price, describes, category,status)
values
  ('Bánh tráng trộn', '20000', '1 đĩa', 1,1),
  ('Khoai tây chiên', '15000', '1 phần', 1,1),
  ('Xúc xích phô mai', '10000', '1 cây', 1,1),
  ('Bánh mì thịt chả', '15000', '1 ổ', 1,1),
  ('Ốc hút', '20000', '1 đĩa', 1,1),
  ('Bánh cuốn', '20000', '1 đĩa', 1,1),
  ('Bún đậu mắm tôm', '50000', '1 đĩa', 1,1),
  ('Coca cola', '10000', '1 lon', 2,1),
  ('Pepsi', '10000', '1 lon', 2,1),
  ('Sinh Tố dâu chuối', '20000', '1 ly', 2,1),
  ('Cà phê', '20000', '1 ly', 2,1),
  ('Trà Sữa', '25000', '1 ly', 2,1),
  ('Phở', '25000', '1 tô', 1,1),
  ('Hủ tiếu sườn heo', '25000', '1 tô', 1,1),
  ('Mì quảng', '25000', '1 tô', 1,1),
  ('Cơm sườn', '20000', '1 đĩa', 1,1),
  ('Bún hến', '20000', '1 tô', 1,1),
  ('Mì cay', '45000', '1 tô', 1,1),
  ('Cháo gà', '25000', '1 tô', 1,1),
  ('Bánh xèo', '25000', '3 lá', 1,1),
  ('Bạc sĩu', '10000', '1 lon', 2,1),
  ('Milô', '10000', '1 lon', 2,1),
  ('Sữa chua nếp cẩm', '20000', '1 ly', 2,1),
  ('Nước cam', '20000', '1 ly', 2,1),
  ('Trà tắt', '25000', '1 ly', 2,1),
  ('Cam', '25000', '1 ký', 3,1),
  ('Xoài non chấm mắm ruốt', '15000', '1 hộp /200 gam', 3,1),
  ('Mận Bắc', '15000', '1 hộp /200 gam', 3,1),
  ('Thanh Long', '30000', '1 hộp /500 gam', 3,1),
  ('Sầu riêng', '40000', '1 hộp /300 gam', 3,1)
  ;

create table pictures(
  ID_pic int primary key auto_increment,
  ID_pro int,
  pic varchar(250),
  FOREIGN KEY (ID_pro) REFERENCES products (ID_pro) on delete cascade
);
insert into pictures(ID_pro, pic)
values
  (1,'banhTrangTron.jpg'),
  (2,'khoaiTayChien.jpg'),
  (3,'hotDog.jpg'),
  (4,'banhMi.jpg'),
  (5,'ocHut.jpg'),
  (6,'banhCuon.jpg'),
  (7,'bunDau.jpg'),
  (8,'coCa.png'),
  (9,'pepsi.jpg'),
  (10,'sinhToChuoi.jpg'),
  (11,'cafe.jpg'),
  (12,'traSua.jpg'),
  (13,'phoBo.jpg'),
  (14,'huTieu.jpg'),
  (15,'miQuang.jpg'),
  (16,'comSuon.jpg'),
  (17,'bunHen.jpg'),
  (18,'miCay.png'),
  (19,'chaoGa.jpg'),
  (20,'banhXeo.jpg'),
  (21,'bacSiu.png'),
  (22,'milo.jpg'),
  (23,'napCam.jpg'),
  (24,'nuocCam.jpg'),
  (25,'traTac.jpg'),
  (26,'cam.jpg'),
  (27,'xoai.jpg'),
  (28,'man.jpg'),
  (29,'thanhLong.jpg'),
  (30,'sauRieng.jpg')
  ;
create table orders(
  ID_order int primary key auto_increment,
  ID_user int,
  datee varchar(50),
  status int,
  FOREIGN KEY (ID_user) REFERENCES users (ID_user) on delete cascade
);

insert into orders(ID_user,datee,status)
values(1,"27-2-2002",1),(1,"30-3-2002",1),(1,"15-5-2001",2),(1,"9-5-2001",3);

create table order_details(
  ID_order_detail int PRIMARY KEY auto_increment,
  ID_order int,
  ID_pro int,
  quantity int,
  FOREIGN KEY (ID_order) REFERENCES orders (ID_order) on delete cascade,
  FOREIGN KEY (ID_pro) REFERENCES products (ID_pro) on delete cascade
);

insert into order_details(ID_order, ID_pro, quantity)
values(1, 1, 15), (1, 2, 20),(2, 5, 7), (2, 20, 9), (3, 9, 18), (3, 16, 6),(4,12,3);

create table carts(
  ID_cart int primary key auto_increment,
  ID_user int,
  ID_pro int,
  FOREIGN KEY (ID_user) REFERENCES users (ID_user) on delete cascade,
  FOREIGN KEY (ID_pro) REFERENCES products (ID_pro) on delete cascade
);

insert into carts(ID_user, ID_pro)
values(1, 1),
  (1, 2);

create table materials(
  ID_mate int primary key auto_increment,
  name_mate varchar(30),
  amount_mate int,
  price_mate decimal(10, 2),
  date_input varchar(50)
);
insert into materials(name_mate, amount_mate, price_mate, date_input)
values('Cá', 1, 10000, '11-12-2019'),
  ('Thịt', 2, 10000, '10-11-2017');