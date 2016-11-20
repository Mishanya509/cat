<?
include_once "lib/dbCon.php";
// Получаем время жизни
try {
    $sql = "SELECT t.Time FROM catdoa.petsTime t WHERE t.Pet_ID = 1";
    dbCon::init();
    if( $res = dbCon::executeQuery($sql) ){
        $arRes = $res->fetch_assoc();
        $date = new DateTime($arRes['Time']);
        $temp = "pages/_".str_replace(dirname(__FILE__)."/","",__FILE__);
        include_once $temp;
    }
    dbCon::Close();
}
catch( Exception $ex ){
    print_r($ex);
    dbCon::Close();
}
