<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
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
                  'type_id' => rand(1, 5),
              ],

              [
                  'title' => 'Clone Netflix',
                  'author' => 'Luca Bianchi',
                  'content' => 'Replica della homepage di Netflix usando HTML, CSS e JavaScript.',
                  'type_id' => rand(1, 5),
              ],

              [
                  'title' => 'Todo App',
                  'author' => 'Giulia Verdi',
                  'content' => 'Applicazione per gestione attività con CRUD completo.',
                  'type_id' => rand(1, 5),
              ],

              [
                  'title' => 'Weather App',
                  'author' => 'Marco Neri',
                  'content' => 'App meteo che utilizza API esterne per previsioni in tempo reale.',
                  'type_id' => rand(1, 5),
              ],

              [
                  'title' => 'E-commerce UI',
                  'author' => 'Sara Conti',
                  'content' => 'Interfaccia frontend di un e-commerce con carrello dinamico.',
                  'type_id' => rand(1, 5),
              ],

              [
                  'title' => 'Admin Dashboard',
                  'author' => 'Andrea Galli',
                  'content' => 'Pannello admin con gestione completa dei dati.',
                  'type_id' => rand(1, 5),
              ],

              [
                  'title' => 'Memory Game',
                  'author' => 'Francesca Riva',
                  'content' => 'Gioco memory sviluppato in JavaScript con punteggio e timer.',
                  'type_id' => rand(1, 5),
              ],

              [
                  'title' => 'Blog PHP',
                  'author' => 'Davide Fontana',
                  'content' => 'Sistema blog con autenticazione utenti e CRUD articoli.',
                  'type_id' => rand(1, 5),
              ],

              [
                  'title' => 'Real Time Chat',
                  'author' => 'Elena Greco',
                  'content' => 'Chat in tempo reale con WebSocket.',
                  'type_id' => rand(1, 5),
              ],

              [
                  'title' => 'Film Manager',
                  'author' => 'Paolo Ferri',
                  'content' => 'App per gestione e ricerca film preferiti.',
                  'type_id' => rand(1, 5),
              ],

          ];

        foreach ($projects as $project) {

            $newProject = Project::create($project);

            $techIds = Technology::inRandomOrder()
                ->take(rand(1, 3))
                ->pluck('id')
                ->toArray();

            $newProject->technologies()->sync($techIds);
        }

    }
}
