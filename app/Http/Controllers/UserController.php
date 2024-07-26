<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
class UserController extends Controller
{

    public function listUsers() {
        $data = DB::table('users')
            ->join('phongban', 'users.phongban_id', '=', 'phongban.id')
            ->select('users.name', 'users.email', 'phongban.ten_donvi', 'users.id')
            ->get();
        return view('users/list-user')->with(['listUsers' => $data]);
    }

    public function addUsers() {
        $phongBan = DB::table('phongban')
        ->select('id', 'ten_donvi')
        ->get();
        return view('users/add-user')->with(['phongBan' => $phongBan]);
    }

    public function add(Request $req) {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phongban_id' => $req->phongban,
            'tuoi' => $req->tuoi,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->insert($data);
        return redirect()->route('users.listUsers');
    }

    public function deleteUsers($idUser) {
        DB::table('users')->where('id', $idUser)->delete();
        return redirect()->route('users.listUsers');
    }

    public function updateUsers($idUser) {
        $phongBan = DB::table('phongban')
        ->select('id', 'ten_donvi')
        ->get();
        $user = DB::table('users')->where('id', $idUser)->first();
        return view('users/update-user')->with([
            'phongBan' => $phongBan,
            'user' => $user
        ]);
    }

    public function update(Request $req) {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phongban_id' => $req->phongban,
            'tuoi' => $req->tuoi,
            'songaynghi' => $req->ngaynghi,
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->where('id', $req->idUser) ->update($data);
        return redirect()->route('users.listUsers');
    }
}
