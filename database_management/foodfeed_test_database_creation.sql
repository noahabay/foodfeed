DROP SCHEMA IF EXISTS foodWebsite;

CREATE SCHEMA IF NOT EXISTS foodWebsite;

USE foodWebsite;

CREATE TABLE users (
    userID int AUTO_INCREMENT,
    privateID varchar(255),
	userName varchar(255),
	firstName varchar(255),
    lastName varchar(255),
	emailAddress varchar(255),
	registrationDate datetime,
    verificationStatus bool,
    profileVisibility bool,
    PRIMARY KEY (userID),
	INDEX NAME (privateID)
);

CREATE TABLE userSaltAndPepper(
	privateID varchar(255),
    userSalt varchar(32),
    userPepper varchar(32),
    PRIMARY KEY (privateID)
    );
    
CREATE TABLE userHashes(
	privateID varchar(255),
	passwordHash varchar(32),
    PRIMARY KEY (privateID)
    );
    
CREATE TABLE restaurantChains(
	chainID int AUTO_INCREMENT,
    PRIMARY KEY (chainID)
    );
    
CREATE TABLE restaurantLocations(
	locationID int AUTO_INCREMENT,
    chainID int,
    PRIMARY KEY (locationID),
    FOREIGN KEY (chainID) REFERENCES restaurantChains(chainID)
    );

CREATE TABLE restaurantMenu(
	menuID int AUTO_INCREMENT,
    locationID int,
    PRIMARY KEY (menuID),
	FOREIGN KEY (locationID) REFERENCES restaurantLocations(locationID)
	);
    
CREATE TABLE menuItem(
	itemID int AUTO_INCREMENT,
    menuID int,
    PRIMARY KEY (itemID),
    FOREIGN KEY (menuID) REFERENCES restaurantMenu(menuID)
	);
