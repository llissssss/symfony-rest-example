<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160506153826 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE department (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee (id INT AUTO_INCREMENT NOT NULL, department_id INT DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, start_date DATETIME NOT NULL, INDEX IDX_5D9F75A1AE80F5DF (department_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE employee ADD CONSTRAINT FK_5D9F75A1AE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');


        $this->addSql('INSERT INTO department SET id = 1, name = "IT"');
        $this->addSql('INSERT INTO department SET id = 2, name = "Sales"');

        $this->addSql('INSERT INTO employee SET id = 1, first_name = "John", last_name = "Snow", email = "john.snow@www.com", start_date = NOW(), department_id = 1');
        $this->addSql('INSERT INTO employee SET id = 2, first_name = "Javal", last_name = "Script", email = "java.script@www.com", start_date = NOW(), department_id = 1');
        $this->addSql('INSERT INTO employee SET id = 3, first_name = "Josephp", last_name = "Stuarts", email = "josephp.stuarts@www.com", start_date = NOW(), department_id = 1');
        $this->addSql('INSERT INTO employee SET id = 4, first_name = "Billy", last_name = "Joe", email = "billy.joe@www.com", start_date = NOW(), department_id = 2');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE employee DROP FOREIGN KEY FK_5D9F75A1AE80F5DF');
        $this->addSql('DROP TABLE department');
        $this->addSql('DROP TABLE employee');
    }
}
