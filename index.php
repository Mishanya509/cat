<?
include_once "lib/libs.php";

class ManePage extends PagesProc{

    protected function actionDefault(){
        // Получаем время жизни
        try {
            $sql = "SELECT t.Time FROM catdoa.petsTime t WHERE t.Pet_ID = 1";
            if( $res = dbCon::executeQuery($sql) ){
                $arRes = $res->fetch_assoc();
                $date = new DateTime($arRes['Time']);
                $temp = "pages/_".str_replace(dirname(__FILE__)."/","",__FILE__);
                include_once $temp;
            }
        }
        catch( Exception $ex ){
            print_r($ex);
        }
    }

    protected function actionAddMinutes(){

    }

}
PagesProc::InitApp(new ManePage());
