<?php

/*
* (c) Rodrigo Miranda <rmg.contacto@gmail.com>
*
* This file is part of the OMSBundle sample application.
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*
* Este archivo pertenece a la aplicación de prueba OMSBundle.
* El código fuente de la aplicación incluye un archivo llamado LICENSE
* con toda la información sobre el copyright y la licencia.
*/

namespace Tipddy\OMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente 
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
       * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
       *
       * @Assert\NotBlank()
       */
      private $apellido;
      
      /**
       * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
       *
       * @Assert\NotBlank()
       */
      private $descripcion;
   
     /**
      * @ORM\Column(name="razon_social", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
      */
      private $razonSocial;
      
      /**
       * @ORM\Column(name="tipo", type="char", length=2, nullable=false)
       *
       * @Assert\NotBlank()
       */
      private $tipo:
     
      /**
       * @ORM\Column(name="fecha_fundacion", type="date", nullable=false)
       *
       * @Assert\Date
       */
      private $fechaFundacion;
   
      /**
       * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
       *
       * @Assert\NotBlank()
       */
      private $direccion;
      
      
     /** 
      * @ORM\Column(name="region_id", type="integer")
      *
      * @Assert\Type(type="integer")
      * @Assert\Min(0)
      */
     private $region;
   
   
    /** 
     * @ORM\Column(name="comuna_id", type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
     */
     private $comuna;
      
      
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
       * @ORM\Column(name="email", type="string", length=100, nullable=false)
       *
       * @Assert\NotBlank()
       */
      private $email;
      
      
      /**
       * @ORM\Column(name="sucursal", type="char", length=2, nullable=false)
       *
       * @Assert\NotBlank()
       */
      private $sucursal;
     
     
     /**
      * @ORM\Column(name="nombre_encargado", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
      */
      private $nombreEncargado;
     
     /**
      * @ORM\Column(name="nombre_comercial", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
      */
      private $nombreComercial;
     
     
     /**
      * @ORM\Column(name="repre_legal", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
      */
      private $repreLegal;
   
     /**
      * @ORM\Column(name="repre_rut", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
      */
      private $repreRut;
     
     /**
      * @ORM\Column(name="repre_nombre", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
      */
      private $repreNombre;
      
      /**
       * @ORM\Column(name="repre_fono", type="string", length=255, nullable=false)
       *
       * @Assert\NotBlank()
       */
      private $repreFono;
      
      /**
       * @ORM\Column(name="repre_direccion", type="string", length=255, nullable=false)
       *
       * @Assert\NotBlank()
       */
      private $repreDireccion;
      
      /** 
       * @ORM\Column(name="repre_region_id", type="integer")
       *
       * @Assert\Type(type="integer")
       * @Assert\Min(0)
       */
      private $repreRegion;
   
     /** 
      * @ORM\Column(name="repre_comuna_id", type="integer")
      *
      * @Assert\Type(type="integer")
      * @Assert\Min(0)
      */
      private $repreComuna;
      
      
}

