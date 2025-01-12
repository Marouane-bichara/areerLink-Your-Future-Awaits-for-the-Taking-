CREATE TABLE role (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name_role ENUM('admin', 'candidate', 'recruiter') NOT NULL
);
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role INT,
    CONSTRAINT fk_role FOREIGN KEY (role) REFERENCES role(id) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE
);

CREATE table tags(
	id int PRIMARY key AUTO_INCREMENT,
    name varchar(100)
);

CREATE table category(
	id int PRIMARY key AUTO_INCREMENT,
    name varchar(100)
);

CREATE table job_offer(
	id int PRIMARY key AUTO_INCREMENT,
    id_recruiter int,
    id_tag int,
    id_category int,
    company_name varchar(50) not null,
    position varchar(50) not null ,
    description text not null,
    salary float not null,
    location varchar(100) not null,
    archiveJob date,
     image varchar(255) not null,
    
    CONSTRAINT fk_recruiter FOREIGN KEY (id_recruiter) REFERENCES users(id)
    ON DELETE CASCADE 
    ON UPDATE CASCADE,
    
    CONSTRAINT fk_tag FOREIGN KEY (id_tag) REFERENCES tags(id)
    ON DELETE CASCADE 
    ON UPDATE CASCADE,
    
    CONSTRAINT fk_category FOREIGN KEY (id_category) REFERENCES category(id)
    ON DELETE CASCADE 
    ON UPDATE CASCADE
);



