<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberStoreRequest;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function registerMember()
    {
        return view('memberManagement.create');
    }

    public function viewMembers()
    {
        $members =  Member::all();
       return view('memberManagement.index' , ['members' => $members]);
    }

    public function storeMember(MemberStoreRequest $request){
        try{

            Member::create($request->validated());
            return redirect()->route('memberManagement.members')->with(['success' => "Successfully created a new Member"]);

        }catch(\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);

        }

    }

    public function showMember(Member $member){
        return view('memberManagement.show' , ['member' => $member]);
    }

    public function editMember(Member $member){
        return view('memberManagement.edit' , ['member' => $member]);
    }

    public function updateMember(Request $request , Member $member){
        try{

            $member->update($request->except(['name']));
            return redirect()->route('memberManagement.members')->with(['success' => "Successfully created a new Member"]);

        }catch(\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);

        }

    }

    public function deleteMember(Member $member){

        try{
            $member->delete();

            return redirect()->route('memberManagement.members')->with(['success' => "Success"]);

        }catch(\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

}
