DROP TABLE IF EXISTS DataSheetTypes;

DROP TABLE IF EXISTS Sections;

CREATE TABLE IF NOT EXISTS DataSheetTypes(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    hyperlink VARCHAR(256) NOT NULL
);

CREATE TABLE IF NOT EXISTS Sections(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    hyperlink VARCHAR(256) NOT NULL
);

CREATE TABLE IF NOT EXISTS DataSheet(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    m VARCHAR(8) NOT NULL,
    ws VARCHAR(8) NOT NULL,
    bs VARCHAR(8) NOT NULL,
    s VARCHAR(8) NOT NULL,
    t VARCHAR(8) NOT NULL,
    w VARCHAR(8) NOT NULL,
    a VARCHAR(8) NOT NULL,
    Ld VARCHAR(8) NOT NULL,
    Sv VARCHAR(8) NOT NULL
);

INSERT INTO
    `DataSheetTypes` (`id`, `name`, `hyperlink`)
VALUES
    (
        NULL,
        'Dedicated Transports',
        'datasheet.php?type=dedicatedTransports'
    ),
    (NULL, 'Elites', 'datasheet.php?type=elites'),
    (
        NULL,
        'Fast Attack',
        'datasheet.php?type=fastAttack'
    ),
    (NULL, 'Flyers', 'datasheet.php?type=flyers'),
    (
        NULL,
        'Fortifications',
        'datasheet.php?type=fortifications'
    ),
    (
        NULL,
        'Heavy Support',
        'datasheet.php?type=heavySupport'
    ),
    (NULL, 'HQ', 'datasheet.php?type=hq'),
    (
        NULL,
        'Lords Of War',
        'datasheet.php?type=lordsOfWar'
    ),
    (NULL, 'Troops', 'datasheet.php?type=troops');

INSERT INTO
    `Sections` (`id`, `name`, `hyperlink`)
VALUES
    (NULL, 'Data Sheets', 'datasheet.php'),
    (NULL, 'Lore', 'lore.php');