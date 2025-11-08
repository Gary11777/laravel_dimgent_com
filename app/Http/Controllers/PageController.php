<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function getContent($filename)
    {
        $path = base_path('drafts/content/' . $filename);
        if (file_exists($path)) {
            return file_get_contents($path);
        }
        return 'Content not found. Please add content to drafts/content/' . $filename;
    }

    public function home()
    {
        $content = $this->getContent('home.txt');
        return view('pages.home', compact('content'));
    }

    public function products()
    {
        $content = $this->getContent('products.txt');
        return view('pages.products', compact('content'));
    }

    public function services()
    {
        $content = $this->getContent('services.txt');
        return view('pages.services', compact('content'));
    }

    public function projects()
    {
        $content = $this->getContent('projects.txt');
        return view('pages.projects', compact('content'));
    }

    public function contacts()
    {
        $content = $this->getContent('contacts.txt');
        return view('pages.contacts', compact('content'));
    }

    public function about()
    {
        $content = $this->getContent('about.txt');
        return view('pages.about', compact('content'));
    }
}
