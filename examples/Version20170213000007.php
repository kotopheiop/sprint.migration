<?php

namespace Sprint\Migration;


class Version20170213000007 extends Version
{

    protected $description = "Пример работы с шаблонами сайта";

    public function up()
    {
        $helper = new HelperManager();

        //получить список шаблонов
        $helper->Site()->getSiteTemplates('s1');


        //задать шаблоны
        $helper->Site()->setSiteTemplates('s1', [

            //Для папки или файла
            [
                'TEMPLATE' => 'main',
                'IN_DIR' => '/auth.php',
            ],

            //Период времени
            [
                'TEMPLATE' => 'main',
                'IN_PERIOD' => ['02.03.2017', '02.05.2017'],
            ],

            //Для групп пользователей
            [
                'TEMPLATE' => 'main',
                'IN_GROUP' => [1, 2, 3],
            ],

            //Параметр в URL
            [
                'TEMPLATE' => 'main',
                'GET_PARAM' => ['print' => 'Y'],
            ],

            //Выражение PHP
            [
                'TEMPLATE' => 'main',
                'CONDITION' => 'empty(1)',
            ],

            //Без условия
            [
                'TEMPLATE' => 'main',
                'CONDITION' => '',
            ],
        ]);

    }

    public function down()
    {
        //
    }

}
