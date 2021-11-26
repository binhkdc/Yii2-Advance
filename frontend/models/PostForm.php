<?php

namespace frontend\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $admin
 * @property string|null $content
 * @property string|null $status
 * @property string|null $image
 * @property string|null $created
 * @property string|null $updated
 */
class PostForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created', 'updated'], 'safe'],
            [['title', 'admin', 'content', 'status','image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'admin' => 'Admin',
            'content' => 'Content',
            'status' => 'Status',
            'image'=>'Image',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }

}
