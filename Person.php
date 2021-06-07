<?php
class Persons {
    //caracteristicas cordiais
  private $namePerson; // nome do personagem
  private $namePlayer; // nome do jogador 
  private $class; // classe do personagem
  private $breed; //raça do personagem
  private $level; // level
  // infos de batalha
  protected $experience; // experiencia
  private $weaponSlot01, $enhancementWeapon01;// slot de arma e aprimaramento
  private $armorsSlot01, $enhancementArmor01;//slot de armadura e aprimoramento
  private $personTrend; // tendencia do personagem - https://cronicasdemilmundos.wordpress.com/2012/10/02/alinhamentos-do-dd-ate-o-3-5/
  private $divinityPerson; // divindade do personagem - https://dndbrasil.fandom.com/pt-br/wiki/Categoria:Divindades
  // infos de estilso do personagem
  private $sizePerson;//tamanho do personagem, porte do mesmo
  private $agePerson; // idade
  private $sexPerson; // sexo
  private $heightPerson;// altura
  private $weightPerson; // peso
  private $eyesPerson;// olhos
  private $hairPerson;// cabelo
  private $skinPerson;// pele
  //habilidades e modificadores
  private $strPerson, $strModPerson; // força e seu modificador
  private $dexPerson, $dexModPerson; // destreza e seu modificador
  private $conPerson, $conModPerson; // constituição e seu modificador
  private $intPerson, $intModPerson; // inteligencia e seu modificador
  private $wisPerson, $wisModPerson; // sabedoria e seu modificador
  private $chaPerson, $chaModPerson; // carisma e seu modificador
  //PV e CA
  protected $PV, $woundsAndVitalPoints, $bashingDam, $displacement; //ponts de vida, ferimentos e pontos vitais, dano de contusão e deslocamento
  protected $CA, $redDam; // classe de armadura e redução de dano.
  protected $touchCA, $surpriseCA; // toque e surpresa classe de armadura
  //iniciativa
  protected $initiative; 
  //teste de resistência
  private $resTestFort;
  private $resTestRefl;
  private $resTestVon;
  
  
}   
        
