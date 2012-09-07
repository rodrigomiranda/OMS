<?php

/*
* (c) Rodrigo Miranda <rmg.contacto@gmail.com>
*
* This file is part of the Cupon sample application.
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*
* Este archivo pertenece a la aplicación de prueba Cupon.
* El código fuente de la aplicación incluye un archivo llamado LICENSE
* con toda la información sobre el copyright y la licencia.
*/

namespace Tipddy\OMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tipddy\UpvFormBundle\Entity\Inscripcion
 *
 * @ORM\Table(name="departamento")
 * @ORM\Entity
 */
 class Departamento 
 {
     /**
      * @var bigint $id
      *
      * @ORM\Column(name="id", type="bigint", nullable=false)
      * @ORM\Id
      * @ORM\GeneratedValue(strategy="IDENTITY")
      */
     private $id;
	 
	 /**
	  * @ORM\Column(name="etiqueta", type="string", length=255, nullable=false)
	  *
	  * @Assert\NotBlank()
	  */
	 private $etiqueta;

     /**
      * 
      * @ORM\ManyToOne(targetEntity="Otec")
      * @ORM\JoinColumns({
      * @ORM\JoinColumn(name="otec_id",    referencedColumnName="id")
      * })
      */
     private $otec;
 }
