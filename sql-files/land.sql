-- Database: `users`
-- Table structure for table `land`

CREATE TABLE `land` (
  `lno` int(10) NOT NULL,
  `loname` varchar(30) NOT NULL,
  `place` varchar(20) NOT NULL,
  `tax` varchar(5) NOT NULL,
  `area` varchar(10) NOT NULL,
  `ltype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserting data for table `land`

INSERT INTO `land` (`lno`, `loname`, `place`, `tax`, `area`, `ltype`) VALUES
(1, 'sreerag t', 'thrissur', '20000', '1500', 'residential area'),
(2, 'ajay k', 'kochi', '60000', '3000', 'institutional area'),
(3, 'aji c b', 'thrissur', '40000', '2000', 'industrial area'),
(4, 'amal s', 'thrisur', '30000', '2000', 'road greenbelt'),
(5, 'gokul k s', 'kochi', '30000', '1500', 'roadside'),
(6, 'john k', 'thrissur', '40000', '2500', 'park'),
(7, 'christ j', 'thrissur', '40000', '3000', 'forest'),
(8, 'binu m', 'kochi', '60000', '3000', 'institutional area');


ALTER TABLE `land`
  ADD PRIMARY KEY (`lno`);

ALTER TABLE `land`
  MODIFY `lno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;