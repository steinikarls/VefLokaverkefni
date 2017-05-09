-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2017 at 12:04 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext,
  `timasetning` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `timasetning`, `userid`) VALUES
(5, 'master', '<p>snilld</p>', 'Tuesday 2nd of May 2017 07:47:57 PM', NULL),
(10, 'This is not a test', '<p>&lt;form action="#" method="post"&gt;<br /> &lt;div&gt;<br /> &lt;label for="name"&gt;Text Input:&lt;/label&gt;<br /> &lt;input type="text" name="name" id="name" value="" tabindex="1" /&gt;<br /> &lt;/div&gt;</p>\r\n<p>&lt;div&gt;<br /> &lt;h4&gt;Radio Button Choice&lt;/h4&gt;</p>\r\n<p>&lt;label for="radio-choice-1"&gt;Choice 1&lt;/label&gt;<br /> &lt;input type="radio" name="radio-choice-1" id="radio-choice-1" tabindex="2" value="choice-1" /&gt;</p>\r\n<p>&lt;label for="radio-choice-2"&gt;Choice 2&lt;/label&gt;<br /> &lt;input type="radio" name="radio-choice-2" id="radio-choice-2" tabindex="3" value="choice-2" /&gt;<br /> &lt;/div&gt;</p>\r\n<p>&lt;div&gt;<br /> &lt;label for="select-choice"&gt;Select Dropdown Choice:&lt;/label&gt;<br /> &lt;select name="select-choice" id="select-choice"&gt;<br /> &lt;option value="Choice 1"&gt;Choice 1&lt;/option&gt;<br /> &lt;option value="Choice 2"&gt;Choice 2&lt;/option&gt;<br /> &lt;option value="Choice 3"&gt;Choice 3&lt;/option&gt;<br /> &lt;/select&gt;<br /> &lt;/div&gt;</p>\r\n<p>&lt;div&gt;<br /> &lt;label for="textarea"&gt;Textarea:&lt;/label&gt;<br /> &lt;textarea cols="40" rows="8" name="textarea" id="textarea"&gt;&lt;/textarea&gt;<br /> &lt;/div&gt;</p>\r\n<p>&lt;div&gt;<br /> &lt;label for="checkbox"&gt;Checkbox:&lt;/label&gt;<br /> &lt;input type="checkbox" name="checkbox" id="checkbox" /&gt;<br /> &lt;/div&gt;</p>\r\n<p>&lt;div&gt;<br /> &lt;input type="submit" value="Submit" /&gt;<br /> &lt;/div&gt;<br />&lt;/form&gt;</p>', 'Wednesday 3rd of May 2017 01:30:29 PM', NULL),
(11, 'Eitthvað', '<p><strong></strong><strong></strong></p>\r\n<table style="height: 230px;" width="616">\r\n<tbody>\r\n<tr>\r\n<td style="width: 95px;">1</td>\r\n<td style="width: 96px;">2</td>\r\n<td style="width: 96px;">3</td>\r\n<td style="width: 96px;">4</td>\r\n<td style="width: 96px;">5</td>\r\n<td style="width: 97px;">6</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">7</td>\r\n<td style="width: 96px;">8</td>\r\n<td style="width: 96px;">9</td>\r\n<td style="width: 96px;">10</td>\r\n<td style="width: 96px;">11</td>\r\n<td style="width: 97px;">12</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">13</td>\r\n<td style="width: 96px;">14</td>\r\n<td style="width: 96px;">15</td>\r\n<td style="width: 96px;">16</td>\r\n<td style="width: 96px;">17</td>\r\n<td style="width: 97px;">18</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">19</td>\r\n<td style="width: 96px;">20</td>\r\n<td style="width: 96px;">21</td>\r\n<td style="width: 96px;">22</td>\r\n<td style="width: 96px;">23</td>\r\n<td style="width: 97px;">24</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">25</td>\r\n<td style="width: 96px;">26</td>\r\n<td style="width: 96px;">27</td>\r\n<td style="width: 96px;">28</td>\r\n<td style="width: 96px;">29</td>\r\n<td style="width: 97px;">30</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">31</td>\r\n<td style="width: 96px;">32</td>\r\n<td style="width: 96px;">33</td>\r\n<td style="width: 96px;">34</td>\r\n<td style="width: 96px;">35</td>\r\n<td style="width: 97px;">36</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">37</td>\r\n<td style="width: 96px;">38</td>\r\n<td style="width: 96px;">39</td>\r\n<td style="width: 96px;">40</td>\r\n<td style="width: 96px;">41</td>\r\n<td style="width: 97px;">42</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">43</td>\r\n<td style="width: 96px;">44</td>\r\n<td style="width: 96px;">45</td>\r\n<td style="width: 96px;">46</td>\r\n<td style="width: 96px;">47</td>\r\n<td style="width: 97px;">48</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">49</td>\r\n<td style="width: 96px;">50</td>\r\n<td style="width: 96px;">51</td>\r\n<td style="width: 96px;">52</td>\r\n<td style="width: 96px;">5535</td>\r\n<td style="width: 97px;">465465465465</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">456</td>\r\n<td style="width: 96px;">46</td>\r\n<td style="width: 96px;">456</td>\r\n<td style="width: 96px;">5</td>\r\n<td style="width: 96px;">6</td>\r\n<td style="width: 97px;">46</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">6</td>\r\n<td style="width: 96px;">6</td>\r\n<td style="width: 96px;">65</td>\r\n<td style="width: 96px;">6</td>\r\n<td style="width: 96px;">5</td>\r\n<td style="width: 97px;">56</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">56</td>\r\n<td style="width: 96px;">6</td>\r\n<td style="width: 96px;">66</td>\r\n<td style="width: 96px;">6</td>\r\n<td style="width: 96px;">56</td>\r\n<td style="width: 97px;">6556</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">56</td>\r\n<td style="width: 96px;">56</td>\r\n<td style="width: 96px;">566</td>\r\n<td style="width: 96px;">65</td>\r\n<td style="width: 96px;">56</td>\r\n<td style="width: 97px;">65</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">5</td>\r\n<td style="width: 96px;">55</td>\r\n<td style="width: 96px;">656</td>\r\n<td style="width: 96px;">56</td>\r\n<td style="width: 96px;">56</td>\r\n<td style="width: 97px;">56</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">5665</td>\r\n<td style="width: 96px;">65</td>\r\n<td style="width: 96px;">6</td>\r\n<td style="width: 96px;">5665</td>\r\n<td style="width: 96px;">65</td>\r\n<td style="width: 97px;">5</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 95px;">&nbsp;</td>\r\n<td style="width: 96px;">&nbsp;</td>\r\n<td style="width: 96px;">&nbsp;</td>\r\n<td style="width: 96px;">&nbsp;</td>\r\n<td style="width: 96px;">&nbsp;</td>\r\n<td style="width: 97px;">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Wednesday 3rd of May 2017 01:32:16 PM', NULL),
(13, 'Loren Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n<p><img src="http://random-ize.com/lorem-ipsum-generators/lorem-ipsum/lorem-ipsum.jpg" alt="Loren Ipsum" width="400" height="400" /><iframe src="//www.youtube.com/embed/tac55PdUmf8" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>', 'Friday 5th of May 2017 02:06:49 PM', 'steini'),
(14, 'hhh', '<p style="padding-left: 30px;">ghjgj</p>', 'Tuesday 9th of May 2017 12:02:51 PM', 'steini');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passwd`, `admin`) VALUES
(1, 'test', '$2y$10$RCCdHlypxfGAb./tzloLWe4yxsXnB9CJe/98BxNrugCGua1ddDjGe', 0),
(3, 'steini', '$2y$10$f6h76TxmWgXs6tzeje2yyOs3xBNqAfgAasmHm8A2CKzaXK.KDkFRG', 0),
(4, 'dabbi', '$2y$10$sK8ifWOTNcK2gqrUAhP6vOvRgfV76ViuAwWJ7qX78tmO1dK0p64cO', 0),
(5, 'Stefán Freyr Smárason', '$2y$10$knCOydg.Fqii.vJlLWluKegYXABn6VSNS1upQ6KaoOiJ8AHxjdNoS', 0),
(6, 'syning', '$2y$10$xX0ndloWs.nRJzSw7Q9OBeLCRdiOgLYVdvGEyhSQGr4bzVtF2djx6', 0),
(7, 'steini', '$2y$10$5zjbzYPye5uWJJcJjFCHG.3JJT83bcW/XqD0Tt2X9b.u3CHAOBRe6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
