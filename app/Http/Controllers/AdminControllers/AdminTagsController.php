<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
class AdminTagsController extends Controller
{
    public function index()
    {
        return view('admin_dashboard.tags.index', [
            'tags' => Tag::with('posts')->orderBy('id','ASC')->paginate(12),
        ]);
    }

    public function edit(Tag $tag)
    {
        return view('admin_dashboard.tags.edit',[
            'tags' => Tags::pluck('name', 'id'),
            'tag' => $tag
        ]);
    }
    public function show(Tag $tag)
    {
        return view('admin_dashboard.tags.show',[
            'tag' => $tag
        ]);
    }

    public function destroy(Tag $tag)
    {
        $tag->posts()->detach();
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('success','Xóa Từ khóa thành công.');
    }

}
