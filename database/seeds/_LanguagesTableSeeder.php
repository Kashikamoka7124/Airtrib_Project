<?php

use Illuminate\Database\Seeder;

class _LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $language = [
            'misc.add_another' => 'Add Another',
            'misc.continue_editing' => 'Continue Editing',
            'misc.cover_letter' => 'Cover Letter',
            'misc.delete_confirmation_message' => 'Are you sure you want to delete this resource? | Are you sure you want to delete the selected resources?',
            'misc.delete_resource' => 'Delete Resource | Delete Resources',
            'misc.expire_at' => 'Expire At',
            'misc.hiring_process' => 'Hiring Process',
            'misc.list_view' => 'List View',
            'misc.new_applicant' => 'New Applicant | New Applicants',
            'misc.no_record' => 'No record matched the given criteria.',
            'misc.update_process' => 'Update Process',
            'misc.visit_site' => 'Visit Site',

            'word.flight' => 'Flight | Flights',
            'word.applicant' => 'Applicant | Applicants',
            'word.cancel' => 'Cancel',
            'word.category' => 'Category | Categories',
            'word.create' => 'Create',
            'word.dashboard' => 'Dashboard',
            'word.delete' => 'Delete',
            'word.description' => 'Description',
            'word.edit' => 'Edit',
            'word.email' => 'Email',
            'word.general' => 'General',
            'word.hired' => 'Hired',
            'word.job' => 'Job | Jobs',
            'word.kanban' => 'Kanban',
            'word.language' => 'Language | Languages',
            'word.location' => 'Location | Locations',
            'word.logout' => 'Logout',
            'word.name' => 'Name | Names',
            'word.other' => 'Other | Others',
            'word.password' => 'Password',
            'word.permission' => 'Permission | Permissions',
            'word.phone' => 'Phone',
            'word.process' => 'Process | Processes',
            'word.rejected' => 'Rejected',
            'word.resource' => 'Resource | Resources',
            'word.resume' => 'Resume',
            'word.role' => 'Role | Roles',
            'word.run' => 'Run',
            'word.salary' => 'Salary',
            'word.save' => 'Save',
            'word.search' => 'Search',
            'word.setting' => 'Setting | Settings',
            'word.status' => 'Status',
            'word.title' => 'Title | Titles',
            'word.type' => 'Type | Types',
            'word.update' => 'Update | Updates',
            'word.user' => 'User | Users',
        ];

        DB::table('options')->insert(
            collect($language)->map(function ($value, $key) {
                return ['key' => 'en.'.$key, 'value' => $value];
            })->values()->all()
        );

        DB::table('options')->insert(
            collect($language)->map(function ($value, $key) {
                return ['key' => 'fr.'.$key, 'value' => $value];
            })->values()->all()
        );

        DB::table('options')->insert(
            collect($language)->map(function ($value, $key) {
                return ['key' => 'es.'.$key, 'value' => $value];
            })->values()->all()
        );
    }
}
