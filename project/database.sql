create table pi_product(
	pro_id int auto_increment primary key,
	pro_name varchar(100),
	pro_price decimal(8,2),
	pro_discount tinyint,
	pro_caid int,
	pro_brid int,
	pro_path text,
	pro_description longtext
);
select 
pro_id,pro_name,round(pro_price) as pro_price,round((pro_price)-(pro_price*pro_discount/100)) as pro_discount,pro_path,pro_description,ca_name,br_name
 from pi_product,pi_brand,pi_category 
 where pro_caid=ca_id and pro_brid=br_id order by pro_id desc

