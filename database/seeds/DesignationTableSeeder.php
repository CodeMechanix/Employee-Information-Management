<?php

use Illuminate\Database\Seeder;

class DesignationTableSeeder extends Seeder
{
    public function run()
    {
        $designations = [
	        [
	        	'title' => 'Software Engineer',
	        ],
	        [
	        	'title' => 'Senior Software Engineer',
	        ],
	        [
	        	'title' => 'Lead Software Engineer',
	        ],
	        [
	        	'title' => 'Project Manager',
	        ],
	        [
	        	'title' => 'Team Lead',
	        ],
	        [
	        	'title' => 'SQA',
	        ],
        ];

        foreach ($designations as $designation) {
            App\Designation::create($designation);
        }
    }
}
