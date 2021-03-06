<?php


namespace app\controllers;

use app\forms\PlaceForm;
use core\App;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;

class PlaceControl {
   public $form;
    
   
    public function __construct()
    {
        $this->form = new PlaceForm();
    }

    /**
     *
     */
    public function getParams(){
        $this->form->ulica = ParamUtils::getFromPost('ulica');
        $this->form->miasto = ParamUtils::getFromPost('miasto');
        
        $this->form->kod_pocztowy = ParamUtils::getFromPost('kod_pocztowy');
        
    }

   
    public function validatePlace(){
        if(!$this->form->checkIsNull()) return false;

        

       $v = new Validator();

        $v->validate($this->form->ulica,[
            'trim' => true,
            'required' => true,
            'min_length' => 2,
            'max_length' => 45,
            'required_message' => 'Ulica jest wymagany',
            'validator_message' => "Ulica powinna składać się od 4 do 45 znaków!!"
        ]);
        
         
        $v->validate($this->form->miasto,[
            'trim' => true,
            'required' => true,
            'min_length' => 2,
            'max_length' => 45,
            'required_message' => 'Miasto jest wymagana',
            'validator_message' => "Miasto powinna składać się od 4 do 45 znaków!"
        ]);

        $v->validate($this->form->kod_pocztowy,[
            'trim' => true,
            'required' => true,
            'numeric' => true,
            'min_length' => 5,
            'max_length' => 5,
            'required_message' => 'Kod pocztowyjest wymagany',
            'validator_message' => "Kod powinna składać się z 5 cyfr"
        ]);

        
    if(!App::getMessages()->isError()) return true;
        else return false;    
    }

    /**
     *
     */
    public function insertToDB(){
        try{
            
             
           
              
             
           App::getDB()->insert('wypozyczalnia',[
                'Id_wypozyczalnia' => null,
                'Ulica' => $this->form->ulica,
                'Miasto' => $this->form->miasto,
                'Kod_pocztowy' => $this->form->kod_pocztowy,
                
            ]);
           
           
            
            
          

            

           
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }

    /**
     * @throws \SmartyException
     */
    public function generateView(){
        if($this->validatePlace()){
            $this->insertToDB();
            Utils::addInfoMessage("Pomyślnie dodano nową wypożyczalnie!");
            header("Location: ".App::getConf()->app_url."/place/");
        }
        else{
            App::getSmarty()->assign("title", "Dodaj nową wypożyczalnie");
            App::getSmarty()->assign("form", $this->form);
            App::getSmarty()->assign("page_title", "Dodaj nową wypożyczalnie");
            App::getSmarty()->display("PlaceView.tpl");
        }
    }


    /**
     * @throws \SmartyException
     */
    public function action_place(){
        $this->getParams();
        $this->generateView();
    }

} 

