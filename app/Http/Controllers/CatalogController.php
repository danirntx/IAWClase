<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Games;
class CatalogController extends Controller
{
    public function getIndex() {
        return view('catalog.index')->with('arrayJuegos',Games::all());
    }
    public function getShow($id) {
        return view('catalog.show', array('id'=>Games::findOrFail($id)));
    }
    public function getCreate() {
        return view('catalog.create');
    }
    public function getEdit($id) {
        return view('catalog.edit', array('id'=>Games::findOrFail($id)));
    }
    public function postCreate(Request $request)
    {
        $Games = new Games();
        $Games->name = $request->input('name');
        $Games->price = $request->input('price');
        $Games->category = $request->input('category');
        $Games->image = $request->input('image');
        $Games->video = $request->input('video');
        $Games->description = $request->input('description');
        $Games->launch = $request->input('launch');
        $Games->creator = $request->input('creator');
        $Games->editor = $request->input('editor');
        $Games->key = $request->input('key');
        $Games->save();
        return redirect()->action('CatalogController@getIndex');
    }
    public function putEdit(Request $request, $id){
        $Games = Games::findOrFail($id);
        $Games->name = $request->name;
        $Games->price = $request->price;
        $Games->category = $request->category;
        $Games->image = $request->image;
        $Games->video = $request->video;
        $Games->description = $request->description;
        $Games->launch = $request->launch;
        $Games->creator = $request->creator;
        $Games->editor = $request->editor;
        $Games->key = $request->key;
        $Games->save();
        return redirect('catalog/show/'.$id);
    }
}