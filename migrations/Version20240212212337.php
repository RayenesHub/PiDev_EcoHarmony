<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240212212337 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal (id INT AUTO_INCREMENT NOT NULL, reserve_id INT DEFAULT NULL, categorie VARCHAR(255) NOT NULL, poid DOUBLE PRECISION NOT NULL, etat VARCHAR(255) NOT NULL, INDEX IDX_6AAB231F5913AEBF (reserve_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE centre_recyclage (id INT AUTO_INCREMENT NOT NULL, nom_centre VARCHAR(50) NOT NULL, emplacement VARCHAR(50) NOT NULL, capacite INT NOT NULL, responsable VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dechet (id INT AUTO_INCREMENT NOT NULL, id_centre_id INT DEFAULT NULL, categorie VARCHAR(50) NOT NULL, description VARCHAR(50) DEFAULT NULL, date DATE NOT NULL, source VARCHAR(50) NOT NULL, etat VARCHAR(50) NOT NULL, INDEX IDX_53C0FC60C6096BE4 (id_centre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, nom_event VARCHAR(255) NOT NULL, nbr_participants INT NOT NULL, lieux_event VARCHAR(255) NOT NULL, date_event DATE NOT NULL, heure_debut TIME NOT NULL, heure_fin TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jardin (id INT AUTO_INCREMENT NOT NULL, lieu VARCHAR(50) NOT NULL, taille VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nappe (id INT AUTO_INCREMENT NOT NULL, idnap INT NOT NULL, geologie VARCHAR(20) NOT NULL, temperature DOUBLE PRECISION DEFAULT NULL, profondeur DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participant (id INT AUTO_INCREMENT NOT NULL, event_id INT DEFAULT NULL, nom_participant VARCHAR(255) NOT NULL, prenom_participant VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, INDEX IDX_D79F6B1171F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plante (id INT AUTO_INCREMENT NOT NULL, jardin_id INT DEFAULT NULL, nom VARCHAR(50) NOT NULL, famille VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_517A6947D4CBAD1 (jardin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE puits (id INT AUTO_INCREMENT NOT NULL, idnappe_id INT DEFAULT NULL, idp INT NOT NULL, diametre VARCHAR(50) NOT NULL, datefab DATE NOT NULL, debit VARCHAR(255) NOT NULL, equipement VARCHAR(255) NOT NULL, INDEX IDX_A6482BA7405F94A1 (idnappe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reserve (id INT AUTO_INCREMENT NOT NULL, nom_reserve VARCHAR(255) NOT NULL, capacite INT NOT NULL, lieu VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F5913AEBF FOREIGN KEY (reserve_id) REFERENCES reserve (id)');
        $this->addSql('ALTER TABLE dechet ADD CONSTRAINT FK_53C0FC60C6096BE4 FOREIGN KEY (id_centre_id) REFERENCES centre_recyclage (id)');
        $this->addSql('ALTER TABLE participant ADD CONSTRAINT FK_D79F6B1171F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE plante ADD CONSTRAINT FK_517A6947D4CBAD1 FOREIGN KEY (jardin_id) REFERENCES jardin (id)');
        $this->addSql('ALTER TABLE puits ADD CONSTRAINT FK_A6482BA7405F94A1 FOREIGN KEY (idnappe_id) REFERENCES nappe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F5913AEBF');
        $this->addSql('ALTER TABLE dechet DROP FOREIGN KEY FK_53C0FC60C6096BE4');
        $this->addSql('ALTER TABLE participant DROP FOREIGN KEY FK_D79F6B1171F7E88B');
        $this->addSql('ALTER TABLE plante DROP FOREIGN KEY FK_517A6947D4CBAD1');
        $this->addSql('ALTER TABLE puits DROP FOREIGN KEY FK_A6482BA7405F94A1');
        $this->addSql('DROP TABLE animal');
        $this->addSql('DROP TABLE centre_recyclage');
        $this->addSql('DROP TABLE dechet');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE jardin');
        $this->addSql('DROP TABLE nappe');
        $this->addSql('DROP TABLE participant');
        $this->addSql('DROP TABLE plante');
        $this->addSql('DROP TABLE puits');
        $this->addSql('DROP TABLE reserve');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
