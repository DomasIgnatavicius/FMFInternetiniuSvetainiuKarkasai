<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    public function run(): void
    {
        $conferences = [
            [
                'title' => 'International Tech Summit 2026',
                'description' => 'Annual technology conference featuring the latest innovations in AI, cloud computing, and software development.',
                'date' => '2026-03-15',
                'address' => 'Vilniaus g. 25, Vilnius',
                'participant_count' => 500,
                'city' => 'Vilnius',
            ],
            [
                'title' => 'Web Development Conference',
                'description' => 'Conference dedicated to modern web technologies, frameworks, and best practices.',
                'date' => '2026-04-20',
                'address' => 'Laisves al. 100, Kaunas',
                'participant_count' => 300,
                'city' => 'Kaunas',
            ],
            [
                'title' => 'Data Science Forum',
                'description' => 'Expert discussions on machine learning, data analytics, and big data processing.',
                'date' => '2026-05-10',
                'address' => 'Tilzes g. 50, Klaipeda',
                'participant_count' => 200,
                'city' => 'Klaipeda',
            ],
            [
                'title' => 'Startup Weekend',
                'description' => 'A 54-hour event where entrepreneurs pitch ideas and form teams to create startups.',
                'date' => '2026-06-01',
                'address' => 'Gedimino pr. 35, Vilnius',
                'participant_count' => 150,
                'city' => 'Vilnius',
            ],
            [
                'title' => 'Cybersecurity Conference',
                'description' => 'Conference focused on the latest trends in cybersecurity and data protection.',
                'date' => '2026-07-15',
                'address' => 'Savanoriu pr. 180, Kaunas',
                'participant_count' => 250,
                'city' => 'Kaunas',
            ],
        ];

        foreach ($conferences as $conference) {
            Conference::create($conference);
        }
    }
}
