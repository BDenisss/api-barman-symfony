<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240718184250 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE boisson CHANGE name nom VARCHAR(255) NOT NULL, CHANGE price prix DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE commande CHANGE date_creation created_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE media ADD filepath VARCHAR(255) DEFAULT NULL, DROP chemin');
        $this->addSql('ALTER TABLE user CHANGE firstname firstname VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category');
        $this->addSql('ALTER TABLE boisson CHANGE nom name VARCHAR(255) NOT NULL, CHANGE prix price DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE commande CHANGE created_date date_creation DATETIME NOT NULL');
        $this->addSql('ALTER TABLE media ADD chemin VARCHAR(255) NOT NULL, DROP filepath');
        $this->addSql('ALTER TABLE user CHANGE firstname firstname VARCHAR(100) NOT NULL');
    }
}
