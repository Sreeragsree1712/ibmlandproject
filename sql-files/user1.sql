-- Database: `users`

-- Table structure for table `user1`

CREATE TABLE `user1` (
  `id` int(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `lno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `user1`

INSERT INTO `user1` (`id`, `username`, `passwd`, `name`, `phone`, `email`, `DOB`, `lno`) VALUES
(1, 'amal1234@gmail.com', '1234', 'amal s', '9934547526', 'amal1234@gmail.com', '05/04/2000', 7),
(4, 'john123@gmail.com', '123', 'john k', '9822849041', 'john123@gmail.com', '16/01/2000', 6),
(5, 'aji@gmail.com', '123', 'aji c b', '9878567423', 'aji@gmail.com', '21/03/1999', 3);
(6, 'sree@gmail.com', '0123', 'sreerag t', '9495179852', 'sree@gmail.com', '15/08/1984', 1);


ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `lno` (`lno`);

ALTER TABLE `user1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `user1`
  ADD CONSTRAINT `user1_ibfk_1` FOREIGN KEY (`lno`) REFERENCES `land` (`lno`);
COMMIT;

