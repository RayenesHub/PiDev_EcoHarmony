<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240218134225 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE puits DROP FOREIGN KEY FK_A6482BA7405F94A1');
        $this->addSql('DROP INDEX IDX_A6482BA7405F94A1 ON puits');
        $this->addSql('ALTER TABLE puits CHANGE idnappe_id nappe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE puits ADD CONSTRAINT FK_A6482BA7EA8ADCAC FOREIGN KEY (nappe_id) REFERENCES nappe (id)');
        $this->addSql('CREATE INDEX IDX_A6482BA7EA8ADCAC ON puits (nappe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE puits DROP FOREIGN KEY FK_A6482BA7EA8ADCAC');
        $this->addSql('DROP INDEX IDX_A6482BA7EA8ADCAC ON puits');
        $this->addSql('ALTER TABLE puits CHANGE nappe_id idnappe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE puits ADD CONSTRAINT FK_A6482BA7405F94A1 FOREIGN KEY (idnappe_id) REFERENCES nappe (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_A6482BA7405F94A1 ON puits (idnappe_id)');
    }
}
