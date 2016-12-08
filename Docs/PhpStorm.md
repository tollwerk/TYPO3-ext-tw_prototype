# PHPStorm configuration

## 1. Configure a remote PHP interpreter

1. ![Add a new PHP interpreter](Images/Remote_PHP_Interpreter_01.png)
2. ![Select "Remote ..."](Images/Remote_PHP_Interpreter_02.png)
3. ![Enter connection credentials](Images/Remote_PHP_Interpreter_03.png)
4. ![Name it appropriately](Images/Remote_PHP_Interpreter_04.png)
5. ![Create a new path mapping](Images/Remote_PHP_Interpreter_05.png)
6. ![Map your local to the remote environment](Images/Remote_PHP_Interpreter_06.png)

## 2. Configure PHPUnit

1. ![Add a new PHPUnit configuration for the remote PHP interpreter](Images/PHPUnit_01.png)
2. ![Select your remote PHP interpreter](Images/PHPUnit_02.png)
3. ![Point PHPUnit to your composer autoloader](Images/PHPUnit_03.png)

## 3. Configure the test runner

1. ![Create a new Run Configuration](Images/Run_Configuration_01.png)
1. ![Point it to your PHPUnit configuration](Images/Run_Configuration_02.png)
1. ![Add the TYPO3_PATH_WEB environment variable](Images/Run_Configuration_03.png)
