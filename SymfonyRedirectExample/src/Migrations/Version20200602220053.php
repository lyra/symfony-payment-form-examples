<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200602220053 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE invoince DROP FOREIGN KEY invoince_FK');
        $this->addSql('ALTER TABLE order_product DROP FOREIGN KEY FKl5mnj9n0di7k1v90yxnthkc73');
        $this->addSql('ALTER TABLE order_product DROP FOREIGN KEY FKhnfgqyjx3i80qoymrssls3kno');
        $this->addSql('DROP TABLE order_product');
        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP INDEX invoince_FK ON invoince');
        $this->addSql('ALTER TABLE invoince CHANGE id_orders id_orders VARBINARY(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE order_product (order_id BINARY(255) NOT NULL, product_id BINARY(255) NOT NULL, quantity INT NOT NULL, INDEX FKhnfgqyjx3i80qoymrssls3kno (product_id), INDEX IDX_2530ADE68D9F6D38 (order_id), PRIMARY KEY(order_id, product_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE orders (id BINARY(255) NOT NULL, date_created DATE DEFAULT NULL, status VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE product (id BINARY(255) NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, picture_url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, price DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE order_product ADD CONSTRAINT FKl5mnj9n0di7k1v90yxnthkc73 FOREIGN KEY (order_id) REFERENCES orders (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE order_product ADD CONSTRAINT FKhnfgqyjx3i80qoymrssls3kno FOREIGN KEY (product_id) REFERENCES product (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE invoince CHANGE id_orders id_orders BINARY(1) NOT NULL');
        $this->addSql('ALTER TABLE invoince ADD CONSTRAINT invoince_FK FOREIGN KEY (id_orders) REFERENCES orders (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX invoince_FK ON invoince (id_orders)');
    }
}
