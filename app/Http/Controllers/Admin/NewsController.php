<?php

namespace App\Http\Controllers\Admin;


use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $news = new News;

            if ($request->hasfile('news_image')) {
                $image_tmp = Input::file('news_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/news/default/' . $fileName;
                    $large_image_path = 'images/news/large/' . $fileName;
                    $medium_image_path = 'images/news/medium/' . $fileName;
                    $small_image_path = 'images/news/small/' . $fileName;

                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(866, 457)->save($large_image_path);
                    Image::make($image_tmp)->fit(600, 405)->save($medium_image_path);
                    Image::make($image_tmp)->fit(60, 60)->save($small_image_path);

                    $news->news_image = $fileName;
                }
            }
            $news->title = $data['title'];
            $news->description = $data['description'];
            $news->title_nep = $data['title_nep'];
            $news->description_nep = $data['description_nep'];
            $news->status = $data['status'];
            $news->save();
            return redirect()->route('news.index')->with('flash_message_success', 'News Added Successfully');

        }
        return view('admin.news.create');
    }

    public function edit($id){
        $news = News::findOrFail($id);
        return view('admin.news.edit',compact('news'));
    }

    public function update(Request $request, $id=null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // Upload Image
            if ($request->hasFile('news_image')) {
                $image_tmp = $request->file('news_image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $default_image_path = 'images/news/default/' . $fileName;
                    $large_image_path = 'images/news/large/' . $fileName;
                    $medium_image_path = 'images/news/medium/' . $fileName;
                    $small_image_path = 'images/news/small/' . $fileName;

                    //Resize Images//
                    Image::make($image_tmp)->save($default_image_path);
                    Image::make($image_tmp)->fit(866, 457)->save($large_image_path);
                    Image::make($image_tmp)->fit(600, 405)->save($medium_image_path);
                    Image::make($image_tmp)->fit(60, 60)->save($small_image_path);

                }
            } else if (!empty($data['current_image'])) {
                $fileName = $data['current_image'];
            } else {
                $fileName = '';
            }
           News::where(['id'=>$id])->update([
               'title'=>$data['title'],
               'description'=>$data['description'],
               'title_nep'=>$data['title_nep'],
               'description_nep'=>$data['description_nep'],
               'news_image'=>$fileName,
               'status'=>$data['status']]);
            return redirect()->route('news.index')->with('flash_message_success', 'News Added Successfully');

        }
    }

    public function destroy($id){
        $news = News::findOrFail($id)->delete();
        return redirect()->back()->with('flash_message_succeess','News Deleted Successfully');
    }
}
