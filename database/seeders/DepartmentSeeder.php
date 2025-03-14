<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;
use DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            [
                'name' => 'MMO - Personal Staff',
                'code' => 'PS'
            ],
            [
                'name' => 'MMO - Management Information System Section',
                'code' => 'MISS'
            ],
            [
                'name' => 'Municipal Disaster Risk Reduction and Management Office',
                'code' => 'MDRRMO'
            ],
            [
                'name' => 'MMO - Public Affairs, Information and Assistance Division',
                'code' => 'PAIAD'
            ],
            [
                'name' => 'MMO - Bids and Award Committee',
                'code' => 'BAC'
            ],
            [
                'name' => 'MMO - Procurement Office',
                'code' => 'PO'
            ],
            [
                'name' => 'MMO - Livelihood Division',
                'code' => 'LD'
            ],
            [
                'name' => 'MMO - Permits and Licenses Division',
                'code' => 'BPLO'
            ],
            [
                'name' => 'MMO - General Services Office',
                'code' => 'GSO'
            ],
            [
                'name' => 'MMO - Population Development Division',
                'code' => 'PopDev'
            ],
            [
                'name' => 'MMO - Nutrition Division',
                'code' => 'ND'
            ],
            [
                'name' => 'Municipal Enterprise Management Office',
                'code' => 'MEMO'
            ],
            [
                'name' => 'MMO - Barangay Affairs Division',
                'code' => 'BA'
            ],
            [
                'name' => 'MMO - Human Resource Management Office',
                'code' => 'HRMO'
            ],
            [
                'name' => 'MMO - Civil Security Unit',
                'code' => 'CSU'
            ],
            [
                'name' => 'Office of the Sangguniang Bayan',
                'code' => 'SBO'
            ],
            [
                'name' => 'Municipal Planning and Development Office',
                'code' => 'MPDO'
            ],
            [
                'name' => 'Municipal Budget Office',
                'code' => 'MBO'
            ],
            [
                'name' => 'Municipal Accounting Office',
                'code' => 'MACCO'
            ],
            [
                'name' => 'Municipal Treasurer Office',
                'code' => 'MTO'
            ],
            [
                'name' => 'Municipal Engineer Office',
                'code' => 'MEO'
            ],
            [
                'name' => 'Municipal Assessor Office',
                'code' => 'MAO'
            ],
            [
                'name' => 'Municipal Health Office',
                'code' => 'MHO'
            ],
            [
                'name' => "Municipal Mayor's Office",
                'code' => 'MMO'
            ],
            [
                'name' => 'Municipal Agriculture Office',
                'code' => 'DA'
            ],
            [
                'name' => 'Municipal Civil Registrar Office',
                'code' => 'MCRO'
            ],
            [
                'name' => 'Municipal Social Welfare and Development Office',
                'code' => 'MSWD'
            ],
            [
                'name' => 'Municipal Environment and Natural Resources Office',
                'code' => 'MENRO'
            ],
            [
                'name' => 'Commission On Audit',
                'code' => 'COA'
            ],
            [
                'name' => 'Commission On Elections',
                'code' => 'COMELEC'
            ],
            [
                'name' => 'Philippine National Police',
                'code' => 'PNP'
            ],
            [
                'name' => 'Bureau of Fire Protection',
                'code' => 'BFP'
            ],                                                          
            [
                'name' => 'Department of Interior Local Government',
                'code' => 'DILG'
            ],
            [
                'name' => 'Local School Board',
                'code' => 'LSB'
            ],
        ]);
    }
}
