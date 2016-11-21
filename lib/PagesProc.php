<?php

class PagesProc
{
    private $curPage = "";
    public function __construct()
    {
        dbCon::init();
        $this->curPage = $_GET["page"];
    }

    public function renderPage(){
        $pageAction = "action".$this->curPage;
        if( method_exists($this,$pageAction) ){
            $this->{$pageAction}();
        }
        elseif(method_exists($this,"actionDefault") ){
            $this->actionDefault();
        }
        else{
            throw new Exception("Странциа не найдена");
        }
    }


    public function __destruct()
    {
        dbCon::init();
    }

    public static function InitApp( PagesProc $mainPage ){
        try {
            $mainPage->renderPage();
        }
        catch(Exception $ex){
            print_r($ex->getMessage());
        }
    }
}