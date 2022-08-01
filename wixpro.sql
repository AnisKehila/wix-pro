-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 07:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wixpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article` longtext NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `blog_id`, `user_id`, `article`, `article_title`, `created_at`, `category`) VALUES
(3, 4, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione saepe quibusdam quo atque, reiciendis error cupiditate ipsa culpa enim minima fugit beatae tempora? Nam quae modi quaerat velit sequi!', 'try another one baby', '2022-06-30', 'animals'),
(4, 20, 36, 'Cats & Dogs is a 2001 spy-comedy film directed by Lawrence Guterman and written by John Requa and Glenn Ficarra. It stars Jeff Goldblum, Elizabeth Perkins, and Alexander Pollock, with the voices of (among others) Tobey Maguire, Alec Baldwin, Sean Hayes, Susan Sarandon, Charlton Heston, and Jon Lovitz, Joe Pantoliano, and Michael Clarke Duncan. The story centers on the relationships between cats and dogs, depicting the relationship as an intense rivalry in which both sides use organizations and tactics that mirror those used in human espionage. It was released by Warner Bros. Pictures on July 4, 2001. The film received mixed reviews and earned $200.7 million on a $60 million budget.\r\nThe Brody family&#39;s pet Bloodhound Buddy chases a cat and is captured by other cats in an ambush. Cats and dogs are revealed to be brilliant, tech-savvy enemies capable of speech, waging war with covert operatives while concealing their true nature from humans. After an Anatolian Shepherd dog named Butch reports Buddy&#39;s capture to his superiors, the best canine agents are dispatched to complete Buddy&#39;s mission: to prevent the cats from making all humans allergic to dogs.\r\n\r\nAt a local barn, a litter of Beagle puppies mocks their youngest brother for trying to escape captivity. A Doberman Pinscher agent replaces the litter with a pack of Miniature Pinscher agents, failing to notice the youngest Beagle. Carolyn, the Brodys’ matriarch, arrives to adopt a new dog and selects the Beagle, naming him Lou after her son Scotty sarcastically suggests the name &#34;Loser&#34;.\r\n\r\nAfter detonating an explosive trap laid by cats for Lou, Butch – mistaking him for a trained operative – brings him to the dogs’ underground network, and introduces agents Peek, a Chinese Crested Dog, and Sam, an Old English Sheepdog. Realizing Lou is a civilian, Butch raises his concerns to his superiors but is rebuffed. Lou is briefed on the origins of the conflict between cats and dogs, dating back to Ancient Egypt when cats ruled the world. Butch reveals that Buddy has escaped the cats and the spy trade, retiring to a condo in Boca Raton.\r\n\r\nMeanwhile, Mr. Tinkles, a white Persian cat, plans to exploit the Brodys’ patriarch Professor Charles’ research on dog allergies to conquer the world. His scheming is interrupted by Sophie, his comatose owner&#39;s maid, who enjoys dressing Tinkles in embarrassing costumes. Tinkles orders his sidekick Calico, an Exotic Shorthair, to send Devon Rex ninjas to steal the research. Lou foils the theft and meets a former agent and Butch&#39;s ex-girlfriend Ivy, a Saluki who encourages him to bond with Scotty.\r\n\r\nMr. Tinkles contracts a Russian Blue mercenary named Dimitri Kennelkoff, who tricks Lou and places a bomb on Brody&#39;s lab door. Kennelkoff battles Lou and Butch, damaging the Brodys’ house until Butch disables the bomb and captures Kennelkoff. During the interrogation, the dogs recover a note by Mr. Tinkles from Kennelkoff&#39;s stomach.\r\n\r\nAfter a breakthrough involving Lou playing with Scotty, Charles&#39; machine finally finds the formula to a cure for human allergies to dogs. Having bugged the house, Mr. Tinkles, and Calico spring a trap for the Brodys. First, Mr. Tinkles travels to a Christmas tree flocking plant under the guise of the plant&#39;s comatose owner, Mr. Mason, and sends the employees home, then lures the Brodys with fake tickets to a soccer exhibition game, capturing the family.\r\n\r\nThe dogs receive a video from Mr. Tinkles demanding Charles’ research as a ransom for the Brodys, and dogs around the world assemble at a meeting, led by a Mastiff. When the assembly decides not to surrender the formula, Lou confronts Butch. Revealing that he was abandoned by his owner, the unsympathetic Butch leaves Lou behind. Desperate, Lou brings Mr. Tinkles the research and is double-crossed. Butch, realizing what has happened, stages a raid of Mr. Tinkles&#39; factory where mice are being prepared to spread the mass-produced allergy.\r\n\r\nWhile Butch, Ivy, Peek, and Sam fight Tinkles&#39; cat forces, Lou frees the Brodys and Calico, betrayed by Tinkles, revealing to the family that he can speak. Lou defeats Tinkles but is struck by an excavator as an explosion destroys the whole factory. Butch rescues the seemingly dead Lou, tearfully admitting that Lou was right to love his adoptive family, and Lou awakens. He returns to a normal pet life with the Brodys until he can serve as a full-grown agent.\r\n\r\nMeanwhile, Tinkles is sent to live with Sophie and her three sisters, with even more humiliating outfits as punishment for his actions against the dogs.', 'Cats & Dogs', '2022-07-03', 'animals'),
(5, 3, 30, 'lalzamz\r\nkaka', 'llo', '2022-07-04', 'animals'),
(6, 11, 30, 'holaa', 'Hii', '2022-07-05', 'story'),
(7, 15, 30, '<h1>Algeria top places to visit in 2021</h1>', 'Algeria top places to visit in 2021', '2022-07-05', 'story'),
(8, 15, 30, '\"DELETE FROM `articles` WHERE `articles`.`article_id` = 6\"', '', '2022-07-05', 'story'),
(11, 9, 30, 'fuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuck', 'just me', '2022-07-05', ''),
(12, 23, 37, 'aaa', 'kko', '2022-07-05', ''),
(13, 22, 37, 'aa', '', '2022-07-05', ''),
(14, 22, 37, 'aaaaaaaaa', '', '2022-07-05', ''),
(16, 3, 30, 'Anis nice edit mdfakker', 'edited', '2022-07-07', 'edit');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `theme` int(11) NOT NULL,
  `blog_created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`user_id`, `blog_id`, `blog_title`, `theme`, `blog_created_at`) VALUES
(30, 3, 'Dogs & cats', 0, '2022-06-28'),
(30, 4, '5 Tips That Quickly Increase Your Online Search Ranking', 0, '2022-06-25'),
(30, 5, 'dadada', 0, '2022-06-29'),
(30, 6, 'Cool', 0, '2022-06-29'),
(30, 7, 'Greatblog', 0, '2022-06-29'),
(30, 8, 'test', 0, '2022-06-29'),
(30, 9, 'coolaa', 0, '2022-06-29'),
(30, 10, 'kkkaaa', 0, '2022-06-29'),
(30, 11, 'kkkaaas', 0, '2022-06-29'),
(30, 12, 'dv', 0, '2022-06-29'),
(30, 13, 'lmao', 0, '2022-06-29'),
(30, 14, 'wiwo', 0, '2022-06-29'),
(30, 15, 'll', 0, '2022-06-29'),
(32, 16, 'aa', 0, '2022-06-30'),
(33, 17, 'korabika', 0, '2022-06-30'),
(34, 18, 'hi', 0, '2022-06-30'),
(35, 19, '11', 0, '2022-06-30'),
(36, 20, 'Cats & dogs', 0, '2022-07-03'),
(36, 21, 'Lions', 0, '2022-07-03'),
(37, 22, 'hola', 0, '2022-07-05'),
(37, 23, 'creat', 0, '2022-07-05'),
(38, 24, 'pooop', 0, '2022-07-05'),
(30, 25, 'lll', 0, '2022-07-05'),
(30, 26, 'poop', 0, '2022-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `comment_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `article_id`, `comment_name`, `comment`, `comment_date`) VALUES
(1, 5, 'Anis', 'hola!,comon to ta palle', '2022-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_reg` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date_reg`, `email`) VALUES
(28, 'lala', '$2y$10$cwj6AOOgkDuon6mmKTAKH.ZWaNbp07K4edxxY3b7yCU.EFjpnsylO', '2022-06-24', 'lala@go'),
(29, 'anos', '$2y$10$HN64sXthyNG2/c.7nhWGl.Sr.cfSsPOcenl0XflRtKu3gMVrBhOhy', '2022-06-24', 'anos@kk'),
(30, 'admin', '$2y$10$e8yB6K0yNSo98ofDW92CQ.e.Jn2MsL.hisUf6fSe9gOpyJAzVjmJG', '2022-06-24', 'adm@in'),
(31, 'moh', '$2y$10$2m4xXilpYreGKtwNmvCCA.TmdOkGRJqeE23gS5un1Q1KnXgMntO6i', '2022-06-29', 'moh@lok'),
(32, 'test', '$2y$10$3WHMigP95dW5I11wet05EuD8TNKNE9oJYUZDWlinnVrrwexDj7Fe.', '2022-06-29', 'test@123'),
(33, 'tosta', '$2y$10$Mu9vXsk0HuFSFwjiPDIJrOq/9GLANi8FvLtmzcPbMNyCOWNtKJn8K', '2022-06-30', 'tosta@aa'),
(34, 'lol', '$2y$10$6W/4FXMeg44JX9fMFO00gOuGVDvNXs/8UCtv1SNwkiJcfzs5OjQiC', '2022-06-30', 'lol@lol'),
(35, 'kaka', '$2y$10$LvUqzWphlrQDJ5cbNGHN/.1kJqOzLXYAynF8r0W5OCIaaGIkvCJey', '2022-06-30', 'kiki@aa'),
(36, 'Mohammed anis', '$2y$10$6V6/T6FGFV2wnbV.E5Ey/u.isVSgCst3BTOopER07.Q6caMJiKiXu', '2022-07-03', 'anismoh@gmail.com'),
(37, 'testacc', '$2y$10$hWyn38O3CeLkID1ghkhof.9GFD7k/fNYFcxoaVYWwDqMjDPc3GIw.', '2022-07-05', 'test@acc'),
(38, 'pop', '$2y$10$2L7C862lfivKtSChCthT7.0us0KAJQwLJACJWmHrS22Z/ZL4K29gu', '2022-07-05', 'pop@pop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
