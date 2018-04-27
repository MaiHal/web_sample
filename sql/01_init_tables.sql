create  table if not exists sample_project.recipes (
  id int(11) not null auto_increment comment 'ID' ,
  menu varchar(255) not null default '' comment '料理名' ,
  created datetime null default null comment '追加日時' ,
  PRIMARY KEY (id) )
engine = InnoDB
default character set = utf8
collate = utf8_general_ci;
