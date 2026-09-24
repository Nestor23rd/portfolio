<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->string('name_en')->nullable()->after('name');
            $table->text('description_en')->nullable()->after('description');
            $table->string('category_en')->nullable()->after('category');
        });

        $translations = [
            'PHP' => ['name_en' => 'PHP', 'category_en' => 'Languages', 'description_en' => 'Robust backend development, object-oriented programming, and maintainable web services.'],
            'JavaScript' => ['name_en' => 'JavaScript', 'category_en' => 'Languages', 'description_en' => 'Interactive interfaces, frontend logic, and API integrations.'],
            'Python' => ['name_en' => 'Python', 'category_en' => 'Languages', 'description_en' => 'System scripting, automation, data processing, and FastAPI services.'],
            'Laravel' => ['name_en' => 'Laravel', 'category_en' => 'Frameworks', 'description_en' => 'Business applications, authentication, APIs, and MVC architecture.'],
            'Node.js' => ['name_en' => 'Node.js', 'category_en' => 'Frameworks', 'description_en' => 'Asynchronous services, REST APIs, and real-time integrations.'],
            'REST API' => ['name_en' => 'REST API', 'category_en' => 'Frameworks', 'description_en' => 'Clear, secure, and well-documented HTTP contracts.'],
            'PostgreSQL' => ['name_en' => 'PostgreSQL', 'category_en' => 'Data & Infrastructure', 'description_en' => 'Relational data modeling, advanced queries, and JSONB data.'],
            'Redis' => ['name_en' => 'Redis', 'category_en' => 'Data & Infrastructure', 'description_en' => 'Caching, job queues, and fast-access data.'],
            'Docker' => ['name_en' => 'Docker', 'category_en' => 'Data & Infrastructure', 'description_en' => 'Reproducible environments and containerized service deployments.'],
            'Git / CI-CD' => ['name_en' => 'Git / CI-CD', 'category_en' => 'Workflow', 'description_en' => 'Version control, automated checks, and continuous delivery.'],
            'Tests automatisés' => ['name_en' => 'Automated Testing', 'category_en' => 'Workflow', 'description_en' => 'Unit and feature tests that make changes safer to deliver.'],
            'Architecture propre' => ['name_en' => 'Clean Architecture', 'category_en' => 'Workflow', 'description_en' => 'Clear separation of responsibilities and maintainable code.'],
        ];

        foreach ($translations as $name => $translation) {
            DB::table('skills')
                ->where('name', $name)
                ->whereNull('name_en')
                ->update($translation);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn(['name_en', 'description_en', 'category_en']);
        });
    }
};
