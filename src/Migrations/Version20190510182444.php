<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190510182444 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE data ADD gyroscope_y DOUBLE PRECISION NOT NULL, ADD gyroscope_z DOUBLE PRECISION NOT NULL, ADD magnetometru_x DOUBLE PRECISION NOT NULL, ADD magnetometru_y DOUBLE PRECISION NOT NULL, ADD magnetometru_z DOUBLE PRECISION NOT NULL, ADD temperatura DOUBLE PRECISION NOT NULL, ADD time DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE data DROP gyroscope_y, DROP gyroscope_z, DROP magnetometru_x, DROP magnetometru_y, DROP magnetometru_z, DROP temperatura, DROP time');
    }
}
