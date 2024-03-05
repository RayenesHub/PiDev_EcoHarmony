<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240304191608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ordure (id INT AUTO_INCREMENT NOT NULL, centre_id INT DEFAULT NULL, categorie VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, source VARCHAR(255) NOT NULL, etat VARCHAR(255) NOT NULL, INDEX IDX_DDDEBCF463CD7C3 (centre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ordure ADD CONSTRAINT FK_DDDEBCF463CD7C3 FOREIGN KEY (centre_id) REFERENCES centre (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordure DROP FOREIGN KEY FK_DDDEBCF463CD7C3');
        $this->addSql('DROP TABLE ordure');
    }
}
