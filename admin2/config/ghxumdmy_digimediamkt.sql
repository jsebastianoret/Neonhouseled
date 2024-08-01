-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-06-2024 a las 11:06:23
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ghxumdmy_digimediamkt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

CREATE TABLE `contactanos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `servicio` varchar(250) DEFAULT NULL,
  `numero` varchar(9) DEFAULT NULL,
  `mensaje` text,
  `emailMarck` varchar(10) DEFAULT NULL,
  `new` varchar(10) DEFAULT NULL,
  `production` varchar(10) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_hora_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactanos`
--

INSERT INTO `contactanos` (`id`, `nombre`, `email`, `servicio`, `numero`, `mensaje`, `emailMarck`, `new`, `production`, `estado`, `fecha_hora`, `fecha_hora_actualizacion`) VALUES
(139, 'Antony', '3456antonygmail.com', 'lala', '19', 'hola', NULL, NULL, NULL, NULL, '2024-05-09 14:38:08', '2024-05-09 14:38:08'),
(140, 'Daniela Infantes', 'danielamij251@gmail.com', 'Gestion de redes sociales', '999351599', 'fre', 'no', 'no', 'no', '1', '2024-05-09 14:38:50', '2024-05-09 14:39:08'),
(141, 'Mario', 'MarioOrtega@gmail.com', 'Marketing Digital', '987456321', 'prueba', 'si', 'no', 'no', '0', '2023-04-22 12:59:25', '0000-00-00 00:00:00'),
(142, 'Luis', 'LuisGamarra@gmail.com', 'Imagen Corporativa', '58485', 'prueba2', 'si', 'no', 'no', '0', '2023-04-22 15:45:58', '0000-00-00 00:00:00'),
(143, 'Saul Chavez', 'saulsneiderstudent@gmail.com', 'Diseño web', '995366424', 'Estoy interesado', 'no', 'no', 'no', '0', '2023-05-19 15:20:45', '0000-00-00 00:00:00'),
(144, 'Catherinaharf', 'catherinaharf@nicksellsdmv.com', 'Crea Tu Marca', '857265676', '¡Ηоlaǃ\r\nԚuіzás mi mensaϳe es dеmaѕiаdo eѕресíficо.\r\nРеrо mі hеrmаnа mаyor encоntró un hоmbre mаravіllоsо аquí y tienеn unа gran relacіón, рerо ¿y yо?\r\nТengo 27 añoѕ, Сatherinа, dе la Reрúblіca Сhеcа, también ѕé іnglés.\r\nY... mejоr dесirlо dе inmеdiatо. Sоy bisexual. Νо еѕtоy cеloso de оtrа muϳer... eѕреcіаlmente sі haсemoѕ el amor ϳuntoѕ.\r\n¡Αh, sí, сосіno muy rіcoǃ у mе еnсаntа nо ѕоlо сосіnar ;))\r\nЅоу unа сhіcа reаl у buѕco una relacіón serіа у саlіente...\r\nDe tоdos mоdоs, puеdеѕ еncоntrar mі реrfil аquí: http://patgeoroked.tk/usr-88006/ \r\n', 'si', 'no', 'no', '0', '0000-00-00 00:00:00', '2023-11-15 23:00:58'),
(145, 'Dawadi Jonna', 'dawadi@protonmail.com', 'Imagen Corporativa', '888229882', 'Good day Sir, \r\nWe do have 370 Kilograms of Gold Dore Bars and Nuggets here in Kenya. \r\nGold Price : $37,000 per kilo \r\nPurity :  96 / 97% \r\nCarat:   23 carats. \r\nCommission: $2,000 per kg. \r\nOur Procedures \r\nWe shall pay for the taxes and paperwork \r\nWe shall share the delivery cost \r\nBuyer will be responsible for the flight from Kenya \r\nIf buyer is bringing in his/her own aircraft, he will pay for the insurance. \r\nRegards \r\nDr Dawadi Jonna \r\nWhatsApp: +254 736 705 839 \r\nEmail: d0758661@gmail.com', 'si', 'no', 'no', '0', '0000-00-00 00:00:00', '2023-11-16 01:04:27'),
(146, 'wPTobklbRg', 'callvisvetlana@list.ru', 'Crea Tu Marca', '861543962', 'Все получится в лучшем виде https://senler.ru/a/2d0za/5job/534556554-hjhtbsGEsvQ https://google.com digimediamkt.com', 'si', 'no', 'no', '0', '0000-00-00 00:00:00', '2023-11-16 01:11:14'),
(147, 'Isabellajani', 'isabellajani@meghivotrend.com', 'Crea Tu Marca', '848271539', 'Hеllo аll, guyѕ! Ι knоw, my meѕѕage may be tоо ѕpeсifіc,\r\nΒut mу ѕiѕtеr found nicе man herе and thеy mаrried, sо how about mе?ǃ :)\r\nI аm 25 уеars old, Isаbеlla, frоm Romаniа, Ι know Εnglіsh and German lаnguagеѕ аlѕo\r\nАnd... I hаve sреcіfіс dіsеase, nаmеd nуmphomanіа. Whо knоw what iѕ thiѕ, can underѕtаnd mе (better tо sаy іt іmmеdіatelу)\r\nΑh yeѕ, Ι сoоk vеry tastу! аnd Ι love not оnly cоok ;))\r\nIm reаl gіrl, not рrоstіtutе, and lооking fоr serіоuѕ and hоt relatіоnshiр...\r\nАnywaу, you cаn find my рrоfіle hеre: http://galfordwatwall.tk/idm-47216/ \r\n', 'si', 'no', 'no', '0', '0000-00-00 00:00:00', '2023-11-18 23:15:44'),
(148, 'Tigran Ayrapetyan', 'ujn2esbgakah@opayq.com', 'Gestion De Redes Sociales', '851795545', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early repayment penalties. \r\n \r\nWe would like to review your business plan or executive summary to understand a much better idea of your business and what you are looking to do, this will assist in determining the best possible investment structure we can pursue and discuss more extensively. \r\n \r\n \r\nI hope to hear back from you soon. \r\n \r\nSincerely, \r\n \r\nTigran Ayrapetyan \r\nInvestment Director \r\nDevcorp International E.C. \r\nP.O Box 10236 Shop No. 305 \r\nFlr 3 Manama Centre, Bahrain \r\nEmail: tigran.a@devcorpinternationalec.com', 'si', 'no', 'no', '0', '0000-00-00 00:00:00', '2024-01-04 22:47:48'),
(149, 'Laura', 'laura08@agenciasubido.com', 'Marketing Digital', '655390359', '¡Hola! Me llamo Laura y estoy encantada de saludarte.\r\nQuería escribirte porque me ha parecido interesante comentar contigo la posibilidad de que tu negocio aparezca cada mes en *periódicos digitales como noticia* para posicionar en los primeros lugares de internet, es decir, con artículos reales dentro del periódico que no se marcan como publicidad y que no se borran.\r\nLa noticia es publicada por más de sesenta periódicos de gran autoridad para mejorar el *posicionamiento de tu web* y la reputación.\r\n\r\n¿Podrías facilitarme un teléfono para ofrecerte  *hasta dos meses gratuitos*?\r\nGracias', 'si', 'si', 'si', '0', '0000-00-00 00:00:00', '2024-01-18 20:55:58'),
(150, 'TqjpwpejtT', 'callvisvetlana@list.ru', 'Crea Tu Marca', '845224613', 'Вам хороший вариант вот тут ArataurNiladwyn@gmail.com 000*** digimediamkt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'oaietqitzk', 'callvisvetlana@list.ru', 'Crea Tu Marca', '815912428', 'Вам хороший вариант вот тут ArataurNiladwyn@gmail.com 000*** digimediamkt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'cZmfZBgReW', 'callvisvetlana@list.ru', 'Gestion De Redes Sociales', '855925346', 'Вам хороший вариант вот тут ArataurNiladwyn@gmail.com 000*** digimediamkt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'Juan', 'tmlighting@hotmail.com', 'Marketing Digital', '912849782', 'Prueba', 'no', 'no', 'no', '1', '2023-09-28 22:39:03', '0000-00-00 00:00:00'),
(154, 'AlenaSAl', 'alenaSAl@ramermoore.com', 'Diseno web', '846875428', 'Нello!\r\nΙ аpоlogіze for the оverlу ѕpecіfiс meѕѕаgе.\r\nMy gіrlfriend and I love еасh other. Аnd wе аrе all greаt.\r\nBut... wе need а mаn.\r\nԜe arе 26 уеаrs old, from Romaniа, wе аlsо know englіsh.\r\nWe nеver gеt borеdǃ Аnd not оnlу in talk...\r\nМу namе is Аlena, mу рrоfіlе iѕ hеre: http://klugchico.cf/rdx-73847/ \r\n', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'HGVUUY www.google.com Mob', 'clara2379@mail.ru', 'Gesti?n De Redes Sociales', 'HGVUUY ww', '', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'Ricardo Andrés León Arrieche', 'rikimaru18@gmail.com', 'Gestión De Redes Sociales', '919048102', 'Hola! Deseo recibir la asesoría gratuita ', 'si', 'si', 'si', '1', '2023-10-03 19:34:37', '0000-00-00 00:00:00'),
(157, 'Okeygorandom https://yandex.by/', 'wregree.agirelt722@bk.ru', 'Gestion De Redes Sociales', 'Okeygoran', '', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'Laura', 'laura.t@publisheragencia.com', 'Imagen Corporativa', '651690120', '¡Hola! He querido escribirte porque veo una excelente oportunidad para que tu empresa sea el foco de una *entrevista* que tengo en mente que podríamos realizar.\r\n\r\n\r\n\r\nEsta entrevista no sólo sería una conversación enriquecedora, sino que además, *se publicaría en decenas de medios* y periódicos de gran reputación. Como beneficio adicional, enlazaremos tu sitio web en la entrevista, lo cual ayudará a mejorar su posicionamiento. El hecho de que aparezcas en una entrevista en medios confiables contribuirá a generar más confianza en tu negocio.\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n¿Sería posible que me dieras un *número de teléfono* para discutir los detalles? Gracias.', 'si', 'si', 'si', '1', '2023-12-10 17:16:11', '0000-00-00 00:00:00'),
(159, 'NHEMjPhGIF', 'callvisvetlana@list.ru', 'Imagen Corporativa', '849522643', 'Вам хороший вариант вот тут ArataurNiladwyn@gmail.com 000*** digimediamkt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'QJuyFYUmVd', 'callvisvetlana@list.ru', 'Imagen Corporativa', '829929269', 'Предлагаю отличный метод, подойдет и Вам 000*** https://forms.gle/tbiFaFmK3TdQDXRJ6?utm_source=P3RMIkZK6wZ&utm_medium=w3EYDTz73J1 digimediamkt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'Elizabeth', 'elizabethcasique74@gmail.com', 'Marketing Digital', '927442174', 'Informes', 'si', 'si', 'si', '1', '2023-11-14 22:41:36', '0000-00-00 00:00:00'),
(162, 'Pitroda Satyan', 'projectdept@kanzalshamsprojectmgt.com', 'Imagen Corporativa', '852459226', 'Greetings, \r\n \r\nAm glad to connect with you, My name is Pitroda Satyan G, am an investment consultant with KANZ ALSHAMS PROJECT CONSULTANT, I have been mandated by the company to source for investment opportunities and companies seeking for funding, business loans, for its project(s). Do you have any investment or project that is seeking for capital to fund it? \r\n \r\nOur Investments financing focus is on: \r\n \r\nSeed Capital, Early-Stage, Start-Up Ventures, , Brokerage, Private Finance, Renewable Energy Project, Commercial Real Estate, Blockchain, Technology, Telecommunication, Infrastructure, Agriculture, Animal Breeding, Hospitality, Healthcare, Oil/Gas/Refinery. Application reserved for business executives and companies with proven business records in search of funding for expansion or forcapital investments.. \r\n \r\nKindly contact me for further details. \r\n \r\nawait your return e.mail soonest. \r\n \r\nRegards \r\n \r\nDr. Pitroda Satyan G \r\n \r\nKANZ ALSHAMS PROJECT CONSULTANT \r\nAddress: 72469 Jahra Road Shuwaikh Industrial \r\nTel: +968 7866 9578 \r\nEmail: info@kanzalshamsprojectmgt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'Fleyder Rutber', 'fey_flores_jaime@hotmail.com', 'Diseño Grafico', '935326417', 'Tengo conocimineto en diseño audiovisual. y edición de video e imagenes. Commo tambien conocimineto sobre 3D como modelado yanimacion.', 'no', 'no', 'no', '1', '2023-12-05 15:30:17', '0000-00-00 00:00:00'),
(164, 'Mariela ', 'vegamontalbanmariela@gmail.com', 'Marketing Digital', '962153211', 'Hola ', 'si', 'no', 'no', '1', '2023-12-06 20:20:46', '0000-00-00 00:00:00'),
(165, 'Yomira Collado Garay ', 'geminis19962010@live.com', 'Marketing Digital', '961000441', 'Trabajo parcial para hacer trabajo a domicilio ', 'si', 'si', 'no', '1', '2023-12-07 00:38:05', '0000-00-00 00:00:00'),
(166, 'KarinaSi', 'karinaSi@mikekisow.com', 'Diseno Grafico', '854125771', '¡Hоlаǃ\r\nНе nоtado ԛuе muсhоѕ сhісоѕ рrеfіеren chіcаs regulareѕ.\r\nΑplаudо a lоѕ hombrеs ԛue tuvіerоn lаs agаllаs de disfrutar еl amor dе muchaѕ mujеrеs у eligіeron a la quе sаbía ԛue ѕería ѕu mеϳor аmigа durаntе lа vida llеna dе baсheѕ y loсurаs.\r\nԚuería ser еѕa amіga, nо ѕolo unа аmа de сasа eѕtablе, cоnfiable y аburrіdа.\r\nΤеngо 26 añоѕ, Каrіna, de la Rеpública Сhесa, tаmbіén sé еl іdіoma ingléѕ.\r\nDе todоs mоdоs, рuеdes encontrar mi perfil аquí: http://barcovolvi.tk/idl-53076/ \r\n', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'Nataliasi', 'nataliasi@musicconf.com', 'Imagen Corporativa', '879489711', 'Ηеllо all, guyѕ! I know, my mеѕѕаge mау bе tоo ѕрecifіc,\r\nΒut my sіstеr found nicе man hеre and thеу marrіеd, so how abоut me?! :)\r\nI am 28 yеаrs оld, Natalіа, from Romаnia, Ι know Εnglіѕh аnd German lаnguаgeѕ also\r\nAnd... Ι havе sрeсіfіc diѕeasе, named nymphomаnіa. Ԝho knоw what iѕ thiѕ, cаn understand me (better tо saу іt immedіatеly)\r\nΑh уeѕ, Ι cook very tastyǃ аnd I lovе nоt onlу cоok ;))\r\nIm rеаl girl, not prostіtutе, and lоoking for sеrіouѕ аnd hоt relаtіonѕhір...\r\nAnywaу, уоu can fіnd my profilе hеre: http://urapir.tk/idl-89469/ \r\n', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'Christinason', 'christinason@michael1020.com', 'Diseno web', '815823898', '¡Ноlа!\r\nHе nоtаdо ԛue muсhоs chiсоѕ prеfiеrеn chісaѕ regulareѕ.\r\nАрlaudo а lоs hоmbres ԛuе tuviеrоn lаs agаllаs dе dіsfrutаr еl amor de muсhаs mujerеѕ y еligiеrоn а la que ѕabíа ԛue ѕеría ѕu mejоr аmigа durantе lа vіdа llеnа dе bасhes y loсuraѕ.\r\nԚuеríа sеr еѕa amiga, no ѕolo una аma dе сaѕа еѕtаble, сonfiаble у аburrіda.\r\nТengо 23 аñоѕ, Christіnа, de la Rерúblіcа Сheca, tambіén sé el іdіоma іngléѕ.\r\nDе tоdоs mоdos, puеdeѕ еncоntrar mі реrfіl аԛuí: http://cacomplos.tk/idl-67421/ \r\n', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'KarinaNog', 'karinaNog@packspro.com', 'Diseno web', '831726449', '¡Hоlа а todоs, сhіcоѕǃ Lо sé, mi menѕаϳe рuеdе sеr dеmaѕіаdo esреcífico,\r\nРero mi hеrmana encontró un buеn hombrе aquí у ѕe саѕаrоn, ¿у yо? :)\r\nТеngо 25 vіejоѕ añоѕ, Karinа, dе Rumaniа, también sé ingléѕ y аlemán.\r\nY... tеngo una enfеrmedad eѕресífіcа, llamаdа nіnfоmaníа. Quіén ѕabе qué es eѕtо, me puede entendеr (mеjor dесіrlо de inmеdіatо)\r\n¡Ah, sí, cоcіnо muy rico! у me encanta no sоlо cосіnаr ;))\r\nЅоу una chica dе verdad, no proѕtіtuta, у buѕco una relасіón sеrіa у cаliente...\r\nDe todоѕ modos, puеdes еnсontrar mi pеrfil aԛuí: http://mitalisdi.cf/idl-6999/ \r\n', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'Juan', 'juan@gm.com', 'Imagen Corporativa', '995491472', 'Mensaje', 'no', 'no', 'no', '1', '2023-12-28 22:46:59', '0000-00-00 00:00:00'),
(171, 'IirinaTreaw', 'felldomb@gmail.com', 'Crea Tu Marca', '875933477', '¡Hola! Ten s3x en tu ciudad hoy mismo.  -  http://tinyurl.com/mrxncvuf?Treaw', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libroreclamacion`
--

CREATE TABLE `libroreclamacion` (
  `idReclamacion` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `documento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numeroDocumento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `distrito` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tipoReclamo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `servicioContratado` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `reclamoPerson` varchar(1050) COLLATE utf8_unicode_ci NOT NULL,
  `checkReclamoForm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `aceptaPoliticaPrivacidad` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libroreclamacion`
--

INSERT INTO `libroreclamacion` (`idReclamacion`, `nombre`, `apellido`, `documento`, `numeroDocumento`, `email`, `celular`, `direccion`, `distrito`, `ciudad`, `tipoReclamo`, `servicioContratado`, `reclamoPerson`, `checkReclamoForm`, `aceptaPoliticaPrivacidad`) VALUES
(1, 'prueba1', 'prueba1', 'Dni', 'prueba1', 'sebastian.clover.52@gmail.com', '932123424', 'prueba1', 'prueba1', 'prueba1', 'Queja', 'prueba1', 'prueba1', 'on', 'on'),
(2, 'prueba2', 'prueba2', 'CE', 'prueba2', 'sebastian.clover.52@gmail.com', '932', 'prueba2', 'prueba2', 'prueba2', 'Queja', 'prueba2', 'wdwdw', 'on', 'on'),
(3, 'sebastian', 'cardenas', 'RUC', 'prueba1', 'sebastian.clover.52@gmail.com', '932', 'comas', 'prueba1', 'prueba1', 'Queja', 'prueba1', 'adsadasdsa', 'on', 'on'),
(4, 'banana san', 'Amarillo ', 'CE', '7623', '3456antony@gmail.com', '970339132', '1wsd', 'aa', 'dd', 'Queja', 'sdd', 'ss', 'on', 'on');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalbranding`
--

CREATE TABLE `modalbranding` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modalbranding`
--

INSERT INTO `modalbranding` (`id`, `nombre`, `telefono`, `correo`) VALUES
(1, 'Daniela', '0', 'danielamij251@gmail.com'),
(2, 'Tito', '0', 'mendez@gmail.com'),
(3, 'Nicolle', 'Lozano Sa', 'nicollels_18@hotmail.com'),
(4, 'Kevin Peña', '954824982', 'keevpr04@hotmail.com'),
(5, 'Camila', '922030005', 'camilacabrerat19@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modaldesing`
--

CREATE TABLE `modaldesing` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modaldesing`
--

INSERT INTO `modaldesing` (`id`, `nombre`, `telefono`, `correo`) VALUES
(1, 'Daniela', 'Infantes', 'danielamij251@gmail.com'),
(2, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(3, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(4, 'Juan Carlos Molina ', 'Molina', 'tmlighting@hotmail.com'),
(5, 'johao', 'montoya', 'johaomontoya01@gmail.com'),
(6, 'johao', 'montoya', 'johaomontoya01@gmail.com'),
(7, 'johao', 'montoya', 'johaomontoya01@gmail.com'),
(8, 'Luis', 'Cáceres', 'luisjorgejorge1919@gmail.com'),
(9, 'Luis Jorge', 'Cáceres B', 'luisjorgejorge1919@gmail.com'),
(10, 'Branco Manuel', 'Arguedas ', 'bm.arguedasv@gmail.com'),
(11, 'Luis Jorge', 'Cáceres B', 'luisjorgejorge1919@gmail.com'),
(12, 'Juan', 'Jhon', 'juansuarezf16@gmail.com'),
(13, 'Juan carlos', 'Molina or', 'tmlighting@hotmail.com'),
(14, 'jennyfer Jesus ', 'Horna Vil', 'hornavillarjenni@gmail.com'),
(15, 'Nicolle', 'Lozano Sa', 'nicollels_18@hotmail.com'),
(16, 'Gabriela', 'Chinga Pa', 'gabychinga@gmail.com'),
(17, 'Zack', '970339137', 'axellaziness@gmail.com'),
(18, 'Antony Aranda', '970339137', 'axellaziness@gmail.com'),
(19, 'Antony Aranda', '970339137', 'axellaziness@gmail.com'),
(20, 'Zack', '970339137', 'axellaziness@gmail.com'),
(21, 'prueba', '940759137', 'taodrake01@gmail.com'),
(22, 'Antony Aranda', '970339137', 'axellaziness@gmail.com'),
(23, 'Nicolle Lozano', '993771339', 'nicollels_18@hotmail.com'),
(24, '123', '988777666', 'diegolevanososa@gmail.com'),
(25, 'Franco', '990269910', 'lopezurcia@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalgestion`
--

CREATE TABLE `modalgestion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modalgestion`
--

INSERT INTO `modalgestion` (`id`, `nombre`, `telefono`, `correo`) VALUES
(1, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(2, 'Daniela', 'Infantes', 'danielamij251@gmail.com'),
(3, 'sebastian', 'Cardenas', 'sebastian.clover.52@gmail.com'),
(4, 'asdadas', 'cardenas', 'taodrake01@gmail.com'),
(5, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(6, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(7, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(8, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(9, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(10, 'Antony Aranda', '970339137', 'axellaziness@gmail.com'),
(11, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(12, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(13, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(14, 'Daniela Michelle Infantes Juárez ', '999355516', 'danielamij251@gmail.com'),
(15, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(16, 'jennyfer Jesus ', '943004092', 'hornavillarjenni@gmail.com'),
(17, 'Jennyfer Jesus Horna Villar ', '943004092', 'jenny30052002@gmail.com'),
(18, 'Akiro', '987063652', 'akirothor@gmail.com'),
(19, 'Kado12', '912151197', 'gonzalosh01@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalmarketing`
--

CREATE TABLE `modalmarketing` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modalmarketing`
--

INSERT INTO `modalmarketing` (`id`, `nombre`, `telefono`, `correo`) VALUES
(1, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(2, 'Daniela', 'Infantes', 'undefined'),
(3, 'asdadas', 'cardenas', 'undefined'),
(4, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(5, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(6, 'asdadas', 'cardenas', 'undefined'),
(7, 'johao', 'montoya', 'undefined'),
(8, 'Antony', 'Aranda', 'undefined'),
(9, 'Nicolle', 'Lozano Sa', 'undefined'),
(10, 'pingui', '929177594', 'undefined'),
(11, 'prueba1', '940759137', 'undefined'),
(12, 'prueba1', '940759137', 'undefined'),
(13, 'Renzo', '956185681', 'undefined'),
(14, 'Franco', '990269910', 'lopezurcia@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personcamino5`
--

CREATE TABLE `personcamino5` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personcamino5`
--

INSERT INTO `personcamino5` (`id`, `nombre`, `email`, `telefono`) VALUES
(1, 'juka', 'yuntasproducciones@gmail.com', '912 849 782'),
(2, 'Daniela Infantes', 'danielamij251@gmail.com', '999 351 599'),
(3, 'carloss', 'informestami01@gmail.com', '978 883 199'),
(4, 'Juan carlos', 'yuntasproducciones@gmail.com', '912849782'),
(5, 'Daniela Infantes', 'danielamij251@gmail.com', '999 351 599'),
(6, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(7, 'sebastian', 'taodrake01@gmail.com', '940759137'),
(8, 'sebastian', 'taodrake01@gmail.com', '940759137'),
(9, 'sebastian', 'sebastian.clover.52@gmail.com', '940759137'),
(10, 'jennyfer Jesus ', 'hornavillarjenni@gmail.com', '943004092'),
(11, 'Antony Aranda', 'axellaziness@gmail.com', '970339137');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personcampañas3`
--

CREATE TABLE `personcampañas3` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personcampañas3`
--

INSERT INTO `personcampañas3` (`id`, `nombre`, `telefono`, `email`) VALUES
(1, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(2, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(3, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(4, 'Daniela Infantes', '999 351 599', 'danielamij251@gmail.com'),
(5, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(6, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(7, 'carloss', '936910425', 'ventasneonhouse@gmail.com'),
(8, 'Daniela Infantes', '999 351 599', 'danielamij251@gmail.com'),
(9, 'carloss', '912 849 782', 'yuntasproducciones@gmail.com'),
(10, 'Juan carlos', '912849782', 'yuntasproducciones@gmail.com'),
(11, 'Diego MF', '900265655', 'dmarquezf11@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persondigi1`
--

CREATE TABLE `persondigi1` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `service` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persondigi1`
--

INSERT INTO `persondigi1` (`id`, `nombre`, `telefono`, `email`, `service`) VALUES
(1, 'Rosa Jhannis ', '978 883 199', 'informestami01@gmail.com', 'branding'),
(2, 'carloss', '978 883 199', 'informestami01@gmail.com', 'branding'),
(3, 'juka', '936910425', 'ventasneonhouse@gmail.com', 'marketing'),
(4, 'carloss', '912 849 782', 'yuntasproducciones@gmail.com', 'redes'),
(5, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', 'redes'),
(6, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '1'),
(7, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '1'),
(8, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', 'diseño'),
(9, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '1'),
(10, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '1'),
(11, 'Daniela Infantes', '999 351 599', 'danielamij251@gmail.com', '2'),
(12, 'Daniela Infantes', '999 351 599', 'danielamij251@gmail.com', '2'),
(13, 'aaaa', '970339137', 'axellaziness@gmail.com', '0'),
(14, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com', '0'),
(15, 'Antony Aranda', '970339137', '3456antony@gmail.com', '2'),
(16, 'Antony Aranda', '970339137', '3456antony@gmail.com', '1'),
(17, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com', '0'),
(18, 'johao montoya', '910376683', 'johaomontoya01@gmail.com', '0'),
(19, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '1'),
(20, 'Daniela Infantes', '999355516', 'danielamij251@gmail.com', '1'),
(21, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(22, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(23, 'Gabriela Chinga Pastor', '991494279', 'gabychinga@gmail.com', '0'),
(24, 'Victor Miguel Granda Herrera', '966956176', 'grandahvictor@gmail.com', '0'),
(25, 'Victor Miguel Granda Herrera', '966956176', 'grandahvictor@gmail.com', '0'),
(26, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(27, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com', '0'),
(28, 'dikalz', '931805941', 'dikalzeeuu@gmail.com', '0'),
(29, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '1'),
(30, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(31, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(32, 'Gabriela Chinga Pastor', '991494279', 'gabychinga@gmail.com', '0'),
(33, 'Levanoi', '989898989', 'dikalzeeuu@gmail.com', '2'),
(34, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(35, 'asds', '999888777', 'dikalzeeuu@gmail.com', '1'),
(36, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', 'Diseño y Desarrollo Web'),
(37, 'Diaklz', '931805941', 'dikalz@gmail.com', 'Diseño y Desarrollo Web'),
(38, 'sdasd sadas ', '931805941', 'dikalzeeuu@gmail.com', 'Diseño y Desarrollo Web'),
(39, 'sdasd sadsa ', '994673564', '123@gmail.com', 'Diseño y Desarrollo Web'),
(40, 'sdasd', '931805941', 'asdsd@gmail.com', 'Gestión de Redes Sociales'),
(41, 'sadasd', '931805941', 'asdasd@gmail.com', 'Marketing y Gestión Digital'),
(42, '123', '931805941', 'diegolevanososa@gmail.com', 'Diseño y Desarrollo Web'),
(43, '123', '931805941', '123@gmail.com', 'Diseño y Desarrollo Web'),
(44, 'Ssndkska', '931805941', 'Ajjsa@gmail.com', 'Diseño y Desarrollo Web'),
(45, '2323', '931805941', '122@gmail.com', 'Diseño y Desarrollo Web'),
(46, '12112', '931805941', '123@gmail.com', 'Diseño y Desarrollo Web'),
(47, 'diego', '931805941', '123@gmail.com', 'Diseño y Desarrollo Web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personredes4`
--

CREATE TABLE `personredes4` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personredes4`
--

INSERT INTO `personredes4` (`id`, `nombre`, `telefono`, `email`) VALUES
(1, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(2, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(3, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(4, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(5, 'Rosa Jhannis ', '936910425', 'ventasneonhouse@gmail.com'),
(6, 'Juan carlos', '936910425', 'yuntasproducciones@gmail.com'),
(7, 'juka', '978 883 199', 'informestami01@gmail.com'),
(8, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personweb2`
--

CREATE TABLE `personweb2` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personweb2`
--

INSERT INTO `personweb2` (`id`, `nombre`, `email`, `telefono`) VALUES
(1, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(2, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(3, 'Antony Aranda', 'axellaziness@gmail.com', '970339137'),
(4, 'Antony Aranda', 'axellaziness@gmail.com', '970339137'),
(5, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(6, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(7, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(8, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(9, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(10, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(11, 'Daniela', 'danielamij251@gmail.com', '999351599'),
(12, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(13, 'carloss', 'informestami01@gmail.com', '978 883 199'),
(14, 'Daniela Infantes', 'danielamij251@gmail.com', '999 351 599'),
(15, 'carloss', 'informestami01@gmail.com', '978 883 199'),
(16, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(17, 'carloss', 'tmlighting@hotmail.com', '936910425'),
(18, 'Juan', 'dmarquezf11@gmail.com', '900265655'),
(19, 'johao montoya', 'kodabarbitas87@gmail.com', '910376683');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posting_blog`
--

CREATE TABLE `posting_blog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `contenido` text,
  `link` text,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `nombre`, `rol`) VALUES
(1, 'Admin', 'Admin2023', 'Jorge Mandieta\n', 'Administrador'),
(41, 'Jang', '13232434', 'Elli', 'Usuario'),
(42, 'CardenasS', '123456789878', 'Sebastian', 'Usuario'),
(43, 'Seong', '12345678', 'Johan', 'Administrador'),
(44, 'leeeSna', '12345678', 'Zack', 'Usuario'),
(55, 'Huaman', '122334fd4r4t', 'Veliz', 'Administrador'),
(56, 'Wang', '123456789', 'Olly', 'Administrador'),
(57, 'Hernandez', 'lunaher123', 'Luna', 'Administrador'),
(58, 'usuario1', '123456', 'Usuario nuevo', 'Administrador'),
(59, 'Milton M.S.', 'Admin2024', 'Milton Uriel Martinez Sierra', 'Administrador'),
(60, 'Axel S.Z.', 'Admin2024', 'Axel Omar Saucedo Zambrano', 'Administrador'),
(61, 'Fiorella E.A.', 'Admin2024', 'Fiorella Estefania Espinoza Aguirre', 'Administrador'),
(62, 'Jennyfer H.V', 'Admin2024', 'Jennyfer Jesus Horna Villar', 'Administrador'),
(63, 'Nicolle L.S.', 'Admin2024', 'Nicolle Lozano Salazar', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libroreclamacion`
--
ALTER TABLE `libroreclamacion`
  ADD PRIMARY KEY (`idReclamacion`);

--
-- Indices de la tabla `modalbranding`
--
ALTER TABLE `modalbranding`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modaldesing`
--
ALTER TABLE `modaldesing`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalgestion`
--
ALTER TABLE `modalgestion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalmarketing`
--
ALTER TABLE `modalmarketing`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personcamino5`
--
ALTER TABLE `personcamino5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personcampañas3`
--
ALTER TABLE `personcampañas3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persondigi1`
--
ALTER TABLE `persondigi1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personredes4`
--
ALTER TABLE `personredes4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personweb2`
--
ALTER TABLE `personweb2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posting_blog`
--
ALTER TABLE `posting_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT de la tabla `libroreclamacion`
--
ALTER TABLE `libroreclamacion`
  MODIFY `idReclamacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modalbranding`
--
ALTER TABLE `modalbranding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `modaldesing`
--
ALTER TABLE `modaldesing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `modalgestion`
--
ALTER TABLE `modalgestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `modalmarketing`
--
ALTER TABLE `modalmarketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `personcamino5`
--
ALTER TABLE `personcamino5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `personcampañas3`
--
ALTER TABLE `personcampañas3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `persondigi1`
--
ALTER TABLE `persondigi1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `personredes4`
--
ALTER TABLE `personredes4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personweb2`
--
ALTER TABLE `personweb2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `posting_blog`
--
ALTER TABLE `posting_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
