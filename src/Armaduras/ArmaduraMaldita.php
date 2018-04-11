<?php
  namespace Juego\Armaduras;

  use Juego\Armadura;
  use Juego\Ataque;

  # Clase 'Armadura Maldita' (mas bajo nivel de protección que la armadura de Bronce, duplica el daño) que implementa la interface de una Armadura
  class ArmaduraMaldita implements Armadura {
    /* Métodos (Acciones) */
    public function absorberDanio( Ataque $ataque ) {
      return $ataque -> getDanio() * 2;
    }

  }
