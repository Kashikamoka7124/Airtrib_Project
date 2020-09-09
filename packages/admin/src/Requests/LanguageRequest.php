<?php

namespace Laranext\Admin\Requests;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Laranext\Requests\FormRequest;

class LanguageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'en.pagination.next' => 'required'
        ];
    }

    /**
     * Database Transaction.
     *
     * @return void
     */
    public function transaction()
    {
        DB::transaction(function () {
            option(
                $this->request->all()
            );
        });

        $data = [];

        foreach ($this->request->all() as $key => $value) {
            $item = explode('.', $key);
            $data[$item[1]][$item[2]] = $value ?? '';
        }

        if (! is_dir($directory = resource_path('lang/'.$this->request->segment(4)))) {
            mkdir($directory, 0755, true);
        }

        file_put_contents(
            resource_path('lang/'.$this->request->segment(4).'/site.php'),
            "<?php\n\nreturn " . var_export($data, true) . ";\n"
        );
    }

    /**
     * Get the success response.
     *
     * @return array
     */
    public function response()
    {
        return [
            'message' => 'Settings Saved Successfully!'
        ];
    }
}
