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
 * @ORM\Table(name="otec")
 * @ORM\Entity
 */
 class Otec
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
      * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
      */
  	 private $nombre;

    /**
     * @ORM\Column(name="apellido_pat", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
     */
  	 private $apellidoPat;
  	 
  	 /**
  	  * @ORM\Column(name="apellido_mat", type="string", length=255, nullable=false)
  	  *
  	  * @Assert\NotBlank()
  	  */
  	 private $apellidoMat;	 

     /**
      * @ORM\Column(name="email", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
      */
     private $email;
	
	/**
	 * @ORM\Column(name="fono_fijo", type="string", length=255, nullable=false)
	 *
	 * @Assert\NotBlank()
	 */
	 private $fonoFijo;

     /**
      * @ORM\Column(name="fono_movil", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
      */
     private $fonoMovil;
	

     /**
      * @ORM\Column(name="cargo", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
      */
  	 private $cargo;

  	
	 /**
	  * @ORM\Column(name="estado", type="string", length=255, nullable=false)
	  *
	  * @Assert\NotBlank()
	  */
	 private $estado;

     /**
      * @ORM\Column(name="rut", type="string", length=20, nullable=false)
      *
      * @Assert\NotBlank()
      */
     private $rut;
	
	/**
	 * @ORM\Column(name="jefe_directo", type="string", length=255, nullable=false)
	 *
	 * @Assert\NotBlank()
	 */
	 private $jefeDirecto;

     /**
      * @ORM\Column(name="fecha_nacimiento", type="date", nullable=false)
      *
      * @Assert\Date
      */
     private $fechaNacimiento;
	 
	 /**
	  * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
	  *
	  * @Assert\NotBlank()
	  */
	 private $direccion;

    
     /**
      * 
      * @ORM\ManyToOne(targetEntity="Region")
      * @ORM\JoinColumns({
      * @ORM\JoinColumn(name="region_id",    referencedColumnName="id")
      * })
      */     
	 private $region;
	 
	 /**
	  * 
	  * @ORM\ManyToOne(targetEntity="Comuna")
	  * @ORM\JoinColumns({
	  * @ORM\JoinColumn(name="comuna_id",    referencedColumnName="id")
	  * })
	  */
	 private $comuna;
	 
 }
