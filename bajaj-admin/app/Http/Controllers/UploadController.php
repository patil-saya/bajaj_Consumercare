<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\MessageBag;
use App\Models\Upload;
use Validator;

class UploadController extends ApiController {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $destination = public_path('uploads');

        if ($validator->fails()) {
            return $this->apiValidate($validator->errors());
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $file_name = strtolower(time() . md5(rand()) . '.' . $extension);
            $filesize = $file->getSize();
            $filepath = "uploads/" . $file_name;
            $filetype = $file->getMimeType();

            if ($file->move($destination, $file_name)) {

                $upload = new Upload();
                $upload->name = $file_name;
                $upload->size = $filesize;
                $upload->type = $filetype;
                $upload->path = $filepath;

                if ($upload->save()) {
                    return $this->apiCreated($upload);
                } else {
                    return $this->apiValidate('Error in saving file');
                }
            } else {
                return $this->apiValidate('File unable to move on folder');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
