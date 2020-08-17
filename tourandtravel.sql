-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 17, 2020 at 01:18 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourandtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `code` varchar(30) NOT NULL,
  `off` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`code`, `off`) VALUES
('avanish120', 10),
('emr130', 15),
('Honey', 40),
('saurabh_summer_break', 50),
('Silver', 25),
('Super', 33),
('TOUR20', 20),
('utsav001', 12);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  `coupon` varchar(256) DEFAULT NULL,
  `image` varchar(256) NOT NULL,
  `detail` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `price`, `coupon`, `image`, `detail`, `description`) VALUES
(3, 'Amazing Andaman', 25599, 'Grnd16120', 'andaman.jpg', '<p>Andaman Islands are one of the most desired tourist destinations and boast gorgeous beaches, a fascinating ecosystem, natural wonders, and friendly locals. Discover the undying charm of the Andaman islands during this 3-day trip with Us.&nbsp; You first reach its capital - Port Blair, which is the gateway to other fascinating islands.Begin by basking in the beauty of Corbyn&rsquo;s Cove Beach. Unwind at Radhanagar Beach later immerse in the tranquility of Neil Island. You can be assured of the best of accommodation and a well-planned itinerary when you book with Us. So go ahead and book now to enjoy a great vacation.</p>', '<p style=\"text-align: center;\"><strong><span style=\"text-decoration: underline;\">Trip Highlights </span></strong></p>\r\n<div class=\"row\">\r\n<ul class=\"pkghigh\">\r\n<li>Visit Victoria memorial, Indian Museum and Dakshineswar Kali Temple at Kolkata</li>\r\n<li>Enjoy Scuba Diving, Snorkelling, and Jet ski at Havelock Island</li>\r\n<li>See captivating life and live corals reefs</li>\r\n<li>Enjoy Boat Cruise at Port Blair</li>\r\n<li>Enjoy Evening Light &amp; Sound Show at Cellular Jail</li>\r\n<li>Explore the scenic Ross Island and North Bay Island</li>\r\n<li>Visit the Mount Harriet National Park</li>\r\n</ul>\r\n<p style=\"text-align: center;\"><strong><span style=\"text-decoration: underline;\">Itinerary Details</span></strong></p>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 1: <strong>Arrival at Port Blair</strong></div>\r\n<div class=\"itinerary-dayinfo\">\r\n<p style=\"display: block;\">Upon your arrival in Port Blair in the morning/afternoon, meet our tour representative who assists you in smooth transfer to the hotel in Port Blair. On arrival, check in at the hotel. Rest for a while.</p>\r\n<p style=\"display: block;\"><strong>Port Blair:</strong> For centuries, the Andaman and Nicobar Islands were cloaked in mystery due to their inaccessibility. These islands are shimmering like emeralds in the Bay of Bengal and present a scenic and picturesque landscape. The dense forests cover these islands and the innumerable exotic flowers &amp; birds create a romantic and lovely atmosphere.</p>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 2: <strong>Port Blair - Havelock by Ferry (2.5 Hour)</strong>The day starts early. You board the morning ferry from Port Blair to Havelock Island. In the evening, you visit the popular Radhanagar Beach, which is also known as Beach No 7. It was also been rated as the \'Best Beach in Asia\' by the Time Magazine. Back to the hotel for unwinding.</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 3: <strong>Havelock (excursion to Elephant Beach) </strong></div>\r\n<div class=\"itinerary-dayinfo\">Get into the snorkeling gear and get all set to explore the colorful underwater world. The reef close to the shore is around 1 meter deep and the larger reef is formed by an amazing variety of corals and marine life.</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 4: <strong>Havelock - Neil Island </strong><strong>- Port Blair</strong>On arrival, you will be transferred to the respective hotels for check-in. In the evening, enjoy visit to the very popular Bharatpur beach and Laxmanpur Beach.</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 5: <strong>Departure from Port Blair</strong></div>\r\nToday, you will say final goodbye to the city of Port Blair. Later, check out of the hotel and get transferred to the airport for journey back home.</div>'),
(4, 'Beauty of Kashmir', 11999, 'utsav001', 'kashmir.jpg', '<p>Kashmir, fondly referred to as the &lsquo;Heaven on Earth&rsquo;, is one of the most sought-after holiday destinations in India. The mighty Himalayas, high-altitude lakes, pleasant climate, lush well-maintained gardens, floral meadows and a pleasant climate allure tourists from worldwide both in summers and winters in crazy numbers. Pick Kashmir-e-Kashmir, a well-planned itinerary to experience the best of sights and sounds of Kashmir. During this short itinerary of 3 nights and 4 days, explore the popular tourist destination of Kashmir like Srinagar, Pahalgam and Gulmarg while enjoying the pleasant weather and the enchanting scenery</p>', '<p style=\"text-align: center;\"><strong><span style=\"text-decoration: underline;\">Trip Highlights </span></strong></p>\r\n<div class=\"row\">\r\n<ul class=\"pkghigh\">\r\n<li>Visit to Mughal Gardens of Srinagar</li>\r\n<li>Take Shikara Ride on Dal Lake</li>\r\n<li>Houseboat stay</li>\r\n<li>Cable car ride in Gulmarg</li>\r\n<li>A day&rsquo;s trip to Avantipur Ruins in Pahalgam</li>\r\n</ul>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"pkgtour-head text-center\" style=\"text-align: center;\"><strong><a name=\"Itinerary\"></a><span style=\"text-decoration: underline;\">Itinerary Details</span></strong></div>\r\n<p>&nbsp;</p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 1: <strong>Arrival in Srinagar</strong>\r\n<div class=\"expBut\">The list of attractions includes gardens of Srinagar- Mughal Gardens, Chashmi-e Shahi (The Royal Spring), Nishat Bagh (The Garden of pleasure) Shalimar Bagh (Abode of love).The evening is scheduled for a memorable Shikara Ride in famous Dal Lake.</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 2: <strong>Srinagar - Gulmarg - Srinagar</strong>\r\n<div class=\"expBut\">A visit to Gulmarg will surely be refreshing and memorable. It has been a holiday resort from the days of the British. The road from Srinagar to Gulmarg is festooned with beautiful white and purple flowers. Enjoy the scenery.</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 3: <strong>Srinagar - Pahalgam - Srinagar</strong>\r\n<div class=\"expBut\">Pahalgam, a beautiful hill town of Kashmir, covered with lush greenery.On arrival, explore the popular tourist attractions of Pahalgam.</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 4: <strong>Departure from Srinagar</strong>\r\n<div class=\"expBut\">&nbsp;</div>\r\n</div>\r\n<div class=\"itinerary-dayinfo\">\r\n<div class=\"expBut\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>'),
(5, 'Bhopal Pachmarhi & Sanchi Tour', 9000, 'Silver', 'Monks_visiting_the_Sanchi_Stupa.jpg', '<p>Madhya Pradesh is the second largest state in India. Located in the heart of Central India, the state is quite popular for tourism as it abounds with historical places, spiritual destinations and wildlife.</p>\r\n<p>Exploring the multihued allures of this state will be a fascinating experience. The journey will cover some popular destinations such as Bhopal, Pachmarhi, Sanchi and Udaigiri among others. Read the itinerary given below for your kind perusal.</p>', '<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 1: <strong>Arrival Bhopal</strong>\r\n<div class=\"expBut\">-</div>\r\n</div>\r\n<p>On reaching Bhopal, meet our IHPL representative who will help you take a transfer to the hotel. Check-in to the hotel and freshen up. Spend the rest of the day at leisure or you can go for a leisure walk around the place. Return to the hotel and stay overnight at the hotel.</p>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 2: <strong>Sanchi - Bhopal Sightseeing<br /> </strong>\r\n<div class=\"expBut\">-</div>\r\n</div>\r\n<p>After having your breakfast, leave for a sightseeing tour around Bhopal. You can begin with a visit to one of the oldest stupas of India, &lsquo;Sanchi Stupa&rsquo; that was built 2000 years ago. In the afternoon, pay a visit to other attractions of Bhopal, including Moti Masjid, Sadar Manzil and the Upper &amp; Lower Lakes. Stay overnight at the hotel.</p>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 3: <strong>Bhopal - Pachmarhi</strong>\r\n<div class=\"expBut\">-</div>\r\n</div>\r\n<p>This morning, you take a transfer to your next destination, Pachmarhi. Drive towards Pachmarhi, which is located at a distance of 200 km. On reaching, check into the hotel. After you take some rest, leave for sightseeing. Visit Bee Fall, Fairy Pool, Handi Khoh and Dhoopgarh. In the evening, you can visit the Padmini Lake and enjoy boating, horse ride or camel ride. Later, return to the hotel and have a comfortable stay at night.</p>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 4: <strong>Pachmarhi &ndash; Bhopal</strong>\r\n<div class=\"expBut\">-</div>\r\n</div>\r\n<p>After having your breakfast, leave for Bhopal. On arrival in Bhopal, check-in to the hotel and freshen up. Later, you can leave for sightseeing at Shaukat Mahal, Gauhar Mahal and National Museum of Mankind or spend the day at leisure. In the evening, return back to the hotel for dinner and stay overnight.</p>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 5: <strong>Bhopal (departure)</strong>\r\n<div class=\"expBut\">-</div>\r\n</div>\r\n<p>Munch your breakfast and then take a transfer to the airport/ railway station and carry on with your onward journey. The tour ends here.</p>\r\n</div>'),
(6, 'Serene Sikkim!', 19000, 'Silver', 'sikkim.jpg', '<p>This 4-day trip will take you to some hidden gems of Sikkim and Darjeeling. Sikkim is a paradise with scenic destinations and rich culture. A perfect hideout from the hustle and bustle of the city life, this state offers an array of adventure and history to every traveller. When in Sikkim, visit Lachen, Yumthang Valley and Changu Lake. Then, head to Darjeeling, a wonderful town with picturesque landscapes, beautiful weather and vast tea plantations. You can explore the Tibetan influence in the craft, culture and cuisine of Darjeeling. Some of the must-visit places in Darjeeling are Tiger Hills, Batasi loop, Ghum Monastery, Padmaja Naidu Himalaya Zoological Park, Himalayan Mountaineering Institute, Tea Garden, Tenzing Rock, Tibetan Refugee Self Help Center, Japanese Temple, Peace Pagoda and Ropeway.</p>', '<p style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><strong>Trip Highlights </strong></span></p>\r\n<div class=\"row\">\r\n<ul class=\"pkghigh\">\r\n<li>Visit Lachung Monastery, Rhododendron forest, Waterfall</li>\r\n<li>Explore Directorate of Handicraft &amp; Handloom &amp; Flower Show</li>\r\n<li>Sight Seeing at Yumthang (Zero Point) and the famous hot spring</li>\r\n<li>Excursion to Yak ride at Tsomgo Lake &amp; Baba Mandir</li>\r\n<li>Shopping at M G Road (Mall)</li>\r\n<li>Lovely view the Shingbha wildlife sanctuary, Chopta Valley and Thangu</li>\r\n<li>Enjoy a fun cable car ride in Gangtok</li>\r\n</ul>\r\n<p style=\"text-align: center;\"><strong><span style=\"text-decoration: underline;\">Itinerary Details</span></strong></p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 1: <strong>Arrival and Transfer to Gangtok </strong>\r\n<div class=\"expBut\">Nestled at a height of 1670 meters (5480 feet), Gangtok is the capital of Sikkim. The beautiful hill station is a land of tranquility, adventure, monasteries, mystic rituals &amp; festivals and natural beauty.</div>\r\n<div class=\"expBut\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 2: <strong>Excursion to Tsomgo Lake &amp; Baba Mandir (Full Day)</strong>\r\n<div class=\"expBut\">Baba Mandir is another sight to visit. The temple is name after an army man; Baba Harbhajan Singh who sacrificed his life for the nation. Hailed as \"Hero of Nathula\" the Sikh is revered as a deity.</div>\r\n<div class=\"expBut\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"pkgtour-days\">Day 3: <strong>Sight Seeing at Yumthang &amp; Drive to Gangtok </strong>\r\n<div class=\"itinerary-dayinfo\">\r\n<div class=\"expBut\">Lachung is another major town of North Sikkim. Nearly 50 kilometers, the 2 hours\' drive is awe inspiring. The town is generally considered at gateway to Yumthang but the beauty and charm is amazing</div>\r\n<div class=\"expBut\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 4: <strong>Journey back home</strong>\r\n<div class=\"expBut\">Return home with cherished memories of Sikkim tour.</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-12\">\r\n<div class=\"pkgtour-textwrap\">\r\n<div class=\"pkgtour-head text-center\"><a name=\"Price\"></a></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<div id=\"quickContactForm\" style=\"text-align: center; clear: both; height: 450px; position: fixed; top: 0px;\"><br /> <ins class=\"adsbygoogle\" style=\"display: block;\" data-ad-client=\"ca-pub-5804222493114118\" data-ad-slot=\"7457080568\" data-ad-format=\"auto\" data-adsbygoogle-status=\"done\"></ins></div>\r\n</div>\r\n</div>'),
(7, ' Gorgeous Goa', 13999, 'utsav001', 'goa.jpg', '<p>The package is an ideal option for holidaymakers to enjoy the sun, sand and surf.</p>\r\n<p>The journey will start with the exploration of Old Goa churches such as The Basilica of Bom Jesus and Chapel of St. Francis Xavier. Later, you will visit the famous North Goa beaches such as Anjuna, Baga and Calangute beach.</p>\r\n<p>The final day of this tour is dedicated to the exploration of Colva Beach, a popular place in South Goa. Read the itinerary given below.</p>', '<p style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><strong>Trip Highlights </strong></span></p>\r\n<div class=\"row\">\r\n<ul class=\"pkghigh\">\r\n<li>Visit the Old Goa churches such as Basilica of Bom Jesus and Chapel of St. Francis Xavier.</li>\r\n<li>Visit the North Goa beaches- Anjuna, Baga and Calangute.</li>\r\n<li>Enjoy the party scene at Tito&rsquo;s Bar.</li>\r\n<li>Visit the famous Fort Aguada.</li>\r\n<li>Visit the local markets of Anjuna-traditional jewelry, handicrafts and souvenirs.</li>\r\n<li>Visit the Colva Beach.</li>\r\n</ul>\r\n<p style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><strong>Itinerary Details </strong></span></p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 1 - <strong>Goa</strong></div>\r\n<div class=\"itinerary-dayinfo\" style=\"text-align: left;\">The first day of your Goa trip will acquaint you with the rich Portuguese culture and heritage of this tiny Indian state. There are several remnants in Old Goa in the form of century old cathedrals such as Basilica of Bom Jesus and Chapel of St. Francis Xavier.</div>\r\n<div class=\"itinerary-dayinfo\" style=\"text-align: left;\">Post sightseeing, return to the hotel for dinner and night stay.</div>\r\n<div class=\"itinerary-dayinfo\" style=\"text-align: left;\">&nbsp;</div>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 2 - <strong>Goa</strong></div>\r\n<div class=\"itinerary-dayinfo\">&nbsp;The 2<sup>nd</sup>&nbsp;day of your Goa Trip will make you experience the nightlife of Goa.&nbsp;Proceed towards the Tito&rsquo;s bar, one of the most happening party places in Goa to enjoy the vibrant nightlife. Besides, you can also visit the Ingo&rsquo;s Saturday Night Bazaar famous for shopping.Dinner and overnight stay in Goa.</div>\r\n<div class=\"itinerary-dayinfo\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">Day 3 - <strong>Goa</strong></div>\r\n<div class=\"row\">\r\n<p>On the 3<sup>rd</sup> day of your Goa Trip, you will head straight towards South Goa. Colva is a popular beach in South Goa. The beach is home to shacks, resort complexes, tourist cottages, discos and eateries.</p>\r\n<p>Have some fun and laze around as the day will mark the end of your holiday in Goa.</p>\r\n<p>You will be assisted in smooth transfer to the Goa airport/railway station to board flight/train for onwards journey.</p>\r\n</div>'),
(8, 'Kerala - A Lovers paradise', 15999, 'emr130', 'kerala.jpg', '<p>Kerala, popularly known and believed as God\'s Own Country. This 4 nights and 5 days holiday tour to one of the famous city of Cochin will give you a chance to houseboat in Alleppey and Quilon. Enjoy sightseeing in Cochin, Kumarakom as well as Alleppey. You are going to have a pleasant stay during this vacation.</p>', '<div class=\"col-lg-12\">\r\n<div class=\"pkgtour-textwrap\">\r\n<div class=\"pkgtour-head text-center\" style=\"text-align: center;\"><a name=\"Highlights\"></a><span style=\"text-decoration: underline;\"><strong>Trip Highlights</strong></span></div>\r\n<div class=\"row\">\r\n<ul class=\"pkghigh\">\r\n<li>Visit Mattancherry Palace, Cochin</li>\r\n<li>Bird watching at Kumarakom bird sanctuary</li>\r\n<li>Boat ride across the Vemband Lake</li>\r\n<li>Overnight stay in a houseboat in Alleppey</li>\r\n<li>Excursion to Alumkadavu, near Quilon</li>\r\n</ul>\r\n<p style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><strong>Itinerary Details </strong></span></p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 1: <strong>Cochin</strong>\r\n<div class=\"expBut\">Upon arrival at Cochin Airport, meet our airport representative as you exit the arrival terminal for an assisted transfer to the hotel. Later cover the tourist attractions of Cochin where you will visit, the oldest Synagogue, Chinese fishing nets, St Francis Church and Mattancherry Palace. Stay overnight at the city hotel.</div>\r\n<div class=\"expBut\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 2: <strong>Kumarakom</strong>\r\n<div class=\"expBut\">Start your road journey to Kumarakom. On arrival, check into the hotel. During sightseeing, visit the other famous attractions along with Kumarakom Bird Sanctuary. Overnight stay at the hotel.</div>\r\n<div class=\"expBut\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 3: <strong>Alleppey</strong>\r\n<div class=\"expBut\">Enjoy an early morning luxurious ride across the Vemband Lake in a houseboat. Pullover at our partner resort at Alleppey. Enjoy sightseeing. Overnight stay in the hotel.</div>\r\n</div>\r\n<div class=\"itinerary-dayinfo\">&nbsp;</div>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 4: <strong>Quilon</strong>\r\n<div class=\"expBut\">The morning of Day 4 is free for leisure activities. Later, embark on a houseboat to travel to Quilon, also called Kollam. You will be passing through the small canals. On arrival, go for an excursion to Alumkadavu, the Houseboat jetty. Staying overnight in the houseboat.</div>\r\n<div class=\"expBut\">&nbsp;</div>\r\n</div>\r\n</div>\r\nDay 5: <strong>Kollam - Trivandrum</strong></div>\r\n<div class=\"row\">Post breakfast, drive to Trivandrum airport for boarding a flight to your onward destination.</div>\r\n</div>\r\n</div>'),
(9, 'Shimla Manali Honeymoon ', 15000, 'Honey', 'Shimala.jpg', '<p>The hill towns of the popular state of Himachal Pradesh are a favorite honeymoon spot, worldwide, flocked by a large number of honeymooners every year. Shimla Manali honeymoon tour for 6 nights and 7 days will offer you an excellent chance to know each other while exploring famous hill stations on Shimla and Manali.<br /><br />The tour also includes sightseeing of Chandigarh. You are going to enjoy every moment of this tour and create unforgettable memories.</p>', '<p style=\"text-align: center;\"><strong><span style=\"text-decoration: underline;\">Trip Highlights</span></strong></p>\r\n<ol>\r\n<li>Day-trip to skiing resort of Fagu and Kufri, Shimla</li>\r\n<li>Visit to Jakhu Temple and the Sankat Mochan Temple, Shimla</li>\r\n<li>Shop for your partner on the popular Mall Road, Shimla</li>\r\n<li>&nbsp;Explore the romantic snow-covered spots of the Rohtang Pass and Solang Valley, Manali</li>\r\n<li>Visit the popular Hadimba Devi Temple at Manali</li>\r\n<li>Enjoy boat riding on Sukhna Lake, Chandigarh</li>\r\n</ol>\r\n<p style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><strong>Itinerary Details </strong></span></p>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 1:<strong> Delhi - Shimla </strong></div>\r\n<p>As soon as you arrive at Delhi, you are transferred by our representatives to Shimla. It takes about 8 hours to reach the destination, which is around 361 kilometers from the capital city. Being the capital city of Himachal Pradesh and once a capital for the British Government, Shimla is a well known destination for honeymooners. It is nestled in the Shivalik Ranges and is a stunning place to visit on a honeymoon with views of the snow capped Himalayan ranges and far stretching valleys. On reaching this destination, you will check in at the hotel with your beloved and rest for the night.</p>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 2:<strong> Shimla - Kufri - Shimla</strong></div>\r\n<p style=\"display: block;\">Early morning after breakfast, you are taken on an excursion to the skiing resort of Fagu and Kufri. This romantic honeymoon trip adds special memories for young hearts in the valleys of Shimla. In the afternoon you and your dear one are taken to visit some of the best city attractions such as Indian Institute of Advanced Studies, Jakhu Temple and the Sankat Mochan Temple. In the evening you will enjoy shopping at The Mall and The Ridge and return to the hotel for the night rest.</p>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 3:<strong> Shimla - Manali</strong></div>\r\n<p>Post breakfast, check out from the hotel in Shimla and travel by surface transport to Manali. It\'s an 8 hour long journey. On arrival you will move into the hotel in Manali and retire for the night after dinner.</p>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 4:<strong> Manali (Sightseeing)</strong></div>\r\n<p>The next morning begins with an exciting trip to valley attractions such as Tibetan Monastery, Vashist Village, Hadimba Devi Temple, and the Manu Temple. The afternoon is left free for you to have fun and retire at the hotel for the night.</p>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 5:<strong> Manali - Rohtang Pass - Manali</strong></div>\r\n<p>The fifth day is even more thrilling with a trip that helps you explore Rohtang Pass, Kothi Gorge, Marhi and Gulaba. You will love playing with snow at the very snowy Rohtang Pass. This is the favorite tourist spot for many honeymooners visiting Manali. You will also visit the Solang Valley and return to the hotel for the dinner and night stay.</p>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 6:<strong> Manali - Chandigarh</strong></div>\r\n<p>On day six you will depart from Manali to Chandigarh, which is about 320 kilometers away from the valley. Chandigarh is very aptly called the most planned city and is a wonder in its own way. On reaching the city, you will check in at the hotel. In the afternoon you will be taken to visit Sukhna Lake and the famous Rock Garden. Post excursion, you will be transferred to the hotel for the dinner and night\'s rest.</p>\r\n</div>\r\n<div class=\"pkgtour-days\">\r\n<div class=\"itinerary-dayinfo\">Day 7:<strong> Chandigarh - Delhi </strong></div>\r\n<p>This is the last day of the trip. Post breakfast you will be driven to Delhi. This is where your memorable honeymoon trip comes to an end.</p>\r\n</div>'),
(10, 'North East Panorama With Pelling Tour', 17000, 'Super', 'Darjeeling.jpg', '<p>Northeast India is popular for its unique and rare wildlife, natural beauty, friendly people and culture. The 5 days North East Panorama with Pelling Tour takes you on the wonderful sojourn to explore the realms of the &lsquo;Paradise unknown&rsquo;. Soak-in the beauty and fresh aroma of tea gardens in Darjeeling. A joyride in Darjeeling Himalayan Railway, a UNESCO World Heritage Site is hard to miss. Partake in fun activities at Rimbi Rock Garden. Spectacular sunrise views at Tiger Hill and amazing sights from the Deolo Hills bewitch the spectators. Ride in a cable car and touch the clouds. Admire the beauty of the Tsomgo Lake and cherish some of the best moments of your life.</p>', '<h4 style=\"text-align: center;\"><span style=\"text-decoration: underline;\">Trip Highlights</span></h4>\r\n<ul>\r\n<li>Memorable sunrise views of Tiger Hill</li>\r\n<li>Cable car ride in Darjeeling</li>\r\n<li>&nbsp;Mesmerizing views from Deolo hill, Kalimpong<br />&nbsp;&nbsp;&nbsp;</li>\r\n<li>Visit to Durpin Gompa, the largest monastery of Kalimpong</li>\r\n<li>Visit to Pelling\'s Pemayangtse Monastery, the second oldest monastery in Sikkim</li>\r\n<li>&nbsp;Fun activities at Rimbi Rock Garden,Rimbi waterfalls and Khecheopalri Lake,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kalimpong</li>\r\n<li>Spot several colorful floral species at the Flower Show in Gangtok</li>\r\n<li>Do Drul Chorten (Stupa) and Enchey Monastery, Gangtok</li>\r\n<li>&nbsp;Excursion to Tsomgo Lake and Baba Mandir</li>\r\n</ul>\r\n<h4 style=\"text-align: center;\"><span style=\"text-decoration: underline;\">Itinerary Details</span></h4>\r\n<p>Day 1: <strong>Arrival and Transfer to Darjeeling</strong><br /><br />On reaching Bagdogra Airport (69 km away from Darjeeling)/ New Jalpaiguri Railway Station (68 km) / Tenzing Norgay Bus Stand (62 km), meet our tour representative who helps you with an assisted transfer to Darjeeling.<br /><br />Day 2: <strong>Darjeeling Sightseeing</strong><br /><br />It starts very early, explore the other attractions of Darjeeling including Ghoom Monastery. Sunrise view at the Tiger Hill over the Kanchendzonga Peak is a must if you are on your tour to Darjeeling. When the sun rays of the rising sun radiate its light on the Peak, it forms a stunning view for the on-looker.<br /><br />Day 3: <strong>Darjeeling- Kalimpong (49 km- 1hr 40 min) (sightseeing)</strong><br /><br />From the terrace of the Gompa, enjoy nice views of Khangchendzonga. Other attraction Deolo hill has viewpoints offering panoramic views of Durpin hill<br /><br />Day 4: <strong>Kalimpong- Pelling (92 km- 2 hours)</strong><br /><br />Lying at an altitude of 7200 feet above the sea level, Pelling is one of the most popular tourist destinations of Sikkim. Boasting of zoological and botanical richness, Pelling is home to colorful exotic flower like Orchids and Rhododendron, has small trekking routes and a few popular historical sites.<br /><br />Day 5: <strong>Gangtok to Siliguri for departure (New Jalpaiguri Railway Station (119 km) / Bagdogra Airport (126 km) / Tenzing Norgay Bus Stand (113 km)</strong><br /><br />After morning breakfast, get transfer to Siliguri / New Jalpaiguri Railway Station / Bagdogra Airport / Tenzing Norgay Bus Stand for your onward journey. The tour ends here.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `package_booking`
--

CREATE TABLE `package_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `arrival_date` date NOT NULL,
  `amount` float NOT NULL,
  `group_size` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `package_id` int(11) NOT NULL,
  `coupon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_booking`
--

INSERT INTO `package_booking` (`booking_id`, `booking_date`, `arrival_date`, `amount`, `group_size`, `payment`, `username`, `package_id`, `coupon`) VALUES
(50, '2018-04-15', '2018-04-26', 19000, 1, 1, 'utsav30', 6, ''),
(51, '2018-04-15', '2018-04-22', 27998, 2, 1, 'allena', 7, ''),
(52, '2018-04-15', '2018-06-15', 11999, 1, 1, 'vestresd', 4, ''),
(53, '2018-04-17', '2018-04-19', 13599.2, 1, 0, 'allena', 8, 'emr130'),
(54, '2018-04-17', '2018-04-19', 13599.2, 1, 0, 'allena', 8, 'emr130'),
(55, '2018-04-17', '2018-04-18', 15000, 1, 1, 'utsav30', 9, ''),
(56, '2018-04-17', '2018-04-21', 18000, 2, 1, 'utsav30', 9, 'Honey'),
(57, '2018-04-18', '2018-04-19', 17000, 1, 1, 'nareti', 10, ''),
(58, '2018-04-18', '2018-04-19', 9000, 1, 0, 'nareti', 5, ''),
(59, '2018-04-18', '2018-04-19', 6750, 1, 1, 'nareti', 5, 'Silver'),
(60, '2018-04-18', '2018-04-19', 12319.1, 1, 1, 'Sonu', 7, 'utsav001'),
(61, '2018-04-18', '2018-04-19', 17000, 1, 1, 'allena', 10, ''),
(62, '2018-04-18', '2018-04-20', 11390, 1, 1, 'sudo', 10, 'Super'),
(63, '2018-04-18', '2018-04-20', 11390, 1, 0, 'sudo', 10, 'Super'),
(64, '2018-04-18', '2018-04-26', 12319.1, 1, 1, 'nareti', 7, 'utsav001'),
(65, '2018-04-18', '2018-04-19', 13500, 2, 1, 'sudo', 5, 'Silver'),
(66, '2018-04-18', '2018-04-26', 23998, 2, 1, 'asd', 4, ''),
(67, '2018-12-21', '2018-12-30', 27998, 2, 0, 'phali', 7, ''),
(68, '2018-12-21', '2018-12-30', 24638.2, 2, 1, 'phali', 7, 'utsav001'),
(69, '2019-04-20', '2019-04-21', 9000, 1, 1, 'abcd', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `usertype` varchar(256) NOT NULL DEFAULT 'user',
  `dob` date NOT NULL,
  `gender` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `usertype`, `dob`, `gender`, `address`, `email`) VALUES
('abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 'abcd', 'user', '2000-01-01', 'male', 'IIITAb', 'Raghav@xyz.com'),
('admin', '0192023a7bbd73250516f069df18b500', 'utsav Kumar', 'admin', '1998-12-30', 'male', 'IIITA', 'admin@xyz.com'),
('allena', '7a6f276efc851bd2b708ea7e73fc4a10', 'Allena', 'user', '1998-10-03', 'female', 'Allahabad', 'allena@xyz'),
('asd', '7815696ecbf1c96e6894b779456d330e', 'ashima', 'user', '1999-12-09', 'female', 'lol', 'asd@gmail.com'),
('nareti', '293f4c20a14b49ce509a4e53f600fb8d', 'utsav kumar', 'user', '2000-01-01', 'male', 'iiita', 'nareti@xyz.com'),
('phali', 'e2fc714c4727ee9395f324cd2e7f331f', 'pppppp', 'user', '1999-07-03', 'male', 'srhdfjtnz', 'abc@czx.zxcv'),
('Sonu', '371ab955fdc11c44c980779c3135b155', 'Sonu', 'user', '1998-05-26', 'male', 'Flana-Dhimkana', 'itm2016001@iiita.ac.in'),
('sudo', 'd338b3f0f405eb5e51c8cc1e5ca66f02', 'Sudo', 'user', '1998-11-12', 'male', 'Allahabad', 'sudo@xyz.com'),
('xyz', 'e2fc714c4727ee9395f324cd2e7f331f', 'aklsdn', 'user', '2000-01-01', 'male', 'abcd', 'asd@s.s');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_booking`
--
ALTER TABLE `package_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package_booking`
--
ALTER TABLE `package_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
