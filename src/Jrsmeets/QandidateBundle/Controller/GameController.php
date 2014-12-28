<?php
namespace Jrsmeets\QandidateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Jrsmeets\QandidateBundle\Entity\Game;

class GameController extends Controller
{
    /**
     * @Route("/games")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $doctrine = $this->get('doctrine');
        $gameList = $doctrine->getRepository('Jrsmeets\QandidateBundle\Entity\Game')->findAll();

        return array('gamelist' => $gameList);
    }

    /**
     * @Route("/games")
     * @Method("POST")
     * @Template()
     */
    public function createAction()
    {
        $doctrine = $this->get('doctrine');
        $em = $doctrine->getManager();

        $Game = new Game();
        $Game
            ->setWord('troepgast')
            ->setStatus(Game::STATUS_BUSY)
            ->setTriesLeft(0)
            ->setGuessed('')
            ->setCreateTime(time())
            ->setCreateIp('0.0.0.0');
        $em->persist($Game);
        $em->flush();

        $gameId = $Game->getId();
}
