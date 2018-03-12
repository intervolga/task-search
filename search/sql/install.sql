CREATE TABLE `search` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `search` (`ID`, `NAME`, `URL`) VALUES
(1, 'Работа для программиста', 'https://www.intervolga.ru/'),
(2, 'Работа для менеджера', 'https://www.intervolga.ru/'),
(3, 'Работа для маркетолога', 'https://www.intervolga.ru/'),
(4, 'Работа для верстальщика', 'https://www.intervolga.ru/');

ALTER TABLE `search`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `search`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;