CREATE TABLE personen (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255) NOT NULL,
    Passwort VARCHAR(255) NOT NULL
);

-- Beispiel-Daten in die Tabelle personen einfügen
INSERT INTO personen (Name, Passwort) VALUES
('Linus', '1234'),
('Bogdan', '5678');

-- Tabelle für Matches erstellen
CREATE TABLE matches (
    MatchID INT PRIMARY KEY AUTO_INCREMENT,
    SiegerID INT,
    VerliererID INT,
    DatumUhrzeit DATETIME,
    ZeitInSekunden INT,
    FOREIGN KEY (SiegerID) REFERENCES personen(ID),
    FOREIGN KEY (VerliererID) REFERENCES personen(ID)
);

-- Beispiel-Daten in die Tabelle matches einfügen
INSERT INTO matches (SiegerID, VerliererID, DatumUhrzeit, ZeitInSekunden) VALUES
(1, 2, '2024-06-13 10:00:00', 120),
(2, 1, '2024-06-13 11:00:00', 150);
