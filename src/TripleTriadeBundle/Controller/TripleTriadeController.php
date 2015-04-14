<?php

namespace TripleTriadeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TripleTriadeController extends Controller
{
    public function indexAction()
    {
    
    // Notre liste d'annonce en dur
    $listCards = array(
      array(
        'title'   => 'Bahamut',
        'id'      => 1,
        'author'  => 'Alexandre',
        'content' => 'Bahamut content',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Shiva',
        'id'      => 2,
        'author'  => 'Hugo',
        'content' => 'Shiva content',
        'date'    => new \Datetime())
    );

    // Et modifiez le 2nd argument pour injecter notre liste
    return $this->render('TripleTriadeBundle:TripleTriade:index.html.twig', array(
      'listCards' => $listCards
    ));
    }
    
    public function viewAction($id)
  {
    $card = array(
      'title'   => 'Ifrit',
      'id'      => $id,
      'author'  => 'Author',
      'content' => 'Ifrit content',
      'date'    => new \Datetime()
    );

    return $this->render('TripleTriadeBundle:TripleTriade:view.html.twig', array(
      'card' => $card
    ));
  }
  
   public function menuAction($limit)
  {
    // On fixe en dur une liste ici, bien entendu par la suite
    // on la récupérera depuis la BDD !
    $listCards = array(
      array('id' => 2, 'title' => 'Shiva'),
      array('id' => 5, 'title' => 'Carbuncle')
    );

    return $this->render('TripleTriadeBundle:TripleTriade:menu.html.twig', array(
      'listCards' => $listCards
    ));
  }
}
