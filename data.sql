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
  price decimal(10, 2),
  describes varchar(100),
  category char(50)
);

insert into products(name_pro, price, describes, category)
values('Bánh', '10000', 'Ngọt', 1),
  ('Kẹo', '20000', 'Chua', 1),
  ('Coca cola', '50000', 'ngon', 2);

create table pictures(
  ID_pic int primary key auto_increment,
  ID_pro int,
  pic varchar(250),
  FOREIGN KEY (ID_pro) REFERENCES products (ID_pro) on delete cascade
);

insert into pictures(ID_pro, pic)
values(
    1,
    'https://cdn.tgdd.vn/Products/Images/7199/79592/bhx/keo-mem-sugus-trai-cay-tui-210g-4-700x467.jpg'
  ),
  (
    1,
    'https://bizweb.dktcdn.net/thumb/large/100/004/714/products/keo-marshies-trai-tim-vi-dau-1.png?v=1605501325813'
  );

create table orders(
  ID_order int primary key auto_increment,
  ID_user int,
  datee varchar(50),
  FOREIGN KEY (ID_user) REFERENCES users (ID_user) on delete cascade
);

insert into orders(ID_user)
values(1), (2);

create table order_details(
  ID_order_detail int PRIMARY KEY auto_increment,
  ID_order int,
  ID_pro int,
  quantity int,
  FOREIGN KEY (ID_order) REFERENCES orders (ID_order) on delete cascade,
  FOREIGN KEY (ID_pro) REFERENCES products (ID_pro) on delete cascade
);

insert into order_details(ID_order, ID_pro, quantity, datee)
values(1, 1, 15, '25-3-2005'), 
  (1, 2, 20, '15-3-2005');

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