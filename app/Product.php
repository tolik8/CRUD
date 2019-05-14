<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Product extends Model
{
    protected $fillable = ['code', 'name', 'd_begin', 'd_end'];

    public function getNiceNames($table): array
    {
        $comments = DB::table('information_schema.columns')
            ->where('table_schema', DB::raw('DATABASE()'))
            ->where('table_name', $table)
            ->pluck('column_comment', 'column_name')
            ->toArray();

        foreach ($comments as $key => $comment) {
            if ($comment === '') {$comments[$key] = $key;}
        }

        return $comments;
    }

    public function getValidateData($type, $key = null): array
    {
        $data = [
            'code'    => 'required|regex:/^[0-9]+$/|max:20|unique:products',
            'name'    => 'required|max:50',
            'd_begin' => 'required|date',
            'd_end'   => 'required|date',
        ];

        if ($type === 'create') {
            return $data;
        }

        if ($type === 'update') {
            $data['code'] .= ',code,' . $key;
        }

        return $data;
    }

}
