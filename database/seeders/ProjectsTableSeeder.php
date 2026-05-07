<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $projects = [

              [
                  'title' => 'Portfolio Laravel',
                  'author' => 'Mario Rossi',
                  'content' => 'Sviluppo di un portfolio personale con Laravel, Breeze e Bootstrap.',
                  'category' => 'Backend',
              ],

              [
                  'title' => 'Clone Netflix',
                  'author' => 'Luca Bianchi',
                  'content' => 'Replica della homepage di Netflix usando HTML, CSS e JavaScript.',
                  'category' => 'Frontend',
              ],

              [
                  'title' => 'Todo App',
                  'author' => 'Giulia Verdi',
                  'content' => 'Applicazione per gestione attività con CRUD completo.',
                  'category' => 'Web App',
              ],

              [
                  'title' => 'Weather App',
                  'author' => 'Marco Neri',
                  'content' => 'App meteo che utilizza API esterne per previsioni in tempo reale.',
                  'category' => 'API',
              ],

              [
                  'title' => 'E-commerce UI',
                  'author' => 'Sara Conti',
                  'content' => 'Interfaccia frontend di un e-commerce con carrello dinamico.',
                  'category' => 'Frontend',
              ],

              [
                  'title' => 'Admin Dashboard',
                  'author' => 'Andrea Galli',
                  'content' => 'Pannello admin con gestione completa dei dati.',
                  'category' => 'Backend',
              ],

              [
                  'title' => 'Memory Game',
                  'author' => 'Francesca Riva',
                  'content' => 'Gioco memory sviluppato in JavaScript con punteggio e timer.',
                  'category' => 'Game',
              ],

              [
                  'title' => 'Blog PHP',
                  'author' => 'Davide Fontana',
                  'content' => 'Sistema blog con autenticazione utenti e CRUD articoli.',
                  'category' => 'CMS',
              ],

              [
                  'title' => 'Real Time Chat',
                  'author' => 'Elena Greco',
                  'content' => 'Chat in tempo reale con WebSocket.',
                  'category' => 'Realtime',
              ],

              [
                  'title' => 'Film Manager',
                  'author' => 'Paolo Ferri',
                  'content' => 'App per gestione e ricerca film preferiti.',
                  'category' => 'Database',
              ],

          ];

        foreach ($projects as $project) {

            Project::create($project);
        }

    }
}
