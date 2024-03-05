<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240304232013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user ADD mdp VARCHAR(255) NOT NULL, ADD adresse VARCHAR(255) NOT NULL, ADD numerotel INT NOT NULL, ADD role VARCHAR(255) NOT NULL, ADD image VARCHAR(255) NOT NULL, ADD google_id VARCHAR(255) DEFAULT NULL, ADD reset_token VARCHAR(100) DEFAULT NULL, DROP roles, CHANGE email email VARCHAR(255) NOT NULL, CHANGE password cin VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` ADD roles JSON NOT NULL, ADD password VARCHAR(255) NOT NULL, DROP cin, DROP mdp, DROP adresse, DROP numerotel, DROP role, DROP image, DROP google_id, DROP reset_token, CHANGE email email VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON `user` (email)');
    }
}
