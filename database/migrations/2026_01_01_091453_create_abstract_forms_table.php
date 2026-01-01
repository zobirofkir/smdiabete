<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abstract_forms', function (Blueprint $table) {
            $table->id();
            
            $table->string('nom');
            $table->string('prenom');
            $table->enum('titre', ['Dr', 'Pr', 'M.', 'Mme'])->nullable();
            $table->string('email');
            $table->string('telephone')->nullable();
            $table->string('institution');
            $table->string('ville');
            $table->string('pays');
            
            $table->json('coauteurs')->nullable();
            
            $table->string('abstract_titre');
            $table->enum('presentation_type', ['oral', 'poster']);
            
            $table->text('introduction')->nullable();
            $table->integer('introduction_word_count')->default(0);
            $table->text('objectifs')->nullable();
            $table->integer('objectifs_word_count')->default(0);
            $table->text('methodes')->nullable();
            $table->integer('methodes_word_count')->default(0);
            $table->text('resultats')->nullable();
            $table->integer('resultats_word_count')->default(0);
            $table->text('conclusion')->nullable();
            $table->integer('conclusion_word_count')->default(0);            
            $table->text('abstract_complet')->nullable();
            $table->integer('abstract_complet_word_count')->default(0);
            
            $table->enum('langue', ['francais', 'anglais'])->default('francais');
            
            /**
             * Fichier uploadé
             */
            $table->string('fichier_path')->nullable();
            $table->string('fichier_nom')->nullable();
            $table->integer('fichier_taille')->nullable();
            $table->string('fichier_mime')->nullable();
            
            /**
             * Déclarations
             */
            $table->boolean('declaration_original')->default(false);
            $table->boolean('declaration_approval')->default(false);
            $table->boolean('declaration_conditions')->default(false);
            
            /**
             * Statut de la soumission
             */
            $table->enum('statut', [
                'soumis', 
                'en_revision', 
                'accepte', 
                'refuse', 
                'en_attente'
            ])->default('soumis');
            
            /**
             * Informations de suivi
             */
            $table->string('reference')->unique()->nullable();
            $table->dateTime('date_soumission')->nullable();
            $table->dateTime('date_evaluation')->nullable();
            $table->text('commentaires_evaluateur')->nullable();
            
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            
            /**
             * Soft deletes pour archiver plutôt que supprimer
             */
            $table->softDeletes();
            
            $table->timestamps();
            
            /**
             * Index pour optimiser les recherches
             */
            $table->index('reference');
            $table->index('statut');
            $table->index('email');
            $table->index('created_at');
            $table->index(['nom', 'prenom']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abstract_forms');
    }
};