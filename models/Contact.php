<?php
/**
 * Created by PhpStorm.
 * User: cw
 * Date: 10/8/2016
 * Time: 4:01 PM
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Contact extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName(): string
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules(): array
    {
        return [
            [['name', 'email', 'message'], 'required'],
            ['email', 'email'],
            [['name'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 50],
            [['message'], 'string', 'max' => 255],
        ];
    }
}