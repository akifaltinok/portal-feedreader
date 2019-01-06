
<?php

use yii\db\Migration;

/**
 * Class m190106_170259_menu
 */
class m190106_170259_menu extends Migration
{


    public function up()
    {
      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
           $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
       }
     $TABLE_NAME = 'feedtable';
       $this->createTable($TABLE_NAME, [
           'FeedID' => $this->primaryKey(),
           'SiteURL' => $this->string(128)->notNull(),
           'Feed' => $this->string(10000)->notNull(),
           'SiteAuthor' => $this->string(10000)->notNull(),
       ], $tableOptions);

                  $this->insert('feedtable',[
       'SiteURL'=>'cyseclab.com',
       'Feed' => 'Siber Güvenlik ile ilgili her şey.Write to Learn.',
       'SiteAuthor' => 'Mehmet Akif Altınok'
         ]);

                    $this->insert('feedtable',[
           'SiteURL'=>'cyseclab.com/shellshock-zafiyeti-nedir-nasil-kullanilir',
           'Feed' => 'Shellshock zafiyeti nedir nasıl kullanılır hakkında bilgiler cyseclab.com da',
           'SiteAuthor' => 'Sevgi Güler'
             ]);
                    $this->insert('feedtable',[
                'SiteURL'=>'hackthebox.eu/jerry',
                'Feed' => 'This is the machine of jerry.We re hacking this machine from ParrotOs but we have macOs interface',
                'SiteAuthor' => 'IppSec Plesub'
                  ]);
                    $this->insert('feedtable',[
                     'SiteURL'=>'canyoupwn.me',
                     'Feed' => 'Cyber security blog here.',
                     'SiteAuthor' => 'Ahmet Gürel'
                       ]);

    }

    public function down()
    {
      $TABLE_NAME = 'feedtable';
      $this->dropTable($TABLE_NAME);
    }
    
}
