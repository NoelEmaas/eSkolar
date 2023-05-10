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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('scholarships', ['scholarships' => new ScholarshipCollection(Scholarship::all())]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scholarships  $scholarships
     * @return \Illuminate\Http\Response
     */
    public function show(string $scholarship_id)
    {
        \Log::info(json_encode(new ScholarshipResource(Scholarship::find($scholarship_id))));
        return view('viewScholarship', ['scholarship' => new ScholarshipResource(Scholarship::find($scholarship_id))]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scholarship  $scholarships
     * @return \Illuminate\Http\Response
     */
    public function edit(Scholarship $scholarships)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScholarshipRequest $request, Scholarship $scholarship)
    {
        $scholarship->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scholarship $scholarship)
    {
        $scholarships->delete();
        return response()->json(Scholarship::all());
    }
}
