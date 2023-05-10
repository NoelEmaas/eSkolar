<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;

class ForumQuery {
    protected $safeParams = [
        'authorId' => ['eq'],
        'title' => ['eq'],
        'description' => ['eq'],
    ];

    protected $columnMap = [
        'authorId' => 'user_id'
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];

    public function transform(Request $request) {
        $eloQuery = [];

        foreach ($this->safeParams as $param => $operators) {
            $query = $request->query($param);

            if (!isset($query)) continue;

            $column = $this->columnMap[$param] ?? $param;
            
            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }
}