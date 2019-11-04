<?php 

    session_start();
	 class DBConnection
	{
	const DB_HOSTNAME = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'trade';
    public $_db_connect;
   
 

    function db_con()
    {
        $this->_db_connect = mysqli_connect(self::DB_HOSTNAME,self::DB_USERNAME,self::DB_PASSWORD,self::DB_NAME) or die(mysql_error());
		return($this->_db_connect);
    }
}
?>