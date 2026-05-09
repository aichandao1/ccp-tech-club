<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    private function getActivities()
    {
        return [
            [
                'slug' => 'laravel',
                'title' => 'Atelier Laravel',
                'description' => 'Introduction au framework Laravel',
                'body' => 'Dans cet atelier, vous apprenez les bases de Laravel : routes, controllers et views.'
            ],
            [
                'slug' => 'html-css',
                'title' => 'HTML & CSS',
                'description' => 'Création de pages web modernes',
                'body' => 'Apprentissage du HTML sémantique et du CSS pour créer de belles interfaces.'
            ],
            [
                'slug' => 'javascript',
                'title' => 'JavaScript Basics',
                'description' => 'Programmation côté client',
                'body' => 'Découverte des variables, fonctions et DOM en JavaScript.'
            ],
            [
                'slug' => 'git-github',
                'title' => 'Git & GitHub',
                'description' => 'Gestion de versions',
                'body' => 'Apprendre à gérer un projet avec Git et collaborer sur GitHub.'
            ],
        ];
    }

    public function home()
    {
        return view('club.home', [
            'title' => 'Accueil CCP Tech Club'
        ]);
    }

    public function about()
    {
        return view('club.about');
    }

    public function activities()
    {
        return view('club.activities', [
            'activities' => $this->getActivities()
        ]);
    }

    public function show($slug)
    {
        $activity = collect($this->getActivities())
            ->firstWhere('slug', $slug);

        if (!$activity) {
            abort(404);
        }

        return view('club.activity-show', [
            'activity' => $activity
        ]);
    }
}
