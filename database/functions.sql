DROP PROCEDURE IF EXISTS add_topic;

DELIMITER //
CREATE PROCEDURE add_topic (
	  _topic VARCHAR(250),
      _uid int,
    OUT output VARCHAR(500)
)
BEGIN
    DECLARE _color VARCHAR(250);
	  SET output = "";

    IF _topic != "" THEN
    BEGIN

            SET _color = (SELECT color FROM color ORDER BY RAND() LIMIT 1);

						INSERT INTO topic		(description, color, uid) VALUES  (_topic, _color, _uid);

						SET output = "Topic added!";


    END;
	ELSE
		SET output = "Something went wrong please try again!";
    END IF;
END;
//
DELIMITER ;

-- test proc
 CALL add_topic('message', 1, @return);
 SELECT @return;
