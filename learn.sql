CREATE TABLE `students`(
    id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    gender CHAR(6) NOT NULL,
    dob  DATE NOT NULL,
    age TINYINT UNSIGNED,
    course_id INT UNSIGNED NOT Null
);

INSERT INTO students`(`name,email,gender,dob,`age`) VALUES
("Jack","jack@gmail.com","gay",'1999-10-3',23),
("Mary","mary@gmail.com","girl",'1949-11-3',53),
("Dee","dee@gmail.com","boy",'1989-9-3',33);

UPDATE students SET `gender`='boy' where `id`=3;

create user 'professor'@'localhost' identified by 'prof1234';
Query OK, 0 rows affected (0.001 sec)
set password for professor`@`% =PASSWORD('1234');
select Host,User,Password from mysql.user;
grant create on university.* to 'professor'@'localhost'(with grant option);
//() is dangerous;
revoke all privileges on *.* from'professor'@'localhost';
flush privileges;
revoke all privileges, grant option from 'professor'@'localhost';
show grants;

CREATE TABLE `courses`(
    id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT
    name VARCHAR(200) NOT NULL
);

INSERT INTO `courses`(`name`) VALUES 
('PHP'),
('JAVASCRIPT'),
('Python');

INSERT INTO students`(`name,email,gender,dob,age,`course_id`) VALUES
("Jack","jack@gmail.com","boy",'1999-10-3',23,1),
("Mary","mary@gmail.com","girl",'1949-11-3',53,1),
("Mawerry","mawery@gmail.com","girl",'1946-11-3',53,1),
("Dee","dee@gmail.com","boy",'1989-9-3',33,1);
INSERT INTO students (`name`,`email`,`gender`,`dob`,`age`,`course_id`) VALUES ("Harry","harry@gmail.com","boy",'1999-2-3',20,3);

INSERT INTO `courses`(`name`) VALUES 
('C Programming');
//inner join--same as join
select * from students inner join courses on students.course_id=courses.id;

select students.name,students.email,students.gender,courses.name as course from students`inner join `courses on students.course_id=courses.id;
//left join
select students.name,students.email,students.gender,courses.name as course from courses left  join students on students.course_id=courses.id;
--same as right join
--outer join(doesn't support) (left join right join unoin=outer join)

CREATE TABLE `course_student`(
    student_id INT UNSIGNED NOT NUll,
    course_id INT UNSIGNED NOT Null
);
SELECT students.name,students.email,students.gender,courses.name as course from students join course_student on students.id=course_student.student_id
JOIN courses on course_student.course_id=courses.id;

INSERT INTO course_student`(`student_id,`course_id`) VALUES
(1,1),
(1,2),
(2,1),
(2,3),
(3,3),
(4,2),
(4,1),
(5,2);

INSERT INTO tags (`name`,`created_at`,`updated_at`) VALUES ("education",now(),now()),("personal",now(),now());
INSERT INTO article_tag (`article_id`,`tag_id`,`created_at`,`updated_at`) VALUES (20,3,now(),now()),(20,4,now(),now());
UPDATE article_tag SET `tag_id`='3' where `id`=1;
