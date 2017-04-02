USE test;

SELECT nimi, puur FROM jahhundoLoomaaed WHERE puur=1;

SELECT MAX(vanus) AS vanim, MIN(vanus) AS noorim FROM jahhundoLoomaaed;

SELECT puur, COUNT(puur) AS 'loomade arv' FROM jahhundoLoomaaed GROUP BY puur;

 UPDATE jahhundoLoomaaed SET vanus= vanus + 1;

