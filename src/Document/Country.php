<?php
// Declare the namespace for the Pays class
namespace App\Document;

// Import the necessary classes and interfaces

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\Common\Collections\ArrayCollection;
use DateTime;

// Declare the Pays class, which represents a country document in the MongoDB database

#[MongoDB\Document]
 
class Country
{
    // Declare the $id property, which is the unique identifier for each country document
    #[MongoDB\Id(strategy: "AUTO")]
   
    protected $id;

    // Declare the $nomFr property, which stores the French name of the country
     #[MongoDB\Field(type:"string")]
     
    protected $nomFr;

    // Declare the $nomEn property, which stores the English name of the country
    #[MongoDB\Field(type:"string")]
     
    protected $nomEn;

    // Declare the $status property, which stores a boolean value indicating whether the country is active or not
   #[MongoDB\Field(type:"boolean")]
     
    protected $status;

    // Declare the $position property, which stores the position of the country in a list
    #[MongoDB\Field(type:"int")]
     
    protected $position;

    // Declare the $createdAt property, which stores the date and time when the country document was created
     #[MongoDB\Field(type: "date")]
    
    protected $createdAt;

    // Declare the $updatedAt property, which stores the date and time when the country document was last updated
   #[MongoDB\Field(type:"date")]
     
    protected $updatedAt;

    // Declare the constructor for the Pays class
    public function __construct()
    {
        // Set the default value for the $createdAt and $updatedAt properties
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    // Declare the getId method, which returns the unique identifier for the country document
    public function getId(): ?string
    {
        return $this->id;
    }

    // Declare the getNomFr method, which returns the French name of the country
    public function getNomFr(): ?string
    {
        return $this->nomFr;
    }

    // Declare the setNomFr method, which sets the French name of the country
    public function setNomFr(string $nomFr): self
    {
        $this->nomFr = $nomFr;

        // Update the $updatedAt property when the $nomFr property is updated
        $this->updatedAt = new DateTime();

        return $this;
    }

    // Declare the getNomEn method, which returns the English name of the country
    public function getNomEn(): ?string
    {
        return $this->nomEn;
    }

    // Declare the setNomEn method, which sets the English name of the country
    public function setNomEn(string $nomEn): self
    {
        $this->nomEn = $nomEn;

        // Update the $updatedAt property when the $nomEn property is updated
        $this->updatedAt = new DateTime();

        return $this;
    }

    // Declare the getStatus method, which returns the boolean value indicating whether the country is active or not
    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
?>