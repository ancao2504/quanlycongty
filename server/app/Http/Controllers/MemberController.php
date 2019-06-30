<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\MemberRequest;
use App\Member;
use Illuminate\Http\Request;

require_once app_path() . '/config/constants.php';

class MemberController extends Controller {
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
        //
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
    public function update(MemberRequest $request, $id) {
        return $request->picture;
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

    public function login(LoginRequest $request) {
        $user = new Member();
        $res = $user->login($request->username, md5($request->password));
        if (!empty($res)) {
            $res['access_level'] = $res->member_role['description'];
            $listUnsetMemberRole = ['member_role', 'created_by', 'modified_by', 'created_at', 'updated_at'];
            parent::removeElements($res, $listUnsetMemberRole);
            $res->teams; //Get list teams of member
            foreach ($res['teams'] as $val) {
                $listUnsetTeam = ['leader', 'description', 'created_by', 'modified_by', 'created_at', 'updated_at'];
                parent::removeElements($val, $listUnsetTeam);
            }
            return parent::response(200, LOGIN_SUCCESS, $res);
        } else {
            return parent::response(404, LOGIN_FAIL);
        }
    }
}
