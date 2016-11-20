<?php
/**
    Подключаем файл с параметрами.
    Файл с параметра коннекшина вида:
    final class dbParams
    {
        const host = "";
        const user = "";
        const pass = "";
        const base = "";
    }
 */
include_once "dbParams.php";

/**
 * Class dbCon Класс конекшиона с базой
 */
class dbCon
{
    /**
     * @var $conn MySQLi
     */
    private static $conn;

    /**
     * Октрываем соединение с БД
     */
    public static function init(){
        self::$conn = new MySQLi( dbParams::host, dbParams::user, dbParams::pass, dbParams::base );
        if( self::$conn->connect_error )
            throw new Exception('Не удалось устновить соединени с БД');
        else
            self::$conn->query("SET NAMES UTF8");
    }

    /**
     * @param $_query
     * @return bool|mysqli_result
     * @throws Exception
     */
    public static function executeQuery($_query ){
        $result = self::$conn->query($_query);
        if( $result )
            return $result;
        else{
            /** если не вышло кидаем Exception */
            if (self::$conn->errno)
                throw new Exception ('Select Error (' . self::$conn->errno . ') ' .
                                    self::$conn->error . ' query: - '.$_query.' - ');

            return false;
        }
    }

    /**
     * Закрываем соединение с БД
     */
    public static function close(){
        if( !self::$conn )
            self::$conn->close();
    }

    /**
     * Поучаем конекшион
     * @return mixed
     */
    public static function getConn()
    {
        return self::$conn;
    }
}