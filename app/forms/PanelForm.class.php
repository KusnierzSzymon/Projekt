<?php

namespace app\forms;


class PanelForm
{
    public $producent;
    public $model;
    public $typ;
    public $rozmiar;

    function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
}