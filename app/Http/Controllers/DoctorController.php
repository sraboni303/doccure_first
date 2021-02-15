<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_doctor = Doctor::latest() -> get();
        return view('doctors.index', [
            'all_doctor' => $all_doctor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required',
            'uname' => 'required | min:3 | max:20 | unique:doctors',
            'email' => 'required | email | unique:doctors',
        ]);
        // Photo Storing
        if($request -> hasFile('photo')){
            $file = $request -> file('photo');
            $photo = md5(time(). rand()). '.' . $file-> getClientOriginalExtension();
            $file -> move(public_path('admin/media/doctors'), $photo);
        }

        Doctor::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'uname' => $request -> uname,
            'role' => $request -> role,
            'photo' => $photo,
        ]);

        return redirect('/doctor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single_doctor = Doctor::find($id);
        return view('doctors.show', [
            'doc_profile' => $single_doctor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single_doc = Doctor::find($id);
        return view('doctors.edit', [
            'doc_edit' => $single_doc
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Photo Setting
        $new_photo = '';
        if($request -> hasFile('new_photo')) {
            $file = $request -> file('new_photo');
            $new_photo = md5(time().rand()). '.' . $file -> getClientOriginalExtension();
            $file -> move(public_path('/admin/media/doctors'), $new_photo);

            if(file_exists('/admin/media/doctors' . $request -> old_photo)){
                unlink('/admin/media/doctors'. $request -> old_photo);
            }
        }else{
            $new_photo = $request -> old_photo;
        }


        $doc_update = Doctor::find($id);

        $doc_update -> name = $request -> name;
        $doc_update -> email = $request -> email;
        $doc_update -> uname = $request -> uname;
        $doc_update -> role = $request -> role;
        $doc_update -> photo = $new_photo;
        $doc_update -> update();

        return redirect('/doctor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Doctor::find($id);

        $delete -> delete();
        return redirect()->back()->with('notice', 'Doctor Deleted Successfully');
    }
}
