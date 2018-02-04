-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 04:00 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `born_in` varchar(200) NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `age`, `gender`, `born_in`, `about`) VALUES
(34, 'James Joyce', 76, 'Male', 'Dublin', 'James Augustine[1] Aloysius Joyce (2 February 1882 – 13 January 1941) was an Irish novelist, short story writer, and poet. He contributed to the modernist avant-garde and is regarded as one of the most influential and important authors of the 20th century. Joyce is best known for Ulysses (1922), a landmark work in which the episodes of Homer''s Odyssey are paralleled in a variety of literary styles, perhaps most prominently stream of consciousness. Other well-known works are the short-story collection Dubliners (1914), and the novels A Portrait of the Artist as a Young Man (1916) and Finnegans Wake (1939). His other writings include three books of poetry, a play, his published letters and occasional journalism.'),
(35, 'Marcel Proust', 89, 'Male', 'France', 'Valentin Louis Georges EugÃ¨ne Marcel Proust (/pruËst/;[1] French: [maÊsÉ›l pÊust]; 10 July 1871 â€“ 18 November 1922), known as Marcel Proust, was a French novelist, critic, and essayist best known for his monumental novel Ã€ la recherche du temps perdu (In Search of Lost Time; earlier rendered as Remembrance of Things Past), published in seven parts between 1913 and 1927. He is considered by critics and writers to be one of the most influential authors of the 20th century'),
(36, 'J K Rowling', 52, 'Female', 'Britain', ' J. K. Rowling and Robert Galbraith, is a British novelist, screenwriter, and producer who is best known for writing the Harry Potter fantasy series. The books have won multiple awards, and sold more than 400 million copies.[2] They have become the best-selling book series in history[3] and been the basis for a series of films, over which Rowling had overall approval on the scripts[4] and was a producer on the final films in the series.[5]\r\n\r\nBorn in Yate, Gloucestershire, England, Rowling was working as a researcher and bilingual secretary for Amnesty International when she conceived the idea for the Harry Potter series while on a delayed train from Manchester to London in 1990.[6] The seven-year period that followed saw the death of her mother, birth of her first child, divorce from her first husband and relative poverty until the first novel in the series, Harry Potter and the Philosopher''s Stone, was published in 1997. There were six sequels, of which the last, Harry Potter and the Deathly Hallows, was released in 2007. Since then, Rowling has written four books for adult readers: The Casual Vacancy (2012) andâ€”under the pseudonym Robert Galbraithâ€”the crime fiction novels The Cuckoo''s Calling (2013), The Silkworm (2014) and Career of Evil (2015)'),
(37, 'William Shakespeare', 90, 'Male', 'Warwickshire', 'William Shakespeare (/ËˆÊƒeÉªkspÉªÉ™r/; 26 April 1564 (baptised) â€“ 23 April 1616)[a] was an English poet, playwright and actor, widely regarded as the greatest writer in the English language and the world''s pre-eminent dramatist.[2][3][4] He is often called England''s national poet and the "Bard of Avon".[5][b] His extant works, including collaborations, consist of approximately 39 plays,[c] 154 sonnets, two long narrative poems and a few other verses, some of uncertain authorship. His plays have been translated into every major living language and are performed more often than those of any other playwright.[7]');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `author` int(30) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `name`, `author`, `description`) VALUES
(1, '978-3-16-148410-0', 'Remembrance of Things Past', 35, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'),
(2, '908876054876', 'Harry Potter and the Philosophers Stone', 36, 'Harry Potter and the Philosopher''s Stone is a fantasy novel written by British author J. K. Rowling. It is the first novel in the Harry Potter series and Rowling''s debut novel, first published in 1997 by Bloomsbury. It was published in the United States as Harry Potter and the Sorcerer''s Stone by Scholastic Corporation in 1998. The plot follows Harry Potter, a young wizard who discovers his magical heritage as he makes close friends and a few enemies in his first year at the Hogwarts School of Witchcraft and Wizardry. With the help of his friends, Harry faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry''s parents, but failed to kill Harry when he was just 15 months old.'),
(3, '90887643329876', 'Harry Potter and the Chamber of Secrets', 36, 'Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series. The plot follows Harry''s second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school''s corridors warn that the "Chamber of Secrets" has been opened and that the "heir of Slytherin" would kill all pupils who do not come from all-magical families. These threats are found after attacks which leave residents of the school "petrified" (frozen like stone). Throughout the year, Harry and his friends Ron and Hermione investigate the attacks.'),
(4, '90887641229876', 'Harry Potter and the Prisoner of Azkaban', 36, 'Harry Potter and the Prisoner of Azkaban is a fantasy novel written by British author J. K. Rowling and the third l in the Harry Potter series. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry. Along with friends Ronald Weasley and Hermione Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban who they believe is one of Lord Voldemort''s old allies.\r\n\r\nThe book was published in the United Kingdom on 8 July 1999 by Bloomsbury and in the United States on 8 September 1999 by Scholastic Inc.[1][2][3][4] Rowling found the book easy to write, finishing it just a year after she had begun writing it. The book sold 68,000 copies in just three days after its release in the United Kingdom and since has sold over three million in the country.[5] The book won the 1999 Whitbread Children''s Book Award, the Bram Stoker Award, and the 2000 Locus Award for Best Fantasy Novel, and was short-listed for other awards, including the Hugo.'),
(5, '9088123099876', 'Harry Potter and the Goblet of Fire', 36, 'Harry Potter and the Goblet of Fire is a fantasy book written by British author J. K. Rowling and the fourth novel in the Harry Potter series. It follows Harry Potter, a wizard in his fourth year at Hogwarts School of Witchcraft and Wizardry and the mystery surrounding the entry of Harry''s name into the Triwizard Tournament, in which he is forced to compete.\r\n\r\nThe book was published in the United Kingdom by Bloomsbury and in the United States by Scholastic; in both countries the release date was 8 July 2000, the first time a book in the series was published in both countries at the same time. The novel won a Hugo Award, the only Harry Potter novel to do so, in 2001. The book was made into a film, which was released worldwide on 18 November 2005, and a video game by Electronic Arts.'),
(6, '098745671234', 'Hamlet', 37, 'The Tragedy of Hamlet, Prince of Denmark, often shortened to Hamlet (/ËˆhÃ¦mlÉªt/), is a tragedy written by William Shakespeare at an uncertain date between 1599 and 1602. Set in Denmark, the play dramatises the revenge Prince Hamlet is called to wreak upon his uncle, Claudius, by the ghost of Hamlet''s father, King Hamlet. Claudius had murdered his own brother and seized the throne, also marrying his deceased brother''s widow.'),
(7, '098745671235', 'Romeo and Juliet', 37, 'Romeo and Juliet is a tragedy written by William Shakespeare early in his career about two young star-crossed lovers whose deaths ultimately reconcile their feuding families. It was among Shakespeare''s most popular plays during his lifetime and along with Hamlet, is one of his most frequently performed plays.'),
(8, '4567986541234', ' A Portrait of the Artist as a Young Man', 34, 'A Portrait of the Artist as a Young Man is the first novel by Irish writer James Joyce. A KÃ¼nstlerroman in a modernist style, it traces the religious and intellectual awakening of young Stephen Dedalus, a fictional alter ego of Joyce and an allusion to Daedalus, the consummate craftsman of Greek mythology. Stephen questions and rebels against the Catholic and Irish conventions under which he has grown, culminating in his self-exile from Ireland to Europe. The work uses techniques that Joyce developed more fully in Ulysses (1922) and Finnegans Wake (1939).\r\n\r\nA Portrait began life in 1904 as Stephen Heroâ€”a projected 63-chapter autobiographical novel in a realistic style. After 25 chapters, Joyce abandoned Stephen Hero in 1907 and set to reworking its themes and protagonist into a condensed five-chapter novel, dispensing with strict realism and making extensive use of free indirect speech that allows the reader to peer into Stephen''s developing consciousness. American modernist poet Ezra Pound had the novel serialised in the English literary magazine The Egoist in 1914 and 1915, and published as a book in 1916 by B. W. Huebsch of New York. The publication of A Portrait and the short story collection Dubliners (1914) earned Joyce a place at the forefront of literary modernism.'),
(9, '4567986541234', 'Finnegans Wake', 34, 'Finnegans Wake is a work of avant-garde comic fiction by Irish writer James Joyce. It is significant for its experimental style and reputation as one of the most difficult works of fiction in the English language.[1][2] Written in Paris over a period of seventeen years and published in 1939, two years before the author''s death, Finnegans Wake was Joyce''s final work. The entire book is written in a largely idiosyncratic language, which blends standard English lexical items and neologistic multilingual puns and portmanteau words to unique effect. Many critics believe the technique was Joyce''s attempt to recreate the experience of sleep and dreams.[3] Owing to the work''s expansive linguistic experiments, stream of consciousness writing style, literary allusions, free dream associations, and abandonment of narrative conventions, Finnegans Wake remains largely unread by the general public.'),
(10, '543278901234', 'The Prisoner', 35, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
