CREATE TABLE `students` (
    `id`  INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `gender` CHAR(6) NOT NULL,
     `dob` DATE NOT NULL,
     `age`  TINYINT UNSIGNED
      
     
);
CREATE TABLE `testing` (
    `id`  INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `town` VARCHAR(200) NOT NULL
      
     
);

CREATE TABLE `courses` (
    `id`  INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL
     
);

CREATE TABLE `student_course` (
    `student_id`  INT UNSIGNED NOT NULL,
    `course_id` INT UNSIGNED NOT NULL
     
);


INSERT INTO `students` (`name`,`email`,`gender`,`dob`,`age`) VALUE
("MgMg","mgmg@gmail.com","male","2000-9-20",23),
("Mgzaw","mgzaw@gmail.com","male","1999-8-20",24),
("chan","chan@gmail.com","male","2000-9-20",23),
("sithu","sithu@gmail.com","male","1999-8-20",24),
("root","root@gmail.com","male","2000-9-20",23);

INSERT INTO `courses` (`name`) VALUE
("PHP"),
("JAVA"),
("PYTHON"),
("C++");

INSERT INTO `student_course` (`student_id`,`course_id`) VALUE 
(1,1) , (1,2),
(2,1) , (2,2),
(3,1) , (3,3),
(4,1) , (4,3),
(5,1);

-- //many to many relationship pivot table
select students.name,students.email,courses.name as language from `students`
join student_course on students.id= student_course.student_id
join courses on student_course.course_id = courses.id order by students.id desc where courses.name 




UPDATE `students` SET name="Chan" where id=2;

-- DCL data control language 

-- privileges | create drop INSERT select update delete 
if you forget userpassword || set password for 'professor'@'localhost' = password('prof1212') 
-- if you delet user  || drop user 'professor'@'localhost'; 
create user 'professor' @ '%' identified by 'prof1234';
-- grant / revoke 
grant create,select on university.* to 'professor'@'localhost';
grant all privileges on university.* to 'professor' @ 'localhost';
grant all privileges on *.* to 'professor' @ 'localhost' with grant option;  

revoke all privileges on *.* form 'professor'@'localhost';
flush 
revoke all privileges, grant option form 'professor'@'localhost'; 

drop database db_name;
drop table table_name;
one to many relationship


many to many relationship

CREATE table courses(
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200)
    
);

-- fullter join 

select * from students left join courses on students.course_id = courses.id
union
select * from students right join courses on students.course_id = courses.id;



UPDATE students
SET name="mgkhine" , email="mgkhine@gmail.com"
where id=6
