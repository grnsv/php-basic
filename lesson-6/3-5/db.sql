DROP DATABASE IF EXISTS `db`;
CREATE DATABASE `db`;
USE `db`;

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `author` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `tel` VARCHAR(100) DEFAULT NULL,
  `text` TEXT NOT NULL,
  PRIMARY KEY (`author`,`email`)
);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` SERIAL,
  `name` VARCHAR(250) NOT NULL,
  `image_path` VARCHAR(100) NOT NULL,
  `short-description` TEXT NOT NULL,
  `certificate` VARCHAR(100) NOT NULL,
  `manufacturer` VARCHAR(100) NOT NULL,
  `full-description` TEXT DEFAULT NULL
);

INSERT INTO db.products (name,image_path,`short-description`,certificate,manufacturer,`full-description`) VALUES
	 ('Материал стоматологический реставрационный универсальный Filtek Z250&nbsp;в наборе 6020E','./img/FiltekZ250-6020E.jpg','Микрогибридный композитный материал для восстановления по&nbsp;двухопаковой методике','ФСЗ 2009/04236','3M ESPE Dental Products, США','Микрогибридный композитный материал для восстановления по&nbsp;двухопаковой методике.
Дозаторы, заполненные пломбировочным материалом Filtek Z250&nbsp;оттенков: А1, А2, А3, А3.5, В3, С2, D3, UD&nbsp;(по&nbsp;1&nbsp;шт. каждого оттенка, по&nbsp;4&nbsp;г); адгезив стоматологический Adper Single Bond&nbsp;2 (6&nbsp;г); дозатор с&nbsp;протравочным гелем Scotchbond Universal в&nbsp;виде&nbsp;35% ортофосфорной кислоты (3&nbsp;мл); наконечники для дозатора (25&nbsp;шт.); ячейки для смешивания (48&nbsp;шт.); кисточкодержатели (2&nbsp;шт.); шкала отенков (1&nbsp;шт.); набор Sof-Lex пробный; аппликаторы микрогубчатые; блокнот для смешивания.'),
	 ('Убистезин форте, раствор для инъекций [с эпинефрином], 40 мг+10 мкг/мл, 1.7 мл - картриджи (50 шт.) - банки жестяные - По рецепту','./img/UbistesinForte.png','Убистезин форте&nbsp;&mdash; комбинированный препарат для местной анестезии в&nbsp;стоматологии. Входящий в&nbsp;его состав артикаин&nbsp;&mdash; местный анестетик амидного типа тиафеновой группы. Действие препарата начинается быстро&nbsp;&mdash; через 1-3&nbsp;минуты.','П N016047/01','3М Дойчланд ГмбХ, Германия','Убистезин форте&nbsp;&mdash; комбинированный препарат для местной анестезии в&nbsp;стоматологии. Входящий в&nbsp;его состав артикаин&nbsp;&mdash; местный анестетик амидного типа тиафеновой группы. Действие препарата начинается быстро&nbsp;&mdash; через 1-3&nbsp;минуты.
Продолжительность анестезии составляет не&nbsp;менее 75&nbsp;минут. Заживление раны протекает без осложнений, что обусловлено хорошей тканевой переносимостью и&nbsp;минимальным сосудосуживающим действием.'),
	 ('Ультракаин® Д-С форте, раствор для инъекций, 40 мг+0.01 мг/мл, 1.7 мл - картриджи (100 шт.) - пачки картонные - По рецепту','./img/UltracainDSForte.jpg','Комбинированный местноанестезирующий препарат, в&nbsp;состав которого входит артикаин (местноанестезирующее средство амидного типа) и&nbsp;эпинефрин (сосудосуживающее средство), которое добавляется в&nbsp;состав препарата для пролонгирования продолжительности анестезии.','П N015117/01','Санофи-Авентис Дойчланд ГмбХ, Германия','Комбинированный местноанестезирующий препарат, в&nbsp;состав которого входит артикаин (местноанестезирующее средство амидного типа) и&nbsp;эпинефрин (сосудосуживающее средство), которое добавляется в&nbsp;состав препарата для пролонгирования продолжительности анестезии.
Амидная структура артикаина подобна структуре других местноанестезирующих средств, но&nbsp;в&nbsp;его молекуле содержится одна дополнительная эфирная группа, которая в&nbsp;организме человека быстро гидролизуется эстеразами. С&nbsp;быстрым разрушением артикаина до&nbsp;его неактивного метаболита (артикаиновой кислоты) связана очень низкая системная токсичность препарата, позволяющая проводить повторные инъекции препарата.
Местноанестезирующие средства вызывают обратимую потерю чувствительности вследствие прекращения или уменьшения проводимости сенсорных нервных импульсов непосредственно в&nbsp;месте инъекции и&nbsp;вокруг него. Они обладают мембраностабилизирующим эффектом за&nbsp;счет снижения проницаемости мембран нервных клеток для ионов натрия.
Препарат оказывает быстрое (латентный период&nbsp;&mdash; от&nbsp;1&nbsp;до&nbsp;3&nbsp;мин) и&nbsp;сильное анестезирующее действие и&nbsp;имеет хорошую тканевую переносимость. Продолжительность анестезии составляет не&nbsp;менее 75&nbsp;мин.');
