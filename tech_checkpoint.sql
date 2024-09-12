-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2023 at 11:49 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_checkpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `UserID` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`UserID`, `product_id`) VALUES
(11, 5),
(11, 8),
(11, 1),
(11, 1),
(21, 15),
(21, 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `feedback` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `feedback`) VALUES
(17, 'gar@gmail.com', 'test'),
(16, 'gart@gmail.com', 'test'),
(18, 'abcd123@gmail.com', 'testtest');

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

DROP TABLE IF EXISTS `item_list`;
CREATE TABLE IF NOT EXISTS `item_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `details` text,
  `type` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`id`, `title`, `price`, `img`, `details`, `type`) VALUES
(1, 'Razer BlackWidow V3 Pro Wireless Full-Height Mechanical Gaming Keyboard with Razer Chroma RGB', '759.00', 'img/1.png', 'Technical Specifications:\r\nKeyboard Type: Wireless Full-sized Mechanical Keyboard. Design: Aluminum top cover. Switch type: Razer Green Mechanical Switch with transparent switch housing. Switch Lifespan: 80 million clicks. Keycaps: Doubleshot ABS keycaps. Connectivity: 2.4GHz, Bluetooth, and USB-C cable. Wireless Response Rate: 1ms. Battery life: Backlighting OFF is up to 200 hours, White backlight at 50% brightness is up to about 14 hours, Spectrum cycling backlight at 50% brightness is up to about 25 hours. White backlight at 100% brightness is up to about 6 hours.\r\n\r\n- Spectrum cycling backlight at 100% brightness is up to about 13 hours\r\n\r\n\r\n\r\n\r\n', 'keybord'),
(2, 'Razer BlackWidow V3 Tenkeyless Compact Mechanical Gaming Keyboard', '329.00', 'img/2.png', 'TECH SPECS\r\nSWITCH TYPE\r\nRazer™ Green Mechanical Switch\r\nKEY FEEL\r\nTactile and Clicky\r\n\r\nAPPROXIMATE SIZE\r\nTenkeyless\r\n\r\nLIGHTING\r\nRazer Chroma™ RGB customizable backlighting with 16.8 million color options\r\n\r\nWRIST REST\r\nNone\r\n\r\nONBOARD MEMORY\r\nNone\r\n\r\nMEDIA KEYS\r\nNone\r\n\r\nPASSTHROUGH\r\nNone\r\n\r\nCONNECTIVITY\r\nWired - Attached\r\n\r\nKEYCAPS\r\nRegular ABS\r\n\r\nOTHERS\r\nRazer™ Mechanical Switches designed for gaming\r\nTenkeyless form factor\r\nRazer Synapse 3 enabled\r\nCable routing options\r\nN-key roll-over with built-in anti-ghosting\r\nFully programmable keys with on-the-fly macro recording\r\nGaming mode option\r\n1000 Hz Ultrapolling\r\nAluminum matte top plate', 'keybord'),
(3, 'Razer DeathAdder V2 Pro - Genshin Impact Edition', '619.95', 'img/3.png', 'FORM FACTOR\r\nRight-Handed\r\nCONNECTIVITY\r\nRazer™ HyperSpeed Wireless\r\nWired - Speedflex Cable\r\nBluetooth\r\nBATTERY LIFE\r\nUp to 120 Hours\r\nRGB LIGHTING\r\nRazer Chroma™ RGB\r\nSENSOR\r\nOptical\r\nMAX SENSITIVITY (DPI)\r\n20000\r\nMAX SPEED (IPS)\r\n650\r\nMAX ACCELERATION (G)\r\n50\r\nPROGRAMMABLE BUTTONS\r\n8\r\nSWITCH TYPE\r\nOptical\r\nSWITCH LIFECYCLE\r\n70 Million Clicks\r\nON-BOARD MEMORY PROFILES\r\n5\r\nMOUSE FEET\r\n100% PTFE Mouse Feet\r\nCABLE\r\nRazer™ Speedflex Cable\r\nTILT SCROLL WHEEL\r\nNo\r\nAPPROXIMATE SIZE\r\nLength: 127.0 mm / 5.00 in\r\nWidth: 72.6 mm / 2.86 in\r\nHeight: 42.7 mm / 1.68 in\r\nAPPROXIMATE WEIGHT\r\n88 g / 0.194 lbs (Excluding dongle)\r\nDOCK COMPATIBILITY\r\nYes', 'mice'),
(4, 'Razer DeathAdder V2 Special Edition\r\nWired Gaming Mouse with Best-in-class Ergonomics', '309.95', 'img/4.png', 'FORM FACTOR\r\nRight-Handed\r\nCONNECTIVITY\r\nWired - Razer™ Speedflex Cable\r\nBATTERY LIFE\r\nNone\r\nRGB LIGHTING\r\nRazer Chroma™ RGB\r\nSENSOR\r\nOptical\r\nMAX SENSITIVITY (DPI)\r\n20000\r\nMAX SPEED (IPS)\r\n650\r\nMAX ACCELERATION (G)\r\n50\r\nPROGRAMMABLE BUTTONS\r\n8\r\nSWITCH TYPE\r\nOptical\r\nSWITCH LIFECYCLE\r\n70 Million Clicks\r\nON-BOARD MEMORY PROFILES\r\n5\r\nMOUSE FEET\r\n100% PTFE Mouse Feet\r\nCABLE\r\nRazer™ Speedflex Cable\r\nTILT SCROLL WHEEL\r\nNone\r\nAPPROXIMATE SIZE\r\nLength: 127.0 mm / 5.00 in\r\nWidth: 72.7 mm / 2.86 in\r\nHeight: 42.7 mm / 1.68 in\r\nAPPROXIMATE WEIGHT\r\n82 g / 0.18 lbs\r\nDOCK COMPATIBILITY\r\nNone', 'mice'),
(5, 'Razer Basilisk V3 Pro - Black\r\nCustomizable Wireless Gaming Mouse with Razer HyperScroll Tilt Wheel', '708.52', 'img/5.png', 'FORM FACTOR\r\nRight-handed\r\nCONNECTIVITY\r\nRazer™ HyperSpeed Wireless\r\nBluetooth\r\nWired – Speedflex Cable USB Type C\r\nBATTERY LIFE\r\nUp to 90 hours (HyperSpeed)\r\nRGB LIGHTING\r\nRazer Chroma™ RGB\r\nSENSOR\r\nFocus Pro 30K Optical Sensor\r\nMAX SENSITIVITY (DPI)\r\n30000\r\nMAX SPEED (IPS)\r\n750\r\nMAX ACCELERATION (G)\r\n70\r\nPROGRAMMABLE BUTTONS\r\n11\r\nSWITCH TYPE\r\nOptical Mouse Switches Gen-3\r\nSWITCH LIFECYCLE\r\n90-million Clicks\r\nON-BOARD MEMORY PROFILES\r\n5\r\nMOUSE FEET\r\n100% PTFE\r\nCABLE\r\nRazer™ Speedflex Cable USB Type C\r\nTILT SCROLL WHEEL\r\n4-way Razer™ HyperScroll tilt wheel\r\nElectronically actuated notched and free-spinning modes\r\nAPPROXIMATE SIZE\r\nLength: 130 mm / 5.11 in\r\nWidth: 75.4 mm / 2.96 in\r\nHeight: 42.5 mm / 1.67 in\r\nAPPROXIMATE WEIGHT\r\n112 g / 3.95 oz (Excluding cable)\r\nDOCK COMPATIBILITY\r\nRazer Mouse Dock Pro with Razer Wireless Charging Puck (both sold separately)', 'mice'),
(6, 'Razer Barracuda Pro\r\nWireless Gaming Headset with Hybrid ANC', '1107.08', 'img/6.png', 'FREQUENCY RESPONSE\r\n20 Hz – 20 kHz\r\nIMPEDANCE\r\n32 Ω (1 kHz)\r\nSENSITIVITY\r\n96dBSPL/mW@1KHz by HATS\r\nDRIVER SIZE - DIAMETERS (MM)\r\n50 mm\r\nDRIVER TYPE\r\nRazer™ TriForce Bio-Cellulose\r\nEARPADS MATERIAL\r\nPressure-Relieving Memory Foam\r\nNOISE CANCELLING\r\nHybrid Active Noise Cancellation\r\nCONNECTION TYPE\r\nUSB Type-C Wireless (2.4GHz), Bluetooth 5.2\r\nCABLE LENGTH\r\nNone\r\nAPPROXIMATE WEIGHT\r\n340 g / 0.75 lbs\r\nMICROPHONE STYLE\r\nDual Integrated MEMS Beamforming Noise-Cancelling\r\nPICK-UP PATTERN\r\nOmnidirectional\r\nMICROPHONE FREQUENCY RESPONSE\r\n100 Hz - 10 kHz\r\nMICROPHONE SENSITIVITY (@1KHZ)\r\n-38 ± 1 dB\r\nVIRTUAL SURROUND ENCODING\r\nTHX Spatial Audio\r\nVOLUME CONTROL\r\nVolume up and down\r\nOTHER CONTROLS\r\n2.4GHz Wireless and Bluetooth Toggle (SmartSwitch)\r\nANC levels (ANC ON, Ambient, ANC OFF)\r\nVolume up and down\r\nMic mute on/off toggle\r\nBATTERY LIFE\r\nUp to 40 hours\r\n', 'headset'),
(7, 'Razer BlackShark V2 Pro - White', '885.66', 'img/7.png', 'FREQUENCY RESPONSE\r\n20 Hz – 20 kHz\r\nIMPEDANCE\r\n32 Ω (1 kHz)\r\nSENSITIVITY\r\n96 dB (1 kHz)\r\nDRIVER SIZE - DIAMETERS (MM)\r\n50 mm\r\nDRIVER TYPE\r\nRazer™ TriForce Titanium\r\nEARCUPS\r\nOval Ear Cushions\r\nINNER EARCUP DIAMETER\r\nWidth: 42 mm / 1.65\"\r\nLength: 62 mm / 2.44\"\r\nEARPADS MATERIAL\r\nHeat-Transfer Fabric / Leatherette / Memory Foam\r\nNOISE CANCELLING\r\nPassive noise cancellation\r\nCONNECTION TYPE\r\nUSB-A Wireless (2.4GHz), 3.5mm Analog\r\nCABLE LENGTH\r\n1.3 m / 4.27 ft\r\nAPPROXIMATE WEIGHT\r\n372 g / 0.82 lbs\r\nMICROPHONE STYLE\r\nDetachable HyperClear SuperCardioid\r\nPICK-UP PATTERN\r\nUnidirectional\r\nMICROPHONE FREQUENCY RESPONSE\r\n100 Hz – 10 kHz\r\nMICROPHONE SENSITIVITY (@1KHZ)\r\n-42 ± 3 dB\r\nVIRTUAL SURROUND ENCODING\r\nTHX Spatial Audio\r\nVOLUME CONTROL\r\nVolume up and down\r\nOTHER CONTROLS\r\nMic mute on / off toggle\r\nHaptics Adjuster – Off, Low, Medium (Default), High\r\nBATTERY LIFE\r\nUp to 44 hours (with haptics and lighting off) / Up to 11 hours (with haptics and lighting on)\r\nLIGHTING\r\nRazer Chroma RGB\r\nCOMPATIBILITY\r\nPC (wireless, wired)\r\nPlayStation (wireless, wired)\r\nNintendo Switch (wireless in docked mode, wired)\r\nMobile Devices (wired)\r\nXbox (wired)', 'headset'),
(8, 'Razer Kraken V3 Pro\r\nWireless Gaming Headset with Haptic Technology', '885.66', 'img/8.png', 'FREQUENCY RESPONSE\r\n20 Hz – 20 kHz\r\nIMPEDANCE\r\n32 Ω (1 kHz)\r\nSENSITIVITY\r\n96 dB (1 kHz)\r\nDRIVER SIZE - DIAMETERS (MM)\r\n50 mm\r\nDRIVER TYPE\r\nRazer™ TriForce Titanium\r\nEARCUPS\r\nOval Ear Cushions\r\nINNER EARCUP DIAMETER\r\nWidth: 42 mm / 1.65\"\r\nLength: 62 mm / 2.44\"\r\nEARPADS MATERIAL\r\nHeat-Transfer Fabric / Leatherette / Memory Foam\r\nNOISE CANCELLING\r\nPassive noise cancellation\r\nCONNECTION TYPE\r\nUSB-A Wireless (2.4GHz), 3.5mm Analog\r\nCABLE LENGTH\r\n1.3 m / 4.27 ft\r\nAPPROXIMATE WEIGHT\r\n372 g / 0.82 lbs\r\nMICROPHONE STYLE\r\nDetachable HyperClear SuperCardioid\r\nPICK-UP PATTERN\r\nUnidirectional\r\nMICROPHONE FREQUENCY RESPONSE\r\n100 Hz – 10 kHz\r\nMICROPHONE SENSITIVITY (@1KHZ)\r\n-42 ± 3 dB\r\nVIRTUAL SURROUND ENCODING\r\nTHX Spatial Audio\r\nVOLUME CONTROL\r\nVolume up and down\r\nOTHER CONTROLS\r\nMic mute on / off toggle\r\nHaptics Adjuster – Off, Low, Medium (Default), High\r\nBATTERY LIFE\r\nUp to 44 hours (with haptics and lighting off) / Up to 11 hours (with haptics and lighting on)\r\nLIGHTING\r\nRazer Chroma RGB\r\nCOMPATIBILITY\r\nPC (wireless, wired)\r\nPlayStation (wireless, wired)\r\nNintendo Switch (wireless in docked mode, wired)\r\nMobile Devices (wired)\r\nXbox (wired)', 'headset'),
(9, 'Logitech MX Master 3S ', '449.00', 'img/9.png', 'Description\r\nIntroducing Logitech MX Master 3S – an iconic mouse remastered for ultimate tactility, performance, and flow.\r\nQuiet Click buttons deliver a satisfying tactile feel with 90% less click noise(2). MX Master 3S also now comes with an 8K optical sensor for next-gen responsiveness on any surface – even glass(1).\r\nMagSpeed electromagnetic scrolling delivers remarkable speed, precision, and near silence – with the ability to scroll 1,000 lines a second.\r\nThe ergonomic silhouette is crafted to support your palm and fingers.\r\nLogi Options+ enables Flow cross-computer control and introduces more customizations than ever(5).\r\nMX Master 3S stays powered up to 70 days on a full charge(7) – and delivers three hours of use from a one minute quick charge.', 'mice'),
(10, 'Logitech MX Anywhere 3 Compact Performance Mouse', '369.00', 'img/10.png', 'MAGSPEED SCROLLING: Scroll 1,000 lines in a second and stop on a pixel. MagSpeed electromagnetic scrolling blends speed and precision with silence. Shift from ratchet to hyper-fast with a single flick\r\nPORTABLE COMFORT: MX Anywhere 3 travels with you – no matter where you work. The low-profile ergonomic design is contoured for your hand, with ultra-soft silicone side grips for go-anywhere comfort\r\nTRACK ANYWHERE: Track on virtually any surface, even glass, thanks to a 4000DPI sensor. Work seamlessly on the go whether you’re at a gaming café, at your home desk, or sitting on the couch\r\nUSB-C QUICK CHARGING: Stay powered up for 70 days on a full charge. Quick charging gives you three hours of use in just one minute. Charge and work simultaneously with a USB-C cable\r\nMULTI-DEVICE CONNECTIONS: Use Bluetooth or the included Unifying USB dongle to connect up to three devices at once. Switch between your PC, laptop, computer and iPad at the tap of a button\r\nFULLY CUSTOMISABLE: Optimise your workflow. Work faster with customised buttons and predefined app profiles for Adobe Photoshop, Final Cut Pro, Google Chrome, Safari, Microsoft Office and more\r\nPREMIUM DESIGN: MX Anywhere 3 looks – and feels – better than ever with a machined steel scroll wheel, silicone side grips and three modern colourways\r\nCROSS-COMPUTER CONTROL: Control multiple devices at a touch with a flow enabled mouse. Move the cursor from screen edge to another to switch between Windows, Linux and macOS operating systems', 'mice'),
(11, 'Logitech Zone Wireless Bluetooth Headset', '1169.00', 'img/11.png', 'CONNECT MULTIPLE DEVICES\r\nDesigned for mobile workers, Zone Wireless provides the versatility to wirelessly connect to your computer, tablet, and smartphone simultaneously and seamlessly switch between connected devices at will. The 30m wireless range provides freedom to roam while staying connected. Transition between phone chats, video conferencing, music, and general noise reduction throughout your day—all with the same headset and happy-making acoustic performance.\r\n\r\nWireless headset\r\nRELIABLE COMFORT\r\nZone Wireless is designed for every workday. The silicone-padded headband is lightweight and provides just the right clamping force for a fit that’s so comfortable you might forget you’re wearing a high-performance headset. Soft leatherette ear pads are cushiony and breathable, so your ears don’t get hot. Zone Wireless blocks sound from the moment you put it on, and the foldable design makes it handy to stow when you take the headset off.', 'headset'),
(12, 'Logitech MX Keys for Mac Wireless Illuminated Keyboard + Palm Rest', '658.00', 'img/12.png', 'MOVE. ADJUST. TYPE.\r\nMX Palm Rest offers a sturdy support and smooth surface, which provide all-day comfort. It’s the premium palm rest you can place and position however you like. It is designed for thin keyboards, it’s the perfect fit for Logitech MX Keys or Logitech Craft.\r\nLASTING SUPPORT\r\nFirm yet comfortable wrist support keeps your hands in a nice, relaxed position so you can type comfortably for hours.\r\nHIGH-QUALITY MATERIALS\r\nSoft yet supportive memory foam is comfortable and durable — plus, it’s stain-resistant and easy to clean.', 'keybord'),
(13, 'K585 SLIM MULTI-DEVICE WIRELESS KEYBOARD', '221.00', 'img/13.png', 'MODERN, SLIM DESIGN\r\nGet a clean, modern desk setup and make a visual statement thanks to the ultra-slim profile and minimalist design of the K585 Slim Multi-Device.\r\nMAXIMIZE YOUR SPACE.\r\nThe compact design helps you get the most out of your workspace. With a number pad and all the keys you need for great productivity right at hand, there’s less arm extension, so you can work comfortably for longer. 12 FN keys for easy access and media shortcuts. Boost your productivity by customizing your experience with Logi Options+ Software.\r\nWORK SEAMLESSLY WITH EASY-SWITCH™\r\nA computer keyboard that also works with your smartphone and your tablet. The Easy Switch buttons let you switch typing between two devices with the same keyboard.\r\nStart typing a report on your computer, then switch to type a message on your phone — which can be placed in the built-in phone cradle for better multitasking.', 'keybord'),
(14, 'Mastered for Mac\r\n\r\nMX KEYS FOR MAC', '531.00', 'img/14.png', 'MASTERED FOR Mac\r\nIntroducing MX Keys for Mac® – designed to work seamlessly on your Mac and iPad®. Finished in Space Gray, MX Keys for Mac is crafted for efficiency, stability, and precision – with backlit keys that adjust to changing lighting conditions.\r\nPERFECT STROKE KEYS. MAC LAYOUT.\r\nSpherically dished keys are crafted for the shape of your fingertips – and feature Mac-only laser key printing. \r\n\r\nRounded key edges provide satisfying feedback — no matter where you strike the key. And matte coating has been applied to every key so your fingers glide effortlessly over the surface.\r\nCOMFORT, STABILITY, MINIMALISM\r\nConfidently type on a keyboard crafted for comfort, precision, and remarkable stability. The aesthetic minimalism and timeless construction fits perfectly in your Mac setup – all while looking, and feeling, superior.', 'keybord'),
(15, 'K100 RGB Mechanical Gaming Keyboard — CHERRY® MX Speed', '1107.00', 'img/15.png', 'THE CENTERPIECE OF YOUR SETUP\r\nThe K100 RGB’s refined design features a durable aluminum frame and dynamic per-key RGB backlighting accented by a 44-zone three-sided RGB LightEdge.\r\nLINEAR & FAST\r\nCHERRY MX SPEED Silver keyswitches provide lightning-fast response times with an extremely short actuation distance of just 1.2mm, perfect for fast-paced competitive gameplay.', 'keybord'),
(16, 'K70 RGB TKL CHAMPION SERIES Mechanical Gaming Keyboard — CHERRY MX Red', '664.00', 'img/16.png', 'BUILT FOR THE BEST\r\nCORSAIR CHAMPION SERIES Products were developed through years of testing with top esports professionals, built to provide everything they need to win.\r\nREADY TO COMPETE\r\nEquip yourself with the K70 RGB TKL, a competition-grade mechanical gaming keyboard featuring a portable, tenkeyless form-factor, durable aluminum frame, and a tournament mode switch for battle-readiness.\r\n\r\n', 'keybord'),
(17, 'K65 RGB MINI 60% Mechanical Gaming Keyboard — CHERRY MX Red — Black', '487.00', 'img/17.png', 'FORM MEETS FUNCTION\r\nThe K65 RGB MINI delivers big features compressed into a 60% form-factor, easily fitting into any setup for comfortable gaming.\r\nPERSONALIZE YOUR PLAY\r\nShow off your style with dynamic per-key RGB backlighting and an optional included radiant spacebar, along with a standard bottom row layout so you can swap in your own custom keycap sets.', 'keybord'),
(18, 'K55 RGB PRO LITE Gaming Keyboard', '133.00', 'img/18.png', 'LIGHT UP YOUR BATTLESTATION\r\nCustomize with six onboard lighting effects, assign a color to each lighting zone, or program your own vibrant lighting effects across five RGB lighting zones with CORSAIR iCUE software.\r\nRESIST SPILLS\r\nIP42 protection guards your keyboard against spill accidents and dust buildup so your gameplay never stops.\r\nMACRO CONTROL\r\nGain an in-game advantage with six dedicated macro keys - record onboard, program more complex macros through iCUE, or assign streaming commands through Elgato Stream Deck software.', 'keybord'),
(19, 'HS80 RGB WIRELESS Premium Gaming Headset with Spatial Audio — Carbon', '487.00', 'img/19.png', 'CATCH EVERY SOUND\r\nFrom a faint whisper to a resonating blast, a pair of custom-tuned 50mm high-density neodymium audio drivers catch every sound in exquisite detail with an expanded frequency range of 20Hz-40,000Hz.\r\nIMMERSIVE DOLBY ATMOS®\r\nPlaces the sounds of the game all around you with three-dimensional precision, so you can react faster and more accurately.', 'headset'),
(20, 'SCIMITAR RGB ELITE Optical MOBA/MMO Gaming Mouse', '353.00', 'img/20.png', '*17 fully programmable (remappable) buttons\r\n*Key slider control system lets you position the side button panel to your hand\r\n*Sculpted shape provides increased comfort and finger support\r\n*Highly precise optical sensor\r\n*Tested to 50 million clicks\r\nAT THUMB\'S REACH\r\nPatented Key Slider™ control system lets you reposition the side buttons to comfortably fit your hand and grip.\r\nALL YOUR ABILITIES\r\n12 side buttons provide instant access to custom macros and button remaps, perfect for MMOs and MOBAs.\r\n', 'mice');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `method_option` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `all_product_id` varchar(30) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`name`, `phone`, `address`, `method_option`, `all_product_id`, `total_price`) VALUES
(' Wong Yong Jie', '018-9795226', 'Utar Sungai Long ', ' Cash On Delivery', ',7', '885.66'),
(' Wong Yong Jie', '012-3456789', 'utar', ' Cash On Delivery', ',3', '619.95'),
(' Wong Yong Jie', '012-3456789', 'utar', ' Cash On Delivery', ',3', '619.95');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Test', 'Account', 'TestAccount@gmail.com', 'TestAccount'),
(21, 'Yong', 'Jie', 'YongJie@gmail.com', 'YongJie'),
(11, 'Gary', 'Liew', 'GaryLiew@gmail.com', 'GaryLiew'),
(19, 'Bo', 'Xuan', 'BoXuan@gmail.com', 'BoXuan'),
(18, 'Harry', 'C', 'HarryC@gmail.com', 'HarryC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
