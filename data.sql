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
  email varchar(30),
  address varchar(50)
);

insert into users(name_user, pass, phone_num, email, address)
values('Nam', '123', 12343, 'sonnamttt@gmail.com', 'Da Nang'),
  ('Ni', '234', 23435255, 'ni@gmal.com', 'Da Nang');

create table admin(user_AD varchar(50), pass varchar(15));
insert into admin(user_AD, pass) value('admin', '12345');

create table products(
  ID_pro int primary key auto_increment,
  name_pro varchar(50),
  price decimal(10,3),
  describes varchar(100),
  category char(50)
);

insert into products(name_pro, price, describes, category)
values('Bánh tráng trộn', '20', '1 đĩa', 1),
  ('Khoai tây chiên', '15', '1 phần', 1),
  ('Xúc xích phô mai', '10', '1 cây', 1),
  ('Bánh mì thịt chả', '15', '1 ổ', 1),
  ('Ốc hút', '20', '1 đĩa', 1),
  ('Bánh cuốn', '10', '1 đĩa', 1),
  ('Bún đậu mắm tôm', '50', '1 đĩa', 1),
  ('Coca cola', '10', '1 lon', 2),
  ('Pepsi', '10', '1 lon', 2),
  ('Sinh Tố', '20', '1 ly', 2),
  ('Trà Sữa', '25', '1 ly', 2);

create table pictures(
  ID_pic int primary key auto_increment,
  ID_pro int,
  pic varchar(250),
  FOREIGN KEY (ID_pro) REFERENCES products (ID_pro) on delete cascade
);

insert into pictures(ID_pro, pic)
values(
    1,'https://sascotravel.com/wp-content/uploads/2020/03/maxresdefault.jpg'),
  (1,'https://images.says.com/uploads/story_source/source_image/671341/4c31.jpg'),
  (2,'https://danviet.mediacdn.vn/zoom/700_438/upload/4-2016/images/2016-11-24/147997482165214-khoai-2.jpg'),
  (3,'https://trasua38govap.com/upload/sanpham/khoai-tay-lac-8277.png'),
  (4,'https://monanvietnamblog.files.wordpress.com/2017/07/banh-mi-kep-cha-lua.jpg'),
  (5,'https://danangreview.com/wp-content/uploads/2018/10/quan-oc-hut-ba-my-da-nang-quan-oc-hut-ngon-tai-da-nang.jpg'),
  (6,'https://quynhonservice.com/wp-content/uploads/2019/10/b%C3%A1nh-cu%E1%BB%91n-.jpg'),
  (7,'https://beptruong.edu.vn/wp-content/uploads/2018/06/bun-dau-mam-tom-thap-cam.jpg');

create table orders(
  ID_order int primary key auto_increment,
  ID_user int,
  datee varchar(50),
  status int,
  FOREIGN KEY (ID_user) REFERENCES users (ID_user) on delete cascade
);

insert into orders(ID_user,datee,status)
values(1,"27-2-2002",1), (2,"15-5-2001",1);

create table order_details(
  ID_order_detail int PRIMARY KEY auto_increment,
  ID_order int,
  ID_pro int,
  quantity int,
  FOREIGN KEY (ID_order) REFERENCES orders (ID_order) on delete cascade,
  FOREIGN KEY (ID_pro) REFERENCES products (ID_pro) on delete cascade
);

insert into order_details(ID_order, ID_pro, quantity)
values(1, 1, 15), 
  (1, 2, 20);

create table carts(
  ID_cart int primary key auto_increment,
  ID_user int,
  ID_pro int,
  quantity int,
  FOREIGN KEY (ID_user) REFERENCES users (ID_user) on delete cascade,
  FOREIGN KEY (ID_pro) REFERENCES products (ID_pro) on delete cascade
);

insert into carts(ID_user, ID_pro, quantity)
values(1, 1, 15),
  (1, 2, 20);

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