<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publication;
use App\Models\Image;

class PublicationSeeder extends Seeder
{
    public function run(): void
    {
        $publications = [
            [
                'titre' => 'Les meilleures techniques de nettoyage écologique',
                'contenu' => 'Découvrez nos méthodes de nettoyage respectueuses de l\'environnement. Nous utilisons des produits biodégradables et des techniques innovantes pour garantir un nettoyage efficace tout en préservant la planète.',
                'image' => 'IMG-20251029-WA0019.jpg'
            ],
            [
                'titre' => 'Nettoyage de bureaux : nos conseils d\'experts',
                'contenu' => 'Un environnement de travail propre améliore la productivité et le bien-être des employés. Voici nos recommandations pour maintenir vos espaces de travail dans un état impeccable.',
                'image' => 'IMG-20251029-WA0020.jpg'
            ],
            [
                'titre' => 'Comment entretenir vos sols selon leur type',
                'contenu' => 'Chaque type de sol nécessite un entretien spécifique. Parquet, carrelage, moquette... découvrez les bonnes pratiques pour préserver vos revêtements de sol.',
                'image' => 'IMG-20251029-WA0021.jpg'
            ],
            [
                'titre' => 'L\'importance du nettoyage désinfectant',
                'contenu' => 'Dans le contexte sanitaire actuel, la désinfection est cruciale. Apprenez les différences entre nettoyage et désinfection, et pourquoi les deux sont essentiels.',
                'image' => 'IMG-20251029-WA0022.jpg'
            ],
            [
                'titre' => 'Nettoyage après travaux : notre expertise',
                'contenu' => 'Les travaux laissent toujours des traces. Poussière, résidus, taches... notre équipe spécialisée vous aide à retrouver un espace parfaitement propre après vos rénovations.',
                'image' => 'IMG-20251029-WA0023.jpg'
            ],
        ];

        foreach ($publications as $pubData) {
            $publication = Publication::create([
                'titre' => $pubData['titre'],
                'contenu' => $pubData['contenu'],
                'likes_count' => rand(0, 50),
            ]);

            // Créer l'image associée
            Image::create([
                'nom' => $pubData['image'],
                'taille' => rand(100000, 500000),
                'format' => 'jpg',
                'fichier' => $pubData['image'],
                'publication_id' => $publication->id,
            ]);
        }
    }
}