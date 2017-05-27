-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2017 at 06:24 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gisnepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `writername` text NOT NULL,
  `abstract` text NOT NULL,
  `coverimage` varchar(300) NOT NULL,
  `thumbnail` varchar(350) NOT NULL,
  `content` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` double NOT NULL,
  `categoryname` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `topic`, `writername`, `abstract`, `coverimage`, `thumbnail`, `content`, `date_added`, `views`, `categoryname`) VALUES
(107, 'Biogas as a clean source of cooking fuel: Save Money and Environment ', 'Arun Magar, Kristina Tandukar', 'Biogas is a form of clean cooking mechanism, an eco-friendly sustainable source of renewable energy, economically and environmentally compatible to use.  It is generated from biodegradable wastes like cow dung, human and animal faeces  produced out of private as well as public organizations, business complexes etc. These wastes can otherwise hamper environment like foul smell and diseases. Instead, biogas  can convert it into clean form of energy.', 'biogas_cover_jpg.jpg', 'biogas_cover_jpg_thumb.jpg', '<h3 style="margin-left: 40px;">INTRODUCTION</h3>\r\n\r\n<p style="margin-left: 40px;">Biogas is a form of clean cooking mechanism, an eco-friendly sustainable source of renewable energy, economically and environmentally compatible to use.&nbsp; It is produced out of organic waste and can be used for multiple purposes i.e. thermal, electric etc. The slurry that the biogas system produces is a convenient source of organic fertilizer which is a key factor on multiplying the agro-productions maintaining the environmental sustainability. The Biogas technology has a key role on generating green jobs in a large numbers (at around 13000) in Nepal. Most of the villages (more than 2800, out of the total: 3915) of all 75 districts of Nepal have biogas installed. Studies have shown that, along with the biogas installation, the situation of health and sanitation is being gradually enhanced; deforestation (for the cause of firewood) is being curbed in Nepal. The technology is being concerned on caste and ethnicity, gender etc. issues to make the sector more inclusive, participative, decentralized and balanced.</p>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<ul style="margin-left: 40px;">\r\n	<li style="margin: 0in 0in 0.25in; text-align: justify; line-height: 150%;">\r\n	<h6><o:p><em><ins>&nbsp;FOLLOWING IS THE STATISTICS OF USAGE OF BIOGAS AS A COOKING FUEL IN NUWAKOT DISTRICT YEAR 2011</ins></em></o:p></h6>\r\n	</li>\r\n</ul>\r\n\r\n<p style="margin: 0in 0in 0.25in 40px; text-align: justify; line-height: 150%;"><a href="http://localhost/gisNepal/img/carousel/slide-1.png"><img alt="image here" src="http://localhost/gisNepal/article/biogas article.jpg" style="border-width: 1px; border-style: solid; width: 90%; height: 600px; margin: 20px 30px;" /></a></p>\r\n\r\n<ul style="margin-left: 40px;">\r\n	<li style="margin: 0in 0in 0.25in; text-align: justify; line-height: 19.5px;">\r\n	<h6><o:p><em><ins>FOLLOWING IS THE STATISTICS OF USAGE OF BIOGAS AS A COOKING FUEL IN NUWAKOT DISTRICT YEAR 2012</ins></em></o:p></h6>\r\n	</li>\r\n</ul>\r\n\r\n<p style="margin: 0in 0in 0.25in 40px; text-align: justify; line-height: 19.5px;"><img alt="biogas stat" src="http://localhost/gisNepal/article/biogas 2.jpg" style="border-width: 1px; border-style: solid; width: 90%; height: 600px; margin: 20px 30px;" /></p>\r\n\r\n<p style="margin: 0in 0in 0.25in 240px; text-align: justify; line-height: 19.5px;"><ins>Fig analysis: Increment of biogass as a cooking fuel from 1.860% to 4.150% (2011-2012) among other fuels.</ins></p>\r\n\r\n<h3 style="margin-left: 40px;">TECHNOLOGY</h3>\r\n\r\n<p style="margin: 0in 0in 0.25in 40px; text-align: justify; line-height: 150%;">Biogas is produced by anaerobic digestion or fermentation or decomposition of organic wastes by the action of methanogenic bacteria. It is composed of 50-70% methane, 30-45% carbon dioxide, 1% H2S, 0.1%N2, 0.1% O2, 0.1% H2 and some other gases. During digestion about 25-30 % of the dry matter of waste is converted into a combustible gas and residue of 70-75 % of the total solids content comes out as sludge which is known as slurry. The energy content of biogas is 6-6.5 KWh/m3, and the ignition temperature is 650-750&nbsp; degree celsius.</p>\r\n\r\n<p style="margin: 0in 0in 0.25in 40px; text-align: justify; line-height: 150%;">This energy allows biogas to be used as a fuel for any heating purpose, such as cooking. It can also be used in a gas engine to convert the energy in the gas into electricity. Biogas can be compressed, much like natural gas and used to power motor vehicles. This gas is about 20 percent lighter than the air which is odorless and burns with clear blue flame similar to that of Liquefied Petroleum Gas (LPG).</p>\r\n\r\n<h3 style="margin-left: 40px;">Household Biogas<o:p></o:p></h3>\r\n\r\n<div style="margin: 0in 0in 0.25in 40px; text-align: justify; line-height: 150%;"><img src="http://localhost/gisNepal/article/household.jpg" style="line-height: 150%; width: 150px; float: left; height: 110px; margin-right: 30px;" v:shapes="Picture_x0020_11" /></div>\r\n\r\n<p style="margin: 0in 0in 0.25in 40px; text-align: justify; line-height: 150%;">Basically, the domestic biogas system is being implemented in the rural areas of Nepal. The Manure of domestic animals (oxen and cows, buffaloes etc), human waste/excreta are the primary feeding material/source for this biogas system. . The slurry as a by-product of this system is being more effective on organic and sustainable productions in Nepal. The proper use of which is replacing the use of chemical fertilizer which ultimately has saved money and maintained the clean and green surroundings/environment. GoN has been promoting biogas plants of different capacity under this system, such as 2cu m, 4cu m, 6cu m and 8cu m plants fall under this category. For those plants, GGC 2047 and modified design of GGC 2047 are being implied.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3 style="margin-left: 40px;">Urban Domestic Biogas Plant</h3>\r\n\r\n<p style="margin-left: 40px;"><strong><img alt="" src="http://localhost/gisNepal/article/urban.jpg" style="width: 150px; height: 124px; float: left; margin-right:30px" /></strong></p>\r\n\r\n<p style="margin-left: 40px;">The urban domestic biogas plant, named as Sahari Gharelu Biogas Plant (SGBP) for easier local understanding, is a new and unique technological concept in Nepal. It is based on the principles of a floating drum biogas plant. After long research and experiment, GoN introduced it for the mass dissemination. Currently, plants of 1 cubic meter are introduced, but the plants up to 4 cu m (1-4 cu m) capacity fall in this system and the subsidy for such plants have been accordingly provided. Generally, it is planned to be developed among the urban and semi-urban households of large cities. To manage the organic kitchen waste at the households converting them in to bio-energy is the prime focus of this system. It uses the daily household organic wastes, such as food leftovers, cuttings and clippings, etc to produce biogas for cooking purpose. It is more convenient for maintaining household cleanliness and it also mitigates the inner and outer pollution.</p>\r\n\r\n<p style="margin-left: 40px;">&nbsp;</p>\r\n\r\n<h3 style="margin-left: 40px;">Conclusion</h3>\r\n\r\n<p style="margin-left: 40px;">Hence, Biogas energy can be used as a clean, green and efficient energy in terms of both environmental and economical factor.</p>\r\n', '2016-06-22 18:40:24', 24, 2),
(108, 'Geo-enabled Information for Disaster Risk Reduction', 'ICIMOD', 'Disasters in the Hindu Kush Himalayas focusing on flood risk', 'flood_risk.jpg', 'flood_risk_thumb.jpg', '<p>The Hindu Kush Himalayan (HKH) region is prone to natural hazards due to its fragile geology, complex topography and relief, tectonic activities, and sensitivity to climatic variability. The region also has high levels of poverty, high population density, and governance issues, which make it more vulnerable to natural hazards.</p>\r\n\r\n<p>The geo-enabled disaster information management system features data and tools that provide easy access to disaster information. The Disaster Information Management System (DIMS) hosts historical data from the Ministry of Home Affairs (MoHA) on disaster events from 2000 to 2013, including statistics on the impact of disaster in terms of economic losses, infrastructure damage, and human casualties. Disasters are divided into 18 categories. Data on major flood events, model outputs, and real-time data generated by ICIMOD are also available.</p>\r\n\r\n<p>A framework for hazard, vulnerability, and risk mapping (HVR) at the national and sub-national levels has also been developed. Profiles for all 75 districts in Nepal were developed using readily available datasets, primarily drawn from national population surveys and national agencies. At the sub-national level, flood analysis has been conducted for one pilot district (Ramechhap), which can be scaled up to cover other districts in Nepal.</p>\r\n\r\n<p><img alt="" src="http://localhost/gisNepal/article/disaster.jpg" style="width: 700px; height: 430px; margin: 5px 10px;" /></p>\r\n', '2016-06-22 19:02:05', 12, 2),
(109, 'Introduction to alternative energy', 'Ram Shrestha', 'alternative energy and its benefits in Nepal', 'electricity-global-warming-vector-drawing-represents-design-36590180.jpg', 'electricity-global-warming-vector-drawing-represents-design-36590180_thumb.jpg', '<p><span style="color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 20px; line-height: 28px;">All energy sources have some impact on our environment. Fossil fuels &mdash; coal, oil, and natural gas&nbsp;&mdash; do&nbsp;</span><a href="http://www.ucsusa.org/clean_energy/our-energy-choices/coal-and-other-fossil-fuels/the-hidden-cost-of-fossil.html" style="color: rgb(0, 122, 165); text-decoration: none; font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 20px; line-height: 28px;">substantially more harm</a><span style="color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 20px; line-height: 28px;">&nbsp;than renewable energy sources by most measures, including air and water pollution, damage to public health, wildlife and habitat loss, water use, land use, and global warming emissions.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">It is still important, however, to understand the environmental impacts associated with producing power from renewable sources such as wind, solar, geothermal, biomass, and hydropower.</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">The exact type and intensity of environmental impacts varies depending on the specific technology used, the geographic location, and a number of other factors. By understanding the current and potential environmental issues associated with each renewable energy source, we can takes steps to effectively avoid or minimize these impacts as they become a larger portion of our electric supply.</p>\r\n\r\n<hr style="border-top-width: 0px; border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgb(200, 200, 200); height: 0px; box-sizing: content-box; margin: 0px 0px 1em; padding: 0px 0px 1em; clear: both; width: 703.056px; color: transparent; font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 16.26px; line-height: normal;" />\r\n<h3 style="margin-bottom: 0.5em; font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; margin-top: 0px; color: rgb(0, 0, 0); font-size: 1.6em; line-height: normal;">Wind Power</h3>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;"><img alt="" height="209" src="http://www.ucsusa.org/assets/images/ce/trimont.gif" style="border: 0px; display: block; max-width: 100%; height: auto; float: right; margin-left: 8px; margin-top: 8px;" width="279" /></p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">Harnessing power from the wind is one of the cleanest and most sustainable ways to generate electricity as it produces no toxic pollution or global warming emissions. Wind is also abundant, inexhaustible, and affordable, which makes it a viable and large-scale alternative to fossil fuels.</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">Despite its vast potential, there are a variety of environmental impacts associated with wind power generation that should be recognized and mitigated.</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;"><span style="font-weight: 600;">Learn more:</span></p>\r\n\r\n<ul style="margin-left: 0px; list-style-image: url(&quot;/sites/default/themes/primary/images/bullet.png&quot;); color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 16.26px; line-height: normal;">\r\n	<li style="margin-bottom: 0.75em; font-size: 16.26px; line-height: 1.4;"><a href="http://www.ucsusa.org/clean_energy/our-energy-choices/renewable-energy/environmental-impacts-wind-power.html" style="color: rgb(0, 122, 165); text-decoration: none;">Environmental Impacts of Wind Power</a></li>\r\n	<li style="margin-bottom: 0px; font-size: 16.26px; line-height: 1.4;"><a href="http://www.ucsusa.org/clean_energy/our-energy-choices/renewable-energy/how-wind-energy-works.html" style="color: rgb(0, 122, 165); text-decoration: none;">How Wind Energy Works</a></li>\r\n</ul>\r\n\r\n<hr style="border-top-width: 0px; border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgb(200, 200, 200); height: 0px; box-sizing: content-box; margin: 0px 0px 1em; padding: 0px 0px 1em; clear: both; width: 703.056px; color: transparent; font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 16.26px; line-height: normal;" />\r\n<h3 style="margin-bottom: 0.5em; font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; margin-top: 0px; color: rgb(0, 0, 0); font-size: 1.6em; line-height: normal;">Solar Power</h3>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;"><img alt="" height="204" src="http://www.ucsusa.org/assets/images/ce/ca-pou/California-solar-panels.jpg" style="border: 0px; display: block; max-width: 100%; height: auto; float: right; margin-left: 8px; margin-top: 8px;" width="282" /></p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">Like wind power, the sun provides a tremendous resource for generating clean and sustainable electricity.</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">The environmental impacts associated with solar power can include land use and habitat loss, water use, and the use of hazardous materials in manufacturing, though the types of impacts vary greatly depending on the scale of the system and the technology used &mdash; photovoltaic (PV) solar cells or concentrating solar thermal plants (CSP).</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;"><span style="font-weight: 600;">Learn more:</span></p>\r\n\r\n<ul style="margin-left: 0px; list-style-image: url(&quot;/sites/default/themes/primary/images/bullet.png&quot;); color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 16.26px; line-height: normal;">\r\n	<li style="margin-bottom: 0.75em; font-size: 16.26px; line-height: 1.4;"><a href="http://www.ucsusa.org/clean_energy/our-energy-choices/renewable-energy/environmental-impacts-solar-power.html" style="color: rgb(0, 122, 165); text-decoration: none;">Environmental Impacts of Solar Power</a></li>\r\n	<li style="margin-bottom: 0px; font-size: 16.26px; line-height: 1.4;"><a href="http://www.ucsusa.org/clean_energy/our-energy-choices/renewable-energy/how-solar-energy-works.html" style="color: rgb(0, 122, 165); text-decoration: none;">How Solar Energy Works</a></li>\r\n</ul>\r\n\r\n<hr style="border-top-width: 0px; border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgb(200, 200, 200); height: 0px; box-sizing: content-box; margin: 0px 0px 1em; padding: 0px 0px 1em; clear: both; width: 703.056px; color: transparent; font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 16.26px; line-height: normal;" />\r\n<h3 style="margin-bottom: 0.5em; font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; margin-top: 0px; color: rgb(0, 0, 0); font-size: 1.6em; line-height: normal;">Geothermal Energy</h3>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;"><img alt="" height="227" src="http://www.ucsusa.org/assets/images/ce/geysers2-1.jpg" style="border: 0px; display: block; max-width: 100%; height: auto; float: right; margin-left: 8px; margin-top: 8px;" width="280" /></p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">The most widely developed type of geothermal power plant (known as hydrothermal plants) are located near geologic &ldquo;hot spots&rdquo; where hot molten rock is close to the earth&rsquo;s crust and produces hot water.</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">In other regions enhanced geothermal systems (or hot dry rock geothermal), which involve drilling into the earth&rsquo;s surface to reach deeper geothermal resources, can allow broader access to geothermal energy.</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">Geothermal plants also differ in terms of the technology they use to convert the resource to electricity (direct steam, flash, or binary) and the type of cooling technology they use (water-cooled and air-cooled). Environmental impacts differ depending on the conversion and cooling technology used.</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;"><span style="font-weight: 600;">Learn more:</span></p>\r\n\r\n<ul style="margin-left: 0px; list-style-image: url(&quot;/sites/default/themes/primary/images/bullet.png&quot;); color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 16.26px; line-height: normal;">\r\n	<li style="margin-bottom: 0.75em; font-size: 16.26px; line-height: 1.4;"><a href="http://www.ucsusa.org/clean_energy/our-energy-choices/renewable-energy/environmental-impacts-geothermal-energy.html" style="color: rgb(0, 122, 165); text-decoration: none;">Environmental Impacts of Geothermal Energy</a></li>\r\n	<li style="margin-bottom: 0px; font-size: 16.26px; line-height: 1.4;"><a href="http://www.ucsusa.org/clean_energy/our-energy-choices/renewable-energy/how-geothermal-energy-works.html" style="color: rgb(0, 122, 165); text-decoration: none;">How Geothermal Energy Works</a></li>\r\n</ul>\r\n\r\n<hr style="border-top-width: 0px; border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgb(200, 200, 200); height: 0px; box-sizing: content-box; margin: 0px 0px 1em; padding: 0px 0px 1em; clear: both; width: 703.056px; color: transparent; font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 16.26px; line-height: normal;" />\r\n<h3 style="margin-bottom: 0.5em; font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; margin-top: 0px; color: rgb(0, 0, 0); font-size: 1.6em; line-height: normal;"><img alt="" height="374" src="http://www.ucsusa.org/assets/images/cv/Hay-bales-on-back-of-truck.jpg" style="border: 0px; display: block; max-width: 100%; height: auto; float: right; margin-left: 8px;" width="274" />Biomass for Electricity</h3>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">Biomass power plants share some similarities with fossil fuel power plants: both involve the combustion of a feedstock to generate electricity. Thus, biomass plants raise similar, but not identical, concerns about air emissions and water use as fossil fuel plants. However, the feedstock of biomass plants can be sustainable produced, while fossil fuels are non-renewable.</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">Sources of biomass resources for producing electricity are diverse; including energy crops (like switchgrass), agricultural waste, manure, forest products and waste, and urban waste. Both the type of feedstock and the manner in which it is developed and harvested significantly affect land use and life-cycle global warming emissions impacts of producing power from biomass.</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;"><span style="font-weight: 600;">Learn more:</span></p>\r\n\r\n<ul style="margin-left: 0px; list-style-image: url(&quot;/sites/default/themes/primary/images/bullet.png&quot;); color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 16.26px; line-height: normal;">\r\n	<li style="margin-bottom: 0px; font-size: 16.26px; line-height: 1.4;"><a href="http://www.ucsusa.org/clean_vehicles/smart-transportation-solutions/cleaner_fuels/ethanol-and-other-biofuels/biomass-energy-resources.html" style="color: rgb(0, 122, 165); text-decoration: none;">Biomass Resources in the United States</a></li>\r\n</ul>\r\n\r\n<hr style="border-top-width: 0px; border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgb(200, 200, 200); height: 0px; box-sizing: content-box; margin: 0px 0px 1em; padding: 0px 0px 1em; clear: both; width: 703.056px; color: transparent; font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; font-size: 16.26px; line-height: normal;" />\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;"><img alt="" height="145" src="http://www.ucsusa.org/assets/images/ce/lihi-dam-hydrostation.jpg" style="border: 0px; display: block; max-width: 100%; height: auto; float: right; margin-left: 8px; margin-top: 8px;" width="280" /></p>\r\n\r\n<h3 style="margin-bottom: 0.5em; font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif; margin-top: 0px; color: rgb(0, 0, 0); font-size: 1.6em; line-height: normal;">Hydroelectric Power</h3>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">Hydroelectric power includes both massive hydroelectric dams and small run-of-the-river plants. Large-scale hydroelectric dams continue to be built in many parts of the world (including China and Brazil), but it is unlikely that new facilities will be added to the existing U.S. fleet in the future.</p>\r\n\r\n<p style="font-size: 16.26px; line-height: 1.4; margin-top: 0px; color: rgb(76, 76, 76); font-family: &quot;Mercury Text G1 A&quot;, &quot;Mercury Text G1 B&quot;, Georgia, &quot;Times New Roman&quot;, Times, sans-serif;">Instead, the future of hydroelectric power in the United States will likely involve increased capacity at current dams and new run-of-the-river projects. There are environmental impacts at both types of plants.</p>\r\n', '2016-06-29 10:38:53', 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `imagecategory`
--

CREATE TABLE IF NOT EXISTS `imagecategory` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagecategory`
--

INSERT INTO `imagecategory` (`id`, `category`) VALUES
(1, 'All'),
(2, 'Alternative Energy'),
(3, 'Population'),
(10, 'Literacy'),
(11, 'Economics'),
(12, 'Household'),
(13, 'Health'),
(14, 'Agriculture');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `imagename` varchar(300) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `categoryname` int(11) NOT NULL,
  `iname` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imagename`, `thumbnail`, `categoryname`, `iname`, `description`, `date_added`) VALUES
(74, '5_2_PerOfEconomicallyActivePopnBySex.png', '5_2_PerOfEconomicallyActivePopnBySex_thumb.jpg', 11, 'Percentage of Economically Active Population By Sex', 'Statistics illustrating male and female who are economically active for each district.', '2016-06-22 15:26:01'),
(75, '2_1_population_distribution.png', '2_1_population_distribution_thumb.jpg', 3, 'Population Distribution', 'Population distribution Map: Blue represents highest and red represents lowest population distribution.', '2016-06-22 15:30:21'),
(76, '2_2_percentageChangeInPopn.png', '2_2_percentageChangeInPopn_thumb.jpg', 3, 'Percentage Change in Population 2001 - 2011', 'Percentage Change in Population 2001 - 2011 for all 75 districts', '2016-06-22 15:31:36'),
(77, '2_4_population_density.jpg', '2_4_population_density_thumb.jpg', 3, 'Population Density of nepal', 'Population per unit area of each district', '2016-06-22 17:02:46'),
(78, '4_1_litaracyRate.jpg', '4_1_litaracyRate_thumb.jpg', 10, 'Literacy Rate', 'Literacy Rate of nepal', '2016-06-22 17:05:44'),
(79, '4_2_litaracyRateBySex.jpg', '4_2_litaracyRateBySex_thumb.jpg', 10, 'Literacy Rate By Sex', 'Male and Female literacy rate in each district.', '2016-06-22 17:06:34'),
(80, '4_7_TotalLiteratePopulation.jpg', '4_7_TotalLiteratePopulation_thumb.jpg', 10, 'Total Literate Population  By District', 'Kathmandu has the highest literacy number.', '2016-06-22 17:07:29'),
(81, '5_7_UnemployedPop.jpg', '5_7_UnemployedPop_thumb.jpg', 11, 'Unemployed Population', 'District wise unemployed population analysis ', '2016-06-22 17:10:55'),
(82, '8_6_HouseholdByCookingFuel.jpg', '8_6_HouseholdByCookingFuel_thumb.jpg', 12, 'Household by cooking fuel', 'Cooking fuels used by households of given district', '2016-06-22 17:11:43'),
(83, '8_8_HouseholdByLightingEnergy.jpg', '8_8_HouseholdByLightingEnergy_thumb.jpg', 2, ' Lightening Energy usage ', 'Energy used for lighting in each district', '2016-06-22 17:14:22'),
(84, '8_4_HouseholdByDrinkingWater.jpg', '8_4_HouseholdByDrinkingWater_thumb.jpg', 12, 'Household by drinking water', 'Drinking warer used by households of given district', '2016-06-22 17:14:58'),
(85, '8_2_HouseholdByFacilitie.jpg', '8_2_HouseholdByFacilitie_thumb.jpg', 12, 'Household by Toilet Facility', 'Piechart on each district shows availability of toilet in houses of that district', '2016-06-22 17:17:30'),
(86, '8_10_PopnPerHealthInstitution.jpg', '8_10_PopnPerHealthInstitution_thumb.jpg', 13, 'Population per health institution', 'Population per health institution of each district.', '2016-06-22 17:18:24'),
(87, '9_8_soilDegradation.jpg', '9_8_soilDegradation_thumb.jpg', 14, 'Percentage of soil degradation in agriculture area', 'Percentage of Soil Degradation affecting agriculture in Nepal', '2016-06-22 17:21:51'),
(88, 'aepc_biogas_statistics.jpg', 'aepc_biogas_statistics_thumb.jpg', 2, 'Biogas plants installed by AEPC', 'Data 2012, and 2015', '2016-06-22 17:24:15'),
(89, 'aepc_hydro_statistics.jpg', 'aepc_hydro_statistics_thumb.jpg', 2, 'Hydro plants installed by AEPC', 'Data from 2010 to 2014', '2016-06-22 17:24:57'),
(90, 'aepc_solar_statistics.jpg', 'aepc_solar_statistics_thumb.jpg', 2, 'Solar plants installed by AEPC', 'Data from 2010 to 14', '2016-06-22 17:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `loginattempts`
--

CREATE TABLE IF NOT EXISTS `loginattempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `userID` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `address` varchar(400) NOT NULL,
  `dp` varchar(300) NOT NULL,
  `about` text NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`userID`, `fname`, `lname`, `address`, `dp`, `about`, `email`, `phone`) VALUES
(1, 'Arun', 'Magar', 'Boudha', 'profile.jpg', 'Hello I''m BCSCSIT student of St. Xavier''s College. I am admin of this web application.', 'arun.mgr1@gmail.com', 9841253686),
(2, 'Kristina', 'Tandukar', 'Kupondole, Kathmandu', 'admin2.jpg', 'Hi, I am Kristina, currently in 7th Semester of St. Xavier''s College. This is my final year project. Hope you like it.', 'kristinatandukar@gmail.com', 9818260421);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `username`, `password`) VALUES
(1, '', 'arun', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'kristinatandukar@gmail.com', 'kristina', '86b91a5c81133bda78d7861e5d183603cf02c983');

-- --------------------------------------------------------

--
-- Table structure for table `webusage`
--

CREATE TABLE IF NOT EXISTS `webusage` (
  `id` int(11) NOT NULL,
  `viewcount` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webusage`
--

INSERT INTO `webusage` (`id`, `viewcount`) VALUES
(1, 935);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagecategory`
--
ALTER TABLE `imagecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryname` (`categoryname`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `webusage`
--
ALTER TABLE `webusage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `imagecategory`
--
ALTER TABLE `imagecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `webusage`
--
ALTER TABLE `webusage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
