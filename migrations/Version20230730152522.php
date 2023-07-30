<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230730152522 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gun (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, type_gun_id INT NOT NULL, picture VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, brand VARCHAR(255) NOT NULL, manufacturer VARCHAR(255) NOT NULL, caliber VARCHAR(255) NOT NULL, serial_number VARCHAR(255) DEFAULT NULL, create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', update_at DATETIME NOT NULL, INDEX IDX_4A9BC55BA76ED395 (user_id), INDEX IDX_4A9BC55BF42F06D4 (type_gun_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_gun (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, other_name VARCHAR(255) DEFAULT NULL, birth_day DATETIME NOT NULL, create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE gun ADD CONSTRAINT FK_4A9BC55BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE gun ADD CONSTRAINT FK_4A9BC55BF42F06D4 FOREIGN KEY (type_gun_id) REFERENCES type_gun (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gun DROP FOREIGN KEY FK_4A9BC55BA76ED395');
        $this->addSql('ALTER TABLE gun DROP FOREIGN KEY FK_4A9BC55BF42F06D4');
        $this->addSql('DROP TABLE gun');
        $this->addSql('DROP TABLE type_gun');
        $this->addSql('DROP TABLE user');
    }
}
