<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m210603_135910_add_partner_id_column_to_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'partner_id', $this->integer()->unique());
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'partner_id');
    }
}
