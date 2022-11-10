
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;





CREATE TABLE 'contact_form' (
  'id' int(100) NOT NULL,
  'name' varchar(100) NOT NULL,
  'email' varchar(100) NOT NULL,
  'number' varchar(10) NOT NULL,
  'message' varchar(500) NOT NULL
)

INSERT INTO 'contact_form' ('id', 'name', 'email', 'number', 'message') VALUES
(5, '', '', '', '');


ALTER TABLE 'contact_form'
  ADD PRIMARY KEY ('id');

ALTER TABLE 'contact_form'
  MODIFY 'id' int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

