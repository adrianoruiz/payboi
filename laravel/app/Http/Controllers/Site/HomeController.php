<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Category;
use App\Models\Content;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blog = Content::select('content.*', 'category.name as category', 'section.name as section')
        ->join('category', 'category.id', '=' ,'content.category_id')
        ->join('section', 'section.id', '=' ,'category.section_id')
        ->/*latest()->*/limit(3)->get();

        // dd($blog);

        foreach ($blog as $row) {
            $row->content =  substr(strip_tags($row->content), 0, 150) . ' ...';
        }

        $navHome = true;

        return view('site.index', compact('blog', 'navHome'));
    }

    public function terms() {
        return view('site.terms');
    }

    public function article($slug_title)
    {


         $article = Content::select('content.*', 'category.name as category', 'section.name as section', 'section.id as section_id')
        ->join('category', 'category.id', '=' ,'content.category_id')
        ->join('section', 'section.id', '=' ,'category.section_id')
        ->where('slug_title', $slug_title)
        ->first();

        $article->content = strip_tags($article->content);

        $articleRelated = Content::select('content.*', 'category.name as category', 'section.name as section')
        ->join('category', 'category.id', '=' ,'content.category_id')
        ->join('section', 'section.id', '=' ,'category.section_id')
        ->where('category.name', $article->category)
        ->where('content.id', '<>', $article->id)
        ->inRandomOrder()
        ->limit(5)
        ->get();

         $sections = Section::pluck('name', 'name');
        // $sectionSelected = Section::where('name', $section)->first();

        $categories = Category::where('section_id', $article->section_id)->pluck('name', 'name');
        // $categorySelected = Category::where('name', $category)->first();

        // dd($article);

        return view('site.construcao', compact('article', 'articleRelated', 'sections', 'categories'));
    }

    public function blog($section = 'EXECUÇÃO', $category = '')
    {
        $sections = Section::pluck('name', 'name');
        $sectionSelected = Section::where('name', $section)->first();
        if($sectionSelected){
            $categories = Category::where('section_id', $sectionSelected->id)->pluck('name', 'name');
        }
        if($category == ''){
            $articles = Content::select('content.*', 'category.name as category', 'section.name as section')
            ->join('category', 'category.id', '=' ,'content.category_id')
            ->join('section', 'section.id', '=' ,'category.section_id')
            ->where('section.name', $section)
            ->paginate(5)
            ;
        }else{ 
            $articles = Content::select('content.*', 'category.name as category', 'section.name as section')
            ->join('category', 'category.id', '=' ,'content.category_id')
            ->join('section', 'section.id', '=' ,'category.section_id')
            ->where('category.name', $category)
            ->paginate(5)
            ;
        }

        foreach($articles as $value){
            $value->content = substr(strip_tags($value->content), 0, 150) . ' ...';

        }

        $topArticles = Content::select('content.*', 'category.name as category', 'section.name as section')
        ->join('category', 'category.id', '=' ,'content.category_id')
        ->join('section', 'section.id', '=' ,'category.section_id')
        ->where('section.name', $section)
        ->inRandomOrder()
        ->limit(5)
        ->get();

        return view('site.blog', compact('articles', 'topArticles', 'sections', 'sectionSelected', 'categories', 'category', 'section'));
    }

    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
