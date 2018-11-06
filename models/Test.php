<?php

namespace app\models;
use yii\base\Model;

class Test extends Model
{
    public $content;
    public $title;
    public $date;

    public function rules()
    {
        return [
          [['content', 'title'], 'required'],
          [['title'], 'myValidate'],
          [['date'], 'safe'],
        ];
    }

    public function myValidate($attribute, $params)
    {
        if(strlen($this->$attribute) > 10){
            $this->addError($attribute, "Валидация не прошла!!!");
        }
    }

    public function fields()
    {
        return [
            'name' => 'title'
        ];
    }


}