<?php

namespace common\models;

use Yii;

class UseMember extends Member
{
    public function getType()
    {
        if ($this->type == self::TEACHER) {
            return 'O\'qituvchi';
        } elseif ($this->type == self::PUPIL) {
            return "O'quvchi";
        } else {
            return 'Ota-ona';
        }
    }

    /**
     * @return string
     */
    public function getStatusLabel(): string
    {
        if ($this->status == self::STATUS_ACTIVE) {
            return '<span class="badge badge-success">Faol</span>';
        } elseif ($this->status == self::STATUS_INACTIVE) {
            return "<span class='badge badge-warning'>Qabulda</span>";
        } else {
            return '<span class="badge badge-danger">O\'chirilgan</span>';
        }
    }

    public function getImage(): string
    {
        return '<img src="' . Yii::getAlias('@getAdminImg') . "/" . $this->photo . '" width="30px" style="height:30px" class="border rounded-circle border-2 border-primary">';
    }

    public function signUp(): bool
    {
        $this->generateAuthKey();

        if (!empty($this->first_name) && !empty($this->last_name)) {

            $username = $this->first_name . '_' . $this->last_name;

            if (empty($this->findByUsername($username))) {
                $this->username = $username;
            } else {
                $this->username = $username . rand(1000, 9999);
            }
            $this->setPassword($this->username);
        }
        $this->photo = 'user.png';

        return $this->save() && $this->othersInfo();
    }

    public function createMember(){
        $this->generateAuthKey();

        if (!empty($this->first_name) && !empty($this->last_name)) {

            $username = $this->first_name . '_' . $this->last_name;

            if (empty($this->findByUsername($username))) {
                $this->username = $username;
            } else {
                $this->username = $username . rand(1000, 9999);
            }
            $this->setPassword($this->username);
        }
        $this->photo = 'user.png';

        return $this->save();
    }

    /**
     * @return bool
     */
    private function othersInfo(): bool
    {
        $info = new OnlineApply();
        $info->user_id = $this->id;
        $info->location = 'a';
        $info->course_id = 1;

        return $info->save();
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getOtherInfo(): \yii\db\ActiveQuery
    {
        return $this->hasOne(OnlineApply::class, ['user_id' => 'id']);
    }

    public function getBill(){
        return Bil::find()->orderBy(['id' => SORT_DESC])->one();
    }
}
