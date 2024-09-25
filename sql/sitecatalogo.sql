# Host: localhost:3307  (Version 5.7.23-log)
# Date: 2024-09-24 21:30:09
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "despesas"
#

CREATE TABLE `despesas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(10,2) DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "despesas"
#

INSERT INTO `despesas` VALUES (1,100.65,'teadafadf','2020-11-20 20:25:40','2020-11-20 20:25:40'),(2,25.58,'teste novamente','2020-11-20 20:26:06','2020-11-20 20:26:06');

#
# Structure for table "products"
#

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "products"
#

INSERT INTO `products` VALUES (1,'Celular Motorola One Hyper',1750.90,10,'Tire fotos incrivelmente detalhadas com o sensor de ultra resolução da câmera principal de 64 MP. Além disso, faça selfies com muito brilho e nitidez com uma câmera pop-up de 32 MP. As câmeras contam com tecnologia Quad Pixel que proporciona 4x mais sensibilidade à luz e o modo Night Vision* para fotos mais nítidas e iluminadas mesmo no escuro.','default.png','2017-04-14 14:45:26','2017-04-14 15:56:56'),(8,'Celular iPhone X',4980.89,10,'Maior desempenho\nSua memória RAM de 3 GB, lhe permitirá executar vários aplicativos ao mesmo tempo, jogar e navegar rapidamente e sem inconvenientes.\n<br>\nExperiência visual incrível\nAssista às suas séries e filmes favoritos com a melhor definição por meio de sua tela de OLED de 5.8\". Desfrute de cores brilhantes e detalhes precisos em todo o seu conteúdo.','iphone1.jpg','2017-06-23 19:11:14','2017-06-24 14:04:31'),(9,'TV Samsung 65 pol.',4589.99,10,'Samsung: Smart TV LED 65\" UHD 4K Samsung 65TU8000 Crystal UHD, Borda Infinita, Alexa Built In, Visual Livre de Cabos, Modo Ambiente Foto, Controle Único - 2020','default.png','2017-06-23 19:11:14','2017-06-24 14:04:31'),(10,'Soundbar JBL 2.1',1356.99,10,'Potencia de 150 watts PMPOA JBL Cinema SB160 produz 110 W RMS de potência e vem com Dolby Digital, conexões ótica de HDMI ARC, quatro poderosos drivers full-range e um subwoofer sem fio. ','default.png','2017-06-23 19:11:14','2017-06-24 14:04:31'),(11,'TV LG 75 pol.',5687.89,10,'Maravilhe-se com os novos recursos inteligentes. A tecnologia de Inteligência Artificial ThinQ AI da LG que ouve, pensa e responde evoluiu e está ainda mais inteligente. Agora ela entende o histórico e contexto dos seus comandos e estabelece uma conversa com você.','LG4.jpg','2017-06-23 19:11:14','2017-06-23 19:11:14'),(12,'Celular Samsung Galaxy S8',2567.99,10,'O Samsung Galaxy S8 chega ao mercado com um novo conceito de tela. Com layout diferenciado o smartphone permite que o usuário veja todo seu conteúdo em uma tela infinita. O modelo de alto desempenho e design inovador é lançado com características únicas, além de ser leve e fino.','default.png','2017-06-23 19:11:14','2017-06-23 19:11:14'),(13,'Fone JBL',200.00,10,'Mussum Ipsum, cacilds vidis litro abertis. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Detraxit consequat et quo num tendi nada','default.png','2020-10-27 20:18:00','2020-10-27 20:18:00');
