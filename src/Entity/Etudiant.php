<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtudiantRepository::class)]
class Etudiant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nome = null;

    #[ORM\ManyToOne(inversedBy: 'etudiants')]
    private ?Institut $instit ;
     /**
     * @ORM\ManyToOne(targetEntity="institut")
     * @ORM\JoinColumn(name="institut_id",referencedColumnName="id")
     */
      //Private $instit;
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }
      /**
       * Set instit
       * 
       * @param \Entity\Institut $instit
       * 
       * @return Etudiant
       */
      /**
       * Get nome
       * 
       * @return \Entity\Institut
       */
    public function getInstit(): ?Institut
    {
        return $this->instit;
    }

    public function setInstit(?Institut $instit): static
    {
        $this->instit = $instit;

        return $this;
    }
    


}
