<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Motor]].
 *
 * @see Motor
 */
class MotorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Motor[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Motor|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
