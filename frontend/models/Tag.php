<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * Class Tag
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 *
 * @property TagToNews[] $tagToNews
 * @property News[] $news
 *
 * @package frontend\models
 */
class Tag extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%tag}}';
    }

    /**
     * @return TagToNews[]|null|\yii\db\ActiveQuery
     */
    public function getTagToNews()
    {
        return $this->hasMany(TagToNews::class, ['tag_id' => 'id']);
    }

    /**
     * @return News[]|null|\yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::class, ['id' => 'news_id'])->via('tagToNews');
    }
}