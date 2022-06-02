<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220515202137 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE experiences (experienceId INT AUTO_INCREMENT NOT NULL, experience VARCHAR(300) NOT NULL, photo LONGBLOB DEFAULT NULL, rate INT NOT NULL, date DATE NOT NULL, userId INT DEFAULT NULL, INDEX IDX_82020E7064B64DCC (userId), PRIMARY KEY(experienceId)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(75) NOT NULL, last_name VARCHAR(100) NOT NULL, gender VARCHAR(2) NOT NULL, birthdate VARCHAR(10) NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE experiences ADD CONSTRAINT FK_82020E7064B64DCC FOREIGN KEY (userId) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE experiences DROP FOREIGN KEY FK_82020E7064B64DCC');
        $this->addSql('DROP TABLE experiences');
        $this->addSql('DROP TABLE `user`');
    }
}
