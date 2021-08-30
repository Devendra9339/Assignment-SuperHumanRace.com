<?php 
SELECT MANAGER_ID, min(SALARY)
FROM employees
WHERE MANAGER_ID IS NOT NULL
GROUP BY MANAGER_ID
ORDER BY min(SALARY) DESC;


//output accornding to query is
MANAGER_ID	min(SALARY) 	FIRST_NAME	LAST_NAME
102	        9000.00	        Alexander	Hunold
0	        24000.00	    Steven	    King
100	        17000.00	    Neena	    Kochhar



