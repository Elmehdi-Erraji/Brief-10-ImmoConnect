create database immoConnect;

create table roles(

    Id int PRIMARY KEY ,
    name varchar(100)
);

create table users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    email VARCHAR(255),
    PASSWORD VARCHAR(255),
    image VARCHAR(255),
    statut int,
    role_id int,
    FOREIGN KEY (role_id) REFERENCES role(id)
    
);

create table properties(
    id INT PRIMARY KEY AUTO_INCREMENT,
    adress VARCHAR(255),
    surface FLOAT,
    room int,
    shower int,
    price INT, 
    statut INT,
    type VARCHAR(255),
    description text,
    user_id int,
    FOREIGN KEY (user_id) REFERENCES user(id)
);
create table comment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    CommentContent VARCHAR(255),
    SendTime date ,
    user_id int,
    properties_id int,
    FOREIGN KEY (role_id) REFERENCES user(id),
    FOREIGN KEY (properties_id ) REFERENCES properties(id)
    
);

create table message-user(
    id int AUTO_INCREMENT,
    message text,
    sendTime date,
    senderId int,
    recieverId int,
    FOREIGN key (senderId) REFERENCES user(id),
    FOREIGN key (recieverId) REFERENCES user(id)

);

CREATE TABLE images (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imageUrl VARCHAR(255),
    property_id INT,
    FOREIGN KEY (property_id) REFERENCES properties(id)
);