DROP TABLE game;
DROP TABLE customer;
DROP TABLE purchase;
DROP TABLE banking_details;

CREATE TABLE game 
(
	game_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
	cost DOUBLE (6, 2) NOT NULL,
    genre VARCHAR(100),
    release_date DATE,
    developer VARCHAR(200),
    publisher VARCHAR(200),
	description VARCHAR(1000) NOT NULL
);

INSERT INTO game(title, cost, genre, release_date, developer, publisher, description)
VALUES 
(
	"One Last Trip", 
	15.50, 
	"Survival/Immersive Sim", 
	"2022-10-12", 
	"Two Dudes", 
	"TBD", 
	"You play as an ex spec-ops soldier gone smuggler, who is caught and coerced into a rescue mission in the quarantine zone. In a devastated city infested with the undead and a host of nightmarish monsters, your wits will be your greatest aid in surviving, and perhaps uncovering a government conspiracy in the process. Like Escape from New York meets Resident Evil, with Looking Glass design philosophy at its heart."
);

INSERT INTO game(title, cost, genre, release_date, developer, publisher, description)
VALUES 
(
	"Old World Treasures",
	10.00,
	"Adventure",
	"2023-12-12",
	"Two Dudes",
	"TBD",
	"150 years after the apocalypse, humanity is adapting well to the new world. A scavenger for hire takes a lucrative job to find a piece of mystical old-world tech, but with several factions and powerful individuals also on the hunt, is it worth the risk? Like Tomb Raider meets Mad Max."
);

INSERT INTO game(title, cost, genre, release_date, developer, publisher, description) 
VALUES 
(
	"Beneath the Waves",
	20.35,
	"Survival Horror",
	"2025-07-15",
	"Two Dudes",
	"Two Dudes",
	"A deep-sea research base goes silent after a series of unsettling transmissions. Players control a member of the rescue team sent to investigate. Inside the base, a biological horror has mutated most of the crew and continues to spread. Game boasts a revolutionary 3D liquid physics system with lifelike simulation, allowing for unparalleled environmental puzzles and perilous scenarios."
);

INSERT INTO game(title, cost, genre, developer, description) 
VALUES 
(
	"Hell Night",
	5.99,
	"Rail Shooter",
	"Two Dudes",
	"When the sky turns red and all Hell breaks loose, when the dead walk and the living fall into a murderous frenzy, when the ground opens and demons pour out, one madman arms up, for he has a bone to pick with the Devil."
);

INSERT INTO game(title, cost, description) 
VALUES 
(
	"A Game",
	9999.99,
	"You can buy it, how cool is that?!"
);

INSERT INTO game(title, cost, genre, description) 
VALUES 
(
	"New Earth",
	40.99,
	"RPG/Simulation",
	"1200 years after a mysterious cataclysm ravaged Earth and altered the laws of physics, Earth is unrecogniseable from its former self. This game is an open-ended high fantasy life simulator in a world uncannily similar to Earth. Whether you want to be a baker, innkeeper or paladin, a king or even a God, it's all possible."
);

INSERT INTO game(title, cost, genre, description) 
VALUES 
(
	"Path of the Enlightened",
	15.50,
	"Action/Adventure/Beat 'Em Up",
	"Set in the New Earth universe 600 years after the disaster, a cybernetically enhanced martial artist is sent from his undersea sanctuary to journey across the wastelands and bring his wayward brother home, all while adhering to the code of honour."
);

INSERT INTO game(title, cost, genre, description) 
VALUES 
(
	"Old World Justice",
	20.01,
	"First Person Shooter",
	"A New Earth Game, 600 years post disaster. When an apprentice engineer in the city loses her father and suffers a severe spinal injury by the hands of mysterious mercenaries, she spends the next decade recovering and training. With metal exo-legs, an arsenal of weapons and a heart full of fury, she's ready to take revenge, and perhaps even make the new world a better place in the process. Like Quake meets Devil May Cry."
);

INSERT INTO game(title, cost, genre, description) 
VALUES 
(
	"Breaking Protocol",
	20.00,
	"Stealth",
	"Play as a hacker for hire in a near future techno-dystopia. Your enemies' security systems are your greatest weapon."
);


CREATE TABLE customer
(
	cust_id INT AUTO_INCREMENT PRIMARY KEY,
	-- Cust num implemented after making the mistake of using a random number generator for IDs. Necessary to allow more than one insert on registration.
	cust_num INT,
	cust_username VARCHAR(100) NOT NULL,
	cust_fn VARCHAR(100) NOT NULL,
	cust_sn VARCHAR(100) NOT NULL,
	cust_email VARCHAR (100) NOT NULL,
	cust_password VARCHAR (100) NOT NULL
);

INSERT INTO customer(cust_username, cust_fn, cust_sn, cust_email, cust_password)
VALUES
(
	"bigbillybobbington", "Billy", "Bobson", "bigbilly@gmail.com", "SillyBillyx1000"
);

INSERT INTO customer(cust_username, cust_fn, cust_sn, cust_email, cust_password)
VALUES
(
	"bot", "Definitely", "Human", "human@bots.com", "HumanPassword"
);

INSERT INTO customer(cust_username, cust_fn, cust_sn, cust_email, cust_password)
VALUES
(
	"hughmann", "Hugh", "Mann", "hughmann@bots.com", "HumanPassword"
);

INSERT INTO customer(cust_username, cust_fn, cust_sn, cust_email, cust_password)
VALUES
(
	"megakaren9000", "Karen", "Managerson", "numan@bots.com", "HumanPassword"
);

INSERT INTO customer(cust_username, cust_fn, cust_sn, cust_email, cust_password)
VALUES
(
	"obviousbot", "Possibly", "Human", "nothuman@bots.com", "NotHumanPassword500"
);


CREATE TABLE banking_details
(
	acc_id INT AUTO_INCREMENT PRIMARY KEY,
	cust_full_name VARCHAR(100) NOT NULL,
	card_num INT(16) NOT NULL, 
	sec_code INT(3) NOT NULL,
	expire_date DATE NOT NULL,
	account_num INT(8),
	sort_code INT(6)
);

INSERT INTO banking_details(cust_full_name, card_num, sec_code, expire_date, account_num, sort_code) 
VALUES
(
	"Definitely Human", 1234567891012345, 123, 2026-06-06, 12345678, 123456
);

INSERT INTO banking_details(cust_full_name, card_num, sec_code, expire_date, account_num, sort_code) 
VALUES
(
	"Billy Bobson VIII", 2222222222222222, 222, 2022-02-02, 22222222, 222222
);

CREATE TABLE purchase
(
	purchase_id INT AUTO_INCREMENT PRIMARY KEY,
	account_id INT NOT NULL,
	customer_id INT NOT NULL,
	product_id INT NOT NULL,
	purchase_date DATE NOT NULL
);

INSERT INTO purchase(account_id, customer_id, product_id, purchase_date)
VALUES 
(
	2, 1, 3, "2021-05-15"
);



