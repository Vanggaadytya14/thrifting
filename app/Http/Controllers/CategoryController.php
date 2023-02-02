<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    // Show Kategori
    public function categoryshow()
    {
        return view('category.index', [
            'title' => 'Kategori',
            'category' => DB::table('categories')->get()
        ]);
    }

    // Store Add
    public function categorystore(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        category::create($request->all());
        return redirect('/categoryshow')->with(['success' => 'Data Kategori Berhasil Ditambah']);
    }

    // Store Update
    public function categoryupdate(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required'
        ]);

        $categories = category::find($id);
        $categories->update($request->all());
        $categories->save();

        return redirect('/categoryshow')->with(['success' => 'Data Kategori Berhasil Diperbarui']);
    }

    // Delete Admin
    public function delete(Request $request)
    {
        category::destroy($request->id);
        return redirect()->back()
            ->with(['success' => 'Data Kategori Berhasil Dihapus']);
}
}