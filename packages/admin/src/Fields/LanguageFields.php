<?php

namespace Laranext\Admin\Fields;

use Laranext\Fields\Text;
use Illuminate\Support\Str;
use Laranext\Fields\Fields;

class LanguageFields extends Fields
{
    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields()
    {
        $words = [
            'Flight',
            'Applicant',
            'Cancel',
            'Category',
            'Create',
            'Dashboard',
            'Delete',
            'Description',
            'Edit',
            'Email',
            'General',
            'Hired',
            'Job',
            'Kanban',
            'Language',
            'Location',
            'Logout',
            'Name',
            'Other',
            'Password',
            'Permission',
            'Phone',
            'Process',
            'Rejected',
            'Resource',
            'Resume',
            'Role',
            'Run',
            'Salary',
            'Save',
            'Search',
            'Setting',
            'Status',
            'Title',
            'Type',
            'Update',
            'User',
        ];

        $miscellaneous = [
            'Add Another',
            'Continue Editing',
            'Cover Letter',
            'Delete Confirmation Message',
            'Delete Resource',
            'Expire At',
            'Hiring Process',
            'List View',
            'New Applicant',
            'No Record',
            'Update Process',
            'Visit Site',
        ];

        return [
            'Single Words' => [
                'fields' => collect($words)->map(function($value) {
                                return Text::make($value, $this->model->language . '.word.' . Str::slug(strtolower($value), '_'))
                                            ->value(option($this->model->language . '.word.' . Str::slug(strtolower($value), '_')));
                            })
            ],

            'Miscellaneous' => [
                'fields' => collect($miscellaneous)->map(function($value) {
                                return Text::make($value, $this->model->language . '.misc.' . Str::slug(strtolower($value), '_'))
                                            ->value(option($this->model->language . '.misc.' . Str::slug(strtolower($value), '_')));
                            })
            ],
        ];
    }
}
