<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * Class News
 *
 * @property int $id
 * @property int $category_id
 * @property string $slug
 * @property string $title
 * @property string $description
 * @property int $enabled
 *
 * @property Category $category
 * @property TagToNews $tagToNews
 * @property Tag $tags
 *
 * @package frontend\models
 */
class News extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%news}}';
    }

    /**
     * @return Category|null|\yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * @return TagToNews[]|null|\yii\db\ActiveQuery
     */
    public function getTagToNews()
    {
        return $this->hasMany(TagToNews::class, ['news_id' => 'id']);
    }

    /**
     * @return Tag[]|null|\yii\db\ActiveQuery
     */
    public function getTags()
    {
        return $this->hasMany(Tag::class, ['id' => 'tag_id'])->via('tagToNews');
    }
}