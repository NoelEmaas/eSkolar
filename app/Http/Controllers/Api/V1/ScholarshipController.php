<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Scholarship;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\V1\ScholarshipResource;
use App\Http\Resources\V1\ScholarshipCollection;
use App\Http\Requests\V1\StoreScholarshipRequest;
use App\Http\Requests\V1\UpdateScholarshipRequest;

use Illuminate\Support\Facades\Auth;

class ScholarshipController extends Controller
{
    public function index()
    {
        return view('scholarships', ['scholarships' => (new ScholarshipCollection(Scholarship::all()))->sortByDesc('created_at')]);
    }

    public function store(StoreScholarshipRequest $request)
    {
        $scholarshsip = new ScholarshipResource(Scholarship::create([
            'benefactor' => $request->benefactor,
            'program' => $request->program,
            'description' => $request->description,
            'amount_min' => $request->amount_min,
            'amount_max' => $request->amount_max,
            'user_id' => Auth::id()
        ]));
        return redirect('scholarships')->with('Success', 'Successfully created scholarship');
    }

    public function show(string $scholarship_id)
    {
        return view('viewScholarship', ['scholarship' => new ScholarshipResource(Scholarship::find($scholarship_id))]);
    }

    public function update(Request $request)
    {
        $scholarship = Scholarship::find($request->scholarship_id);

        $scholarship->update([
            'benefactor' => $request->benefactor,
            'program' => $request->program,
            'description' => $request->description,
            'amount_min' => $request->amount_min,
            'amount_max' => $request->amount_max,
        ]);

        return redirect()->back()->with('Success', 'Successfully updated scholarship.');
    }

    public function destroy(Request $request)
    {
        $scholarship = Scholarship::find($request->scholarship_id);
        $scholarship->delete();
        return redirect()->back()->with('Success', 'Successfully deleted scholarship.');
    }
}
