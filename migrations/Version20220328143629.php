<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220328143629 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicles ADD COLUMN gearbox VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__vehicles AS SELECT id, brand, model, version, year, energy, power, price, price_retail, price_monthly, pics FROM vehicles');
        $this->addSql('DROP TABLE vehicles');
        $this->addSql('CREATE TABLE vehicles (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, brand VARCHAR(255) DEFAULT NULL, model VARCHAR(255) DEFAULT NULL, version VARCHAR(255) DEFAULT NULL, year VARCHAR(255) DEFAULT NULL, energy VARCHAR(255) DEFAULT NULL, power INTEGER DEFAULT NULL, price INTEGER DEFAULT NULL, price_retail INTEGER DEFAULT NULL, price_monthly INTEGER DEFAULT NULL, pics CLOB DEFAULT NULL --(DC2Type:simple_array)
        )');
        $this->addSql('INSERT INTO vehicles (id, brand, model, version, year, energy, power, price, price_retail, price_monthly, pics) SELECT id, brand, model, version, year, energy, power, price, price_retail, price_monthly, pics FROM __temp__vehicles');
        $this->addSql('DROP TABLE __temp__vehicles');
    }
}
