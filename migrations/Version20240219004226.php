<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219004226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE puits DROP FOREIGN KEY FK_A6482BA7405F94A1');
        $this->addSql('ALTER TABLE puits ADD CONSTRAINT FK_A6482BA7405F94A1 FOREIGN KEY (idnappe_id) REFERENCES nappe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE puits DROP FOREIGN KEY FK_A6482BA7405F94A1');
        $this->addSql('ALTER TABLE puits ADD CONSTRAINT FK_A6482BA7405F94A1 FOREIGN KEY (idnappe_id) REFERENCES nappe (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
