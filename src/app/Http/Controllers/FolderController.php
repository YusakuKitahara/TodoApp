<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function showCreateForm()
    {
        return view('folders/create');
    }

    public function create(Request $request){
        $folder = new Folder();

        //　タイトルに入力値を代入
        $folder->title = $request->title;

        // インスタンスの状態をデータベースに保存
        $folder->save();

        return redirect()->route('tasks.index', [
                'id' => $folder->id,
        ]);
    }
}
