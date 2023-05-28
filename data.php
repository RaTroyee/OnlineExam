CREATE TABLE IF NOT EXISTS `student_data` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `roll` varchar(255),
  `dept` varchar(255),
  `series` varchar(255),
  `sec` varchar(255), 
  `pass`  varchar(255),
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_data` (`roll`)
)




CREATE TABLE IF NOT EXISTS `teacher_data` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `dept` varchar(255),
  `email` varchar(255), 
  `pass`  varchar(255),
  PRIMARY KEY (`id`),
  UNIQUE KEY `teacher_data` (`email`)
)

//change by Troyee

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `no` varchar(700),
  `description` varchar(1000),
   `course` varchar(1000),
  `a` varchar(255), 
  `b` varchar(255), 
  `c` varchar(255), 
  `d` varchar(255), 
  `ans` varchar(255), 
  PRIMARY KEY (`id`),
  UNIQUE KEY `data` (`no`)
)


CREATE TABLE $course (
`id` int(8) NOT NULL AUTO_INCREMENT,
 `roll` varchar(1000),
 `marks` varchar(1000),
 `active` varchar(255),
 PRIMARY KEY (`id`) 
)
CREATE TABLE course (
`id` int(8) NOT NULL AUTO_INCREMENT,
 `coursename` varchar(1000),
 `section` varchar(1000),
   `date` date,
     `time` time,
 PRIMARY KEY (`id`) 
)














