<?php

namespace AppBundle\Entity\Board;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket todo: make single table
 *
 * @ORM\Table(name="board_ticket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Board\TicketRepository")
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var int
     */
    protected $age;

}

