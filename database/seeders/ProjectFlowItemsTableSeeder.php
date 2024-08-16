<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectFlowItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        if (\DB::table('project_flow_items')->count() > 0) {
            return;
        }

        \DB::table('project_flow_items')->insert(array (
            0 =>
            array (
                'id' => 1,
                'project_id' => 2,
                'flow_id' => 1,
                'name' => '待处理',
                'status' => 'start',
                'turns' => '[1,2,3,4,26]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 0,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            1 =>
            array (
                'id' => 2,
                'project_id' => 2,
                'flow_id' => 1,
                'name' => '进行中',
                'status' => 'progress',
                'turns' => '[1,2,3,4,26]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 1,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            2 =>
            array (
                'id' => 3,
                'project_id' => 2,
                'flow_id' => 1,
                'name' => '已完成',
                'status' => 'end',
                'turns' => '[1,2,3,4,26]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 3,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            3 =>
            array (
                'id' => 4,
                'project_id' => 2,
                'flow_id' => 1,
                'name' => '已取消',
                'status' => 'end',
                'turns' => '[1,2,3,4,26]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 4,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            4 =>
            array (
                'id' => 5,
                'project_id' => 3,
                'flow_id' => 2,
                'name' => '待处理',
                'status' => 'start',
                'turns' => '[5,6,7,8,27]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 0,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            5 =>
            array (
                'id' => 6,
                'project_id' => 3,
                'flow_id' => 2,
                'name' => '进行中',
                'status' => 'progress',
                'turns' => '[5,6,7,8,27]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 1,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            6 =>
            array (
                'id' => 7,
                'project_id' => 3,
                'flow_id' => 2,
                'name' => '已完成',
                'status' => 'end',
                'turns' => '[5,6,7,8,27]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 3,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            7 =>
            array (
                'id' => 8,
                'project_id' => 3,
                'flow_id' => 2,
                'name' => '已取消',
                'status' => 'end',
                'turns' => '[5,6,7,8,27]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 4,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            8 =>
            array (
                'id' => 9,
                'project_id' => 4,
                'flow_id' => 3,
                'name' => '待处理',
                'status' => 'start',
                'turns' => '[9,10,11,12,28]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 0,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            9 =>
            array (
                'id' => 10,
                'project_id' => 4,
                'flow_id' => 3,
                'name' => '进行中',
                'status' => 'progress',
                'turns' => '[9,10,11,12,28]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 1,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            10 =>
            array (
                'id' => 11,
                'project_id' => 4,
                'flow_id' => 3,
                'name' => '已完成',
                'status' => 'end',
                'turns' => '[9,10,11,12,28]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 3,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            11 =>
            array (
                'id' => 12,
                'project_id' => 4,
                'flow_id' => 3,
                'name' => '已取消',
                'status' => 'end',
                'turns' => '[9,10,11,12,28]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 4,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            12 =>
            array (
                'id' => 13,
                'project_id' => 5,
                'flow_id' => 4,
                'name' => '待处理',
                'status' => 'start',
                'turns' => '[13,14,15,16,29]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 0,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            13 =>
            array (
                'id' => 14,
                'project_id' => 5,
                'flow_id' => 4,
                'name' => '进行中',
                'status' => 'progress',
                'turns' => '[13,14,15,16,29]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 1,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            14 =>
            array (
                'id' => 15,
                'project_id' => 5,
                'flow_id' => 4,
                'name' => '已完成',
                'status' => 'end',
                'turns' => '[13,14,15,16,29]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 3,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            15 =>
            array (
                'id' => 16,
                'project_id' => 5,
                'flow_id' => 4,
                'name' => '已取消',
                'status' => 'end',
                'turns' => '[13,14,15,16,29]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 4,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            16 =>
            array (
                'id' => 17,
                'project_id' => 6,
                'flow_id' => 5,
                'name' => '待处理',
                'status' => 'start',
                'turns' => '[17,18,19,20,30]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 0,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            17 =>
            array (
                'id' => 18,
                'project_id' => 6,
                'flow_id' => 5,
                'name' => '进行中',
                'status' => 'progress',
                'turns' => '[17,18,19,20,30]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 1,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            18 =>
            array (
                'id' => 19,
                'project_id' => 6,
                'flow_id' => 5,
                'name' => '已完成',
                'status' => 'end',
                'turns' => '[17,18,19,20,30]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 3,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            19 =>
            array (
                'id' => 20,
                'project_id' => 6,
                'flow_id' => 5,
                'name' => '已取消',
                'status' => 'end',
                'turns' => '[17,18,19,20,30]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 4,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            20 =>
            array (
                'id' => 21,
                'project_id' => 7,
                'flow_id' => 6,
                'name' => '待处理',
                'status' => 'start',
                'turns' => '[21,22,23,24,25]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 0,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            21 =>
            array (
                'id' => 22,
                'project_id' => 7,
                'flow_id' => 6,
                'name' => '进行中',
                'status' => 'progress',
                'turns' => '[21,22,23,24,25]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 1,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            22 =>
            array (
                'id' => 23,
                'project_id' => 7,
                'flow_id' => 6,
                'name' => '已完成',
                'status' => 'end',
                'turns' => '[21,22,23,24,25]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 3,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            23 =>
            array (
                'id' => 24,
                'project_id' => 7,
                'flow_id' => 6,
                'name' => '已取消',
                'status' => 'end',
                'turns' => '[21,22,23,24,25]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 4,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            24 =>
            array (
                'id' => 25,
                'project_id' => 7,
                'flow_id' => 6,
                'name' => '待测试',
                'status' => 'test',
                'turns' => '[21,22,23,24,25]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 2,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            25 =>
            array (
                'id' => 26,
                'project_id' => 2,
                'flow_id' => 1,
                'name' => '待测试',
                'status' => 'test',
                'turns' => '[1,2,3,4,26]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 2,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            26 =>
            array (
                'id' => 27,
                'project_id' => 3,
                'flow_id' => 2,
                'name' => '待测试',
                'status' => 'test',
                'turns' => '[5,6,7,8,27]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 2,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            27 =>
            array (
                'id' => 28,
                'project_id' => 4,
                'flow_id' => 3,
                'name' => '待测试',
                'status' => 'test',
                'turns' => '[9,10,11,12,28]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 2,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            28 =>
            array (
                'id' => 29,
                'project_id' => 5,
                'flow_id' => 4,
                'name' => '待测试',
                'status' => 'test',
                'turns' => '[13,14,15,16,29]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 2,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
            29 =>
            array (
                'id' => 30,
                'project_id' => 6,
                'flow_id' => 5,
                'name' => '待测试',
                'status' => 'test',
                'turns' => '[17,18,19,20,30]',
                'userids' => '[]',
                'usertype' => 'add',
                'userlimit' => 0,
                'sort' => 2,
                'created_at' => seeders_at('2021-07-01 12:27:12'),
                'updated_at' => seeders_at('2021-07-01 12:27:12'),
            ),
        ));


    }
}
