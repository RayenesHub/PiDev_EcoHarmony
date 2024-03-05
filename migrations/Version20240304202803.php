<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240304202803 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, plage_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, `member` INT NOT NULL, mission VARCHAR(255) NOT NULL, date DATE NOT NULL, debut TIME NOT NULL, fin TIME NOT NULL, INDEX IDX_2449BA15F82604D9 (plage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plage (id INT AUTO_INCREMENT NOT NULL, pic VARCHAR(255) DEFAULT NULL, surnom VARCHAR(255) NOT NULL, region VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA15F82604D9 FOREIGN KEY (plage_id) REFERENCES plage (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA15F82604D9');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE plage');
    }
}
