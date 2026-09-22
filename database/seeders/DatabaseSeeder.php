<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Certification;
use App\Models\SiteSetting;
use App\Models\SocialLink;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminUserSeeder::class);

        $projects = [
            ['title' => 'TitanEduc', 'category' => 'plateforme éducative', 'excerpt' => 'Plateforme de gestion et de suivi scolaire conçue pour centraliser les parcours, les utilisateurs et les opérations métier.', 'technologies' => ['Laravel', 'PostgreSQL', 'REST API'], 'is_featured' => true, 'sort_order' => 1],
            ['title' => 'CBDC — Banque Centrale', 'category' => 'blockchain / backend', 'excerpt' => 'Architecture backend et services distribués pour des flux monétaires traçables et sécurisés.', 'technologies' => ['Blockchain', 'Backend', 'Security'], 'is_featured' => true, 'sort_order' => 2],
            ['title' => 'Titan — Module Immobilier', 'category' => 'produit métier', 'excerpt' => 'Module métier dédié à la gestion immobilière, ses actifs, ses utilisateurs et ses workflows.', 'technologies' => ['Laravel', 'PostgreSQL', 'Docker'], 'is_featured' => true, 'sort_order' => 3],
            ['title' => 'Gestion scolaire & 2FA', 'category' => 'sécurité applicative', 'excerpt' => 'Système de gestion scolaire renforcé par une authentification à deux facteurs et des rôles contrôlés.', 'technologies' => ['PHP', '2FA', 'RBAC'], 'is_featured' => false, 'sort_order' => 4],
            ['title' => 'Hisaa — Tontine NFC', 'category' => 'fintech', 'excerpt' => 'Expérience de tontine augmentée par NFC pour simplifier les opérations et améliorer la traçabilité.', 'technologies' => ['NFC', 'API', 'Fintech'], 'is_featured' => false, 'sort_order' => 5],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(['slug' => Str::slug($project['title'])], $project + ['is_published' => true, 'published_at' => now()]);
        }

        $skills = [
            ['name' => 'PHP', 'category' => 'Langages', 'sort_order' => 1], ['name' => 'JavaScript', 'category' => 'Langages', 'sort_order' => 2], ['name' => 'Python', 'category' => 'Langages', 'sort_order' => 3],
            ['name' => 'Laravel', 'category' => 'Frameworks', 'sort_order' => 1], ['name' => 'Node.js', 'category' => 'Frameworks', 'sort_order' => 2], ['name' => 'REST API', 'category' => 'Frameworks', 'sort_order' => 3],
            ['name' => 'PostgreSQL', 'category' => 'Data & Infra', 'sort_order' => 1], ['name' => 'Redis', 'category' => 'Data & Infra', 'sort_order' => 2], ['name' => 'Docker', 'category' => 'Data & Infra', 'sort_order' => 3],
            ['name' => 'Git / CI-CD', 'category' => 'Workflow', 'sort_order' => 1], ['name' => 'Tests automatisés', 'category' => 'Workflow', 'sort_order' => 2], ['name' => 'Architecture propre', 'category' => 'Workflow', 'sort_order' => 3],
        ];

        $skillDescriptions = [
            'PHP' => 'Backend robuste, POO stricte et conception de services web maintenables.',
            'JavaScript' => 'Interfaces interactives, logique frontend et intégration avec les APIs.',
            'Python' => 'Scripting système, automatisation, traitement de données et APIs FastAPI.',
            'Laravel' => 'Applications web métier, authentification, APIs et architecture MVC.',
            'Node.js' => 'Services asynchrones, APIs REST et intégrations temps réel.',
            'REST API' => 'Conception de contrats HTTP clairs, sécurisés et documentables.',
            'PostgreSQL' => 'Modélisation relationnelle, requêtes avancées et données JSONB.',
            'Redis' => 'Cache, files de tâches et données à accès rapide.',
            'Docker' => 'Environnements reproductibles et déploiement de services conteneurisés.',
            'Git / CI-CD' => 'Versionnement propre, automatisation des contrôles et livraisons continues.',
            'Tests automatisés' => 'Tests unitaires et fonctionnels pour fiabiliser les évolutions.',
            'Architecture propre' => 'Séparation claire des responsabilités et code évolutif.',
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(['name' => $skill['name'], 'category' => $skill['category']], $skill + ['description' => $skillDescriptions[$skill['name']] ?? null]);
        }

        $services = [
            ['title' => 'Architecture backend', 'description' => 'Conception de services robustes, maintenables et alignés sur les contraintes réelles du produit.', 'icon' => 'account_tree', 'sort_order' => 1],
            ['title' => 'APIs REST', 'description' => 'Création d’APIs claires, sécurisées, documentées et prêtes à être consommées par vos applications.', 'icon' => 'api', 'sort_order' => 2],
            ['title' => 'Blockchain', 'description' => 'Exploration de registres distribués, logique métier décentralisée et cas d’usage institutionnels.', 'icon' => 'hub', 'sort_order' => 3],
            ['title' => 'Data & Infrastructure', 'description' => 'PostgreSQL, Redis, Docker et automatisation pour des environnements fiables et reproductibles.', 'icon' => 'database', 'sort_order' => 4],
        ];
        foreach ($services as $service) Service::updateOrCreate(['title' => $service['title']], $service + ['is_visible' => true]);

        $experiences = [
            ['role' => 'Développeur Backend — Projet CBDC (Blockchain)', 'company' => 'Projet professionnel', 'start_date' => '2025-01-01', 'is_current' => true, 'description' => 'Conception de services backend robustes, intégration de règles métier et travail sur des architectures distribuées.', 'sort_order' => 1],
            ['role' => 'Développeur — Titan / TitanEduc', 'company' => 'Titan', 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'description' => 'Développement de fonctionnalités métier, APIs et outils de gestion pour des produits numériques structurants.', 'sort_order' => 2],
            ['role' => 'Développeur Full Stack — Projet personnel', 'company' => null, 'start_date' => '2023-01-01', 'end_date' => '2023-12-31', 'description' => 'Construction d’une solution de gestion scolaire avec authentification, rôles et opérations sécurisées.', 'sort_order' => 3],
            ['role' => 'Licence Génie Logiciel', 'company' => 'Formation', 'start_date' => '2021-01-01', 'end_date' => '2024-12-31', 'description' => 'Formation en génie logiciel, algorithmique, bases de données, conception et développement d’applications.', 'sort_order' => 4],
            ['role' => 'Baccalauréat Scientifique (Bac 2)', 'company' => 'Formation', 'start_date' => '2020-01-01', 'end_date' => '2021-12-31', 'description' => 'Formation scientifique constituant la base du parcours d’ingénierie logicielle.', 'sort_order' => 5],
        ];

        foreach ($experiences as $experience) {
            Experience::updateOrCreate(['role' => $experience['role']], $experience);
        }

        $certifications = [
            ['title' => 'Blockchain — Understanding Its Uses and Implications', 'issuer' => 'The Linux Foundation', 'description' => 'Validation des mécanismes de consensus décentralisés, des registres immuables et des smart contracts.', 'credential_id' => 'LF-BC-89410-NX', 'status' => 'CERTIFIED', 'sort_order' => 1],
            ['title' => 'Hackathon CodeQuity — Participation & Finaliste', 'issuer' => 'Compétition Technologique', 'description' => 'Conception et prototypage d’une solution logicielle à impact sociétal avec une architecture backend scalable.', 'credential_id' => 'Top 5 Finalistes', 'status' => 'FINALISTE', 'sort_order' => 2],
        ];
        foreach ($certifications as $certification) {
            Certification::updateOrCreate(['title' => $certification['title']], $certification);
        }

        $settings = [
            'email' => 'kpadjanestor78@gmail.com', 'phone_number' => '+228 96 90 84 92', 'whatsapp_number' => '+228 91 31 17 05', 'github_url' => 'https://github.com', 'linkedin_url' => 'https://linkedin.com',
            'telegram_url' => '', 'documentation_url' => '', 'pgp_url' => '', 'location' => 'Lomé, Togo',
            'footer_text' => 'Nestor KPADJA. Architectures Distribuées & Protocoles Décentralisés. Lomé, Togo.',
        ];
        foreach ($settings as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

    }
}
