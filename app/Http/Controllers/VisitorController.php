<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitors;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class VisitorController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createVisitor(Request $request)
    {
        $user = auth('api')->user();
        if ($user->type->name != 'Watchman' &&  $user->type->name != 'Receptionist'  ) {
            return response()->json([
                "error" => $user->type->name,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }

        $validate = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required|unique:visitors',
            'company_name' => 'string',
            'nat_id' => 'required|unique:visitors',
            'avatar' => 'image'
        ]);

        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "errors" => $validate->getMessageBag(),
                "message" => "Please fill in all visitor details"
            ]);
        }
        /*
         * Save Visitor details to Database
         */
        $visitor = Visitors::create([
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'phone' => $request->get('phone'),
            'company_name' => $request->get('company_name'),
            'nat_id' => $request->get('nat_id'),

        ]);
        /*
         * Upload Visitors image
         */
        if ($request->hasFile('avatar')) {
            $this->uploadImage($request, $visitor);
        }
        return response()->json([
            "error" => false,
            "message" => "Visitor created successfully",
            "visitor" => $visitor
        ], 201);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadVisitorImage(Request $request)
    {
        $user = auth('api')->user();
        if ($user->type->name != 'Watchman' &&  $user->type->name != 'Receptionist'  ) {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $validate = Validator::make($request->all(), [
            'avatar' => 'required|image',
            'visitor_id' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "errors" => $validate->getMessageBag(),
                "message" => "Kindly upload a valid image"
            ]);
        }
        $visitor = Visitors::find($request->get('visitor_id'));
        if ($visitor == null) {
            return response()->json([
                "error" => true,
                "message" => "Visitor not found"
            ], 404);
        }
        $this->uploadImage($request, $visitor);

        return response()->json([
            'error' => false,
            "message" => "Visitor avatar uploaded successfully",
            "visitor" => $visitor
        ]);


    }

    /**
     * @param Request $request
     * @param $visitor
     * @return $this
     */
    public function uploadImage(Request $request, $visitor)
    {
        //Do validation

        $name = uniqid() . '.' . $request->file('avatar')->getClientOriginalExtension();

        $request->file('avatar')->move(public_path(avatarUploads()), $name);

        Image::make(public_path(avatarUploads() . $name))
            ->resize(200, NULL, function ($constraint) {
                $constraint
                    ->aspectRatio();
                // ->upsize();
            })
            ->save(public_path(avatarResized() . $name));


        $visitor->update([
            'avatar' => $name
        ]);

        return $this;
    }

    public function searchVisitor(Request $request)
    {
        $user = auth('api')->user();
        if ($user->type->name != 'Watchman'  && $user->type->name != 'Receptionist'  ) {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $validate = Validator::make($request->all(), [
            'nat_id' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "errors" => $validate->getMessageBag(),
                "message" => "Kindly upload a valid image"
            ]);
        }

        $visitor = Visitors::where('nat_id',$request->get('nat_id'))->with('visit')->first();

        if ($visitor == null) {
            return response()->json([
                "error" => false,
                "message" => "Visitor not found",
                "visitor" => []
            ], 404);
        }
        return response()->json([
            "error" => false,
            "message" => "Visitor found",
            "visitor" => $visitor
        ], 200);

    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function visitors()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'Watchman' &&  $user->type->name != 'Receptionist'  ) {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $visitors = Visitors::with('visit', 'visit.employee')->orderBy('id', 'desc')->get();
        return response()->json([
            'error' => false,
            "message" => "All Visitors",
            'visitors' => $visitors
        ]);
    }
}
