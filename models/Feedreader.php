<?php

namespace kouosl\feedreader\models;

use Yii;



/**
 * This is the model class for table "{{%feedreader}}".
 *
 * @property int $FeedID
 * @property string $SiteURL
 * @property string $Feed
 * @property string $SiteAuthor
 */
class Feedreader extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%feedtable}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FeedID', 'SiteURL', 'Feed', 'SiteAuthor'], 'required'],
            [['FeedID'], 'integer'],
            [['SiteURL', 'Feed', 'SiteAuthor'], 'string', 'max' => 255],
            [['FeedID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'FeedID' => Yii::t('app', 'Feed ID'),
            'SiteURL' => Yii::t('app', 'Site Url'),
            'Feed' => Yii::t('app', 'Feed'),
            'SiteAuthor' => Yii::t('app', 'Site Author'),
        ];
    }
}
