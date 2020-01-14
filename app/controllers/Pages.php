<?php


class Pages extends Controller
{
    protected $postModel;

    public function __construct()
    {
        //
    }

    public function index()
    {
        if (isLoggedIn()) {
            redirect('posts');
        }

        $title = 'Welcome';
        $description = 'Simple social network';

        $this->view('pages/index', compact('title', 'description'));
    }

    public function about()
    {
        $title = 'About us';
        $description = 'Simple social network';

        $this->view('pages/about', compact('title','description'));
    }
}