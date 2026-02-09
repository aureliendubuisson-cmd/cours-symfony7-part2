<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260209102721 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add slug and timestamps to starship';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE starship ADD slug VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE starship ADD created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE starship ADD updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('COMMENT ON COLUMN starship.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN starship.updated_at IS \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE starship DROP slug');
        $this->addSql('ALTER TABLE starship DROP update_at');
        $this->addSql('ALTER TABLE starship DROP created_at');
        $this->addSql('ALTER TABLE starship ALTER id SET DEFAULT nextval(\'starship_id_seq\'::regclass)');
        $this->addSql('ALTER TABLE starship ALTER id DROP IDENTITY');
        $this->addSql('COMMENT ON COLUMN starship.arrived_at IS \'(DC2Type:datetime_immutable)\'');
    }
}
